/*!
 * jQuery blockUI plugin
 * Version 2.70.0-2014.11.23
 * Requires jQuery v1.7 or later
 *
 * Examples at: http://malsup.com/jquery/block/
 * Copyright (c) 2007-2013 M. Alsup
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Thanks to Amir-Hossein Sobhi for some excellent contributions!
 */

; (function () {
    /*jshint eqeqeq:false curly:false latedef:false */
    "use strict";

    function setup($) {
        $.fn._fadeIn = $.fn.fadeIn;

        var noOp = $.noop || function () { };

        // this bit is to ensure we don't call setExpression when we shouldn't (with extra muscle to handle
        // confusing userAgent strings on Vista)
        var msie = /MSIE/.test(navigator.userAgent);
        var ie6 = /MSIE 6.0/.test(navigator.userAgent) && ! /MSIE 8.0/.test(navigator.userAgent);
        var mode = document.documentMode || 0;
        var setExpr = $.isFunction(document.createElement('div').style.setExpression);

        // global $ methods for blocking/unblocking the entire page
        $.blockUI = function (opts) { install(window, opts); };
        $.unblockUI = function (opts) { remove(window, opts); };

        // convenience method for quick growl-like notifications  (http://www.google.com/search?q=growl)
        $.growlUI = function (title, message, timeout, onClose) {
            var $m = $('<div class="growlUI"></div>');
            if (title) $m.append('<h1>' + title + '</h1>');
            if (message) $m.append('<h2>' + message + '</h2>');
            if (timeout === undefined) timeout = 3000;

            // Added by konapun: Set timeout to 30 seconds if this growl is moused over, like normal toast notifications
            var callBlock = function (opts) {
                opts = opts || {};

                $.blockUI({
                    message: $m,
                    fadeIn: typeof opts.fadeIn !== 'undefined' ? opts.fadeIn : 700,
                    fadeOut: typeof opts.fadeOut !== 'undefined' ? opts.fadeOut : 1000,
                    timeout: typeof opts.timeout !== 'undefined' ? opts.timeout : timeout,
                    centerY: false,
                    showOverlay: false,
                    onUnblock: onClose,
                    css: $.blockUI.defaults.growlCSS
                });
            };

            callBlock();
            var nonmousedOpacity = $m.css('opacity');
            $m.mouseover(function () {
                callBlock({
                    fadeIn: 0,
                    timeout: 30000
                });

                var displayBlock = $('.blockMsg');
                displayBlock.stop(); // cancel fadeout if it has started
                displayBlock.fadeTo(300, 1); // make it easier to read the message by removing transparency
            }).mouseout(function () {
                $('.blockMsg').fadeOut(1000);
            });
            // End konapun additions
        };

        // plugin method for blocking element content
        $.fn.block = function (opts) {
            if (this[0] === window) {
                $.blockUI(opts);
                return this;
            }
            var fullOpts = $.extend({}, $.blockUI.defaults, opts || {});
            this.each(function () {
                var $el = $(this);
                if (fullOpts.ignoreIfBlocked && $el.data('blockUI.isBlocked'))
                    return;
                $el.unblock({ fadeOut: 0 });
            });

            return this.each(function () {
                if ($.css(this, 'position') == 'static') {
                    this.style.position = 'relative';
                    $(this).data('blockUI.static', true);
                }
                this.style.zoom = 1; // force 'hasLayout' in ie
                install(this, opts);
            });
        };

        // plugin method for unblocking element content
        $.fn.unblock = function (opts) {
            if (this[0] === window) {
                $.unblockUI(opts);
                return this;
            }
            return this.each(function () {
                remove(this, opts);
            });
        };

        $.blockUI.version = 2.70; // 2nd generation blocking at no extra cost!

        // override these in your code to change the default behavior and style
        $.blockUI.defaults = {
            // message displayed when blocking (use null for no message)
            message: '<h1>Please wait...</h1>',

            title: null,		// title string; only used when theme == true
            draggable: true,	// only used when theme == true (requires jquery-ui.js to be loaded)

            theme: false, // set to true to use with jQuery UI themes

            // styles for the message when blocking; if you wish to disable
            // these and use an external stylesheet then do this in your code:
            // $.blockUI.defaults.css = {};
            css: {
                padding: 0,
                margin: 0,
                width: '30%',
                top: '40%',
                left: '35%',
                textAlign: 'center',
                color: '#000',
                border: '3px solid #aaa',
                backgroundColor: '#fff',
                cursor: 'wait'
            },

            // minimal style set used when themes are used
            themedCSS: {
                width: '30%',
                top: '40%',
                left: '35%'
            },

            // styles for the overlay
            overlayCSS: {
                backgroundColor: '#000',
                opacity: 0.6,
                cursor: 'wait'
            },

            // style to replace wait cursor before unblocking to correct issue
            // of lingering wait cursor
            cursorReset: 'default',

            // styles applied when using $.growlUI
            growlCSS: {
                width: '350px',
                top: '10px',
                left: '',
                right: '10px',
                border: 'none',
                padding: '5px',
                opacity: 0.6,
                cursor: 'default',
                color: '#fff',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                'border-radius': '10px'
            },

            // IE issues: 'about:blank' fails on HTTPS and javascript:false is s-l-o-w
            // (hat tip to Jorge H. N. de Vasconcelos)
            /*jshint scripturl:true */
            iframeSrc: /^https/i.test(window.location.href || '') ? 'javascript:false' : 'about:blank',

            // force usage of iframe in non-IE browsers (handy for blocking applets)
            forceIframe: false,

            // z-index for the blocking overlay
            baseZ: 1000,

            // set these to true to have the message automatically centered
            centerX: true, // <-- only effects element blocking (page block controlled via css above)
            centerY: true,

            // allow body element to be stetched in ie6; this makes blocking look better
            // on "short" pages.  disable if you wish to prevent changes to the body height
            allowBodyStretch: true,

            // enable if you want key and mouse events to be disabled for content that is blocked
            bindEvents: true,

            // be default blockUI will supress tab navigation from leaving blocking content
            // (if bindEvents is true)
            constrainTabKey: true,

            // fadeIn time in millis; set to 0 to disable fadeIn on block
            fadeIn: 200,

            // fadeOut time in millis; set to 0 to disable fadeOut on unblock
            fadeOut: 400,

            // time in millis to wait before auto-unblocking; set to 0 to disable auto-unblock
            timeout: 0,

            // disable if you don't want to show the overlay
            showOverlay: true,

            // if true, focus will be placed in the first available input field when
            // page blocking
            focusInput: true,

            // elements that can receive focus
            focusableElements: ':input:enabled:visible',

            // suppresses the use of overlay styles on FF/Linux (due to performance issues with opacity)
            // no longer needed in 2012
            // applyPlatformOpacityRules: true,

            // callback method invoked when fadeIn has completed and blocking message is visible
            onBlock: null,

            // callback method invoked when unblocking has completed; the callback is
            // passed the element that has been unblocked (which is the window object for page
            // blocks) and the options that were passed to the unblock call:
            //	onUnblock(element, options)
            onUnblock: null,

            // callback method invoked when the overlay area is clicked.
            // setting this will turn the cursor to a pointer, otherwise cursor defined in overlayCss will be used.
            onOverlayClick: null,

            // don't ask; if you really must know: http://groups.google.com/group/jquery-en/browse_thread/thread/36640a8730503595/2f6a79a77a78e493#2f6a79a77a78e493
            quirksmodeOffsetHack: 4,

            // class name of the message block
            blockMsgClass: 'blockMsg',

            // if it is already blocked, then ignore it (don't unblock and reblock)
            ignoreIfBlocked: false
        };

        // private data and functions follow...

        var pageBlock = null;
        var pageBlockEls = [];

        function install(el, opts) {
            var css, themedCSS;
            var full = (el == window);
            var msg = (opts && opts.message !== undefined ? opts.message : undefined);
            opts = $.extend({}, $.blockUI.defaults, opts || {});

            if (opts.ignoreIfBlocked && $(el).data('blockUI.isBlocked'))
                return;

            opts.overlayCSS = $.extend({}, $.blockUI.defaults.overlayCSS, opts.overlayCSS || {});
            css = $.extend({}, $.blockUI.defaults.css, opts.css || {});
            if (opts.onOverlayClick)
                opts.overlayCSS.cursor = 'pointer';

            themedCSS = $.extend({}, $.blockUI.defaults.themedCSS, opts.themedCSS || {});
            msg = msg === undefined ? opts.message : msg;

            // remove the current block (if there is one)
            if (full && pageBlock)
                remove(window, { fadeOut: 0 });

            // if an existing element is being used as the blocking content then we capture
            // its current place in the DOM (and current display style) so we can restore
            // it when we unblock
            if (msg && typeof msg != 'string' && (msg.parentNode || msg.jquery)) {
                var node = msg.jquery ? msg[0] : msg;
                var data = {};
                $(el).data('blockUI.history', data);
                data.el = node;
                data.parent = node.parentNode;
                data.display = node.style.display;
                data.position = node.style.position;
                if (data.parent)
                    data.parent.removeChild(node);
            }

            $(el).data('blockUI.onUnblock', opts.onUnblock);
            var z = opts.baseZ;

            // blockUI uses 3 layers for blocking, for simplicity they are all used on every platform;
            // layer1 is the iframe layer which is used to supress bleed through of underlying content
            // layer2 is the overlay layer which has opacity and a wait cursor (by default)
            // layer3 is the message content that is displayed while blocking
            var lyr1, lyr2, lyr3, s;
            if (msie || opts.forceIframe)
                lyr1 = $('<iframe class="blockUI" style="z-index:' + (z++) + ';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="' + opts.iframeSrc + '"></iframe>');
            else
                lyr1 = $('<div class="blockUI" style="display:none"></div>');

            if (opts.theme)
                lyr2 = $('<div class="blockUI blockOverlay ui-widget-overlay" style="z-index:' + (z++) + ';display:none"></div>');
            else
                lyr2 = $('<div class="blockUI blockOverlay" style="z-index:' + (z++) + ';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>');

            if (opts.theme && full) {
                s = '<div class="blockUI ' + opts.blockMsgClass + ' blockPage ui-dialog ui-widget ui-corner-all" style="z-index:' + (z + 10) + ';display:none;position:fixed">';
                if (opts.title) {
                    s += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' + (opts.title || '&nbsp;') + '</div>';
                }
                s += '<div class="ui-widget-content ui-dialog-content"></div>';
                s += '</div>';
            }
            else if (opts.theme) {
                s = '<div class="blockUI ' + opts.blockMsgClass + ' blockElement ui-dialog ui-widget ui-corner-all" style="z-index:' + (z + 10) + ';display:none;position:absolute">';
                if (opts.title) {
                    s += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' + (opts.title || '&nbsp;') + '</div>';
                }
                s += '<div class="ui-widget-content ui-dialog-content"></div>';
                s += '</div>';
            }
            else if (full) {
                s = '<div class="blockUI ' + opts.blockMsgClass + ' blockPage" style="z-index:' + (z + 10) + ';display:none;position:fixed"></div>';
            }
            else {
                s = '<div class="blockUI ' + opts.blockMsgClass + ' blockElement" style="z-index:' + (z + 10) + ';display:none;position:absolute"></div>';
            }
            lyr3 = $(s);

            // if we have a message, style it
            if (msg) {
                if (opts.theme) {
                    lyr3.css(themedCSS);
                    lyr3.addClass('ui-widget-content');
                }
                else
                    lyr3.css(css);
            }

            // style the overlay
            if (!opts.theme /*&& (!opts.applyPlatformOpacityRules)*/)
                lyr2.css(opts.overlayCSS);
            lyr2.css('position', full ? 'fixed' : 'absolute');

            // make iframe layer transparent in IE
            if (msie || opts.forceIframe)
                lyr1.css('opacity', 0.0);

            //$([lyr1[0],lyr2[0],lyr3[0]]).appendTo(full ? 'body' : el);
            var layers = [lyr1, lyr2, lyr3], $par = full ? $('body') : $(el);
            $.each(layers, function () {
                this.appendTo($par);
            });

            if (opts.theme && opts.draggable && $.fn.draggable) {
                lyr3.draggable({
                    handle: '.ui-dialog-titlebar',
                    cancel: 'li'
                });
            }

            // ie7 must use absolute positioning in quirks mode and to account for activex issues (when scrolling)
            var expr = setExpr && (!$.support.boxModel || $('object,embed', full ? null : el).length > 0);
            if (ie6 || expr) {
                // give body 100% height
                if (full && opts.allowBodyStretch && $.support.boxModel)
                    $('html,body').css('height', '100%');

                // fix ie6 issue when blocked element has a border width
                if ((ie6 || !$.support.boxModel) && !full) {
                    var t = sz(el, 'borderTopWidth'), l = sz(el, 'borderLeftWidth');
                    var fixT = t ? '(0 - ' + t + ')' : 0;
                    var fixL = l ? '(0 - ' + l + ')' : 0;
                }

                // simulate fixed position
                $.each(layers, function (i, o) {
                    var s = o[0].style;
                    s.position = 'absolute';
                    if (i < 2) {
                        if (full)
                            s.setExpression('height', 'Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.support.boxModel?0:' + opts.quirksmodeOffsetHack + ') + "px"');
                        else
                            s.setExpression('height', 'this.parentNode.offsetHeight + "px"');
                        if (full)
                            s.setExpression('width', 'jQuery.support.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"');
                        else
                            s.setExpression('width', 'this.parentNode.offsetWidth + "px"');
                        if (fixL) s.setExpression('left', fixL);
                        if (fixT) s.setExpression('top', fixT);
                    }
                    else if (opts.centerY) {
                        if (full) s.setExpression('top', '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"');
                        s.marginTop = 0;
                    }
                    else if (!opts.centerY && full) {
                        var top = (opts.css && opts.css.top) ? parseInt(opts.css.top, 10) : 0;
                        var expression = '((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + ' + top + ') + "px"';
                        s.setExpression('top', expression);
                    }
                });
            }

            // show the message
            if (msg) {
                if (opts.theme)
                    lyr3.find('.ui-widget-content').append(msg);
                else
                    lyr3.append(msg);
                if (msg.jquery || msg.nodeType)
                    $(msg).show();
            }

            if ((msie || opts.forceIframe) && opts.showOverlay)
                lyr1.show(); // opacity is zero
            if (opts.fadeIn) {
                var cb = opts.onBlock ? opts.onBlock : noOp;
                var cb1 = (opts.showOverlay && !msg) ? cb : noOp;
                var cb2 = msg ? cb : noOp;
                if (opts.showOverlay)
                    lyr2._fadeIn(opts.fadeIn, cb1);
                if (msg)
                    lyr3._fadeIn(opts.fadeIn, cb2);
            }
            else {
                if (opts.showOverlay)
                    lyr2.show();
                if (msg)
                    lyr3.show();
                if (opts.onBlock)
                    opts.onBlock.bind(lyr3)();
            }

            // bind key and mouse events
            bind(1, el, opts);

            if (full) {
                pageBlock = lyr3[0];
                pageBlockEls = $(opts.focusableElements, pageBlock);
                if (opts.focusInput)
                    setTimeout(focus, 20);
            }
            else
                center(lyr3[0], opts.centerX, opts.centerY);

            if (opts.timeout) {
                // auto-unblock
                var to = setTimeout(function () {
                    if (full)
                        $.unblockUI(opts);
                    else
                        $(el).unblock(opts);
                }, opts.timeout);
                $(el).data('blockUI.timeout', to);
            }
        }

        // remove the block
        function remove(el, opts) {
            var count;
            var full = (el == window);
            var $el = $(el);
            var data = $el.data('blockUI.history');
            var to = $el.data('blockUI.timeout');
            if (to) {
                clearTimeout(to);
                $el.removeData('blockUI.timeout');
            }
            opts = $.extend({}, $.blockUI.defaults, opts || {});
            bind(0, el, opts); // unbind events

            if (opts.onUnblock === null) {
                opts.onUnblock = $el.data('blockUI.onUnblock');
                $el.removeData('blockUI.onUnblock');
            }

            var els;
            if (full) // crazy selector to handle odd field errors in ie6/7
                els = $('body').children().filter('.blockUI').add('body > .blockUI');
            else
                els = $el.find('>.blockUI');

            // fix cursor issue
            if (opts.cursorReset) {
                if (els.length > 1)
                    els[1].style.cursor = opts.cursorReset;
                if (els.length > 2)
                    els[2].style.cursor = opts.cursorReset;
            }

            if (full)
                pageBlock = pageBlockEls = null;

            if (opts.fadeOut) {
                count = els.length;
                els.stop().fadeOut(opts.fadeOut, function () {
                    if (--count === 0)
                        reset(els, data, opts, el);
                });
            }
            else
                reset(els, data, opts, el);
        }

        // move blocking element back into the DOM where it started
        function reset(els, data, opts, el) {
            var $el = $(el);
            if ($el.data('blockUI.isBlocked'))
                return;

            els.each(function (i, o) {
                // remove via DOM calls so we don't lose event handlers
                if (this.parentNode)
                    this.parentNode.removeChild(this);
            });

            if (data && data.el) {
                data.el.style.display = data.display;
                data.el.style.position = data.position;
                data.el.style.cursor = 'default'; // #59
                if (data.parent)
                    data.parent.appendChild(data.el);
                $el.removeData('blockUI.history');
            }

            if ($el.data('blockUI.static')) {
                $el.css('position', 'static'); // #22
            }

            if (typeof opts.onUnblock == 'function')
                opts.onUnblock(el, opts);

            // fix issue in Safari 6 where block artifacts remain until reflow
            var body = $(document.body), w = body.width(), cssW = body[0].style.width;
            body.width(w - 1).width(w);
            body[0].style.width = cssW;
        }

        // bind/unbind the handler
        function bind(b, el, opts) {
            var full = el == window, $el = $(el);

            // don't bother unbinding if there is nothing to unbind
            if (!b && (full && !pageBlock || !full && !$el.data('blockUI.isBlocked')))
                return;

            $el.data('blockUI.isBlocked', b);

            // don't bind events when overlay is not in use or if bindEvents is false
            if (!full || !opts.bindEvents || (b && !opts.showOverlay))
                return;

            // bind anchors and inputs for mouse and key events
            var events = 'mousedown mouseup keydown keypress keyup touchstart touchend touchmove';
            if (b)
                $(document).bind(events, opts, handler);
            else
                $(document).unbind(events, handler);

            // former impl...
            //		var $e = $('a,:input');
            //		b ? $e.bind(events, opts, handler) : $e.unbind(events, handler);
        }

        // event handler to suppress keyboard/mouse events when blocking
        function handler(e) {
            // allow tab navigation (conditionally)
            if (e.type === 'keydown' && e.keyCode && e.keyCode == 9) {
                if (pageBlock && e.data.constrainTabKey) {
                    var els = pageBlockEls;
                    var fwd = !e.shiftKey && e.target === els[els.length - 1];
                    var back = e.shiftKey && e.target === els[0];
                    if (fwd || back) {
                        setTimeout(function () { focus(back); }, 10);
                        return false;
                    }
                }
            }
            var opts = e.data;
            var target = $(e.target);
            if (target.hasClass('blockOverlay') && opts.onOverlayClick)
                opts.onOverlayClick(e);

            // allow events within the message content
            if (target.parents('div.' + opts.blockMsgClass).length > 0)
                return true;

            // allow events for content that is not being blocked
            return target.parents().children().filter('div.blockUI').length === 0;
        }

        function focus(back) {
            if (!pageBlockEls)
                return;
            var e = pageBlockEls[back === true ? pageBlockEls.length - 1 : 0];
            if (e)
                e.focus();
        }

        function center(el, x, y) {
            var p = el.parentNode, s = el.style;
            var l = ((p.offsetWidth - el.offsetWidth) / 2) - sz(p, 'borderLeftWidth');
            var t = ((p.offsetHeight - el.offsetHeight) / 2) - sz(p, 'borderTopWidth');
            if (x) s.left = l > 0 ? (l + 'px') : '0';
            if (y) s.top = t > 0 ? (t + 'px') : '0';
        }

        function sz(el, p) {
            return parseInt($.css(el, p), 10) || 0;
        }

    }


    /*global define:true */
    if (typeof define === 'function' && define.amd && define.amd.jQuery) {
        define(['jquery'], setup);
    } else {
        setup(jQuery);
    }

})();


