<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "create" ); ?>'><?php echo Html::anchor('sensor/create','Create');?></li>
	<li class='<?php echo Arr::get($subnav, "delete" ); ?>'><?php echo Html::anchor('sensor/delete','Delete');?></li>
	<li class='<?php echo Arr::get($subnav, "update" ); ?>'><?php echo Html::anchor('sensor/update','Update');?></li>
	<li class='<?php echo Arr::get($subnav, "read" ); ?>'><?php echo Html::anchor('sensor/read','Read');?></li>

</ul>
<p>Create</p>

<form action="saveSensor" method="POST">
	<label>Name</label>
		<input type="text" class="form-control" id="name" name="name">
	<label>Id</label>
	<input type="int" class="form-control" id="id" name="id">
	<label>Unit</label>
	<input type="text" class="form-control" id="unit" name="unit">
	<button type="submit">Submit</button>
</form>
