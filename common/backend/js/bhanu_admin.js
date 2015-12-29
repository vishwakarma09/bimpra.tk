
	function sct_bhanu_validate_form()
	{
		var error_msg="";
		var data_apend="";
		$(".sct_bhanu_validation").each(function(){
			if($(this).val()=="")
			{
				error_msg=error_msg+"<div class='alert alert-danger ' role='alert'>"+$(this).attr("sct_bhanu_error_msg")+"</div> ";
				$(this).css({"border": "2px solid red"});
				window.scroll(0,0)
			}
			else
			{
				$(this).css({"border": ""});
				
			}
		});
		if(error_msg!="")
		{
		$(".sct_bhanu_error_msg_div").show();
		$(".sct_bhanu_error_msg_div").html(error_msg);
		return false;
		}
		else
		{ 
		return true;
		}
		
	}

//Remove alert baarof success and failed................
$(function() 
{
	$(".alert_remove").fadeIn(500).delay(3000).fadeOut(1500);	
});

//For Select value from select box.........................

$(".select_for_pages")
  .change(function() {
    var str = "";
    $( ".select_for_pages option:selected" ).each(function() {
      str += $( this ).val() + " ";
    });
    $( ".select_for_page_url_input" ).val( str );
  })
  .trigger( "change" );

// For Edit Link.................................................
$(".edit_link").click(function(){
	var value1 =$(this).attr("value1");
	var id11 =$(this).attr("id11");
	var key =$(this).attr("key");
	var sub_cate =$(this).attr("sub_cate");
	$(".url").val(value1);
	$(".sub_category").html(sub_cate);
	$(".key").val(key);
	$(".ref_id").val(id11);
	$(".for_edit_link").modal("show");
});

//For Select value from select box in edit.........................

$(".select_for_pages1")
  .change(function() {
    var str = "";
    $( ".select_for_pages1 option:selected" ).each(function() {
      str += $( this ).val() + " ";
    });
    $( ".select_for_page_url_input1" ).val( str );
  })
  .trigger( "change" );
  
//for pop over on submit form
$(function(){
	$(".for_pop_over_load_onsubmit").click(function()
	{
	$(".modal_for_loading_onsubmit").modal("show");	
	});
}) 

//for table export

var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
