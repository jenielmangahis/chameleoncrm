<style>
.schedule-list{
	margin: 20px;
}
.schedule-list li{
	margin: 10px;
	font-size: 18px;
}
</style>
<br/>
<div class="container">
<h3>Maersk Shipping Schedules</h3><hr/>
	<table class="table table-hover table-striped">
	<tr>
		<td>Port</td>
		<td>Terminal</td>
		<td>Voyage Arrival</td>
		<td>Voyage Departure</td>
		<td>Arrival</td>
		<td>Departure</td>
	</tr>
	<?php foreach( $data as $key => $values ){ ?>
		<?php foreach($values as $d){ ?>
		<tr>
			<td><?= $d->port ?></td>
			<td><?= $d->terminal ?></td>
			<td><?= $d->voyageArrival ?></td>
			<td><?= $d->voyageDeparture ?></td>
			<td><?= date("Y-m-d",strtotime($d->arrival)) ?></td>
			<td><?= date("Y-m-d",strtotime($d->departure)) ?></td>
		</tr>
		<?php } ?>
	<?php } ?>
	</table>
</div>