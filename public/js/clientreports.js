$(document).ready(function()
{
   // Gets published report
    $("#reportSelector").change(function() {
      	var place = $("#reportSelector").val();
      	$("#reportGetter").attr("href", '/report/'+place);

	});
});