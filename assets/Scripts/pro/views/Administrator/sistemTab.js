const $systemTab={vars:{lst:null},fncs:{init:async()=>{$systemTab.vars.lst=$(".lst"),$systemTab.fncs.tab.idx.refresh.lst()},tab:{idx:{refresh:{lst:async()=>{$systemTab.fncs.tab.idx.populate.lst($systemTab.vars.lst,await $systemTab.actions.getIdxStatusTables($systemTab.vars.lst.parent()))}},populate:{lst:async(a,t)=>{try{if(!t)throw"Error desconocido, favor de intentarlo de nuevo";if(!t.status)throw t.message;$.each(t.data,function(t,e){const s=e.idx,n=e.id;let i="";s?(i="<ul>",s.forEach(a=>{i+=`<li>${a}</li>`}),i+="</ul>"):i='<span class="text-danger pl-4"><strong>SIN INDICES</strong></span>';const l=`<div class='col-12 col-md-4 col-lg-2 py-2 idxBlock'>\n                                    <div class='d-flex justify-content-between align-items-end border-bottom pb-1' >\n                                        <h5 class='d-inline-block m-0 p-0'>${t}</h5>\n                                        <button type="button" class="btn btn-outline-${s?"warning":"danger"} btnIdxAction" data-idTable='${n}' data-table='${t}'><i class="fa fa-${s?"refresh":"link"}" aria-hidden="true" title='${s?"regenerar indices":"crear indices"}'></i></button>\n                                    </div>\n                                    <div class='idxSection'>\n                                        ${i}\n                                    </div>\n                                </div>`;a.append(l)}),$(".btnIdxAction").on("click",$systemTab.actions.btnIdxAction)}catch(t){a.html(`<h3 class='text-danger text-center'>${t}</h3>`)}}}}}},actions:{getIdxStatusTables:a=>$.genericAjaxPromise({ajax:{type:"POST",url:`${siteUrl}DataBase/ajaxGetIdxStatusTables`,data:{csrf_QUERY:csrf.hash},headers:{}},loadingOverlayObj:a}),btnIdxAction:async a=>{const t=$(a.currentTarget),e=t.data("table"),s=t.data("idtable"),n=t.closest(".idxBlock").find(".idxSection");if(t.prop("disabled",!0),t.html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>'),n.LoadingOverlay("show"),$result=await $systemTab.actions.generateIdx(e,s),$result.status){let a="<ul>";$result.data.forEach(t=>{a+=`<li>${t}</li>`}),a+="</ul>",n.html(a)}else n.html(`<p>${$result.message}</p>`);t.html('<i class="fa fa-refresh" aria-hidden="true" title=\'regenerar indices\'></i>'),t.removeClass("btn-outline-danger").addClass("btn-outline-warning"),n.LoadingOverlay("hide"),t.prop("disabled",!1)},generateIdx:(a,t)=>{return $.genericAjaxPromise({ajax:{type:"POST",url:`${siteUrl}DataBase/ajaxGenerateIdxs`,data:{csrf_QUERY:csrf.hash,model:{tableName:a,tableId:t}},headers:{}},showloadingOverlay:!1})}}};$(document).ready(()=>{$systemTab.fncs.init()});