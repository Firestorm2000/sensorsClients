<h2>Editing Sensor</h2>
<br>

<?php echo render('sensor/_form'); ?>
<p>
	<?php echo Html::anchor('sensor/view/'.$sensor->id, 'View'); ?> |
	<?php echo Html::anchor('sensor', 'Back'); ?></p>
