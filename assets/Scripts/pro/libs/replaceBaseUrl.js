b64DecodeUnicode=function(e){return decodeURIComponent(Array.prototype.map.call(atob(e),function(e){return"%"+("00"+e.charCodeAt(0).toString(16)).slice(-2)}).join(""))},replaceBaseUrl=function(e,r){if(r=Object.assign({},{baseUrl:null},r),null==r.baseUrl)throw new Error("Debe especificar la URL base { baseUrl : '{baseUrl}' }");var a=/({baseurl})/gi;return e.replace(a,r.baseUrl)},$.fn.replaceBaseUrl=function(e){if(e=Object.assign({},{baseUrl:null},e),null==e.baseUrl)throw new Error("Debe especificar la URL base { baseUrl : '{baseUrl}' }");this.each(function(){$(this).html(replaceBaseUrl($(this).html(),e))})};