jQuery.ptTimeSelect = {};

jQuery.ptTimeSelect.options = {
    containerClass: undefined,
    containerWidth: undefined,
    hoursLabel: 'Hour',
    minutesLabel: 'Minutes',
    setButtonLabel: 'Set',
    popupImage: undefined,
    onFocusDisplay: true,
    zIndex: 10,
    onBeforeShow: undefined,
    onClose: undefined
};

jQuery.ptTimeSelect._ptTimeSelectInit = function() {
    jQuery(document).ready(
		function() {
		    if (!jQuery('#ptTimeSelectCntr').length) {
		        jQuery("body").append(
						'<div id="ptTimeSelectCntr" class="">'
					+ '		<div class="ui-widget ui-widget-content ui-corner-all">'
					+ '		<div class="ui-widget-header ui-corner-all">'
					+ '			<div id="ptTimeSelectUserTime" style="float: left;">'
					+ '				<span id="ptTimeSelectUserSelHr">1</span> : '
					+ '				<span id="ptTimeSelectUserSelMin">00</span> '
					+ '				<span id="ptTimeSelectUserSelAmPm">AM</span>'
					+ '			</div>'
					+ '			<br style="clear: both;" /><div></div>'
					+ '		</div>'
					+ '		<div class="ui-widget-content ui-corner-all">'
					+ '			<div>'
					+ '				<div class="ptTimeSelectTimeLabelsCntr">'
					+ '					<div class="ptTimeSelectLeftPane" style="width: 50%; text-align: center; float: left;" class="">Hour</div>'
					+ '					<div class="ptTimeSelectRightPane" style="width: 50%; text-align: center; float: left;">Minutes</div>'
					+ '				</div>'
					+ '				<div>'
					+ '					<div style="float: left; width: 50%;">'
					+ '						<div class="ui-widget-content ptTimeSelectLeftPane">'
					+ '							<div class="ptTimeSelectHrAmPmCntr">'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);" '
					+ '										style="display: block; width: 45%; float: left;">AM</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);" '
					+ '										style="display: block; width: 45%; float: left;">PM</a>'
					+ '								<br style="clear: left;" /><div></div>'
					+ '							</div>'
					+ '							<div class="ptTimeSelectHrCntr">'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">1</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">2</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">3</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">4</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">5</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">6</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">7</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">8</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">9</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">10</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">11</a>'
					+ '								<a class="ptTimeSelectHr ui-state-default" href="javascript: void(0);">12</a>'
					+ '								<br style="clear: left;" /><div></div>'
					+ '							</div>'
					+ '						</div>'
					+ '					</div>'
					+ '					<div style="width: 50%; float: left;">'
					+ '						<div class="ui-widget-content ptTimeSelectRightPane">'
					+ '							<div class="ptTimeSelectMinCntr">'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">00</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">05</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">10</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">15</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">20</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">25</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">30</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">35</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">40</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">45</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">50</a>'
					+ '								<a class="ptTimeSelectMin ui-state-default" href="javascript: void(0);">55</a>'
					+ '								<br style="clear: left;" /><div></div>'
					+ '							</div>'
					+ '						</div>'
					+ '					</div>'
					+ '				</div>'
					+ '			</div>'
					+ '			<div style="clear: left;"></div>'
					+ '		</div>'
					+ '		<div id="ptTimeSelectSetButton">'
					+ '			<a href="javascript: void(0);" onclick="jQuery.ptTimeSelect.setTime()"'
					+ '					onmouseover="jQuery(this).removeClass(\'ui-state-default\').addClass(\'ui-state-hover\');" '
					+ '						onmouseout="jQuery(this).removeClass(\'ui-state-hover\').addClass(\'ui-state-default\');"'
					+ '						class="ui-corner-all ui-state-default">'
					+ '				SET'
					+ '			</a>'
					+ '			<br style="clear: both;" /><div></div>'
					+ '		</div>'
					+ '		<!--[if lte IE 6.5]>'
					+ '			<iframe style="display:block; position:absolute;top: 0;left:0;z-index:-1;'
					+ '				filter:Alpha(Opacity=\'0\');width:3000px;height:3000px"></iframe>'
					+ '		<![endif]-->'
					+ '	</div></div>'
				);

		        var e = jQuery('#ptTimeSelectCntr');

		        // Add the events to the functions
		        e.find('.ptTimeSelectMin')
					.bind("click", function() {
					    jQuery.ptTimeSelect.setMin($(this).text());
					});

		        e.find('.ptTimeSelectHr')
					.bind("click", function() {
					    jQuery.ptTimeSelect.setHr($(this).text());
					});

		        $(document).mousedown(jQuery.ptTimeSelect._doCheckMouseClick);
		    } //end if
		}
	);
} (); 
jQuery.ptTimeSelect.setHr = function(h) {
    if (h.toLowerCase() == "am"
		|| h.toLowerCase() == "pm"
	) {
        jQuery('#ptTimeSelectUserSelAmPm').empty().append(h);
    } else {
        jQuery('#ptTimeSelectUserSelHr').empty().append(h);
    }
}
jQuery.ptTimeSelect.setMin = function(m) {
    jQuery('#ptTimeSelectUserSelMin').empty().append(m);
}
jQuery.ptTimeSelect.setTime = function() {
    var tSel = jQuery('#ptTimeSelectUserSelHr').text()
				+ ":"
				+ jQuery('#ptTimeSelectUserSelMin').text()
				+ " "
				+ jQuery('#ptTimeSelectUserSelAmPm').text()
    jQuery(".isPtTimeSelectActive").val(tSel);
    this.closeCntr();

}
jQuery.ptTimeSelect.openCntr = function(ele) {
    jQuery.ptTimeSelect.closeCntr()
    jQuery(".isPtTimeSelectActive").removeClass("isPtTimeSelectActive");
    var cntr = jQuery("#ptTimeSelectCntr");
    var i = jQuery(ele).eq(0).addClass("isPtTimeSelectActive");
    var opt = i.data("ptTimeSelectOptions");
    var style = i.offset();
    style['z-index'] = opt.zIndex;
    style.top = (style.top + i.outerHeight());
    if (opt.containerWidth) {
        style.width = opt.containerWidth;
    }
    if (opt.containerClass) {
        cntr.addClass(opt.containerClass);
    }
    cntr.css(style);
    var hr = 1;
    var min = '00';
    var tm = 'AM';
    if (i.val()) {
        var re = /([0-9]{1,2}).*:.*([0-9]{2}).*(PM|AM)/i;
        var match = re.exec(i.val());
        if (match) {
            hr = match[1] || 1;
            min = match[2] || '00';
            tm = match[3] || 'AM';
        }
    }
    cntr.find("#ptTimeSelectUserSelHr").empty().append(hr);
    cntr.find("#ptTimeSelectUserSelMin").empty().append(min);
    cntr.find("#ptTimeSelectUserSelAmPm").empty().append(tm);
    cntr.find(".ptTimeSelectTimeLabelsCntr .ptTimeSelectLeftPane")
		.empty().append(opt.hoursLabel);
    cntr.find(".ptTimeSelectTimeLabelsCntr .ptTimeSelectRightPane")
		.empty().append(opt.minutesLabel);
    cntr.find("#ptTimeSelectSetButton a").empty().append(opt.setButtonLabel);
    if (opt.onBeforeShow) {
        opt.onBeforeShow(i, cntr);
    }
    cntr.slideDown("fast");

} 
jQuery.ptTimeSelect.closeCntr = function(i) {
    if ($("#ptTimeSelectCntr:visible").length) {
        jQuery('#ptTimeSelectCntr')
			.slideUp("fast", function() {
			    jQuery('#ptTimeSelectCntr').removeClass().css("width", "");
			    if (!i) {
			        i = $(".isPtTimeSelectActive");
			    }
			    if (i) {
			        var opt = i.removeClass("isPtTimeSelectActive")
								.data("ptTimeSelectOptions");
			        if (opt && opt.onClose) {
			            opt.onClose(i);
			        }
			    }
			});
    }
    return;
} /* END setTime() function */


