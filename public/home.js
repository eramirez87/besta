$(document).ready( f=>{
    init();
});

let template_tr = null;

function init(){
    template_tr = $("#master_tbody_tr").remove();
}

function getAll(){
    $.ajax({
        url: 'api/getFacturas',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            $("#master_tbody").empty();
            response.data.forEach(element => {
                AddRow(element);
            });
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}

function AddRow(data){
    let tr = template_tr.clone();
    tr.removeAttr("id");
    Object.keys(data).forEach( e=>{
        let value = data[e];
        if( e == 'monto_total' ){
            value = new Intl.NumberFormat('es-ES', {style: 'currency', currency: 'MXN'}).format(value);
        }
        tr.find('td[data-field=' + e + ']').text(value);
        tr.appendTo('#master_tbody');
    });
}