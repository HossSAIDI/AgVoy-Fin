<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* room/startbootstrap-shop-homepage-gh-pages/vendor/jquery/jquery.js */
class __TwigTemplate_fe031a21c02be5d62a3b2ec14becb7fe3554ab1e40bb33d1877b772af99eb304 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/startbootstrap-shop-homepage-gh-pages/vendor/jquery/jquery.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/startbootstrap-shop-homepage-gh-pages/vendor/jquery/jquery.js"));

        // line 1
        echo "/*!
 * jQuery JavaScript Library v3.4.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2019-05-01T21:04Z
 */
( function( global, factory ) {

\t\"use strict\";

\tif ( typeof module === \"object\" && typeof module.exports === \"object\" ) {

\t\t// For CommonJS and CommonJS-like environments where a proper `window`
\t\t// is present, execute the factory and get jQuery.
\t\t// For environments that do not have a `window` with a `document`
\t\t// (such as Node.js), expose a factory as module.exports.
\t\t// This accentuates the need for the creation of a real `window`.
\t\t// e.g. var jQuery = require(\"jquery\")(window);
\t\t// See ticket #14549 for more info.
\t\tmodule.exports = global.document ?
\t\t\tfactory( global, true ) :
\t\t\tfunction( w ) {
\t\t\t\tif ( !w.document ) {
\t\t\t\t\tthrow new Error( \"jQuery requires a window with a document\" );
\t\t\t\t}
\t\t\t\treturn factory( w );
\t\t\t};
\t} else {
\t\tfactory( global );
\t}

// Pass this if window is not defined yet
} )( typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
\"use strict\";

var arr = [];

var document = window.document;

var getProto = Object.getPrototypeOf;

var slice = arr.slice;

var concat = arr.concat;

var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call( Object );

var support = {};

var isFunction = function isFunction( obj ) {

      // Support: Chrome <=57, Firefox <=52
      // In some browsers, typeof returns \"function\" for HTML <object> elements
      // (i.e., `typeof document.createElement( \"object\" ) === \"function\"`).
      // We don't want to classify *any* DOM node as a function.
      return typeof obj === \"function\" && typeof obj.nodeType !== \"number\";
  };


var isWindow = function isWindow( obj ) {
\t\treturn obj != null && obj === obj.window;
\t};




\tvar preservedScriptAttributes = {
\t\ttype: true,
\t\tsrc: true,
\t\tnonce: true,
\t\tnoModule: true
\t};

\tfunction DOMEval( code, node, doc ) {
\t\tdoc = doc || document;

\t\tvar i, val,
\t\t\tscript = doc.createElement( \"script\" );

\t\tscript.text = code;
\t\tif ( node ) {
\t\t\tfor ( i in preservedScriptAttributes ) {

\t\t\t\t// Support: Firefox 64+, Edge 18+
\t\t\t\t// Some browsers don't support the \"nonce\" property on scripts.
\t\t\t\t// On the other hand, just using `getAttribute` is not enough as
\t\t\t\t// the `nonce` attribute is reset to an empty string whenever it
\t\t\t\t// becomes browsing-context connected.
\t\t\t\t// See https://github.com/whatwg/html/issues/2369
\t\t\t\t// See https://html.spec.whatwg.org/#nonce-attributes
\t\t\t\t// The `node.getAttribute` check was added for the sake of
\t\t\t\t// `jQuery.globalEval` so that it can fake a nonce-containing node
\t\t\t\t// via an object.
\t\t\t\tval = node[ i ] || node.getAttribute && node.getAttribute( i );
\t\t\t\tif ( val ) {
\t\t\t\t\tscript.setAttribute( i, val );
\t\t\t\t}
\t\t\t}
\t\t}
\t\tdoc.head.appendChild( script ).parentNode.removeChild( script );
\t}


function toType( obj ) {
\tif ( obj == null ) {
\t\treturn obj + \"\";
\t}

\t// Support: Android <=2.3 only (functionish RegExp)
\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\tclass2type[ toString.call( obj ) ] || \"object\" :
\t\ttypeof obj;
}
/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



var
\tversion = \"3.4.1\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {

\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android <=4.0 only
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;

jQuery.fn = jQuery.prototype = {

\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {

\t\t// Return all the elements in a clean array
\t\tif ( num == null ) {
\t\t\treturn slice.call( this );
\t\t}

\t\t// Return just the one element from the set
\t\treturn num < 0 ? this[ num + this.length ] : this[ num ];
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\teach: function( callback ) {
\t\treturn jQuery.each( this, callback );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map( this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t} ) );
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor();
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[ 0 ] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// Skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !isFunction( target ) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {

\t\t// Only deal with non-null/undefined values
\t\tif ( ( options = arguments[ i ] ) != null ) {

\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent Object.prototype pollution
\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( name === \"__proto__\" || target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject( copy ) ||
\t\t\t\t\t( copyIsArray = Array.isArray( copy ) ) ) ) {
\t\t\t\t\tsrc = target[ name ];

\t\t\t\t\t// Ensure proper type for the source value
\t\t\t\t\tif ( copyIsArray && !Array.isArray( src ) ) {
\t\t\t\t\t\tclone = [];
\t\t\t\t\t} else if ( !copyIsArray && !jQuery.isPlainObject( src ) ) {
\t\t\t\t\t\tclone = {};
\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src;
\t\t\t\t\t}
\t\t\t\t\tcopyIsArray = false;

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend( {

\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisPlainObject: function( obj ) {
\t\tvar proto, Ctor;

\t\t// Detect obvious negatives
\t\t// Use toString instead of jQuery.type to catch host objects
\t\tif ( !obj || toString.call( obj ) !== \"[object Object]\" ) {
\t\t\treturn false;
\t\t}

\t\tproto = getProto( obj );

\t\t// Objects with no prototype (e.g., `Object.create( null )`) are plain
\t\tif ( !proto ) {
\t\t\treturn true;
\t\t}

\t\t// Objects with prototype are plain iff they were constructed by a global Object function
\t\tCtor = hasOwn.call( proto, \"constructor\" ) && proto.constructor;
\t\treturn typeof Ctor === \"function\" && fnToString.call( Ctor ) === ObjectFunctionString;
\t},

\tisEmptyObject: function( obj ) {
\t\tvar name;

\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code, options ) {
\t\tDOMEval( code, { nonce: options && options.nonce } );
\t},

\teach: function( obj, callback ) {
\t\tvar length, i = 0;

\t\tif ( isArrayLike( obj ) ) {
\t\t\tlength = obj.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tfor ( i in obj ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android <=4.0 only
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArrayLike( Object( arr ) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t},

\t// Support: Android <=4.0 only, PhantomJS 1 only
\t// push.apply(_, arraylike) throws on ancient WebKit
\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\tfor ( ; j < len; j++ ) {
\t\t\tfirst[ i++ ] = second[ j ];
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar length, value,
\t\t\ti = 0,
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArrayLike( elems ) ) {
\t\t\tlength = elems.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
} );

if ( typeof Symbol === \"function\" ) {
\tjQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( \"Boolean Number String Function Array Date RegExp Object Error Symbol\".split( \" \" ),
function( i, name ) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

\t// Support: real iOS 8.2 only (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = !!obj && \"length\" in obj && obj.length,
\t\ttype = toType( obj );

\tif ( isFunction( obj ) || isWindow( obj ) ) {
\t\treturn false;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.3.4
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://js.foundation/
 *
 * Date: 2019-04-08
 */
(function( window ) {

var i,
\tsupport,
\tExpr,
\tgetText,
\tisXML,
\ttokenize,
\tcompile,
\tselect,
\toutermostContext,
\tsortInput,
\thasDuplicate,

\t// Local document vars
\tsetDocument,
\tdocument,
\tdocElem,
\tdocumentIsHTML,
\trbuggyQSA,
\trbuggyMatches,
\tmatches,
\tcontains,

\t// Instance-specific data
\texpando = \"sizzle\" + 1 * new Date(),
\tpreferredDoc = window.document,
\tdirruns = 0,
\tdone = 0,
\tclassCache = createCache(),
\ttokenCache = createCache(),
\tcompilerCache = createCache(),
\tnonnativeSelectorCache = createCache(),
\tsortOrder = function( a, b ) {
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t}
\t\treturn 0;
\t},

\t// Instance methods
\thasOwn = ({}).hasOwnProperty,
\tarr = [],
\tpop = arr.pop,
\tpush_native = arr.push,
\tpush = arr.push,
\tslice = arr.slice,
\t// Use a stripped-down indexOf as it's faster than native
\t// https://jsperf.com/thor-indexof-vs-for/5
\tindexOf = function( list, elem ) {
\t\tvar i = 0,
\t\t\tlen = list.length;
\t\tfor ( ; i < len; i++ ) {
\t\t\tif ( list[i] === elem ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}
\t\treturn -1;
\t},

\tbooleans = \"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped\",

\t// Regular expressions

\t// http://www.w3.org/TR/css3-selectors/#whitespace
\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",

\t// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\tidentifier = \"(?:\\\\\\\\.|[\\\\w-]|[^\\0-\\\\xa0])+\",

\t// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
\tattributes = \"\\\\[\" + whitespace + \"*(\" + identifier + \")(?:\" + whitespace +
\t\t// Operator (capture 2)
\t\t\"*([*^\$|!~]?=)\" + whitespace +
\t\t// \"Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]\"
\t\t\"*(?:'((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\"|(\" + identifier + \"))|)\" + whitespace +
\t\t\"*\\\\]\",

\tpseudos = \":(\" + identifier + \")(?:\\\\((\" +
\t\t// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
\t\t// 1. quoted (capture 3; capture 4 or capture 5)
\t\t\"('((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\")|\" +
\t\t// 2. simple (capture 6)
\t\t\"((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes + \")*)|\" +
\t\t// 3. anything else (capture 2)
\t\t\".*\" +
\t\t\")\\\\)|)\",

\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\trwhitespace = new RegExp( whitespace + \"+\", \"g\" ),
\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\trcombinators = new RegExp( \"^\" + whitespace + \"*([>+~]|\" + whitespace + \")\" + whitespace + \"*\" ),
\trdescend = new RegExp( whitespace + \"|>\" ),

\trpseudo = new RegExp( pseudos ),
\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\tmatchExpr = {
\t\t\"ID\": new RegExp( \"^#(\" + identifier + \")\" ),
\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + identifier + \")\" ),
\t\t\"TAG\": new RegExp( \"^(\" + identifier + \"|[*])\" ),
\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t\"bool\": new RegExp( \"^(?:\" + booleans + \")\$\", \"i\" ),
\t\t// For use in libraries implementing .is()
\t\t// We use this for POS matching in `select`
\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t},

\trhtml = /HTML\$/i,
\trinputs = /^(?:input|select|textarea|button)\$/i,
\trheader = /^h\\d\$/i,

\trnative = /^[^{]+\\{\\s*\\[native \\w/,

\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\trsibling = /[+~]/,

\t// CSS escapes
\t// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\trunescape = new RegExp( \"\\\\\\\\([\\\\da-f]{1,6}\" + whitespace + \"?|(\" + whitespace + \")|.)\", \"ig\" ),
\tfunescape = function( _, escaped, escapedWhitespace ) {
\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t// NaN means non-codepoint
\t\t// Support: Firefox<24
\t\t// Workaround erroneous numeric interpretation of +\"0x\"
\t\treturn high !== high || escapedWhitespace ?
\t\t\tescaped :
\t\t\thigh < 0 ?
\t\t\t\t// BMP codepoint
\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t},

\t// CSS string/identifier serialization
\t// https://drafts.csswg.org/cssom/#common-serializing-idioms
\trcssescape = /([\\0-\\x1f\\x7f]|^-?\\d)|^-\$|[^\\0-\\x1f\\x7f-\\uFFFF\\w-]/g,
\tfcssescape = function( ch, asCodePoint ) {
\t\tif ( asCodePoint ) {

\t\t\t// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
\t\t\tif ( ch === \"\\0\" ) {
\t\t\t\treturn \"\\uFFFD\";
\t\t\t}

\t\t\t// Control characters and (dependent upon position) numbers get escaped as code points
\t\t\treturn ch.slice( 0, -1 ) + \"\\\\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + \" \";
\t\t}

\t\t// Other potentially-special ASCII characters get backslash-escaped
\t\treturn \"\\\\\" + ch;
\t},

\t// Used for iframes
\t// See setDocument()
\t// Removing the function wrapper causes a \"Permission Denied\"
\t// error in IE
\tunloadHandler = function() {
\t\tsetDocument();
\t},

\tinDisabledFieldset = addCombinator(
\t\tfunction( elem ) {
\t\t\treturn elem.disabled === true && elem.nodeName.toLowerCase() === \"fieldset\";
\t\t},
\t\t{ dir: \"parentNode\", next: \"legend\" }
\t);

// Optimize for push.apply( _, NodeList )
try {
\tpush.apply(
\t\t(arr = slice.call( preferredDoc.childNodes )),
\t\tpreferredDoc.childNodes
\t);
\t// Support: Android<4.0
\t// Detect silently failing push.apply
\tarr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
\tpush = { apply: arr.length ?

\t\t// Leverage slice if possible
\t\tfunction( target, els ) {
\t\t\tpush_native.apply( target, slice.call(els) );
\t\t} :

\t\t// Support: IE<9
\t\t// Otherwise append directly
\t\tfunction( target, els ) {
\t\t\tvar j = target.length,
\t\t\t\ti = 0;
\t\t\t// Can't trust NodeList.length
\t\t\twhile ( (target[j++] = els[i++]) ) {}
\t\t\ttarget.length = j - 1;
\t\t}
\t};
}

function Sizzle( selector, context, results, seed ) {
\tvar m, i, elem, nid, match, groups, newSelector,
\t\tnewContext = context && context.ownerDocument,

\t\t// nodeType defaults to 9, since context defaults to document
\t\tnodeType = context ? context.nodeType : 9;

\tresults = results || [];

\t// Return early from calls with invalid selector or context
\tif ( typeof selector !== \"string\" || !selector ||
\t\tnodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

\t\treturn results;
\t}

\t// Try to shortcut find operations (as opposed to filters) in HTML documents
\tif ( !seed ) {

\t\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\t\tsetDocument( context );
\t\t}
\t\tcontext = context || document;

\t\tif ( documentIsHTML ) {

\t\t\t// If the selector is sufficiently simple, try using a \"get*By*\" DOM method
\t\t\t// (excepting DocumentFragment context, where the methods don't exist)
\t\t\tif ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

\t\t\t\t// ID selector
\t\t\t\tif ( (m = match[1]) ) {

\t\t\t\t\t// Document context
\t\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\t\tif ( (elem = context.getElementById( m )) ) {

\t\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}

\t\t\t\t\t// Element context
\t\t\t\t\t} else {

\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\tif ( newContext && (elem = newContext.getElementById( m )) &&
\t\t\t\t\t\t\tcontains( context, elem ) &&
\t\t\t\t\t\t\telem.id === m ) {

\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t// Type selector
\t\t\t\t} else if ( match[2] ) {
\t\t\t\t\tpush.apply( results, context.getElementsByTagName( selector ) );
\t\t\t\t\treturn results;

\t\t\t\t// Class selector
\t\t\t\t} else if ( (m = match[3]) && support.getElementsByClassName &&
\t\t\t\t\tcontext.getElementsByClassName ) {

\t\t\t\t\tpush.apply( results, context.getElementsByClassName( m ) );
\t\t\t\t\treturn results;
\t\t\t\t}
\t\t\t}

\t\t\t// Take advantage of querySelectorAll
\t\t\tif ( support.qsa &&
\t\t\t\t!nonnativeSelectorCache[ selector + \" \" ] &&
\t\t\t\t(!rbuggyQSA || !rbuggyQSA.test( selector )) &&

\t\t\t\t// Support: IE 8 only
\t\t\t\t// Exclude object elements
\t\t\t\t(nodeType !== 1 || context.nodeName.toLowerCase() !== \"object\") ) {

\t\t\t\tnewSelector = selector;
\t\t\t\tnewContext = context;

\t\t\t\t// qSA considers elements outside a scoping root when evaluating child or
\t\t\t\t// descendant combinators, which is not what we want.
\t\t\t\t// In such cases, we work around the behavior by prefixing every selector in the
\t\t\t\t// list with an ID selector referencing the scope context.
\t\t\t\t// Thanks to Andrew Dupont for this technique.
\t\t\t\tif ( nodeType === 1 && rdescend.test( selector ) ) {

\t\t\t\t\t// Capture the context ID, setting it first if necessary
\t\t\t\t\tif ( (nid = context.getAttribute( \"id\" )) ) {
\t\t\t\t\t\tnid = nid.replace( rcssescape, fcssescape );
\t\t\t\t\t} else {
\t\t\t\t\t\tcontext.setAttribute( \"id\", (nid = expando) );
\t\t\t\t\t}

\t\t\t\t\t// Prefix every selector in the list
\t\t\t\t\tgroups = tokenize( selector );
\t\t\t\t\ti = groups.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tgroups[i] = \"#\" + nid + \" \" + toSelector( groups[i] );
\t\t\t\t\t}
\t\t\t\t\tnewSelector = groups.join( \",\" );

\t\t\t\t\t// Expand context for sibling selectors
\t\t\t\t\tnewContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
\t\t\t\t\t\tcontext;
\t\t\t\t}

\t\t\t\ttry {
\t\t\t\t\tpush.apply( results,
\t\t\t\t\t\tnewContext.querySelectorAll( newSelector )
\t\t\t\t\t);
\t\t\t\t\treturn results;
\t\t\t\t} catch ( qsaError ) {
\t\t\t\t\tnonnativeSelectorCache( selector, true );
\t\t\t\t} finally {
\t\t\t\t\tif ( nid === expando ) {
\t\t\t\t\t\tcontext.removeAttribute( \"id\" );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// All others
\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *\tdeleting the oldest entry
 */
function createCache() {
\tvar keys = [];

\tfunction cache( key, value ) {
\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\tif ( keys.push( key + \" \" ) > Expr.cacheLength ) {
\t\t\t// Only keep the most recent entries
\t\t\tdelete cache[ keys.shift() ];
\t\t}
\t\treturn (cache[ key + \" \" ] = value);
\t}
\treturn cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
\tfn[ expando ] = true;
\treturn fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created element and returns a boolean result
 */
function assert( fn ) {
\tvar el = document.createElement(\"fieldset\");

\ttry {
\t\treturn !!fn( el );
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\t// Remove from its parent by default
\t\tif ( el.parentNode ) {
\t\t\tel.parentNode.removeChild( el );
\t\t}
\t\t// release memory in IE
\t\tel = null;
\t}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
\tvar arr = attrs.split(\"|\"),
\t\ti = arr.length;

\twhile ( i-- ) {
\t\tExpr.attrHandle[ arr[i] ] = handler;
\t}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
\tvar cur = b && a,
\t\tdiff = cur && a.nodeType === 1 && b.nodeType === 1 &&
\t\t\ta.sourceIndex - b.sourceIndex;

\t// Use IE sourceIndex if available on both nodes
\tif ( diff ) {
\t\treturn diff;
\t}

\t// Check if b follows a
\tif ( cur ) {
\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\tif ( cur === b ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t}

\treturn a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn name === \"input\" && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for :enabled/:disabled
 * @param {Boolean} disabled true for :disabled; false for :enabled
 */
function createDisabledPseudo( disabled ) {

\t// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
\treturn function( elem ) {

\t\t// Only certain elements can match :enabled or :disabled
\t\t// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
\t\t// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
\t\tif ( \"form\" in elem ) {

\t\t\t// Check for inherited disabledness on relevant non-disabled elements:
\t\t\t// * listed form-associated elements in a disabled fieldset
\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#category-listed
\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
\t\t\t// * option elements in a disabled optgroup
\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
\t\t\t// All such elements have a \"form\" property.
\t\t\tif ( elem.parentNode && elem.disabled === false ) {

\t\t\t\t// Option elements defer to a parent optgroup if present
\t\t\t\tif ( \"label\" in elem ) {
\t\t\t\t\tif ( \"label\" in elem.parentNode ) {
\t\t\t\t\t\treturn elem.parentNode.disabled === disabled;
\t\t\t\t\t} else {
\t\t\t\t\t\treturn elem.disabled === disabled;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Support: IE 6 - 11
\t\t\t\t// Use the isDisabled shortcut property to check for disabled fieldset ancestors
\t\t\t\treturn elem.isDisabled === disabled ||

\t\t\t\t\t// Where there is no isDisabled, check manually
\t\t\t\t\t/* jshint -W018 */
\t\t\t\t\telem.isDisabled !== !disabled &&
\t\t\t\t\t\tinDisabledFieldset( elem ) === disabled;
\t\t\t}

\t\t\treturn elem.disabled === disabled;

\t\t// Try to winnow out elements that can't be disabled before trusting the disabled property.
\t\t// Some victims get caught in our net (label, legend, menu, track), but it shouldn't
\t\t// even exist on them, let alone have a boolean value.
\t\t} else if ( \"label\" in elem ) {
\t\t\treturn elem.disabled === disabled;
\t\t}

\t\t// Remaining elements are neither :enabled nor :disabled
\t\treturn false;
\t};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
\treturn markFunction(function( argument ) {
\t\targument = +argument;
\t\treturn markFunction(function( seed, matches ) {
\t\t\tvar j,
\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\ti = matchIndexes.length;

\t\t\t// Match elements found at the specified indexes
\t\t\twhile ( i-- ) {
\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
\treturn context && typeof context.getElementsByTagName !== \"undefined\" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
\tvar namespace = elem.namespaceURI,
\t\tdocElem = (elem.ownerDocument || elem).documentElement;

\t// Support: IE <=8
\t// Assume HTML when documentElement doesn't yet exist, such as inside loading iframes
\t// https://bugs.jquery.com/ticket/4833
\treturn !rhtml.test( namespace || docElem && docElem.nodeName || \"HTML\" );
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
\tvar hasCompare, subWindow,
\t\tdoc = node ? node.ownerDocument || node : preferredDoc;

\t// Return early if doc is invalid or already selected
\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\treturn document;
\t}

\t// Update global variables
\tdocument = doc;
\tdocElem = document.documentElement;
\tdocumentIsHTML = !isXML( document );

\t// Support: IE 9-11, Edge
\t// Accessing iframe documents after unload throws \"permission denied\" errors (jQuery #13936)
\tif ( preferredDoc !== document &&
\t\t(subWindow = document.defaultView) && subWindow.top !== subWindow ) {

\t\t// Support: IE 11, Edge
\t\tif ( subWindow.addEventListener ) {
\t\t\tsubWindow.addEventListener( \"unload\", unloadHandler, false );

\t\t// Support: IE 9 - 10 only
\t\t} else if ( subWindow.attachEvent ) {
\t\t\tsubWindow.attachEvent( \"onunload\", unloadHandler );
\t\t}
\t}

\t/* Attributes
\t---------------------------------------------------------------------- */

\t// Support: IE<8
\t// Verify that getAttribute really returns attributes and not properties
\t// (excepting IE8 booleans)
\tsupport.attributes = assert(function( el ) {
\t\tel.className = \"i\";
\t\treturn !el.getAttribute(\"className\");
\t});

\t/* getElement(s)By*
\t---------------------------------------------------------------------- */

\t// Check if getElementsByTagName(\"*\") returns only elements
\tsupport.getElementsByTagName = assert(function( el ) {
\t\tel.appendChild( document.createComment(\"\") );
\t\treturn !el.getElementsByTagName(\"*\").length;
\t});

\t// Support: IE<9
\tsupport.getElementsByClassName = rnative.test( document.getElementsByClassName );

\t// Support: IE<10
\t// Check if getElementById returns elements by name
\t// The broken getElementById methods don't pick up programmatically-set names,
\t// so use a roundabout getElementsByName test
\tsupport.getById = assert(function( el ) {
\t\tdocElem.appendChild( el ).id = expando;
\t\treturn !document.getElementsByName || !document.getElementsByName( expando ).length;
\t});

\t// ID filter and find
\tif ( support.getById ) {
\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t};
\t\t};
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar elem = context.getElementById( id );
\t\t\t\treturn elem ? [ elem ] : [];
\t\t\t}
\t\t};
\t} else {
\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\tvar node = typeof elem.getAttributeNode !== \"undefined\" &&
\t\t\t\t\telem.getAttributeNode(\"id\");
\t\t\t\treturn node && node.value === attrId;
\t\t\t};
\t\t};

\t\t// Support: IE 6 - 7 only
\t\t// getElementById is not reliable as a find shortcut
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar node, i, elems,
\t\t\t\t\telem = context.getElementById( id );

\t\t\t\tif ( elem ) {

\t\t\t\t\t// Verify the id attribute
\t\t\t\t\tnode = elem.getAttributeNode(\"id\");
\t\t\t\t\tif ( node && node.value === id ) {
\t\t\t\t\t\treturn [ elem ];
\t\t\t\t\t}

\t\t\t\t\t// Fall back on getElementsByName
\t\t\t\t\telems = context.getElementsByName( id );
\t\t\t\t\ti = 0;
\t\t\t\t\twhile ( (elem = elems[i++]) ) {
\t\t\t\t\t\tnode = elem.getAttributeNode(\"id\");
\t\t\t\t\t\tif ( node && node.value === id ) {
\t\t\t\t\t\t\treturn [ elem ];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn [];
\t\t\t}
\t\t};
\t}

\t// Tag
\tExpr.find[\"TAG\"] = support.getElementsByTagName ?
\t\tfunction( tag, context ) {
\t\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\t\treturn context.getElementsByTagName( tag );

\t\t\t// DocumentFragment nodes don't have gEBTN
\t\t\t} else if ( support.qsa ) {
\t\t\t\treturn context.querySelectorAll( tag );
\t\t\t}
\t\t} :

\t\tfunction( tag, context ) {
\t\t\tvar elem,
\t\t\t\ttmp = [],
\t\t\t\ti = 0,
\t\t\t\t// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t// Filter out possible comments
\t\t\tif ( tag === \"*\" ) {
\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn tmp;
\t\t\t}
\t\t\treturn results;
\t\t};

\t// Class
\tExpr.find[\"CLASS\"] = support.getElementsByClassName && function( className, context ) {
\t\tif ( typeof context.getElementsByClassName !== \"undefined\" && documentIsHTML ) {
\t\t\treturn context.getElementsByClassName( className );
\t\t}
\t};

\t/* QSA/matchesSelector
\t---------------------------------------------------------------------- */

\t// QSA and matchesSelector support

\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\trbuggyMatches = [];

\t// qSa(:focus) reports false when true (Chrome 21)
\t// We allow this because of a bug in IE8/9 that throws an error
\t// whenever `document.activeElement` is accessed on an iframe
\t// So, we allow :focus to pass through QSA all the time to avoid the IE error
\t// See https://bugs.jquery.com/ticket/13378
\trbuggyQSA = [];

\tif ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
\t\t// Build QSA regex
\t\t// Regex strategy adopted from Diego Perini
\t\tassert(function( el ) {
\t\t\t// Select is set to empty string on purpose
\t\t\t// This is to test IE's treatment of not explicitly
\t\t\t// setting a boolean content attribute,
\t\t\t// since its presence should be enough
\t\t\t// https://bugs.jquery.com/ticket/12359
\t\t\tdocElem.appendChild( el ).innerHTML = \"<a id='\" + expando + \"'></a>\" +
\t\t\t\t\"<select id='\" + expando + \"-\\r\\\\' msallowcapture=''>\" +
\t\t\t\t\"<option selected=''></option></select>\";

\t\t\t// Support: IE8, Opera 11-12.16
\t\t\t// Nothing should be selected when empty strings follow ^= or \$= or *=
\t\t\t// The test attribute must be unknown in Opera but \"safe\" for WinRT
\t\t\t// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
\t\t\tif ( el.querySelectorAll(\"[msallowcapture^='']\").length ) {
\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:''|\\\"\\\")\" );
\t\t\t}

\t\t\t// Support: IE8
\t\t\t// Boolean attributes and \"value\" are not treated correctly
\t\t\tif ( !el.querySelectorAll(\"[selected]\").length ) {
\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:value|\" + booleans + \")\" );
\t\t\t}

\t\t\t// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
\t\t\tif ( !el.querySelectorAll( \"[id~=\" + expando + \"-]\" ).length ) {
\t\t\t\trbuggyQSA.push(\"~=\");
\t\t\t}

\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !el.querySelectorAll(\":checked\").length ) {
\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t}

\t\t\t// Support: Safari 8+, iOS 8+
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=136851
\t\t\t// In-page `selector#id sibling-combinator selector` fails
\t\t\tif ( !el.querySelectorAll( \"a#\" + expando + \"+*\" ).length ) {
\t\t\t\trbuggyQSA.push(\".#.+[+~]\");
\t\t\t}
\t\t});

\t\tassert(function( el ) {
\t\t\tel.innerHTML = \"<a href='' disabled='disabled'></a>\" +
\t\t\t\t\"<select disabled='disabled'><option/></select>\";

\t\t\t// Support: Windows 8 Native Apps
\t\t\t// The type and name attributes are restricted during .innerHTML assignment
\t\t\tvar input = document.createElement(\"input\");
\t\t\tinput.setAttribute( \"type\", \"hidden\" );
\t\t\tel.appendChild( input ).setAttribute( \"name\", \"D\" );

\t\t\t// Support: IE8
\t\t\t// Enforce case-sensitivity of name attribute
\t\t\tif ( el.querySelectorAll(\"[name=d]\").length ) {
\t\t\t\trbuggyQSA.push( \"name\" + whitespace + \"*[*^\$|!~]?=\" );
\t\t\t}

\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( el.querySelectorAll(\":enabled\").length !== 2 ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Support: IE9-11+
\t\t\t// IE's :disabled selector does not pick up the children of disabled fieldsets
\t\t\tdocElem.appendChild( el ).disabled = true;
\t\t\tif ( el.querySelectorAll(\":disabled\").length !== 2 ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\tel.querySelectorAll(\"*,:x\");
\t\t\trbuggyQSA.push(\",.*:\");
\t\t});
\t}

\tif ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector) )) ) {

\t\tassert(function( el ) {
\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t// on a disconnected node (IE 9)
\t\t\tsupport.disconnectedMatch = matches.call( el, \"*\" );

\t\t\t// This should fail with an exception
\t\t\t// Gecko does not error, returns false instead
\t\t\tmatches.call( el, \"[s!='']:x\" );
\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t});
\t}

\trbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join(\"|\") );
\trbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join(\"|\") );

\t/* Contains
\t---------------------------------------------------------------------- */
\thasCompare = rnative.test( docElem.compareDocumentPosition );

\t// Element contains another
\t// Purposefully self-exclusive
\t// As in, an element does not contain itself
\tcontains = hasCompare || rnative.test( docElem.contains ) ?
\t\tfunction( a, b ) {
\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\tbup = b && b.parentNode;
\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\tadown.contains ?
\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t));
\t\t} :
\t\tfunction( a, b ) {
\t\t\tif ( b ) {
\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};

\t/* Sorting
\t---------------------------------------------------------------------- */

\t// Document order sorting
\tsortOrder = hasCompare ?
\tfunction( a, b ) {

\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\t// Sort on method existence if only one input has compareDocumentPosition
\t\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\t\tif ( compare ) {
\t\t\treturn compare;
\t\t}

\t\t// Calculate position if both inputs belong to the same document
\t\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\t\ta.compareDocumentPosition( b ) :

\t\t\t// Otherwise we know they are disconnected
\t\t\t1;

\t\t// Disconnected nodes
\t\tif ( compare & 1 ||
\t\t\t(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

\t\t\t// Choose the first element that is related to our preferred document
\t\t\tif ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t\tif ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\t// Maintain original order
\t\t\treturn sortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;
\t\t}

\t\treturn compare & 4 ? -1 : 1;
\t} :
\tfunction( a, b ) {
\t\t// Exit early if the nodes are identical
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar cur,
\t\t\ti = 0,
\t\t\taup = a.parentNode,
\t\t\tbup = b.parentNode,
\t\t\tap = [ a ],
\t\t\tbp = [ b ];

\t\t// Parentless nodes are either documents or disconnected
\t\tif ( !aup || !bup ) {
\t\t\treturn a === document ? -1 :
\t\t\t\tb === document ? 1 :
\t\t\t\taup ? -1 :
\t\t\t\tbup ? 1 :
\t\t\t\tsortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;

\t\t// If the nodes are siblings, we can do a quick check
\t\t} else if ( aup === bup ) {
\t\t\treturn siblingCheck( a, b );
\t\t}

\t\t// Otherwise we need full lists of their ancestors for comparison
\t\tcur = a;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tap.unshift( cur );
\t\t}
\t\tcur = b;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tbp.unshift( cur );
\t\t}

\t\t// Walk down the tree looking for a discrepancy
\t\twhile ( ap[i] === bp[i] ) {
\t\t\ti++;
\t\t}

\t\treturn i ?
\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t// Otherwise nodes in our document sort first
\t\t\tap[i] === preferredDoc ? -1 :
\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t0;
\t};

\treturn document;
};

Sizzle.matches = function( expr, elements ) {
\treturn Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tif ( support.matchesSelector && documentIsHTML &&
\t\t!nonnativeSelectorCache[ expr + \" \" ] &&
\t\t( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
\t\t( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

\t\ttry {
\t\t\tvar ret = matches.call( elem, expr );

\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t// fragment in IE 9
\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\treturn ret;
\t\t\t}
\t\t} catch (e) {
\t\t\tnonnativeSelectorCache( expr, true );
\t\t}
\t}

\treturn Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
\t// Set document vars if needed
\tif ( ( context.ownerDocument || context ) !== document ) {
\t\tsetDocument( context );
\t}
\treturn contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tvar fn = Expr.attrHandle[ name.toLowerCase() ],
\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\tval = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
\t\t\tfn( elem, name, !documentIsHTML ) :
\t\t\tundefined;

\treturn val !== undefined ?
\t\tval :
\t\tsupport.attributes || !documentIsHTML ?
\t\t\telem.getAttribute( name ) :
\t\t\t(val = elem.getAttributeNode(name)) && val.specified ?
\t\t\t\tval.value :
\t\t\t\tnull;
};

Sizzle.escape = function( sel ) {
\treturn (sel + \"\").replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\t// Unless we *know* we can detect duplicates, assume their presence
\thasDuplicate = !support.detectDuplicates;
\tsortInput = !support.sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( (elem = results[i++]) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
\tvar node,
\t\tret = \"\",
\t\ti = 0,
\t\tnodeType = elem.nodeType;

\tif ( !nodeType ) {
\t\t// If no nodeType, this is expected to be an array
\t\twhile ( (node = elem[i++]) ) {
\t\t\t// Do not traverse comment nodes
\t\t\tret += getText( node );
\t\t}
\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t// Use textContent for elements
\t\t// innerText usage removed for consistency of new lines (jQuery #11153)
\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\treturn elem.textContent;
\t\t} else {
\t\t\t// Traverse its children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tret += getText( elem );
\t\t\t}
\t\t}
\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\treturn elem.nodeValue;
\t}
\t// Do not include comment or processing instruction nodes

\treturn ret;
};

Expr = Sizzle.selectors = {

\t// Can be adjusted by the user
\tcacheLength: 50,

\tcreatePseudo: markFunction,

\tmatch: matchExpr,

\tattrHandle: {},

\tfind: {},

\trelative: {
\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\" \": { dir: \"parentNode\" },
\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\"~\": { dir: \"previousSibling\" }
\t},

\tpreFilter: {
\t\t\"ATTR\": function( match ) {
\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\tmatch[3] = ( match[3] || match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t}

\t\t\treturn match.slice( 0, 4 );
\t\t},

\t\t\"CHILD\": function( match ) {
\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t// nth-* requires argument
\t\t\t\tif ( !match[3] ) {
\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t}

\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t// other types prohibit arguments
\t\t\t} else if ( match[3] ) {
\t\t\t\tSizzle.error( match[0] );
\t\t\t}

\t\t\treturn match;
\t\t},

\t\t\"PSEUDO\": function( match ) {
\t\t\tvar excess,
\t\t\t\tunquoted = !match[6] && match[2];

\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\t// Accept quoted arguments as-is
\t\t\tif ( match[3] ) {
\t\t\t\tmatch[2] = match[4] || match[5] || \"\";

\t\t\t// Strip excess characters from unquoted arguments
\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t// excess is a negative index
\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t}

\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\treturn match.slice( 0, 3 );
\t\t}
\t},

\tfilter: {

\t\t\"TAG\": function( nodeNameSelector ) {
\t\t\tvar nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
\t\t\treturn nodeNameSelector === \"*\" ?
\t\t\t\tfunction() { return true; } :
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t\t};
\t\t},

\t\t\"CLASS\": function( className ) {
\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\treturn pattern ||
\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\treturn pattern.test( typeof elem.className === \"string\" && elem.className || typeof elem.getAttribute !== \"undefined\" && elem.getAttribute(\"class\") || \"\" );
\t\t\t\t});
\t\t},

\t\t\"ATTR\": function( name, operator, check ) {
\t\t\treturn function( elem ) {
\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\tif ( result == null ) {
\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t}
\t\t\t\tif ( !operator ) {
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tresult += \"\";

\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\toperator === \"~=\" ? ( \" \" + result.replace( rwhitespace, \" \" ) + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\tfalse;
\t\t\t};
\t\t},

\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\tofType = what === \"of-type\";

\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t} :

\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tvar cache, uniqueCache, outerCache, node, nodeIndex, start,
\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\tuseCache = !xml && !ofType,
\t\t\t\t\t\tdiff = false;

\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\tif ( ofType ?
\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) {

\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\tif ( forward && useCache ) {

\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index

\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\tnode = parent;
\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\tdiff = nodeIndex && cache[ 2 ];
\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\t\tdiff = nodeIndex;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// xml :nth-child(...)
\t\t\t\t\t\t\t// or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t\tif ( diff === false ) {
\t\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t\tif ( ( ofType ?
\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) &&
\t\t\t\t\t\t\t\t\t\t++diff ) {

\t\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t}
\t\t\t\t};
\t\t},

\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t// pseudo-class names are case-insensitive
\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t// Remember that setFilters inherits from pseudos
\t\t\tvar args,
\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t// The user may use createPseudo to indicate that
\t\t\t// arguments are needed to create the filter function
\t\t\t// just as Sizzle does
\t\t\tif ( fn[ expando ] ) {
\t\t\t\treturn fn( argument );
\t\t\t}

\t\t\t// But maintain support for old signatures
\t\t\tif ( fn.length > 1 ) {
\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tidx = indexOf( seed, matched[i] );
\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t}
\t\t\t\t\t}) :
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t};
\t\t\t}

\t\t\treturn fn;
\t\t}
\t},

\tpseudos: {
\t\t// Potentially complex pseudos
\t\t\"not\": markFunction(function( selector ) {
\t\t\t// Trim the selector passed to compile
\t\t\t// to avoid treating leading and trailing
\t\t\t// spaces as combinators
\t\t\tvar input = [],
\t\t\t\tresults = [],
\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\treturn matcher[ expando ] ?
\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\tvar elem,
\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}) :
\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tinput[0] = elem;
\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\t// Don't keep the element (issue #299)
\t\t\t\t\tinput[0] = null;
\t\t\t\t\treturn !results.pop();
\t\t\t\t};
\t\t}),

\t\t\"has\": markFunction(function( selector ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t};
\t\t}),

\t\t\"contains\": markFunction(function( text ) {
\t\t\ttext = text.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn ( elem.textContent || getText( elem ) ).indexOf( text ) > -1;
\t\t\t};
\t\t}),

\t\t// \"Whether an element is represented by a :lang() selector
\t\t// is based solely on the element's language value
\t\t// being equal to the identifier C,
\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t// The identifier C does not have to be a valid language name.\"
\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\"lang\": markFunction( function( lang ) {
\t\t\t// lang value must be a valid identifier
\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t}
\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\tvar elemLang;
\t\t\t\tdo {
\t\t\t\t\tif ( (elemLang = documentIsHTML ?
\t\t\t\t\t\telem.lang :
\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\")) ) {

\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t}
\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\treturn false;
\t\t\t};
\t\t}),

\t\t// Miscellaneous
\t\t\"target\": function( elem ) {
\t\t\tvar hash = window.location && window.location.hash;
\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t},

\t\t\"root\": function( elem ) {
\t\t\treturn elem === docElem;
\t\t},

\t\t\"focus\": function( elem ) {
\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t},

\t\t// Boolean properties
\t\t\"enabled\": createDisabledPseudo( false ),
\t\t\"disabled\": createDisabledPseudo( true ),

\t\t\"checked\": function( elem ) {
\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t},

\t\t\"selected\": function( elem ) {
\t\t\t// Accessing this property makes selected-by-default
\t\t\t// options in Safari work properly
\t\t\tif ( elem.parentNode ) {
\t\t\t\telem.parentNode.selectedIndex;
\t\t\t}

\t\t\treturn elem.selected === true;
\t\t},

\t\t// Contents
\t\t\"empty\": function( elem ) {
\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
\t\t\t//   but not by others (comment: 8; processing instruction: 7; etc.)
\t\t\t// nodeType < 6 works because attributes (2) do not appear as children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tif ( elem.nodeType < 6 ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t\"parent\": function( elem ) {
\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t},

\t\t// Element/input types
\t\t\"header\": function( elem ) {
\t\t\treturn rheader.test( elem.nodeName );
\t\t},

\t\t\"input\": function( elem ) {
\t\t\treturn rinputs.test( elem.nodeName );
\t\t},

\t\t\"button\": function( elem ) {
\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t},

\t\t\"text\": function( elem ) {
\t\t\tvar attr;
\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\telem.type === \"text\" &&

\t\t\t\t// Support: IE<8
\t\t\t\t// New HTML5 attribute values (e.g., \"search\") appear with elem.type === \"text\"
\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === \"text\" );
\t\t},

\t\t// Position-in-collection
\t\t\"first\": createPositionalPseudo(function() {
\t\t\treturn [ 0 ];
\t\t}),

\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\treturn [ length - 1 ];
\t\t}),

\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t}),

\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 1;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ?
\t\t\t\targument + length :
\t\t\t\targument > length ?
\t\t\t\t\tlength :
\t\t\t\t\targument;
\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; ++i < length; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t})
\t}
};

Expr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\tExpr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
\tExpr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
\tvar matched, match, tokens, type,
\t\tsoFar, groups, preFilters,
\t\tcached = tokenCache[ selector + \" \" ];

\tif ( cached ) {
\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t}

\tsoFar = selector;
\tgroups = [];
\tpreFilters = Expr.preFilter;

\twhile ( soFar ) {

\t\t// Comma and first run
\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\tif ( match ) {
\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t}
\t\t\tgroups.push( (tokens = []) );
\t\t}

\t\tmatched = false;

\t\t// Combinators
\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\tmatched = match.shift();
\t\t\ttokens.push({
\t\t\t\tvalue: matched,
\t\t\t\t// Cast descendant combinators to space
\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t});
\t\t\tsoFar = soFar.slice( matched.length );
\t\t}

\t\t// Filters
\t\tfor ( type in Expr.filter ) {
\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\tmatched = match.shift();
\t\t\t\ttokens.push({
\t\t\t\t\tvalue: matched,
\t\t\t\t\ttype: type,
\t\t\t\t\tmatches: match
\t\t\t\t});
\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t}
\t\t}

\t\tif ( !matched ) {
\t\t\tbreak;
\t\t}
\t}

\t// Return the length of the invalid excess
\t// if we're just parsing
\t// Otherwise, throw an error or return tokens
\treturn parseOnly ?
\t\tsoFar.length :
\t\tsoFar ?
\t\t\tSizzle.error( selector ) :
\t\t\t// Cache the tokens
\t\t\ttokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
\tvar i = 0,
\t\tlen = tokens.length,
\t\tselector = \"\";
\tfor ( ; i < len; i++ ) {
\t\tselector += tokens[i].value;
\t}
\treturn selector;
}

function addCombinator( matcher, combinator, base ) {
\tvar dir = combinator.dir,
\t\tskip = combinator.next,
\t\tkey = skip || dir,
\t\tcheckNonElements = base && key === \"parentNode\",
\t\tdoneName = done++;

\treturn combinator.first ?
\t\t// Check against closest ancestor/preceding element
\t\tfunction( elem, context, xml ) {
\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t} :

\t\t// Check against all ancestor/preceding elements
\t\tfunction( elem, context, xml ) {
\t\t\tvar oldCache, uniqueCache, outerCache,
\t\t\t\tnewCache = [ dirruns, doneName ];

\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
\t\t\tif ( xml ) {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});

\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\tuniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

\t\t\t\t\t\tif ( skip && skip === elem.nodeName.toLowerCase() ) {
\t\t\t\t\t\t\telem = elem[ dir ] || elem;
\t\t\t\t\t\t} else if ( (oldCache = uniqueCache[ key ]) &&
\t\t\t\t\t\t\toldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

\t\t\t\t\t\t\t// Assign to newCache so results back-propagate to previous elements
\t\t\t\t\t\t\treturn (newCache[ 2 ] = oldCache[ 2 ]);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Reuse newcache so results back-propagate to previous elements
\t\t\t\t\t\t\tuniqueCache[ key ] = newCache;

\t\t\t\t\t\t\t// A match means we're done; a fail means we have to keep checking
\t\t\t\t\t\t\tif ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};
}

function elementMatcher( matchers ) {
\treturn matchers.length > 1 ?
\t\tfunction( elem, context, xml ) {
\t\t\tvar i = matchers.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} :
\t\tmatchers[0];
}

function multipleContexts( selector, contexts, results ) {
\tvar i = 0,
\t\tlen = contexts.length;
\tfor ( ; i < len; i++ ) {
\t\tSizzle( selector, contexts[i], results );
\t}
\treturn results;
}

function condense( unmatched, map, filter, context, xml ) {
\tvar elem,
\t\tnewUnmatched = [],
\t\ti = 0,
\t\tlen = unmatched.length,
\t\tmapped = map != null;

\tfor ( ; i < len; i++ ) {
\t\tif ( (elem = unmatched[i]) ) {
\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\tnewUnmatched.push( elem );
\t\t\t\tif ( mapped ) {
\t\t\t\t\tmap.push( i );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\tif ( postFilter && !postFilter[ expando ] ) {
\t\tpostFilter = setMatcher( postFilter );
\t}
\tif ( postFinder && !postFinder[ expando ] ) {
\t\tpostFinder = setMatcher( postFinder, postSelector );
\t}
\treturn markFunction(function( seed, results, context, xml ) {
\t\tvar temp, i, elem,
\t\t\tpreMap = [],
\t\t\tpostMap = [],
\t\t\tpreexisting = results.length,

\t\t\t// Get initial elements from seed or context
\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\telems,

\t\t\tmatcherOut = matcher ?
\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t[] :

\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\tresults :
\t\t\t\tmatcherIn;

\t\t// Find primary matches
\t\tif ( matcher ) {
\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t}

\t\t// Apply postFilter
\t\tif ( postFilter ) {
\t\t\ttemp = condense( matcherOut, postMap );
\t\t\tpostFilter( temp, [], context, xml );

\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\ti = temp.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( seed ) {
\t\t\tif ( postFinder || preFilter ) {
\t\t\t\tif ( postFinder ) {
\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\ttemp = [];
\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t}

\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\ti = matcherOut.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// Add elements to results, through postFinder if defined
\t\t} else {
\t\t\tmatcherOut = condense(
\t\t\t\tmatcherOut === results ?
\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\tmatcherOut
\t\t\t);
\t\t\tif ( postFinder ) {
\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t} else {
\t\t\t\tpush.apply( results, matcherOut );
\t\t\t}
\t\t}
\t});
}

function matcherFromTokens( tokens ) {
\tvar checkContext, matcher, j,
\t\tlen = tokens.length,
\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\ti = leadingRelative ? 1 : 0,

\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\tmatchContext = addCombinator( function( elem ) {
\t\t\treturn elem === checkContext;
\t\t}, implicitRelative, true ),
\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\treturn indexOf( checkContext, elem ) > -1;
\t\t}, implicitRelative, true ),
\t\tmatchers = [ function( elem, context, xml ) {
\t\t\tvar ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t\t// Avoid hanging onto element (issue #299)
\t\t\tcheckContext = null;
\t\t\treturn ret;
\t\t} ];

\tfor ( ; i < len; i++ ) {
\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t} else {
\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t// Return special upon seeing a positional matcher
\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\tj = ++i;
\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn setMatcher(
\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\ti > 1 && toSelector(
\t\t\t\t\t\t// If the preceding token was a descendant combinator, insert an implicit any-element `*`
\t\t\t\t\t\ttokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === \" \" ? \"*\" : \"\" })
\t\t\t\t\t).replace( rtrim, \"\$1\" ),
\t\t\t\t\tmatcher,
\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t);
\t\t\t}
\t\t\tmatchers.push( matcher );
\t\t}
\t}

\treturn elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\tvar bySet = setMatchers.length > 0,
\t\tbyElement = elementMatchers.length > 0,
\t\tsuperMatcher = function( seed, context, xml, results, outermost ) {
\t\t\tvar elem, j, matcher,
\t\t\t\tmatchedCount = 0,
\t\t\t\ti = \"0\",
\t\t\t\tunmatched = seed && [],
\t\t\t\tsetMatched = [],
\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t// We must always have either seed elements or outermost context
\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", outermost ),
\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
\t\t\t\tlen = elems.length;

\t\t\tif ( outermost ) {
\t\t\t\toutermostContext = context === document || context || outermost;
\t\t\t}

\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t// Support: IE<9, Safari
\t\t\t// Tolerate NodeList properties (IE: \"length\"; Safari: <number>) matching elements by id
\t\t\tfor ( ; i !== len && (elem = elems[i]) != null; i++ ) {
\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\tj = 0;
\t\t\t\t\tif ( !context && elem.ownerDocument !== document ) {
\t\t\t\t\t\tsetDocument( elem );
\t\t\t\t\t\txml = !documentIsHTML;
\t\t\t\t\t}
\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\tif ( matcher( elem, context || document, xml) ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Track unmatched elements for set filters
\t\t\t\tif ( bySet ) {
\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t}

\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// `i` is now the count of elements visited above, and adding it to `matchedCount`
\t\t\t// makes the latter nonnegative.
\t\t\tmatchedCount += i;

\t\t\t// Apply set filters to unmatched elements
\t\t\t// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
\t\t\t// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
\t\t\t// no element matchers and no seed.
\t\t\t// Incrementing an initially-string \"0\" `i` allows `i` to remain a string only in that
\t\t\t// case, which will result in a \"00\" `matchedCount` that differs from `i` but is also
\t\t\t// numerically zero.
\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t}

\t\t\t\tif ( seed ) {
\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t}

\t\t\t\t// Add matches to results
\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t}
\t\t\t}

\t\t\t// Override manipulation of globals by nested matchers
\t\t\tif ( outermost ) {
\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\toutermostContext = contextBackup;
\t\t\t}

\t\t\treturn unmatched;
\t\t};

\treturn bySet ?
\t\tmarkFunction( superMatcher ) :
\t\tsuperMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
\tvar i,
\t\tsetMatchers = [],
\t\telementMatchers = [],
\t\tcached = compilerCache[ selector + \" \" ];

\tif ( !cached ) {
\t\t// Generate a function of recursive functions that can be used to check each element
\t\tif ( !match ) {
\t\t\tmatch = tokenize( selector );
\t\t}
\t\ti = match.length;
\t\twhile ( i-- ) {
\t\t\tcached = matcherFromTokens( match[i] );
\t\t\tif ( cached[ expando ] ) {
\t\t\t\tsetMatchers.push( cached );
\t\t\t} else {
\t\t\t\telementMatchers.push( cached );
\t\t\t}
\t\t}

\t\t// Cache the compiled function
\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

\t\t// Save selector and tokenization
\t\tcached.selector = selector;
\t}
\treturn cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
\tvar i, tokens, token, type, find,
\t\tcompiled = typeof selector === \"function\" && selector,
\t\tmatch = !seed && tokenize( (selector = compiled.selector || selector) );

\tresults = results || [];

\t// Try to minimize operations if there is only one selector in the list and no seed
\t// (the latter of which guarantees us context)
\tif ( match.length === 1 ) {

\t\t// Reduce context if the leading compound selector is an ID
\t\ttokens = match[0] = match[0].slice( 0 );
\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\tcontext.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[1].type ] ) {

\t\t\tcontext = ( Expr.find[\"ID\"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
\t\t\tif ( !context ) {
\t\t\t\treturn results;

\t\t\t// Precompiled matchers will still verify ancestry, so step up a level
\t\t\t} else if ( compiled ) {
\t\t\t\tcontext = context.parentNode;
\t\t\t}

\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t}

\t\t// Fetch a seed set for right-to-left matching
\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\twhile ( i-- ) {
\t\t\ttoken = tokens[i];

\t\t\t// Abort if we hit a combinator
\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\tif ( (seed = find(
\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\trsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
\t\t\t\t)) ) {

\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\tpush.apply( results, seed );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Compile and execute a filtering function if one is not provided
\t// Provide `match` to avoid retokenization if we modified the selector above
\t( compiled || compile( selector, match ) )(
\t\tseed,
\t\tcontext,
\t\t!documentIsHTML,
\t\tresults,
\t\t!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
\t);
\treturn results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split(\"\").sort( sortOrder ).join(\"\") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( el ) {
\t// Should return 1, but returns 4 (following)
\treturn el.compareDocumentPosition( document.createElement(\"fieldset\") ) & 1;
});

// Support: IE<8
// Prevent attribute/property \"interpolation\"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( el ) {
\tel.innerHTML = \"<a href='#'></a>\";
\treturn el.firstChild.getAttribute(\"href\") === \"#\" ;
}) ) {
\taddHandle( \"type|href|height|width\", function( elem, name, isXML ) {
\t\tif ( !isXML ) {
\t\t\treturn elem.getAttribute( name, name.toLowerCase() === \"type\" ? 1 : 2 );
\t\t}
\t});
}

// Support: IE<9
// Use defaultValue in place of getAttribute(\"value\")
if ( !support.attributes || !assert(function( el ) {
\tel.innerHTML = \"<input/>\";
\tel.firstChild.setAttribute( \"value\", \"\" );
\treturn el.firstChild.getAttribute( \"value\" ) === \"\";
}) ) {
\taddHandle( \"value\", function( elem, name, isXML ) {
\t\tif ( !isXML && elem.nodeName.toLowerCase() === \"input\" ) {
\t\t\treturn elem.defaultValue;
\t\t}
\t});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( el ) {
\treturn el.getAttribute(\"disabled\") == null;
}) ) {
\taddHandle( booleans, function( elem, name, isXML ) {
\t\tvar val;
\t\tif ( !isXML ) {
\t\t\treturn elem[ name ] === true ? name.toLowerCase() :
\t\t\t\t\t(val = elem.getAttributeNode( name )) && val.specified ?
\t\t\t\t\tval.value :
\t\t\t\tnull;
\t\t}
\t});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ \":\" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
\tvar matched = [],
\t\ttruncate = until !== undefined;

\twhile ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
\t\tif ( elem.nodeType === 1 ) {
\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tmatched.push( elem );
\t\t}
\t}
\treturn matched;
};


var siblings = function( n, elem ) {
\tvar matched = [];

\tfor ( ; n; n = n.nextSibling ) {
\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\tmatched.push( n );
\t\t}
\t}

\treturn matched;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName( elem, name ) {

  return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};
var rsingleTag = ( /^<([a-z][^\\/\\0>:\\x20\\t\\r\\n\\f]*)[\\x20\\t\\r\\n\\f]*\\/?>(?:<\\/\\1>|)\$/i );



// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t} );
\t}

\t// Single element
\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t} );
\t}

\t// Arraylike of elements (jQuery, arguments, Array)
\tif ( typeof qualifier !== \"string\" ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not;
\t\t} );
\t}

\t// Filtered directly for both simple and complex selectors
\treturn jQuery.filter( qualifier, elements, not );
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\tif ( elems.length === 1 && elem.nodeType === 1 ) {
\t\treturn jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
\t}

\treturn jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\treturn elem.nodeType === 1;
\t} ) );
};

jQuery.fn.extend( {
\tfind: function( selector ) {
\t\tvar i, ret,
\t\t\tlen = this.length,
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter( function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} ) );
\t\t}

\t\tret = this.pushStack( [] );

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\treturn len > 1 ? jQuery.uniqueSort( ret ) : ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], false ) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], true ) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\t// Shortcut simple #id case for speed
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]+))\$/,

\tinit = jQuery.fn.init = function( selector, context, root ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Method init() accepts an alternate rootjQuery
\t\t// so migrate can support jQuery.sub (gh-2101)
\t\troot = root || rootjQuery;

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[ 0 ] === \"<\" &&
\t\t\t\tselector[ selector.length - 1 ] === \">\" &&
\t\t\t\tselector.length >= 3 ) {

\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && ( match[ 1 ] || !context ) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[ 1 ] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[ 0 ] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[ 1 ],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {

\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[ 2 ] );

\t\t\t\t\tif ( elem ) {

\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis[ 0 ] = elem;
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || root ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis[ 0 ] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( isFunction( selector ) ) {
\t\t\treturn root.ready !== undefined ?
\t\t\t\troot.ready( selector ) :

\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.fn.extend( {
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter( function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[ i ] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\ttargets = typeof selectors !== \"string\" && jQuery( selectors );

\t\t// Positional selectors never match, since there's no _selection_ context
\t\tif ( !rneedsContext.test( selectors ) ) {
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tfor ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

\t\t\t\t\t// Always skip document fragments
\t\t\t\t\tif ( cur.nodeType < 11 && ( targets ?
\t\t\t\t\t\ttargets.index( cur ) > -1 :

\t\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\t\tjQuery.find.matchesSelector( cur, selectors ) ) ) {

\t\t\t\t\t\tmatched.push( cur );
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
\t},

\t// Determine the position of an element within the set
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// Index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn indexOf.call( this,

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t);
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.uniqueSort(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t}
} );

function sibling( cur, dir ) {
\twhile ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each( {
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn siblings( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn siblings( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\tif ( typeof elem.contentDocument !== \"undefined\" ) {
\t\t\treturn elem.contentDocument;
\t\t}

\t\t// Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
\t\t// Treat the template element as a regular one in browsers that
\t\t// don't support it.
\t\tif ( nodeName( elem, \"template\" ) ) {
\t\t\telem = elem.content || elem;
\t\t}

\t\treturn jQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar matched = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tmatched = jQuery.filter( selector, matched );
\t\t}

\t\tif ( this.length > 1 ) {

\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tjQuery.uniqueSort( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
} );
var rnothtmlwhite = ( /[^\\x20\\t\\r\\n\\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
\tvar object = {};
\tjQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t} );
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\tcreateOptions( options ) :
\t\tjQuery.extend( {}, options );

\tvar // Flag to know if list is currently firing
\t\tfiring,

\t\t// Last fire value for non-forgettable lists
\t\tmemory,

\t\t// Flag to know if list was already fired
\t\tfired,

\t\t// Flag to prevent firing
\t\tlocked,

\t\t// Actual callback list
\t\tlist = [],

\t\t// Queue of execution data for repeatable lists
\t\tqueue = [],

\t\t// Index of currently firing callback (modified by add/remove as needed)
\t\tfiringIndex = -1,

\t\t// Fire callbacks
\t\tfire = function() {

\t\t\t// Enforce single-firing
\t\t\tlocked = locked || options.once;

\t\t\t// Execute callbacks for all pending executions,
\t\t\t// respecting firingIndex overrides and runtime changes
\t\t\tfired = firing = true;
\t\t\tfor ( ; queue.length; firingIndex = -1 ) {
\t\t\t\tmemory = queue.shift();
\t\t\t\twhile ( ++firingIndex < list.length ) {

\t\t\t\t\t// Run callback and check for early termination
\t\t\t\t\tif ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
\t\t\t\t\t\toptions.stopOnFalse ) {

\t\t\t\t\t\t// Jump to end and forget the data so .add doesn't re-fire
\t\t\t\t\t\tfiringIndex = list.length;
\t\t\t\t\t\tmemory = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Forget the data if we're done with it
\t\t\tif ( !options.memory ) {
\t\t\t\tmemory = false;
\t\t\t}

\t\t\tfiring = false;

\t\t\t// Clean up if we're done firing for good
\t\t\tif ( locked ) {

\t\t\t\t// Keep an empty list if we have data for future add calls
\t\t\t\tif ( memory ) {
\t\t\t\t\tlist = [];

\t\t\t\t// Otherwise, this object is spent
\t\t\t\t} else {
\t\t\t\t\tlist = \"\";
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Actual Callbacks object
\t\tself = {

\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {

\t\t\t\t\t// If we have memory from a past run, we should fire after adding
\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfiringIndex = list.length - 1;
\t\t\t\t\t\tqueue.push( memory );
\t\t\t\t\t}

\t\t\t\t\t( function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tif ( isFunction( arg ) ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && toType( arg ) !== \"string\" ) {

\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} );
\t\t\t\t\t} )( arguments );

\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\tvar index;
\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\tlist.splice( index, 1 );

\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ?
\t\t\t\t\tjQuery.inArray( fn, list ) > -1 :
\t\t\t\t\tlist.length > 0;
\t\t\t},

\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tlist = [];
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Disable .fire and .add
\t\t\t// Abort any current/pending executions
\t\t\t// Clear all callbacks and values
\t\t\tdisable: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tlist = memory = \"\";
\t\t\t\treturn this;
\t\t\t},
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},

\t\t\t// Disable .fire
\t\t\t// Also disable .add unless we have memory (since it would have no effect)
\t\t\t// Abort any pending executions
\t\t\tlock: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tif ( !memory && !firing ) {
\t\t\t\t\tlist = memory = \"\";
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\tlocked: function() {
\t\t\t\treturn !!locked;
\t\t\t},

\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( !locked ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tqueue.push( args );
\t\t\t\t\tif ( !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};


function Identity( v ) {
\treturn v;
}
function Thrower( ex ) {
\tthrow ex;
}

function adoptValue( value, resolve, reject, noValue ) {
\tvar method;

\ttry {

\t\t// Check for promise aspect first to privilege synchronous behavior
\t\tif ( value && isFunction( ( method = value.promise ) ) ) {
\t\t\tmethod.call( value ).done( resolve ).fail( reject );

\t\t// Other thenables
\t\t} else if ( value && isFunction( ( method = value.then ) ) ) {
\t\t\tmethod.call( value, resolve, reject );

\t\t// Other non-thenables
\t\t} else {

\t\t\t// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
\t\t\t// * false: [ value ].slice( 0 ) => resolve( value )
\t\t\t// * true: [ value ].slice( 1 ) => resolve()
\t\t\tresolve.apply( undefined, [ value ].slice( noValue ) );
\t\t}

\t// For Promises/A+, convert exceptions into rejections
\t// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
\t// Deferred#then to conditionally suppress rejection.
\t} catch ( value ) {

\t\t// Support: Android 4.0 only
\t\t// Strict mode functions invoked without .call/.apply get global-object context
\t\treject.apply( undefined, [ value ] );
\t}
}

jQuery.extend( {

\tDeferred: function( func ) {
\t\tvar tuples = [

\t\t\t\t// action, add listener, callbacks,
\t\t\t\t// ... .then handlers, argument index, [final state]
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks( \"memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"memory\" ), 2 ],
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 0, \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 1, \"rejected\" ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\t\"catch\": function( fn ) {
\t\t\t\t\treturn promise.then( null, fn );
\t\t\t\t},

\t\t\t\t// Keep pipe for back-compat
\t\t\t\tpipe: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {

\t\t\t\t\t\t\t// Map tuples (progress, done, fail) to arguments (done, fail, progress)
\t\t\t\t\t\t\tvar fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

\t\t\t\t\t\t\t// deferred.progress(function() { bind to newDefer or newDefer.notify })
\t\t\t\t\t\t\t// deferred.done(function() { bind to newDefer or newDefer.resolve })
\t\t\t\t\t\t\t// deferred.fail(function() { bind to newDefer or newDefer.reject })
\t\t\t\t\t\t\tdeferred[ tuple[ 1 ] ]( function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify )
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ](
\t\t\t\t\t\t\t\t\t\tthis,
\t\t\t\t\t\t\t\t\t\tfn ? [ returned ] : arguments
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} );
\t\t\t\t\t\tfns = null;
\t\t\t\t\t} ).promise();
\t\t\t\t},
\t\t\t\tthen: function( onFulfilled, onRejected, onProgress ) {
\t\t\t\t\tvar maxDepth = 0;
\t\t\t\t\tfunction resolve( depth, deferred, handler, special ) {
\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\tvar that = this,
\t\t\t\t\t\t\t\targs = arguments,
\t\t\t\t\t\t\t\tmightThrow = function() {
\t\t\t\t\t\t\t\t\tvar returned, then;

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.3
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-59
\t\t\t\t\t\t\t\t\t// Ignore double-resolution attempts
\t\t\t\t\t\t\t\t\tif ( depth < maxDepth ) {
\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\treturned = handler.apply( that, args );

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.1
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-48
\t\t\t\t\t\t\t\t\tif ( returned === deferred.promise() ) {
\t\t\t\t\t\t\t\t\t\tthrow new TypeError( \"Thenable self-resolution\" );
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ sections 2.3.3.1, 3.5
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-54
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-75
\t\t\t\t\t\t\t\t\t// Retrieve `then` only once
\t\t\t\t\t\t\t\t\tthen = returned &&

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.4
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-64
\t\t\t\t\t\t\t\t\t\t// Only check objects and functions for thenability
\t\t\t\t\t\t\t\t\t\t( typeof returned === \"object\" ||
\t\t\t\t\t\t\t\t\t\t\ttypeof returned === \"function\" ) &&
\t\t\t\t\t\t\t\t\t\treturned.then;

\t\t\t\t\t\t\t\t\t// Handle a returned thenable
\t\t\t\t\t\t\t\t\tif ( isFunction( then ) ) {

\t\t\t\t\t\t\t\t\t\t// Special processors (notify) just wait for resolution
\t\t\t\t\t\t\t\t\t\tif ( special ) {
\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special )
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t// Normal processors (resolve) also hook into progress
\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t// ...and disregard older resolution values
\t\t\t\t\t\t\t\t\t\t\tmaxDepth++;

\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity,
\t\t\t\t\t\t\t\t\t\t\t\t\tdeferred.notifyWith )
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Handle all other returned values
\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\tif ( handler !== Identity ) {
\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\targs = [ returned ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Process the value(s)
\t\t\t\t\t\t\t\t\t\t// Default process is resolve
\t\t\t\t\t\t\t\t\t\t( special || deferred.resolveWith )( that, args );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},

\t\t\t\t\t\t\t\t// Only normal processors (resolve) catch and reject exceptions
\t\t\t\t\t\t\t\tprocess = special ?
\t\t\t\t\t\t\t\t\tmightThrow :
\t\t\t\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\tmightThrow();
\t\t\t\t\t\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t\t\t\t\t\tif ( jQuery.Deferred.exceptionHook ) {
\t\t\t\t\t\t\t\t\t\t\t\tjQuery.Deferred.exceptionHook( e,
\t\t\t\t\t\t\t\t\t\t\t\t\tprocess.stackTrace );
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.4.1
\t\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-61
\t\t\t\t\t\t\t\t\t\t\t// Ignore post-resolution exceptions
\t\t\t\t\t\t\t\t\t\t\tif ( depth + 1 >= maxDepth ) {

\t\t\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\t\t\tif ( handler !== Thrower ) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\t\t\targs = [ e ];
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tdeferred.rejectWith( that, args );
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.1
\t\t\t\t\t\t\t// https://promisesaplus.com/#point-57
\t\t\t\t\t\t\t// Re-resolve promises immediately to dodge false rejection from
\t\t\t\t\t\t\t// subsequent errors
\t\t\t\t\t\t\tif ( depth ) {
\t\t\t\t\t\t\t\tprocess();
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t// Call an optional hook to record the stack, in case of exception
\t\t\t\t\t\t\t\t// since it's otherwise lost when execution goes async
\t\t\t\t\t\t\t\tif ( jQuery.Deferred.getStackHook ) {
\t\t\t\t\t\t\t\t\tprocess.stackTrace = jQuery.Deferred.getStackHook();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\twindow.setTimeout( process );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t}

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {

\t\t\t\t\t\t// progress_handlers.add( ... )
\t\t\t\t\t\ttuples[ 0 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tisFunction( onProgress ) ?
\t\t\t\t\t\t\t\t\tonProgress :
\t\t\t\t\t\t\t\t\tIdentity,
\t\t\t\t\t\t\t\tnewDefer.notifyWith
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// fulfilled_handlers.add( ... )
\t\t\t\t\t\ttuples[ 1 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tisFunction( onFulfilled ) ?
\t\t\t\t\t\t\t\t\tonFulfilled :
\t\t\t\t\t\t\t\t\tIdentity
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// rejected_handlers.add( ... )
\t\t\t\t\t\ttuples[ 2 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tisFunction( onRejected ) ?
\t\t\t\t\t\t\t\t\tonRejected :
\t\t\t\t\t\t\t\t\tThrower
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);
\t\t\t\t\t} ).promise();
\t\t\t\t},

\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 5 ];

\t\t\t// promise.progress = list.add
\t\t\t// promise.done = list.add
\t\t\t// promise.fail = list.add
\t\t\tpromise[ tuple[ 1 ] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(
\t\t\t\t\tfunction() {

\t\t\t\t\t\t// state = \"resolved\" (i.e., fulfilled)
\t\t\t\t\t\t// state = \"rejected\"
\t\t\t\t\t\tstate = stateString;
\t\t\t\t\t},

\t\t\t\t\t// rejected_callbacks.disable
\t\t\t\t\t// fulfilled_callbacks.disable
\t\t\t\t\ttuples[ 3 - i ][ 2 ].disable,

\t\t\t\t\t// rejected_handlers.disable
\t\t\t\t\t// fulfilled_handlers.disable
\t\t\t\t\ttuples[ 3 - i ][ 3 ].disable,

\t\t\t\t\t// progress_callbacks.lock
\t\t\t\t\ttuples[ 0 ][ 2 ].lock,

\t\t\t\t\t// progress_handlers.lock
\t\t\t\t\ttuples[ 0 ][ 3 ].lock
\t\t\t\t);
\t\t\t}

\t\t\t// progress_handlers.fire
\t\t\t// fulfilled_handlers.fire
\t\t\t// rejected_handlers.fire
\t\t\tlist.add( tuple[ 3 ].fire );

\t\t\t// deferred.notify = function() { deferred.notifyWith(...) }
\t\t\t// deferred.resolve = function() { deferred.resolveWith(...) }
\t\t\t// deferred.reject = function() { deferred.rejectWith(...) }
\t\t\tdeferred[ tuple[ 0 ] ] = function() {
\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ]( this === deferred ? undefined : this, arguments );
\t\t\t\treturn this;
\t\t\t};

\t\t\t// deferred.notifyWith = list.fireWith
\t\t\t// deferred.resolveWith = list.fireWith
\t\t\t// deferred.rejectWith = list.fireWith
\t\t\tdeferred[ tuple[ 0 ] + \"With\" ] = list.fireWith;
\t\t} );

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( singleValue ) {
\t\tvar

\t\t\t// count of uncompleted subordinates
\t\t\tremaining = arguments.length,

\t\t\t// count of unprocessed arguments
\t\t\ti = remaining,

\t\t\t// subordinate fulfillment data
\t\t\tresolveContexts = Array( i ),
\t\t\tresolveValues = slice.call( arguments ),

\t\t\t// the master Deferred
\t\t\tmaster = jQuery.Deferred(),

\t\t\t// subordinate callback factory
\t\t\tupdateFunc = function( i ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tresolveContexts[ i ] = this;
\t\t\t\t\tresolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( !( --remaining ) ) {
\t\t\t\t\t\tmaster.resolveWith( resolveContexts, resolveValues );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t};

\t\t// Single- and empty arguments are adopted like Promise.resolve
\t\tif ( remaining <= 1 ) {
\t\t\tadoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
\t\t\t\t!remaining );

\t\t\t// Use .then() to unwrap secondary thenables (cf. gh-3000)
\t\t\tif ( master.state() === \"pending\" ||
\t\t\t\tisFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

\t\t\t\treturn master.then();
\t\t\t}
\t\t}

\t\t// Multiple arguments are aggregated like Promise.all array elements
\t\twhile ( i-- ) {
\t\t\tadoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
\t\t}

\t\treturn master.promise();
\t}
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error\$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

\t// Support: IE 8 - 9 only
\t// Console exists when dev tools are open, which can happen at any time
\tif ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
\t\twindow.console.warn( \"jQuery.Deferred exception: \" + error.message, error.stack, stack );
\t}
};




jQuery.readyException = function( error ) {
\twindow.setTimeout( function() {
\t\tthrow error;
\t} );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

\treadyList
\t\t.then( fn )

\t\t// Wrap jQuery.readyException in a function so that the lookup
\t\t// happens at the time of error handling instead of callback
\t\t// registration.
\t\t.catch( function( error ) {
\t\t\tjQuery.readyException( error );
\t\t} );

\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Handle when the DOM is ready
\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );
\t}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\twindow.removeEventListener( \"load\", completed );
\tjQuery.ready();
}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals \"interactive\" too soon
if ( document.readyState === \"complete\" ||
\t( document.readyState !== \"loading\" && !document.documentElement.doScroll ) ) {

\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\twindow.setTimeout( jQuery.ready );

} else {

\t// Use the handy event callback
\tdocument.addEventListener( \"DOMContentLoaded\", completed );

\t// A fallback to window.onload, that will always work
\twindow.addEventListener( \"load\", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( toType( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\taccess( elems, fn, i, key[ i ], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {

\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\tfn(
\t\t\t\t\telems[ i ], key, raw ?
\t\t\t\t\tvalue :
\t\t\t\t\tvalue.call( elems[ i ], i, fn( elems[ i ], key ) )
\t\t\t\t);
\t\t\t}
\t\t}
\t}

\tif ( chainable ) {
\t\treturn elems;
\t}

\t// Gets
\tif ( bulk ) {
\t\treturn fn.call( elems );
\t}

\treturn len ? fn( elems[ 0 ], key ) : emptyGet;
};


// Matches dashed string for camelizing
var rmsPrefix = /^-ms-/,
\trdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
function fcamelCase( all, letter ) {
\treturn letter.toUpperCase();
}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
function camelCase( string ) {
\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
}
var acceptData = function( owner ) {

\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

\tcache: function( owner ) {

\t\t// Check if the owner object already has a cache
\t\tvar value = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !value ) {
\t\t\tvalue = {};

\t\t\t// We can accept data for non-element nodes in modern browsers,
\t\t\t// but we should not, see #8335.
\t\t\t// Always return an empty object.
\t\t\tif ( acceptData( owner ) ) {

\t\t\t\t// If it is a node unlikely to be stringify-ed or looped over
\t\t\t\t// use plain assignment
\t\t\t\tif ( owner.nodeType ) {
\t\t\t\t\towner[ this.expando ] = value;

\t\t\t\t// Otherwise secure it in a non-enumerable property
\t\t\t\t// configurable must be true to allow the property to be
\t\t\t\t// deleted when data is removed
\t\t\t\t} else {
\t\t\t\t\tObject.defineProperty( owner, this.expando, {
\t\t\t\t\t\tvalue: value,
\t\t\t\t\t\tconfigurable: true
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn value;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\tcache = this.cache( owner );

\t\t// Handle: [ owner, key, value ] args
\t\t// Always use camelCase key (gh-2257)
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ camelCase( data ) ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {

\t\t\t// Copy the properties one-by-one to the cache object
\t\t\tfor ( prop in data ) {
\t\t\t\tcache[ camelCase( prop ) ] = data[ prop ];
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\treturn key === undefined ?
\t\t\tthis.cache( owner ) :

\t\t\t// Always use camelCase key (gh-2257)
\t\t\towner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
\t},
\taccess: function( owner, key, value ) {

\t\t// In cases where either:
\t\t//
\t\t//   1. No key was specified
\t\t//   2. A string key was specified, but no value provided
\t\t//
\t\t// Take the \"read\" path and allow the get method to determine
\t\t// which value to return, respectively either:
\t\t//
\t\t//   1. The entire cache object
\t\t//   2. The data stored at the key
\t\t//
\t\tif ( key === undefined ||
\t\t\t\t( ( key && typeof key === \"string\" ) && value === undefined ) ) {

\t\t\treturn this.get( owner, key );
\t\t}

\t\t// When the key is not a string, or both a key and value
\t\t// are specified, set or extend (existing objects) with either:
\t\t//
\t\t//   1. An object of properties
\t\t//   2. A key and value
\t\t//
\t\tthis.set( owner, key, value );

\t\t// Since the \"set\" path can have two possible entry points
\t\t// return the expected data based on which path was taken[*]
\t\treturn value !== undefined ? value : key;
\t},
\tremove: function( owner, key ) {
\t\tvar i,
\t\t\tcache = owner[ this.expando ];

\t\tif ( cache === undefined ) {
\t\t\treturn;
\t\t}

\t\tif ( key !== undefined ) {

\t\t\t// Support array or space separated string of keys
\t\t\tif ( Array.isArray( key ) ) {

\t\t\t\t// If key is an array of keys...
\t\t\t\t// We always set camelCase keys, so remove that.
\t\t\t\tkey = key.map( camelCase );
\t\t\t} else {
\t\t\t\tkey = camelCase( key );

\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\tkey = key in cache ?
\t\t\t\t\t[ key ] :
\t\t\t\t\t( key.match( rnothtmlwhite ) || [] );
\t\t\t}

\t\t\ti = key.length;

\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ key[ i ] ];
\t\t\t}
\t\t}

\t\t// Remove the expando if there's no more data
\t\tif ( key === undefined || jQuery.isEmptyObject( cache ) ) {

\t\t\t// Support: Chrome <=35 - 45
\t\t\t// Webkit & Blink performance suffers when deleting properties
\t\t\t// from DOM nodes, so set to undefined instead
\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
\t\t\tif ( owner.nodeType ) {
\t\t\t\towner[ this.expando ] = undefined;
\t\t\t} else {
\t\t\t\tdelete owner[ this.expando ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\tvar cache = owner[ this.expando ];
\t\treturn cache !== undefined && !jQuery.isEmptyObject( cache );
\t}
};
var dataPriv = new Data();

var dataUser = new Data();



//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /[A-Z]/g;

function getData( data ) {
\tif ( data === \"true\" ) {
\t\treturn true;
\t}

\tif ( data === \"false\" ) {
\t\treturn false;
\t}

\tif ( data === \"null\" ) {
\t\treturn null;
\t}

\t// Only convert to a number if it doesn't change the string
\tif ( data === +data + \"\" ) {
\t\treturn +data;
\t}

\tif ( rbrace.test( data ) ) {
\t\treturn JSON.parse( data );
\t}

\treturn data;
}

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$&\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = getData( data );
\t\t\t} catch ( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdataUser.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend( {
\thasData: function( elem ) {
\t\treturn dataUser.hasData( elem ) || dataPriv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn dataUser.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdataUser.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to dataPriv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn dataPriv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdataPriv.remove( elem, name );
\t}
} );

jQuery.fn.extend( {
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = dataUser.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !dataPriv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE 11 only
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = camelCase( name.slice( 5 ) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdataPriv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each( function() {
\t\t\t\tdataUser.set( this, key );
\t\t\t} );
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data;

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// The key will always be camelCased in Data
\t\t\t\tdata = dataUser.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each( function() {

\t\t\t\t// We always store the camelCased key
\t\t\t\tdataUser.set( this, key, value );
\t\t\t} );
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each( function() {
\t\t\tdataUser.remove( this, key );
\t\t} );
\t}
} );


jQuery.extend( {
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = dataPriv.get( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || Array.isArray( data ) ) {
\t\t\t\t\tqueue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// Clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// Not public - generate a queueHooks object, or return the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
\t\t\tempty: jQuery.Callbacks( \"once memory\" ).add( function() {
\t\t\t\tdataPriv.remove( elem, [ type + \"queue\", key ] );
\t\t\t} )
\t\t} );
\t}
} );

jQuery.fn.extend( {
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[ 0 ], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each( function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// Ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[ 0 ] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t} );
\t},
\tdequeue: function( type ) {
\t\treturn this.each( function() {
\t\t\tjQuery.dequeue( this, type );
\t\t} );
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},

\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = dataPriv.get( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
} );
var pnum = ( /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/ ).source;

var rcssNum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" );


var cssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ];

var documentElement = document.documentElement;



\tvar isAttached = function( elem ) {
\t\t\treturn jQuery.contains( elem.ownerDocument, elem );
\t\t},
\t\tcomposed = { composed: true };

\t// Support: IE 9 - 11+, Edge 12 - 18+, iOS 10.0 - 10.2 only
\t// Check attachment across shadow DOM boundaries when possible (gh-3504)
\t// Support: iOS 10.0-10.2 only
\t// Early iOS 10 versions support `attachShadow` but not `getRootNode`,
\t// leading to errors. We need to check for `getRootNode`.
\tif ( documentElement.getRootNode ) {
\t\tisAttached = function( elem ) {
\t\t\treturn jQuery.contains( elem.ownerDocument, elem ) ||
\t\t\t\telem.getRootNode( composed ) === elem.ownerDocument;
\t\t};
\t}
var isHiddenWithinTree = function( elem, el ) {

\t\t// isHiddenWithinTree might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;

\t\t// Inline style trumps all
\t\treturn elem.style.display === \"none\" ||
\t\t\telem.style.display === \"\" &&

\t\t\t// Otherwise, check computed style
\t\t\t// Support: Firefox <=43 - 45
\t\t\t// Disconnected elements can have computed display: none, so first confirm that elem is
\t\t\t// in the document.
\t\t\tisAttached( elem ) &&

\t\t\tjQuery.css( elem, \"display\" ) === \"none\";
\t};

var swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};




function adjustCSS( elem, prop, valueParts, tween ) {
\tvar adjusted, scale,
\t\tmaxIterations = 20,
\t\tcurrentValue = tween ?
\t\t\tfunction() {
\t\t\t\treturn tween.cur();
\t\t\t} :
\t\t\tfunction() {
\t\t\t\treturn jQuery.css( elem, prop, \"\" );
\t\t\t},
\t\tinitial = currentValue(),
\t\tunit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t// Starting value computation is required for potential unit mismatches
\t\tinitialInUnit = elem.nodeType &&
\t\t\t( jQuery.cssNumber[ prop ] || unit !== \"px\" && +initial ) &&
\t\t\trcssNum.exec( jQuery.css( elem, prop ) );

\tif ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

\t\t// Support: Firefox <=54
\t\t// Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
\t\tinitial = initial / 2;

\t\t// Trust units reported by jQuery.css
\t\tunit = unit || initialInUnit[ 3 ];

\t\t// Iteratively approximate from a nonzero starting point
\t\tinitialInUnit = +initial || 1;

\t\twhile ( maxIterations-- ) {

\t\t\t// Evaluate and update our best guess (doubling guesses that zero out).
\t\t\t// Finish if the scale equals or crosses 1 (making the old*new product non-positive).
\t\t\tjQuery.style( elem, prop, initialInUnit + unit );
\t\t\tif ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
\t\t\t\tmaxIterations = 0;
\t\t\t}
\t\t\tinitialInUnit = initialInUnit / scale;

\t\t}

\t\tinitialInUnit = initialInUnit * 2;
\t\tjQuery.style( elem, prop, initialInUnit + unit );

\t\t// Make sure we update the tween properties later on
\t\tvalueParts = valueParts || [];
\t}

\tif ( valueParts ) {
\t\tinitialInUnit = +initialInUnit || +initial || 0;

\t\t// Apply relative offset (+=/-=) if specified
\t\tadjusted = valueParts[ 1 ] ?
\t\t\tinitialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
\t\t\t+valueParts[ 2 ];
\t\tif ( tween ) {
\t\t\ttween.unit = unit;
\t\t\ttween.start = initialInUnit;
\t\t\ttween.end = adjusted;
\t\t}
\t}
\treturn adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
\tvar temp,
\t\tdoc = elem.ownerDocument,
\t\tnodeName = elem.nodeName,
\t\tdisplay = defaultDisplayMap[ nodeName ];

\tif ( display ) {
\t\treturn display;
\t}

\ttemp = doc.body.appendChild( doc.createElement( nodeName ) );
\tdisplay = jQuery.css( temp, \"display\" );

\ttemp.parentNode.removeChild( temp );

\tif ( display === \"none\" ) {
\t\tdisplay = \"block\";
\t}
\tdefaultDisplayMap[ nodeName ] = display;

\treturn display;
}

function showHide( elements, show ) {
\tvar display, elem,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\t// Determine new display value for elements that need to change
\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tdisplay = elem.style.display;
\t\tif ( show ) {

\t\t\t// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
\t\t\t// check is required in this first loop unless we have a nonempty display value (either
\t\t\t// inline or about-to-be-restored)
\t\t\tif ( display === \"none\" ) {
\t\t\t\tvalues[ index ] = dataPriv.get( elem, \"display\" ) || null;
\t\t\t\tif ( !values[ index ] ) {
\t\t\t\t\telem.style.display = \"\";
\t\t\t\t}
\t\t\t}
\t\t\tif ( elem.style.display === \"\" && isHiddenWithinTree( elem ) ) {
\t\t\t\tvalues[ index ] = getDefaultDisplay( elem );
\t\t\t}
\t\t} else {
\t\t\tif ( display !== \"none\" ) {
\t\t\t\tvalues[ index ] = \"none\";

\t\t\t\t// Remember what we're overwriting
\t\t\t\tdataPriv.set( elem, \"display\", display );
\t\t\t}
\t\t}
\t}

\t// Set the display of the elements in a second loop to avoid constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\tif ( values[ index ] != null ) {
\t\t\telements[ index ].style.display = values[ index ];
\t\t}
\t}

\treturn elements;
}

jQuery.fn.extend( {
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each( function() {
\t\t\tif ( isHiddenWithinTree( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t} );
\t}
} );
var rcheckableType = ( /^(?:checkbox|radio)\$/i );

var rtagName = ( /<([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)/i );

var rscriptType = ( /^\$|^module\$|\\/(?:java|ecma)script/i );



// We have to close these tags to support XHTML (#13200)
var wrapMap = {

\t// Support: IE <=9 only
\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t// XHTML parsers do not magically insert elements in the
\t// same way that tag soup parsers do. So we cannot shorten
\t// this by omitting <tbody> or other required elements.
\tthead: [ 1, \"<table>\", \"</table>\" ],
\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t_default: [ 0, \"\", \"\" ]
};

// Support: IE <=9 only
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;


function getAll( context, tag ) {

\t// Support: IE <=9 - 11 only
\t// Use typeof to avoid zero-argument method invocation on host objects (#15151)
\tvar ret;

\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\tret = context.getElementsByTagName( tag || \"*\" );

\t} else if ( typeof context.querySelectorAll !== \"undefined\" ) {
\t\tret = context.querySelectorAll( tag || \"*\" );

\t} else {
\t\tret = [];
\t}

\tif ( tag === undefined || tag && nodeName( context, tag ) ) {
\t\treturn jQuery.merge( [ context ], ret );
\t}

\treturn ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdataPriv.set(
\t\t\telems[ i ],
\t\t\t\"globalEval\",
\t\t\t!refElements || dataPriv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}


var rhtml = /<|&#?\\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
\tvar elem, tmp, tag, wrap, attached, j,
\t\tfragment = context.createDocumentFragment(),
\t\tnodes = [],
\t\ti = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\telem = elems[ i ];

\t\tif ( elem || elem === 0 ) {

\t\t\t// Add nodes directly
\t\t\tif ( toType( elem ) === \"object\" ) {

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t// Convert non-html into a text node
\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t// Convert html into DOM nodes
\t\t\t} else {
\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement( \"div\" ) );

\t\t\t\t// Deserialize a standard representation
\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\ttmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

\t\t\t\t// Descend through wrappers to the right content
\t\t\t\tj = wrap[ 0 ];
\t\t\t\twhile ( j-- ) {
\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t}

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t// Remember the top-level container
\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\ttmp.textContent = \"\";
\t\t\t}
\t\t}
\t}

\t// Remove wrapper from fragment
\tfragment.textContent = \"\";

\ti = 0;
\twhile ( ( elem = nodes[ i++ ] ) ) {

\t\t// Skip elements already in the context collection (trac-4087)
\t\tif ( selection && jQuery.inArray( elem, selection ) > -1 ) {
\t\t\tif ( ignored ) {
\t\t\t\tignored.push( elem );
\t\t\t}
\t\t\tcontinue;
\t\t}

\t\tattached = isAttached( elem );

\t\t// Append to fragment
\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t// Preserve script evaluation history
\t\tif ( attached ) {
\t\t\tsetGlobalEval( tmp );
\t\t}

\t\t// Capture executables
\t\tif ( scripts ) {
\t\t\tj = 0;
\t\t\twhile ( ( elem = tmp[ j++ ] ) ) {
\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\tscripts.push( elem );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn fragment;
}


( function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Android 4.0 - 4.3 only
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Android <=4.1 only
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE <=11 only
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
} )();


var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

// Support: IE <=9 - 11+
// focus() and blur() are asynchronous, except when they are no-op.
// So expect focus to be synchronous when the element is already active,
// and blur to be synchronous when the element is not already active.
// (focus and blur are always synchronous in other supported browsers,
// this just defines when we can count on it).
function expectSync( elem, type ) {
\treturn ( elem === safeActiveElement() ) === ( type === \"focus\" );
}

// Support: IE <=9 only
// Accessing document.activeElement can throw unexpectedly
// https://bugs.jquery.com/ticket/13393
function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
\tvar origFn, type;

\t// Types can be a map of types/handlers
\tif ( typeof types === \"object\" ) {

\t\t// ( types-Object, selector, data )
\t\tif ( typeof selector !== \"string\" ) {

\t\t\t// ( types-Object, data )
\t\t\tdata = data || selector;
\t\t\tselector = undefined;
\t\t}
\t\tfor ( type in types ) {
\t\t\ton( elem, type, selector, data, types[ type ], one );
\t\t}
\t\treturn elem;
\t}

\tif ( data == null && fn == null ) {

\t\t// ( types, fn )
\t\tfn = selector;
\t\tdata = selector = undefined;
\t} else if ( fn == null ) {
\t\tif ( typeof selector === \"string\" ) {

\t\t\t// ( types, selector, fn )
\t\t\tfn = data;
\t\t\tdata = undefined;
\t\t} else {

\t\t\t// ( types, data, fn )
\t\t\tfn = data;
\t\t\tdata = selector;
\t\t\tselector = undefined;
\t\t}
\t}
\tif ( fn === false ) {
\t\tfn = returnFalse;
\t} else if ( !fn ) {
\t\treturn elem;
\t}

\tif ( one === 1 ) {
\t\torigFn = fn;
\t\tfn = function( event ) {

\t\t\t// Can use an empty set, since event contains the info
\t\t\tjQuery().off( event );
\t\t\treturn origFn.apply( this, arguments );
\t\t};

\t\t// Use same guid so caller can remove using origFn
\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t}
\treturn elem.each( function() {
\t\tjQuery.event.add( this, types, fn, data, selector );
\t} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {

\t\tvar handleObjIn, eventHandle, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.get( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Ensure that invalid selectors throw exceptions at attach time
\t\t// Evaluate against documentElement in case elem is a non-element node (e.g., document)
\t\tif ( selector ) {
\t\t\tjQuery.find.matchesSelector( documentElement, selector );
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !( events = elemData.events ) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !( eventHandle = elemData.handle ) ) {
\t\t\teventHandle = elemData.handle = function( e ) {

\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== \"undefined\" && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend( {
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join( \".\" )
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !( handlers = events[ type ] ) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup ||
\t\t\t\t\tspecial.setup.call( elem, data, namespaces, eventHandle ) === false ) {

\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\tvar j, origCount, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

\t\tif ( !elemData || !( events = elemData.events ) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[ 2 ] &&
\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector ||
\t\t\t\t\t\tselector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown ||
\t\t\t\t\tspecial.teardown.call( elem, namespaces, elemData.handle ) === false ) {

\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove data and the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdataPriv.remove( elem, \"handle events\" );
\t\t}
\t},

\tdispatch: function( nativeEvent ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tvar event = jQuery.event.fix( nativeEvent );

\t\tvar i, j, ret, matched, handleObj, handlerQueue,
\t\t\targs = new Array( arguments.length ),
\t\t\thandlers = ( dataPriv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[ 0 ] = event;

\t\tfor ( i = 1; i < arguments.length; i++ ) {
\t\t\targs[ i ] = arguments[ i ];
\t\t}

\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( ( handleObj = matched.handlers[ j++ ] ) &&
\t\t\t\t!event.isImmediatePropagationStopped() ) {

\t\t\t\t// If the event is namespaced, then each handler is only invoked if it is
\t\t\t\t// specially universal or its namespaces are a superset of the event's.
\t\t\t\tif ( !event.rnamespace || handleObj.namespace === false ||
\t\t\t\t\tevent.rnamespace.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
\t\t\t\t\t\thandleObj.handler ).apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( ( event.result = ret ) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, handleObj, sel, matchedHandlers, matchedSelectors,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\tif ( delegateCount &&

\t\t\t// Support: IE <=9
\t\t\t// Black-hole SVG <use> instance trees (trac-13180)
\t\t\tcur.nodeType &&

\t\t\t// Support: Firefox <=42
\t\t\t// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
\t\t\t// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
\t\t\t// Support: IE 11 only
\t\t\t// ...but not arrow key \"clicks\" of radio inputs, which can have `button` -1 (gh-2343)
\t\t\t!( event.type === \"click\" && event.button >= 1 ) ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.nodeType === 1 && !( event.type === \"click\" && cur.disabled === true ) ) {
\t\t\t\t\tmatchedHandlers = [];
\t\t\t\t\tmatchedSelectors = {};
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matchedSelectors[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatchedSelectors[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) > -1 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matchedSelectors[ sel ] ) {
\t\t\t\t\t\t\tmatchedHandlers.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matchedHandlers.length ) {
\t\t\t\t\t\thandlerQueue.push( { elem: cur, handlers: matchedHandlers } );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tcur = this;
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
\t\t}

\t\treturn handlerQueue;
\t},

\taddProp: function( name, hook ) {
\t\tObject.defineProperty( jQuery.Event.prototype, name, {
\t\t\tenumerable: true,
\t\t\tconfigurable: true,

\t\t\tget: isFunction( hook ) ?
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn hook( this.originalEvent );
\t\t\t\t\t}
\t\t\t\t} :
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn this.originalEvent[ name ];
\t\t\t\t\t}
\t\t\t\t},

\t\t\tset: function( value ) {
\t\t\t\tObject.defineProperty( this, name, {
\t\t\t\t\tenumerable: true,
\t\t\t\t\tconfigurable: true,
\t\t\t\t\twritable: true,
\t\t\t\t\tvalue: value
\t\t\t\t} );
\t\t\t}
\t\t} );
\t},

\tfix: function( originalEvent ) {
\t\treturn originalEvent[ jQuery.expando ] ?
\t\t\toriginalEvent :
\t\t\tnew jQuery.Event( originalEvent );
\t},

\tspecial: {
\t\tload: {

\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tclick: {

\t\t\t// Utilize native event to ensure correct state for checkable inputs
\t\t\tsetup: function( data ) {

\t\t\t\t// For mutual compressibility with _default, replace `this` access with a local var.
\t\t\t\t// `|| data` is dead code meant only to preserve the variable through minification.
\t\t\t\tvar el = this || data;

\t\t\t\t// Claim the first handler
\t\t\t\tif ( rcheckableType.test( el.type ) &&
\t\t\t\t\tel.click && nodeName( el, \"input\" ) ) {

\t\t\t\t\t// dataPriv.set( el, \"click\", ... )
\t\t\t\t\tleverageNative( el, \"click\", returnTrue );
\t\t\t\t}

\t\t\t\t// Return false to allow normal processing in the caller
\t\t\t\treturn false;
\t\t\t},
\t\t\ttrigger: function( data ) {

\t\t\t\t// For mutual compressibility with _default, replace `this` access with a local var.
\t\t\t\t// `|| data` is dead code meant only to preserve the variable through minification.
\t\t\t\tvar el = this || data;

\t\t\t\t// Force setup before triggering a click
\t\t\t\tif ( rcheckableType.test( el.type ) &&
\t\t\t\t\tel.click && nodeName( el, \"input\" ) ) {

\t\t\t\t\tleverageNative( el, \"click\" );
\t\t\t\t}

\t\t\t\t// Return non-false to allow normal event-path propagation
\t\t\t\treturn true;
\t\t\t},

\t\t\t// For cross-browser consistency, suppress native .click() on links
\t\t\t// Also prevent it if we're currently inside a leveraged native-event stack
\t\t\t_default: function( event ) {
\t\t\t\tvar target = event.target;
\t\t\t\treturn rcheckableType.test( target.type ) &&
\t\t\t\t\ttarget.click && nodeName( target, \"input\" ) &&
\t\t\t\t\tdataPriv.get( target, \"click\" ) ||
\t\t\t\t\tnodeName( target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
};

// Ensure the presence of an event listener that handles manually-triggered
// synthetic events by interrupting progress until reinvoked in response to
// *native* events that it fires directly, ensuring that state changes have
// already occurred before other listeners are invoked.
function leverageNative( el, type, expectSync ) {

\t// Missing expectSync indicates a trigger call, which must force setup through jQuery.event.add
\tif ( !expectSync ) {
\t\tif ( dataPriv.get( el, type ) === undefined ) {
\t\t\tjQuery.event.add( el, type, returnTrue );
\t\t}
\t\treturn;
\t}

\t// Register the controller as a special universal handler for all event namespaces
\tdataPriv.set( el, type, false );
\tjQuery.event.add( el, type, {
\t\tnamespace: false,
\t\thandler: function( event ) {
\t\t\tvar notAsync, result,
\t\t\t\tsaved = dataPriv.get( this, type );

\t\t\tif ( ( event.isTrigger & 1 ) && this[ type ] ) {

\t\t\t\t// Interrupt processing of the outer synthetic .trigger()ed event
\t\t\t\t// Saved data should be false in such cases, but might be a leftover capture object
\t\t\t\t// from an async native handler (gh-4350)
\t\t\t\tif ( !saved.length ) {

\t\t\t\t\t// Store arguments for use when handling the inner native event
\t\t\t\t\t// There will always be at least one argument (an event object), so this array
\t\t\t\t\t// will not be confused with a leftover capture object.
\t\t\t\t\tsaved = slice.call( arguments );
\t\t\t\t\tdataPriv.set( this, type, saved );

\t\t\t\t\t// Trigger the native event and capture its result
\t\t\t\t\t// Support: IE <=9 - 11+
\t\t\t\t\t// focus() and blur() are asynchronous
\t\t\t\t\tnotAsync = expectSync( this, type );
\t\t\t\t\tthis[ type ]();
\t\t\t\t\tresult = dataPriv.get( this, type );
\t\t\t\t\tif ( saved !== result || notAsync ) {
\t\t\t\t\t\tdataPriv.set( this, type, false );
\t\t\t\t\t} else {
\t\t\t\t\t\tresult = {};
\t\t\t\t\t}
\t\t\t\t\tif ( saved !== result ) {

\t\t\t\t\t\t// Cancel the outer synthetic event
\t\t\t\t\t\tevent.stopImmediatePropagation();
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\treturn result.value;
\t\t\t\t\t}

\t\t\t\t// If this is an inner synthetic event for an event with a bubbling surrogate
\t\t\t\t// (focus or blur), assume that the surrogate already propagated from triggering the
\t\t\t\t// native event and prevent that from happening again here.
\t\t\t\t// This technically gets the ordering wrong w.r.t. to `.trigger()` (in which the
\t\t\t\t// bubbling surrogate propagates *after* the non-bubbling base), but that seems
\t\t\t\t// less bad than duplication.
\t\t\t\t} else if ( ( jQuery.event.special[ type ] || {} ).delegateType ) {
\t\t\t\t\tevent.stopPropagation();
\t\t\t\t}

\t\t\t// If this is a native event triggered above, everything is now in order
\t\t\t// Fire an inner synthetic event with the original arguments
\t\t\t} else if ( saved.length ) {

\t\t\t\t// ...and capture the result
\t\t\t\tdataPriv.set( this, type, {
\t\t\t\t\tvalue: jQuery.event.trigger(

\t\t\t\t\t\t// Support: IE <=9 - 11+
\t\t\t\t\t\t// Extend with the prototype to reset the above stopImmediatePropagation()
\t\t\t\t\t\tjQuery.extend( saved[ 0 ], jQuery.Event.prototype ),
\t\t\t\t\t\tsaved.slice( 1 ),
\t\t\t\t\t\tthis
\t\t\t\t\t)
\t\t\t\t} );

\t\t\t\t// Abort handling of the native event
\t\t\t\tevent.stopImmediatePropagation();
\t\t\t}
\t\t}
\t} );
}

jQuery.removeEvent = function( elem, type, handle ) {

\t// This \"if\" is needed for plain objects
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle );
\t}
};

jQuery.Event = function( src, props ) {

\t// Allow instantiation without the 'new' keyword
\tif ( !( this instanceof jQuery.Event ) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&

\t\t\t\t// Support: Android <=2.3 only
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t\t// Create target properties
\t\t// Support: Safari <=6 - 7 only
\t\t// Target should not be a text node (#504, #13143)
\t\tthis.target = ( src.target && src.target.nodeType === 3 ) ?
\t\t\tsrc.target.parentNode :
\t\t\tsrc.target;

\t\tthis.currentTarget = src.currentTarget;
\t\tthis.relatedTarget = src.relatedTarget;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || Date.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tconstructor: jQuery.Event,
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,
\tisSimulated: false,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
\taltKey: true,
\tbubbles: true,
\tcancelable: true,
\tchangedTouches: true,
\tctrlKey: true,
\tdetail: true,
\teventPhase: true,
\tmetaKey: true,
\tpageX: true,
\tpageY: true,
\tshiftKey: true,
\tview: true,
\t\"char\": true,
\tcode: true,
\tcharCode: true,
\tkey: true,
\tkeyCode: true,
\tbutton: true,
\tbuttons: true,
\tclientX: true,
\tclientY: true,
\toffsetX: true,
\toffsetY: true,
\tpointerId: true,
\tpointerType: true,
\tscreenX: true,
\tscreenY: true,
\ttargetTouches: true,
\ttoElement: true,
\ttouches: true,

\twhich: function( event ) {
\t\tvar button = event.button;

\t\t// Add which for key events
\t\tif ( event.which == null && rkeyEvent.test( event.type ) ) {
\t\t\treturn event.charCode != null ? event.charCode : event.keyCode;
\t\t}

\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\tif ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
\t\t\tif ( button & 1 ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\tif ( button & 2 ) {
\t\t\t\treturn 3;
\t\t\t}

\t\t\tif ( button & 4 ) {
\t\t\t\treturn 2;
\t\t\t}

\t\t\treturn 0;
\t\t}

\t\treturn event.which;
\t}
}, jQuery.event.addProp );

jQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( type, delegateType ) {
\tjQuery.event.special[ type ] = {

\t\t// Utilize native event if possible so blur/focus sequence is correct
\t\tsetup: function() {

\t\t\t// Claim the first handler
\t\t\t// dataPriv.set( this, \"focus\", ... )
\t\t\t// dataPriv.set( this, \"blur\", ... )
\t\t\tleverageNative( this, type, expectSync );

\t\t\t// Return false to allow normal processing in the caller
\t\t\treturn false;
\t\t},
\t\ttrigger: function() {

\t\t\t// Force setup before trigger
\t\t\tleverageNative( this, type );

\t\t\t// Return non-false to allow normal event-path propagation
\t\t\treturn true;
\t\t},

\t\tdelegateType: delegateType
\t};
} );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mouseenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
} );

jQuery.fn.extend( {

\ton: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn );
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {

\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ?
\t\t\t\t\thandleObj.origType + \".\" + handleObj.namespace :
\t\t\t\t\thandleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {

\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {

\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t} );
\t}
} );


var

\t/* eslint-disable max-len */

\t// See https://github.com/eslint/eslint/issues/3229
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)[^>]*)\\/>/gi,

\t/* eslint-enable */

\t// Support: IE <=10 - 11, Edge 12 - 13 only
\t// In IE/Edge using regex groups here causes severe slowdowns.
\t// See https://connect.microsoft.com/IE/feedback/details/1736512/
\trnoInnerhtml = /<script|<style|<link/i,

\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
\tif ( nodeName( elem, \"table\" ) &&
\t\tnodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ) {

\t\treturn jQuery( elem ).children( \"tbody\" )[ 0 ] || elem;
\t}

\treturn elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = ( elem.getAttribute( \"type\" ) !== null ) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tif ( ( elem.type || \"\" ).slice( 0, 5 ) === \"true/\" ) {
\t\telem.type = elem.type.slice( 5 );
\t} else {
\t\telem.removeAttribute( \"type\" );
\t}

\treturn elem;
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( dataPriv.hasData( src ) ) {
\t\tpdataOld = dataPriv.access( src );
\t\tpdataCur = dataPriv.set( dest, pdataOld );
\t\tevents = pdataOld.events;

\t\tif ( events ) {
\t\t\tdelete pdataCur.handle;
\t\t\tpdataCur.events = {};

\t\t\tfor ( type in events ) {
\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// 2. Copy user data
\tif ( dataUser.hasData( src ) ) {
\t\tudataOld = dataUser.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdataUser.set( dest, udataCur );
\t}
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
\tvar nodeName = dest.nodeName.toLowerCase();

\t// Fails to persist the checked state of a cloned checkbox or radio button.
\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\tdest.checked = src.checked;

\t// Fails to return the selected option to the default selected state when cloning options
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

function domManip( collection, args, callback, ignored ) {

\t// Flatten any nested arrays
\targs = concat.apply( [], args );

\tvar fragment, first, scripts, hasScripts, node, doc,
\t\ti = 0,
\t\tl = collection.length,
\t\tiNoClone = l - 1,
\t\tvalue = args[ 0 ],
\t\tvalueIsFunction = isFunction( value );

\t// We can't cloneNode fragments that contain checked, in WebKit
\tif ( valueIsFunction ||
\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\treturn collection.each( function( index ) {
\t\t\tvar self = collection.eq( index );
\t\t\tif ( valueIsFunction ) {
\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t}
\t\t\tdomManip( self, args, callback, ignored );
\t\t} );
\t}

\tif ( l ) {
\t\tfragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
\t\tfirst = fragment.firstChild;

\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\tfragment = first;
\t\t}

\t\t// Require either new content or an interest in ignored elements to invoke the callback
\t\tif ( first || ignored ) {
\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\thasScripts = scripts.length;

\t\t\t// Use the original fragment for the last item
\t\t\t// instead of the first because it can end up
\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tnode = fragment;

\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\tif ( hasScripts ) {

\t\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcallback.call( collection[ i ], node, i );
\t\t\t}

\t\t\tif ( hasScripts ) {
\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t// Reenable scripts
\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t!dataPriv.access( node, \"globalEval\" ) &&
\t\t\t\t\t\tjQuery.contains( doc, node ) ) {

\t\t\t\t\t\tif ( node.src && ( node.type || \"\" ).toLowerCase()  !== \"module\" ) {

\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\tif ( jQuery._evalUrl && !node.noModule ) {
\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src, {
\t\t\t\t\t\t\t\t\tnonce: node.nonce || node.getAttribute( \"nonce\" )
\t\t\t\t\t\t\t\t} );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tDOMEval( node.textContent.replace( rcleanScript, \"\" ), node, doc );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn collection;
}

function remove( elem, selector, keepData ) {
\tvar node,
\t\tnodes = selector ? jQuery.filter( selector, elem ) : elem,
\t\ti = 0;

\tfor ( ; ( node = nodes[ i ] ) != null; i++ ) {
\t\tif ( !keepData && node.nodeType === 1 ) {
\t\t\tjQuery.cleanData( getAll( node ) );
\t\t}

\t\tif ( node.parentNode ) {
\t\t\tif ( keepData && isAttached( node ) ) {
\t\t\t\tsetGlobalEval( getAll( node, \"script\" ) );
\t\t\t}
\t\t\tnode.parentNode.removeChild( node );
\t\t}
\t}

\treturn elem;
}

jQuery.extend( {
\thtmlPrefilter: function( html ) {
\t\treturn html.replace( rxhtmlTag, \"<\$1></\$2>\" );
\t},

\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = isAttached( elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tcleanData: function( elems ) {
\t\tvar data, elem, type,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
\t\t\tif ( acceptData( elem ) ) {
\t\t\t\tif ( ( data = elem[ dataPriv.expando ] ) ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataPriv.expando ] = undefined;
\t\t\t\t}
\t\t\t\tif ( elem[ dataUser.expando ] ) {

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataUser.expando ] = undefined;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} );

jQuery.fn.extend( {
\tdetach: function( selector ) {
\t\treturn remove( this, selector, true );
\t},

\tremove: function( selector ) {
\t\treturn remove( this, selector );
\t},

\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each( function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t} );
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t} );
\t},

\tprepend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t} );
\t},

\tbefore: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t} );
\t},

\tafter: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t} );
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; ( elem = this[ i ] ) != null; i++ ) {
\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t// Prevent memory leaks
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t// Remove any remaining nodes
\t\t\t\telem.textContent = \"\";
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map( function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t} );
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\treturn elem.innerHTML;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = jQuery.htmlPrefilter( value );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch ( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar ignored = [];

\t\t// Make the changes, replacing each non-ignored context element with the new content
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tvar parent = this.parentNode;

\t\t\tif ( jQuery.inArray( this, ignored ) < 0 ) {
\t\t\t\tjQuery.cleanData( getAll( this ) );
\t\t\t\tif ( parent ) {
\t\t\t\t\tparent.replaceChild( elem, this );
\t\t\t\t}
\t\t\t}

\t\t// Force callback invocation
\t\t}, ignored );
\t}
} );

jQuery.each( {
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1,
\t\t\ti = 0;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t// .get() because push.apply(_, arraylike) throws on ancient WebKit
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
} );
var rnumnonpx = new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );

var getStyles = function( elem ) {

\t\t// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tvar view = elem.ownerDocument.defaultView;

\t\tif ( !view || !view.opener ) {
\t\t\tview = window;
\t\t}

\t\treturn view.getComputedStyle( elem );
\t};

var rboxStyle = new RegExp( cssExpand.join( \"|\" ), \"i\" );



( function() {

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computeStyleTests() {

\t\t// This is a singleton, we need to execute it only once
\t\tif ( !div ) {
\t\t\treturn;
\t\t}

\t\tcontainer.style.cssText = \"position:absolute;left:-11111px;width:60px;\" +
\t\t\t\"margin-top:1px;padding:0;border:0\";
\t\tdiv.style.cssText =
\t\t\t\"position:relative;display:block;box-sizing:border-box;overflow:scroll;\" +
\t\t\t\"margin:auto;border:1px;padding:1px;\" +
\t\t\t\"width:60%;top:1%\";
\t\tdocumentElement.appendChild( container ).appendChild( div );

\t\tvar divStyle = window.getComputedStyle( div );
\t\tpixelPositionVal = divStyle.top !== \"1%\";

\t\t// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
\t\treliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

\t\t// Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
\t\t// Some styles come back with percentage values, even though they shouldn't
\t\tdiv.style.right = \"60%\";
\t\tpixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

\t\t// Support: IE 9 - 11 only
\t\t// Detect misreporting of content dimensions for box-sizing:border-box elements
\t\tboxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

\t\t// Support: IE 9 only
\t\t// Detect overflow:scroll screwiness (gh-3699)
\t\t// Support: Chrome <=64
\t\t// Don't get tricked when zoom affects offsetWidth (gh-4029)
\t\tdiv.style.position = \"absolute\";
\t\tscrollboxSizeVal = roundPixelMeasures( div.offsetWidth / 3 ) === 12;

\t\tdocumentElement.removeChild( container );

\t\t// Nullify the div so it wouldn't be stored in the memory and
\t\t// it will also be a sign that checks already performed
\t\tdiv = null;
\t}

\tfunction roundPixelMeasures( measure ) {
\t\treturn Math.round( parseFloat( measure ) );
\t}

\tvar pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
\t\treliableMarginLeftVal,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\t// Finish early in limited (non-browser) environments
\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE <=9 - 11 only
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tjQuery.extend( support, {
\t\tboxSizingReliable: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn boxSizingReliableVal;
\t\t},
\t\tpixelBoxStyles: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelBoxStylesVal;
\t\t},
\t\tpixelPosition: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelPositionVal;
\t\t},
\t\treliableMarginLeft: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn reliableMarginLeftVal;
\t\t},
\t\tscrollboxSize: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn scrollboxSizeVal;
\t\t}
\t} );
} )();


function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,

\t\t// Support: Firefox 51+
\t\t// Retrieving style before computed somehow
\t\t// fixes an issue with getting wrong values
\t\t// on detached elements
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// getPropertyValue is needed for:
\t//   .css('filter') (IE 9 only, #12537)
\t//   .css('--customProperty) (#3144)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];

\t\tif ( ret === \"\" && !isAttached( elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// Android Browser returns percentage for some values,
\t\t// but width seems to be reliably pixels.
\t\t// This is against the CSSOM draft spec:
\t\t// https://drafts.csswg.org/cssom/#resolved-values
\t\tif ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

\t\t\t// Remember the original values
\t\t\twidth = style.width;
\t\t\tminWidth = style.minWidth;
\t\t\tmaxWidth = style.maxWidth;

\t\t\t// Put in the new values to get a computed value out
\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\tret = computed.width;

\t\t\t// Revert the changed values
\t\t\tstyle.width = width;
\t\t\tstyle.minWidth = minWidth;
\t\t\tstyle.maxWidth = maxWidth;
\t\t}
\t}

\treturn ret !== undefined ?

\t\t// Support: IE <=9 - 11 only
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}


function addGetHookIf( conditionFn, hookFn ) {

\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {

\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn ( this.get = hookFn ).apply( this, arguments );
\t\t}
\t};
}


var cssPrefixes = [ \"Webkit\", \"Moz\", \"ms\" ],
\temptyStyle = document.createElement( \"div\" ).style,
\tvendorProps = {};

// Return a vendor-prefixed property or undefined
function vendorPropName( name ) {

\t// Check for vendor prefixed names
\tvar capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in emptyStyle ) {
\t\t\treturn name;
\t\t}
\t}
}

// Return a potentially-mapped jQuery.cssProps or vendor prefixed property
function finalPropName( name ) {
\tvar final = jQuery.cssProps[ name ] || vendorProps[ name ];

\tif ( final ) {
\t\treturn final;
\t}
\tif ( name in emptyStyle ) {
\t\treturn name;
\t}
\treturn vendorProps[ name ] = vendorPropName( name ) || name;
}


var

\t// Swappable if display is none or starts with table
\t// except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trcustomProp = /^--/,
\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t};

function setPositiveNumber( elem, value, subtract ) {

\t// Any relative (+/-) values have already been
\t// normalized at this point
\tvar matches = rcssNum.exec( value );
\treturn matches ?

\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || \"px\" ) :
\t\tvalue;
}

function boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
\tvar i = dimension === \"width\" ? 1 : 0,
\t\textra = 0,
\t\tdelta = 0;

\t// Adjustment may not be necessary
\tif ( box === ( isBorderBox ? \"border\" : \"content\" ) ) {
\t\treturn 0;
\t}

\tfor ( ; i < 4; i += 2 ) {

\t\t// Both box models exclude margin
\t\tif ( box === \"margin\" ) {
\t\t\tdelta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
\t\t}

\t\t// If we get here with a content-box, we're seeking \"padding\" or \"border\" or \"margin\"
\t\tif ( !isBorderBox ) {

\t\t\t// Add padding
\t\t\tdelta += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// For \"border\" or \"margin\", add border
\t\t\tif ( box !== \"padding\" ) {
\t\t\t\tdelta += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );

\t\t\t// But still keep track of it otherwise
\t\t\t} else {
\t\t\t\textra += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}

\t\t// If we get here with a border-box (content + padding + border), we're seeking \"content\" or
\t\t// \"padding\" or \"margin\"
\t\t} else {

\t\t\t// For \"content\", subtract padding
\t\t\tif ( box === \"content\" ) {
\t\t\t\tdelta -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// For \"content\" or \"padding\", subtract border
\t\t\tif ( box !== \"margin\" ) {
\t\t\t\tdelta -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\t// Account for positive content-box scroll gutter when requested by providing computedVal
\tif ( !isBorderBox && computedVal >= 0 ) {

\t\t// offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
\t\t// Assuming integer scroll gutter, subtract the rest and round down
\t\tdelta += Math.max( 0, Math.ceil(
\t\t\telem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
\t\t\tcomputedVal -
\t\t\tdelta -
\t\t\textra -
\t\t\t0.5

\t\t// If offsetWidth/offsetHeight is unknown, then we can't determine content-box scroll gutter
\t\t// Use an explicit zero to avoid NaN (gh-3964)
\t\t) ) || 0;
\t}

\treturn delta;
}

function getWidthOrHeight( elem, dimension, extra ) {

\t// Start with computed style
\tvar styles = getStyles( elem ),

\t\t// To avoid forcing a reflow, only fetch boxSizing if we need it (gh-4322).
\t\t// Fake content-box until we know it's needed to know the true value.
\t\tboxSizingNeeded = !support.boxSizingReliable() || extra,
\t\tisBorderBox = boxSizingNeeded &&
\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\tvalueIsBorderBox = isBorderBox,

\t\tval = curCSS( elem, dimension, styles ),
\t\toffsetProp = \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 );

\t// Support: Firefox <=54
\t// Return a confounding non-pixel value or feign ignorance, as appropriate.
\tif ( rnumnonpx.test( val ) ) {
\t\tif ( !extra ) {
\t\t\treturn val;
\t\t}
\t\tval = \"auto\";
\t}


\t// Fall back to offsetWidth/offsetHeight when value is \"auto\"
\t// This happens for inline elements with no explicit setting (gh-3571)
\t// Support: Android <=4.1 - 4.3 only
\t// Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
\t// Support: IE 9-11 only
\t// Also use offsetWidth/offsetHeight for when box sizing is unreliable
\t// We use getClientRects() to check for hidden/disconnected.
\t// In those cases, the computed value can be trusted to be border-box
\tif ( ( !support.boxSizingReliable() && isBorderBox ||
\t\tval === \"auto\" ||
\t\t!parseFloat( val ) && jQuery.css( elem, \"display\", false, styles ) === \"inline\" ) &&
\t\telem.getClientRects().length ) {

\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t\t// Where available, offsetWidth/offsetHeight approximate border box dimensions.
\t\t// Where not available (e.g., SVG), assume unreliable box-sizing and interpret the
\t\t// retrieved value as a content box dimension.
\t\tvalueIsBorderBox = offsetProp in elem;
\t\tif ( valueIsBorderBox ) {
\t\t\tval = elem[ offsetProp ];
\t\t}
\t}

\t// Normalize \"\" and auto
\tval = parseFloat( val ) || 0;

\t// Adjust for the element's box model
\treturn ( val +
\t\tboxModelAdjustment(
\t\t\telem,
\t\t\tdimension,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles,

\t\t\t// Provide the current computed size to request scroll gutter calculation (gh-3589)
\t\t\tval
\t\t)
\t) + \"px\";
}

jQuery.extend( {

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"animationIterationCount\": true,
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"gridArea\": true,
\t\t\"gridColumn\": true,
\t\t\"gridColumnEnd\": true,
\t\t\"gridColumnStart\": true,
\t\t\"gridRow\": true,
\t\t\"gridRowEnd\": true,
\t\t\"gridRowStart\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = camelCase( name ),
\t\t\tisCustomProp = rcustomProp.test( name ),
\t\t\tstyle = elem.style;

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to query the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
\t\t\t\tvalue = adjustCSS( elem, name, ret );

\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number was passed in, add the unit (except for certain CSS properties)
\t\t\t// The isCustomProp check can be removed in jQuery 4.0 when we only auto-append
\t\t\t// \"px\" to a few hardcoded values.
\t\t\tif ( type === \"number\" && !isCustomProp ) {
\t\t\t\tvalue += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? \"\" : \"px\" );
\t\t\t}

\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !( \"set\" in hooks ) ||
\t\t\t\t( value = hooks.set( elem, value, extra ) ) !== undefined ) {

\t\t\t\tif ( isCustomProp ) {
\t\t\t\t\tstyle.setProperty( name, value );
\t\t\t\t} else {
\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t}
\t\t\t}

\t\t} else {

\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks &&
\t\t\t\t( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = camelCase( name ),
\t\t\tisCustomProp = rcustomProp.test( name );

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to modify the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

\t\t// Try prefixed name followed by the unprefixed name
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t// Convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || isFinite( num ) ? num || 0 : val;
\t\t}

\t\treturn val;
\t}
} );

jQuery.each( [ \"height\", \"width\" ], function( i, dimension ) {
\tjQuery.cssHooks[ dimension ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) &&

\t\t\t\t\t// Support: Safari 8+
\t\t\t\t\t// Table columns in Safari have non-zero offsetWidth & zero
\t\t\t\t\t// getBoundingClientRect().width unless display is changed.
\t\t\t\t\t// Support: IE <=11 only
\t\t\t\t\t// Running getBoundingClientRect on a disconnected node
\t\t\t\t\t// in IE throws an error.
\t\t\t\t\t( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
\t\t\t\t\t\tswap( elem, cssShow, function() {
\t\t\t\t\t\t\treturn getWidthOrHeight( elem, dimension, extra );
\t\t\t\t\t\t} ) :
\t\t\t\t\t\tgetWidthOrHeight( elem, dimension, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar matches,
\t\t\t\tstyles = getStyles( elem ),

\t\t\t\t// Only read styles.position if the test has a chance to fail
\t\t\t\t// to avoid forcing a reflow.
\t\t\t\tscrollboxSizeBuggy = !support.scrollboxSize() &&
\t\t\t\t\tstyles.position === \"absolute\",

\t\t\t\t// To avoid forcing a reflow, only fetch boxSizing if we need it (gh-3991)
\t\t\t\tboxSizingNeeded = scrollboxSizeBuggy || extra,
\t\t\t\tisBorderBox = boxSizingNeeded &&
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\tsubtract = extra ?
\t\t\t\t\tboxModelAdjustment(
\t\t\t\t\t\telem,
\t\t\t\t\t\tdimension,
\t\t\t\t\t\textra,
\t\t\t\t\t\tisBorderBox,
\t\t\t\t\t\tstyles
\t\t\t\t\t) :
\t\t\t\t\t0;

\t\t\t// Account for unreliable border-box dimensions by comparing offset* to computed and
\t\t\t// faking a content-box to get border and padding (gh-3699)
\t\t\tif ( isBorderBox && scrollboxSizeBuggy ) {
\t\t\t\tsubtract -= Math.ceil(
\t\t\t\t\telem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
\t\t\t\t\tparseFloat( styles[ dimension ] ) -
\t\t\t\t\tboxModelAdjustment( elem, dimension, \"border\", false, styles ) -
\t\t\t\t\t0.5
\t\t\t\t);
\t\t\t}

\t\t\t// Convert to pixels if value adjustment is needed
\t\t\tif ( subtract && ( matches = rcssNum.exec( value ) ) &&
\t\t\t\t( matches[ 3 ] || \"px\" ) !== \"px\" ) {

\t\t\t\telem.style[ dimension ] = value;
\t\t\t\tvalue = jQuery.css( elem, dimension );
\t\t\t}

\t\t\treturn setPositiveNumber( elem, value, subtract );
\t\t}
\t};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn ( parseFloat( curCSS( elem, \"marginLeft\" ) ) ||
\t\t\t\telem.getBoundingClientRect().left -
\t\t\t\t\tswap( elem, { marginLeft: 0 }, function() {
\t\t\t\t\t\treturn elem.getBoundingClientRect().left;
\t\t\t\t\t} )
\t\t\t\t) + \"px\";
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each( {
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split( \" \" ) : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( prefix !== \"margin\" ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
} );

jQuery.fn.extend( {
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( Array.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t}
} );


function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || jQuery.easing._default;
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\t// Use a property on the element directly when it is not a DOM element,
\t\t\t// or when there is no matching style property that exists.
\t\t\tif ( tween.elem.nodeType !== 1 ||
\t\t\t\ttween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );

\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {

\t\t\t// Use step hook for back compat.
\t\t\t// Use cssHook if its there.
\t\t\t// Use .style if available and use plain properties where available.
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.nodeType === 1 && (
\t\t\t\t\tjQuery.cssHooks[ tween.prop ] ||
\t\t\t\t\ttween.elem.style[ finalPropName( tween.prop ) ] != null ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t},
\t_default: \"swing\"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
\tfxNow, inProgress,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trrun = /queueHooks\$/;

function schedule() {
\tif ( inProgress ) {
\t\tif ( document.hidden === false && window.requestAnimationFrame ) {
\t\t\twindow.requestAnimationFrame( schedule );
\t\t} else {
\t\t\twindow.setTimeout( schedule, jQuery.fx.interval );
\t\t}

\t\tjQuery.fx.tick();
\t}
}

// Animations created synchronously will run synchronously
function createFxNow() {
\twindow.setTimeout( function() {
\t\tfxNow = undefined;
\t} );
\treturn ( fxNow = Date.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\ti = 0,
\t\tattrs = { height: type };

\t// If we include width, step value is 1 to do all cssExpand values,
\t// otherwise step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\tvar prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
\t\tisBox = \"width\" in props || \"height\" in props,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHiddenWithinTree( elem ),
\t\tdataShow = dataPriv.get( elem, \"fxshow\" );

\t// Queue-skipping animations hijack the fx hooks
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always( function() {

\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always( function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// Detect show/hide animations
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.test( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// Pretend to be hidden if this is a \"show\" and
\t\t\t\t// there is still data from a stopped show/hide
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;

\t\t\t\t// Ignore all other no-op show/hide data
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
\t\t}
\t}

\t// Bail out if this is a no-op like .hide().hide()
\tpropTween = !jQuery.isEmptyObject( props );
\tif ( !propTween && jQuery.isEmptyObject( orig ) ) {
\t\treturn;
\t}

\t// Restrict \"overflow\" and \"display\" styles during box animations
\tif ( isBox && elem.nodeType === 1 ) {

\t\t// Support: IE <=9 - 11, Edge 12 - 15
\t\t// Record all 3 overflow attributes because IE does not infer the shorthand
\t\t// from identically-valued overflowX and overflowY and Edge just mirrors
\t\t// the overflowX value there.
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Identify a display type, preferring old show/hide data over the CSS cascade
\t\trestoreDisplay = dataShow && dataShow.display;
\t\tif ( restoreDisplay == null ) {
\t\t\trestoreDisplay = dataPriv.get( elem, \"display\" );
\t\t}
\t\tdisplay = jQuery.css( elem, \"display\" );
\t\tif ( display === \"none\" ) {
\t\t\tif ( restoreDisplay ) {
\t\t\t\tdisplay = restoreDisplay;
\t\t\t} else {

\t\t\t\t// Get nonempty value(s) by temporarily forcing visibility
\t\t\t\tshowHide( [ elem ], true );
\t\t\t\trestoreDisplay = elem.style.display || restoreDisplay;
\t\t\t\tdisplay = jQuery.css( elem, \"display\" );
\t\t\t\tshowHide( [ elem ] );
\t\t\t}
\t\t}

\t\t// Animate inline elements as inline-block
\t\tif ( display === \"inline\" || display === \"inline-block\" && restoreDisplay != null ) {
\t\t\tif ( jQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t\t// Restore the original display value at the end of pure show/hide animations
\t\t\t\tif ( !propTween ) {
\t\t\t\t\tanim.done( function() {
\t\t\t\t\t\tstyle.display = restoreDisplay;
\t\t\t\t\t} );
\t\t\t\t\tif ( restoreDisplay == null ) {
\t\t\t\t\t\tdisplay = style.display;
\t\t\t\t\t\trestoreDisplay = display === \"none\" ? \"\" : display;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tstyle.display = \"inline-block\";
\t\t\t}
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always( function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t} );
\t}

\t// Implement show/hide animations
\tpropTween = false;
\tfor ( prop in orig ) {

\t\t// General show/hide setup for this element animation
\t\tif ( !propTween ) {
\t\t\tif ( dataShow ) {
\t\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\t\thidden = dataShow.hidden;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tdataShow = dataPriv.access( elem, \"fxshow\", { display: restoreDisplay } );
\t\t\t}

\t\t\t// Store hidden/visible for toggle so `.stop().toggle()` \"reverses\"
\t\t\tif ( toggle ) {
\t\t\t\tdataShow.hidden = !hidden;
\t\t\t}

\t\t\t// Show elements before animating them
\t\t\tif ( hidden ) {
\t\t\t\tshowHide( [ elem ], true );
\t\t\t}

\t\t\t/* eslint-disable no-loop-func */

\t\t\tanim.done( function() {

\t\t\t/* eslint-enable no-loop-func */

\t\t\t\t// The final step of a \"hide\" animation is actually hiding the element
\t\t\t\tif ( !hidden ) {
\t\t\t\t\tshowHide( [ elem ] );
\t\t\t\t}
\t\t\t\tdataPriv.remove( elem, \"fxshow\" );
\t\t\t\tfor ( prop in orig ) {
\t\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t\t}
\t\t\t} );
\t\t}

\t\t// Per-property setup
\t\tpropTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
\t\tif ( !( prop in dataShow ) ) {
\t\t\tdataShow[ prop ] = propTween.start;
\t\t\tif ( hidden ) {
\t\t\t\tpropTween.end = propTween.start;
\t\t\t\tpropTween.start = 0;
\t\t\t}
\t\t}
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( Array.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = Animation.prefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {

\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t} ),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

\t\t\t\t// Support: Android 2.3 only
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ] );

\t\t\t// If there's more to do, yield
\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t}

\t\t\t// If this was an empty animation, synthesize a final progress notification
\t\t\tif ( !length ) {
\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t}

\t\t\t// Resolve the animation and report its conclusion
\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\treturn false;
\t\t},
\t\tanimation = deferred.promise( {
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, {
\t\t\t\tspecialEasing: {},
\t\t\t\teasing: jQuery.easing._default
\t\t\t}, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,

\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t} ),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length; index++ ) {
\t\tresult = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\tif ( isFunction( result.stop ) ) {
\t\t\t\tjQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
\t\t\t\t\tresult.stop.bind( result );
\t\t\t}
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\t// Attach callbacks from options
\tanimation
\t\t.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t} )
\t);

\treturn animation;
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweeners: {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value );
\t\t\tadjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
\t\t\treturn tween;
\t\t} ]
\t},

\ttweener: function( props, callback ) {
\t\tif ( isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.match( rnothtmlwhite );
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length; index++ ) {
\t\t\tprop = props[ index ];
\t\t\tAnimation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
\t\t\tAnimation.tweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilters: [ defaultPrefilter ],

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tAnimation.prefilters.unshift( callback );
\t\t} else {
\t\t\tAnimation.prefilters.push( callback );
\t\t}
\t}
} );

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tisFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !isFunction( easing ) && easing
\t};

\t// Go to the end state if fx are off
\tif ( jQuery.fx.off ) {
\t\topt.duration = 0;

\t} else {
\t\tif ( typeof opt.duration !== \"number\" ) {
\t\t\tif ( opt.duration in jQuery.fx.speeds ) {
\t\t\t\topt.duration = jQuery.fx.speeds[ opt.duration ];

\t\t\t} else {
\t\t\t\topt.duration = jQuery.fx.speeds._default;
\t\t\t}
\t\t}
\t}

\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend( {
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHiddenWithinTree ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate( { opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {

\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || dataPriv.get( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = dataPriv.get( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this &&
\t\t\t\t\t( type == null || timers[ index ].queue === type ) ) {

\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t} );
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each( function() {
\t\t\tvar index,
\t\t\t\tdata = dataPriv.get( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// Enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// Empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// Look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// Turn off finishing flag
\t\t\tdelete data.finish;
\t\t} );
\t}
} );

jQuery.each( [ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
} );

// Generate shortcuts for custom animations
jQuery.each( {
\tslideDown: genFx( \"show\" ),
\tslideUp: genFx( \"hide\" ),
\tslideToggle: genFx( \"toggle\" ),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = Date.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];

\t\t// Run the timer and safely remove it when done (allowing for external removal)
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tjQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
\tif ( inProgress ) {
\t\treturn;
\t}

\tinProgress = true;
\tschedule();
};

jQuery.fx.stop = function() {
\tinProgress = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,

\t// Default speed
\t_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = window.setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\twindow.clearTimeout( timeout );
\t\t};
\t} );
};


( function() {
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: Android <=4.3 only
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE <=11 only
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: IE <=11 only
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
} )();


var boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each( function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t} );
\t}
} );

jQuery.extend( {
\tattr: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set attributes on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === \"undefined\" ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// Attribute hooks are determined by the lowercase version
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\thooks = jQuery.attrHooks[ name.toLowerCase() ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\telem.setAttribute( name, value + \"\" );
\t\t\treturn value;
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\tret = jQuery.find.attr( elem, name );

\t\t// Non-existent attributes return null, we normalize to undefined
\t\treturn ret == null ? undefined : ret;
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tnodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name,
\t\t\ti = 0,

\t\t\t// Attribute names can contain non-HTML whitespace characters
\t\t\t// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
\t\t\tattrNames = value && value.match( rnothtmlwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( ( name = attrNames[ i++ ] ) ) {
\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t}
} );

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {

\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else {
\t\t\telem.setAttribute( name, name );
\t\t}
\t\treturn name;
\t}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\tvar ret, handle,
\t\t\tlowercaseName = name.toLowerCase();

\t\tif ( !isXML ) {

\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ lowercaseName ];
\t\t\tattrHandle[ lowercaseName ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tlowercaseName :
\t\t\t\tnull;
\t\t\tattrHandle[ lowercaseName ] = handle;
\t\t}
\t\treturn ret;
\t};
} );




var rfocusable = /^(?:input|select|textarea|button)\$/i,
\trclickable = /^(?:a|area)\$/i;

jQuery.fn.extend( {
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each( function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t} );
\t}
} );

jQuery.extend( {
\tprop: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\treturn ( elem[ name ] = value );
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\treturn elem[ name ];
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {

\t\t\t\t// Support: IE <=9 - 11 only
\t\t\t\t// elem.tabIndex doesn't always return the
\t\t\t\t// correct value when it hasn't been explicitly set
\t\t\t\t// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\t// Use proper attribute retrieval(#12072)
\t\t\t\tvar tabindex = jQuery.find.attr( elem, \"tabindex\" );

\t\t\t\tif ( tabindex ) {
\t\t\t\t\treturn parseInt( tabindex, 10 );
\t\t\t\t}

\t\t\t\tif (
\t\t\t\t\trfocusable.test( elem.nodeName ) ||
\t\t\t\t\trclickable.test( elem.nodeName ) &&
\t\t\t\t\telem.href
\t\t\t\t) {
\t\t\t\t\treturn 0;
\t\t\t\t}

\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t},

\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule \"no-unused-expressions\" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t},
\t\tset: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

jQuery.each( [
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
} );




\t// Strip and collapse whitespace according to HTML spec
\t// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
\tfunction stripAndCollapse( value ) {
\t\tvar tokens = value.match( rnothtmlwhite ) || [];
\t\treturn tokens.join( \" \" );
\t}


function getClass( elem ) {
\treturn elem.getAttribute && elem.getAttribute( \"class\" ) || \"\";
}

function classesToArray( value ) {
\tif ( Array.isArray( value ) ) {
\t\treturn value;
\t}
\tif ( typeof value === \"string\" ) {
\t\treturn value.match( rnothtmlwhite ) || [];
\t}
\treturn [];
}

jQuery.fn.extend( {
\taddClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tclasses = classesToArray( value );

\t\tif ( classes.length ) {
\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( !arguments.length ) {
\t\t\treturn this.attr( \"class\", \"\" );
\t\t}

\t\tclasses = classesToArray( value );

\t\tif ( classes.length ) {
\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );

\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {

\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) > -1 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value,
\t\t\tisValidValue = type === \"string\" || Array.isArray( value );

\t\tif ( typeof stateVal === \"boolean\" && isValidValue ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( isFunction( value ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).toggleClass(
\t\t\t\t\tvalue.call( this, i, getClass( this ), stateVal ),
\t\t\t\t\tstateVal
\t\t\t\t);
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar className, i, self, classNames;

\t\t\tif ( isValidValue ) {

\t\t\t\t// Toggle individual class names
\t\t\t\ti = 0;
\t\t\t\tself = jQuery( this );
\t\t\t\tclassNames = classesToArray( value );

\t\t\t\twhile ( ( className = classNames[ i++ ] ) ) {

\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( value === undefined || type === \"boolean\" ) {
\t\t\t\tclassName = getClass( this );
\t\t\t\tif ( className ) {

\t\t\t\t\t// Store className if set
\t\t\t\t\tdataPriv.set( this, \"__className__\", className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tif ( this.setAttribute ) {
\t\t\t\t\tthis.setAttribute( \"class\",
\t\t\t\t\t\tclassName || value === false ?
\t\t\t\t\t\t\"\" :
\t\t\t\t\t\tdataPriv.get( this, \"__className__\" ) || \"\"
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\thasClass: function( selector ) {
\t\tvar className, elem,
\t\t\ti = 0;

\t\tclassName = \" \" + selector + \" \";
\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\tif ( elem.nodeType === 1 &&
\t\t\t\t( \" \" + stripAndCollapse( getClass( elem ) ) + \" \" ).indexOf( className ) > -1 ) {
\t\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
} );




var rreturn = /\\r/g;

jQuery.fn.extend( {
\tval: function( value ) {
\t\tvar hooks, ret, valueIsFunction,
\t\t\telem = this[ 0 ];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] ||
\t\t\t\t\tjQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks &&
\t\t\t\t\t\"get\" in hooks &&
\t\t\t\t\t( ret = hooks.get( elem, \"value\" ) ) !== undefined
\t\t\t\t) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\t// Handle most common string cases
\t\t\t\tif ( typeof ret === \"string\" ) {
\t\t\t\t\treturn ret.replace( rreturn, \"\" );
\t\t\t\t}

\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\treturn ret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tvalueIsFunction = isFunction( value );

\t\treturn this.each( function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( valueIsFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";

\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";

\t\t\t} else if ( Array.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t} );
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !( \"set\" in hooks ) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t} );
\t}
} );

jQuery.extend( {
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {

\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :

\t\t\t\t\t// Support: IE <=10 - 11 only
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\t// Strip and collapse whitespace
\t\t\t\t\t// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
\t\t\t\t\tstripAndCollapse( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option, i,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\",
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length;

\t\t\t\tif ( index < 0 ) {
\t\t\t\t\ti = max;

\t\t\t\t} else {
\t\t\t\t\ti = one ? index : 0;
\t\t\t\t}

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t// IE8-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&

\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t!option.disabled &&
\t\t\t\t\t\t\t( !option.parentNode.disabled ||
\t\t\t\t\t\t\t\t!nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t/* eslint-disable no-cond-assign */

\t\t\t\t\tif ( option.selected =
\t\t\t\t\t\tjQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
\t\t\t\t\t) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}

\t\t\t\t\t/* eslint-enable no-cond-assign */
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( Array.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute( \"value\" ) === null ? \"on\" : elem.value;
\t\t};
\t}
} );




// Return jQuery for attributes-only inclusion


support.focusin = \"onfocusin\" in window;


var rfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\tstopPropagationCallback = function( e ) {
\t\te.stopPropagation();
\t};

jQuery.extend( jQuery.event, {

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split( \".\" ) : [];

\t\tcur = lastElement = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf( \".\" ) > -1 ) {

\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split( \".\" );
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf( \":\" ) < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join( \".\" );
\t\tevent.rnamespace = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === ( elem.ownerDocument || document ) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tlastElement = cur;
\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( dataPriv.get( cur, \"events\" ) || {} )[ event.type ] &&
\t\t\t\tdataPriv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( ( !special._default ||
\t\t\t\tspecial._default.apply( eventPath.pop(), data ) === false ) &&
\t\t\t\tacceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name as the event.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;

\t\t\t\t\tif ( event.isPropagationStopped() ) {
\t\t\t\t\t\tlastElement.addEventListener( type, stopPropagationCallback );
\t\t\t\t\t}

\t\t\t\t\telem[ type ]();

\t\t\t\t\tif ( event.isPropagationStopped() ) {
\t\t\t\t\t\tlastElement.removeEventListener( type, stopPropagationCallback );
\t\t\t\t\t}

\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\t// Piggyback on a donor event to simulate a different one
\t// Used only for `focus(in | out)` events
\tsimulate: function( type, elem, event ) {
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true
\t\t\t}
\t\t);

\t\tjQuery.event.trigger( e, null, elem );
\t}

} );

jQuery.fn.extend( {

\ttrigger: function( type, data ) {
\t\treturn this.each( function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t} );
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[ 0 ];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
\tjQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdataPriv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdataPriv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t} );
}
var location = window.location;

var nonce = Date.now();

var rquery = ( /\\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE 9 - 11 only
\t// IE throws on parseFromString with invalid input.
\ttry {
\t\txml = ( new window.DOMParser() ).parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};


var
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( Array.isArray( obj ) ) {

\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {

\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {

\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams(
\t\t\t\t\tprefix + \"[\" + ( typeof v === \"object\" && v != null ? i : \"\" ) + \"]\",
\t\t\t\t\tv,
\t\t\t\t\ttraditional,
\t\t\t\t\tadd
\t\t\t\t);
\t\t\t}
\t\t} );

\t} else if ( !traditional && toType( obj ) === \"object\" ) {

\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {

\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, valueOrFunction ) {

\t\t\t// If value is a function, invoke it and use its return value
\t\t\tvar value = isFunction( valueOrFunction ) ?
\t\t\t\tvalueOrFunction() :
\t\t\t\tvalueOrFunction;

\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" +
\t\t\t\tencodeURIComponent( value == null ? \"\" : value );
\t\t};

\tif ( a == null ) {
\t\treturn \"\";
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t} );

\t} else {

\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" );
};

jQuery.fn.extend( {
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map( function() {

\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t} )
\t\t.filter( function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t} )
\t\t.map( function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\tif ( val == null ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\tif ( Array.isArray( val ) ) {
\t\t\t\treturn jQuery.map( val, function( val ) {
\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t} );
\t\t\t}

\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t} ).get();
\t}
} );


var
\tr20 = /%20/g,
\trhash = /#.*\$/,
\trantiCache = /([?&])_=[^&]*/,
\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\$/mg,

\t// #7653, #8125, #8152: local protocol detection
\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\trnoContent = /^(?:GET|HEAD)\$/,
\trprotocol = /^\\/\\//,

\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\tprefilters = {},

\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\ttransports = {},

\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\tallTypes = \"*/\".concat( \"*\" ),

\t// Anchor tag for parsing the document origin
\toriginAnchor = document.createElement( \"a\" );
\toriginAnchor.href = location.href;

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

\t// dataTypeExpression is optional and defaults to \"*\"
\treturn function( dataTypeExpression, func ) {

\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\tfunc = dataTypeExpression;
\t\t\tdataTypeExpression = \"*\";
\t\t}

\t\tvar dataType,
\t\t\ti = 0,
\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

\t\tif ( isFunction( func ) ) {

\t\t\t// For each dataType in the dataTypeExpression
\t\t\twhile ( ( dataType = dataTypes[ i++ ] ) ) {

\t\t\t\t// Prepend if requested
\t\t\t\tif ( dataType[ 0 ] === \"+\" ) {
\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

\t\t\t\t// Otherwise append
\t\t\t\t} else {
\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\tvar inspected = {},
\t\tseekingTransport = ( structure === transports );

\tfunction inspect( dataType ) {
\t\tvar selected;
\t\tinspected[ dataType ] = true;
\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\tif ( typeof dataTypeOrTransport === \"string\" &&
\t\t\t\t!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\treturn false;
\t\t\t} else if ( seekingTransport ) {
\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t}
\t\t} );
\t\treturn selected;
\t}

\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
\tvar key, deep,
\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\tfor ( key in src ) {
\t\tif ( src[ key ] !== undefined ) {
\t\t\t( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
\t\t}
\t}
\tif ( deep ) {
\t\tjQuery.extend( true, target, deep );
\t}

\treturn target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

\tvar ct, type, finalDataType, firstDataType,
\t\tcontents = s.contents,
\t\tdataTypes = s.dataTypes;

\t// Remove auto dataType and get content-type in the process
\twhile ( dataTypes[ 0 ] === \"*\" ) {
\t\tdataTypes.shift();
\t\tif ( ct === undefined ) {
\t\t\tct = s.mimeType || jqXHR.getResponseHeader( \"Content-Type\" );
\t\t}
\t}

\t// Check if we're dealing with a known content-type
\tif ( ct ) {
\t\tfor ( type in contents ) {
\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\tdataTypes.unshift( type );
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t// Check to see if we have a response for the expected dataType
\tif ( dataTypes[ 0 ] in responses ) {
\t\tfinalDataType = dataTypes[ 0 ];
\t} else {

\t\t// Try convertible dataTypes
\t\tfor ( type in responses ) {
\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[ 0 ] ] ) {
\t\t\t\tfinalDataType = type;
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( !firstDataType ) {
\t\t\t\tfirstDataType = type;
\t\t\t}
\t\t}

\t\t// Or just use first one
\t\tfinalDataType = finalDataType || firstDataType;
\t}

\t// If we found a dataType
\t// We add the dataType to the list if needed
\t// and return the corresponding response
\tif ( finalDataType ) {
\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\tdataTypes.unshift( finalDataType );
\t\t}
\t\treturn responses[ finalDataType ];
\t}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
\tvar conv2, current, conv, tmp, prev,
\t\tconverters = {},

\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\tdataTypes = s.dataTypes.slice();

\t// Create converters map with lowercased keys
\tif ( dataTypes[ 1 ] ) {
\t\tfor ( conv in s.converters ) {
\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t}
\t}

\tcurrent = dataTypes.shift();

\t// Convert to each sequential dataType
\twhile ( current ) {

\t\tif ( s.responseFields[ current ] ) {
\t\t\tjqXHR[ s.responseFields[ current ] ] = response;
\t\t}

\t\t// Apply the dataFilter if provided
\t\tif ( !prev && isSuccess && s.dataFilter ) {
\t\t\tresponse = s.dataFilter( response, s.dataType );
\t\t}

\t\tprev = current;
\t\tcurrent = dataTypes.shift();

\t\tif ( current ) {

\t\t\t// There's only work to do if current dataType is non-auto
\t\t\tif ( current === \"*\" ) {

\t\t\t\tcurrent = prev;

\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\t} else if ( prev !== \"*\" && prev !== current ) {

\t\t\t\t// Seek a direct converter
\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t// If none found, seek a pair
\t\t\t\tif ( !conv ) {
\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\ttmp = conv2.split( \" \" );
\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\tif ( conv ) {

\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\tdataTypes.unshift( tmp[ 1 ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\tif ( conv && s.throws ) {
\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t} else {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tstate: \"parsererror\",
\t\t\t\t\t\t\t\terror: conv ? e : \"No conversion from \" + prev + \" to \" + current
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn { state: \"success\", data: response };
}

jQuery.extend( {

\t// Counter for holding the number of active queries
\tactive: 0,

\t// Last-Modified header cache for next request
\tlastModified: {},
\tetag: {},

\tajaxSettings: {
\t\turl: location.href,
\t\ttype: \"GET\",
\t\tisLocal: rlocalProtocol.test( location.protocol ),
\t\tglobal: true,
\t\tprocessData: true,
\t\tasync: true,
\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",

\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\taccepts: {
\t\t\t\"*\": allTypes,
\t\t\ttext: \"text/plain\",
\t\t\thtml: \"text/html\",
\t\t\txml: \"application/xml, text/xml\",
\t\t\tjson: \"application/json, text/javascript\"
\t\t},

\t\tcontents: {
\t\t\txml: /\\bxml\\b/,
\t\t\thtml: /\\bhtml/,
\t\t\tjson: /\\bjson\\b/
\t\t},

\t\tresponseFields: {
\t\t\txml: \"responseXML\",
\t\t\ttext: \"responseText\",
\t\t\tjson: \"responseJSON\"
\t\t},

\t\t// Data converters
\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\tconverters: {

\t\t\t// Convert anything to text
\t\t\t\"* text\": String,

\t\t\t// Text to html (true = no transformation)
\t\t\t\"text html\": true,

\t\t\t// Evaluate text as a json expression
\t\t\t\"text json\": JSON.parse,

\t\t\t// Parse text as xml
\t\t\t\"text xml\": jQuery.parseXML
\t\t},

\t\t// For options that shouldn't be deep extended:
\t\t// you can add your own custom options here if
\t\t// and when you create one that shouldn't be
\t\t// deep extended (see ajaxExtend)
\t\tflatOptions: {
\t\t\turl: true,
\t\t\tcontext: true
\t\t}
\t},

\t// Creates a full fledged settings object into target
\t// with both ajaxSettings and settings fields.
\t// If target is omitted, writes into ajaxSettings.
\tajaxSetup: function( target, settings ) {
\t\treturn settings ?

\t\t\t// Building a settings object
\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t// Extending ajaxSettings
\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t},

\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t// Main method
\tajax: function( url, options ) {

\t\t// If url is an object, simulate pre-1.5 signature
\t\tif ( typeof url === \"object\" ) {
\t\t\toptions = url;
\t\t\turl = undefined;
\t\t}

\t\t// Force options to be an object
\t\toptions = options || {};

\t\tvar transport,

\t\t\t// URL without anti-cache param
\t\t\tcacheURL,

\t\t\t// Response headers
\t\t\tresponseHeadersString,
\t\t\tresponseHeaders,

\t\t\t// timeout handle
\t\t\ttimeoutTimer,

\t\t\t// Url cleanup var
\t\t\turlAnchor,

\t\t\t// Request state (becomes false upon send and true upon completion)
\t\t\tcompleted,

\t\t\t// To know if global events are to be dispatched
\t\t\tfireGlobals,

\t\t\t// Loop variable
\t\t\ti,

\t\t\t// uncached part of the url
\t\t\tuncached,

\t\t\t// Create the final options object
\t\t\ts = jQuery.ajaxSetup( {}, options ),

\t\t\t// Callbacks context
\t\t\tcallbackContext = s.context || s,

\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\tglobalEventContext = s.context &&
\t\t\t\t( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\t\tjQuery( callbackContext ) :
\t\t\t\t\tjQuery.event,

\t\t\t// Deferreds
\t\t\tdeferred = jQuery.Deferred(),
\t\t\tcompleteDeferred = jQuery.Callbacks( \"once memory\" ),

\t\t\t// Status-dependent callbacks
\t\t\tstatusCode = s.statusCode || {},

\t\t\t// Headers (they are sent all at once)
\t\t\trequestHeaders = {},
\t\t\trequestHeadersNames = {},

\t\t\t// Default abort message
\t\t\tstrAbort = \"canceled\",

\t\t\t// Fake xhr
\t\t\tjqXHR = {
\t\t\t\treadyState: 0,

\t\t\t\t// Builds headers hashtable if needed
\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\tvar match;
\t\t\t\t\tif ( completed ) {
\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\twhile ( ( match = rheaders.exec( responseHeadersString ) ) ) {
\t\t\t\t\t\t\t\tresponseHeaders[ match[ 1 ].toLowerCase() + \" \" ] =
\t\t\t\t\t\t\t\t\t( responseHeaders[ match[ 1 ].toLowerCase() + \" \" ] || [] )
\t\t\t\t\t\t\t\t\t\t.concat( match[ 2 ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() + \" \" ];
\t\t\t\t\t}
\t\t\t\t\treturn match == null ? null : match.join( \", \" );
\t\t\t\t},

\t\t\t\t// Raw string
\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\treturn completed ? responseHeadersString : null;
\t\t\t\t},

\t\t\t\t// Caches the header
\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\tif ( completed == null ) {
\t\t\t\t\t\tname = requestHeadersNames[ name.toLowerCase() ] =
\t\t\t\t\t\t\trequestHeadersNames[ name.toLowerCase() ] || name;
\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Overrides response content-type header
\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\tif ( completed == null ) {
\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\tvar code;
\t\t\t\t\tif ( map ) {
\t\t\t\t\t\tif ( completed ) {

\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t// Lazy-add the new callbacks in a way that preserves old ones
\t\t\t\t\t\t\tfor ( code in map ) {
\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Cancel the request
\t\t\t\tabort: function( statusText ) {
\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t}
\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t};

\t\t// Attach deferreds
\t\tdeferred.promise( jqXHR );

\t\t// Add protocol if not provided (prefilters might expect it)
\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t// We also use the url parameter if available
\t\ts.url = ( ( url || s.url || location.href ) + \"\" )
\t\t\t.replace( rprotocol, location.protocol + \"//\" );

\t\t// Alias method option to type as per ticket #12004
\t\ts.type = options.method || options.type || s.method || s.type;

\t\t// Extract dataTypes list
\t\ts.dataTypes = ( s.dataType || \"*\" ).toLowerCase().match( rnothtmlwhite ) || [ \"\" ];

\t\t// A cross-domain request is in order when the origin doesn't match the current origin.
\t\tif ( s.crossDomain == null ) {
\t\t\turlAnchor = document.createElement( \"a\" );

\t\t\t// Support: IE <=8 - 11, Edge 12 - 15
\t\t\t// IE throws exception on accessing the href property if url is malformed,
\t\t\t// e.g. http://example.com:80x/
\t\t\ttry {
\t\t\t\turlAnchor.href = s.url;

\t\t\t\t// Support: IE <=8 - 11 only
\t\t\t\t// Anchor's host property isn't correctly set when s.url is relative
\t\t\t\turlAnchor.href = urlAnchor.href;
\t\t\t\ts.crossDomain = originAnchor.protocol + \"//\" + originAnchor.host !==
\t\t\t\t\turlAnchor.protocol + \"//\" + urlAnchor.host;
\t\t\t} catch ( e ) {

\t\t\t\t// If there is an error parsing the URL, assume it is crossDomain,
\t\t\t\t// it can be rejected by the transport if it is invalid
\t\t\t\ts.crossDomain = true;
\t\t\t}
\t\t}

\t\t// Convert data if not already a string
\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t}

\t\t// Apply prefilters
\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t// If request was aborted inside a prefilter, stop there
\t\tif ( completed ) {
\t\t\treturn jqXHR;
\t\t}

\t\t// We can fire global events as of now if asked to
\t\t// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
\t\tfireGlobals = jQuery.event && s.global;

\t\t// Watch for a new set of requests
\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\tjQuery.event.trigger( \"ajaxStart\" );
\t\t}

\t\t// Uppercase the type
\t\ts.type = s.type.toUpperCase();

\t\t// Determine if request has content
\t\ts.hasContent = !rnoContent.test( s.type );

\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t// and/or If-None-Match header later on
\t\t// Remove hash to simplify url manipulation
\t\tcacheURL = s.url.replace( rhash, \"\" );

\t\t// More options handling for requests with no content
\t\tif ( !s.hasContent ) {

\t\t\t// Remember the hash so we can put it back
\t\t\tuncached = s.url.slice( cacheURL.length );

\t\t\t// If data is available and should be processed, append data to url
\t\t\tif ( s.data && ( s.processData || typeof s.data === \"string\" ) ) {
\t\t\t\tcacheURL += ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data;

\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\tdelete s.data;
\t\t\t}

\t\t\t// Add or update anti-cache param if needed
\t\t\tif ( s.cache === false ) {
\t\t\t\tcacheURL = cacheURL.replace( rantiCache, \"\$1\" );
\t\t\t\tuncached = ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + ( nonce++ ) + uncached;
\t\t\t}

\t\t\t// Put hash and anti-cache on the URL that will be requested (gh-1732)
\t\t\ts.url = cacheURL + uncached;

\t\t// Change '%20' to '+' if this is encoded form body content (gh-2658)
\t\t} else if ( s.data && s.processData &&
\t\t\t( s.contentType || \"\" ).indexOf( \"application/x-www-form-urlencoded\" ) === 0 ) {
\t\t\ts.data = s.data.replace( r20, \"+\" );
\t\t}

\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\tif ( s.ifModified ) {
\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t}
\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t}
\t\t}

\t\t// Set the correct header, if data is being sent
\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t}

\t\t// Set the Accepts header for the server, depending on the dataType
\t\tjqXHR.setRequestHeader(
\t\t\t\"Accept\",
\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
\t\t\t\ts.accepts[ s.dataTypes[ 0 ] ] +
\t\t\t\t\t( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\ts.accepts[ \"*\" ]
\t\t);

\t\t// Check for headers option
\t\tfor ( i in s.headers ) {
\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t}

\t\t// Allow custom headers/mimetypes and early abort
\t\tif ( s.beforeSend &&
\t\t\t( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

\t\t\t// Abort if not done already and return
\t\t\treturn jqXHR.abort();
\t\t}

\t\t// Aborting is no longer a cancellation
\t\tstrAbort = \"abort\";

\t\t// Install callbacks on deferreds
\t\tcompleteDeferred.add( s.complete );
\t\tjqXHR.done( s.success );
\t\tjqXHR.fail( s.error );

\t\t// Get transport
\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t// If no transport, we auto-abort
\t\tif ( !transport ) {
\t\t\tdone( -1, \"No Transport\" );
\t\t} else {
\t\t\tjqXHR.readyState = 1;

\t\t\t// Send global event
\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t}

\t\t\t// If request was aborted inside ajaxSend, stop there
\t\t\tif ( completed ) {
\t\t\t\treturn jqXHR;
\t\t\t}

\t\t\t// Timeout
\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\ttimeoutTimer = window.setTimeout( function() {
\t\t\t\t\tjqXHR.abort( \"timeout\" );
\t\t\t\t}, s.timeout );
\t\t\t}

\t\t\ttry {
\t\t\t\tcompleted = false;
\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t} catch ( e ) {

\t\t\t\t// Rethrow post-completion exceptions
\t\t\t\tif ( completed ) {
\t\t\t\t\tthrow e;
\t\t\t\t}

\t\t\t\t// Propagate others as results
\t\t\t\tdone( -1, e );
\t\t\t}
\t\t}

\t\t// Callback for when everything is done
\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\tstatusText = nativeStatusText;

\t\t\t// Ignore repeat invocations
\t\t\tif ( completed ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tcompleted = true;

\t\t\t// Clear timeout if it exists
\t\t\tif ( timeoutTimer ) {
\t\t\t\twindow.clearTimeout( timeoutTimer );
\t\t\t}

\t\t\t// Dereference transport for early garbage collection
\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\ttransport = undefined;

\t\t\t// Cache response headers
\t\t\tresponseHeadersString = headers || \"\";

\t\t\t// Set readyState
\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t// Determine if successful
\t\t\tisSuccess = status >= 200 && status < 300 || status === 304;

\t\t\t// Get response data
\t\t\tif ( responses ) {
\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t}

\t\t\t// Convert no matter what (that way responseXXX fields are always set)
\t\t\tresponse = ajaxConvert( s, response, jqXHR, isSuccess );

\t\t\t// If successful, handle type chaining
\t\t\tif ( isSuccess ) {

\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"Last-Modified\" );
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"etag\" );
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// if no content
\t\t\t\tif ( status === 204 || s.type === \"HEAD\" ) {
\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t// if not modified
\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t// If we have data, let's convert it
\t\t\t\t} else {
\t\t\t\t\tstatusText = response.state;
\t\t\t\t\tsuccess = response.data;
\t\t\t\t\terror = response.error;
\t\t\t\t\tisSuccess = !error;
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// Extract error from statusText and normalize for non-aborts
\t\t\t\terror = statusText;
\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Set data for the fake xhr object
\t\t\tjqXHR.status = status;
\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t// Success/Error
\t\t\tif ( isSuccess ) {
\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t} else {
\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t}

\t\t\t// Status-dependent callbacks
\t\t\tjqXHR.statusCode( statusCode );
\t\t\tstatusCode = undefined;

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t}

\t\t\t// Complete
\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );

\t\t\t\t// Handle the global AJAX counter
\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\tjQuery.event.trigger( \"ajaxStop\" );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn jqXHR;
\t},

\tgetJSON: function( url, data, callback ) {
\t\treturn jQuery.get( url, data, callback, \"json\" );
\t},

\tgetScript: function( url, callback ) {
\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t}
} );

jQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\tjQuery[ method ] = function( url, data, callback, type ) {

\t\t// Shift arguments if data argument was omitted
\t\tif ( isFunction( data ) ) {
\t\t\ttype = type || callback;
\t\t\tcallback = data;
\t\t\tdata = undefined;
\t\t}

\t\t// The url can be an options object (which then must have .url)
\t\treturn jQuery.ajax( jQuery.extend( {
\t\t\turl: url,
\t\t\ttype: method,
\t\t\tdataType: type,
\t\t\tdata: data,
\t\t\tsuccess: callback
\t\t}, jQuery.isPlainObject( url ) && url ) );
\t};
} );


jQuery._evalUrl = function( url, options ) {
\treturn jQuery.ajax( {
\t\turl: url,

\t\t// Make this explicit, since user can override this through ajaxSetup (#11264)
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tcache: true,
\t\tasync: false,
\t\tglobal: false,

\t\t// Only evaluate the response if it is successful (gh-4126)
\t\t// dataFilter is not invoked for failure responses, so using it instead
\t\t// of the default converter is kludgy but it works.
\t\tconverters: {
\t\t\t\"text script\": function() {}
\t\t},
\t\tdataFilter: function( response ) {
\t\t\tjQuery.globalEval( response, options );
\t\t}
\t} );
};


jQuery.fn.extend( {
\twrapAll: function( html ) {
\t\tvar wrap;

\t\tif ( this[ 0 ] ) {
\t\t\tif ( isFunction( html ) ) {
\t\t\t\thtml = html.call( this[ 0 ] );
\t\t\t}

\t\t\t// The elements to wrap the target around
\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map( function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t} ).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( isFunction( html ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call( this, i ) );
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t} );
\t},

\twrap: function( html ) {
\t\tvar htmlIsFunction = isFunction( html );

\t\treturn this.each( function( i ) {
\t\t\tjQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
\t\t} );
\t},

\tunwrap: function( selector ) {
\t\tthis.parent( selector ).not( \"body\" ).each( function() {
\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t} );
\t\treturn this;
\t}
} );


jQuery.expr.pseudos.hidden = function( elem ) {
\treturn !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
\treturn !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new window.XMLHttpRequest();
\t} catch ( e ) {}
};

var xhrSuccessStatus = {

\t\t// File protocol always yields status code 0, assume 200
\t\t0: 200,

\t\t// Support: IE <=9 only
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
\tvar callback, errorCallback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr();

\t\t\t\txhr.open(
\t\t\t\t\toptions.type,
\t\t\t\t\toptions.url,
\t\t\t\t\toptions.async,
\t\t\t\t\toptions.username,
\t\t\t\t\toptions.password
\t\t\t\t);

\t\t\t\t// Apply custom fields if provided
\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Override mime type if needed
\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t}

\t\t\t\t// X-Requested-With header
\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\tif ( !options.crossDomain && !headers[ \"X-Requested-With\" ] ) {
\t\t\t\t\theaders[ \"X-Requested-With\" ] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tcallback = errorCallback = xhr.onload =
\t\t\t\t\t\t\t\txhr.onerror = xhr.onabort = xhr.ontimeout =
\t\t\t\t\t\t\t\t\txhr.onreadystatechange = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {

\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t// On a manual native abort, IE9 throws
\t\t\t\t\t\t\t\t// errors on any property access that is not readyState
\t\t\t\t\t\t\t\tif ( typeof xhr.status !== \"number\" ) {
\t\t\t\t\t\t\t\t\tcomplete( 0, \"error\" );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcomplete(

\t\t\t\t\t\t\t\t\t\t// File: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,

\t\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t\t// IE9 has no XHR2 but throws on binary (trac-11426)
\t\t\t\t\t\t\t\t\t// For XHR2 non-text, let the caller handle it (gh-2498)
\t\t\t\t\t\t\t\t\t( xhr.responseType || \"text\" ) !== \"text\"  ||
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText !== \"string\" ?
\t\t\t\t\t\t\t\t\t\t{ binary: xhr.response } :
\t\t\t\t\t\t\t\t\t\t{ text: xhr.responseText },
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\terrorCallback = xhr.onerror = xhr.ontimeout = callback( \"error\" );

\t\t\t\t// Support: IE 9 only
\t\t\t\t// Use onreadystatechange to replace onabort
\t\t\t\t// to handle uncaught aborts
\t\t\t\tif ( xhr.onabort !== undefined ) {
\t\t\t\t\txhr.onabort = errorCallback;
\t\t\t\t} else {
\t\t\t\t\txhr.onreadystatechange = function() {

\t\t\t\t\t\t// Check readyState before timeout as it changes
\t\t\t\t\t\tif ( xhr.readyState === 4 ) {

\t\t\t\t\t\t\t// Allow onerror to be called first,
\t\t\t\t\t\t\t// but that will not handle a native abort
\t\t\t\t\t\t\t// Also, save errorCallback to a variable
\t\t\t\t\t\t\t// as xhr.onerror cannot be accessed
\t\t\t\t\t\t\twindow.setTimeout( function() {
\t\t\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\t\t\terrorCallback();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = callback( \"abort\" );

\t\t\t\ttry {

\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
\tif ( s.crossDomain ) {
\t\ts.contents.script = false;
\t}
} );

// Install script dataType
jQuery.ajaxSetup( {
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, \" +
\t\t\t\"application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /\\b(?:java|ecma)script\\b/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {

\t// This transport only deals with cross domain or forced-by-attrs requests
\tif ( s.crossDomain || s.scriptAttrs ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery( \"<script>\" )
\t\t\t\t\t.attr( s.scriptAttrs || {} )
\t\t\t\t\t.prop( { charset: s.scriptCharset, src: s.url } )
\t\t\t\t\t.on( \"load error\", callback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t} );

\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
\t\t\t},
\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );




var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" &&
\t\t\t\t( s.contentType || \"\" )
\t\t\t\t\t.indexOf( \"application/x-www-form-urlencoded\" ) === 0 &&
\t\t\t\trjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[ \"script json\" ] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// Force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always( function() {

\t\t\t// If previous value didn't exist - remove it
\t\t\tif ( overwritten === undefined ) {
\t\t\t\tjQuery( window ).removeProp( callbackName );

\t\t\t// Otherwise restore preexisting value
\t\t\t} else {
\t\t\t\twindow[ callbackName ] = overwritten;
\t\t\t}

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {

\t\t\t\t// Make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// Save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t} );

\t\t// Delegate to script
\t\treturn \"script\";
\t}
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
\tvar body = document.implementation.createHTMLDocument( \"\" ).body;
\tbody.innerHTML = \"<form></form><form></form>\";
\treturn body.childNodes.length === 2;
} )();


// Argument \"data\" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( typeof data !== \"string\" ) {
\t\treturn [];
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}

\tvar base, parsed, scripts;

\tif ( !context ) {

\t\t// Stop scripts or inline event handlers from being executed immediately
\t\t// by using document.implementation
\t\tif ( support.createHTMLDocument ) {
\t\t\tcontext = document.implementation.createHTMLDocument( \"\" );

\t\t\t// Set the base href for the created document
\t\t\t// so any parsed elements with URLs
\t\t\t// are based on the document's URL (gh-2965)
\t\t\tbase = context.createElement( \"base\" );
\t\t\tbase.href = document.location.href;
\t\t\tcontext.head.appendChild( base );
\t\t} else {
\t\t\tcontext = document;
\t\t}
\t}

\tparsed = rsingleTag.exec( data );
\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[ 1 ] ) ];
\t}

\tparsed = buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};


/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf( \" \" );

\tif ( off > -1 ) {
\t\tselector = stripAndCollapse( url.slice( off ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax( {
\t\t\turl: url,

\t\t\t// If \"type\" variable is undefined, then \"GET\" method will be used.
\t\t\t// Make value of this field explicit since
\t\t\t// user can override it through ajaxSetup method
\t\t\ttype: type || \"GET\",
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t} ).done( function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery( \"<div>\" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t// If the request succeeds, this function gets \"data\", \"status\", \"jqXHR\"
\t\t// but they are ignored because response was set above.
\t\t// If it fails, this function gets \"jqXHR\", \"status\", \"error\"
\t\t} ).always( callback && function( jqXHR, status ) {
\t\t\tself.each( function() {
\t\t\t\tcallback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t\t} );
\t\t} );
\t}

\treturn this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
\t\"ajaxStart\",
\t\"ajaxStop\",
\t\"ajaxComplete\",
\t\"ajaxError\",
\t\"ajaxSuccess\",
\t\"ajaxSend\"
], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
} );




jQuery.expr.pseudos.animated = function( elem ) {
\treturn jQuery.grep( jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t} ).length;
};




jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// Set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t( curCSSTop + curCSSLeft ).indexOf( \"auto\" ) > -1;

\t\t// Need to be able to calculate position if either
\t\t// top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;

\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( isFunction( options ) ) {

\t\t\t// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
\t\t\toptions = options.call( elem, i, jQuery.extend( {}, curOffset ) );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );

\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend( {

\t// offset() relates an element's border box to the document origin
\toffset: function( options ) {

\t\t// Preserve chaining for setter
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each( function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t} );
\t\t}

\t\tvar rect, win,
\t\t\telem = this[ 0 ];

\t\tif ( !elem ) {
\t\t\treturn;
\t\t}

\t\t// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
\t\t// Support: IE <=11 only
\t\t// Running getBoundingClientRect on a
\t\t// disconnected node in IE throws an error
\t\tif ( !elem.getClientRects().length ) {
\t\t\treturn { top: 0, left: 0 };
\t\t}

\t\t// Get document-relative position by adding viewport scroll to viewport-relative gBCR
\t\trect = elem.getBoundingClientRect();
\t\twin = elem.ownerDocument.defaultView;
\t\treturn {
\t\t\ttop: rect.top + win.pageYOffset,
\t\t\tleft: rect.left + win.pageXOffset
\t\t};
\t},

\t// position() relates an element's margin box to its offset parent's padding box
\t// This corresponds to the behavior of CSS absolute positioning
\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset, doc,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// position:fixed elements are offset from the viewport, which itself always has zero offset
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {

\t\t\t// Assume position:fixed implies availability of getBoundingClientRect
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {
\t\t\toffset = this.offset();

\t\t\t// Account for the *real* offset parent, which can be the document or its root element
\t\t\t// when a statically positioned element is identified
\t\t\tdoc = elem.ownerDocument;
\t\t\toffsetParent = elem.offsetParent || doc.documentElement;
\t\t\twhile ( offsetParent &&
\t\t\t\t( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
\t\t\t\tjQuery.css( offsetParent, \"position\" ) === \"static\" ) {

\t\t\t\toffsetParent = offsetParent.parentNode;
\t\t\t}
\t\t\tif ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

\t\t\t\t// Incorporate borders into its offset, since they are outside its content origin
\t\t\t\tparentOffset = jQuery( offsetParent ).offset();
\t\t\t\tparentOffset.top += jQuery.css( offsetParent, \"borderTopWidth\", true );
\t\t\t\tparentOffset.left += jQuery.css( offsetParent, \"borderLeftWidth\", true );
\t\t\t}
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\t// This method will return documentElement in the following cases:
\t// 1) For the element inside the iframe without offsetParent, this method will return
\t//    documentElement of the parent window
\t// 2) For the hidden or detached element
\t// 3) For body or html element, i.e. in case of the html node - it will return itself
\t//
\t// but those exceptions were never presented as a real life use-cases
\t// and might be considered as more preferable results.
\t//
\t// This logic, however, is not guaranteed and can change at any point in the future
\toffsetParent: function() {
\t\treturn this.map( function() {
\t\t\tvar offsetParent = this.offsetParent;

\t\t\twhile ( offsetParent && jQuery.css( offsetParent, \"position\" ) === \"static\" ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || documentElement;
\t\t} );
\t}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {

\t\t\t// Coalesce documents and windows
\t\t\tvar win;
\t\t\tif ( isWindow( elem ) ) {
\t\t\t\twin = elem;
\t\t\t} else if ( elem.nodeType === 9 ) {
\t\t\t\twin = elem.defaultView;
\t\t\t}

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : win.pageXOffset,
\t\t\t\t\ttop ? val : win.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length );
\t};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );

\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name },
\t\tfunction( defaultExtra, funcName ) {

\t\t// Margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( isWindow( elem ) ) {

\t\t\t\t\t// \$( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
\t\t\t\t\treturn funcName.indexOf( \"outer\" ) === 0 ?
\t\t\t\t\t\telem[ \"inner\" + name ] :
\t\t\t\t\t\telem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?

\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable );
\t\t};
\t} );
} );


jQuery.each( ( \"blur focus focusin focusout resize scroll click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup contextmenu\" ).split( \" \" ),
\tfunction( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
} );

jQuery.fn.extend( {
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t}
} );




jQuery.fn.extend( {

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {

\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ?
\t\t\tthis.off( selector, \"**\" ) :
\t\t\tthis.off( types, selector || \"**\", fn );
\t}
} );

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
jQuery.proxy = function( fn, context ) {
\tvar tmp, args, proxy;

\tif ( typeof context === \"string\" ) {
\t\ttmp = fn[ context ];
\t\tcontext = fn;
\t\tfn = tmp;
\t}

\t// Quick check to determine if target is callable, in the spec
\t// this throws a TypeError, but we will just return undefined.
\tif ( !isFunction( fn ) ) {
\t\treturn undefined;
\t}

\t// Simulated bind
\targs = slice.call( arguments, 2 );
\tproxy = function() {
\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t};

\t// Set the guid of unique handler to the same of original handler, so it can be removed
\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\treturn proxy;
};

jQuery.holdReady = function( hold ) {
\tif ( hold ) {
\t\tjQuery.readyWait++;
\t} else {
\t\tjQuery.ready( true );
\t}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function( obj ) {

\t// As of jQuery 3.0, isNumeric is limited to
\t// strings and numbers (primitives or objects)
\t// that can be coerced to finite numbers (gh-2662)
\tvar type = jQuery.type( obj );
\treturn ( type === \"number\" || type === \"string\" ) &&

\t\t// parseFloat NaNs numeric-cast false positives (\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t!isNaN( obj - parseFloat( obj ) );
};




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t} );
}




var

\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( !noGlobal ) {
\twindow.jQuery = window.\$ = jQuery;
}




return jQuery;
} );
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "room/startbootstrap-shop-homepage-gh-pages/vendor/jquery/jquery.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * jQuery JavaScript Library v3.4.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2019-05-01T21:04Z
 */
( function( global, factory ) {

\t\"use strict\";

\tif ( typeof module === \"object\" && typeof module.exports === \"object\" ) {

\t\t// For CommonJS and CommonJS-like environments where a proper `window`
\t\t// is present, execute the factory and get jQuery.
\t\t// For environments that do not have a `window` with a `document`
\t\t// (such as Node.js), expose a factory as module.exports.
\t\t// This accentuates the need for the creation of a real `window`.
\t\t// e.g. var jQuery = require(\"jquery\")(window);
\t\t// See ticket #14549 for more info.
\t\tmodule.exports = global.document ?
\t\t\tfactory( global, true ) :
\t\t\tfunction( w ) {
\t\t\t\tif ( !w.document ) {
\t\t\t\t\tthrow new Error( \"jQuery requires a window with a document\" );
\t\t\t\t}
\t\t\t\treturn factory( w );
\t\t\t};
\t} else {
\t\tfactory( global );
\t}

// Pass this if window is not defined yet
} )( typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
\"use strict\";

var arr = [];

var document = window.document;

var getProto = Object.getPrototypeOf;

var slice = arr.slice;

var concat = arr.concat;

var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call( Object );

var support = {};

var isFunction = function isFunction( obj ) {

      // Support: Chrome <=57, Firefox <=52
      // In some browsers, typeof returns \"function\" for HTML <object> elements
      // (i.e., `typeof document.createElement( \"object\" ) === \"function\"`).
      // We don't want to classify *any* DOM node as a function.
      return typeof obj === \"function\" && typeof obj.nodeType !== \"number\";
  };


var isWindow = function isWindow( obj ) {
\t\treturn obj != null && obj === obj.window;
\t};




\tvar preservedScriptAttributes = {
\t\ttype: true,
\t\tsrc: true,
\t\tnonce: true,
\t\tnoModule: true
\t};

\tfunction DOMEval( code, node, doc ) {
\t\tdoc = doc || document;

\t\tvar i, val,
\t\t\tscript = doc.createElement( \"script\" );

\t\tscript.text = code;
\t\tif ( node ) {
\t\t\tfor ( i in preservedScriptAttributes ) {

\t\t\t\t// Support: Firefox 64+, Edge 18+
\t\t\t\t// Some browsers don't support the \"nonce\" property on scripts.
\t\t\t\t// On the other hand, just using `getAttribute` is not enough as
\t\t\t\t// the `nonce` attribute is reset to an empty string whenever it
\t\t\t\t// becomes browsing-context connected.
\t\t\t\t// See https://github.com/whatwg/html/issues/2369
\t\t\t\t// See https://html.spec.whatwg.org/#nonce-attributes
\t\t\t\t// The `node.getAttribute` check was added for the sake of
\t\t\t\t// `jQuery.globalEval` so that it can fake a nonce-containing node
\t\t\t\t// via an object.
\t\t\t\tval = node[ i ] || node.getAttribute && node.getAttribute( i );
\t\t\t\tif ( val ) {
\t\t\t\t\tscript.setAttribute( i, val );
\t\t\t\t}
\t\t\t}
\t\t}
\t\tdoc.head.appendChild( script ).parentNode.removeChild( script );
\t}


function toType( obj ) {
\tif ( obj == null ) {
\t\treturn obj + \"\";
\t}

\t// Support: Android <=2.3 only (functionish RegExp)
\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\tclass2type[ toString.call( obj ) ] || \"object\" :
\t\ttypeof obj;
}
/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



var
\tversion = \"3.4.1\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {

\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android <=4.0 only
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;

jQuery.fn = jQuery.prototype = {

\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {

\t\t// Return all the elements in a clean array
\t\tif ( num == null ) {
\t\t\treturn slice.call( this );
\t\t}

\t\t// Return just the one element from the set
\t\treturn num < 0 ? this[ num + this.length ] : this[ num ];
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\teach: function( callback ) {
\t\treturn jQuery.each( this, callback );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map( this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t} ) );
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor();
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[ 0 ] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// Skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !isFunction( target ) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {

\t\t// Only deal with non-null/undefined values
\t\tif ( ( options = arguments[ i ] ) != null ) {

\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent Object.prototype pollution
\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( name === \"__proto__\" || target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject( copy ) ||
\t\t\t\t\t( copyIsArray = Array.isArray( copy ) ) ) ) {
\t\t\t\t\tsrc = target[ name ];

\t\t\t\t\t// Ensure proper type for the source value
\t\t\t\t\tif ( copyIsArray && !Array.isArray( src ) ) {
\t\t\t\t\t\tclone = [];
\t\t\t\t\t} else if ( !copyIsArray && !jQuery.isPlainObject( src ) ) {
\t\t\t\t\t\tclone = {};
\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src;
\t\t\t\t\t}
\t\t\t\t\tcopyIsArray = false;

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend( {

\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisPlainObject: function( obj ) {
\t\tvar proto, Ctor;

\t\t// Detect obvious negatives
\t\t// Use toString instead of jQuery.type to catch host objects
\t\tif ( !obj || toString.call( obj ) !== \"[object Object]\" ) {
\t\t\treturn false;
\t\t}

\t\tproto = getProto( obj );

\t\t// Objects with no prototype (e.g., `Object.create( null )`) are plain
\t\tif ( !proto ) {
\t\t\treturn true;
\t\t}

\t\t// Objects with prototype are plain iff they were constructed by a global Object function
\t\tCtor = hasOwn.call( proto, \"constructor\" ) && proto.constructor;
\t\treturn typeof Ctor === \"function\" && fnToString.call( Ctor ) === ObjectFunctionString;
\t},

\tisEmptyObject: function( obj ) {
\t\tvar name;

\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code, options ) {
\t\tDOMEval( code, { nonce: options && options.nonce } );
\t},

\teach: function( obj, callback ) {
\t\tvar length, i = 0;

\t\tif ( isArrayLike( obj ) ) {
\t\t\tlength = obj.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tfor ( i in obj ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android <=4.0 only
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArrayLike( Object( arr ) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t},

\t// Support: Android <=4.0 only, PhantomJS 1 only
\t// push.apply(_, arraylike) throws on ancient WebKit
\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\tfor ( ; j < len; j++ ) {
\t\t\tfirst[ i++ ] = second[ j ];
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar length, value,
\t\t\ti = 0,
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArrayLike( elems ) ) {
\t\t\tlength = elems.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
} );

if ( typeof Symbol === \"function\" ) {
\tjQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( \"Boolean Number String Function Array Date RegExp Object Error Symbol\".split( \" \" ),
function( i, name ) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

\t// Support: real iOS 8.2 only (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = !!obj && \"length\" in obj && obj.length,
\t\ttype = toType( obj );

\tif ( isFunction( obj ) || isWindow( obj ) ) {
\t\treturn false;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.3.4
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://js.foundation/
 *
 * Date: 2019-04-08
 */
(function( window ) {

var i,
\tsupport,
\tExpr,
\tgetText,
\tisXML,
\ttokenize,
\tcompile,
\tselect,
\toutermostContext,
\tsortInput,
\thasDuplicate,

\t// Local document vars
\tsetDocument,
\tdocument,
\tdocElem,
\tdocumentIsHTML,
\trbuggyQSA,
\trbuggyMatches,
\tmatches,
\tcontains,

\t// Instance-specific data
\texpando = \"sizzle\" + 1 * new Date(),
\tpreferredDoc = window.document,
\tdirruns = 0,
\tdone = 0,
\tclassCache = createCache(),
\ttokenCache = createCache(),
\tcompilerCache = createCache(),
\tnonnativeSelectorCache = createCache(),
\tsortOrder = function( a, b ) {
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t}
\t\treturn 0;
\t},

\t// Instance methods
\thasOwn = ({}).hasOwnProperty,
\tarr = [],
\tpop = arr.pop,
\tpush_native = arr.push,
\tpush = arr.push,
\tslice = arr.slice,
\t// Use a stripped-down indexOf as it's faster than native
\t// https://jsperf.com/thor-indexof-vs-for/5
\tindexOf = function( list, elem ) {
\t\tvar i = 0,
\t\t\tlen = list.length;
\t\tfor ( ; i < len; i++ ) {
\t\t\tif ( list[i] === elem ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}
\t\treturn -1;
\t},

\tbooleans = \"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped\",

\t// Regular expressions

\t// http://www.w3.org/TR/css3-selectors/#whitespace
\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",

\t// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\tidentifier = \"(?:\\\\\\\\.|[\\\\w-]|[^\\0-\\\\xa0])+\",

\t// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
\tattributes = \"\\\\[\" + whitespace + \"*(\" + identifier + \")(?:\" + whitespace +
\t\t// Operator (capture 2)
\t\t\"*([*^\$|!~]?=)\" + whitespace +
\t\t// \"Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]\"
\t\t\"*(?:'((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\"|(\" + identifier + \"))|)\" + whitespace +
\t\t\"*\\\\]\",

\tpseudos = \":(\" + identifier + \")(?:\\\\((\" +
\t\t// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
\t\t// 1. quoted (capture 3; capture 4 or capture 5)
\t\t\"('((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\")|\" +
\t\t// 2. simple (capture 6)
\t\t\"((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes + \")*)|\" +
\t\t// 3. anything else (capture 2)
\t\t\".*\" +
\t\t\")\\\\)|)\",

\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\trwhitespace = new RegExp( whitespace + \"+\", \"g\" ),
\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\trcombinators = new RegExp( \"^\" + whitespace + \"*([>+~]|\" + whitespace + \")\" + whitespace + \"*\" ),
\trdescend = new RegExp( whitespace + \"|>\" ),

\trpseudo = new RegExp( pseudos ),
\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\tmatchExpr = {
\t\t\"ID\": new RegExp( \"^#(\" + identifier + \")\" ),
\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + identifier + \")\" ),
\t\t\"TAG\": new RegExp( \"^(\" + identifier + \"|[*])\" ),
\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t\"bool\": new RegExp( \"^(?:\" + booleans + \")\$\", \"i\" ),
\t\t// For use in libraries implementing .is()
\t\t// We use this for POS matching in `select`
\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t},

\trhtml = /HTML\$/i,
\trinputs = /^(?:input|select|textarea|button)\$/i,
\trheader = /^h\\d\$/i,

\trnative = /^[^{]+\\{\\s*\\[native \\w/,

\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\trsibling = /[+~]/,

\t// CSS escapes
\t// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\trunescape = new RegExp( \"\\\\\\\\([\\\\da-f]{1,6}\" + whitespace + \"?|(\" + whitespace + \")|.)\", \"ig\" ),
\tfunescape = function( _, escaped, escapedWhitespace ) {
\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t// NaN means non-codepoint
\t\t// Support: Firefox<24
\t\t// Workaround erroneous numeric interpretation of +\"0x\"
\t\treturn high !== high || escapedWhitespace ?
\t\t\tescaped :
\t\t\thigh < 0 ?
\t\t\t\t// BMP codepoint
\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t},

\t// CSS string/identifier serialization
\t// https://drafts.csswg.org/cssom/#common-serializing-idioms
\trcssescape = /([\\0-\\x1f\\x7f]|^-?\\d)|^-\$|[^\\0-\\x1f\\x7f-\\uFFFF\\w-]/g,
\tfcssescape = function( ch, asCodePoint ) {
\t\tif ( asCodePoint ) {

\t\t\t// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
\t\t\tif ( ch === \"\\0\" ) {
\t\t\t\treturn \"\\uFFFD\";
\t\t\t}

\t\t\t// Control characters and (dependent upon position) numbers get escaped as code points
\t\t\treturn ch.slice( 0, -1 ) + \"\\\\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + \" \";
\t\t}

\t\t// Other potentially-special ASCII characters get backslash-escaped
\t\treturn \"\\\\\" + ch;
\t},

\t// Used for iframes
\t// See setDocument()
\t// Removing the function wrapper causes a \"Permission Denied\"
\t// error in IE
\tunloadHandler = function() {
\t\tsetDocument();
\t},

\tinDisabledFieldset = addCombinator(
\t\tfunction( elem ) {
\t\t\treturn elem.disabled === true && elem.nodeName.toLowerCase() === \"fieldset\";
\t\t},
\t\t{ dir: \"parentNode\", next: \"legend\" }
\t);

// Optimize for push.apply( _, NodeList )
try {
\tpush.apply(
\t\t(arr = slice.call( preferredDoc.childNodes )),
\t\tpreferredDoc.childNodes
\t);
\t// Support: Android<4.0
\t// Detect silently failing push.apply
\tarr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
\tpush = { apply: arr.length ?

\t\t// Leverage slice if possible
\t\tfunction( target, els ) {
\t\t\tpush_native.apply( target, slice.call(els) );
\t\t} :

\t\t// Support: IE<9
\t\t// Otherwise append directly
\t\tfunction( target, els ) {
\t\t\tvar j = target.length,
\t\t\t\ti = 0;
\t\t\t// Can't trust NodeList.length
\t\t\twhile ( (target[j++] = els[i++]) ) {}
\t\t\ttarget.length = j - 1;
\t\t}
\t};
}

function Sizzle( selector, context, results, seed ) {
\tvar m, i, elem, nid, match, groups, newSelector,
\t\tnewContext = context && context.ownerDocument,

\t\t// nodeType defaults to 9, since context defaults to document
\t\tnodeType = context ? context.nodeType : 9;

\tresults = results || [];

\t// Return early from calls with invalid selector or context
\tif ( typeof selector !== \"string\" || !selector ||
\t\tnodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

\t\treturn results;
\t}

\t// Try to shortcut find operations (as opposed to filters) in HTML documents
\tif ( !seed ) {

\t\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\t\tsetDocument( context );
\t\t}
\t\tcontext = context || document;

\t\tif ( documentIsHTML ) {

\t\t\t// If the selector is sufficiently simple, try using a \"get*By*\" DOM method
\t\t\t// (excepting DocumentFragment context, where the methods don't exist)
\t\t\tif ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

\t\t\t\t// ID selector
\t\t\t\tif ( (m = match[1]) ) {

\t\t\t\t\t// Document context
\t\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\t\tif ( (elem = context.getElementById( m )) ) {

\t\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}

\t\t\t\t\t// Element context
\t\t\t\t\t} else {

\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\tif ( newContext && (elem = newContext.getElementById( m )) &&
\t\t\t\t\t\t\tcontains( context, elem ) &&
\t\t\t\t\t\t\telem.id === m ) {

\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t// Type selector
\t\t\t\t} else if ( match[2] ) {
\t\t\t\t\tpush.apply( results, context.getElementsByTagName( selector ) );
\t\t\t\t\treturn results;

\t\t\t\t// Class selector
\t\t\t\t} else if ( (m = match[3]) && support.getElementsByClassName &&
\t\t\t\t\tcontext.getElementsByClassName ) {

\t\t\t\t\tpush.apply( results, context.getElementsByClassName( m ) );
\t\t\t\t\treturn results;
\t\t\t\t}
\t\t\t}

\t\t\t// Take advantage of querySelectorAll
\t\t\tif ( support.qsa &&
\t\t\t\t!nonnativeSelectorCache[ selector + \" \" ] &&
\t\t\t\t(!rbuggyQSA || !rbuggyQSA.test( selector )) &&

\t\t\t\t// Support: IE 8 only
\t\t\t\t// Exclude object elements
\t\t\t\t(nodeType !== 1 || context.nodeName.toLowerCase() !== \"object\") ) {

\t\t\t\tnewSelector = selector;
\t\t\t\tnewContext = context;

\t\t\t\t// qSA considers elements outside a scoping root when evaluating child or
\t\t\t\t// descendant combinators, which is not what we want.
\t\t\t\t// In such cases, we work around the behavior by prefixing every selector in the
\t\t\t\t// list with an ID selector referencing the scope context.
\t\t\t\t// Thanks to Andrew Dupont for this technique.
\t\t\t\tif ( nodeType === 1 && rdescend.test( selector ) ) {

\t\t\t\t\t// Capture the context ID, setting it first if necessary
\t\t\t\t\tif ( (nid = context.getAttribute( \"id\" )) ) {
\t\t\t\t\t\tnid = nid.replace( rcssescape, fcssescape );
\t\t\t\t\t} else {
\t\t\t\t\t\tcontext.setAttribute( \"id\", (nid = expando) );
\t\t\t\t\t}

\t\t\t\t\t// Prefix every selector in the list
\t\t\t\t\tgroups = tokenize( selector );
\t\t\t\t\ti = groups.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tgroups[i] = \"#\" + nid + \" \" + toSelector( groups[i] );
\t\t\t\t\t}
\t\t\t\t\tnewSelector = groups.join( \",\" );

\t\t\t\t\t// Expand context for sibling selectors
\t\t\t\t\tnewContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
\t\t\t\t\t\tcontext;
\t\t\t\t}

\t\t\t\ttry {
\t\t\t\t\tpush.apply( results,
\t\t\t\t\t\tnewContext.querySelectorAll( newSelector )
\t\t\t\t\t);
\t\t\t\t\treturn results;
\t\t\t\t} catch ( qsaError ) {
\t\t\t\t\tnonnativeSelectorCache( selector, true );
\t\t\t\t} finally {
\t\t\t\t\tif ( nid === expando ) {
\t\t\t\t\t\tcontext.removeAttribute( \"id\" );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// All others
\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *\tdeleting the oldest entry
 */
function createCache() {
\tvar keys = [];

\tfunction cache( key, value ) {
\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\tif ( keys.push( key + \" \" ) > Expr.cacheLength ) {
\t\t\t// Only keep the most recent entries
\t\t\tdelete cache[ keys.shift() ];
\t\t}
\t\treturn (cache[ key + \" \" ] = value);
\t}
\treturn cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
\tfn[ expando ] = true;
\treturn fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created element and returns a boolean result
 */
function assert( fn ) {
\tvar el = document.createElement(\"fieldset\");

\ttry {
\t\treturn !!fn( el );
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\t// Remove from its parent by default
\t\tif ( el.parentNode ) {
\t\t\tel.parentNode.removeChild( el );
\t\t}
\t\t// release memory in IE
\t\tel = null;
\t}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
\tvar arr = attrs.split(\"|\"),
\t\ti = arr.length;

\twhile ( i-- ) {
\t\tExpr.attrHandle[ arr[i] ] = handler;
\t}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
\tvar cur = b && a,
\t\tdiff = cur && a.nodeType === 1 && b.nodeType === 1 &&
\t\t\ta.sourceIndex - b.sourceIndex;

\t// Use IE sourceIndex if available on both nodes
\tif ( diff ) {
\t\treturn diff;
\t}

\t// Check if b follows a
\tif ( cur ) {
\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\tif ( cur === b ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t}

\treturn a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn name === \"input\" && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for :enabled/:disabled
 * @param {Boolean} disabled true for :disabled; false for :enabled
 */
function createDisabledPseudo( disabled ) {

\t// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
\treturn function( elem ) {

\t\t// Only certain elements can match :enabled or :disabled
\t\t// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
\t\t// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
\t\tif ( \"form\" in elem ) {

\t\t\t// Check for inherited disabledness on relevant non-disabled elements:
\t\t\t// * listed form-associated elements in a disabled fieldset
\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#category-listed
\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
\t\t\t// * option elements in a disabled optgroup
\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
\t\t\t// All such elements have a \"form\" property.
\t\t\tif ( elem.parentNode && elem.disabled === false ) {

\t\t\t\t// Option elements defer to a parent optgroup if present
\t\t\t\tif ( \"label\" in elem ) {
\t\t\t\t\tif ( \"label\" in elem.parentNode ) {
\t\t\t\t\t\treturn elem.parentNode.disabled === disabled;
\t\t\t\t\t} else {
\t\t\t\t\t\treturn elem.disabled === disabled;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Support: IE 6 - 11
\t\t\t\t// Use the isDisabled shortcut property to check for disabled fieldset ancestors
\t\t\t\treturn elem.isDisabled === disabled ||

\t\t\t\t\t// Where there is no isDisabled, check manually
\t\t\t\t\t/* jshint -W018 */
\t\t\t\t\telem.isDisabled !== !disabled &&
\t\t\t\t\t\tinDisabledFieldset( elem ) === disabled;
\t\t\t}

\t\t\treturn elem.disabled === disabled;

\t\t// Try to winnow out elements that can't be disabled before trusting the disabled property.
\t\t// Some victims get caught in our net (label, legend, menu, track), but it shouldn't
\t\t// even exist on them, let alone have a boolean value.
\t\t} else if ( \"label\" in elem ) {
\t\t\treturn elem.disabled === disabled;
\t\t}

\t\t// Remaining elements are neither :enabled nor :disabled
\t\treturn false;
\t};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
\treturn markFunction(function( argument ) {
\t\targument = +argument;
\t\treturn markFunction(function( seed, matches ) {
\t\t\tvar j,
\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\ti = matchIndexes.length;

\t\t\t// Match elements found at the specified indexes
\t\t\twhile ( i-- ) {
\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
\treturn context && typeof context.getElementsByTagName !== \"undefined\" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
\tvar namespace = elem.namespaceURI,
\t\tdocElem = (elem.ownerDocument || elem).documentElement;

\t// Support: IE <=8
\t// Assume HTML when documentElement doesn't yet exist, such as inside loading iframes
\t// https://bugs.jquery.com/ticket/4833
\treturn !rhtml.test( namespace || docElem && docElem.nodeName || \"HTML\" );
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
\tvar hasCompare, subWindow,
\t\tdoc = node ? node.ownerDocument || node : preferredDoc;

\t// Return early if doc is invalid or already selected
\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\treturn document;
\t}

\t// Update global variables
\tdocument = doc;
\tdocElem = document.documentElement;
\tdocumentIsHTML = !isXML( document );

\t// Support: IE 9-11, Edge
\t// Accessing iframe documents after unload throws \"permission denied\" errors (jQuery #13936)
\tif ( preferredDoc !== document &&
\t\t(subWindow = document.defaultView) && subWindow.top !== subWindow ) {

\t\t// Support: IE 11, Edge
\t\tif ( subWindow.addEventListener ) {
\t\t\tsubWindow.addEventListener( \"unload\", unloadHandler, false );

\t\t// Support: IE 9 - 10 only
\t\t} else if ( subWindow.attachEvent ) {
\t\t\tsubWindow.attachEvent( \"onunload\", unloadHandler );
\t\t}
\t}

\t/* Attributes
\t---------------------------------------------------------------------- */

\t// Support: IE<8
\t// Verify that getAttribute really returns attributes and not properties
\t// (excepting IE8 booleans)
\tsupport.attributes = assert(function( el ) {
\t\tel.className = \"i\";
\t\treturn !el.getAttribute(\"className\");
\t});

\t/* getElement(s)By*
\t---------------------------------------------------------------------- */

\t// Check if getElementsByTagName(\"*\") returns only elements
\tsupport.getElementsByTagName = assert(function( el ) {
\t\tel.appendChild( document.createComment(\"\") );
\t\treturn !el.getElementsByTagName(\"*\").length;
\t});

\t// Support: IE<9
\tsupport.getElementsByClassName = rnative.test( document.getElementsByClassName );

\t// Support: IE<10
\t// Check if getElementById returns elements by name
\t// The broken getElementById methods don't pick up programmatically-set names,
\t// so use a roundabout getElementsByName test
\tsupport.getById = assert(function( el ) {
\t\tdocElem.appendChild( el ).id = expando;
\t\treturn !document.getElementsByName || !document.getElementsByName( expando ).length;
\t});

\t// ID filter and find
\tif ( support.getById ) {
\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t};
\t\t};
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar elem = context.getElementById( id );
\t\t\t\treturn elem ? [ elem ] : [];
\t\t\t}
\t\t};
\t} else {
\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\tvar node = typeof elem.getAttributeNode !== \"undefined\" &&
\t\t\t\t\telem.getAttributeNode(\"id\");
\t\t\t\treturn node && node.value === attrId;
\t\t\t};
\t\t};

\t\t// Support: IE 6 - 7 only
\t\t// getElementById is not reliable as a find shortcut
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar node, i, elems,
\t\t\t\t\telem = context.getElementById( id );

\t\t\t\tif ( elem ) {

\t\t\t\t\t// Verify the id attribute
\t\t\t\t\tnode = elem.getAttributeNode(\"id\");
\t\t\t\t\tif ( node && node.value === id ) {
\t\t\t\t\t\treturn [ elem ];
\t\t\t\t\t}

\t\t\t\t\t// Fall back on getElementsByName
\t\t\t\t\telems = context.getElementsByName( id );
\t\t\t\t\ti = 0;
\t\t\t\t\twhile ( (elem = elems[i++]) ) {
\t\t\t\t\t\tnode = elem.getAttributeNode(\"id\");
\t\t\t\t\t\tif ( node && node.value === id ) {
\t\t\t\t\t\t\treturn [ elem ];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn [];
\t\t\t}
\t\t};
\t}

\t// Tag
\tExpr.find[\"TAG\"] = support.getElementsByTagName ?
\t\tfunction( tag, context ) {
\t\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\t\treturn context.getElementsByTagName( tag );

\t\t\t// DocumentFragment nodes don't have gEBTN
\t\t\t} else if ( support.qsa ) {
\t\t\t\treturn context.querySelectorAll( tag );
\t\t\t}
\t\t} :

\t\tfunction( tag, context ) {
\t\t\tvar elem,
\t\t\t\ttmp = [],
\t\t\t\ti = 0,
\t\t\t\t// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t// Filter out possible comments
\t\t\tif ( tag === \"*\" ) {
\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn tmp;
\t\t\t}
\t\t\treturn results;
\t\t};

\t// Class
\tExpr.find[\"CLASS\"] = support.getElementsByClassName && function( className, context ) {
\t\tif ( typeof context.getElementsByClassName !== \"undefined\" && documentIsHTML ) {
\t\t\treturn context.getElementsByClassName( className );
\t\t}
\t};

\t/* QSA/matchesSelector
\t---------------------------------------------------------------------- */

\t// QSA and matchesSelector support

\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\trbuggyMatches = [];

\t// qSa(:focus) reports false when true (Chrome 21)
\t// We allow this because of a bug in IE8/9 that throws an error
\t// whenever `document.activeElement` is accessed on an iframe
\t// So, we allow :focus to pass through QSA all the time to avoid the IE error
\t// See https://bugs.jquery.com/ticket/13378
\trbuggyQSA = [];

\tif ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
\t\t// Build QSA regex
\t\t// Regex strategy adopted from Diego Perini
\t\tassert(function( el ) {
\t\t\t// Select is set to empty string on purpose
\t\t\t// This is to test IE's treatment of not explicitly
\t\t\t// setting a boolean content attribute,
\t\t\t// since its presence should be enough
\t\t\t// https://bugs.jquery.com/ticket/12359
\t\t\tdocElem.appendChild( el ).innerHTML = \"<a id='\" + expando + \"'></a>\" +
\t\t\t\t\"<select id='\" + expando + \"-\\r\\\\' msallowcapture=''>\" +
\t\t\t\t\"<option selected=''></option></select>\";

\t\t\t// Support: IE8, Opera 11-12.16
\t\t\t// Nothing should be selected when empty strings follow ^= or \$= or *=
\t\t\t// The test attribute must be unknown in Opera but \"safe\" for WinRT
\t\t\t// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
\t\t\tif ( el.querySelectorAll(\"[msallowcapture^='']\").length ) {
\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:''|\\\"\\\")\" );
\t\t\t}

\t\t\t// Support: IE8
\t\t\t// Boolean attributes and \"value\" are not treated correctly
\t\t\tif ( !el.querySelectorAll(\"[selected]\").length ) {
\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:value|\" + booleans + \")\" );
\t\t\t}

\t\t\t// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
\t\t\tif ( !el.querySelectorAll( \"[id~=\" + expando + \"-]\" ).length ) {
\t\t\t\trbuggyQSA.push(\"~=\");
\t\t\t}

\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !el.querySelectorAll(\":checked\").length ) {
\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t}

\t\t\t// Support: Safari 8+, iOS 8+
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=136851
\t\t\t// In-page `selector#id sibling-combinator selector` fails
\t\t\tif ( !el.querySelectorAll( \"a#\" + expando + \"+*\" ).length ) {
\t\t\t\trbuggyQSA.push(\".#.+[+~]\");
\t\t\t}
\t\t});

\t\tassert(function( el ) {
\t\t\tel.innerHTML = \"<a href='' disabled='disabled'></a>\" +
\t\t\t\t\"<select disabled='disabled'><option/></select>\";

\t\t\t// Support: Windows 8 Native Apps
\t\t\t// The type and name attributes are restricted during .innerHTML assignment
\t\t\tvar input = document.createElement(\"input\");
\t\t\tinput.setAttribute( \"type\", \"hidden\" );
\t\t\tel.appendChild( input ).setAttribute( \"name\", \"D\" );

\t\t\t// Support: IE8
\t\t\t// Enforce case-sensitivity of name attribute
\t\t\tif ( el.querySelectorAll(\"[name=d]\").length ) {
\t\t\t\trbuggyQSA.push( \"name\" + whitespace + \"*[*^\$|!~]?=\" );
\t\t\t}

\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( el.querySelectorAll(\":enabled\").length !== 2 ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Support: IE9-11+
\t\t\t// IE's :disabled selector does not pick up the children of disabled fieldsets
\t\t\tdocElem.appendChild( el ).disabled = true;
\t\t\tif ( el.querySelectorAll(\":disabled\").length !== 2 ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\tel.querySelectorAll(\"*,:x\");
\t\t\trbuggyQSA.push(\",.*:\");
\t\t});
\t}

\tif ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector) )) ) {

\t\tassert(function( el ) {
\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t// on a disconnected node (IE 9)
\t\t\tsupport.disconnectedMatch = matches.call( el, \"*\" );

\t\t\t// This should fail with an exception
\t\t\t// Gecko does not error, returns false instead
\t\t\tmatches.call( el, \"[s!='']:x\" );
\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t});
\t}

\trbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join(\"|\") );
\trbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join(\"|\") );

\t/* Contains
\t---------------------------------------------------------------------- */
\thasCompare = rnative.test( docElem.compareDocumentPosition );

\t// Element contains another
\t// Purposefully self-exclusive
\t// As in, an element does not contain itself
\tcontains = hasCompare || rnative.test( docElem.contains ) ?
\t\tfunction( a, b ) {
\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\tbup = b && b.parentNode;
\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\tadown.contains ?
\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t));
\t\t} :
\t\tfunction( a, b ) {
\t\t\tif ( b ) {
\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};

\t/* Sorting
\t---------------------------------------------------------------------- */

\t// Document order sorting
\tsortOrder = hasCompare ?
\tfunction( a, b ) {

\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\t// Sort on method existence if only one input has compareDocumentPosition
\t\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\t\tif ( compare ) {
\t\t\treturn compare;
\t\t}

\t\t// Calculate position if both inputs belong to the same document
\t\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\t\ta.compareDocumentPosition( b ) :

\t\t\t// Otherwise we know they are disconnected
\t\t\t1;

\t\t// Disconnected nodes
\t\tif ( compare & 1 ||
\t\t\t(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

\t\t\t// Choose the first element that is related to our preferred document
\t\t\tif ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t\tif ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\t// Maintain original order
\t\t\treturn sortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;
\t\t}

\t\treturn compare & 4 ? -1 : 1;
\t} :
\tfunction( a, b ) {
\t\t// Exit early if the nodes are identical
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar cur,
\t\t\ti = 0,
\t\t\taup = a.parentNode,
\t\t\tbup = b.parentNode,
\t\t\tap = [ a ],
\t\t\tbp = [ b ];

\t\t// Parentless nodes are either documents or disconnected
\t\tif ( !aup || !bup ) {
\t\t\treturn a === document ? -1 :
\t\t\t\tb === document ? 1 :
\t\t\t\taup ? -1 :
\t\t\t\tbup ? 1 :
\t\t\t\tsortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;

\t\t// If the nodes are siblings, we can do a quick check
\t\t} else if ( aup === bup ) {
\t\t\treturn siblingCheck( a, b );
\t\t}

\t\t// Otherwise we need full lists of their ancestors for comparison
\t\tcur = a;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tap.unshift( cur );
\t\t}
\t\tcur = b;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tbp.unshift( cur );
\t\t}

\t\t// Walk down the tree looking for a discrepancy
\t\twhile ( ap[i] === bp[i] ) {
\t\t\ti++;
\t\t}

\t\treturn i ?
\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t// Otherwise nodes in our document sort first
\t\t\tap[i] === preferredDoc ? -1 :
\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t0;
\t};

\treturn document;
};

Sizzle.matches = function( expr, elements ) {
\treturn Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tif ( support.matchesSelector && documentIsHTML &&
\t\t!nonnativeSelectorCache[ expr + \" \" ] &&
\t\t( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
\t\t( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

\t\ttry {
\t\t\tvar ret = matches.call( elem, expr );

\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t// fragment in IE 9
\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\treturn ret;
\t\t\t}
\t\t} catch (e) {
\t\t\tnonnativeSelectorCache( expr, true );
\t\t}
\t}

\treturn Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
\t// Set document vars if needed
\tif ( ( context.ownerDocument || context ) !== document ) {
\t\tsetDocument( context );
\t}
\treturn contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tvar fn = Expr.attrHandle[ name.toLowerCase() ],
\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\tval = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
\t\t\tfn( elem, name, !documentIsHTML ) :
\t\t\tundefined;

\treturn val !== undefined ?
\t\tval :
\t\tsupport.attributes || !documentIsHTML ?
\t\t\telem.getAttribute( name ) :
\t\t\t(val = elem.getAttributeNode(name)) && val.specified ?
\t\t\t\tval.value :
\t\t\t\tnull;
};

Sizzle.escape = function( sel ) {
\treturn (sel + \"\").replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\t// Unless we *know* we can detect duplicates, assume their presence
\thasDuplicate = !support.detectDuplicates;
\tsortInput = !support.sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( (elem = results[i++]) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
\tvar node,
\t\tret = \"\",
\t\ti = 0,
\t\tnodeType = elem.nodeType;

\tif ( !nodeType ) {
\t\t// If no nodeType, this is expected to be an array
\t\twhile ( (node = elem[i++]) ) {
\t\t\t// Do not traverse comment nodes
\t\t\tret += getText( node );
\t\t}
\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t// Use textContent for elements
\t\t// innerText usage removed for consistency of new lines (jQuery #11153)
\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\treturn elem.textContent;
\t\t} else {
\t\t\t// Traverse its children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tret += getText( elem );
\t\t\t}
\t\t}
\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\treturn elem.nodeValue;
\t}
\t// Do not include comment or processing instruction nodes

\treturn ret;
};

Expr = Sizzle.selectors = {

\t// Can be adjusted by the user
\tcacheLength: 50,

\tcreatePseudo: markFunction,

\tmatch: matchExpr,

\tattrHandle: {},

\tfind: {},

\trelative: {
\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\" \": { dir: \"parentNode\" },
\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\"~\": { dir: \"previousSibling\" }
\t},

\tpreFilter: {
\t\t\"ATTR\": function( match ) {
\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\tmatch[3] = ( match[3] || match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t}

\t\t\treturn match.slice( 0, 4 );
\t\t},

\t\t\"CHILD\": function( match ) {
\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t// nth-* requires argument
\t\t\t\tif ( !match[3] ) {
\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t}

\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t// other types prohibit arguments
\t\t\t} else if ( match[3] ) {
\t\t\t\tSizzle.error( match[0] );
\t\t\t}

\t\t\treturn match;
\t\t},

\t\t\"PSEUDO\": function( match ) {
\t\t\tvar excess,
\t\t\t\tunquoted = !match[6] && match[2];

\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\t// Accept quoted arguments as-is
\t\t\tif ( match[3] ) {
\t\t\t\tmatch[2] = match[4] || match[5] || \"\";

\t\t\t// Strip excess characters from unquoted arguments
\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t// excess is a negative index
\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t}

\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\treturn match.slice( 0, 3 );
\t\t}
\t},

\tfilter: {

\t\t\"TAG\": function( nodeNameSelector ) {
\t\t\tvar nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
\t\t\treturn nodeNameSelector === \"*\" ?
\t\t\t\tfunction() { return true; } :
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t\t};
\t\t},

\t\t\"CLASS\": function( className ) {
\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\treturn pattern ||
\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\treturn pattern.test( typeof elem.className === \"string\" && elem.className || typeof elem.getAttribute !== \"undefined\" && elem.getAttribute(\"class\") || \"\" );
\t\t\t\t});
\t\t},

\t\t\"ATTR\": function( name, operator, check ) {
\t\t\treturn function( elem ) {
\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\tif ( result == null ) {
\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t}
\t\t\t\tif ( !operator ) {
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tresult += \"\";

\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\toperator === \"~=\" ? ( \" \" + result.replace( rwhitespace, \" \" ) + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\tfalse;
\t\t\t};
\t\t},

\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\tofType = what === \"of-type\";

\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t} :

\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tvar cache, uniqueCache, outerCache, node, nodeIndex, start,
\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\tuseCache = !xml && !ofType,
\t\t\t\t\t\tdiff = false;

\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\tif ( ofType ?
\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) {

\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\tif ( forward && useCache ) {

\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index

\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\tnode = parent;
\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\tdiff = nodeIndex && cache[ 2 ];
\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\t\tdiff = nodeIndex;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// xml :nth-child(...)
\t\t\t\t\t\t\t// or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t\tif ( diff === false ) {
\t\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t\tif ( ( ofType ?
\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) &&
\t\t\t\t\t\t\t\t\t\t++diff ) {

\t\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t}
\t\t\t\t};
\t\t},

\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t// pseudo-class names are case-insensitive
\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t// Remember that setFilters inherits from pseudos
\t\t\tvar args,
\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t// The user may use createPseudo to indicate that
\t\t\t// arguments are needed to create the filter function
\t\t\t// just as Sizzle does
\t\t\tif ( fn[ expando ] ) {
\t\t\t\treturn fn( argument );
\t\t\t}

\t\t\t// But maintain support for old signatures
\t\t\tif ( fn.length > 1 ) {
\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tidx = indexOf( seed, matched[i] );
\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t}
\t\t\t\t\t}) :
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t};
\t\t\t}

\t\t\treturn fn;
\t\t}
\t},

\tpseudos: {
\t\t// Potentially complex pseudos
\t\t\"not\": markFunction(function( selector ) {
\t\t\t// Trim the selector passed to compile
\t\t\t// to avoid treating leading and trailing
\t\t\t// spaces as combinators
\t\t\tvar input = [],
\t\t\t\tresults = [],
\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\treturn matcher[ expando ] ?
\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\tvar elem,
\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}) :
\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tinput[0] = elem;
\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\t// Don't keep the element (issue #299)
\t\t\t\t\tinput[0] = null;
\t\t\t\t\treturn !results.pop();
\t\t\t\t};
\t\t}),

\t\t\"has\": markFunction(function( selector ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t};
\t\t}),

\t\t\"contains\": markFunction(function( text ) {
\t\t\ttext = text.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn ( elem.textContent || getText( elem ) ).indexOf( text ) > -1;
\t\t\t};
\t\t}),

\t\t// \"Whether an element is represented by a :lang() selector
\t\t// is based solely on the element's language value
\t\t// being equal to the identifier C,
\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t// The identifier C does not have to be a valid language name.\"
\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\"lang\": markFunction( function( lang ) {
\t\t\t// lang value must be a valid identifier
\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t}
\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\tvar elemLang;
\t\t\t\tdo {
\t\t\t\t\tif ( (elemLang = documentIsHTML ?
\t\t\t\t\t\telem.lang :
\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\")) ) {

\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t}
\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\treturn false;
\t\t\t};
\t\t}),

\t\t// Miscellaneous
\t\t\"target\": function( elem ) {
\t\t\tvar hash = window.location && window.location.hash;
\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t},

\t\t\"root\": function( elem ) {
\t\t\treturn elem === docElem;
\t\t},

\t\t\"focus\": function( elem ) {
\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t},

\t\t// Boolean properties
\t\t\"enabled\": createDisabledPseudo( false ),
\t\t\"disabled\": createDisabledPseudo( true ),

\t\t\"checked\": function( elem ) {
\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t},

\t\t\"selected\": function( elem ) {
\t\t\t// Accessing this property makes selected-by-default
\t\t\t// options in Safari work properly
\t\t\tif ( elem.parentNode ) {
\t\t\t\telem.parentNode.selectedIndex;
\t\t\t}

\t\t\treturn elem.selected === true;
\t\t},

\t\t// Contents
\t\t\"empty\": function( elem ) {
\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
\t\t\t//   but not by others (comment: 8; processing instruction: 7; etc.)
\t\t\t// nodeType < 6 works because attributes (2) do not appear as children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tif ( elem.nodeType < 6 ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t\"parent\": function( elem ) {
\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t},

\t\t// Element/input types
\t\t\"header\": function( elem ) {
\t\t\treturn rheader.test( elem.nodeName );
\t\t},

\t\t\"input\": function( elem ) {
\t\t\treturn rinputs.test( elem.nodeName );
\t\t},

\t\t\"button\": function( elem ) {
\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t},

\t\t\"text\": function( elem ) {
\t\t\tvar attr;
\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\telem.type === \"text\" &&

\t\t\t\t// Support: IE<8
\t\t\t\t// New HTML5 attribute values (e.g., \"search\") appear with elem.type === \"text\"
\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === \"text\" );
\t\t},

\t\t// Position-in-collection
\t\t\"first\": createPositionalPseudo(function() {
\t\t\treturn [ 0 ];
\t\t}),

\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\treturn [ length - 1 ];
\t\t}),

\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t}),

\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 1;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ?
\t\t\t\targument + length :
\t\t\t\targument > length ?
\t\t\t\t\tlength :
\t\t\t\t\targument;
\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; ++i < length; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t})
\t}
};

Expr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\tExpr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
\tExpr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
\tvar matched, match, tokens, type,
\t\tsoFar, groups, preFilters,
\t\tcached = tokenCache[ selector + \" \" ];

\tif ( cached ) {
\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t}

\tsoFar = selector;
\tgroups = [];
\tpreFilters = Expr.preFilter;

\twhile ( soFar ) {

\t\t// Comma and first run
\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\tif ( match ) {
\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t}
\t\t\tgroups.push( (tokens = []) );
\t\t}

\t\tmatched = false;

\t\t// Combinators
\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\tmatched = match.shift();
\t\t\ttokens.push({
\t\t\t\tvalue: matched,
\t\t\t\t// Cast descendant combinators to space
\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t});
\t\t\tsoFar = soFar.slice( matched.length );
\t\t}

\t\t// Filters
\t\tfor ( type in Expr.filter ) {
\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\tmatched = match.shift();
\t\t\t\ttokens.push({
\t\t\t\t\tvalue: matched,
\t\t\t\t\ttype: type,
\t\t\t\t\tmatches: match
\t\t\t\t});
\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t}
\t\t}

\t\tif ( !matched ) {
\t\t\tbreak;
\t\t}
\t}

\t// Return the length of the invalid excess
\t// if we're just parsing
\t// Otherwise, throw an error or return tokens
\treturn parseOnly ?
\t\tsoFar.length :
\t\tsoFar ?
\t\t\tSizzle.error( selector ) :
\t\t\t// Cache the tokens
\t\t\ttokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
\tvar i = 0,
\t\tlen = tokens.length,
\t\tselector = \"\";
\tfor ( ; i < len; i++ ) {
\t\tselector += tokens[i].value;
\t}
\treturn selector;
}

function addCombinator( matcher, combinator, base ) {
\tvar dir = combinator.dir,
\t\tskip = combinator.next,
\t\tkey = skip || dir,
\t\tcheckNonElements = base && key === \"parentNode\",
\t\tdoneName = done++;

\treturn combinator.first ?
\t\t// Check against closest ancestor/preceding element
\t\tfunction( elem, context, xml ) {
\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t} :

\t\t// Check against all ancestor/preceding elements
\t\tfunction( elem, context, xml ) {
\t\t\tvar oldCache, uniqueCache, outerCache,
\t\t\t\tnewCache = [ dirruns, doneName ];

\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
\t\t\tif ( xml ) {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});

\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\tuniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

\t\t\t\t\t\tif ( skip && skip === elem.nodeName.toLowerCase() ) {
\t\t\t\t\t\t\telem = elem[ dir ] || elem;
\t\t\t\t\t\t} else if ( (oldCache = uniqueCache[ key ]) &&
\t\t\t\t\t\t\toldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

\t\t\t\t\t\t\t// Assign to newCache so results back-propagate to previous elements
\t\t\t\t\t\t\treturn (newCache[ 2 ] = oldCache[ 2 ]);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Reuse newcache so results back-propagate to previous elements
\t\t\t\t\t\t\tuniqueCache[ key ] = newCache;

\t\t\t\t\t\t\t// A match means we're done; a fail means we have to keep checking
\t\t\t\t\t\t\tif ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};
}

function elementMatcher( matchers ) {
\treturn matchers.length > 1 ?
\t\tfunction( elem, context, xml ) {
\t\t\tvar i = matchers.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} :
\t\tmatchers[0];
}

function multipleContexts( selector, contexts, results ) {
\tvar i = 0,
\t\tlen = contexts.length;
\tfor ( ; i < len; i++ ) {
\t\tSizzle( selector, contexts[i], results );
\t}
\treturn results;
}

function condense( unmatched, map, filter, context, xml ) {
\tvar elem,
\t\tnewUnmatched = [],
\t\ti = 0,
\t\tlen = unmatched.length,
\t\tmapped = map != null;

\tfor ( ; i < len; i++ ) {
\t\tif ( (elem = unmatched[i]) ) {
\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\tnewUnmatched.push( elem );
\t\t\t\tif ( mapped ) {
\t\t\t\t\tmap.push( i );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\tif ( postFilter && !postFilter[ expando ] ) {
\t\tpostFilter = setMatcher( postFilter );
\t}
\tif ( postFinder && !postFinder[ expando ] ) {
\t\tpostFinder = setMatcher( postFinder, postSelector );
\t}
\treturn markFunction(function( seed, results, context, xml ) {
\t\tvar temp, i, elem,
\t\t\tpreMap = [],
\t\t\tpostMap = [],
\t\t\tpreexisting = results.length,

\t\t\t// Get initial elements from seed or context
\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\telems,

\t\t\tmatcherOut = matcher ?
\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t[] :

\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\tresults :
\t\t\t\tmatcherIn;

\t\t// Find primary matches
\t\tif ( matcher ) {
\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t}

\t\t// Apply postFilter
\t\tif ( postFilter ) {
\t\t\ttemp = condense( matcherOut, postMap );
\t\t\tpostFilter( temp, [], context, xml );

\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\ti = temp.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( seed ) {
\t\t\tif ( postFinder || preFilter ) {
\t\t\t\tif ( postFinder ) {
\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\ttemp = [];
\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t}

\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\ti = matcherOut.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// Add elements to results, through postFinder if defined
\t\t} else {
\t\t\tmatcherOut = condense(
\t\t\t\tmatcherOut === results ?
\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\tmatcherOut
\t\t\t);
\t\t\tif ( postFinder ) {
\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t} else {
\t\t\t\tpush.apply( results, matcherOut );
\t\t\t}
\t\t}
\t});
}

function matcherFromTokens( tokens ) {
\tvar checkContext, matcher, j,
\t\tlen = tokens.length,
\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\ti = leadingRelative ? 1 : 0,

\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\tmatchContext = addCombinator( function( elem ) {
\t\t\treturn elem === checkContext;
\t\t}, implicitRelative, true ),
\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\treturn indexOf( checkContext, elem ) > -1;
\t\t}, implicitRelative, true ),
\t\tmatchers = [ function( elem, context, xml ) {
\t\t\tvar ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t\t// Avoid hanging onto element (issue #299)
\t\t\tcheckContext = null;
\t\t\treturn ret;
\t\t} ];

\tfor ( ; i < len; i++ ) {
\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t} else {
\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t// Return special upon seeing a positional matcher
\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\tj = ++i;
\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn setMatcher(
\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\ti > 1 && toSelector(
\t\t\t\t\t\t// If the preceding token was a descendant combinator, insert an implicit any-element `*`
\t\t\t\t\t\ttokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === \" \" ? \"*\" : \"\" })
\t\t\t\t\t).replace( rtrim, \"\$1\" ),
\t\t\t\t\tmatcher,
\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t);
\t\t\t}
\t\t\tmatchers.push( matcher );
\t\t}
\t}

\treturn elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\tvar bySet = setMatchers.length > 0,
\t\tbyElement = elementMatchers.length > 0,
\t\tsuperMatcher = function( seed, context, xml, results, outermost ) {
\t\t\tvar elem, j, matcher,
\t\t\t\tmatchedCount = 0,
\t\t\t\ti = \"0\",
\t\t\t\tunmatched = seed && [],
\t\t\t\tsetMatched = [],
\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t// We must always have either seed elements or outermost context
\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", outermost ),
\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
\t\t\t\tlen = elems.length;

\t\t\tif ( outermost ) {
\t\t\t\toutermostContext = context === document || context || outermost;
\t\t\t}

\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t// Support: IE<9, Safari
\t\t\t// Tolerate NodeList properties (IE: \"length\"; Safari: <number>) matching elements by id
\t\t\tfor ( ; i !== len && (elem = elems[i]) != null; i++ ) {
\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\tj = 0;
\t\t\t\t\tif ( !context && elem.ownerDocument !== document ) {
\t\t\t\t\t\tsetDocument( elem );
\t\t\t\t\t\txml = !documentIsHTML;
\t\t\t\t\t}
\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\tif ( matcher( elem, context || document, xml) ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Track unmatched elements for set filters
\t\t\t\tif ( bySet ) {
\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t}

\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// `i` is now the count of elements visited above, and adding it to `matchedCount`
\t\t\t// makes the latter nonnegative.
\t\t\tmatchedCount += i;

\t\t\t// Apply set filters to unmatched elements
\t\t\t// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
\t\t\t// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
\t\t\t// no element matchers and no seed.
\t\t\t// Incrementing an initially-string \"0\" `i` allows `i` to remain a string only in that
\t\t\t// case, which will result in a \"00\" `matchedCount` that differs from `i` but is also
\t\t\t// numerically zero.
\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t}

\t\t\t\tif ( seed ) {
\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t}

\t\t\t\t// Add matches to results
\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t}
\t\t\t}

\t\t\t// Override manipulation of globals by nested matchers
\t\t\tif ( outermost ) {
\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\toutermostContext = contextBackup;
\t\t\t}

\t\t\treturn unmatched;
\t\t};

\treturn bySet ?
\t\tmarkFunction( superMatcher ) :
\t\tsuperMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
\tvar i,
\t\tsetMatchers = [],
\t\telementMatchers = [],
\t\tcached = compilerCache[ selector + \" \" ];

\tif ( !cached ) {
\t\t// Generate a function of recursive functions that can be used to check each element
\t\tif ( !match ) {
\t\t\tmatch = tokenize( selector );
\t\t}
\t\ti = match.length;
\t\twhile ( i-- ) {
\t\t\tcached = matcherFromTokens( match[i] );
\t\t\tif ( cached[ expando ] ) {
\t\t\t\tsetMatchers.push( cached );
\t\t\t} else {
\t\t\t\telementMatchers.push( cached );
\t\t\t}
\t\t}

\t\t// Cache the compiled function
\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

\t\t// Save selector and tokenization
\t\tcached.selector = selector;
\t}
\treturn cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
\tvar i, tokens, token, type, find,
\t\tcompiled = typeof selector === \"function\" && selector,
\t\tmatch = !seed && tokenize( (selector = compiled.selector || selector) );

\tresults = results || [];

\t// Try to minimize operations if there is only one selector in the list and no seed
\t// (the latter of which guarantees us context)
\tif ( match.length === 1 ) {

\t\t// Reduce context if the leading compound selector is an ID
\t\ttokens = match[0] = match[0].slice( 0 );
\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\tcontext.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[1].type ] ) {

\t\t\tcontext = ( Expr.find[\"ID\"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
\t\t\tif ( !context ) {
\t\t\t\treturn results;

\t\t\t// Precompiled matchers will still verify ancestry, so step up a level
\t\t\t} else if ( compiled ) {
\t\t\t\tcontext = context.parentNode;
\t\t\t}

\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t}

\t\t// Fetch a seed set for right-to-left matching
\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\twhile ( i-- ) {
\t\t\ttoken = tokens[i];

\t\t\t// Abort if we hit a combinator
\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\tif ( (seed = find(
\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\trsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
\t\t\t\t)) ) {

\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\tpush.apply( results, seed );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Compile and execute a filtering function if one is not provided
\t// Provide `match` to avoid retokenization if we modified the selector above
\t( compiled || compile( selector, match ) )(
\t\tseed,
\t\tcontext,
\t\t!documentIsHTML,
\t\tresults,
\t\t!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
\t);
\treturn results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split(\"\").sort( sortOrder ).join(\"\") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( el ) {
\t// Should return 1, but returns 4 (following)
\treturn el.compareDocumentPosition( document.createElement(\"fieldset\") ) & 1;
});

// Support: IE<8
// Prevent attribute/property \"interpolation\"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( el ) {
\tel.innerHTML = \"<a href='#'></a>\";
\treturn el.firstChild.getAttribute(\"href\") === \"#\" ;
}) ) {
\taddHandle( \"type|href|height|width\", function( elem, name, isXML ) {
\t\tif ( !isXML ) {
\t\t\treturn elem.getAttribute( name, name.toLowerCase() === \"type\" ? 1 : 2 );
\t\t}
\t});
}

// Support: IE<9
// Use defaultValue in place of getAttribute(\"value\")
if ( !support.attributes || !assert(function( el ) {
\tel.innerHTML = \"<input/>\";
\tel.firstChild.setAttribute( \"value\", \"\" );
\treturn el.firstChild.getAttribute( \"value\" ) === \"\";
}) ) {
\taddHandle( \"value\", function( elem, name, isXML ) {
\t\tif ( !isXML && elem.nodeName.toLowerCase() === \"input\" ) {
\t\t\treturn elem.defaultValue;
\t\t}
\t});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( el ) {
\treturn el.getAttribute(\"disabled\") == null;
}) ) {
\taddHandle( booleans, function( elem, name, isXML ) {
\t\tvar val;
\t\tif ( !isXML ) {
\t\t\treturn elem[ name ] === true ? name.toLowerCase() :
\t\t\t\t\t(val = elem.getAttributeNode( name )) && val.specified ?
\t\t\t\t\tval.value :
\t\t\t\tnull;
\t\t}
\t});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ \":\" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
\tvar matched = [],
\t\ttruncate = until !== undefined;

\twhile ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
\t\tif ( elem.nodeType === 1 ) {
\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tmatched.push( elem );
\t\t}
\t}
\treturn matched;
};


var siblings = function( n, elem ) {
\tvar matched = [];

\tfor ( ; n; n = n.nextSibling ) {
\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\tmatched.push( n );
\t\t}
\t}

\treturn matched;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName( elem, name ) {

  return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};
var rsingleTag = ( /^<([a-z][^\\/\\0>:\\x20\\t\\r\\n\\f]*)[\\x20\\t\\r\\n\\f]*\\/?>(?:<\\/\\1>|)\$/i );



// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t} );
\t}

\t// Single element
\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t} );
\t}

\t// Arraylike of elements (jQuery, arguments, Array)
\tif ( typeof qualifier !== \"string\" ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not;
\t\t} );
\t}

\t// Filtered directly for both simple and complex selectors
\treturn jQuery.filter( qualifier, elements, not );
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\tif ( elems.length === 1 && elem.nodeType === 1 ) {
\t\treturn jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
\t}

\treturn jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\treturn elem.nodeType === 1;
\t} ) );
};

jQuery.fn.extend( {
\tfind: function( selector ) {
\t\tvar i, ret,
\t\t\tlen = this.length,
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter( function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} ) );
\t\t}

\t\tret = this.pushStack( [] );

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\treturn len > 1 ? jQuery.uniqueSort( ret ) : ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], false ) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], true ) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\t// Shortcut simple #id case for speed
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]+))\$/,

\tinit = jQuery.fn.init = function( selector, context, root ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Method init() accepts an alternate rootjQuery
\t\t// so migrate can support jQuery.sub (gh-2101)
\t\troot = root || rootjQuery;

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[ 0 ] === \"<\" &&
\t\t\t\tselector[ selector.length - 1 ] === \">\" &&
\t\t\t\tselector.length >= 3 ) {

\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && ( match[ 1 ] || !context ) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[ 1 ] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[ 0 ] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[ 1 ],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {

\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[ 2 ] );

\t\t\t\t\tif ( elem ) {

\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis[ 0 ] = elem;
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || root ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis[ 0 ] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( isFunction( selector ) ) {
\t\t\treturn root.ready !== undefined ?
\t\t\t\troot.ready( selector ) :

\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.fn.extend( {
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter( function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[ i ] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\ttargets = typeof selectors !== \"string\" && jQuery( selectors );

\t\t// Positional selectors never match, since there's no _selection_ context
\t\tif ( !rneedsContext.test( selectors ) ) {
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tfor ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

\t\t\t\t\t// Always skip document fragments
\t\t\t\t\tif ( cur.nodeType < 11 && ( targets ?
\t\t\t\t\t\ttargets.index( cur ) > -1 :

\t\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\t\tjQuery.find.matchesSelector( cur, selectors ) ) ) {

\t\t\t\t\t\tmatched.push( cur );
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
\t},

\t// Determine the position of an element within the set
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// Index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn indexOf.call( this,

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t);
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.uniqueSort(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t}
} );

function sibling( cur, dir ) {
\twhile ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each( {
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn siblings( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn siblings( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\tif ( typeof elem.contentDocument !== \"undefined\" ) {
\t\t\treturn elem.contentDocument;
\t\t}

\t\t// Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
\t\t// Treat the template element as a regular one in browsers that
\t\t// don't support it.
\t\tif ( nodeName( elem, \"template\" ) ) {
\t\t\telem = elem.content || elem;
\t\t}

\t\treturn jQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar matched = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tmatched = jQuery.filter( selector, matched );
\t\t}

\t\tif ( this.length > 1 ) {

\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tjQuery.uniqueSort( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
} );
var rnothtmlwhite = ( /[^\\x20\\t\\r\\n\\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
\tvar object = {};
\tjQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t} );
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\tcreateOptions( options ) :
\t\tjQuery.extend( {}, options );

\tvar // Flag to know if list is currently firing
\t\tfiring,

\t\t// Last fire value for non-forgettable lists
\t\tmemory,

\t\t// Flag to know if list was already fired
\t\tfired,

\t\t// Flag to prevent firing
\t\tlocked,

\t\t// Actual callback list
\t\tlist = [],

\t\t// Queue of execution data for repeatable lists
\t\tqueue = [],

\t\t// Index of currently firing callback (modified by add/remove as needed)
\t\tfiringIndex = -1,

\t\t// Fire callbacks
\t\tfire = function() {

\t\t\t// Enforce single-firing
\t\t\tlocked = locked || options.once;

\t\t\t// Execute callbacks for all pending executions,
\t\t\t// respecting firingIndex overrides and runtime changes
\t\t\tfired = firing = true;
\t\t\tfor ( ; queue.length; firingIndex = -1 ) {
\t\t\t\tmemory = queue.shift();
\t\t\t\twhile ( ++firingIndex < list.length ) {

\t\t\t\t\t// Run callback and check for early termination
\t\t\t\t\tif ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
\t\t\t\t\t\toptions.stopOnFalse ) {

\t\t\t\t\t\t// Jump to end and forget the data so .add doesn't re-fire
\t\t\t\t\t\tfiringIndex = list.length;
\t\t\t\t\t\tmemory = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Forget the data if we're done with it
\t\t\tif ( !options.memory ) {
\t\t\t\tmemory = false;
\t\t\t}

\t\t\tfiring = false;

\t\t\t// Clean up if we're done firing for good
\t\t\tif ( locked ) {

\t\t\t\t// Keep an empty list if we have data for future add calls
\t\t\t\tif ( memory ) {
\t\t\t\t\tlist = [];

\t\t\t\t// Otherwise, this object is spent
\t\t\t\t} else {
\t\t\t\t\tlist = \"\";
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Actual Callbacks object
\t\tself = {

\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {

\t\t\t\t\t// If we have memory from a past run, we should fire after adding
\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfiringIndex = list.length - 1;
\t\t\t\t\t\tqueue.push( memory );
\t\t\t\t\t}

\t\t\t\t\t( function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tif ( isFunction( arg ) ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && toType( arg ) !== \"string\" ) {

\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} );
\t\t\t\t\t} )( arguments );

\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\tvar index;
\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\tlist.splice( index, 1 );

\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ?
\t\t\t\t\tjQuery.inArray( fn, list ) > -1 :
\t\t\t\t\tlist.length > 0;
\t\t\t},

\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tlist = [];
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Disable .fire and .add
\t\t\t// Abort any current/pending executions
\t\t\t// Clear all callbacks and values
\t\t\tdisable: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tlist = memory = \"\";
\t\t\t\treturn this;
\t\t\t},
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},

\t\t\t// Disable .fire
\t\t\t// Also disable .add unless we have memory (since it would have no effect)
\t\t\t// Abort any pending executions
\t\t\tlock: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tif ( !memory && !firing ) {
\t\t\t\t\tlist = memory = \"\";
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\tlocked: function() {
\t\t\t\treturn !!locked;
\t\t\t},

\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( !locked ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tqueue.push( args );
\t\t\t\t\tif ( !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};


function Identity( v ) {
\treturn v;
}
function Thrower( ex ) {
\tthrow ex;
}

function adoptValue( value, resolve, reject, noValue ) {
\tvar method;

\ttry {

\t\t// Check for promise aspect first to privilege synchronous behavior
\t\tif ( value && isFunction( ( method = value.promise ) ) ) {
\t\t\tmethod.call( value ).done( resolve ).fail( reject );

\t\t// Other thenables
\t\t} else if ( value && isFunction( ( method = value.then ) ) ) {
\t\t\tmethod.call( value, resolve, reject );

\t\t// Other non-thenables
\t\t} else {

\t\t\t// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
\t\t\t// * false: [ value ].slice( 0 ) => resolve( value )
\t\t\t// * true: [ value ].slice( 1 ) => resolve()
\t\t\tresolve.apply( undefined, [ value ].slice( noValue ) );
\t\t}

\t// For Promises/A+, convert exceptions into rejections
\t// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
\t// Deferred#then to conditionally suppress rejection.
\t} catch ( value ) {

\t\t// Support: Android 4.0 only
\t\t// Strict mode functions invoked without .call/.apply get global-object context
\t\treject.apply( undefined, [ value ] );
\t}
}

jQuery.extend( {

\tDeferred: function( func ) {
\t\tvar tuples = [

\t\t\t\t// action, add listener, callbacks,
\t\t\t\t// ... .then handlers, argument index, [final state]
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks( \"memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"memory\" ), 2 ],
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 0, \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 1, \"rejected\" ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\t\"catch\": function( fn ) {
\t\t\t\t\treturn promise.then( null, fn );
\t\t\t\t},

\t\t\t\t// Keep pipe for back-compat
\t\t\t\tpipe: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {

\t\t\t\t\t\t\t// Map tuples (progress, done, fail) to arguments (done, fail, progress)
\t\t\t\t\t\t\tvar fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

\t\t\t\t\t\t\t// deferred.progress(function() { bind to newDefer or newDefer.notify })
\t\t\t\t\t\t\t// deferred.done(function() { bind to newDefer or newDefer.resolve })
\t\t\t\t\t\t\t// deferred.fail(function() { bind to newDefer or newDefer.reject })
\t\t\t\t\t\t\tdeferred[ tuple[ 1 ] ]( function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify )
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ](
\t\t\t\t\t\t\t\t\t\tthis,
\t\t\t\t\t\t\t\t\t\tfn ? [ returned ] : arguments
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} );
\t\t\t\t\t\tfns = null;
\t\t\t\t\t} ).promise();
\t\t\t\t},
\t\t\t\tthen: function( onFulfilled, onRejected, onProgress ) {
\t\t\t\t\tvar maxDepth = 0;
\t\t\t\t\tfunction resolve( depth, deferred, handler, special ) {
\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\tvar that = this,
\t\t\t\t\t\t\t\targs = arguments,
\t\t\t\t\t\t\t\tmightThrow = function() {
\t\t\t\t\t\t\t\t\tvar returned, then;

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.3
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-59
\t\t\t\t\t\t\t\t\t// Ignore double-resolution attempts
\t\t\t\t\t\t\t\t\tif ( depth < maxDepth ) {
\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\treturned = handler.apply( that, args );

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.1
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-48
\t\t\t\t\t\t\t\t\tif ( returned === deferred.promise() ) {
\t\t\t\t\t\t\t\t\t\tthrow new TypeError( \"Thenable self-resolution\" );
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ sections 2.3.3.1, 3.5
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-54
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-75
\t\t\t\t\t\t\t\t\t// Retrieve `then` only once
\t\t\t\t\t\t\t\t\tthen = returned &&

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.4
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-64
\t\t\t\t\t\t\t\t\t\t// Only check objects and functions for thenability
\t\t\t\t\t\t\t\t\t\t( typeof returned === \"object\" ||
\t\t\t\t\t\t\t\t\t\t\ttypeof returned === \"function\" ) &&
\t\t\t\t\t\t\t\t\t\treturned.then;

\t\t\t\t\t\t\t\t\t// Handle a returned thenable
\t\t\t\t\t\t\t\t\tif ( isFunction( then ) ) {

\t\t\t\t\t\t\t\t\t\t// Special processors (notify) just wait for resolution
\t\t\t\t\t\t\t\t\t\tif ( special ) {
\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special )
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t// Normal processors (resolve) also hook into progress
\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t// ...and disregard older resolution values
\t\t\t\t\t\t\t\t\t\t\tmaxDepth++;

\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity,
\t\t\t\t\t\t\t\t\t\t\t\t\tdeferred.notifyWith )
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Handle all other returned values
\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\tif ( handler !== Identity ) {
\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\targs = [ returned ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Process the value(s)
\t\t\t\t\t\t\t\t\t\t// Default process is resolve
\t\t\t\t\t\t\t\t\t\t( special || deferred.resolveWith )( that, args );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},

\t\t\t\t\t\t\t\t// Only normal processors (resolve) catch and reject exceptions
\t\t\t\t\t\t\t\tprocess = special ?
\t\t\t\t\t\t\t\t\tmightThrow :
\t\t\t\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\tmightThrow();
\t\t\t\t\t\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t\t\t\t\t\tif ( jQuery.Deferred.exceptionHook ) {
\t\t\t\t\t\t\t\t\t\t\t\tjQuery.Deferred.exceptionHook( e,
\t\t\t\t\t\t\t\t\t\t\t\t\tprocess.stackTrace );
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.4.1
\t\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-61
\t\t\t\t\t\t\t\t\t\t\t// Ignore post-resolution exceptions
\t\t\t\t\t\t\t\t\t\t\tif ( depth + 1 >= maxDepth ) {

\t\t\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\t\t\tif ( handler !== Thrower ) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\t\t\targs = [ e ];
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tdeferred.rejectWith( that, args );
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.1
\t\t\t\t\t\t\t// https://promisesaplus.com/#point-57
\t\t\t\t\t\t\t// Re-resolve promises immediately to dodge false rejection from
\t\t\t\t\t\t\t// subsequent errors
\t\t\t\t\t\t\tif ( depth ) {
\t\t\t\t\t\t\t\tprocess();
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t// Call an optional hook to record the stack, in case of exception
\t\t\t\t\t\t\t\t// since it's otherwise lost when execution goes async
\t\t\t\t\t\t\t\tif ( jQuery.Deferred.getStackHook ) {
\t\t\t\t\t\t\t\t\tprocess.stackTrace = jQuery.Deferred.getStackHook();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\twindow.setTimeout( process );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t}

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {

\t\t\t\t\t\t// progress_handlers.add( ... )
\t\t\t\t\t\ttuples[ 0 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tisFunction( onProgress ) ?
\t\t\t\t\t\t\t\t\tonProgress :
\t\t\t\t\t\t\t\t\tIdentity,
\t\t\t\t\t\t\t\tnewDefer.notifyWith
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// fulfilled_handlers.add( ... )
\t\t\t\t\t\ttuples[ 1 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tisFunction( onFulfilled ) ?
\t\t\t\t\t\t\t\t\tonFulfilled :
\t\t\t\t\t\t\t\t\tIdentity
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// rejected_handlers.add( ... )
\t\t\t\t\t\ttuples[ 2 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tisFunction( onRejected ) ?
\t\t\t\t\t\t\t\t\tonRejected :
\t\t\t\t\t\t\t\t\tThrower
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);
\t\t\t\t\t} ).promise();
\t\t\t\t},

\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 5 ];

\t\t\t// promise.progress = list.add
\t\t\t// promise.done = list.add
\t\t\t// promise.fail = list.add
\t\t\tpromise[ tuple[ 1 ] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(
\t\t\t\t\tfunction() {

\t\t\t\t\t\t// state = \"resolved\" (i.e., fulfilled)
\t\t\t\t\t\t// state = \"rejected\"
\t\t\t\t\t\tstate = stateString;
\t\t\t\t\t},

\t\t\t\t\t// rejected_callbacks.disable
\t\t\t\t\t// fulfilled_callbacks.disable
\t\t\t\t\ttuples[ 3 - i ][ 2 ].disable,

\t\t\t\t\t// rejected_handlers.disable
\t\t\t\t\t// fulfilled_handlers.disable
\t\t\t\t\ttuples[ 3 - i ][ 3 ].disable,

\t\t\t\t\t// progress_callbacks.lock
\t\t\t\t\ttuples[ 0 ][ 2 ].lock,

\t\t\t\t\t// progress_handlers.lock
\t\t\t\t\ttuples[ 0 ][ 3 ].lock
\t\t\t\t);
\t\t\t}

\t\t\t// progress_handlers.fire
\t\t\t// fulfilled_handlers.fire
\t\t\t// rejected_handlers.fire
\t\t\tlist.add( tuple[ 3 ].fire );

\t\t\t// deferred.notify = function() { deferred.notifyWith(...) }
\t\t\t// deferred.resolve = function() { deferred.resolveWith(...) }
\t\t\t// deferred.reject = function() { deferred.rejectWith(...) }
\t\t\tdeferred[ tuple[ 0 ] ] = function() {
\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ]( this === deferred ? undefined : this, arguments );
\t\t\t\treturn this;
\t\t\t};

\t\t\t// deferred.notifyWith = list.fireWith
\t\t\t// deferred.resolveWith = list.fireWith
\t\t\t// deferred.rejectWith = list.fireWith
\t\t\tdeferred[ tuple[ 0 ] + \"With\" ] = list.fireWith;
\t\t} );

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( singleValue ) {
\t\tvar

\t\t\t// count of uncompleted subordinates
\t\t\tremaining = arguments.length,

\t\t\t// count of unprocessed arguments
\t\t\ti = remaining,

\t\t\t// subordinate fulfillment data
\t\t\tresolveContexts = Array( i ),
\t\t\tresolveValues = slice.call( arguments ),

\t\t\t// the master Deferred
\t\t\tmaster = jQuery.Deferred(),

\t\t\t// subordinate callback factory
\t\t\tupdateFunc = function( i ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tresolveContexts[ i ] = this;
\t\t\t\t\tresolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( !( --remaining ) ) {
\t\t\t\t\t\tmaster.resolveWith( resolveContexts, resolveValues );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t};

\t\t// Single- and empty arguments are adopted like Promise.resolve
\t\tif ( remaining <= 1 ) {
\t\t\tadoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
\t\t\t\t!remaining );

\t\t\t// Use .then() to unwrap secondary thenables (cf. gh-3000)
\t\t\tif ( master.state() === \"pending\" ||
\t\t\t\tisFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

\t\t\t\treturn master.then();
\t\t\t}
\t\t}

\t\t// Multiple arguments are aggregated like Promise.all array elements
\t\twhile ( i-- ) {
\t\t\tadoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
\t\t}

\t\treturn master.promise();
\t}
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error\$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

\t// Support: IE 8 - 9 only
\t// Console exists when dev tools are open, which can happen at any time
\tif ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
\t\twindow.console.warn( \"jQuery.Deferred exception: \" + error.message, error.stack, stack );
\t}
};




jQuery.readyException = function( error ) {
\twindow.setTimeout( function() {
\t\tthrow error;
\t} );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

\treadyList
\t\t.then( fn )

\t\t// Wrap jQuery.readyException in a function so that the lookup
\t\t// happens at the time of error handling instead of callback
\t\t// registration.
\t\t.catch( function( error ) {
\t\t\tjQuery.readyException( error );
\t\t} );

\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Handle when the DOM is ready
\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );
\t}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\twindow.removeEventListener( \"load\", completed );
\tjQuery.ready();
}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals \"interactive\" too soon
if ( document.readyState === \"complete\" ||
\t( document.readyState !== \"loading\" && !document.documentElement.doScroll ) ) {

\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\twindow.setTimeout( jQuery.ready );

} else {

\t// Use the handy event callback
\tdocument.addEventListener( \"DOMContentLoaded\", completed );

\t// A fallback to window.onload, that will always work
\twindow.addEventListener( \"load\", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( toType( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\taccess( elems, fn, i, key[ i ], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {

\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\tfn(
\t\t\t\t\telems[ i ], key, raw ?
\t\t\t\t\tvalue :
\t\t\t\t\tvalue.call( elems[ i ], i, fn( elems[ i ], key ) )
\t\t\t\t);
\t\t\t}
\t\t}
\t}

\tif ( chainable ) {
\t\treturn elems;
\t}

\t// Gets
\tif ( bulk ) {
\t\treturn fn.call( elems );
\t}

\treturn len ? fn( elems[ 0 ], key ) : emptyGet;
};


// Matches dashed string for camelizing
var rmsPrefix = /^-ms-/,
\trdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
function fcamelCase( all, letter ) {
\treturn letter.toUpperCase();
}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
function camelCase( string ) {
\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
}
var acceptData = function( owner ) {

\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

\tcache: function( owner ) {

\t\t// Check if the owner object already has a cache
\t\tvar value = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !value ) {
\t\t\tvalue = {};

\t\t\t// We can accept data for non-element nodes in modern browsers,
\t\t\t// but we should not, see #8335.
\t\t\t// Always return an empty object.
\t\t\tif ( acceptData( owner ) ) {

\t\t\t\t// If it is a node unlikely to be stringify-ed or looped over
\t\t\t\t// use plain assignment
\t\t\t\tif ( owner.nodeType ) {
\t\t\t\t\towner[ this.expando ] = value;

\t\t\t\t// Otherwise secure it in a non-enumerable property
\t\t\t\t// configurable must be true to allow the property to be
\t\t\t\t// deleted when data is removed
\t\t\t\t} else {
\t\t\t\t\tObject.defineProperty( owner, this.expando, {
\t\t\t\t\t\tvalue: value,
\t\t\t\t\t\tconfigurable: true
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn value;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\tcache = this.cache( owner );

\t\t// Handle: [ owner, key, value ] args
\t\t// Always use camelCase key (gh-2257)
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ camelCase( data ) ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {

\t\t\t// Copy the properties one-by-one to the cache object
\t\t\tfor ( prop in data ) {
\t\t\t\tcache[ camelCase( prop ) ] = data[ prop ];
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\treturn key === undefined ?
\t\t\tthis.cache( owner ) :

\t\t\t// Always use camelCase key (gh-2257)
\t\t\towner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
\t},
\taccess: function( owner, key, value ) {

\t\t// In cases where either:
\t\t//
\t\t//   1. No key was specified
\t\t//   2. A string key was specified, but no value provided
\t\t//
\t\t// Take the \"read\" path and allow the get method to determine
\t\t// which value to return, respectively either:
\t\t//
\t\t//   1. The entire cache object
\t\t//   2. The data stored at the key
\t\t//
\t\tif ( key === undefined ||
\t\t\t\t( ( key && typeof key === \"string\" ) && value === undefined ) ) {

\t\t\treturn this.get( owner, key );
\t\t}

\t\t// When the key is not a string, or both a key and value
\t\t// are specified, set or extend (existing objects) with either:
\t\t//
\t\t//   1. An object of properties
\t\t//   2. A key and value
\t\t//
\t\tthis.set( owner, key, value );

\t\t// Since the \"set\" path can have two possible entry points
\t\t// return the expected data based on which path was taken[*]
\t\treturn value !== undefined ? value : key;
\t},
\tremove: function( owner, key ) {
\t\tvar i,
\t\t\tcache = owner[ this.expando ];

\t\tif ( cache === undefined ) {
\t\t\treturn;
\t\t}

\t\tif ( key !== undefined ) {

\t\t\t// Support array or space separated string of keys
\t\t\tif ( Array.isArray( key ) ) {

\t\t\t\t// If key is an array of keys...
\t\t\t\t// We always set camelCase keys, so remove that.
\t\t\t\tkey = key.map( camelCase );
\t\t\t} else {
\t\t\t\tkey = camelCase( key );

\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\tkey = key in cache ?
\t\t\t\t\t[ key ] :
\t\t\t\t\t( key.match( rnothtmlwhite ) || [] );
\t\t\t}

\t\t\ti = key.length;

\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ key[ i ] ];
\t\t\t}
\t\t}

\t\t// Remove the expando if there's no more data
\t\tif ( key === undefined || jQuery.isEmptyObject( cache ) ) {

\t\t\t// Support: Chrome <=35 - 45
\t\t\t// Webkit & Blink performance suffers when deleting properties
\t\t\t// from DOM nodes, so set to undefined instead
\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
\t\t\tif ( owner.nodeType ) {
\t\t\t\towner[ this.expando ] = undefined;
\t\t\t} else {
\t\t\t\tdelete owner[ this.expando ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\tvar cache = owner[ this.expando ];
\t\treturn cache !== undefined && !jQuery.isEmptyObject( cache );
\t}
};
var dataPriv = new Data();

var dataUser = new Data();



//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /[A-Z]/g;

function getData( data ) {
\tif ( data === \"true\" ) {
\t\treturn true;
\t}

\tif ( data === \"false\" ) {
\t\treturn false;
\t}

\tif ( data === \"null\" ) {
\t\treturn null;
\t}

\t// Only convert to a number if it doesn't change the string
\tif ( data === +data + \"\" ) {
\t\treturn +data;
\t}

\tif ( rbrace.test( data ) ) {
\t\treturn JSON.parse( data );
\t}

\treturn data;
}

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$&\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = getData( data );
\t\t\t} catch ( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdataUser.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend( {
\thasData: function( elem ) {
\t\treturn dataUser.hasData( elem ) || dataPriv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn dataUser.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdataUser.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to dataPriv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn dataPriv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdataPriv.remove( elem, name );
\t}
} );

jQuery.fn.extend( {
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = dataUser.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !dataPriv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE 11 only
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = camelCase( name.slice( 5 ) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdataPriv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each( function() {
\t\t\t\tdataUser.set( this, key );
\t\t\t} );
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data;

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// The key will always be camelCased in Data
\t\t\t\tdata = dataUser.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each( function() {

\t\t\t\t// We always store the camelCased key
\t\t\t\tdataUser.set( this, key, value );
\t\t\t} );
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each( function() {
\t\t\tdataUser.remove( this, key );
\t\t} );
\t}
} );


jQuery.extend( {
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = dataPriv.get( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || Array.isArray( data ) ) {
\t\t\t\t\tqueue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// Clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// Not public - generate a queueHooks object, or return the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
\t\t\tempty: jQuery.Callbacks( \"once memory\" ).add( function() {
\t\t\t\tdataPriv.remove( elem, [ type + \"queue\", key ] );
\t\t\t} )
\t\t} );
\t}
} );

jQuery.fn.extend( {
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[ 0 ], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each( function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// Ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[ 0 ] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t} );
\t},
\tdequeue: function( type ) {
\t\treturn this.each( function() {
\t\t\tjQuery.dequeue( this, type );
\t\t} );
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},

\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = dataPriv.get( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
} );
var pnum = ( /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/ ).source;

var rcssNum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" );


var cssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ];

var documentElement = document.documentElement;



\tvar isAttached = function( elem ) {
\t\t\treturn jQuery.contains( elem.ownerDocument, elem );
\t\t},
\t\tcomposed = { composed: true };

\t// Support: IE 9 - 11+, Edge 12 - 18+, iOS 10.0 - 10.2 only
\t// Check attachment across shadow DOM boundaries when possible (gh-3504)
\t// Support: iOS 10.0-10.2 only
\t// Early iOS 10 versions support `attachShadow` but not `getRootNode`,
\t// leading to errors. We need to check for `getRootNode`.
\tif ( documentElement.getRootNode ) {
\t\tisAttached = function( elem ) {
\t\t\treturn jQuery.contains( elem.ownerDocument, elem ) ||
\t\t\t\telem.getRootNode( composed ) === elem.ownerDocument;
\t\t};
\t}
var isHiddenWithinTree = function( elem, el ) {

\t\t// isHiddenWithinTree might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;

\t\t// Inline style trumps all
\t\treturn elem.style.display === \"none\" ||
\t\t\telem.style.display === \"\" &&

\t\t\t// Otherwise, check computed style
\t\t\t// Support: Firefox <=43 - 45
\t\t\t// Disconnected elements can have computed display: none, so first confirm that elem is
\t\t\t// in the document.
\t\t\tisAttached( elem ) &&

\t\t\tjQuery.css( elem, \"display\" ) === \"none\";
\t};

var swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};




function adjustCSS( elem, prop, valueParts, tween ) {
\tvar adjusted, scale,
\t\tmaxIterations = 20,
\t\tcurrentValue = tween ?
\t\t\tfunction() {
\t\t\t\treturn tween.cur();
\t\t\t} :
\t\t\tfunction() {
\t\t\t\treturn jQuery.css( elem, prop, \"\" );
\t\t\t},
\t\tinitial = currentValue(),
\t\tunit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t// Starting value computation is required for potential unit mismatches
\t\tinitialInUnit = elem.nodeType &&
\t\t\t( jQuery.cssNumber[ prop ] || unit !== \"px\" && +initial ) &&
\t\t\trcssNum.exec( jQuery.css( elem, prop ) );

\tif ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

\t\t// Support: Firefox <=54
\t\t// Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
\t\tinitial = initial / 2;

\t\t// Trust units reported by jQuery.css
\t\tunit = unit || initialInUnit[ 3 ];

\t\t// Iteratively approximate from a nonzero starting point
\t\tinitialInUnit = +initial || 1;

\t\twhile ( maxIterations-- ) {

\t\t\t// Evaluate and update our best guess (doubling guesses that zero out).
\t\t\t// Finish if the scale equals or crosses 1 (making the old*new product non-positive).
\t\t\tjQuery.style( elem, prop, initialInUnit + unit );
\t\t\tif ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
\t\t\t\tmaxIterations = 0;
\t\t\t}
\t\t\tinitialInUnit = initialInUnit / scale;

\t\t}

\t\tinitialInUnit = initialInUnit * 2;
\t\tjQuery.style( elem, prop, initialInUnit + unit );

\t\t// Make sure we update the tween properties later on
\t\tvalueParts = valueParts || [];
\t}

\tif ( valueParts ) {
\t\tinitialInUnit = +initialInUnit || +initial || 0;

\t\t// Apply relative offset (+=/-=) if specified
\t\tadjusted = valueParts[ 1 ] ?
\t\t\tinitialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
\t\t\t+valueParts[ 2 ];
\t\tif ( tween ) {
\t\t\ttween.unit = unit;
\t\t\ttween.start = initialInUnit;
\t\t\ttween.end = adjusted;
\t\t}
\t}
\treturn adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
\tvar temp,
\t\tdoc = elem.ownerDocument,
\t\tnodeName = elem.nodeName,
\t\tdisplay = defaultDisplayMap[ nodeName ];

\tif ( display ) {
\t\treturn display;
\t}

\ttemp = doc.body.appendChild( doc.createElement( nodeName ) );
\tdisplay = jQuery.css( temp, \"display\" );

\ttemp.parentNode.removeChild( temp );

\tif ( display === \"none\" ) {
\t\tdisplay = \"block\";
\t}
\tdefaultDisplayMap[ nodeName ] = display;

\treturn display;
}

function showHide( elements, show ) {
\tvar display, elem,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\t// Determine new display value for elements that need to change
\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tdisplay = elem.style.display;
\t\tif ( show ) {

\t\t\t// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
\t\t\t// check is required in this first loop unless we have a nonempty display value (either
\t\t\t// inline or about-to-be-restored)
\t\t\tif ( display === \"none\" ) {
\t\t\t\tvalues[ index ] = dataPriv.get( elem, \"display\" ) || null;
\t\t\t\tif ( !values[ index ] ) {
\t\t\t\t\telem.style.display = \"\";
\t\t\t\t}
\t\t\t}
\t\t\tif ( elem.style.display === \"\" && isHiddenWithinTree( elem ) ) {
\t\t\t\tvalues[ index ] = getDefaultDisplay( elem );
\t\t\t}
\t\t} else {
\t\t\tif ( display !== \"none\" ) {
\t\t\t\tvalues[ index ] = \"none\";

\t\t\t\t// Remember what we're overwriting
\t\t\t\tdataPriv.set( elem, \"display\", display );
\t\t\t}
\t\t}
\t}

\t// Set the display of the elements in a second loop to avoid constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\tif ( values[ index ] != null ) {
\t\t\telements[ index ].style.display = values[ index ];
\t\t}
\t}

\treturn elements;
}

jQuery.fn.extend( {
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each( function() {
\t\t\tif ( isHiddenWithinTree( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t} );
\t}
} );
var rcheckableType = ( /^(?:checkbox|radio)\$/i );

var rtagName = ( /<([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)/i );

var rscriptType = ( /^\$|^module\$|\\/(?:java|ecma)script/i );



// We have to close these tags to support XHTML (#13200)
var wrapMap = {

\t// Support: IE <=9 only
\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t// XHTML parsers do not magically insert elements in the
\t// same way that tag soup parsers do. So we cannot shorten
\t// this by omitting <tbody> or other required elements.
\tthead: [ 1, \"<table>\", \"</table>\" ],
\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t_default: [ 0, \"\", \"\" ]
};

// Support: IE <=9 only
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;


function getAll( context, tag ) {

\t// Support: IE <=9 - 11 only
\t// Use typeof to avoid zero-argument method invocation on host objects (#15151)
\tvar ret;

\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\tret = context.getElementsByTagName( tag || \"*\" );

\t} else if ( typeof context.querySelectorAll !== \"undefined\" ) {
\t\tret = context.querySelectorAll( tag || \"*\" );

\t} else {
\t\tret = [];
\t}

\tif ( tag === undefined || tag && nodeName( context, tag ) ) {
\t\treturn jQuery.merge( [ context ], ret );
\t}

\treturn ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdataPriv.set(
\t\t\telems[ i ],
\t\t\t\"globalEval\",
\t\t\t!refElements || dataPriv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}


var rhtml = /<|&#?\\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
\tvar elem, tmp, tag, wrap, attached, j,
\t\tfragment = context.createDocumentFragment(),
\t\tnodes = [],
\t\ti = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\telem = elems[ i ];

\t\tif ( elem || elem === 0 ) {

\t\t\t// Add nodes directly
\t\t\tif ( toType( elem ) === \"object\" ) {

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t// Convert non-html into a text node
\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t// Convert html into DOM nodes
\t\t\t} else {
\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement( \"div\" ) );

\t\t\t\t// Deserialize a standard representation
\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\ttmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

\t\t\t\t// Descend through wrappers to the right content
\t\t\t\tj = wrap[ 0 ];
\t\t\t\twhile ( j-- ) {
\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t}

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t// Remember the top-level container
\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\ttmp.textContent = \"\";
\t\t\t}
\t\t}
\t}

\t// Remove wrapper from fragment
\tfragment.textContent = \"\";

\ti = 0;
\twhile ( ( elem = nodes[ i++ ] ) ) {

\t\t// Skip elements already in the context collection (trac-4087)
\t\tif ( selection && jQuery.inArray( elem, selection ) > -1 ) {
\t\t\tif ( ignored ) {
\t\t\t\tignored.push( elem );
\t\t\t}
\t\t\tcontinue;
\t\t}

\t\tattached = isAttached( elem );

\t\t// Append to fragment
\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t// Preserve script evaluation history
\t\tif ( attached ) {
\t\t\tsetGlobalEval( tmp );
\t\t}

\t\t// Capture executables
\t\tif ( scripts ) {
\t\t\tj = 0;
\t\t\twhile ( ( elem = tmp[ j++ ] ) ) {
\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\tscripts.push( elem );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn fragment;
}


( function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Android 4.0 - 4.3 only
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Android <=4.1 only
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE <=11 only
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
} )();


var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

// Support: IE <=9 - 11+
// focus() and blur() are asynchronous, except when they are no-op.
// So expect focus to be synchronous when the element is already active,
// and blur to be synchronous when the element is not already active.
// (focus and blur are always synchronous in other supported browsers,
// this just defines when we can count on it).
function expectSync( elem, type ) {
\treturn ( elem === safeActiveElement() ) === ( type === \"focus\" );
}

// Support: IE <=9 only
// Accessing document.activeElement can throw unexpectedly
// https://bugs.jquery.com/ticket/13393
function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
\tvar origFn, type;

\t// Types can be a map of types/handlers
\tif ( typeof types === \"object\" ) {

\t\t// ( types-Object, selector, data )
\t\tif ( typeof selector !== \"string\" ) {

\t\t\t// ( types-Object, data )
\t\t\tdata = data || selector;
\t\t\tselector = undefined;
\t\t}
\t\tfor ( type in types ) {
\t\t\ton( elem, type, selector, data, types[ type ], one );
\t\t}
\t\treturn elem;
\t}

\tif ( data == null && fn == null ) {

\t\t// ( types, fn )
\t\tfn = selector;
\t\tdata = selector = undefined;
\t} else if ( fn == null ) {
\t\tif ( typeof selector === \"string\" ) {

\t\t\t// ( types, selector, fn )
\t\t\tfn = data;
\t\t\tdata = undefined;
\t\t} else {

\t\t\t// ( types, data, fn )
\t\t\tfn = data;
\t\t\tdata = selector;
\t\t\tselector = undefined;
\t\t}
\t}
\tif ( fn === false ) {
\t\tfn = returnFalse;
\t} else if ( !fn ) {
\t\treturn elem;
\t}

\tif ( one === 1 ) {
\t\torigFn = fn;
\t\tfn = function( event ) {

\t\t\t// Can use an empty set, since event contains the info
\t\t\tjQuery().off( event );
\t\t\treturn origFn.apply( this, arguments );
\t\t};

\t\t// Use same guid so caller can remove using origFn
\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t}
\treturn elem.each( function() {
\t\tjQuery.event.add( this, types, fn, data, selector );
\t} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {

\t\tvar handleObjIn, eventHandle, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.get( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Ensure that invalid selectors throw exceptions at attach time
\t\t// Evaluate against documentElement in case elem is a non-element node (e.g., document)
\t\tif ( selector ) {
\t\t\tjQuery.find.matchesSelector( documentElement, selector );
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !( events = elemData.events ) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !( eventHandle = elemData.handle ) ) {
\t\t\teventHandle = elemData.handle = function( e ) {

\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== \"undefined\" && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend( {
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join( \".\" )
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !( handlers = events[ type ] ) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup ||
\t\t\t\t\tspecial.setup.call( elem, data, namespaces, eventHandle ) === false ) {

\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\tvar j, origCount, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

\t\tif ( !elemData || !( events = elemData.events ) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[ 2 ] &&
\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector ||
\t\t\t\t\t\tselector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown ||
\t\t\t\t\tspecial.teardown.call( elem, namespaces, elemData.handle ) === false ) {

\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove data and the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdataPriv.remove( elem, \"handle events\" );
\t\t}
\t},

\tdispatch: function( nativeEvent ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tvar event = jQuery.event.fix( nativeEvent );

\t\tvar i, j, ret, matched, handleObj, handlerQueue,
\t\t\targs = new Array( arguments.length ),
\t\t\thandlers = ( dataPriv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[ 0 ] = event;

\t\tfor ( i = 1; i < arguments.length; i++ ) {
\t\t\targs[ i ] = arguments[ i ];
\t\t}

\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( ( handleObj = matched.handlers[ j++ ] ) &&
\t\t\t\t!event.isImmediatePropagationStopped() ) {

\t\t\t\t// If the event is namespaced, then each handler is only invoked if it is
\t\t\t\t// specially universal or its namespaces are a superset of the event's.
\t\t\t\tif ( !event.rnamespace || handleObj.namespace === false ||
\t\t\t\t\tevent.rnamespace.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
\t\t\t\t\t\thandleObj.handler ).apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( ( event.result = ret ) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, handleObj, sel, matchedHandlers, matchedSelectors,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\tif ( delegateCount &&

\t\t\t// Support: IE <=9
\t\t\t// Black-hole SVG <use> instance trees (trac-13180)
\t\t\tcur.nodeType &&

\t\t\t// Support: Firefox <=42
\t\t\t// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
\t\t\t// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
\t\t\t// Support: IE 11 only
\t\t\t// ...but not arrow key \"clicks\" of radio inputs, which can have `button` -1 (gh-2343)
\t\t\t!( event.type === \"click\" && event.button >= 1 ) ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.nodeType === 1 && !( event.type === \"click\" && cur.disabled === true ) ) {
\t\t\t\t\tmatchedHandlers = [];
\t\t\t\t\tmatchedSelectors = {};
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matchedSelectors[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatchedSelectors[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) > -1 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matchedSelectors[ sel ] ) {
\t\t\t\t\t\t\tmatchedHandlers.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matchedHandlers.length ) {
\t\t\t\t\t\thandlerQueue.push( { elem: cur, handlers: matchedHandlers } );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tcur = this;
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
\t\t}

\t\treturn handlerQueue;
\t},

\taddProp: function( name, hook ) {
\t\tObject.defineProperty( jQuery.Event.prototype, name, {
\t\t\tenumerable: true,
\t\t\tconfigurable: true,

\t\t\tget: isFunction( hook ) ?
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn hook( this.originalEvent );
\t\t\t\t\t}
\t\t\t\t} :
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn this.originalEvent[ name ];
\t\t\t\t\t}
\t\t\t\t},

\t\t\tset: function( value ) {
\t\t\t\tObject.defineProperty( this, name, {
\t\t\t\t\tenumerable: true,
\t\t\t\t\tconfigurable: true,
\t\t\t\t\twritable: true,
\t\t\t\t\tvalue: value
\t\t\t\t} );
\t\t\t}
\t\t} );
\t},

\tfix: function( originalEvent ) {
\t\treturn originalEvent[ jQuery.expando ] ?
\t\t\toriginalEvent :
\t\t\tnew jQuery.Event( originalEvent );
\t},

\tspecial: {
\t\tload: {

\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tclick: {

\t\t\t// Utilize native event to ensure correct state for checkable inputs
\t\t\tsetup: function( data ) {

\t\t\t\t// For mutual compressibility with _default, replace `this` access with a local var.
\t\t\t\t// `|| data` is dead code meant only to preserve the variable through minification.
\t\t\t\tvar el = this || data;

\t\t\t\t// Claim the first handler
\t\t\t\tif ( rcheckableType.test( el.type ) &&
\t\t\t\t\tel.click && nodeName( el, \"input\" ) ) {

\t\t\t\t\t// dataPriv.set( el, \"click\", ... )
\t\t\t\t\tleverageNative( el, \"click\", returnTrue );
\t\t\t\t}

\t\t\t\t// Return false to allow normal processing in the caller
\t\t\t\treturn false;
\t\t\t},
\t\t\ttrigger: function( data ) {

\t\t\t\t// For mutual compressibility with _default, replace `this` access with a local var.
\t\t\t\t// `|| data` is dead code meant only to preserve the variable through minification.
\t\t\t\tvar el = this || data;

\t\t\t\t// Force setup before triggering a click
\t\t\t\tif ( rcheckableType.test( el.type ) &&
\t\t\t\t\tel.click && nodeName( el, \"input\" ) ) {

\t\t\t\t\tleverageNative( el, \"click\" );
\t\t\t\t}

\t\t\t\t// Return non-false to allow normal event-path propagation
\t\t\t\treturn true;
\t\t\t},

\t\t\t// For cross-browser consistency, suppress native .click() on links
\t\t\t// Also prevent it if we're currently inside a leveraged native-event stack
\t\t\t_default: function( event ) {
\t\t\t\tvar target = event.target;
\t\t\t\treturn rcheckableType.test( target.type ) &&
\t\t\t\t\ttarget.click && nodeName( target, \"input\" ) &&
\t\t\t\t\tdataPriv.get( target, \"click\" ) ||
\t\t\t\t\tnodeName( target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
};

// Ensure the presence of an event listener that handles manually-triggered
// synthetic events by interrupting progress until reinvoked in response to
// *native* events that it fires directly, ensuring that state changes have
// already occurred before other listeners are invoked.
function leverageNative( el, type, expectSync ) {

\t// Missing expectSync indicates a trigger call, which must force setup through jQuery.event.add
\tif ( !expectSync ) {
\t\tif ( dataPriv.get( el, type ) === undefined ) {
\t\t\tjQuery.event.add( el, type, returnTrue );
\t\t}
\t\treturn;
\t}

\t// Register the controller as a special universal handler for all event namespaces
\tdataPriv.set( el, type, false );
\tjQuery.event.add( el, type, {
\t\tnamespace: false,
\t\thandler: function( event ) {
\t\t\tvar notAsync, result,
\t\t\t\tsaved = dataPriv.get( this, type );

\t\t\tif ( ( event.isTrigger & 1 ) && this[ type ] ) {

\t\t\t\t// Interrupt processing of the outer synthetic .trigger()ed event
\t\t\t\t// Saved data should be false in such cases, but might be a leftover capture object
\t\t\t\t// from an async native handler (gh-4350)
\t\t\t\tif ( !saved.length ) {

\t\t\t\t\t// Store arguments for use when handling the inner native event
\t\t\t\t\t// There will always be at least one argument (an event object), so this array
\t\t\t\t\t// will not be confused with a leftover capture object.
\t\t\t\t\tsaved = slice.call( arguments );
\t\t\t\t\tdataPriv.set( this, type, saved );

\t\t\t\t\t// Trigger the native event and capture its result
\t\t\t\t\t// Support: IE <=9 - 11+
\t\t\t\t\t// focus() and blur() are asynchronous
\t\t\t\t\tnotAsync = expectSync( this, type );
\t\t\t\t\tthis[ type ]();
\t\t\t\t\tresult = dataPriv.get( this, type );
\t\t\t\t\tif ( saved !== result || notAsync ) {
\t\t\t\t\t\tdataPriv.set( this, type, false );
\t\t\t\t\t} else {
\t\t\t\t\t\tresult = {};
\t\t\t\t\t}
\t\t\t\t\tif ( saved !== result ) {

\t\t\t\t\t\t// Cancel the outer synthetic event
\t\t\t\t\t\tevent.stopImmediatePropagation();
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\treturn result.value;
\t\t\t\t\t}

\t\t\t\t// If this is an inner synthetic event for an event with a bubbling surrogate
\t\t\t\t// (focus or blur), assume that the surrogate already propagated from triggering the
\t\t\t\t// native event and prevent that from happening again here.
\t\t\t\t// This technically gets the ordering wrong w.r.t. to `.trigger()` (in which the
\t\t\t\t// bubbling surrogate propagates *after* the non-bubbling base), but that seems
\t\t\t\t// less bad than duplication.
\t\t\t\t} else if ( ( jQuery.event.special[ type ] || {} ).delegateType ) {
\t\t\t\t\tevent.stopPropagation();
\t\t\t\t}

\t\t\t// If this is a native event triggered above, everything is now in order
\t\t\t// Fire an inner synthetic event with the original arguments
\t\t\t} else if ( saved.length ) {

\t\t\t\t// ...and capture the result
\t\t\t\tdataPriv.set( this, type, {
\t\t\t\t\tvalue: jQuery.event.trigger(

\t\t\t\t\t\t// Support: IE <=9 - 11+
\t\t\t\t\t\t// Extend with the prototype to reset the above stopImmediatePropagation()
\t\t\t\t\t\tjQuery.extend( saved[ 0 ], jQuery.Event.prototype ),
\t\t\t\t\t\tsaved.slice( 1 ),
\t\t\t\t\t\tthis
\t\t\t\t\t)
\t\t\t\t} );

\t\t\t\t// Abort handling of the native event
\t\t\t\tevent.stopImmediatePropagation();
\t\t\t}
\t\t}
\t} );
}

jQuery.removeEvent = function( elem, type, handle ) {

\t// This \"if\" is needed for plain objects
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle );
\t}
};

jQuery.Event = function( src, props ) {

\t// Allow instantiation without the 'new' keyword
\tif ( !( this instanceof jQuery.Event ) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&

\t\t\t\t// Support: Android <=2.3 only
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t\t// Create target properties
\t\t// Support: Safari <=6 - 7 only
\t\t// Target should not be a text node (#504, #13143)
\t\tthis.target = ( src.target && src.target.nodeType === 3 ) ?
\t\t\tsrc.target.parentNode :
\t\t\tsrc.target;

\t\tthis.currentTarget = src.currentTarget;
\t\tthis.relatedTarget = src.relatedTarget;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || Date.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tconstructor: jQuery.Event,
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,
\tisSimulated: false,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
\taltKey: true,
\tbubbles: true,
\tcancelable: true,
\tchangedTouches: true,
\tctrlKey: true,
\tdetail: true,
\teventPhase: true,
\tmetaKey: true,
\tpageX: true,
\tpageY: true,
\tshiftKey: true,
\tview: true,
\t\"char\": true,
\tcode: true,
\tcharCode: true,
\tkey: true,
\tkeyCode: true,
\tbutton: true,
\tbuttons: true,
\tclientX: true,
\tclientY: true,
\toffsetX: true,
\toffsetY: true,
\tpointerId: true,
\tpointerType: true,
\tscreenX: true,
\tscreenY: true,
\ttargetTouches: true,
\ttoElement: true,
\ttouches: true,

\twhich: function( event ) {
\t\tvar button = event.button;

\t\t// Add which for key events
\t\tif ( event.which == null && rkeyEvent.test( event.type ) ) {
\t\t\treturn event.charCode != null ? event.charCode : event.keyCode;
\t\t}

\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\tif ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
\t\t\tif ( button & 1 ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\tif ( button & 2 ) {
\t\t\t\treturn 3;
\t\t\t}

\t\t\tif ( button & 4 ) {
\t\t\t\treturn 2;
\t\t\t}

\t\t\treturn 0;
\t\t}

\t\treturn event.which;
\t}
}, jQuery.event.addProp );

jQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( type, delegateType ) {
\tjQuery.event.special[ type ] = {

\t\t// Utilize native event if possible so blur/focus sequence is correct
\t\tsetup: function() {

\t\t\t// Claim the first handler
\t\t\t// dataPriv.set( this, \"focus\", ... )
\t\t\t// dataPriv.set( this, \"blur\", ... )
\t\t\tleverageNative( this, type, expectSync );

\t\t\t// Return false to allow normal processing in the caller
\t\t\treturn false;
\t\t},
\t\ttrigger: function() {

\t\t\t// Force setup before trigger
\t\t\tleverageNative( this, type );

\t\t\t// Return non-false to allow normal event-path propagation
\t\t\treturn true;
\t\t},

\t\tdelegateType: delegateType
\t};
} );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mouseenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
} );

jQuery.fn.extend( {

\ton: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn );
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {

\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ?
\t\t\t\t\thandleObj.origType + \".\" + handleObj.namespace :
\t\t\t\t\thandleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {

\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {

\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t} );
\t}
} );


var

\t/* eslint-disable max-len */

\t// See https://github.com/eslint/eslint/issues/3229
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)[^>]*)\\/>/gi,

\t/* eslint-enable */

\t// Support: IE <=10 - 11, Edge 12 - 13 only
\t// In IE/Edge using regex groups here causes severe slowdowns.
\t// See https://connect.microsoft.com/IE/feedback/details/1736512/
\trnoInnerhtml = /<script|<style|<link/i,

\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
\tif ( nodeName( elem, \"table\" ) &&
\t\tnodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ) {

\t\treturn jQuery( elem ).children( \"tbody\" )[ 0 ] || elem;
\t}

\treturn elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = ( elem.getAttribute( \"type\" ) !== null ) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tif ( ( elem.type || \"\" ).slice( 0, 5 ) === \"true/\" ) {
\t\telem.type = elem.type.slice( 5 );
\t} else {
\t\telem.removeAttribute( \"type\" );
\t}

\treturn elem;
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( dataPriv.hasData( src ) ) {
\t\tpdataOld = dataPriv.access( src );
\t\tpdataCur = dataPriv.set( dest, pdataOld );
\t\tevents = pdataOld.events;

\t\tif ( events ) {
\t\t\tdelete pdataCur.handle;
\t\t\tpdataCur.events = {};

\t\t\tfor ( type in events ) {
\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// 2. Copy user data
\tif ( dataUser.hasData( src ) ) {
\t\tudataOld = dataUser.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdataUser.set( dest, udataCur );
\t}
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
\tvar nodeName = dest.nodeName.toLowerCase();

\t// Fails to persist the checked state of a cloned checkbox or radio button.
\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\tdest.checked = src.checked;

\t// Fails to return the selected option to the default selected state when cloning options
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

function domManip( collection, args, callback, ignored ) {

\t// Flatten any nested arrays
\targs = concat.apply( [], args );

\tvar fragment, first, scripts, hasScripts, node, doc,
\t\ti = 0,
\t\tl = collection.length,
\t\tiNoClone = l - 1,
\t\tvalue = args[ 0 ],
\t\tvalueIsFunction = isFunction( value );

\t// We can't cloneNode fragments that contain checked, in WebKit
\tif ( valueIsFunction ||
\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\treturn collection.each( function( index ) {
\t\t\tvar self = collection.eq( index );
\t\t\tif ( valueIsFunction ) {
\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t}
\t\t\tdomManip( self, args, callback, ignored );
\t\t} );
\t}

\tif ( l ) {
\t\tfragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
\t\tfirst = fragment.firstChild;

\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\tfragment = first;
\t\t}

\t\t// Require either new content or an interest in ignored elements to invoke the callback
\t\tif ( first || ignored ) {
\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\thasScripts = scripts.length;

\t\t\t// Use the original fragment for the last item
\t\t\t// instead of the first because it can end up
\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tnode = fragment;

\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\tif ( hasScripts ) {

\t\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcallback.call( collection[ i ], node, i );
\t\t\t}

\t\t\tif ( hasScripts ) {
\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t// Reenable scripts
\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t!dataPriv.access( node, \"globalEval\" ) &&
\t\t\t\t\t\tjQuery.contains( doc, node ) ) {

\t\t\t\t\t\tif ( node.src && ( node.type || \"\" ).toLowerCase()  !== \"module\" ) {

\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\tif ( jQuery._evalUrl && !node.noModule ) {
\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src, {
\t\t\t\t\t\t\t\t\tnonce: node.nonce || node.getAttribute( \"nonce\" )
\t\t\t\t\t\t\t\t} );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tDOMEval( node.textContent.replace( rcleanScript, \"\" ), node, doc );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn collection;
}

function remove( elem, selector, keepData ) {
\tvar node,
\t\tnodes = selector ? jQuery.filter( selector, elem ) : elem,
\t\ti = 0;

\tfor ( ; ( node = nodes[ i ] ) != null; i++ ) {
\t\tif ( !keepData && node.nodeType === 1 ) {
\t\t\tjQuery.cleanData( getAll( node ) );
\t\t}

\t\tif ( node.parentNode ) {
\t\t\tif ( keepData && isAttached( node ) ) {
\t\t\t\tsetGlobalEval( getAll( node, \"script\" ) );
\t\t\t}
\t\t\tnode.parentNode.removeChild( node );
\t\t}
\t}

\treturn elem;
}

jQuery.extend( {
\thtmlPrefilter: function( html ) {
\t\treturn html.replace( rxhtmlTag, \"<\$1></\$2>\" );
\t},

\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = isAttached( elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tcleanData: function( elems ) {
\t\tvar data, elem, type,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
\t\t\tif ( acceptData( elem ) ) {
\t\t\t\tif ( ( data = elem[ dataPriv.expando ] ) ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataPriv.expando ] = undefined;
\t\t\t\t}
\t\t\t\tif ( elem[ dataUser.expando ] ) {

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataUser.expando ] = undefined;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} );

jQuery.fn.extend( {
\tdetach: function( selector ) {
\t\treturn remove( this, selector, true );
\t},

\tremove: function( selector ) {
\t\treturn remove( this, selector );
\t},

\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each( function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t} );
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t} );
\t},

\tprepend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t} );
\t},

\tbefore: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t} );
\t},

\tafter: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t} );
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; ( elem = this[ i ] ) != null; i++ ) {
\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t// Prevent memory leaks
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t// Remove any remaining nodes
\t\t\t\telem.textContent = \"\";
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map( function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t} );
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\treturn elem.innerHTML;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = jQuery.htmlPrefilter( value );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch ( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar ignored = [];

\t\t// Make the changes, replacing each non-ignored context element with the new content
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tvar parent = this.parentNode;

\t\t\tif ( jQuery.inArray( this, ignored ) < 0 ) {
\t\t\t\tjQuery.cleanData( getAll( this ) );
\t\t\t\tif ( parent ) {
\t\t\t\t\tparent.replaceChild( elem, this );
\t\t\t\t}
\t\t\t}

\t\t// Force callback invocation
\t\t}, ignored );
\t}
} );

jQuery.each( {
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1,
\t\t\ti = 0;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t// .get() because push.apply(_, arraylike) throws on ancient WebKit
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
} );
var rnumnonpx = new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );

var getStyles = function( elem ) {

\t\t// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tvar view = elem.ownerDocument.defaultView;

\t\tif ( !view || !view.opener ) {
\t\t\tview = window;
\t\t}

\t\treturn view.getComputedStyle( elem );
\t};

var rboxStyle = new RegExp( cssExpand.join( \"|\" ), \"i\" );



( function() {

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computeStyleTests() {

\t\t// This is a singleton, we need to execute it only once
\t\tif ( !div ) {
\t\t\treturn;
\t\t}

\t\tcontainer.style.cssText = \"position:absolute;left:-11111px;width:60px;\" +
\t\t\t\"margin-top:1px;padding:0;border:0\";
\t\tdiv.style.cssText =
\t\t\t\"position:relative;display:block;box-sizing:border-box;overflow:scroll;\" +
\t\t\t\"margin:auto;border:1px;padding:1px;\" +
\t\t\t\"width:60%;top:1%\";
\t\tdocumentElement.appendChild( container ).appendChild( div );

\t\tvar divStyle = window.getComputedStyle( div );
\t\tpixelPositionVal = divStyle.top !== \"1%\";

\t\t// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
\t\treliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

\t\t// Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
\t\t// Some styles come back with percentage values, even though they shouldn't
\t\tdiv.style.right = \"60%\";
\t\tpixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

\t\t// Support: IE 9 - 11 only
\t\t// Detect misreporting of content dimensions for box-sizing:border-box elements
\t\tboxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

\t\t// Support: IE 9 only
\t\t// Detect overflow:scroll screwiness (gh-3699)
\t\t// Support: Chrome <=64
\t\t// Don't get tricked when zoom affects offsetWidth (gh-4029)
\t\tdiv.style.position = \"absolute\";
\t\tscrollboxSizeVal = roundPixelMeasures( div.offsetWidth / 3 ) === 12;

\t\tdocumentElement.removeChild( container );

\t\t// Nullify the div so it wouldn't be stored in the memory and
\t\t// it will also be a sign that checks already performed
\t\tdiv = null;
\t}

\tfunction roundPixelMeasures( measure ) {
\t\treturn Math.round( parseFloat( measure ) );
\t}

\tvar pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
\t\treliableMarginLeftVal,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\t// Finish early in limited (non-browser) environments
\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE <=9 - 11 only
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tjQuery.extend( support, {
\t\tboxSizingReliable: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn boxSizingReliableVal;
\t\t},
\t\tpixelBoxStyles: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelBoxStylesVal;
\t\t},
\t\tpixelPosition: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelPositionVal;
\t\t},
\t\treliableMarginLeft: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn reliableMarginLeftVal;
\t\t},
\t\tscrollboxSize: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn scrollboxSizeVal;
\t\t}
\t} );
} )();


function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,

\t\t// Support: Firefox 51+
\t\t// Retrieving style before computed somehow
\t\t// fixes an issue with getting wrong values
\t\t// on detached elements
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// getPropertyValue is needed for:
\t//   .css('filter') (IE 9 only, #12537)
\t//   .css('--customProperty) (#3144)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];

\t\tif ( ret === \"\" && !isAttached( elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// Android Browser returns percentage for some values,
\t\t// but width seems to be reliably pixels.
\t\t// This is against the CSSOM draft spec:
\t\t// https://drafts.csswg.org/cssom/#resolved-values
\t\tif ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

\t\t\t// Remember the original values
\t\t\twidth = style.width;
\t\t\tminWidth = style.minWidth;
\t\t\tmaxWidth = style.maxWidth;

\t\t\t// Put in the new values to get a computed value out
\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\tret = computed.width;

\t\t\t// Revert the changed values
\t\t\tstyle.width = width;
\t\t\tstyle.minWidth = minWidth;
\t\t\tstyle.maxWidth = maxWidth;
\t\t}
\t}

\treturn ret !== undefined ?

\t\t// Support: IE <=9 - 11 only
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}


function addGetHookIf( conditionFn, hookFn ) {

\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {

\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn ( this.get = hookFn ).apply( this, arguments );
\t\t}
\t};
}


var cssPrefixes = [ \"Webkit\", \"Moz\", \"ms\" ],
\temptyStyle = document.createElement( \"div\" ).style,
\tvendorProps = {};

// Return a vendor-prefixed property or undefined
function vendorPropName( name ) {

\t// Check for vendor prefixed names
\tvar capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in emptyStyle ) {
\t\t\treturn name;
\t\t}
\t}
}

// Return a potentially-mapped jQuery.cssProps or vendor prefixed property
function finalPropName( name ) {
\tvar final = jQuery.cssProps[ name ] || vendorProps[ name ];

\tif ( final ) {
\t\treturn final;
\t}
\tif ( name in emptyStyle ) {
\t\treturn name;
\t}
\treturn vendorProps[ name ] = vendorPropName( name ) || name;
}


var

\t// Swappable if display is none or starts with table
\t// except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trcustomProp = /^--/,
\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t};

function setPositiveNumber( elem, value, subtract ) {

\t// Any relative (+/-) values have already been
\t// normalized at this point
\tvar matches = rcssNum.exec( value );
\treturn matches ?

\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || \"px\" ) :
\t\tvalue;
}

function boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
\tvar i = dimension === \"width\" ? 1 : 0,
\t\textra = 0,
\t\tdelta = 0;

\t// Adjustment may not be necessary
\tif ( box === ( isBorderBox ? \"border\" : \"content\" ) ) {
\t\treturn 0;
\t}

\tfor ( ; i < 4; i += 2 ) {

\t\t// Both box models exclude margin
\t\tif ( box === \"margin\" ) {
\t\t\tdelta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
\t\t}

\t\t// If we get here with a content-box, we're seeking \"padding\" or \"border\" or \"margin\"
\t\tif ( !isBorderBox ) {

\t\t\t// Add padding
\t\t\tdelta += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// For \"border\" or \"margin\", add border
\t\t\tif ( box !== \"padding\" ) {
\t\t\t\tdelta += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );

\t\t\t// But still keep track of it otherwise
\t\t\t} else {
\t\t\t\textra += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}

\t\t// If we get here with a border-box (content + padding + border), we're seeking \"content\" or
\t\t// \"padding\" or \"margin\"
\t\t} else {

\t\t\t// For \"content\", subtract padding
\t\t\tif ( box === \"content\" ) {
\t\t\t\tdelta -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// For \"content\" or \"padding\", subtract border
\t\t\tif ( box !== \"margin\" ) {
\t\t\t\tdelta -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\t// Account for positive content-box scroll gutter when requested by providing computedVal
\tif ( !isBorderBox && computedVal >= 0 ) {

\t\t// offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
\t\t// Assuming integer scroll gutter, subtract the rest and round down
\t\tdelta += Math.max( 0, Math.ceil(
\t\t\telem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
\t\t\tcomputedVal -
\t\t\tdelta -
\t\t\textra -
\t\t\t0.5

\t\t// If offsetWidth/offsetHeight is unknown, then we can't determine content-box scroll gutter
\t\t// Use an explicit zero to avoid NaN (gh-3964)
\t\t) ) || 0;
\t}

\treturn delta;
}

function getWidthOrHeight( elem, dimension, extra ) {

\t// Start with computed style
\tvar styles = getStyles( elem ),

\t\t// To avoid forcing a reflow, only fetch boxSizing if we need it (gh-4322).
\t\t// Fake content-box until we know it's needed to know the true value.
\t\tboxSizingNeeded = !support.boxSizingReliable() || extra,
\t\tisBorderBox = boxSizingNeeded &&
\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\tvalueIsBorderBox = isBorderBox,

\t\tval = curCSS( elem, dimension, styles ),
\t\toffsetProp = \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 );

\t// Support: Firefox <=54
\t// Return a confounding non-pixel value or feign ignorance, as appropriate.
\tif ( rnumnonpx.test( val ) ) {
\t\tif ( !extra ) {
\t\t\treturn val;
\t\t}
\t\tval = \"auto\";
\t}


\t// Fall back to offsetWidth/offsetHeight when value is \"auto\"
\t// This happens for inline elements with no explicit setting (gh-3571)
\t// Support: Android <=4.1 - 4.3 only
\t// Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
\t// Support: IE 9-11 only
\t// Also use offsetWidth/offsetHeight for when box sizing is unreliable
\t// We use getClientRects() to check for hidden/disconnected.
\t// In those cases, the computed value can be trusted to be border-box
\tif ( ( !support.boxSizingReliable() && isBorderBox ||
\t\tval === \"auto\" ||
\t\t!parseFloat( val ) && jQuery.css( elem, \"display\", false, styles ) === \"inline\" ) &&
\t\telem.getClientRects().length ) {

\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t\t// Where available, offsetWidth/offsetHeight approximate border box dimensions.
\t\t// Where not available (e.g., SVG), assume unreliable box-sizing and interpret the
\t\t// retrieved value as a content box dimension.
\t\tvalueIsBorderBox = offsetProp in elem;
\t\tif ( valueIsBorderBox ) {
\t\t\tval = elem[ offsetProp ];
\t\t}
\t}

\t// Normalize \"\" and auto
\tval = parseFloat( val ) || 0;

\t// Adjust for the element's box model
\treturn ( val +
\t\tboxModelAdjustment(
\t\t\telem,
\t\t\tdimension,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles,

\t\t\t// Provide the current computed size to request scroll gutter calculation (gh-3589)
\t\t\tval
\t\t)
\t) + \"px\";
}

jQuery.extend( {

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"animationIterationCount\": true,
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"gridArea\": true,
\t\t\"gridColumn\": true,
\t\t\"gridColumnEnd\": true,
\t\t\"gridColumnStart\": true,
\t\t\"gridRow\": true,
\t\t\"gridRowEnd\": true,
\t\t\"gridRowStart\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = camelCase( name ),
\t\t\tisCustomProp = rcustomProp.test( name ),
\t\t\tstyle = elem.style;

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to query the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
\t\t\t\tvalue = adjustCSS( elem, name, ret );

\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number was passed in, add the unit (except for certain CSS properties)
\t\t\t// The isCustomProp check can be removed in jQuery 4.0 when we only auto-append
\t\t\t// \"px\" to a few hardcoded values.
\t\t\tif ( type === \"number\" && !isCustomProp ) {
\t\t\t\tvalue += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? \"\" : \"px\" );
\t\t\t}

\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !( \"set\" in hooks ) ||
\t\t\t\t( value = hooks.set( elem, value, extra ) ) !== undefined ) {

\t\t\t\tif ( isCustomProp ) {
\t\t\t\t\tstyle.setProperty( name, value );
\t\t\t\t} else {
\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t}
\t\t\t}

\t\t} else {

\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks &&
\t\t\t\t( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = camelCase( name ),
\t\t\tisCustomProp = rcustomProp.test( name );

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to modify the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

\t\t// Try prefixed name followed by the unprefixed name
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t// Convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || isFinite( num ) ? num || 0 : val;
\t\t}

\t\treturn val;
\t}
} );

jQuery.each( [ \"height\", \"width\" ], function( i, dimension ) {
\tjQuery.cssHooks[ dimension ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) &&

\t\t\t\t\t// Support: Safari 8+
\t\t\t\t\t// Table columns in Safari have non-zero offsetWidth & zero
\t\t\t\t\t// getBoundingClientRect().width unless display is changed.
\t\t\t\t\t// Support: IE <=11 only
\t\t\t\t\t// Running getBoundingClientRect on a disconnected node
\t\t\t\t\t// in IE throws an error.
\t\t\t\t\t( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
\t\t\t\t\t\tswap( elem, cssShow, function() {
\t\t\t\t\t\t\treturn getWidthOrHeight( elem, dimension, extra );
\t\t\t\t\t\t} ) :
\t\t\t\t\t\tgetWidthOrHeight( elem, dimension, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar matches,
\t\t\t\tstyles = getStyles( elem ),

\t\t\t\t// Only read styles.position if the test has a chance to fail
\t\t\t\t// to avoid forcing a reflow.
\t\t\t\tscrollboxSizeBuggy = !support.scrollboxSize() &&
\t\t\t\t\tstyles.position === \"absolute\",

\t\t\t\t// To avoid forcing a reflow, only fetch boxSizing if we need it (gh-3991)
\t\t\t\tboxSizingNeeded = scrollboxSizeBuggy || extra,
\t\t\t\tisBorderBox = boxSizingNeeded &&
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\tsubtract = extra ?
\t\t\t\t\tboxModelAdjustment(
\t\t\t\t\t\telem,
\t\t\t\t\t\tdimension,
\t\t\t\t\t\textra,
\t\t\t\t\t\tisBorderBox,
\t\t\t\t\t\tstyles
\t\t\t\t\t) :
\t\t\t\t\t0;

\t\t\t// Account for unreliable border-box dimensions by comparing offset* to computed and
\t\t\t// faking a content-box to get border and padding (gh-3699)
\t\t\tif ( isBorderBox && scrollboxSizeBuggy ) {
\t\t\t\tsubtract -= Math.ceil(
\t\t\t\t\telem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
\t\t\t\t\tparseFloat( styles[ dimension ] ) -
\t\t\t\t\tboxModelAdjustment( elem, dimension, \"border\", false, styles ) -
\t\t\t\t\t0.5
\t\t\t\t);
\t\t\t}

\t\t\t// Convert to pixels if value adjustment is needed
\t\t\tif ( subtract && ( matches = rcssNum.exec( value ) ) &&
\t\t\t\t( matches[ 3 ] || \"px\" ) !== \"px\" ) {

\t\t\t\telem.style[ dimension ] = value;
\t\t\t\tvalue = jQuery.css( elem, dimension );
\t\t\t}

\t\t\treturn setPositiveNumber( elem, value, subtract );
\t\t}
\t};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn ( parseFloat( curCSS( elem, \"marginLeft\" ) ) ||
\t\t\t\telem.getBoundingClientRect().left -
\t\t\t\t\tswap( elem, { marginLeft: 0 }, function() {
\t\t\t\t\t\treturn elem.getBoundingClientRect().left;
\t\t\t\t\t} )
\t\t\t\t) + \"px\";
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each( {
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split( \" \" ) : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( prefix !== \"margin\" ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
} );

jQuery.fn.extend( {
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( Array.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t}
} );


function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || jQuery.easing._default;
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\t// Use a property on the element directly when it is not a DOM element,
\t\t\t// or when there is no matching style property that exists.
\t\t\tif ( tween.elem.nodeType !== 1 ||
\t\t\t\ttween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );

\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {

\t\t\t// Use step hook for back compat.
\t\t\t// Use cssHook if its there.
\t\t\t// Use .style if available and use plain properties where available.
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.nodeType === 1 && (
\t\t\t\t\tjQuery.cssHooks[ tween.prop ] ||
\t\t\t\t\ttween.elem.style[ finalPropName( tween.prop ) ] != null ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t},
\t_default: \"swing\"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
\tfxNow, inProgress,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trrun = /queueHooks\$/;

function schedule() {
\tif ( inProgress ) {
\t\tif ( document.hidden === false && window.requestAnimationFrame ) {
\t\t\twindow.requestAnimationFrame( schedule );
\t\t} else {
\t\t\twindow.setTimeout( schedule, jQuery.fx.interval );
\t\t}

\t\tjQuery.fx.tick();
\t}
}

// Animations created synchronously will run synchronously
function createFxNow() {
\twindow.setTimeout( function() {
\t\tfxNow = undefined;
\t} );
\treturn ( fxNow = Date.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\ti = 0,
\t\tattrs = { height: type };

\t// If we include width, step value is 1 to do all cssExpand values,
\t// otherwise step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\tvar prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
\t\tisBox = \"width\" in props || \"height\" in props,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHiddenWithinTree( elem ),
\t\tdataShow = dataPriv.get( elem, \"fxshow\" );

\t// Queue-skipping animations hijack the fx hooks
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always( function() {

\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always( function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// Detect show/hide animations
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.test( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// Pretend to be hidden if this is a \"show\" and
\t\t\t\t// there is still data from a stopped show/hide
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;

\t\t\t\t// Ignore all other no-op show/hide data
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
\t\t}
\t}

\t// Bail out if this is a no-op like .hide().hide()
\tpropTween = !jQuery.isEmptyObject( props );
\tif ( !propTween && jQuery.isEmptyObject( orig ) ) {
\t\treturn;
\t}

\t// Restrict \"overflow\" and \"display\" styles during box animations
\tif ( isBox && elem.nodeType === 1 ) {

\t\t// Support: IE <=9 - 11, Edge 12 - 15
\t\t// Record all 3 overflow attributes because IE does not infer the shorthand
\t\t// from identically-valued overflowX and overflowY and Edge just mirrors
\t\t// the overflowX value there.
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Identify a display type, preferring old show/hide data over the CSS cascade
\t\trestoreDisplay = dataShow && dataShow.display;
\t\tif ( restoreDisplay == null ) {
\t\t\trestoreDisplay = dataPriv.get( elem, \"display\" );
\t\t}
\t\tdisplay = jQuery.css( elem, \"display\" );
\t\tif ( display === \"none\" ) {
\t\t\tif ( restoreDisplay ) {
\t\t\t\tdisplay = restoreDisplay;
\t\t\t} else {

\t\t\t\t// Get nonempty value(s) by temporarily forcing visibility
\t\t\t\tshowHide( [ elem ], true );
\t\t\t\trestoreDisplay = elem.style.display || restoreDisplay;
\t\t\t\tdisplay = jQuery.css( elem, \"display\" );
\t\t\t\tshowHide( [ elem ] );
\t\t\t}
\t\t}

\t\t// Animate inline elements as inline-block
\t\tif ( display === \"inline\" || display === \"inline-block\" && restoreDisplay != null ) {
\t\t\tif ( jQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t\t// Restore the original display value at the end of pure show/hide animations
\t\t\t\tif ( !propTween ) {
\t\t\t\t\tanim.done( function() {
\t\t\t\t\t\tstyle.display = restoreDisplay;
\t\t\t\t\t} );
\t\t\t\t\tif ( restoreDisplay == null ) {
\t\t\t\t\t\tdisplay = style.display;
\t\t\t\t\t\trestoreDisplay = display === \"none\" ? \"\" : display;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tstyle.display = \"inline-block\";
\t\t\t}
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always( function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t} );
\t}

\t// Implement show/hide animations
\tpropTween = false;
\tfor ( prop in orig ) {

\t\t// General show/hide setup for this element animation
\t\tif ( !propTween ) {
\t\t\tif ( dataShow ) {
\t\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\t\thidden = dataShow.hidden;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tdataShow = dataPriv.access( elem, \"fxshow\", { display: restoreDisplay } );
\t\t\t}

\t\t\t// Store hidden/visible for toggle so `.stop().toggle()` \"reverses\"
\t\t\tif ( toggle ) {
\t\t\t\tdataShow.hidden = !hidden;
\t\t\t}

\t\t\t// Show elements before animating them
\t\t\tif ( hidden ) {
\t\t\t\tshowHide( [ elem ], true );
\t\t\t}

\t\t\t/* eslint-disable no-loop-func */

\t\t\tanim.done( function() {

\t\t\t/* eslint-enable no-loop-func */

\t\t\t\t// The final step of a \"hide\" animation is actually hiding the element
\t\t\t\tif ( !hidden ) {
\t\t\t\t\tshowHide( [ elem ] );
\t\t\t\t}
\t\t\t\tdataPriv.remove( elem, \"fxshow\" );
\t\t\t\tfor ( prop in orig ) {
\t\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t\t}
\t\t\t} );
\t\t}

\t\t// Per-property setup
\t\tpropTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
\t\tif ( !( prop in dataShow ) ) {
\t\t\tdataShow[ prop ] = propTween.start;
\t\t\tif ( hidden ) {
\t\t\t\tpropTween.end = propTween.start;
\t\t\t\tpropTween.start = 0;
\t\t\t}
\t\t}
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( Array.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = Animation.prefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {

\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t} ),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

\t\t\t\t// Support: Android 2.3 only
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ] );

\t\t\t// If there's more to do, yield
\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t}

\t\t\t// If this was an empty animation, synthesize a final progress notification
\t\t\tif ( !length ) {
\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t}

\t\t\t// Resolve the animation and report its conclusion
\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\treturn false;
\t\t},
\t\tanimation = deferred.promise( {
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, {
\t\t\t\tspecialEasing: {},
\t\t\t\teasing: jQuery.easing._default
\t\t\t}, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,

\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t} ),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length; index++ ) {
\t\tresult = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\tif ( isFunction( result.stop ) ) {
\t\t\t\tjQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
\t\t\t\t\tresult.stop.bind( result );
\t\t\t}
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\t// Attach callbacks from options
\tanimation
\t\t.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t} )
\t);

\treturn animation;
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweeners: {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value );
\t\t\tadjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
\t\t\treturn tween;
\t\t} ]
\t},

\ttweener: function( props, callback ) {
\t\tif ( isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.match( rnothtmlwhite );
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length; index++ ) {
\t\t\tprop = props[ index ];
\t\t\tAnimation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
\t\t\tAnimation.tweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilters: [ defaultPrefilter ],

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tAnimation.prefilters.unshift( callback );
\t\t} else {
\t\t\tAnimation.prefilters.push( callback );
\t\t}
\t}
} );

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tisFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !isFunction( easing ) && easing
\t};

\t// Go to the end state if fx are off
\tif ( jQuery.fx.off ) {
\t\topt.duration = 0;

\t} else {
\t\tif ( typeof opt.duration !== \"number\" ) {
\t\t\tif ( opt.duration in jQuery.fx.speeds ) {
\t\t\t\topt.duration = jQuery.fx.speeds[ opt.duration ];

\t\t\t} else {
\t\t\t\topt.duration = jQuery.fx.speeds._default;
\t\t\t}
\t\t}
\t}

\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend( {
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHiddenWithinTree ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate( { opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {

\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || dataPriv.get( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = dataPriv.get( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this &&
\t\t\t\t\t( type == null || timers[ index ].queue === type ) ) {

\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t} );
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each( function() {
\t\t\tvar index,
\t\t\t\tdata = dataPriv.get( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// Enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// Empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// Look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// Turn off finishing flag
\t\t\tdelete data.finish;
\t\t} );
\t}
} );

jQuery.each( [ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
} );

// Generate shortcuts for custom animations
jQuery.each( {
\tslideDown: genFx( \"show\" ),
\tslideUp: genFx( \"hide\" ),
\tslideToggle: genFx( \"toggle\" ),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = Date.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];

\t\t// Run the timer and safely remove it when done (allowing for external removal)
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tjQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
\tif ( inProgress ) {
\t\treturn;
\t}

\tinProgress = true;
\tschedule();
};

jQuery.fx.stop = function() {
\tinProgress = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,

\t// Default speed
\t_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = window.setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\twindow.clearTimeout( timeout );
\t\t};
\t} );
};


( function() {
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: Android <=4.3 only
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE <=11 only
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: IE <=11 only
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
} )();


var boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each( function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t} );
\t}
} );

jQuery.extend( {
\tattr: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set attributes on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === \"undefined\" ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// Attribute hooks are determined by the lowercase version
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\thooks = jQuery.attrHooks[ name.toLowerCase() ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\telem.setAttribute( name, value + \"\" );
\t\t\treturn value;
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\tret = jQuery.find.attr( elem, name );

\t\t// Non-existent attributes return null, we normalize to undefined
\t\treturn ret == null ? undefined : ret;
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tnodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name,
\t\t\ti = 0,

\t\t\t// Attribute names can contain non-HTML whitespace characters
\t\t\t// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
\t\t\tattrNames = value && value.match( rnothtmlwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( ( name = attrNames[ i++ ] ) ) {
\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t}
} );

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {

\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else {
\t\t\telem.setAttribute( name, name );
\t\t}
\t\treturn name;
\t}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\tvar ret, handle,
\t\t\tlowercaseName = name.toLowerCase();

\t\tif ( !isXML ) {

\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ lowercaseName ];
\t\t\tattrHandle[ lowercaseName ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tlowercaseName :
\t\t\t\tnull;
\t\t\tattrHandle[ lowercaseName ] = handle;
\t\t}
\t\treturn ret;
\t};
} );




var rfocusable = /^(?:input|select|textarea|button)\$/i,
\trclickable = /^(?:a|area)\$/i;

jQuery.fn.extend( {
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each( function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t} );
\t}
} );

jQuery.extend( {
\tprop: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\treturn ( elem[ name ] = value );
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\treturn elem[ name ];
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {

\t\t\t\t// Support: IE <=9 - 11 only
\t\t\t\t// elem.tabIndex doesn't always return the
\t\t\t\t// correct value when it hasn't been explicitly set
\t\t\t\t// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\t// Use proper attribute retrieval(#12072)
\t\t\t\tvar tabindex = jQuery.find.attr( elem, \"tabindex\" );

\t\t\t\tif ( tabindex ) {
\t\t\t\t\treturn parseInt( tabindex, 10 );
\t\t\t\t}

\t\t\t\tif (
\t\t\t\t\trfocusable.test( elem.nodeName ) ||
\t\t\t\t\trclickable.test( elem.nodeName ) &&
\t\t\t\t\telem.href
\t\t\t\t) {
\t\t\t\t\treturn 0;
\t\t\t\t}

\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t},

\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule \"no-unused-expressions\" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t},
\t\tset: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

jQuery.each( [
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
} );




\t// Strip and collapse whitespace according to HTML spec
\t// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
\tfunction stripAndCollapse( value ) {
\t\tvar tokens = value.match( rnothtmlwhite ) || [];
\t\treturn tokens.join( \" \" );
\t}


function getClass( elem ) {
\treturn elem.getAttribute && elem.getAttribute( \"class\" ) || \"\";
}

function classesToArray( value ) {
\tif ( Array.isArray( value ) ) {
\t\treturn value;
\t}
\tif ( typeof value === \"string\" ) {
\t\treturn value.match( rnothtmlwhite ) || [];
\t}
\treturn [];
}

jQuery.fn.extend( {
\taddClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tclasses = classesToArray( value );

\t\tif ( classes.length ) {
\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( !arguments.length ) {
\t\t\treturn this.attr( \"class\", \"\" );
\t\t}

\t\tclasses = classesToArray( value );

\t\tif ( classes.length ) {
\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );

\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {

\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) > -1 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value,
\t\t\tisValidValue = type === \"string\" || Array.isArray( value );

\t\tif ( typeof stateVal === \"boolean\" && isValidValue ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( isFunction( value ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).toggleClass(
\t\t\t\t\tvalue.call( this, i, getClass( this ), stateVal ),
\t\t\t\t\tstateVal
\t\t\t\t);
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar className, i, self, classNames;

\t\t\tif ( isValidValue ) {

\t\t\t\t// Toggle individual class names
\t\t\t\ti = 0;
\t\t\t\tself = jQuery( this );
\t\t\t\tclassNames = classesToArray( value );

\t\t\t\twhile ( ( className = classNames[ i++ ] ) ) {

\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( value === undefined || type === \"boolean\" ) {
\t\t\t\tclassName = getClass( this );
\t\t\t\tif ( className ) {

\t\t\t\t\t// Store className if set
\t\t\t\t\tdataPriv.set( this, \"__className__\", className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tif ( this.setAttribute ) {
\t\t\t\t\tthis.setAttribute( \"class\",
\t\t\t\t\t\tclassName || value === false ?
\t\t\t\t\t\t\"\" :
\t\t\t\t\t\tdataPriv.get( this, \"__className__\" ) || \"\"
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\thasClass: function( selector ) {
\t\tvar className, elem,
\t\t\ti = 0;

\t\tclassName = \" \" + selector + \" \";
\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\tif ( elem.nodeType === 1 &&
\t\t\t\t( \" \" + stripAndCollapse( getClass( elem ) ) + \" \" ).indexOf( className ) > -1 ) {
\t\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
} );




var rreturn = /\\r/g;

jQuery.fn.extend( {
\tval: function( value ) {
\t\tvar hooks, ret, valueIsFunction,
\t\t\telem = this[ 0 ];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] ||
\t\t\t\t\tjQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks &&
\t\t\t\t\t\"get\" in hooks &&
\t\t\t\t\t( ret = hooks.get( elem, \"value\" ) ) !== undefined
\t\t\t\t) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\t// Handle most common string cases
\t\t\t\tif ( typeof ret === \"string\" ) {
\t\t\t\t\treturn ret.replace( rreturn, \"\" );
\t\t\t\t}

\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\treturn ret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tvalueIsFunction = isFunction( value );

\t\treturn this.each( function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( valueIsFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";

\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";

\t\t\t} else if ( Array.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t} );
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !( \"set\" in hooks ) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t} );
\t}
} );

jQuery.extend( {
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {

\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :

\t\t\t\t\t// Support: IE <=10 - 11 only
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\t// Strip and collapse whitespace
\t\t\t\t\t// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
\t\t\t\t\tstripAndCollapse( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option, i,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\",
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length;

\t\t\t\tif ( index < 0 ) {
\t\t\t\t\ti = max;

\t\t\t\t} else {
\t\t\t\t\ti = one ? index : 0;
\t\t\t\t}

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t// IE8-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&

\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t!option.disabled &&
\t\t\t\t\t\t\t( !option.parentNode.disabled ||
\t\t\t\t\t\t\t\t!nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t/* eslint-disable no-cond-assign */

\t\t\t\t\tif ( option.selected =
\t\t\t\t\t\tjQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
\t\t\t\t\t) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}

\t\t\t\t\t/* eslint-enable no-cond-assign */
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( Array.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute( \"value\" ) === null ? \"on\" : elem.value;
\t\t};
\t}
} );




// Return jQuery for attributes-only inclusion


support.focusin = \"onfocusin\" in window;


var rfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\tstopPropagationCallback = function( e ) {
\t\te.stopPropagation();
\t};

jQuery.extend( jQuery.event, {

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split( \".\" ) : [];

\t\tcur = lastElement = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf( \".\" ) > -1 ) {

\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split( \".\" );
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf( \":\" ) < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join( \".\" );
\t\tevent.rnamespace = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === ( elem.ownerDocument || document ) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tlastElement = cur;
\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( dataPriv.get( cur, \"events\" ) || {} )[ event.type ] &&
\t\t\t\tdataPriv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( ( !special._default ||
\t\t\t\tspecial._default.apply( eventPath.pop(), data ) === false ) &&
\t\t\t\tacceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name as the event.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;

\t\t\t\t\tif ( event.isPropagationStopped() ) {
\t\t\t\t\t\tlastElement.addEventListener( type, stopPropagationCallback );
\t\t\t\t\t}

\t\t\t\t\telem[ type ]();

\t\t\t\t\tif ( event.isPropagationStopped() ) {
\t\t\t\t\t\tlastElement.removeEventListener( type, stopPropagationCallback );
\t\t\t\t\t}

\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\t// Piggyback on a donor event to simulate a different one
\t// Used only for `focus(in | out)` events
\tsimulate: function( type, elem, event ) {
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true
\t\t\t}
\t\t);

\t\tjQuery.event.trigger( e, null, elem );
\t}

} );

jQuery.fn.extend( {

\ttrigger: function( type, data ) {
\t\treturn this.each( function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t} );
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[ 0 ];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
\tjQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdataPriv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdataPriv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t} );
}
var location = window.location;

var nonce = Date.now();

var rquery = ( /\\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE 9 - 11 only
\t// IE throws on parseFromString with invalid input.
\ttry {
\t\txml = ( new window.DOMParser() ).parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};


var
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( Array.isArray( obj ) ) {

\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {

\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {

\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams(
\t\t\t\t\tprefix + \"[\" + ( typeof v === \"object\" && v != null ? i : \"\" ) + \"]\",
\t\t\t\t\tv,
\t\t\t\t\ttraditional,
\t\t\t\t\tadd
\t\t\t\t);
\t\t\t}
\t\t} );

\t} else if ( !traditional && toType( obj ) === \"object\" ) {

\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {

\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, valueOrFunction ) {

\t\t\t// If value is a function, invoke it and use its return value
\t\t\tvar value = isFunction( valueOrFunction ) ?
\t\t\t\tvalueOrFunction() :
\t\t\t\tvalueOrFunction;

\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" +
\t\t\t\tencodeURIComponent( value == null ? \"\" : value );
\t\t};

\tif ( a == null ) {
\t\treturn \"\";
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t} );

\t} else {

\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" );
};

jQuery.fn.extend( {
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map( function() {

\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t} )
\t\t.filter( function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t} )
\t\t.map( function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\tif ( val == null ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\tif ( Array.isArray( val ) ) {
\t\t\t\treturn jQuery.map( val, function( val ) {
\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t} );
\t\t\t}

\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t} ).get();
\t}
} );


var
\tr20 = /%20/g,
\trhash = /#.*\$/,
\trantiCache = /([?&])_=[^&]*/,
\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\$/mg,

\t// #7653, #8125, #8152: local protocol detection
\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\trnoContent = /^(?:GET|HEAD)\$/,
\trprotocol = /^\\/\\//,

\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\tprefilters = {},

\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\ttransports = {},

\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\tallTypes = \"*/\".concat( \"*\" ),

\t// Anchor tag for parsing the document origin
\toriginAnchor = document.createElement( \"a\" );
\toriginAnchor.href = location.href;

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

\t// dataTypeExpression is optional and defaults to \"*\"
\treturn function( dataTypeExpression, func ) {

\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\tfunc = dataTypeExpression;
\t\t\tdataTypeExpression = \"*\";
\t\t}

\t\tvar dataType,
\t\t\ti = 0,
\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

\t\tif ( isFunction( func ) ) {

\t\t\t// For each dataType in the dataTypeExpression
\t\t\twhile ( ( dataType = dataTypes[ i++ ] ) ) {

\t\t\t\t// Prepend if requested
\t\t\t\tif ( dataType[ 0 ] === \"+\" ) {
\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

\t\t\t\t// Otherwise append
\t\t\t\t} else {
\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\tvar inspected = {},
\t\tseekingTransport = ( structure === transports );

\tfunction inspect( dataType ) {
\t\tvar selected;
\t\tinspected[ dataType ] = true;
\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\tif ( typeof dataTypeOrTransport === \"string\" &&
\t\t\t\t!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\treturn false;
\t\t\t} else if ( seekingTransport ) {
\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t}
\t\t} );
\t\treturn selected;
\t}

\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
\tvar key, deep,
\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\tfor ( key in src ) {
\t\tif ( src[ key ] !== undefined ) {
\t\t\t( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
\t\t}
\t}
\tif ( deep ) {
\t\tjQuery.extend( true, target, deep );
\t}

\treturn target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

\tvar ct, type, finalDataType, firstDataType,
\t\tcontents = s.contents,
\t\tdataTypes = s.dataTypes;

\t// Remove auto dataType and get content-type in the process
\twhile ( dataTypes[ 0 ] === \"*\" ) {
\t\tdataTypes.shift();
\t\tif ( ct === undefined ) {
\t\t\tct = s.mimeType || jqXHR.getResponseHeader( \"Content-Type\" );
\t\t}
\t}

\t// Check if we're dealing with a known content-type
\tif ( ct ) {
\t\tfor ( type in contents ) {
\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\tdataTypes.unshift( type );
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t// Check to see if we have a response for the expected dataType
\tif ( dataTypes[ 0 ] in responses ) {
\t\tfinalDataType = dataTypes[ 0 ];
\t} else {

\t\t// Try convertible dataTypes
\t\tfor ( type in responses ) {
\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[ 0 ] ] ) {
\t\t\t\tfinalDataType = type;
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( !firstDataType ) {
\t\t\t\tfirstDataType = type;
\t\t\t}
\t\t}

\t\t// Or just use first one
\t\tfinalDataType = finalDataType || firstDataType;
\t}

\t// If we found a dataType
\t// We add the dataType to the list if needed
\t// and return the corresponding response
\tif ( finalDataType ) {
\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\tdataTypes.unshift( finalDataType );
\t\t}
\t\treturn responses[ finalDataType ];
\t}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
\tvar conv2, current, conv, tmp, prev,
\t\tconverters = {},

\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\tdataTypes = s.dataTypes.slice();

\t// Create converters map with lowercased keys
\tif ( dataTypes[ 1 ] ) {
\t\tfor ( conv in s.converters ) {
\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t}
\t}

\tcurrent = dataTypes.shift();

\t// Convert to each sequential dataType
\twhile ( current ) {

\t\tif ( s.responseFields[ current ] ) {
\t\t\tjqXHR[ s.responseFields[ current ] ] = response;
\t\t}

\t\t// Apply the dataFilter if provided
\t\tif ( !prev && isSuccess && s.dataFilter ) {
\t\t\tresponse = s.dataFilter( response, s.dataType );
\t\t}

\t\tprev = current;
\t\tcurrent = dataTypes.shift();

\t\tif ( current ) {

\t\t\t// There's only work to do if current dataType is non-auto
\t\t\tif ( current === \"*\" ) {

\t\t\t\tcurrent = prev;

\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\t} else if ( prev !== \"*\" && prev !== current ) {

\t\t\t\t// Seek a direct converter
\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t// If none found, seek a pair
\t\t\t\tif ( !conv ) {
\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\ttmp = conv2.split( \" \" );
\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\tif ( conv ) {

\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\tdataTypes.unshift( tmp[ 1 ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\tif ( conv && s.throws ) {
\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t} else {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tstate: \"parsererror\",
\t\t\t\t\t\t\t\terror: conv ? e : \"No conversion from \" + prev + \" to \" + current
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn { state: \"success\", data: response };
}

jQuery.extend( {

\t// Counter for holding the number of active queries
\tactive: 0,

\t// Last-Modified header cache for next request
\tlastModified: {},
\tetag: {},

\tajaxSettings: {
\t\turl: location.href,
\t\ttype: \"GET\",
\t\tisLocal: rlocalProtocol.test( location.protocol ),
\t\tglobal: true,
\t\tprocessData: true,
\t\tasync: true,
\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",

\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\taccepts: {
\t\t\t\"*\": allTypes,
\t\t\ttext: \"text/plain\",
\t\t\thtml: \"text/html\",
\t\t\txml: \"application/xml, text/xml\",
\t\t\tjson: \"application/json, text/javascript\"
\t\t},

\t\tcontents: {
\t\t\txml: /\\bxml\\b/,
\t\t\thtml: /\\bhtml/,
\t\t\tjson: /\\bjson\\b/
\t\t},

\t\tresponseFields: {
\t\t\txml: \"responseXML\",
\t\t\ttext: \"responseText\",
\t\t\tjson: \"responseJSON\"
\t\t},

\t\t// Data converters
\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\tconverters: {

\t\t\t// Convert anything to text
\t\t\t\"* text\": String,

\t\t\t// Text to html (true = no transformation)
\t\t\t\"text html\": true,

\t\t\t// Evaluate text as a json expression
\t\t\t\"text json\": JSON.parse,

\t\t\t// Parse text as xml
\t\t\t\"text xml\": jQuery.parseXML
\t\t},

\t\t// For options that shouldn't be deep extended:
\t\t// you can add your own custom options here if
\t\t// and when you create one that shouldn't be
\t\t// deep extended (see ajaxExtend)
\t\tflatOptions: {
\t\t\turl: true,
\t\t\tcontext: true
\t\t}
\t},

\t// Creates a full fledged settings object into target
\t// with both ajaxSettings and settings fields.
\t// If target is omitted, writes into ajaxSettings.
\tajaxSetup: function( target, settings ) {
\t\treturn settings ?

\t\t\t// Building a settings object
\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t// Extending ajaxSettings
\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t},

\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t// Main method
\tajax: function( url, options ) {

\t\t// If url is an object, simulate pre-1.5 signature
\t\tif ( typeof url === \"object\" ) {
\t\t\toptions = url;
\t\t\turl = undefined;
\t\t}

\t\t// Force options to be an object
\t\toptions = options || {};

\t\tvar transport,

\t\t\t// URL without anti-cache param
\t\t\tcacheURL,

\t\t\t// Response headers
\t\t\tresponseHeadersString,
\t\t\tresponseHeaders,

\t\t\t// timeout handle
\t\t\ttimeoutTimer,

\t\t\t// Url cleanup var
\t\t\turlAnchor,

\t\t\t// Request state (becomes false upon send and true upon completion)
\t\t\tcompleted,

\t\t\t// To know if global events are to be dispatched
\t\t\tfireGlobals,

\t\t\t// Loop variable
\t\t\ti,

\t\t\t// uncached part of the url
\t\t\tuncached,

\t\t\t// Create the final options object
\t\t\ts = jQuery.ajaxSetup( {}, options ),

\t\t\t// Callbacks context
\t\t\tcallbackContext = s.context || s,

\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\tglobalEventContext = s.context &&
\t\t\t\t( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\t\tjQuery( callbackContext ) :
\t\t\t\t\tjQuery.event,

\t\t\t// Deferreds
\t\t\tdeferred = jQuery.Deferred(),
\t\t\tcompleteDeferred = jQuery.Callbacks( \"once memory\" ),

\t\t\t// Status-dependent callbacks
\t\t\tstatusCode = s.statusCode || {},

\t\t\t// Headers (they are sent all at once)
\t\t\trequestHeaders = {},
\t\t\trequestHeadersNames = {},

\t\t\t// Default abort message
\t\t\tstrAbort = \"canceled\",

\t\t\t// Fake xhr
\t\t\tjqXHR = {
\t\t\t\treadyState: 0,

\t\t\t\t// Builds headers hashtable if needed
\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\tvar match;
\t\t\t\t\tif ( completed ) {
\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\twhile ( ( match = rheaders.exec( responseHeadersString ) ) ) {
\t\t\t\t\t\t\t\tresponseHeaders[ match[ 1 ].toLowerCase() + \" \" ] =
\t\t\t\t\t\t\t\t\t( responseHeaders[ match[ 1 ].toLowerCase() + \" \" ] || [] )
\t\t\t\t\t\t\t\t\t\t.concat( match[ 2 ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() + \" \" ];
\t\t\t\t\t}
\t\t\t\t\treturn match == null ? null : match.join( \", \" );
\t\t\t\t},

\t\t\t\t// Raw string
\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\treturn completed ? responseHeadersString : null;
\t\t\t\t},

\t\t\t\t// Caches the header
\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\tif ( completed == null ) {
\t\t\t\t\t\tname = requestHeadersNames[ name.toLowerCase() ] =
\t\t\t\t\t\t\trequestHeadersNames[ name.toLowerCase() ] || name;
\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Overrides response content-type header
\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\tif ( completed == null ) {
\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\tvar code;
\t\t\t\t\tif ( map ) {
\t\t\t\t\t\tif ( completed ) {

\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t// Lazy-add the new callbacks in a way that preserves old ones
\t\t\t\t\t\t\tfor ( code in map ) {
\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Cancel the request
\t\t\t\tabort: function( statusText ) {
\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t}
\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t};

\t\t// Attach deferreds
\t\tdeferred.promise( jqXHR );

\t\t// Add protocol if not provided (prefilters might expect it)
\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t// We also use the url parameter if available
\t\ts.url = ( ( url || s.url || location.href ) + \"\" )
\t\t\t.replace( rprotocol, location.protocol + \"//\" );

\t\t// Alias method option to type as per ticket #12004
\t\ts.type = options.method || options.type || s.method || s.type;

\t\t// Extract dataTypes list
\t\ts.dataTypes = ( s.dataType || \"*\" ).toLowerCase().match( rnothtmlwhite ) || [ \"\" ];

\t\t// A cross-domain request is in order when the origin doesn't match the current origin.
\t\tif ( s.crossDomain == null ) {
\t\t\turlAnchor = document.createElement( \"a\" );

\t\t\t// Support: IE <=8 - 11, Edge 12 - 15
\t\t\t// IE throws exception on accessing the href property if url is malformed,
\t\t\t// e.g. http://example.com:80x/
\t\t\ttry {
\t\t\t\turlAnchor.href = s.url;

\t\t\t\t// Support: IE <=8 - 11 only
\t\t\t\t// Anchor's host property isn't correctly set when s.url is relative
\t\t\t\turlAnchor.href = urlAnchor.href;
\t\t\t\ts.crossDomain = originAnchor.protocol + \"//\" + originAnchor.host !==
\t\t\t\t\turlAnchor.protocol + \"//\" + urlAnchor.host;
\t\t\t} catch ( e ) {

\t\t\t\t// If there is an error parsing the URL, assume it is crossDomain,
\t\t\t\t// it can be rejected by the transport if it is invalid
\t\t\t\ts.crossDomain = true;
\t\t\t}
\t\t}

\t\t// Convert data if not already a string
\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t}

\t\t// Apply prefilters
\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t// If request was aborted inside a prefilter, stop there
\t\tif ( completed ) {
\t\t\treturn jqXHR;
\t\t}

\t\t// We can fire global events as of now if asked to
\t\t// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
\t\tfireGlobals = jQuery.event && s.global;

\t\t// Watch for a new set of requests
\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\tjQuery.event.trigger( \"ajaxStart\" );
\t\t}

\t\t// Uppercase the type
\t\ts.type = s.type.toUpperCase();

\t\t// Determine if request has content
\t\ts.hasContent = !rnoContent.test( s.type );

\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t// and/or If-None-Match header later on
\t\t// Remove hash to simplify url manipulation
\t\tcacheURL = s.url.replace( rhash, \"\" );

\t\t// More options handling for requests with no content
\t\tif ( !s.hasContent ) {

\t\t\t// Remember the hash so we can put it back
\t\t\tuncached = s.url.slice( cacheURL.length );

\t\t\t// If data is available and should be processed, append data to url
\t\t\tif ( s.data && ( s.processData || typeof s.data === \"string\" ) ) {
\t\t\t\tcacheURL += ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data;

\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\tdelete s.data;
\t\t\t}

\t\t\t// Add or update anti-cache param if needed
\t\t\tif ( s.cache === false ) {
\t\t\t\tcacheURL = cacheURL.replace( rantiCache, \"\$1\" );
\t\t\t\tuncached = ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + ( nonce++ ) + uncached;
\t\t\t}

\t\t\t// Put hash and anti-cache on the URL that will be requested (gh-1732)
\t\t\ts.url = cacheURL + uncached;

\t\t// Change '%20' to '+' if this is encoded form body content (gh-2658)
\t\t} else if ( s.data && s.processData &&
\t\t\t( s.contentType || \"\" ).indexOf( \"application/x-www-form-urlencoded\" ) === 0 ) {
\t\t\ts.data = s.data.replace( r20, \"+\" );
\t\t}

\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\tif ( s.ifModified ) {
\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t}
\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t}
\t\t}

\t\t// Set the correct header, if data is being sent
\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t}

\t\t// Set the Accepts header for the server, depending on the dataType
\t\tjqXHR.setRequestHeader(
\t\t\t\"Accept\",
\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
\t\t\t\ts.accepts[ s.dataTypes[ 0 ] ] +
\t\t\t\t\t( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\ts.accepts[ \"*\" ]
\t\t);

\t\t// Check for headers option
\t\tfor ( i in s.headers ) {
\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t}

\t\t// Allow custom headers/mimetypes and early abort
\t\tif ( s.beforeSend &&
\t\t\t( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

\t\t\t// Abort if not done already and return
\t\t\treturn jqXHR.abort();
\t\t}

\t\t// Aborting is no longer a cancellation
\t\tstrAbort = \"abort\";

\t\t// Install callbacks on deferreds
\t\tcompleteDeferred.add( s.complete );
\t\tjqXHR.done( s.success );
\t\tjqXHR.fail( s.error );

\t\t// Get transport
\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t// If no transport, we auto-abort
\t\tif ( !transport ) {
\t\t\tdone( -1, \"No Transport\" );
\t\t} else {
\t\t\tjqXHR.readyState = 1;

\t\t\t// Send global event
\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t}

\t\t\t// If request was aborted inside ajaxSend, stop there
\t\t\tif ( completed ) {
\t\t\t\treturn jqXHR;
\t\t\t}

\t\t\t// Timeout
\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\ttimeoutTimer = window.setTimeout( function() {
\t\t\t\t\tjqXHR.abort( \"timeout\" );
\t\t\t\t}, s.timeout );
\t\t\t}

\t\t\ttry {
\t\t\t\tcompleted = false;
\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t} catch ( e ) {

\t\t\t\t// Rethrow post-completion exceptions
\t\t\t\tif ( completed ) {
\t\t\t\t\tthrow e;
\t\t\t\t}

\t\t\t\t// Propagate others as results
\t\t\t\tdone( -1, e );
\t\t\t}
\t\t}

\t\t// Callback for when everything is done
\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\tstatusText = nativeStatusText;

\t\t\t// Ignore repeat invocations
\t\t\tif ( completed ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tcompleted = true;

\t\t\t// Clear timeout if it exists
\t\t\tif ( timeoutTimer ) {
\t\t\t\twindow.clearTimeout( timeoutTimer );
\t\t\t}

\t\t\t// Dereference transport for early garbage collection
\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\ttransport = undefined;

\t\t\t// Cache response headers
\t\t\tresponseHeadersString = headers || \"\";

\t\t\t// Set readyState
\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t// Determine if successful
\t\t\tisSuccess = status >= 200 && status < 300 || status === 304;

\t\t\t// Get response data
\t\t\tif ( responses ) {
\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t}

\t\t\t// Convert no matter what (that way responseXXX fields are always set)
\t\t\tresponse = ajaxConvert( s, response, jqXHR, isSuccess );

\t\t\t// If successful, handle type chaining
\t\t\tif ( isSuccess ) {

\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"Last-Modified\" );
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"etag\" );
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// if no content
\t\t\t\tif ( status === 204 || s.type === \"HEAD\" ) {
\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t// if not modified
\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t// If we have data, let's convert it
\t\t\t\t} else {
\t\t\t\t\tstatusText = response.state;
\t\t\t\t\tsuccess = response.data;
\t\t\t\t\terror = response.error;
\t\t\t\t\tisSuccess = !error;
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// Extract error from statusText and normalize for non-aborts
\t\t\t\terror = statusText;
\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Set data for the fake xhr object
\t\t\tjqXHR.status = status;
\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t// Success/Error
\t\t\tif ( isSuccess ) {
\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t} else {
\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t}

\t\t\t// Status-dependent callbacks
\t\t\tjqXHR.statusCode( statusCode );
\t\t\tstatusCode = undefined;

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t}

\t\t\t// Complete
\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );

\t\t\t\t// Handle the global AJAX counter
\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\tjQuery.event.trigger( \"ajaxStop\" );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn jqXHR;
\t},

\tgetJSON: function( url, data, callback ) {
\t\treturn jQuery.get( url, data, callback, \"json\" );
\t},

\tgetScript: function( url, callback ) {
\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t}
} );

jQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\tjQuery[ method ] = function( url, data, callback, type ) {

\t\t// Shift arguments if data argument was omitted
\t\tif ( isFunction( data ) ) {
\t\t\ttype = type || callback;
\t\t\tcallback = data;
\t\t\tdata = undefined;
\t\t}

\t\t// The url can be an options object (which then must have .url)
\t\treturn jQuery.ajax( jQuery.extend( {
\t\t\turl: url,
\t\t\ttype: method,
\t\t\tdataType: type,
\t\t\tdata: data,
\t\t\tsuccess: callback
\t\t}, jQuery.isPlainObject( url ) && url ) );
\t};
} );


jQuery._evalUrl = function( url, options ) {
\treturn jQuery.ajax( {
\t\turl: url,

\t\t// Make this explicit, since user can override this through ajaxSetup (#11264)
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tcache: true,
\t\tasync: false,
\t\tglobal: false,

\t\t// Only evaluate the response if it is successful (gh-4126)
\t\t// dataFilter is not invoked for failure responses, so using it instead
\t\t// of the default converter is kludgy but it works.
\t\tconverters: {
\t\t\t\"text script\": function() {}
\t\t},
\t\tdataFilter: function( response ) {
\t\t\tjQuery.globalEval( response, options );
\t\t}
\t} );
};


jQuery.fn.extend( {
\twrapAll: function( html ) {
\t\tvar wrap;

\t\tif ( this[ 0 ] ) {
\t\t\tif ( isFunction( html ) ) {
\t\t\t\thtml = html.call( this[ 0 ] );
\t\t\t}

\t\t\t// The elements to wrap the target around
\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map( function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t} ).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( isFunction( html ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call( this, i ) );
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t} );
\t},

\twrap: function( html ) {
\t\tvar htmlIsFunction = isFunction( html );

\t\treturn this.each( function( i ) {
\t\t\tjQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
\t\t} );
\t},

\tunwrap: function( selector ) {
\t\tthis.parent( selector ).not( \"body\" ).each( function() {
\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t} );
\t\treturn this;
\t}
} );


jQuery.expr.pseudos.hidden = function( elem ) {
\treturn !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
\treturn !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new window.XMLHttpRequest();
\t} catch ( e ) {}
};

var xhrSuccessStatus = {

\t\t// File protocol always yields status code 0, assume 200
\t\t0: 200,

\t\t// Support: IE <=9 only
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
\tvar callback, errorCallback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr();

\t\t\t\txhr.open(
\t\t\t\t\toptions.type,
\t\t\t\t\toptions.url,
\t\t\t\t\toptions.async,
\t\t\t\t\toptions.username,
\t\t\t\t\toptions.password
\t\t\t\t);

\t\t\t\t// Apply custom fields if provided
\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Override mime type if needed
\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t}

\t\t\t\t// X-Requested-With header
\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\tif ( !options.crossDomain && !headers[ \"X-Requested-With\" ] ) {
\t\t\t\t\theaders[ \"X-Requested-With\" ] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tcallback = errorCallback = xhr.onload =
\t\t\t\t\t\t\t\txhr.onerror = xhr.onabort = xhr.ontimeout =
\t\t\t\t\t\t\t\t\txhr.onreadystatechange = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {

\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t// On a manual native abort, IE9 throws
\t\t\t\t\t\t\t\t// errors on any property access that is not readyState
\t\t\t\t\t\t\t\tif ( typeof xhr.status !== \"number\" ) {
\t\t\t\t\t\t\t\t\tcomplete( 0, \"error\" );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcomplete(

\t\t\t\t\t\t\t\t\t\t// File: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,

\t\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t\t// IE9 has no XHR2 but throws on binary (trac-11426)
\t\t\t\t\t\t\t\t\t// For XHR2 non-text, let the caller handle it (gh-2498)
\t\t\t\t\t\t\t\t\t( xhr.responseType || \"text\" ) !== \"text\"  ||
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText !== \"string\" ?
\t\t\t\t\t\t\t\t\t\t{ binary: xhr.response } :
\t\t\t\t\t\t\t\t\t\t{ text: xhr.responseText },
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\terrorCallback = xhr.onerror = xhr.ontimeout = callback( \"error\" );

\t\t\t\t// Support: IE 9 only
\t\t\t\t// Use onreadystatechange to replace onabort
\t\t\t\t// to handle uncaught aborts
\t\t\t\tif ( xhr.onabort !== undefined ) {
\t\t\t\t\txhr.onabort = errorCallback;
\t\t\t\t} else {
\t\t\t\t\txhr.onreadystatechange = function() {

\t\t\t\t\t\t// Check readyState before timeout as it changes
\t\t\t\t\t\tif ( xhr.readyState === 4 ) {

\t\t\t\t\t\t\t// Allow onerror to be called first,
\t\t\t\t\t\t\t// but that will not handle a native abort
\t\t\t\t\t\t\t// Also, save errorCallback to a variable
\t\t\t\t\t\t\t// as xhr.onerror cannot be accessed
\t\t\t\t\t\t\twindow.setTimeout( function() {
\t\t\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\t\t\terrorCallback();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = callback( \"abort\" );

\t\t\t\ttry {

\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
\tif ( s.crossDomain ) {
\t\ts.contents.script = false;
\t}
} );

// Install script dataType
jQuery.ajaxSetup( {
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, \" +
\t\t\t\"application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /\\b(?:java|ecma)script\\b/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {

\t// This transport only deals with cross domain or forced-by-attrs requests
\tif ( s.crossDomain || s.scriptAttrs ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery( \"<script>\" )
\t\t\t\t\t.attr( s.scriptAttrs || {} )
\t\t\t\t\t.prop( { charset: s.scriptCharset, src: s.url } )
\t\t\t\t\t.on( \"load error\", callback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t} );

\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
\t\t\t},
\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );




var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" &&
\t\t\t\t( s.contentType || \"\" )
\t\t\t\t\t.indexOf( \"application/x-www-form-urlencoded\" ) === 0 &&
\t\t\t\trjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[ \"script json\" ] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// Force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always( function() {

\t\t\t// If previous value didn't exist - remove it
\t\t\tif ( overwritten === undefined ) {
\t\t\t\tjQuery( window ).removeProp( callbackName );

\t\t\t// Otherwise restore preexisting value
\t\t\t} else {
\t\t\t\twindow[ callbackName ] = overwritten;
\t\t\t}

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {

\t\t\t\t// Make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// Save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t} );

\t\t// Delegate to script
\t\treturn \"script\";
\t}
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
\tvar body = document.implementation.createHTMLDocument( \"\" ).body;
\tbody.innerHTML = \"<form></form><form></form>\";
\treturn body.childNodes.length === 2;
} )();


// Argument \"data\" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( typeof data !== \"string\" ) {
\t\treturn [];
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}

\tvar base, parsed, scripts;

\tif ( !context ) {

\t\t// Stop scripts or inline event handlers from being executed immediately
\t\t// by using document.implementation
\t\tif ( support.createHTMLDocument ) {
\t\t\tcontext = document.implementation.createHTMLDocument( \"\" );

\t\t\t// Set the base href for the created document
\t\t\t// so any parsed elements with URLs
\t\t\t// are based on the document's URL (gh-2965)
\t\t\tbase = context.createElement( \"base\" );
\t\t\tbase.href = document.location.href;
\t\t\tcontext.head.appendChild( base );
\t\t} else {
\t\t\tcontext = document;
\t\t}
\t}

\tparsed = rsingleTag.exec( data );
\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[ 1 ] ) ];
\t}

\tparsed = buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};


/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf( \" \" );

\tif ( off > -1 ) {
\t\tselector = stripAndCollapse( url.slice( off ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax( {
\t\t\turl: url,

\t\t\t// If \"type\" variable is undefined, then \"GET\" method will be used.
\t\t\t// Make value of this field explicit since
\t\t\t// user can override it through ajaxSetup method
\t\t\ttype: type || \"GET\",
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t} ).done( function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery( \"<div>\" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t// If the request succeeds, this function gets \"data\", \"status\", \"jqXHR\"
\t\t// but they are ignored because response was set above.
\t\t// If it fails, this function gets \"jqXHR\", \"status\", \"error\"
\t\t} ).always( callback && function( jqXHR, status ) {
\t\t\tself.each( function() {
\t\t\t\tcallback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t\t} );
\t\t} );
\t}

\treturn this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
\t\"ajaxStart\",
\t\"ajaxStop\",
\t\"ajaxComplete\",
\t\"ajaxError\",
\t\"ajaxSuccess\",
\t\"ajaxSend\"
], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
} );




jQuery.expr.pseudos.animated = function( elem ) {
\treturn jQuery.grep( jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t} ).length;
};




jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// Set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t( curCSSTop + curCSSLeft ).indexOf( \"auto\" ) > -1;

\t\t// Need to be able to calculate position if either
\t\t// top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;

\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( isFunction( options ) ) {

\t\t\t// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
\t\t\toptions = options.call( elem, i, jQuery.extend( {}, curOffset ) );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );

\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend( {

\t// offset() relates an element's border box to the document origin
\toffset: function( options ) {

\t\t// Preserve chaining for setter
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each( function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t} );
\t\t}

\t\tvar rect, win,
\t\t\telem = this[ 0 ];

\t\tif ( !elem ) {
\t\t\treturn;
\t\t}

\t\t// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
\t\t// Support: IE <=11 only
\t\t// Running getBoundingClientRect on a
\t\t// disconnected node in IE throws an error
\t\tif ( !elem.getClientRects().length ) {
\t\t\treturn { top: 0, left: 0 };
\t\t}

\t\t// Get document-relative position by adding viewport scroll to viewport-relative gBCR
\t\trect = elem.getBoundingClientRect();
\t\twin = elem.ownerDocument.defaultView;
\t\treturn {
\t\t\ttop: rect.top + win.pageYOffset,
\t\t\tleft: rect.left + win.pageXOffset
\t\t};
\t},

\t// position() relates an element's margin box to its offset parent's padding box
\t// This corresponds to the behavior of CSS absolute positioning
\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset, doc,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// position:fixed elements are offset from the viewport, which itself always has zero offset
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {

\t\t\t// Assume position:fixed implies availability of getBoundingClientRect
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {
\t\t\toffset = this.offset();

\t\t\t// Account for the *real* offset parent, which can be the document or its root element
\t\t\t// when a statically positioned element is identified
\t\t\tdoc = elem.ownerDocument;
\t\t\toffsetParent = elem.offsetParent || doc.documentElement;
\t\t\twhile ( offsetParent &&
\t\t\t\t( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
\t\t\t\tjQuery.css( offsetParent, \"position\" ) === \"static\" ) {

\t\t\t\toffsetParent = offsetParent.parentNode;
\t\t\t}
\t\t\tif ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

\t\t\t\t// Incorporate borders into its offset, since they are outside its content origin
\t\t\t\tparentOffset = jQuery( offsetParent ).offset();
\t\t\t\tparentOffset.top += jQuery.css( offsetParent, \"borderTopWidth\", true );
\t\t\t\tparentOffset.left += jQuery.css( offsetParent, \"borderLeftWidth\", true );
\t\t\t}
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\t// This method will return documentElement in the following cases:
\t// 1) For the element inside the iframe without offsetParent, this method will return
\t//    documentElement of the parent window
\t// 2) For the hidden or detached element
\t// 3) For body or html element, i.e. in case of the html node - it will return itself
\t//
\t// but those exceptions were never presented as a real life use-cases
\t// and might be considered as more preferable results.
\t//
\t// This logic, however, is not guaranteed and can change at any point in the future
\toffsetParent: function() {
\t\treturn this.map( function() {
\t\t\tvar offsetParent = this.offsetParent;

\t\t\twhile ( offsetParent && jQuery.css( offsetParent, \"position\" ) === \"static\" ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || documentElement;
\t\t} );
\t}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {

\t\t\t// Coalesce documents and windows
\t\t\tvar win;
\t\t\tif ( isWindow( elem ) ) {
\t\t\t\twin = elem;
\t\t\t} else if ( elem.nodeType === 9 ) {
\t\t\t\twin = elem.defaultView;
\t\t\t}

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : win.pageXOffset,
\t\t\t\t\ttop ? val : win.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length );
\t};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );

\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name },
\t\tfunction( defaultExtra, funcName ) {

\t\t// Margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( isWindow( elem ) ) {

\t\t\t\t\t// \$( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
\t\t\t\t\treturn funcName.indexOf( \"outer\" ) === 0 ?
\t\t\t\t\t\telem[ \"inner\" + name ] :
\t\t\t\t\t\telem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?

\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable );
\t\t};
\t} );
} );


jQuery.each( ( \"blur focus focusin focusout resize scroll click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup contextmenu\" ).split( \" \" ),
\tfunction( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
} );

jQuery.fn.extend( {
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t}
} );




jQuery.fn.extend( {

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {

\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ?
\t\t\tthis.off( selector, \"**\" ) :
\t\t\tthis.off( types, selector || \"**\", fn );
\t}
} );

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
jQuery.proxy = function( fn, context ) {
\tvar tmp, args, proxy;

\tif ( typeof context === \"string\" ) {
\t\ttmp = fn[ context ];
\t\tcontext = fn;
\t\tfn = tmp;
\t}

\t// Quick check to determine if target is callable, in the spec
\t// this throws a TypeError, but we will just return undefined.
\tif ( !isFunction( fn ) ) {
\t\treturn undefined;
\t}

\t// Simulated bind
\targs = slice.call( arguments, 2 );
\tproxy = function() {
\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t};

\t// Set the guid of unique handler to the same of original handler, so it can be removed
\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\treturn proxy;
};

jQuery.holdReady = function( hold ) {
\tif ( hold ) {
\t\tjQuery.readyWait++;
\t} else {
\t\tjQuery.ready( true );
\t}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function( obj ) {

\t// As of jQuery 3.0, isNumeric is limited to
\t// strings and numbers (primitives or objects)
\t// that can be coerced to finite numbers (gh-2662)
\tvar type = jQuery.type( obj );
\treturn ( type === \"number\" || type === \"string\" ) &&

\t\t// parseFloat NaNs numeric-cast false positives (\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t!isNaN( obj - parseFloat( obj ) );
};




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t} );
}




var

\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( !noGlobal ) {
\twindow.jQuery = window.\$ = jQuery;
}




return jQuery;
} );
", "room/startbootstrap-shop-homepage-gh-pages/vendor/jquery/jquery.js", "/home/houssem_saidi/CSC4101/AgVoy/templates/room/startbootstrap-shop-homepage-gh-pages/vendor/jquery/jquery.js");
    }
}
