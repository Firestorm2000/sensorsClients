<h2>Viewing #<?php echo $sensor->id; ?></h2>

<p>
	<strong>Id:</strong>
	<?php echo $sensor->id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $sensor->name; ?></p>
<p>
	<strong>Unit:</strong>
	<?php echo $sensor->unit; ?></p>
	<script >
	//console.log('id',<?php $sensor->id?>);
	 </script>

<?php echo Html::anchor('sensor/edit/'.$sensor->id, 'Edit'); ?> |
<?php echo Html::anchor('sensor', 'Back'); ?>