jQuery.ptTimeSelect._doCheckMouseClick = function(ev) {
    if (!$("#ptTimeSelectCntr:visible").length) {
        return;
    }
    if (!jQuery(ev.target).closest("#ptTimeSelectCntr").length) {
        jQuery.ptTimeSelect.closeCntr();
    }

} 
jQuery.fn.ptTimeSelect = function(opt) {
    this.each(function() {
        if (this.nodeName.toLowerCase() != 'input') return;
        var e = jQuery(this);
        if (e.hasClass('hasPtTimeSelect')) {
            return this;
        }
        var thisOpt = {};
        thisOpt = $.extend(thisOpt, jQuery.ptTimeSelect.options, opt);
        e.addClass('hasPtTimeSelect').data("ptTimeSelectOptions", thisOpt);

        //Wrap the input field in a <div> element with
        // a unique id for later referencing.
        if (thisOpt.popupImage || !thisOpt.onFocusDisplay) {
            var img = jQuery(
						'<span>&nbsp;</span><a href="javascript:" onclick="'
					+ 'jQuery.ptTimeSelect.openCntr(jQuery(this).data(\'ptTimeSelectEle\'));">'
					+ thisOpt.popupImage + '</a>'
				)
				.data("ptTimeSelectEle", e);
            e.after(img);
        }
        if (thisOpt.onFocusDisplay) {
            e.focus(function() {
                jQuery.ptTimeSelect.openCntr(this);
            });
        }
        return this;
    });
} /* End of jQuery.fn.timeSelect */


