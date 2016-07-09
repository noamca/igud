B2EForm.register('init', function () {
    B2EForm.log("generic sportevent init");

    var isNew = B2EForm.formMode == "NEW" || B2EForm.formMode == "ADMINNEW";
    
    var lang = $("input[id$=hdnLangId]").val();    

    if (!isNew) {
        
        var el = "<div id=\"pnlMessage\" class=\"form-message\"></div>";
        $(".eform-body").prepend(el);
        var formMessage = $("#pnlMessage");

        if (B2EForm.state.toUpperCase() == "CANCELED") {
            formMessage.addClass("badmsg");
            if (lang == "1") formMessage.text("הרישום בוטל בהצלחה.");
            else formMessage.text("Registration was canceled.");
        }
        else {


            var tranzilaResponse = $("input[id$=tranzilaResponse]").val();
            if (tranzilaResponse != "") {
                if (tranzilaResponse == "1") {
                    formMessage.addClass("goodmsg");
                    var payDate = $("input[id$=hdnPayDate]").val();
                    var cost = $("input[id$=hdnCost]").val();
                    if (cost == '' || cost == "0") {
                        if (lang == "1") formMessage.text(sformat("רישום למירוץ הסתיים בהצלחה בתאריך {0}", payDate));
                        else formMessage.text(sformat("Your registration request was processed successfully in {0}.", payDate));
                    }
                    else {
                        if (lang == "1") formMessage.text(sformat("תשלום על סך {0} ש\"ח בוצע בהצלחה בתאריך {1}.", cost, payDate));
                        else formMessage.text(sformat("A payment of {0} ILS was successfully processed in {1}.", cost, payDate));
                    }
                }
                else if (tranzilaResponse == "2") {
                    formMessage.addClass("goodmsg");
                    var payDate = $("input[id$=hdnPayDate]").val();
                    if (lang == "1") formMessage.text(sformat("רישום למירוץ על ידי צוות המירוץ בוצע בהצלחה בתאריך {0}.", payDate));
                    else formMessage.text(sformat("Registration by event team was successfully done in {0}.", cost, payDate));
                }
                else {
                    formMessage.addClass("badmsg");
                    if (lang == "1") formMessage.text("נסיון התשלום האחרון נכשל. אנא נסו שוב על ידי לחיצה על 'לתשלום'.");
                    else formMessage.text("Your last payment attempt failed. Please try again by clicking on the 'Submit' button.");
                }
            }
            else if(B2EForm.formMode != "RO"){
                formMessage.addClass("bg-warning");
                if (lang == "1") formMessage.text("בקשת הרישום התקבלה. לחצו על כפתור 'לתשלום' להמשך תשלום.");
                else formMessage.text("Your request was received. Please press 'Payment' to redirect to payment form.");
            }
        }

        evaluateHealthDeclarationMessage();
    }
    else {
        $(".health-question input").click(function () {
            evaluateHealthDeclarationMessage();
        });
    }

    if (B2EForm.formMode == "MOVETOPAYMENT") {
        $(".btn-submit.form-action").text(lang == '0' ? 'Payemnt' : 'לתשלום')
    }
    else if (B2EForm.formMode == "ADMINNEW" || B2EForm.formMode == "MOVETOPAYMENTADMIN") {
        $(".eform-actions").prepend("<div class='alert alert-warning panel-admin form-horizontal'></div>");
        $(".panel-admin").append("<div class='form-group'><label class='control-label col-md-1'>עלות:</label><div class='col-md-2'><input class='form-control' id='hdnAdminPayment'/></div></div>");
        $(".panel-admin").append("<div class='form-group'><label class='control-label col-md-1'>הערות:</label><div class='col-md-11'><input class='form-control' id='hdnRemarks'/></div></div>");
    }
});

function evaluateHealthDeclarationMessage() {
    var healthDeclarations = $(".health-question");
    $("#pnlHealthMessage").remove();
    $(".eform-actions a[id$=btnSubmit]").removeAttr("disabled", true).removeClass("disabled");
    if (healthDeclarations.length > 0) {
        var healthValid = "1";
        $.each(healthDeclarations, function () {
            var control = $(this);
            var selectedOption = control.find("input:checked");
            var val = selectedOption.val();
            if (val == "כן") {
                healthValid = "0";
                return false; //break
            }
        });
        if (healthValid == "0") {
            var pnl = $("#pnlHealthMessage");
            var msg = "לא ניתן להמשיך בתהליך ההרשמה עד להמצאת אישור רפואי המאשר את פעילותך. יש לשלוח מסמך זה לכתובת המופיעה בדף <a target='_blank' href='http://www.runisrael.org.il/iaa/content/11874'>צור קשר</a>";
            if(pnl.length == 0) $("#health5").after("<div id='pnlHealthMessage' class='badmsg'>" + msg + "</div>");
            else pnl.text(msg);

            //pnl = $("#pnlHealthMessage");
            //http://www.runisrael.org.il/iaa/content/11874
            if (B2EForm.formMode != "ADMINNEW" && B2EForm.formMode != "MOVETOPAYMENTADMIN")
                $(".eform-actions a[id$=btnSubmit]").attr("disabled", true).addClass("disabled");
        }
        $("input[id$=hdnHealthDeclaration]").val(healthValid);
    }
}

B2EForm.register('onPostValidate', function (eventName) {    

    if (B2EForm.formMode == "ADMINNEW" || B2EForm.formMode == "MOVETOPAYMENTADMIN") {
        B2EForm.log('onPostValidate AdminMode - Event - ' + eventName);
        if (eventName.toUpperCase() == "APPROVE") {
            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var hour = d.getHours();
            var minutes = d.getMinutes();

            var now = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + d.getFullYear();
            now += " " + (hour < 10 ? '0' : '') + hour + ":" + (minutes < 10 ? '0' : '') + minutes;        
            $("#tranzilaResponse").val("2");
            $("#hdnPayDate").val(now);
            $("#hdnCost").val("0");
            $("#transactionNumber").val("0000");
        }

        var comment = $("#hdnRemarks").val();
        $("input[id$=hdnAdminComments]").val(comment);
        var adminPay = $("#hdnAdminPayment").val();
        $("input[id$=hdnAdminCost]").val(adminPay);
        $("input[id$=hdnCost]").val(adminPay);
    }
});
