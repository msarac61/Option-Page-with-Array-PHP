<?php

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