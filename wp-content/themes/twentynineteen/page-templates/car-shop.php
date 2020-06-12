<?php

/*
Template Name: Car Shop
*/

$cars = carbon_get_the_post_meta('cars');
echo "<pre>";
print_r($cars);
echo "</pre>";
?>


<table>
	<tr>
		<th><?php _e('Manufacturer','twentynineteen') ;?></th>
		<th><?php _e('Model','twentynineteen') ;?></th>
		<th><?php _e('Count','twentynineteen') ;?></th>
	</tr>
	<?php
	foreach ($cars as $car) :
	?>
	<tr>
		<td>
			<?php echo esc_html($car['manufacturer'],'twentynineteen') ; ?>
		</td>
		<td>
			<?php echo esc_html($car['model'],'twentynineteen') ; ?>
		</td>
		<td>
			<?php echo esc_html($car['quantity'],'twentynineteen') ; ?>
		</td>
	</tr>

	<?php
	endforeach;
	?>
</table>