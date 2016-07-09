/// <reference path="scripts/jquery-1.2.6-vsdoc.js" />

var langmenuto = 0;

var console = window.console || { log: function () { }, error: function () { } };

var sformat = function () {
    var args = arguments;
    var txt = args[0];
    return txt.replace(/{(\d+)}/g, function (match, number) {
        return typeof args[number * 1 + 1] != 'undefined'
          ? args[number * 1 + 1]
          : match
        ;
    });
}

var urlParams = {};
(function ()
{
    var e,
        a = /\+/g,  // Regex for replacing addition symbol with a space
        r = /([^&=]+)=?([^&]*)/g,
        d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
        q = window.location.search.substring(1);

    while (e = r.exec(q))
        urlParams[d(e[1])] = d(e[2]);
})();

function getPageId()
{
    var hdnPageId = $('input[id$="hdnPageId"]');
    return hdnPageId.val();
}

function getCurrentCompany()
{
    var hdn = $('input[id$="hdnCompanyName"]');
    if (hdn.length > 0) return hdn.val();
    else return "teva";
}

function getLanguageId()
{
    var hdnLangId = $('input[id$="hdnLangId"]');
    return hdnLangId.val();
}

function getVersionId()
{
    var hdnVersionId = $('input[id$="hdnVersionId"]');
    return hdnVersionId.val();
}

function getFormId()
{
    var hdnFormId = $('input[id$="hdnFormId"]');
    if (hdnFormId.length == 0) return 0;
    return hdnFormId.val();
}

function getParameterByName(name)
{
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.href);
    if (results == null)
        return "";
    else
        return results[1];
}
function getParamByNameFrom(text, name)
{
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(text);
    if (results == null)
        return "";
    else
        return results[1];
}

function getQueryStringParams(text)
{

    //name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]([a-zA-Z]+)=[^&#]*";
    var regex = new RegExp(regexS, "g");
    var results = regex.exec(text);
    return results;
}

function findNode(node, name)
{
    for (var i = 0; i < node.childNodes.length; i++)
    {
        var child = node.childNodes[i];
        if (child.nodeName == name)
            return child;
    }
    return null;
}

function findParent(node, name)
{
    var parent = node.parentNode;
    if (parent == null) return null;
    if (parent.nodeName == name) return parent;
    else
        findParent(parent, name);
}

function dropdown(obj)
{
    var ddmenu = obj.parentNode; //findParent(obj, "DIV");
    var ulddl = findNode(ddmenu, "UL");
    ulddl.onmouseover = function() { window.clearTimeout(langmenuto); this.style.display = "block"; }
    ulddl.onmouseout = function() { langmenuto = window.setTimeout(function() { hide(ulddl); }, 300); }
    ulddl.style.display = "block";
}

function hide(obj)
{
    obj.style.display = "none";
}

function updateLang(lang)
{
    document.getElementById("m_hdnLangId").value = lang;
}

function getWindowInnerHeight()
{
    var myHeight = 0;
    if (typeof (window.innerHeight) == 'number')
    {
        //Non-IE
        myHeight = window.innerHeight;
    } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight))
    {
        //IE 6+ in 'standards compliant mode'
        myHeight = document.documentElement.clientHeight;
    } else if (document.body && (document.body.clientWidth || document.body.clientHeight))
    {
        //IE 4 compatible
        myHeight = document.body.clientHeight;
    }

    return myHeight;
}

function getWindowInnerWidth()
{
    var myWidth = 0, myHeight = 0;
    if (typeof (window.innerWidth) == 'number')
    {
        //Non-IE
        myWidth = window.innerWidth;
    } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight))
    {
        //IE 6+ in 'standards compliant mode'
        myWidth = document.documentElement.clientWidth;
    } else if (document.body && (document.body.clientWidth || document.body.clientHeight))
    {
        //IE 4 compatible
        myWidth = document.body.clientWidth;
    }

    return myWidth;
}

function stringFormat(text, args, values)
{
    //check if there are two arguments in the arguments list
    if (args.length <= 1)
    {
        //if there are not 2 or more arguments there’s nothing to replace
        //just return the original text
        return text;
    }

    for (var token = 0; token < args.length; token++)
    {
        //iterate through the tokens and replace their placeholders from the original text in order
        text = text.replace(new RegExp("\\{" + args[token] + "\\}", "gi"), values[token]);
    }
    return text;
}

