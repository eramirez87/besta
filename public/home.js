$(document).ready( f=>{
    init();
});

let template_tr = null;
let invoices = null;
let customers = null;
let invoice = null;

function init(){
    template_tr = $("#master_tbody_tr").remove();
    getAll();
    getCustomers();
    $('#exampleModal').on('shown.bs.modal', function (e) {
        let firedBy = $(e.relatedTarget);
        let index = firedBy.closest('tr').attr('data-index');
        invoice = invoices[index];
        setDataRow();
    });
}

function getCustomers(){
    $.ajax({
        url: 'api/getClientes',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            customers = response.data;
            addCustomerRow();
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}

function addCustomerRow(){
    let select = $('select[name=cliente_id]');
    customers.forEach(element=>{
        let opt =  new Option(element.nombre,element.id);
        $(opt).appendTo(select);
    });
}

function getAll(){
    $.ajax({
        url: 'api/getFacturas',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            $("#master_tbody").empty();
            invoices = response.data;
            response.data.forEach(function(element,idx){
                AddRow(element,idx);
            });
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}

function AddRow(data,index){
    let tr = template_tr.clone();
    tr.removeAttr("id");
    tr.attr('data-index',index);
    Object.keys(data).forEach( e=>{
        let value = data[e];
        if( e == 'monto_total_LATAM' ){
            value += ' MXN';
        }
        tr.find('td[data-field=' + e + ']').text(value);
        tr.appendTo('#master_tbody');
    });
}

function setDataRow(){
    let modal = $("#exampleModal");
    console.log(invoice);

    modal.find('select[name=cliente_id]').val(invoice.cliente_id);
    modal.find('select[name=estatus]').val(invoice.estatus);
    modal.find('input[name=numero_factura]').val(invoice.numero_factura);
    modal.find('input[name=fecha_emision]').val(invoice.fecha_emision);
    modal.find('input[name=monto_total]').val(invoice.monto_total);
}

function submitForm(e){
    e.preventDefault();
    $.ajax({
        url: 'api/createFactura',
        type: 'POST',
        data: $("#modal-form").serialize(),
        dataType: 'json',
        success: function(response) {
            $("#exampleModal").modal('hide');
            getAll();
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}