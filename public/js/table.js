function table_make(table_id,data,pageSize,links,div_id){
    var table = new Tabulator(table_id, {
        data:data,
        autoColumns: true,
        layout: "fitColumns",
    });
    var html=``;
    links.forEach((item,index,arr)=>{
        html += `<li class="page-item"><a class="page-link" data-url="`+item.url+`&pageSize=`+pageSize+`">`+item.label+`</a></li>`;
    })
    $(div_id).html(html);
}
function call_tabulator(url,table_name,pageSize,div_id)
{
    $.ajax({
        url: url,
        method: "GET",
        success: (e) => {
            table_make(table_name,e.data,pageSize,e.links,div_id);
            page_event(table_name,pageSize,div_id);
        }
    })
}
function page_event(table_name,pageSize,div_id)
{
    $('.page-link').click((event)=>{
        console.log(event);
        call_tabulator(event.currentTarget.dataset.url,table_name,pageSize,div_id);
    }); 
}