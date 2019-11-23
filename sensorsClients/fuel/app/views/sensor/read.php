<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "create" ); ?>'><?php echo Html::anchor('sensor/create','Create');?></li>
	<li class='<?php echo Arr::get($subnav, "delete" ); ?>'><?php echo Html::anchor('sensor/delete','Delete');?></li>
	<li class='<?php echo Arr::get($subnav, "update" ); ?>'><?php echo Html::anchor('sensor/update','Update');?></li>
	<li class='<?php echo Arr::get($subnav, "read" ); ?>'><?php echo Html::anchor('sensor/read','Read');?></li>

</ul>
<p>Read</p>
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Unit</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($sensors as $sensor){
			?>
			<tr>
				<td> <?php echo $sensor['id']; ?> </td>
				<td> <?php echo $sensor['name']; ?> </td>
				<td> <?php echo $sensor['unit']; ?> </td>
				<td>
					<a href ="sensor/update/<?php echo $sensor['id']; ?>">Edit</a>
					<a href ="sensor/delete/<?php echo $sensor['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>

	</tbody>

</table>