/*******************************************************/

$.b2eUserControl = {};
//jQuery.b2eUserControl._direction = "rtl";
$.b2eUserControl._language = 1;
$.b2eUserControl._lblTitle = { 0: "Search employee", 1: "חיפוש עובד" }
$.b2eUserControl._lblClose = { 0: "close", 1: "סגור" }
$.b2eUserControl._lblFirstName = { 0: "First name", 1: "שם פרטי" }
$.b2eUserControl._lblLastName = { 0: "Last name", 1: "שם משפחה" }
$.b2eUserControl._lblEEID = { 0: "Id", 1: "מספר עובד" }
$.b2eUserControl._lblEEID2 = { 0: "Id", 1: "PID" }
$.b2eUserControl._lblName = { 0: "Name", 1: "שם" }
$.b2eUserControl._lblEmail = { 0: "Email", 1: "אימייל" }
$.b2eUserControl._lblSearch = { 0: "Search", 1: "חפש" }
$.b2eUserControl._lblSearching = { 0: "Searching", 1: "מחפש" }
$.b2eUserControl._notFound = { 0: "No employees found", 1: "לא נמצאו עובדים" }
$.b2eUserControl._msgShowing = { 0: "Showing ", 1: "מציג " }
$.b2eUserControl._msgOutof = { 0: " emplyees out of ", 1: " עובדים מתוך " }

