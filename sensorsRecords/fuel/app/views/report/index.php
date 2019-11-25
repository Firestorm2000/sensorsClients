<ul class="nav nav-pills">
	<li <?php echo Html::anchor('reports/index','Index');?></li>

</ul>
<?php if ($reports): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Value</th>
			<th>Sensor</th>
			<th>Reported at</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $reports ?>
<?php foreach ($reports as $item): ?>		<tr>

			<td><?php echo $item->value; ?></td>
			<td><?php echo $item->sensor_id; ?></td>
			<td><?php echo $item->reported; ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Reports.</p>

<?php endif; ?><p>
