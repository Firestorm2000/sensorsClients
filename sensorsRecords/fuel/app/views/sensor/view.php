<h2>Viewing #<?php echo $sensor->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $sensor->name; ?></p>
<p>
	<strong>Id:</strong>
	<?php echo $sensor->id; ?></p>
<p>
	<strong>Unit:</strong>
	<?php echo $sensor->unit; ?></p>

<?php echo Html::anchor('sensor/edit/'.$sensor->id, 'Edit'); ?> |
<?php echo Html::anchor('sensor', 'Back'); ?>