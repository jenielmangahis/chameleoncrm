<br/>
<div class="container">
	<div class="row">
		<h3 class="text-center">Cosco Shipping Schedules</h3>
	    <hr/>
	</div>	
	<div class="row">
        <div class="col-sm-11 col-md-11">
        	<table class="table table-hover table-striped">
			<tr>
				<td>callPort</td>
				<td>callPortTerminal</td>
				<td>callPortEtdTime</td>
				<td>callPortEtaTime</td>
				<td>recCreDt</td>
				<td>direction</td>
			</tr>
			<?php foreach( $coscoA->data->content as $p ){ ?>
				<?php foreach( $p->ports as $pp ){ ?>
				<tr>
					<td><?= $pp->callPort ?></td>
					<td><?= $pp->callPortTerminal ?></td>
					<td><?= $pp->callPortEtdTime ?></td>
					<td><?= $pp->callPortEtaTime ?></td>
					<td><?= $pp->recCreDt ?></td>
					<td><?= $pp->direction ?></td>
				</tr>
				<?php } ?>
			<?php } ?>
			</table>
			<br />
			<table class="table table-hover table-striped">
			<?php foreach( $coscoB->data->content as $pp ){ ?>
				<?php foreach( $pp->Pol as $p ){ ?>
					<tr><td colspan=2><b><?= $p->polName ?></b></td></tr>
					<tr>
						<tr>
							<td>Time</td>
							<td>PodName</td>
						</tr>
						<?php foreach( $p->pod as $pod ){ ?>
							<tr>
								<td><?= $pod->time ?></td>
								<td><?= $pod->podName ?></td>
							</tr>
						<?php } ?>
					</tr>
				<?php } ?>
			<?php } ?>
			</table>
        </div>
    </div>
</div>