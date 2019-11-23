<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "create" ); ?>'><?php echo Html::anchor('client/create','Create');?></li>
	<li class='<?php echo Arr::get($subnav, "delete" ); ?>'><?php echo Html::anchor('client/delete','Delete');?></li>
	<li class='<?php echo Arr::get($subnav, "update" ); ?>'><?php echo Html::anchor('client/update','Update');?></li>
	<li class='<?php echo Arr::get($subnav, "read" ); ?>'><?php echo Html::anchor('client/read','Read');?></li>

</ul>
<p>Delete</p>