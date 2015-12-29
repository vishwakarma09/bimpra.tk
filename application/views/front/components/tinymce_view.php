
	<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>	
	<script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>
	
	<script src="<?php echo site_url('common/backend/js/plugins/tiny_mce/tiny_mce.js'); ?>" type="text/javascript"></script>
<style>
	#footer-front{
    background-image: url(common/frontend/img/footer.jpg);
    background-repeat: no-repeat;
    height: 217px;
	}
</style>
<script>
var initial_load = true;

function myFunction(){
	var from_date = $('#from_date').val();
	if(from_date == ''){
		alert('Please select from date');
		return false;
	}
	return true;
}

function update_row(id){
  //alert(id);
  //var p = $('#'+id).parent().attr('id');
  var q =  $('#'+id).closest("tr").attr("id");
 // alert(q);
  var type = $('#'+id).val();
  if(type=='Single'){
 //   alert('setting atribute to 1');
 //   $('#'+q+'_ac').attr('max',1);
		$('#'+q+'_ac').val('1');
		$('#'+q+'_cwb').attr('max',0);
    $('#'+q+'_cnb').attr('max',0);
    $('#'+q+'_ic').attr('max',1);
  }else if(type=='Double'){
 //   alert('setting atribute to 2');
 //   $('#'+q+'_ac').attr('max',2);
 //   $('#'+q+'_ac').attr('max',2);
		$('#'+q+'_ac').val('2');
    $('#'+q+'_cwb').attr('max',1);
    $('#'+q+'_cnb').attr('max',1);
    $('#'+q+'_ic').attr('max',1);
  }else if(type=='Triple'){
 //   alert('setting atribute to 3');
 //   $('#'+q+'_ac').attr('max',3);
		$('#'+q+'_ac').val('3');
    $('#'+q+'_cwb').attr('max',0);
    $('#'+q+'_cnb').attr('max',1);
    $('#'+q+'_ic').attr('max',1);
  }else{
 //   alert('select option');
  }
	
	//check if value greater than allowed
	if($('#'+q+'_ac').val() > $('#'+q+'_ac').attr('max')) $('#'+q+'_ac').val($('#'+q+'_ac').attr('max'));
	if($('#'+q+'_cwb').val() > $('#'+q+'_cwb').attr('max')) $('#'+q+'_cwb').val($('#'+q+'_cwb').attr('max'));
	if($('#'+q+'_cnb').val() > $('#'+q+'_cnb').attr('max')) $('#'+q+'_cnb').val($('#'+q+'_cnb').attr('max'));
	if($('#'+q+'_ci').val() > $('#'+q+'_ci').attr('max')) $('#'+q+'_ci').val($('#'+q+'_ci').attr('max'));
}

function get_max_room(){
  var count = 0;
  $('.room_row').each(function(i,d){count++;});
  return count;
}

