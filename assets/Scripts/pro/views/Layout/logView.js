const $logObj={vars:{tables:{tblLogs:{dom:null,obj:null}},tableLoader:null},fncs:{init:()=>{$logObj.vars.tables.tblLogs.dom=$("#log_table"),$logObj.vars.tableLoader=$(".tableLoader"),$logObj.vars.tables.tblLogs.obj=$logObj.vars.tables.tblLogs.dom.on("preInit.dt",(l,o)=>{$logObj.vars.tableLoader.addClass("d-inline")}).DataTable({columnDefs:[{targets:"_all",className:"px-1"}],initComplete:function(l,o){$("#table_wrapper .row:eq(1)").attr("style","overflow-x: auto;"),$logObj.vars.tables.tblLogs.dom.removeClass("d-none"),$logObj.vars.tableLoader.removeClass("d-inline").addClass("d-none")}}),$("#apply").on("click",function(){window.location.href=`${siteUrl}log?logDate=${$("#log_date").val()}`}),$(".delete").on("click",function(){window.location.href=`${siteUrl}log/delete?logDate=${$("#log_date").val()}`})}}};$(document).ready(()=>{$logObj.fncs.init()});