$.b2eUserControl._init = function (language) {
    this._language = language;
    if (!jQuery('#b2eUserControl').length) {
        //alert("add to body");
        jQuery("body").append(
					  ' <div id="b2eUserControl">'
					+ '		<div class="ui-widget ui-widget-content ui-corner-all">'
					+ '		    <div class="ui-widget-header ui-corner-all" style="padding:2px;">'
					+ '                 <span class="btnclose ui-icon ui-icon-closethick" unselectable="on" onclick="$.b2eUserControl.Hide()">' + this._lblClose[this._language] + '</span>'
                    + '                 <span>' + this._lblTitle[this._language] + '</span>'
					+ '         </div>'
					+ '         <div style="padding:3px;">'
                    + '                     <div class="b2eucfield"><span><input id="b2eUserControl_q" style="width:120px;" /></span>'
                    + '                     <input type="button" value="' + this._lblSearch[this._language] + '" onclick="$.b2eUserControl._search()" /></div>'
                    + '                     <div id="b2eUserControl_loadingImage" style="text-align:center;display:none;padding:10px 1px;"><img src="/images/facebook_loader.gif"/><span>' + this._lblSearching[this._language] + '</span></div>'
                    + '                     <div id="b2eUserControl_tablemessage" class="yellowbar"></div>'
                    + '                     <div>'
                    + '                         <table id="b2eUserControl_userstable">'
                    + '                             <tr>'
                    + '                                <th style="width:15px;"></th>'
                    //+ '                                <th style="width:90px;">' + this._lblEEID[this._language] + '</th>'
                    //+ '                                <th style="width:90px;">' + this._lblEEID2[this._language] + '</th>'
                    + '                                <th style="width:250px;">' + this._lblName[this._language] + '</th>'
                    + '                                <th style="width:250px;">' + this._lblEmail[this._language] + '</th>'
                    + '                             </tr>'
                    + '                             <tr class="hidetd" onclick="$.b2eUserControl._selectRow(this)">'
                    + '                                <td ><img src="/images/morel.gif" alt=""/></td>'
                    //+ '                                <td style="text-align:center"></td>'
                    //+ '                                <td style="text-align:center"></td>'
                    + '                                <td style="text-align:right"></td>'
                    + '                                <td style="text-align:right"></td>'
                    + '                             </tr>'
                    + '                       </table>'
                    + '                    </div>'
                    + '     </div>'
                    + '   </div>'
					+ ' </div>');
        //alert("after add to body");
        var dir = "left";
        if (language != 1) dir = "right";
        $("#b2eUserControl").find(".btnclose").css("float", dir);
        $("#b2eUserControl_q").keypress(function (event) {
            var e = $(this);
            if (event.which == '13') {
                event.preventDefault();
                var q = e.val();
                if (q == "") return;
                _search();
            }
        });
    }
    //});
}

