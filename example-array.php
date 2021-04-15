<?php

	$box = array('fields'  => array(

		array(
			'label'       => 'Example - 1',
			'id'          => 'text_field',
			'type'        => 'text',
			'standart'        => 'Merhaba !'

		),
		
		array(
			'label'       => 'Example - 2',
			'id'          => 'textarea_field',
			'type'        => 'textarea',
			'standart'        => 'Merhaba Dünya !'
		),
		
		array(
			'label'       => 'Example - 3',
			'id'          => 'checkbox_field',
			'type'        => 'checkbox',
			'choices'      => array(
			
				array(
					'value' => 'no',
					'label' => 'No',
				),
				
				array(
					'value' => 'yes',
					'label' => 'Yes',
				),
				
			),
			
			'standart'     => 'no',
			
		),	
		
		array(
			'label'       => 'Example - 4',
			'id'          => 'radio_field',
			'type'        => 'radio',
			'choices'      => array(
			
				array(
					'value' => 'no',
					'label' => 'No',
				),
				
				array(
					'value' => 'yes',
					'label' => 'Yes',
				),
				
			),
			
			'standart'     => 'yes'
			
		),
		
		array(
			'label'       => 'Example - 5',
			'id'          => 'dropdown_field',
			'type'        => 'dropdown',
			'choices'      => array(
			
				array(
					'value' => 'bmw',
					'label' => 'Bmw',
				),
				
				array(
					'value' => 'audi',
					'label' => 'Audi',
				),
				
				array(
					'value' => 'mercedes',
					'label' => 'Mercedes',
				),	
				
			),
			
			'standart'     => 'mercedes',
			
		),	
		
	));
		
	function data($array) {

		foreach($array as $val) {

			switch ($val['type']) {
				
				case 'text':
				echo '<div class="sare-fields">';
				echo '<div class="sare-title">'.$val['label'].'</div>';
				echo '<hr>';
				echo '<input type="text" name="'.$val['id'].'" value="'.$val['standart'].'">';
				echo '</div>';
				break;
				
				case 'textarea':
				echo '<div>';
				echo '<div class="sare-title">'.$val['label'].'</div>';
				echo '<hr>';
				echo '<textarea type="text" name="'.$val['id'].'">'.$val['standart'].'</textarea>';
				echo '</div>';			
				break;
				
				case 'checkbox':
				echo '<div class="sare-fields">';
				echo '<div class="sare-title">'.$val['label'].'</div>';
				echo '<hr>';
				foreach($val['choices'] as $choices) {
					
					if($choices['value'] == $val['standart']) {
						echo '<input name="'.$val['id'].'[]" type="checkbox" checked>'.$choices['label'].'';
					} else {
						echo '<input name="'.$val['id'].'[]" type="checkbox">'.$choices['label'].'';			
					}
					
				}
				echo '</div>';
				break;
				
				case 'radio':
				echo '<div class="sare-fields">';
				echo '<div class="sare-title">'.$val['label'].'</div>';
				echo '<hr>';
				foreach($val['choices'] as $choices) {
					
					if($choices['value'] == $val['standart']) {
						echo '<input name="'.$val['id'].'" type="radio" checked>'.$choices['label'].'';
					} else {
						echo '<input name="'.$val['id'].'" type="radio">'.$choices['label'].'';			
					}	
					
				}
				echo '</div>';						
				break;
				
				case 'dropdown':
				echo '<div class="sare-fields">';
				echo '<div class="sare-title">'.$val['label'].'</div>';
				echo '<hr>';
				echo '<select name="'.$val['id'].'">';
				foreach($val['choices'] as $choices) {
					
					if($choices['value'] == $val['standart']) {
						echo '<option value="'.$choices['value'].'" selected>'.$choices['label'].'</option>';
					} else {
						echo '<option value="'.$choices['value'].'">'.$choices['label'].'</option>';
					}
					
				}
				echo '</select>';
				echo '</div>';						
				break;			
				
			}
			
		}

	}

?>

<form method="post">

  <?php data($box['fields']); ?>

  <input type="submit">
  
</form>