function parseXML(xml)
{
    if (window.ActiveXObject && window.GetObject)
    {
        var dom = new ActiveXObject('Microsoft.XMLDOM');
        dom.loadXML(xml);
        return dom;
    }
    if (window.DOMParser)
        return new DOMParser().parseFromString(xml, 'text/xml');
    throw new Error('No XML parser available');
}

function getInnerHTML(node)
{
    var str = "";
    for (var i = 0; i < node.childNodes.length; i++)
        str += getOuterHTML(node.childNodes.item(i));
    return str;
}

function getOuterHTML(node)
{
    var str = "";

    var _leafElems = ["IMG", "HR", "BR", "INPUT"];
    var leafElems = {};
    for (var i = 0; i < _leafElems.length; i++)
        leafElems[_leafElems[i]] = true;

    switch (node.nodeType)
    {
        case 1: // ELEMENT_NODE
            str += "<" + node.nodeName.toLowerCase();
            for (var i = 0; i < node.attributes.length; i++)
            {
                if (node.attributes.item(i).nodeValue != null)
                {
                    str += " "
                    str += node.attributes.item(i).nodeName.toLowerCase();
                    str += "=\"";
                    str += node.attributes.item(i).nodeValue;
                    str += "\"";
                }
            }
            //alert(node.nodeName + " - " + node.childNodes.length);
            if (node.childNodes.length == 0 && leafElems[node.nodeName])
            {
                str += "/>";
            }
            else
            {
                str += ">";
                str += getInnerHTML(node);
                str += "</" + node.nodeName.toLowerCase() + ">";
            }
            break;

        case 3: //TEXT_NODE
            str += node.nodeValue;
            break;

        case 4: // CDATA_SECTION_NODE
            str += "<![CDATA[" + node.nodeValue + "]]>";
            break;

        case 5: // ENTITY_REFERENCE_NODE
            str += "&" + node.nodeName.toLowerCase() + ";";
            break;

        case 8: // COMMENT_NODE
            str += "<!--" + node.nodeValue + "-->";
            break;
    }

    return str;
}

function $$(id, context)
{
    var el = $("#" + id, context);
    if (el.length < 1)
        el = $("[id$=_" + id + "]", context);
    return el;
}

if (typeof window.DOMParser === "undefined") {
    window.DOMParser = function () { };

    window.DOMParser.prototype.parseFromString = function (str, contentType) {
        if (typeof ActiveXObject !== 'undefined') {
            var xmldata = new ActiveXObject('MSXML.DomDocument');
            xmldata.async = false;
            xmldata.loadXML(str);
            return xmldata;
        } else if (typeof XMLHttpRequest !== 'undefined') {
            var xmldata = new XMLHttpRequest;

            if (!contentType) {
                contentType = 'application/xml';
            }

            xmldata.open('GET', 'data:' + contentType + ';charset=utf-8,' + encodeURIComponent(str), false);

            if (xmldata.overrideMimeType) {
                xmldata.overrideMimeType(contentType);
            }

            xmldata.send(null);
            return xmldata.responseXML;
        }
    };
}

// normalize XMLSerializer object
if (!window.XMLSerializer) {
    window.XMLSerializer = function () { };

    window.XMLSerializer.prototype.serializeToString = function (XMLObject) {
        return XMLObject.xml || '';
    };
}