function add_rooms(){
  var room_count = $('#room_count').val();
  var max_room = get_max_room() + 1;
  
  var template = '<tr class="room_row" id="room_'+ max_room +'">';
			template +=' 	<td>Room'+ max_room +'</td>';
			template +=' 	<td>';
			template +=' 		<select name="room_'+ max_room +'_rt" id="room_'+ max_room +'_rt" name="room_'+ max_room +'_rt" class="form-control switcher">';
			template +=' 			<option value=""> Select option</option>';
			template +=' 			<option value="Single" selected>Single</option>';
			template +=' 			<option value="Double">Double</option>';
			template +=' 			<option value="Triple">Triple</option>';
			template +=' 		</select>';
			template +=' 	</td>';
			template +=' 	<td>';
			template +=' 		<input type="number" value="1" readonly = "readonly" id="room_'+ max_room +'_ac" name="room_'+ max_room +'_ac" class="form-control no-key" />';
			template +=' 	</td>';
			template +=' 	<td>';
			template +=' 		<input type="number" value="0" min="0" max="0" id="room_'+ max_room +'_cwb" name="room_'+ max_room +'_cwb" class="form-control no-key" />';
			template +=' 	</td>';
			template +=' 	<td>';
			template +=' 		<input type="number" value="0" min="0" max="0" id="room_'+ max_room +'_cnb" name="room_'+ max_room +'_cnb" class="form-control no-key" />';
			template +=' 	</td>';
			template +=' 	<td>';
			template +=' 		<input type="number" value="0" min="0" max="1" id="room_'+ max_room +'_ic" name="room_'+ max_room +'_ic" class="form-control no-key" />';
			template +=' 	</td>';
			template +=' 	<td>';
			template +=' 		<span id="room_'+ max_room +'_price" name="room_'+ max_room +'_price" style="font-color:red;">0</span>';
			template +=' 	</td>';
			template +=' 	<td>';
			template +=' 		<button class="btn btn-danger" id="BtnDeleteRow" onclick="DeleteRoom('+ max_room +')">Delete</button>';
			template +=' 	</td>';
			template +=' </tr>'; 						
										
  //console.log(template);
	$('#room_container').append(template);
	//increase count
	$('#room_count').val(get_max_room());
	//no-key binding
	/*
	$('.no-key').on("keydown", function(event) {
			var min = $(this).attr('min');
			var max = $(this).attr('max');
			var current = parseInt($(this).val());
			if(event.which == 38) {
				if(current < max) $(this).val(current +1);
				ReCalcSubTotal();
			}else if(event.which == 40){
				ReCalcSubTotal();
				if(current > min) $(this).val(current - 1);
			} else return false;
	});
	*/
	$('.no-key').change(function(){
		ReCalcSubTotal();
	});
	
	//rebinding switcher
	$('.switcher').change(function(){
			update_row($(this).attr('id'));
			get_max_room();
			ReCalcSubTotal();
	});
	
	ReCalcSubTotal();
}

function ReCalcSubTotal(){
	
	var data = $(document).data("rental");
	/*
  if(data == undefined){
		if(initial_load == true){
			initial_load = false;
			return false;
		}else{
			alert('Please select tour type - regular or delux');
			$('#'+room+'_price').html('0');
			return false;
		}    
  }
	*/
	
//	if(data == undefined) alert('data not initialized');
		
	var total_adults = 0;
	var total_child = 0;
	var total_infant = 0;
	
	var line_total = 0;
	var invoice_total = 0;
	var str = '';
	
$('.room_row').each(function(){
  var room = $(this).attr('id');
  var type = $('#'+room+'_rt').val();
  var n_adult = parseInt($('#'+room+'_ac').val());
  var n_cwb = parseInt($('#'+room+'_cwb').val());
  var n_cnb = parseInt($('#'+room+'_cnb').val());
  var n_inf = parseInt($('#'+room+'_ic').val());
  
  var tour = $(document).data('tour');
  if(tour == 'Regular'){
    if(type == 'Single'){
      var r_adult = parseFloat(data.regular_adult_single);
      var r_cwb = parseFloat(data.regular_cwb_single);
      var r_cnb = parseFloat(data.regular_cnb_single);
      var r_inf = parseFloat(data.regular_inf_single);
    }else if(type == 'Double'){
      var r_adult = parseFloat(data.regular_adult_double);
      var r_cwb = parseFloat(data.regular_cwb_double);
      var r_cnb = parseFloat(data.regular_cnb_double);
      var r_inf = parseFloat(data.regular_inf_double);
    }else if(type == 'Triple'){
      var r_adult = parseFloat(data.regular_adult_triple);
      var r_cwb = parseFloat(data.regular_cwb_triple);
      var r_cnb = parseFloat(data.regular_cnb_triple);
      var r_inf = parseFloat(data.regular_inf_triple);
			}else{
      alert('Please select room type');
			$('#'+room+'_price').html('0');
      return false;
    }
  }else if(tour == 'Delux'){
    if(type == 'Single'){
      var r_adult = parseFloat(data.delux_adult_single);
      var r_cwb = parseFloat(data.delux_cwb_single);
      var r_cnb = parseFloat(data.delux_cnb_single);
      var r_inf = parseFloat(data.delux_inf_single);
    }else if(type == 'Double'){
      var r_adult = parseFloat(data.delux_adult_double);
      var r_cwb = parseFloat(data.delux_cwb_double);
      var r_cnb = parseFloat(data.delux_cnb_double);
      var r_inf = parseFloat(data.delux_inf_double);
    }else if(type == 'Triple'){
      var r_adult = parseFloat(data.delux_adult_triple);
      var r_cwb = parseFloat(data.delux_cwb_triple);
      var r_cnb = parseFloat(data.delux_cnb_triple);
      var r_inf = parseFloat(data.delux_inf_triple);
    }else{
      alert('Please select room type');
			$('#'+room+'_price').html('0');
      return false;
    }
  }else{
    alert('Please select tour type');
    return false;
  }
  
	total_adults += n_adult;
	total_child += (n_cwb + n_cnb);
	total_infant += n_inf;
  line_total = (n_adult*r_adult + n_cwb*r_cwb + n_cnb*r_cnb + n_inf*r_inf);
  invoice_total += line_total;
	
	$('#'+room+'_price').html(line_total);
});
	
	str = 'Total price for <b>'+total_adults+'</b> Adult(s), <b>'+total_child+'</b> Child <b>'+total_infant+'</b> infants:';
	$('#TotalSummary').html(str);
	$('#TotalPackageAmount').val(parseFloat(invoice_total).toFixed(2));
/*	$('#BookingAmount').val(parseFloat(0.60*invoice_total).toFixed(2));
	$('#BalanceAmount').val(parseFloat(invoice_total - 0.60*invoice_total).toFixed(2));
*/	
}