$.b2eUserControl.Show = function(obj)
{
    //alert("Show")
    var $jobj = $(obj);
    var $dom = $jobj; //$("#" + $jobj.attr('ctl'));
    var $input = $dom.prev();
    var $ctl = $("#b2eUserControl");
    var offset = $input.offset();
    var left = offset.left; // $dom.scrollLeft();
    var top = offset.top; // $dom.scrollTop() + $dom.height();
    //    alert("position: " + top + ", " + left);
    //    var offsetprev = $dom.prev().offset();
    //    alert("position: " + offsetprev.top + ", " + offsetprev.left);
    var leftpx = left;
    //alert(left);
    //    if (this._language == 1)
    //    {
    //        leftpx = leftpx - $input.width() + $ctl.width();
    //    }
    $ctl.css('left', leftpx + "px");
    top = top + $input.height() + 4
    var toppx = top + "px";
    //alert(toppx);
    var pos = { top: top, left: left }
    //$ctl.css('top', toppx);
    $ctl.css(pos);

    //alert($ctl.css(toppx));
    this._clearForm();
    $ctl.attr('id_control', $jobj.attr('id_control'));
    $ctl.attr('name_control', $jobj.attr('name_control'));
    $("#b2eUserControl_q").val('');
    $ctl.show();
}

