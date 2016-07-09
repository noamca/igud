var B2EForm = {
    logMode: "console",
    instanceId: 0,
    state: "",
    owner: 0,
    userId: 0,
    formMode: "",
    hooks: [],
    isLoggedIn: false,
    guestMode: "",

    register: function (name, callback) {
        if ('undefined' == typeof (B2EForm.hooks[name]))
            B2EForm.hooks[name] = []
        B2EForm.hooks[name].push(callback)
    },    

    call: function (name, arguments) {
        var result = true;
        if ('undefined' != typeof (B2EForm.hooks[name]))
            for (i = 0; i < B2EForm.hooks[name].length; ++i) {
                B2EForm.debug(sformat("Executing init {0}", i));
                var res = B2EForm.hooks[name][i](arguments);
                if (false == res) { result = false; break; }
            }

        return result;
    },

    collectMethodsByType: [],
    collectMethodsById: [],

    registerCollectMethodByType: function (controlType, callback) {
        B2EForm.collectMethodsByType[controlType] = callback;
    },

    registerCollectMethodById: function (controlId, callback) {
        B2EForm.collectMethodsById[controlId] = callback;
    },

    collect: function(){
        var controls = B2EForm.getControlsCollection();
        var data = {};
        data.controlsData = {};

        //collect from hidden fields
        $(".eform-hidden-container input").each(function () {
            var control = $(this);
            var cid = control.attr('id');
            if ('undefined' != typeof (B2EForm.collectMethodsById[cid])) {
                B2EForm.debug(sformat("Execute collect by id for hidden [{0}]", cid));
                data.controlsData[cid] = B2EForm.collectMethodsById[cid](control);
            }
            else{
                data.controlsData[cid] = control.val();
            }
        });

        //collect from normal controls
        $(controls).each(function () {
            var control = $(this);
            var cid = B2EForm.getControlId(control);
            var ctype = B2EForm.getControlType(control);
            if ('undefined' != typeof (B2EForm.collectMethodsById[cid])) {
                B2EForm.debug(sformat("Execute collect by id for [{0}]", cid));
                data.controlsData[cid] = B2EForm.collectMethodsById[cid](control);
            }
            else if ('undefined' != typeof (B2EForm.collectMethodsByType[ctype])) {
                B2EForm.debug(sformat("Execute collect by type for [{0}]", ctype));
                data.controlsData[cid] = B2EForm.collectMethodsByType[ctype](control);
            }
        });
        B2EForm.debug("data", data);
        return data;
    },

    validateMethodsByType: [],
    validateMethodsById: [],

    registerValidateMethodByType: function (controlType, callback) {
        B2EForm.validateMethodsByType[controlType] = callback;
    },

    registerValidateMethodById: function (controlId, callback) {
        B2EForm.validateMethodsById[controlId] = callback;
    },

    validate: function (eventName) {
        B2EForm.log("Executing onPreValidate");
        var res = B2EForm.call('onPreValidate', eventName);
        B2EForm.log(res);
        if (!res) return false;

        B2EForm.log("Executing Validate");
        $(".eform .has-error").removeClass("has-error");

        if (B2EForm.guestMode == "FORM") {
            B2EForm.log("Executing Validate on user panel");
            var login_uid = $("#login_uid").val();
            if (login_uid == '') {
                var reg_nid = $("#registration_nid").val();
                if (reg_nid == '') {
                    alert("עליך להרשם או להתחבר כמשתמש");
                    B2EForm.scrollToElement(".login-form");
                    return false;
                }
                //if (!validateOnlyNumbers(reg_nid)) alert("יש להזין מספרים בלבד בתעודת הזהות");

                B2EForm.log("Executing Validate on registration panel");
                var reg_valid = true;
                $(".registration-form .reg-required").each(function () {
                    $(this).removeClass("has-error");
                    if ($(this).hasClass("reg-checkbox"))
                    {
                        if($(this).find('input:checked').length == 0)
                        {
                            reg_valid = false;
                            $(this).addClass("has-error");
                        }
                    }
                    else {
                        var ctrl = $(this).find(".form-control");
                        var val = ctrl.val();
                        if (val == '' || val == '-1' || $(this).hasClass("user-invalid")) {
                            reg_valid = false;
                            $(this).addClass("has-error");
                        }
                    }                    
                });

                if (!reg_valid) {
                    B2EForm.scrollToElement(".registration-form");
                    return false;
                }

                $("#registration_password").parent().removeClass("has-error");
                $("#registration_password_verify").parent().removeClass("has-error");

                //validate passwords
                var pass = $("#registration_password").val();

                if (pass.length < 6) {
                    B2EForm.setError( $("#registration_password"), "על הסיסמא להכיל לפחות 6 תווים");                   
                    B2EForm.scrollToElement(".registration-form");
                    return false;                    
                }

                var passv = $("#registration_password_verify").val();
                if(pass != passv)
                {
                    B2EForm.setError($("#registration_password"));
                    B2EForm.setError($("#registration_password_verify"),"הסיסמאות אינן זהות, אנא ודאו את נכונות הסיסמא");
                    B2EForm.scrollToElement(".registration-form");
                    return false;
                }
            }
            else {
                B2EForm.log("Executing Validate on login panel");
                var login_valid = true;
                var login_pass = $("#login_pass").val();
                $("#login_pass").removeClass("has-error");
                if (login_pass == '') {
                    $("#login_pass").addClass("has-error");
                }
            }
        }

        var controls = B2EForm.getControlsCollection();
        var result = true;
        $(controls).each(function () {
            var control = $(this);
            
            var cid = B2EForm.getControlId(control);
            var ctype = B2EForm.getControlType(control);
            if ('undefined' != typeof (B2EForm.validateMethodsById[cid])) {
                B2EForm.log(sformat("Execute validate by id for [{0}]", cid));
                result = B2EForm.validateMethodsById[cid](control);
            }
            else if ('undefined' != typeof (B2EForm.validateMethodsByType[ctype])) {
                B2EForm.log(sformat("Execute validate by type for [{0}]", ctype));
                result = B2EForm.validateMethodsByType[ctype](control);
            }
            if (!result) {
                control.addClass("has-error");
                B2EForm.scrollToElement(control);
                return false;
            }
        });        
        if(!result) return false;

        B2EForm.log("Executing onPostValidate");
        if (!B2EForm.call('onPostValidate', eventName)) return false;
        return true;
    },

    setError: function(element, msg){
        var html = msg == undefined ? "" : msg;

        var formGroup = element.parent().parent();
        formGroup.addClass("has-error");

        formGroup.find(".error-block").html(html);
    },

    scrollToElement: function(element){
        $('html, body').animate({
            scrollTop: $(element).offset().top
        }, 500);
    },

    submitForm: function (event) {
        B2EForm.log("Executing submit form");
        if (!B2EForm.validate(event)) return false;
        var data = B2EForm.collect();
        B2EForm.call("onPreSubmit", event);

        var token = $("input[id$=hdnToken]").val();
        B2EForm.log("collected data:", JSON.stringify(data));
        B2EForm.log(sformat("Executing form handler with event {0}", event));

        if (B2EForm.formMode.toUpperCase().indexOf("NEW") >= 0){
            $(".eform-actions .form-action").hide();            
        }

        $(".submit-message").removeClass("active");

        if (B2EForm.guestMode == "FORM") {
            var action = "login";
            
            var uid = $("#login_uid").val();
            var pass = $("#login_password").val();

            var udata = {};

            if (uid != "") {
                udata = { uid: uid, pass: pass };
                $(".submit-login-message").addClass("active");
            }
            else {
                $(".user-panel *[id^=registration_]").each(function () {
                    var id = $(this).attr("id");
                    udata[id] = $(this).val();
                });

                udata["registration_gender"] = $('input[name="gender"]:checked').val();
                action = "register";
                $(".submit-register-message").addClass("active");
            }

            udata['token'] = token;
            $("#login_password").parent().parent().removeClass("has-error");
            $.ajax({
                type: "POST",
                cache: false,
                url: "/applications/iaa/events/eventformloginhandler.ashx?action=" + action,
                data: udata,
                success: function (res) {
                    $(".submit-message").removeClass("active");
                    if (res == "ok") {
                        B2EForm.submitFormInner(token, event, data);
                    }
                    else if(res == "registered")
                    {
                        alert("הינך רשום כבר למירוץ זה. לחץ להעברה לטופס הרישום");
                        location.reload();
                    }
                    else {
                        $(".eform-actions .form-action").show();
                        if (uid != "") {
                            $("#login_error").html(res);
                            $("#login_password").parent().parent().addClass("has-error");
                            B2EForm.scrollToElement(".login-form");
                        }
                    }
                }
            });
        }
        else {
            B2EForm.submitFormInner(token, event, data);
        }
    },

    submitFormInner: function (token, event, data) {
        $(".submit-pay-message").addClass("active");
        $.ajax({
            type: "POST",
            cache: false,
            url: "/applications/iaa/events/eventformhandler.ashx?event=" + event + "&token=" + token,
            data: JSON.stringify(data),
            dataType: "json",
            success: function (jres) {
                //Metronic.unblockUI('.main-portlet .portlet-body');
                //alert(res);
                B2EForm.log("handler result:",jres);
                var msg = jres.message;
                var msgtype = jres.result == "1" ? "success" : "error";
                //toastr[msgtype](msg);

                if (jres.result == "1") {
                    $("input[id$=hdnRequestId]").val(jres.request);
                    if (!B2EForm.call("onPostSubmit")) return;

                    var newUserMode = jres.usermode;
                    //var cost = getPayment();
                    //alert(cost);
                    if (newUserMode.toUpperCase().indexOf("MOVETOPAYMENT") >= 0)
                    {
                        $(".submit-pay-message").text(jres.message);
                        //location.href = "/applications/iaa/events/Tranzila.aspx?token=" + jres.request + "&cost=" + cost;
                        var lang = $("input[id$=hdnLangId]").val();
                        var pdesc = document.title;
                        if ($("input[id$=hdnEventName]").length > 0) pdesc = $("input[id$=hdnEventName]").val();
                        var url = "/applications/iaa/events/Tranzila.aspx?pdesc=" + pdesc + "&ftoken=" + token;
                        if(lang == "0") url += "&lang=us";
                        location.href = url;
                        return;
                    }

                    var href = location.href;
                    if (href.indexOf("?") > 0) href = href.split("?")[0];
                    location.href = href + "?request=" + jres.request;
                }
                else {
                    $(".submit-message").removeClass("active");
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.error("Error");
            }
        });
    },

    getControlsCollection: function(){
        return $(".eform-body .eform-control");
    },

    getControlId: function (control) {
        return control.attr("id");
    },

    getControlType: function(control){
        return control.attr("data-control-type");
    },

    getRequestId: function(){
        return $("input[id$=hdnRequestId]").val();
    },

    log: function(msg, data){        
        var mode = B2EForm.logMode;
        switch (mode) {
            case "console":
                msg = sformat("[B2EForm] {0}", msg);
                if ("undefined" != typeof(data)) console.log(msg, data);
                else console.log(msg);
                break;
            case "alert":
                alert(msg);
                break;
        }
    },

    debug: function(msg, data){
        var mode = "debug";
        if (mode == "debug") {
            msg = sformat("[B2EForm-Debug] {0}", msg);
            if ("undefined" != typeof (data)) console.log(msg, data);
            else console.log(msg);
        }
    },
        
    init: function () {
        var mode = urlParams["log"];
        if (mode != undefined) B2EForm.logMode = mode;

        B2EForm.log("init form");

        B2EForm.owner = $("input[id$=hdnOwner]").val();
        B2EForm.userId = $("input[id$=hdnUserId]").val();
        B2EForm.formMode = $("input[id$=hdnFormMode]").val();
        B2EForm.instanceId = B2EForm.getRequestId();
        B2EForm.state = $("input[id$=hdnState]").val();
        B2EForm.log(sformat("User {0} on owner {1} in mode {2} for instance {3}", B2EForm.userId, B2EForm.owner, B2EForm.formMode, B2EForm.instanceId));
        B2EForm.isLoggedIn = B2EForm.owner != 10000000;

        if (!B2EForm.isLoggedIn) {
            if ($(".user-panel").length == 0) B2EForm.guestMode = "REDIRECT";
            else B2EForm.guestMode = "FORM";
        }        

        $('.date').each(function () {
            var inputgroup = $(this);
            var container = inputgroup;
            inputgroup.datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                //startView: 'decade',
                rtl: false,
                language: 'he-IL',
                orientation: "top left",
                container: container
            });
        });

        $(".input-mask").inputmask();
        //$(":input").inputmask();

        $('.eform-control.b2ectlNumber').find("input").on("keydown", function (e) {
            validateInputNumber(e);
            //if (isNaN($(this).val())) {
            //    alert('השדה הנ"ל צריך להכיל מספרים בלבד');
            //}
        });

        $(".eform-control.required").each(function () {
            var ctrl = $(this);
            if (ctrl.hasClass("eform-checkbox"))
                ctrl.find("input").after("<i class='reqa'>* </i>");
            else ctrl.find(".control-label").append("<i class='reqa'> *</i>");
        });

        B2EForm.registerCollectMethodByType("textbox", function (control) {
            var cid = B2EForm.getControlId(control);
            var val = control.find("input").val();
            B2EForm.log(sformat("[{0}] text collect by type - {1}", cid, val));
            return val;
        });

        B2EForm.registerValidateMethodByType("textbox", function (control) {            
            if (control.hasClass("required")) {
                var cid = B2EForm.getControlId(control);
                var val = control.find("input").val();
                if (val == '') {
                    B2EForm.log(sformat("[{0}] text validate failed - empty value", cid));
                    return false;
                }                
            }
            return true;
        });

        B2EForm.registerCollectMethodByType("checkbox", function (control) {
            var cid = B2EForm.getControlId(control);
            var val = control.find("input").is(":checked") ? "1" : "0";
            B2EForm.log(sformat("[{0}] checkbox collect by type - {1}", cid, val));
            return val;
        });

        B2EForm.registerValidateMethodByType("checkbox", function (control) {
            if (control.hasClass("required")) {
                var cid = B2EForm.getControlId(control);
                var val = control.find("input").is(":checked") ? "1" : "0";
                if (val == '0') {
                    B2EForm.log(sformat("[{0}] checkbox validate failed - not checked", cid));
                    return false;
                }                
            }
            return true;
        });

        B2EForm.registerCollectMethodByType("radiolist", function (control) {
            var cid = B2EForm.getControlId(control);
            var selectedOption = control.find("input:checked");
            var val = "";
            if(selectedOption.length > 0)
                val = selectedOption.val();
            B2EForm.log(sformat("[{0}] radiolist collect by type - {1}", cid, val));
            return val;
        });

        B2EForm.registerValidateMethodByType("radiolist", function (control) {
            if (control.hasClass("required")) {
                var cid = B2EForm.getControlId(control);
                var selectedOption = control.find("input:checked");
                if(selectedOption.length == 0){
                    B2EForm.log(sformat("[{0}] radiolist validate failed - no option selected", cid));
                    return false;
                }
            }
            return true;
        });

        $(".eform-actions .form-action").click(function (e) {
            e.preventDefault();
            //var valid = B2EForm.validate();
            var eventName = $(this).attr("data-event");
            B2EForm.submitForm(eventName);
        });

        if (B2EForm.guestMode == "FORM") {
            //$(".login-form input").val('');
            //$(".registration-form input, .registration-form select").val('');
            $("#registration_nid").on("keydown", function (e) { return validateInputNumber(e); }).on("blur", function () {
                var nid = $(this).val();
                //if (!validateOnlyNumbers(nid)) {
                //    formGroup.addClass("has-error").addClass("user-invalid");
                //    return false;
                //}
                var formGroup = $("#registration_nid").parent().parent();
                formGroup.removeClass("has-error").removeClass("has-success").removeClass("user-invalid");

                if (nid == '') return;
                var token = $("input[id$=hdnToken]").val();
                $.get("/applications/iaa/events/EventFormLoginHandler.ashx", { token: token, uid: nid }, function (res) {

                    if (res != "valid") {
                        formGroup.addClass("has-error").addClass("user-invalid");
                    }
                    else formGroup.addClass("has-success");
                });
            });
        }

        B2EForm.call('init');
    }
}

function validateInputNumber(e) {
    //alert(e.keyCode);
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: Ctrl+C
        (e.keyCode == 67 && e.ctrlKey === true) ||
        // Allow: Ctrl+X
        (e.keyCode == 88 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
}

function validateOnlyNumbers(str) {
    var num = str.match(/^\d+$/.$);
    //alert(isNaN(str));
    return num;
}