function DeleteRoom(id){
	$('#room_'+id).remove();
	$('#room_count').val(get_max_room());
	ReCalcSubTotal();
}

$(document).ready(function(){
	$('#build_rooms').click(function(e){
		e.preventDefault();
		add_rooms();
	});
	
	$('#tourRegular').click(function(){
		if($(this).prop('checked') == true){
			$(document).data('tour', 'Regular');
			GetPrices('Regular');
			$('#tourTypeString').val('Regular');
		}
	});
	
	$('#tourDelux').click(function(){
		if($(this).prop('checked') == true){
			$(document).data('tour', 'Delux');
			GetPrices('Delux');
			$('#tourTypeString').val('Delux');
		}		
	});
	
	if(initial_load == true){
		$(document).data('tour', 'Regular');
		GetPrices('Regular');
		$('#tourRegular').prop('checked', true);
		$('#tourTypeString').val('Regular');
	}
	/*
	$('#tourRegular').click(function(){
		GetPrices('Regular');
	});
	
	$('#tourDelux').click(function(){
		GetPrices('Delux');	
	});
	*/
	$('#from_date').datepicker({
		format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true,
		startDate: '+15d',
    endDate: '+3m'
	});
	
	add_rooms();
	LoadTinyMCE();
});	

function GetPrices(type){
		var id = <?php echo $id;?>;
		$.post('<?php echo base_url(); ?>' + 'index.php/tours/controller/',{cservice: 'GetPriceDetail', type:type, id:id}, function(raw){
			var data = $.parseJSON(raw);
			var row = data.data;
			$(document).data("rental", row);
			if(type=='Regular'){
				$('#adult_single').html(row.regular_adult_single);
				$('#cnb_single').html(row.regular_cnb_single);
				$('#cwb_single').html(row.regular_cwb_single);
				$('#inf_single').html(row.regular_inf_single);
				
				$('#adult_double').html(row.regular_adult_double);
				$('#cnb_double').html(row.regular_cnb_double);
				$('#cwb_double').html(row.regular_cwb_double);
				$('#inf_double').html(row.regular_inf_double);
				
				$('#adult_triple').html(row.regular_adult_triple);
				$('#cnb_triple').html(row.regular_cnb_triple);
				$('#cwb_triple').html(row.regular_cwb_triple);
				$('#inf_triple').html(row.regular_inf_triple);
				
			}else if(type=='Delux'){
				$('#adult_single').html(row.delux_adult_single);
				$('#cnb_single').html(row.delux_cnb_single);
				$('#cwb_single').html(row.delux_cwb_single);
				$('#inf_single').html(row.delux_inf_single);
				
				$('#adult_double').html(row.delux_adult_double);
				$('#cnb_double').html(row.delux_cnb_double);
				$('#cwb_double').html(row.delux_cwb_double);
				$('#inf_double').html(row.delux_inf_double);
				
				$('#adult_triple').html(row.delux_adult_triple);
				$('#cnb_triple').html(row.delux_cnb_triple);
				$('#cwb_triple').html(row.delux_cwb_triple);
				$('#inf_triple').html(row.delux_inf_triple);
			}else{
				alert('Do nothing code');
			}
			$('.switcher').change();
			//ReCalcSubTotal();
		});
}

