<br/>
<div class="container">
	<div class="row">
		<h3 class="text-center">MSC Shipping Schedules</h3>
	    <hr/>
	</div>	
	<div class="row">
        <div class="col-sm-11 col-md-11">
        	<table class="table table-hover table-striped">
				<?php foreach( $data->Arrivals as $d ){ ?>
					<tr>
						<td>IMONumber</td>
						<td>LiveArrival</td>
						<td>LiveDeparture</td>
						<td>PortIsoCode</td>
						<td>PortName</td>
						<td>ServiceName</td>
						<td>VesselFlag</td>
						<td>VesselName</td>
						<td>VoyageNumber</td>				
					</tr>
				<?php } ?>
				<tr>
					<td><?= $d->IMONumber ?></td>
					<td><?= $d->LiveArrival ?></td>
					<td><?= $d->LiveDeparture ?></td>
					<td><?= $d->PortIsoCode ?></td>
					<td><?= $d->PortName ?></td>
					<td><?= $d->ServiceName ?></td>
					<td><?= $d->VesselFlag ?></td>
					<td><?= $d->VesselName ?></td>
					<td><?= $d->VoyageNumber ?></td>
				</tr>
			</table>
        </div>
    </div>
</div>