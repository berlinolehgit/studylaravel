(function(){"use strict";function j(Y){W.push(Y),1==W.length&&V()}function o(){for(;W.length;)W[0](),W.shift()}function s(Y){this.a=X,this.b=void 0,this.f=[];var Z=this;try{Y(function($){Q(Z,$)},function($){R(Z,$)})}catch($){R(Z,$)}}function P(Y){return new s(function(Z){Z(Y)})}function Q(Y,Z){if(Y.a==X){if(Z==Y)throw new TypeError;var $=!1;try{var _=Z&&Z.then;if(null!=Z&&"object"==typeof Z&&"function"==typeof _)return void _.call(Z,function(aa){$||Q(Y,aa),$=!0},function(aa){$||R(Y,aa),$=!0})}catch(aa){return void($||R(Y,aa))}Y.a=0,Y.b=Z,S(Y)}}function R(Y,Z){if(Y.a==X){if(Z==Y)throw new TypeError;Y.a=1,Y.b=Z,S(Y)}}function S(Y){j(function(){if(Y.a!=X)for(;Y.f.length;){var Z=Y.f.shift(),$=Z[0],_=Z[1],aa=Z[2],Z=Z[3];try{0==Y.a?"function"==typeof $?aa($.call(void 0,Y.b)):aa(Y.b):1==Y.a&&("function"==typeof _?aa(_.call(void 0,Y.b)):Z(Y.b))}catch(ba){Z(ba)}}})}var V,W=[];V=function(){setTimeout(o)};var X=2;s.prototype.g=function(Y){return this.c(void 0,Y)},s.prototype.c=function(Y,Z){var $=this;return new s(function(_,aa){$.f.push([Y,Z,_,aa]),S($)})};window.Promise||(window.Promise=s,window.Promise.resolve=P,window.Promise.reject=function(Y){return new s(function(Z,$){$(Y)})},window.Promise.race=function(Y){return new s(function(Z,$){for(var _=0;_<Y.length;_+=1)P(Y[_]).c(Z,$)})},window.Promise.all=function(Y){return new s(function(Z,$){function _(da){return function(ea){ba[da]=ea,aa+=1,aa==Y.length&&Z(ba)}}var aa=0,ba=[];0==Y.length&&Z(ba);for(var ca=0;ca<Y.length;ca+=1)P(Y[ca]).c(_(ca),$)})},window.Promise.prototype.then=s.prototype.c,window.Promise.prototype["catch"]=s.prototype.g)})(),function(){function j($,_){document.addEventListener?$.addEventListener("scroll",_,!1):$.attachEvent("scroll",_)}function o($){document.body?$():document.addEventListener?document.addEventListener("DOMContentLoaded",function _(){document.removeEventListener("DOMContentLoaded",_),$()}):document.attachEvent("onreadystatechange",function _(){("interactive"==document.readyState||"complete"==document.readyState)&&(document.detachEvent("onreadystatechange",_),$())})}function s($){this.a=document.createElement("div"),this.a.setAttribute("aria-hidden","true"),this.a.appendChild(document.createTextNode($)),this.b=document.createElement("span"),this.c=document.createElement("span"),this.h=document.createElement("span"),this.f=document.createElement("span"),this.g=-1,this.b.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.c.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.f.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.h.style.cssText="display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;",this.b.appendChild(this.h),this.c.appendChild(this.f),this.a.appendChild(this.b),this.a.appendChild(this.c)}function O($,_){$.a.style.cssText="max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:"+_+";"}function P($){var _=$.a.offsetWidth,aa=_+100;return $.f.style.width=aa+"px",$.c.scrollLeft=aa,$.b.scrollLeft=$.b.scrollWidth+100,$.g!==_&&($.g=_,!0)}function Q($,_){function aa(){var ca=ba;P(ca)&&ca.a.parentNode&&_(ca.g)}var ba=$;j($.b,aa),j($.c,aa),P($)}function R($,_){var aa=_||{};this.family=$,this.style=aa.style||"normal",this.weight=aa.weight||"normal",this.stretch=aa.stretch||"normal"}function S(){if(null==X)if(T()&&/Apple/.test(window.navigator.vendor)){var $=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))(?:\.([0-9]+))/.exec(window.navigator.userAgent);X=!!$&&603>parseInt($[1],10)}else X=!1;return X}function T(){return null==Z&&(Z=!!document.fonts),Z}function U(){if(null==Y){var $=document.createElement("div");try{$.style.font="condensed 100px sans-serif"}catch(_){}Y=""!==$.style.font}return Y}function V($,_){return[$.style,$.weight,U()?$.stretch:"","100px",_].join(" ")}var W=null,X=null,Y=null,Z=null;R.prototype.load=function($,_){var aa=this,ba=$||"BESbswy",ca=0,da=_||3E3,ea=new Date().getTime();return new Promise(function(fa,ga){if(T()&&!S()){var ha=new Promise(function(ja,ka){function la(){new Date().getTime()-ea>=da?ka():document.fonts.load(V(aa,"\""+aa.family+"\""),ba).then(function(ma){1<=ma.length?ja():setTimeout(la,25)},function(){ka()})}la()}),ia=new Promise(function(ja,ka){ca=setTimeout(ka,da)});Promise.race([ia,ha]).then(function(){clearTimeout(ca),fa(aa)},function(){ga(aa)})}else o(function(){function ja(){var va;(va=-1!=oa&&-1!=pa||-1!=oa&&-1!=qa||-1!=pa&&-1!=qa)&&((va=oa!=pa&&oa!=qa&&pa!=qa)||(null===W&&(va=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent),W=!!va&&(536>parseInt(va[1],10)||536===parseInt(va[1],10)&&11>=parseInt(va[2],10))),va=W&&(oa==ra&&pa==ra&&qa==ra||oa==sa&&pa==sa&&qa==sa||oa==ta&&pa==ta&&qa==ta)),va=!va),va&&(ua.parentNode&&ua.parentNode.removeChild(ua),clearTimeout(ca),fa(aa))}function ka(){if(new Date().getTime()-ea>=da)ua.parentNode&&ua.parentNode.removeChild(ua),ga(aa);else{var va=document.hidden;(!0===va||void 0===va)&&(oa=la.a.offsetWidth,pa=ma.a.offsetWidth,qa=na.a.offsetWidth,ja()),ca=setTimeout(ka,50)}}var la=new s(ba),ma=new s(ba),na=new s(ba),oa=-1,pa=-1,qa=-1,ra=-1,sa=-1,ta=-1,ua=document.createElement("div");ua.dir="ltr",O(la,V(aa,"sans-serif")),O(ma,V(aa,"serif")),O(na,V(aa,"monospace")),ua.appendChild(la.a),ua.appendChild(ma.a),ua.appendChild(na.a),document.body.appendChild(ua),ra=la.a.offsetWidth,sa=ma.a.offsetWidth,ta=na.a.offsetWidth,ka(),Q(la,function(va){oa=va,ja()}),O(la,V(aa,"\""+aa.family+"\",sans-serif")),Q(ma,function(va){pa=va,ja()}),O(ma,V(aa,"\""+aa.family+"\",serif")),Q(na,function(va){qa=va,ja()}),O(na,V(aa,"\""+aa.family+"\",monospace"))})})},"object"==typeof module?module.exports=R:(window.FontFaceObserver=R,window.FontFaceObserver.prototype.load=R.prototype.load)}();for(var GIVEUP_TIMEOUT=20000,FONT_FAMILY="Roboto",FONT_VARIANTS=[200,400,700],promises=[],i=0;i<FONT_VARIANTS.length;i++)promises.push(new FontFaceObserver(FONT_FAMILY,FONT_VARIANTS[i]).load(GIVEUP_TIMEOUT));Promise.all(promises).then(function(){document.body.className+=" stepik-fonts-loaded"});