function LoadTinyMCE(){
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        readonly : true
});

	if (typeof tinyMCE != 'undefined') {
		console.log('tinyMCE initialzed');
			tinyMCE.execCommand('mceFocus', false, 'main-text');
			tinyMCE.execCommand('mceRemoveControl', false, 'main-text');
		 // var container = document.getElementById('main-text-parent');
		 // container.removeChild(document.getElementById('main-text'));  
			$("#main-text").remove(); //but you specified not using jquery, so this should, in theory, remove it, if main-text-parent is replaced with the parent container of your main-text.
	}else{
		console.log('tinyMCE is undefined');
	}
}
</script>
<form action="<?php echo site_url().'tours/checkout/'; ?>" method="post" onsubmit="return myFunction()">
<div class="clearfix">
			<div class="container-fluid" style="padding:0 30px;">
		<!--				<div class="row">
							<div class="col-md-12">
								<h3 style="text-align:center;"><?php echo $title;?></h3>
							</div>
						</div>
            
						<div class="row">
							<div class="col-md-12">
								<p><?php echo $slug;?></p>
							</div>
						</div>
		-->
		<!--
						<div class="row">
							<div class="col-md-12">
								<center>
									<textarea style="width:80%" rows="50"><?php echo $content;?></textarea>
								</center>
							</div>
						</div>
						-->
						<div class="row">
							<div class="col-md-offset-1 col-md-10 col-md-offset-1">
								<?php echo $content; ?>	
							</div>	
						</div>
			</div>
			
			<br><br><br></br>
			
			<div class="container-fluid" style="padding:0 30px;">
						<div class="row">
							<div class="col-md-offset-1 col-md-10 col-md-offset-1 table-responsive">
							<center>
								<table id="hotel_details" class="table table-bordered table-hover table-condensed" >
								<input type="hidden" id="tourID" name="tourID" value="<?php echo $id;?>" />
								<input type="hidden" id="tourTypeString" name="tourTypeString" value="" />
								
								<!--		<tr>
											<td colspan="2"><label for="start_place"><b>Tour Start From</b></label></td>
											<td colspan="3"><input type="text" name="start_place" id="start_place" class="form-control" /></td>
										</tr>
									-->
										<tr>
											<td colspan="2"><label for="from_date"><b>Select Start date<br>Bookings can be atleast 15 days in advance</b></label></td>
											<td colspan="3"><input type="text" name="from_date" id="from_date" class="form-control" /></td>
										</tr>
										<tr><td colspan="5">&nbsp;</td></tr>
										<tr>
											<td colspan="2"><label for="from_date"><b>Select Tour Type</b></label></td>
											<td colspan="3">
									<!--			<select name="" id="tourType" class="form-control">
													<option value=""> Select Option </option>
													<option value="Regular" selected>Regular</option>
													<option value="Delux">Delux</option>
												</select> 
												
												<button class="btn btn-info" id="tourRegular"> Regular </button>
												<button class="btn btn-warning" id="tourDelux"> Delux </button>
									-->
												<input type="radio" id="tourRegular" name = "tourType" /> Regular
												<?php if($has_delux == 1){ ?>
													<input type="radio" id="tourDelux" name = "tourType" /> Delux
												<?php } ?>
									
											</td>
										</tr>
										<tr>
											<th>Room type</th>
											<th>Adults</th>
											<th>CNB*</th>
											<th>CWB</th>
											<th>Infant</th>
										</tr>
										<tr>
											<td>Single</td>
											<td id="adult_single"></td>
											<td id="cnb_single"></td>
											<td id="cwb_single"></td>
											<td id="inf_single"></td>
										</tr>
										<tr>
											<td>Double</td>
											<td id="adult_double"></td>
											<td id="cnb_double"></td>
											<td id="cwb_double">3</td>
											<td id="inf_double"></td>
										</tr>
										<tr>
											<td>Triple</td>
											<td id="adult_triple"></td>
											<td id="cnb_triple"></td>
											<td id="cwb_triple"></td>
											<td id="inf_triple"></td>
										</tr>
										
										<tr>
											<td colspan="2"><label for="room_count"><b>Number of rooms</b></label></td>
											<td colspan="2"><input type="text" id="room_count" name="room_count" value="0" name="room_count" readonly="readonly" class="form-control" /></td>
											<td><button class="btn btn-info" id="build_rooms">Add Room</button>
										</tr>
										<tr>
											<td colspan="5">
													<table id="room_container" class="table-responsive" style="width:100%;">
														<tr>
															<th>&nbsp;</th>
															<th>Room type</th>
															<th>Adult(s)</th>
															<th>CWB<span style="font-color:red;">*</span></th>
															<th>CNB<span style="font-color:red;">*</span></th>
															<th>Infant</th>
															<th>Price</th>
															<th>Delete</th>
														</tr>
												<!--		<tr class="room_row" id="room_1">
															<td>Room1</td>
															<td>
																<select name="room_1_rt" id="room_1_rt" class="form-control switcher">
																	<option value=""> Select option</option>
																	<option value="Single" selected>Single</option>
																	<option value="Double">Double</option>
																	<option value="Triple">Triple</option>
																</select>
															</td>
															<td>
																<input type="number" value="1" min="0" max="1" id="room_1_ac" class="form-control" />	
															</td>
															<td>
																<input type="number" value="0" min="0" max="0" id="room_1_cwb" class="form-control" />
															</td>
															<td>
																<input type="number" value="0" min="0" max="0" id="room_1_cnb" class="form-control" />	
															</td>
															<td>
																<input type="number" value="0" min="0" max="1" id="room_1_ic" class="form-control" />	
															</td>
															<td>
																<span id="room_1_price" style="font-color:red;">344555</span>	
															</td>
															<td><button class="btn btn-danger" id="BtnDeleteRow" onclick="DeleteRoom(1)">Delete</button></td>
														</tr> -->
													</table>
											</td>	
										</tr>
										<tr>
											<td colspan="5">*CWB = Child with bed; *CNB = Child without bed; N/A = Not Allowed</td>
										</tr>
										<tr>
											<td colspan="5">Adults (11 years and above), CWB (5-11 years), CNB (2-5 years), Infant (0-2 years)</td>
										</tr>
										<tr>
											<td id="TotalSummary"></td>
										</tr>
										<tr>
											<td colspan="3"><b>Total Package Amount (INR)</b></td>
											<td colspan="2"><input id="TotalPackageAmount" name="TotalPackageAmount" class="form-control" /></td>
										</tr>
						<!--				<tr>
											<td colspan="3">
												<b>Booking Amount</b>
												<font color="Orange">(Min. Amount to be paid to secure booking.)</font>
											</td>
											<td colspan="2"><input id="BookingAmount" name="BookingAmount" class="form-control" /></td>
										</tr>
										<tr>
											<td colspan="3"><b>Balance Amount</b><font color="Orange">(To be paid later.)</font></td>
											<td colspan="2"><input id="BalanceAmount" name="BalanceAmount" class="form-control" /></td>
										</tr>
						-->				
										<tr>
											<td colspan="5">
												<button class="btn btn-success" id="PayNow">Pay Now</button>
											</td>
										</tr>
								</table>
							<center>
							</div>
						</div>
						
			</div>
</div>
</form>
<br><br><br></br>