parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"I15V":[function(require,module,exports) {
"use strict";function t(e){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(e)}function e(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function n(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function i(t,e,i){return e&&n(t.prototype,e),i&&n(t,i),t}function r(e,n){return!n||"object"!==t(n)&&"function"!=typeof n?u(e):n}function u(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function o(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&f(t,e)}function a(t){var e="function"==typeof Map?new Map:void 0;return(a=function(t){if(null===t||!l(t))return t;if("function"!=typeof t)throw new TypeError("Super expression must either be null or a function");if(void 0!==e){if(e.has(t))return e.get(t);e.set(t,n)}function n(){return c(t,arguments,h(this).constructor)}return n.prototype=Object.create(t.prototype,{constructor:{value:n,enumerable:!1,writable:!0,configurable:!0}}),f(n,t)})(t)}function s(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],function(){})),!0}catch(t){return!1}}function c(t,e,n){return(c=s()?Reflect.construct:function(t,e,n){var i=[null];i.push.apply(i,e);var r=new(Function.bind.apply(t,i));return n&&f(r,n.prototype),r}).apply(null,arguments)}function l(t){return-1!==Function.toString.call(t).indexOf("[native code]")}function f(t,e){return(f=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function h(t){return(h=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var p=["input","change"],v=["min","max","step","value","disabled","value-precision"],d={value:"valuenow",min:"valuemin",max:"valuemax"},b='\n  <div class="thumb-wrapper">\n    <div class="thumb"></div>\n  </div>\n',m=function(t){function n(){var t;return e(this,n),(t=r(this,h(n).call(this)))._startHandler=function(e){t.focus(),t.classList.add("touch-active"),t.setPointerCapture(e.pointerId),t.addEventListener("pointermove",t._moveHandler,!1),t._reflectValue(e)},t._moveHandler=function(e){t._reflectValue(e)},t._endHandler=function(e){t.classList.remove("touch-active"),t.releasePointerCapture(e.pointerId),t.removeEventListener("pointermove",t._moveHandler,!1),t.dispatchEvent(new Event("change",{bubbles:!0}))},t._keyCodeHandler=function(e){var n=e.code,i=["ArrowUp","ArrowRight"].includes(n),r=["ArrowDown","ArrowLeft"].includes(n);i?(e.preventDefault(),t.stepUp()):r&&(e.preventDefault(),t.stepDown())},t._reflectValue=function(e){var n=Boolean(t._isRTL),i=Number(t.min),r=Number(t.max),u=t.value,o=e.target.offsetWidth,a=Math.min(Math.max(e.offsetX,0),o)/o,s=i+(n?1-a:a)*(r-i),c=t._constrainValue(s);u!==c&&(t.value=c,t.dispatchEvent(new Event("input",{bubbles:!0})))},t._ignoreChange=!1,t._isRTL="rtl"===t.getAttribute("dir"),t._defaultValue=t.value,t}return o(n,a(HTMLElement)),i(n,[{key:"connectedCallback",value:function(){this.firstChild||(this.innerHTML=b),this.addEventListener("pointerdown",this._startHandler,!1),this.addEventListener("pointerup",this._endHandler,!1),this.addEventListener("keydown",this._keyCodeHandler,!1),this._update(),this.setAttribute("tabindex","0"),this.setAttribute("role","slider"),g(this,"value",this.value),g(this,"min",this.min),g(this,"max",this.max)}},{key:"disconnectedCallback",value:function(){this.removeEventListener("pointerdown",this._startHandler,!1),this.removeEventListener("pointerup",this._endHandler,!1),this.removeEventListener("keydown",this._keyCodeHandler,!1)}},{key:"attributeChangedCallback",value:function(t,e,n){e===n||this._ignoreChange||(this._update(),g(this,t,n))}},{key:"_constrainValue",value:function(t){var e=Number(this.min),n=Number(this.max),i=Number(this.step),r=Number(this.valuePrecision)||y(this.step)||0,u=Math.min(Math.max(t,e),n),o=Math.round(u/i)*i;return r?o.toFixed(r):Math.round(o).toString()}},{key:"_update",value:function(){var t=Boolean(this._isRTL),e=Number(this.min),n=Number(this.max),i=100*(Number(this.value)-e)/(n-e),r=t?100-i:i;this.style.setProperty("--value-percent",r+"%")}},{key:"stepUp",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:this.step,e=Number(this.value),n=this._constrainValue(e+Number(t));e!==n&&(this.value=n,this.dispatchEvent(new Event("input",{bubbles:!0})),this.dispatchEvent(new Event("change",{bubbles:!0})))}},{key:"stepDown",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:this.step,e=Number(this.value),n=this._constrainValue(e-Number(t));e!==n&&(this.value=n,this.dispatchEvent(new Event("input",{bubbles:!0})),this.dispatchEvent(new Event("change",{bubbles:!0})))}},{key:"_computedValue",get:function(){var t=Number(this.min),e=Number(this.max);return String(e<t?t:t+(e-t)/2)}},{key:"min",get:function(){return this.getAttribute("min")||"0"},set:function(t){this.setAttribute("min",t)}},{key:"max",get:function(){return this.getAttribute("max")||"100"},set:function(t){this.setAttribute("max",t)}},{key:"step",get:function(){return this.getAttribute("step")||"1"},set:function(t){this.setAttribute("step",t)}},{key:"value",get:function(){return this.getAttribute("value")||this._computedValue},set:function(t){this.setAttribute("value",t)}},{key:"disabled",get:function(){return this.getAttribute("disabled")||!1},set:function(t){this.setAttribute("disabled",t)}},{key:"valuePrecision",get:function(){return this.getAttribute("value-precision")||""},set:function(t){this.setAttribute("value-precision",t)}},{key:"defaultValue",get:function(){return this._defaultValue},set:function(t){this._defaultValue=t}}],[{key:"observedAttributes",get:function(){return v}}]),n}();function y(){var t=(arguments.length>0&&void 0!==arguments[0]?arguments[0]:"").split(".")[1];return t?t.length:0}function g(t,e,n){var i=d[e];i&&t.setAttribute("aria-".concat(i),n)}var _=m;exports.default=_;
},{}],"Focm":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),Object.defineProperty(exports,"default",{enumerable:!0,get:function(){return e.default}});var e=t(require("./range-slider-element"));function t(e){return e&&e.__esModule?e:{default:e}}var r="range-slider";window.customElements.get(r)||(window.RangeSliderElement=e.default,window.customElements.define(r,e.default));
},{"./range-slider-element":"I15V"}]},{},["Focm"], null)
//# sourceMappingURL=/index.js.map