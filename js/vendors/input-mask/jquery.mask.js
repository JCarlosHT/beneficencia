(function(a,b,c){if(typeof define==="function"&&define.amd){define(["jquery"],a)}else{if(typeof exports==="object"){module.exports=a(require("jquery"))}else{a(b||c)}}}(function(a){var e=function(g,i,k){var l={invalid:[],getCaret:function(){try{var s,r=0,o=g.get(0),p=document.selection,n=o.selectionStart;if(p&&navigator.appVersion.indexOf("MSIE 10")===-1){s=p.createRange();s.moveStart("character",-l.val().length);r=s.text.length}else{if(n||n==="0"){r=n}}return r}catch(q){}},setCaret:function(p){try{if(g.is(":focus")){var q,n=g.get(0);if(n.setSelectionRange){n.setSelectionRange(p,p)}else{q=n.createTextRange();q.collapse(true);q.moveEnd("character",p);q.moveStart("character",p);q.select()}}}catch(o){}},events:function(){g.on("keydown.mask",function(n){g.data("input-mask-keycode",n.keyCode||n.which);g.data("input-mask-previus-value",g.val());g.data("input-mask-previus-caret-pos",l.getCaret());l.maskDigitPosMapOld=l.maskDigitPosMap}).on(a.jMaskGlobals.useInput?"input.mask":"keyup.mask",l.behaviour).on("paste.input-mask drop.mask",function(){setTimeout(function(){g.keydown().keyup()},100)}).on("change.mask",function(){g.data("changed",true)}).on("blur.mask",function(){if(j!==l.val()&&!g.data("changed")){g.trigger("change")}g.data("changed",false)}).on("blur.mask",function(){j=l.val()}).on("focus.mask",function(n){if(k.selectOnFocus===true){a(n.target).select()}}).on("focusout.mask",function(){if(k.clearIfNotMatch&&!m.test(l.val())){l.val("")}})},getRegexMask:function(){var o=[],v,s,p,u,q,t;for(var n=0;n<i.length;n++){v=h.translation[i.charAt(n)];if(v){s=v.pattern.toString().replace(/.{1}$|^.{1}/g,"");p=v.optional;u=v.recursive;if(u){o.push(i.charAt(n));q={digit:i.charAt(n),pattern:s}}else{o.push(!p&&!u?s:(s+"?"))}}else{o.push(i.charAt(n).replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&"))}}t=o.join("");if(q){t=t.replace(new RegExp("("+q.digit+"(.*"+q.digit+")?)"),"($1)?").replace(new RegExp(q.digit,"g"),q.pattern)}return new RegExp(t)},destroyEvents:function(){g.off(["input","keydown","keyup","paste","drop","blur","focusout",""].join(".mask "))},val:function(q){var n=g.is("input"),o=n?"val":"text",p;if(arguments.length>0){if(g[o]()!==q){g[o](q)}p=g}else{p=g[o]()}return p},calculateCaretPosition:function(){var x=g.data("input-mask-previus-value")||"",v=l.getMasked(),o=l.getCaret();if(x!==v){var p=g.data("input-mask-previus-caret-pos")||0,w=v.length,y=x.length,s=0,r=0,t=0,u=0,q=0;for(q=o;q<w;q++){if(!l.maskDigitPosMap[q]){break}r++}for(q=o-1;q>=0;q--){if(!l.maskDigitPosMap[q]){break}s++}for(q=o-1;q>=0;q--){if(l.maskDigitPosMap[q]){t++}}for(q=p-1;q>=0;q--){if(l.maskDigitPosMapOld[q]){u++}}if(o>y){o=w*10}else{if(p>=o&&p!==y){if(!l.maskDigitPosMapOld[o]){var n=o;o-=u-t;o-=s;if(l.maskDigitPosMap[o]){o=n}}}else{if(o>p){o+=t-u;o+=r}}}}return o},behaviour:function(o){o=o||window.event;l.invalid=[];var p=g.data("input-mask-keycode");if(a.inArray(p,h.byPassKeys)===-1){var q=l.getMasked(),n=l.getCaret();setTimeout(function(){l.setCaret(l.calculateCaretPosition())},a.jMaskGlobals.keyStrokeCompensation);l.val(q);l.setCaret(n);return l.callbacks(o)}},getMasked:function(C,F){var o=[],I=F===undefined?l.val():F+"",t=0,y=i.length,E=0,H=I.length,A=1,n="push",B=-1,w=0,x=[],q,p;if(k.reverse){n="unshift";A=-1;q=0;t=y-1;E=H-1;p=function(){return t>-1&&E>-1}}else{q=y-1;p=function(){return t<y&&E<H}}var s;while(p()){var u=i.charAt(t),G=I.charAt(E),D=h.translation[u];if(D){if(G.match(D.pattern)){o[n](G);if(D.recursive){if(B===-1){B=t}else{if(t===q&&t!==B){t=B-A}}if(q===B){t-=A}}t+=A}else{if(G===s){w--;s=undefined}else{if(D.optional){t+=A;E-=A}else{if(D.fallback){o[n](D.fallback);t+=A;E-=A}else{l.invalid.push({p:E,v:G,e:D.pattern})}}}}E+=A}else{if(!C){o[n](u)}if(G===u){x.push(E);E+=A}else{s=u;x.push(E+w);w++}t+=A}}var r=i.charAt(q);if(y===H+1&&!h.translation[r]){o.push(r)}var z=o.join("");l.mapMaskdigitPositions(z,x,H);return z},mapMaskdigitPositions:function(q,p,r){var o=k.reverse?q.length-r:0;l.maskDigitPosMap={};for(var n=0;n<p.length;n++){l.maskDigitPosMap[p[n]+o]=1}},callbacks:function(q){var r=l.val(),o=r!==j,p=[r,q,g,k],n=function(u,t,s){if(typeof k[u]==="function"&&t){k[u].apply(this,s)}};n("onChange",o===true,p);n("onKeyPress",o===true,p);n("onComplete",r.length===i.length,p);n("onInvalid",l.invalid.length>0,[r,q,g,l.invalid,k])}};g=a(g);var h=this,j=l.val(),m;i=typeof i==="function"?i(l.val(),undefined,g,k):i;h.mask=i;h.options=k;h.remove=function(){var n=l.getCaret();if(h.options.placeholder){g.removeAttr("placeholder")}if(g.data("input-mask-maxlength")){g.removeAttr("maxlength")}l.destroyEvents();l.val(h.getCleanVal());l.setCaret(n);return g};h.getCleanVal=function(){return l.getMasked(true)};h.getMaskedVal=function(n){return l.getMasked(false,n)};h.init=function(q){q=q||false;k=k||{};h.clearIfNotMatch=a.jMaskGlobals.clearIfNotMatch;h.byPassKeys=a.jMaskGlobals.byPassKeys;h.translation=a.extend({},a.jMaskGlobals.translation,k.translation);h=a.extend(true,{},h,k);m=l.getRegexMask();if(q){l.events();l.val(l.getMasked())}else{if(k.placeholder){g.attr("placeholder",k.placeholder)}if(g.data("mask")){g.attr("autocomplete","off")}for(var o=0,p=true;o<i.length;o++){var r=h.translation[i.charAt(o)];if(r&&r.recursive){p=false;break}}if(p){g.attr("maxlength",i.length).data("input-mask-maxlength",true)}l.destroyEvents();l.events();var n=l.getCaret();l.val(l.getMasked());l.setCaret(n)}};h.init(!g.is("input"))};a.maskWatchers={};var d=function(){var g=a(this),i={},j="data-input-mask-",h=g.attr("data-input-mask");if(g.attr(j+"reverse")){i.reverse=true}if(g.attr(j+"clearifnotmatch")){i.clearIfNotMatch=true}if(g.attr(j+"selectonfocus")==="true"){i.selectOnFocus=true}if(f(g,h,i)){return g.data("mask",new e(this,h,i))}},f=function(h,i,k){k=k||{};var j=a(h).data("mask"),l=JSON.stringify,m=a(h).val()||a(h).text();try{if(typeof i==="function"){i=i(m)}return typeof j!=="object"||l(j.options)!==l(k)||j.mask!==i}catch(g){}},b=function(h){var g=document.createElement("div"),i;h="on"+h;i=(h in g);if(!i){g.setAttribute(h,"return;");i=typeof g[h]==="function"}g=null;return i};a.fn.mask=function(i,k){k=k||{};var l=this.selector,g=a.jMaskGlobals,h=g.watchInterval,m=k.watchInputs||g.watchInputs,j=function(){if(f(this,i,k)){return a(this).data("mask",new e(this,i,k))}};a(this).each(j);if(l&&l!==""&&m){clearInterval(a.maskWatchers[l]);a.maskWatchers[l]=setInterval(function(){a(document).find(l).each(j)},h)}return this};a.fn.masked=function(g){return this.data("mask").getMaskedVal(g)};a.fn.unmask=function(){clearInterval(a.maskWatchers[this.selector]);delete a.maskWatchers[this.selector];return this.each(function(){var g=a(this).data("mask");if(g){g.remove().removeData("mask")}})};a.fn.cleanVal=function(){return this.data("mask").getCleanVal()};a.applyDataMask=function(h){h=h||a.jMaskGlobals.maskElements;var g=(h instanceof a)?h:a(h);g.filter(a.jMaskGlobals.dataMaskAttr).each(d)};var c={maskElements:"input,td,span,div",dataMaskAttr:"*[data-input-mask]",dataMask:true,watchInterval:300,watchInputs:true,keyStrokeCompensation:10,useInput:!/Chrome\/[2-4][0-9]|SamsungBrowser/.test(window.navigator.userAgent)&&b("input"),watchDataMask:false,byPassKeys:[9,16,17,18,36,37,38,39,40,91],translation:{"0":{pattern:/\d/},"9":{pattern:/\d/,optional:true},"#":{pattern:/\d/,recursive:true},A:{pattern:/[a-zA-Z0-9]/},S:{pattern:/[a-zA-Z]/}}};a.jMaskGlobals=a.jMaskGlobals||{};c=a.jMaskGlobals=a.extend(true,{},c,a.jMaskGlobals);if(c.dataMask){a.applyDataMask()}setInterval(function(){if(a.jMaskGlobals.watchDataMask){a.applyDataMask()}},c.watchInterval)},window.jQuery,window.Zepto));