/*
http://www.JSON.org/json2.js
2009-09-29

Public Domain.

NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.

See http://www.JSON.org/js.html

This file creates a global JSON object containing two methods: stringify
and parse.

JSON.stringify(value, replacer, space)
value       any JavaScript value, usually an object or array.

replacer    an optional parameter that determines how object
values are stringified for objects. It can be a
function or an array of strings.

space       an optional parameter that specifies the indentation
of nested structures. If it is omitted, the text will
be packed without extra whitespace. If it is a number,
it will specify the number of spaces to indent at each
level. If it is a string (such as '\t' or '&nbsp;'),
it contains the characters used to indent at each level.

This method produces a JSON text from a JavaScript value.

When an object value is found, if the object contains a toJSON
method, its toJSON method will be called and the result will be
stringified. A toJSON method does not serialize: it returns the
value represented by the name/value pair that should be serialized,
or undefined if nothing should be serialized. The toJSON method
will be passed the key associated with the value, and this will be
bound to the value

For example, this would serialize Dates as ISO strings.

Date.prototype.toJSON = function (key) {
function f(n) {
// Format integers to have at least two digits.
return n < 10 ? '0' + n : n;
}

return this.getUTCFullYear()   + '-' +
f(this.getUTCMonth() + 1) + '-' +
f(this.getUTCDate())      + 'T' +
f(this.getUTCHours())     + ':' +
f(this.getUTCMinutes())   + ':' +
f(this.getUTCSeconds())   + 'Z';
};

You can provide an optional replacer method. It will be passed the
key and value of each member, with this bound to the containing
object. The value that is returned from your method will be
serialized. If your method returns undefined, then the member will
be excluded from the serialization.

If the replacer parameter is an array of strings, then it will be
used to select the members to be serialized. It filters the results
such that only members with keys listed in the replacer array are
stringified.

Values that do not have JSON representations, such as undefined or
functions, will not be serialized. Such values in objects will be
dropped; in arrays they will be replaced with null. You can use
a replacer function to replace those with JSON values.
JSON.stringify(undefined) returns undefined.

The optional space parameter produces a stringification of the
value that is filled with line breaks and indentation to make it
easier to read.

If the space parameter is a non-empty string, then that string will
be used for indentation. If the space parameter is a number, then
the indentation will be that many spaces.

Example:

text = JSON.stringify(['e', {pluribus: 'unum'}]);
// text is '["e",{"pluribus":"unum"}]'


text = JSON.stringify(['e', {pluribus: 'unum'}], null, '\t');
// text is '[\n\t"e",\n\t{\n\t\t"pluribus": "unum"\n\t}\n]'

text = JSON.stringify([new Date()], function (key, value) {
return this[key] instanceof Date ?
'Date(' + this[key] + ')' : value;
});
// text is '["Date(---current time---)"]'


JSON.parse(text, reviver)
This method parses a JSON text to produce an object or array.
It can throw a SyntaxError exception.

The optional reviver parameter is a function that can filter and
transform the results. It receives each of the keys and values,
and its return value is used instead of the original value.
If it returns what it received, then the structure is not modified.
If it returns undefined then the member is deleted.

Example:

// Parse the text. Values that look like ISO date strings will
// be converted to Date objects.

myData = JSON.parse(text, function (key, value) {
var a;
if (typeof value === 'string') {
a =
/^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2}(?:\.\d*)?)Z$/.exec(value);
if (a) {
return new Date(Date.UTC(+a[1], +a[2] - 1, +a[3], +a[4],
+a[5], +a[6]));
}
}
return value;
});

myData = JSON.parse('["Date(09/09/2001)"]', function (key, value) {
var d;
if (typeof value === 'string' &&
value.slice(0, 5) === 'Date(' &&
value.slice(-1) === ')') {
d = new Date(value.slice(5, -1));
if (d) {
return d;
}
}
return value;
});


This is a reference implementation. You are free to copy, modify, or
redistribute.

This code should be minified before deployment.
See http://javascript.crockford.com/jsmin.html

USE YOUR OWN COPY. IT IS EXTREMELY UNWISE TO LOAD CODE FROM SERVERS YOU DO
NOT CONTROL.
*/

/*jslint evil: true, strict: false */

/*members "", "\b", "\t", "\n", "\f", "\r", "\"", JSON, "\\", apply,
call, charCodeAt, getUTCDate, getUTCFullYear, getUTCHours,
getUTCMinutes, getUTCMonth, getUTCSeconds, hasOwnProperty, join,
lastIndex, length, parse, prototype, push, replace, slice, stringify,
test, toJSON, toString, valueOf
*/


// Create a JSON object only if one does not already exist. We create the
// methods in a closure to avoid creating global variables.

if (!this.JSON)
{
    //alert("JSON Does not exist, creating");
    this.JSON = {};

}

