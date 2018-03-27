<?php


add_action( 'init', 'corporis_playicon_section' );
if(!function_exists('corporis_playicon_section')):

function corporis_playicon_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_playicon' => array(
				'name' 		=> esc_html__( 'Playicon', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-play',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//playicon
						array(
							'name'  => 'icon',
							'label' => esc_html__( 'Icon', 'corporis' ) ,//translateable
							'type'	=> 'icon_picker',
						),
						array(
							'name' => 'alignment',
							'label' => 'Text Alignment',

							'type' => 'select',  // USAGE SELECT TYPE
							'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'text-left' => 'Alignment Left',
								'text-center' => 'Alignment Center',
								'text-right' => 'Alignment Right',
							)
						),

						array(
							'name' => 'link',
							'label' => 'Add Your Link',
							'type' => 'link',
						)
					)
				)

			)
		));

	endif;
}
endif;

function corporis_playicon_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'icon' => '',
		'alignment' => 'text-center',
		'link' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>


    <p class="u-MarginBottom40 <?php echo esc_attr($alignment);?>"><a class="btn btn-play u-Rounded u-MarginRight10 popup-youtube" href="<?php echo esc_attr( $link )?>"><i class="btn__iconCenter  <?php echo esc_attr( $icon )?>"></i></a></p>


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_playicon', 'corporis_playicon_shor' );




?>