$.b2eUserControl.Hide = function() {
    $("#b2eUserControl").hide();
}

$.b2eUserControl._search = function()
{
    var query = "";
    query = $("#b2eUserControl_q").val();
    // alert(query);
    this._getUsers(query, this._language);
}

$.b2eUserControl._getUsers = function(querydata, lang)
{
    $("#b2eUserControl_loadingImage").show();
    $("#b2eUserControl_userstable").hide();
    $("#b2eUserControl_tablemessage").hide();
    $.post("/services/userprofile.asmx/SearchUsersByQuery",
        { query: querydata, querySection: 6, resultSection: 7, languageId: lang, limit: 15 },
        this._updateResult);
}

$.b2eUserControl._updateResult = function (data, status) {
    var str = $(data).find("string").text();
    var data = str.split(";");
    var totalusers = data[0];
    var counter = 0;
    var obj = $.b2eUserControl;
    if (data.length < 2) {
        $("#b2eUserControl_tablemessage").html(obj._notFound[obj._language]);
        $("#b2eUserControl_tablemessage").show();
        jQuery.b2eUserControl._clearTable("b2eUserControl_userstable");
        return;
    }
    var users = data[1].split("|");

    jQuery.b2eUserControl._clearTable("b2eUserControl_userstable");
    $(users).each(function () {
        if (this != "") {
            var objects = this.split(":");
            var eeid = objects[0];
            //var empid = objects[3];
            var fname = objects[1];
            var lastname = objects[2];
            var email = objects[3];
            //jQuery.b2eUserControl._insertToUserTable("b2eUserControl_userstable", eeid, empid, fname, lastname);
            jQuery.b2eUserControl._insertToUserTable("b2eUserControl_userstable", eeid, eeid, fname, lastname, email);
            counter++;
        }
    });
    $("#b2eUserControl_loadingImage").hide();
    if (counter > 0) {
        $("#b2eUserControl_userstable").show();
        $("#b2eUserControl_tablemessage").html(obj._msgShowing[obj._language] + counter + obj._msgOutof[obj._language] + totalusers);
    }
    else {
        $("#b2eUserControl_tablemessage").html(obj._notFound[obj._language]);
    }
    $("#b2eUserControl_tablemessage").show();
}

$.b2eUserControl._insertToUserTable = function (tablename, eeid, empid, fname, lname, email) {
    var table = $("#" + tablename).get();
    var lastRow = $("#" + tablename + " .hidetd").clone();
    lastRow.attr('eeid', empid);
    $("#" + tablename).append(lastRow);
    var row = $("#" + tablename + " tr:last");
    //row.find("td").get(1).innerHTML = lname;
    //row.find("td").get(2).innerHTML = eeid;
    row.find("td").get(1).innerHTML = fname + " " + lname;
    row.find("td:eq(1)").attr("id", eeid);
    row.find("td").get(2).innerHTML = email;
    row.removeClass("hidetd");
}

$.b2eUserControl._clearTable = function(tablename) {
    $("#" + tablename + " tr:gt(0):not(.hidetd)").each(function() { $(this).remove(); });
}