(function()
{

    function f(n)
    {
        // Format integers to have at least two digits.
        return n < 10 ? '0' + n : n;
    }

    if (typeof Date.prototype.toJSON !== 'function')
    {

        Date.prototype.toJSON = function(key)
        {

            return isFinite(this.valueOf()) ?
                   this.getUTCFullYear() + '-' +
                 f(this.getUTCMonth() + 1) + '-' +
                 f(this.getUTCDate()) + 'T' +
                 f(this.getUTCHours()) + ':' +
                 f(this.getUTCMinutes()) + ':' +
                 f(this.getUTCSeconds()) + 'Z' : null;
        };

        String.prototype.toJSON =
        Number.prototype.toJSON =
        Boolean.prototype.toJSON = function(key)
        {
            return this.valueOf();
        };
    }

    var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        gap,
        indent,
        meta = {    // table of character substitutions
            '\b': '\\b',
            '\t': '\\t',
            '\n': '\\n',
            '\f': '\\f',
            '\r': '\\r',
            '"': '\\"',
            '\\': '\\\\'
        },
        rep;


    function quote(string)
    {

        // If the string contains no control characters, no quote characters, and no
        // backslash characters, then we can safely slap some quotes around it.
        // Otherwise we must also replace the offending characters with safe escape
        // sequences.

        escapable.lastIndex = 0;
        return escapable.test(string) ?
            '"' + string.replace(escapable, function(a)
            {
                var c = meta[a];
                return typeof c === 'string' ? c :
                    '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
            }) + '"' :
            '"' + string + '"';
    }


    function str(key, holder)
    {

        // Produce a string from holder[key].

        var i,          // The loop counter.
            k,          // The member key.
            v,          // The member value.
            length,
            mind = gap,
            partial,
            value = holder[key];

        // If the value has a toJSON method, call it to obtain a replacement value.

        if (value && typeof value === 'object' &&
                typeof value.toJSON === 'function')
        {
            value = value.toJSON(key);
        }

        // If we were called with a replacer function, then call the replacer to
        // obtain a replacement value.

        if (typeof rep === 'function')
        {
            value = rep.call(holder, key, value);
        }

        // What happens next depends on the value's type.

        switch (typeof value)
        {
            case 'string':
                return quote(value);

            case 'number':

                // JSON numbers must be finite. Encode non-finite numbers as null.

                return isFinite(value) ? String(value) : 'null';

            case 'boolean':
            case 'null':

                // If the value is a boolean or null, convert it to a string. Note:
                // typeof null does not produce 'null'. The case is included here in
                // the remote chance that this gets fixed someday.

                return String(value);

                // If the type is 'object', we might be dealing with an object or an array or
                // null.

            case 'object':

                // Due to a specification blunder in ECMAScript, typeof null is 'object',
                // so watch out for that case.

                if (!value)
                {
                    return 'null';
                }

                // Make an array to hold the partial results of stringifying this object value.

                gap += indent;
                partial = [];

                // Is the value an array?

                if (Object.prototype.toString.apply(value) === '[object Array]')
                {

                    // The value is an array. Stringify every element. Use null as a placeholder
                    // for non-JSON values.

                    length = value.length;
                    for (i = 0; i < length; i += 1)
                    {
                        partial[i] = str(i, value) || 'null';
                    }

                    // Join all of the elements together, separated with commas, and wrap them in
                    // brackets.

                    v = partial.length === 0 ? '[]' :
                    gap ? '[\n' + gap +
                            partial.join(',\n' + gap) + '\n' +
                                mind + ']' :
                          '[' + partial.join(',') + ']';
                    gap = mind;
                    return v;
                }

                // If the replacer is an array, use it to select the members to be stringified.

                if (rep && typeof rep === 'object')
                {
                    length = rep.length;
                    for (i = 0; i < length; i += 1)
                    {
                        k = rep[i];
                        if (typeof k === 'string')
                        {
                            v = str(k, value);
                            if (v)
                            {
                                partial.push(quote(k) + (gap ? ': ' : ':') + v);
                            }
                        }
                    }
                } else
                {

                    // Otherwise, iterate through all of the keys in the object.

                    for (k in value)
                    {
                        if (Object.hasOwnProperty.call(value, k))
                        {
                            v = str(k, value);
                            if (v)
                            {
                                partial.push(quote(k) + (gap ? ': ' : ':') + v);
                            }
                        }
                    }
                }

                // Join all of the member texts together, separated with commas,
                // and wrap them in braces.

                v = partial.length === 0 ? '{}' :
                gap ? '{\n' + gap + partial.join(',\n' + gap) + '\n' +
                        mind + '}' : '{' + partial.join(',') + '}';
                gap = mind;
                return v;
        }
    }

    // If the JSON object does not yet have a stringify method, give it one.

    if (typeof JSON.stringify !== 'function')
    {
        //alert("stringify not exits");
        JSON.stringify = function(value, replacer, space)
        {

            // The stringify method takes a value and an optional replacer, and an optional
            // space parameter, and returns a JSON text. The replacer can be a function
            // that can replace values, or an array of strings that will select the keys.
            // A default replacer method can be provided. Use of the space parameter can
            // produce text that is more easily readable.

            var i;
            gap = '';
            indent = '';

            // If the space parameter is a number, make an indent string containing that
            // many spaces.

            if (typeof space === 'number')
            {
                for (i = 0; i < space; i += 1)
                {
                    indent += ' ';
                }

                // If the space parameter is a string, it will be used as the indent string.

            } else if (typeof space === 'string')
            {
                indent = space;
            }

            // If there is a replacer, it must be a function or an array.
            // Otherwise, throw an error.

            rep = replacer;
            if (replacer && typeof replacer !== 'function' &&
                    (typeof replacer !== 'object' ||
                     typeof replacer.length !== 'number'))
            {
                throw new Error('JSON.stringify');
            }

            // Make a fake root object containing our value under the key of ''.
            // Return the result of stringifying the value.

            return str('', { '': value });
        };
    }


    // If the JSON object does not yet have a parse method, give it one.

    if (typeof JSON.parse !== 'function')
    {
        JSON.parse = function(text, reviver)
        {

            // The parse method takes a text and an optional reviver function, and returns
            // a JavaScript value if the text is a valid JSON text.

            var j;

            function walk(holder, key)
            {

                // The walk method is used to recursively walk the resulting structure so
                // that modifications can be made.

                var k, v, value = holder[key];
                if (value && typeof value === 'object')
                {
                    for (k in value)
                    {
                        if (Object.hasOwnProperty.call(value, k))
                        {
                            v = walk(value, k);
                            if (v !== undefined)
                            {
                                value[k] = v;
                            } else
                            {
                                delete value[k];
                            }
                        }
                    }
                }
                return reviver.call(holder, key, value);
            }


            // Parsing happens in four stages. In the first stage, we replace certain
            // Unicode characters with escape sequences. JavaScript handles many characters
            // incorrectly, either silently deleting them, or treating them as line endings.

            cx.lastIndex = 0;
            if (cx.test(text))
            {
                text = text.replace(cx, function(a)
                {
                    return '\\u' +
                        ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
                });
            }

            // In the second stage, we run the text against regular expressions that look
            // for non-JSON patterns. We are especially concerned with '()' and 'new'
            // because they can cause invocation, and '=' because it can cause mutation.
            // But just to be safe, we want to reject all unexpected forms.

            // We split the second stage into 4 regexp operations in order to work around
            // crippling inefficiencies in IE's and Safari's regexp engines. First we
            // replace the JSON backslash pairs with '@' (a non-JSON character). Second, we
            // replace all simple value tokens with ']' characters. Third, we delete all
            // open brackets that follow a colon or comma or that begin the text. Finally,
            // we look to see that the remaining characters are only whitespace or ']' or
            // ',' or ':' or '{' or '}'. If that is so, then the text is safe for eval.

            if (/^[\],:{}\s]*$/.
test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@').
replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
replace(/(?:^|:|,)(?:\s*\[)+/g, '')))
            {

                // In the third stage we use the eval function to compile the text into a
                // JavaScript structure. The '{' operator is subject to a syntactic ambiguity
                // in JavaScript: it can begin a block or an object literal. We wrap the text
                // in parens to eliminate the ambiguity.

                j = eval('(' + text + ')');

                // In the optional fourth stage, we recursively walk the new structure, passing
                // each name/value pair to a reviver function for possible transformation.

                return typeof reviver === 'function' ?
                    walk({ '': j }, '') : j;
            }

            // If the text is not JSON parseable, then a SyntaxError is thrown.

            throw new SyntaxError('JSON.parse');
        };
    }
} ());

