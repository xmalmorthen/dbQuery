const $logInObj={vars:{form:null},fncs:{init:()=>{$logInObj.vars.form=$("#form"),$logInObj.vars.form.submit($logInObj.fncs.actions.signIn),$logInObj.fncs.actions.remember(),$logInObj.fncs.actions.showMsg()},actions:{showMsg:()=>{const o=$logInObj.vars.form;$__msg&&$exception._notify($__msg,o)},remember:()=>{const o=Cookies.get(btoa("sessData"));if(o){const e=JSON.parse(atob(o));$.each(e,function(o,e){$("#"+e.name).val(e.value)}),$("#remember").prop("checked",!0),$("#submit").focus()}},signIn:async o=>{o.preventDefault();const e=$logInObj.vars.form;try{if(e.closeAlert({alertType:"alert-danger"}),!e.valid())throw new Error("Formulario incompleto");e.LoadingOverlay("show");let o=e.serialize();if(o+=`&toGo=${$("#toGo").data("value")}`,$__promise=await $.genericAjaxPromise({ajax:{type:"POST",url:`${siteUrl}UserSession/ajaxLogIn`,data:{csrf_QUERY:csrf.hash,model:o},headers:{}},showloadingOverlay:!1}).catch(function(o){$exception._throw(o,e)}),!$__promise)return null;if(!$ajaxResponse.check($__promise))return $exception._throw($__promise,e),null;e.LoadingOverlay("hide"),$("#remember").is(":checked")?Cookies.set(btoa("sessData"),btoa(JSON.stringify($logInObj.vars.form.serializeArray()))):Cookies.remove(btoa("sessData")),window.location.href=$__promise.toGo?$__promise.toGo:baseUrl}catch(o){return $exception._throw(o,e),null}}}}};$(document).ready(()=>{$logInObj.fncs.init()});