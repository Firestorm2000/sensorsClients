<h2>Listing Sensors</h2>
<br>
<?php if ($sensors): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Id</th>
			<th>Unit</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($sensors as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->unit; ?></td>
			<td>
				<?php echo Html::anchor('sensor/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('sensor/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('sensor/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Sensors.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('sensor/create', 'Add new Sensor', array('class' => 'btn btn-success')); ?>

</p>
