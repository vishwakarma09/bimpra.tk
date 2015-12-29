
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<?php if($booking_tour->is_paid){?>
			<p class="bg-success">Payment Successful</p>
		<?php }else{ ?>
			<p class="bg-danger"><font size="18">Payment Failed</font></p>
			<p class="bg-warning">Please contact Bimpra Support:</p>
			<p class="bg-info">
				International Tours +91 9999-630-947 international@bimpra.com</br>
				Domestic Tours +91 9999 264 947 domestic@bimpra.com</br>
				General Inquiry +91 704 2727 947 info@bimpra.com</br>
			</p>
		<?php } ?>
			Order details:
			<div class="row table-responsive">
				<table class="table">
					<tr>
						<th>Reference ID</th>
						<th>Tour Description</th>
						<th>From date</th>
						<th>Adults</th>
						<th>CWB*</th>
						<th>CNB*</th>
						<th>Infants</th>
						<th>Amount</th>
					</tr>
					<tr>
						<td><?php echo $booking_tour->bid; ?></td>
						<td><?php echo '['. $tours->id . '] - ' .$tours->title. '<br>(' . $tours->slug . ')'; ?></td>
						<td><?php echo $booking_tour->from_date; ?></td>
						<td><?php echo $booking_tour->n_ac; ?></td>
						<td><?php echo $booking_tour->n_cwb; ?></td>
						<td><?php echo $booking_tour->n_cnb; ?></td>
						<td><?php echo $booking_tour->n_ic; ?></td>
						<td><?php echo number_format($booking_tour->amount,2); ?></td>
					</tr>
					<tr>
						<td colspan="7">Tax</td>
						<td><?php echo number_format(0.05*$booking_tour->amount,2); ?></td>
					</tr>
					<tr>
						<td colspan="7">Total Amount</td>
						<td><?php echo number_format($booking_tour->amount + (0.05*$booking_tour->amount),2); ?></td>
					</tr>
					<tr>
						<td colspan="8">CWB* - Child Without Bed, CNB* - Child No Bed</td>
					</tr>
				</table>
			</div>
			
		</div>
	</div>
</div>