$.b2eUserControl._clearForm = function() {
    $("#b2eUserControl_userstable").hide();
    $("#b2eUserControl_tablemessage").hide();
    $('#b2eUserControl_txtFirstName').val('');
    $('#b2eUserControl_txtLastName').val('');
}

$.b2eUserControl._selectRow = function(obj)
{
    $("#b2eUserControl_userstable").find("tr.active").removeClass("active");
    $(obj).addClass("active");
    var id_value = $(obj).children("td:eq(1)").attr("id"); //$(obj).children("td:eq(2)").text();
    var name_value = $(obj).children("td:eq(1)").text();
    //alert(id_value);
    //alert(name_value);
    var id_control_id = $("#b2eUserControl").attr('id_control');
    var name_control_id = $("#b2eUserControl").attr('name_control');
    if (id_control_id != "") $("#" + id_control_id).val(id_value);
    if (name_control_id != "") $("#" + name_control_id).val(name_value);

    $("#b2eUserControl").hide();
}

$.fn.b2eSelectUser = function(opt)
{
    var lang = 1;
    if (opt.lang != null)
    {
        lang = opt.lang;
    }
    $.b2eUserControl._init(lang);
    this.each(function()
    {
        if (this.nodeName.toLowerCase() != 'input') return;
        var e = jQuery(this);
        if (e.hasClass('b2eUserInput'))
            return this;
        var img = $('<img src="/images/user1_view.png" onclick="$.b2eUserControl.Show(this)" style="margin-left:5px;cursor:pointer" />');
        if (opt.id_control != null)
        {
            img.attr('id_control', opt.id_control);
            if (opt.name_control != null)
            {
                img.attr('name_control', opt.name_control);
            }
        }
        else
        {
            if (opt.name_control != null)
            {
                img.attr('name_control', opt.name_control);
                img.attr('id_control', '');
            }
            else img.attr('id_control', e.attr('id'));
        }
        e.after(img);
        e.addClass("b2eUserInput");
        return this;
    });
}

/*
* jScroller 0.4 - Autoscroller PlugIn for jQuery
*
* Copyright (c) 2007 Markus Bordihn (http://markusbordihn.de)
* Dual licensed under the MIT (MIT-LICENSE.txt)
* and GPL (GPL-LICENSE.txt) licenses.
*
* $Date: 2009-06-18 20:00:00 +0100 (Sat, 18 Jul 2009) $
* $Rev: 0.4 $
*/

eval(function(p, a, c, k, e, r) { e = function(c) { return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36)) }; if (!''.replace(/^/, String)) { while (c--) r[e(c)] = k[c] || e(c); k = [function(e) { return r[e] } ]; e = function() { return '\\w+' }; c = 1 }; while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]); return p } ('$2={Q:{R:"S 2 T w U",V:0.4,W:"X Y (Z://10.11)",12:"13 14 15"},5:{g:[],x:16,s:{6:/([0-9,.\\-]+)6/}},h:{m:0,y:0},17:j(a,b,c,d,e){3($(a).F&&$(b).F&&c&&d>=1){$(a).k({18:\'19\'});$(b).k({1a:\'1b\',7:0,8:0});3(e){$(b).1c(j(){$2.n($(b),1d)},j(){$2.n($(b),G)})}$2.5.g.1e({z:$(a),f:$(b),H:c,o:d,n:G})}},n:j(a,b){3(a&&I b!==\'J\'){w(t i K $2.5.g){3($2.5.g[i].f.L("M")===a.L("M")){$2.5.g[i].n=b}}}},p:j(){3($2.h.m===0&&$2.5.x>0){$2.h.m=l.1f($2.A,$2.5.x)}3(!$2.h.y){$(l).1g($2.N);$(l).O($2.p);$(l).1h($2.p);$(l).A($2.p);$(1i).1j($2.p);3($.1k.1l){l.O()}$2.h.y=1}},N:j(){3($2.h.m){l.1m($2.h.m);$2.h.m=0}},B:{6:j(a){t b=\'\';3(a){3(a.C($2.5.s.6)){3(I a.C($2.5.s.6)[1]!==\'J\'){b=a.C($2.5.s.6)[1]}}}1n b}},A:j(){w(t i K $2.5.g){3($2.5.g.1o(i)){t a=$2.5.g[i],7=P(($2.B.6(a.f.k(\'7\'))||0)),8=P(($2.B.6(a.f.k(\'8\'))||0)),D=a.z.q(),E=a.z.r(),q=a.f.q(),r=a.f.r();3(!a.n){1p(a.H){u\'1q\':3(8<=-1*q){8=D}a.f.k(\'8\',8-a.o+\'6\');v;u\'1r\':3(7>=E){7=-1*r}a.f.k(\'7\',7+a.o+\'6\');v;u\'7\':3(7<=-1*r){7=E}a.f.k(\'7\',7-a.o+\'6\');v;u\'1s\':3(8>=D){8=-1*q}a.f.k(\'8\',8+a.o+\'6\');v}}}}}};', 62, 91, '||jScroller|if||config|px|left|top|||||||child|obj|cache||function|css|window|timer|pause|speed|start|height|width|regExp|var|case|break|for|refresh|init|parent|scroll|get|match|min_height|min_width|length|false|direction|typeof|undefined|in|attr|id|stop|focus|Number|info|Name|ByRei|Plugin|jQuery|Version|Author|Markus|Bordihn|http|markusbordihn|de|Description|Next|Generation|Autoscroller|120|add|overflow|hidden|position|absolute|hover|true|push|setInterval|blur|resize|document|mousemove|browser|msie|clearInterval|return|hasOwnProperty|switch|up|right|down'.split('|'), 0, {}))
