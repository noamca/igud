
var fullSiteAddress = "http://localhost:9090/igud"

function ajaxAction(formId,actionName,divToRefresh){
    
    var ser = $( "#" + formId ).serialize();
    $.post( fullSiteAddress + "/ajax/proccessAjaxRequest/" + actionName, $( "#" + formId ).serialize() )
        .done(function( data ) {
           // alert( "Data Loaded: " + data );
           $('#' + divToRefresh).html('');
           $('#' + divToRefresh).html(data);
        })
         .fail(function() {
    alert( "error" );
  });
}
  