function QS(){
    this.qs = {};
    var s = location.search.replace( /^\?|#.*$/g, '' );
    if( s ) {
        var qsParts = s.split('&');
        var i, nv;
        for (i = 0; i < qsParts.length; i++) {
            nv = qsParts[i].split('=');
            this.qs[nv[0]] = nv[1];
        }
    }
}

QS.prototype.add = function( name, value ) {
    if( arguments.length == 1 && arguments[0].constructor == Object ) {
        this.addMany( arguments[0] );
        return;
    }
    this.qs[name] = value;
}

QS.prototype.addMany = function( newValues ) {
    for( nv in newValues ) {
        this.qs[nv] = newValues[nv];
    }
}

QS.prototype.remove = function( name ) {
    if( arguments.length == 1 && arguments[0].constructor == Array ) {
        this.removeMany( arguments[0] );
        return;
    }
    delete this.qs[name];
}

QS.prototype.removeMany = function( deleteNames ) {
    var i;
    for( i = 0; i < deleteNames.length; i++ ) {
        delete this.qs[deleteNames[i]];
    }
}

QS.prototype.getQueryString = function() {
    var nv, q = [];
    for( nv in this.qs ) {
        q[q.length] = nv+'='+this.qs[nv];
    }
    return q.join( '&' );
}

QS.prototype.getFullURL = function(){
    var q = this.getQueryString();
    if(q.length > 0) return location.pathname + "?" + q;
    return location.pathname;
}

QS.prototype.getParamsCount = function(){
    var c = 0;
    for( nv in this.qs ) c++;        
    return c;
}

QS.prototype.toString = QS.prototype.getQueryString;

var queryString = new QS();

jQuery.fn.sortElements = (function () {
    var sort = [].sort;
    return function (comparator, getSortable) {
        getSortable = getSortable || function () { return this; };
        var placements = this.map(function () {
            var sortElement = getSortable.call(this),
                parentNode = sortElement.parentNode,
                nextSibling = parentNode.insertBefore(
                    document.createTextNode(''),
                    sortElement.nextSibling
                );
            return function () {
                if (parentNode === this) {
                    throw new Error("You can't sort elements if any one is a descendant of another."
                    );
                }
                parentNode.insertBefore(this, nextSibling);
                parentNode.removeChild(nextSibling);
            };
        });
        return sort.call(this, comparator).each(function (i) {
            placements[i].call(getSortable.call(this));
        });
    };
})();

function addMilliseconds (date, value) {
    date.setMilliseconds(date.getMilliseconds() + value);
    return date;
};

function addSeconds (date, value) {
    return date.addMilliseconds(value * 1000);
};

function addMinutes (date, value) {
    return date.addMilliseconds(value * 60000); /* 60*1000 */
};

function addHours (date, value) {
    return date.addMilliseconds(value * 3600000); /* 60*60*1000 */
};

function addDays(date, value) {
//    alert(date);
//    alert(value);
//    
//    date.setDate(date.getDate() + value);
//    return date;
    return addMilliseconds(date, value * 86400000); /* 60*60*24*1000 */
};

function getDateString(date) {
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    var strDay = day;
    if (day < 10) strDay = "0" + day;
    var strMonth = month;
    if (month < 10) strMonth = "0" + month;

    return strDay + "/" + strMonth + "/" + year;

}

function getDateTimeString(date) {
    var str = getDateString(date);
    var hour = date.getHours();
    var strHour = hour;
    if(hour < 10) strHour = "0" + strHour;
    var min = date.getMinutes();
    var strMin = min;
    if(min < 10) strMin = "0" + min;

    return str + " " + strHour + ":" + strMin;
}

function addWeeks (date, value) {
    return date.addMilliseconds(value * 604800000); /* 60*60*24*7*1000 */
};

function addMonths (date, value) {
    var n = date.getDate();
    date.setDate(1);
    date.setMonth(date.getMonth() + value);
    date.setDate(Math.min(n, date.getDaysInMonth()));
    return date;
};

function addYears (date, value) {
    return date.addMonths(value * 12);
};

function parseWebResponse(data) {
    var root = $(data).find("WebServiceResponse");
    if (root.length == 0) {
        root = $(data);
        if (root.length == 0) return null;
    }
    //alert(root.text());
    var response = {};
    response.Code = root.find("Code").text();
    response.Message = root.find("Message").text();
    response.Data = root.find("Data").text();
    //alert(response.Message);
    return response;
}
