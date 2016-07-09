$(function() { 
    $("#from_borndate").keyup(function() { 
         if($("#from_borndate").val().length==2 || $("#from_borndate").val().length==5){$("#from_borndate").val($("#from_borndate").val()+'/')};
         if($("#from_borndate").val().length==8) {$("#to_borndate").focus()};
    });    

    $("#to_borndate").keyup(function() { 
         if($("#to_borndate").val().length==2 || $("#to_borndate").val().length==5){$("#to_borndate").val($("#to_borndate").val()+'/')};
         
    });  
 });    
    
function sndForm(){
    var frm = document.exportForm;
    frm.submit();
}

function showLists() {
     var showList = $('input[name="slist"]:checked').val();
    refreshDiv(showList);
    $('#divLists').css({'display' : 'block'});
    
}

function hideLists () { 
    $('#divLists').css({'display' : 'none'});
}


function refreshDiv(showList){
    //alert(showList)
    if(showList=='1') {
        var url='/userexportcities/';
        $('#divAddCity').css({'display' : 'block'}); 
    }
    if(showList=='2') {
        var url='/userexporthospitals/' ;
        $('#divAddCity').css({'display' : 'none'});
    }
$.ajax({
  url: url,
  //other stuff you need to build your ajax request
 }).done(function(data) {
   document.getElementById('divLists').innerHTML= data;
 });
}

function addCity(cityName) {
   // alert(cityName);
$.ajax({
  url: "/userexportcities/add/" + cityName,
  //other stuff you need to build your ajax request
 }).done(function(data) {
   refreshDiv('1');
 });
}  

function deleteCity(cityId) {
   // alert(cityName);
$.ajax({
  url: "/userexportcities/delete/" + cityId,
  //other stuff you need to build your ajax request
 }).done(function(data) {
   refreshDiv('1');
 })
  .fail(function() {
    refreshDiv('1'); 
  }) 
}  
  
function addHospital(hospitalId) {
   // alert(cityName);
$.ajax({
  url: "/userexporthospitals/add/" + hospitalId,
  //other stuff you need to build your ajax request
 }).done(function(data) {
   refreshDiv('2');
 });
}  

function deleteHospital(hospitalId) {
   // alert(cityName);
$.ajax({
  url: "/userexporthospitals/delete/" + hospitalId,
  //other stuff you need to build your ajax request
 }).done(function(data) {
   refreshDiv('2');
 })
  .fail(function() {
    refreshDiv('2'); 
  }) 
}  