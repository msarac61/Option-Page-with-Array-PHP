<?php

	require_once( 'config.php' );

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

?>