
<?php


add_action( 'init', 'corporis_title_2_section' );
if(!function_exists('corporis_title_2_section')):

function corporis_title_2_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_title_2' => array(
				'name' 		=> esc_html__( 'Corporis title_2', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-arrows-h',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//title_2
						array(
							'name'  => 'title_2',
							'label' => esc_html__( 'title_2', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'desc',
							'label' => esc_html__( 'Desctiption', 'corporis' ) ,//translateable
							'type'	=> 'textarea',
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
							'name'  => 'custom_class',
							'label' => esc_html__( 'Extra Class', 'corporis' ) ,//translateable
							'type'	=> 'text',
						)

					),

					// kc-style-css css style
					'style' => array(
						array(
							'name' => 'custom_css',
							'type' => 'css',
							'options' => array(
								array(
									'screens' 	=> 'any,1024,768',
									'title_2'		=> array(
										array(
											//css property
											'property' 	=> 'color',
											'label'		=> 'title_2 Color',
											'selector'	=> '+ .title_2'
											),
										array(
											//css property
											'property' 	=> 'font-size',
											'label'		=> 'Font Size',
											'selector'	=> '+ .title_2'
											),
										array(
											//css property
											'property' 	=> 'font-weight',
											'label'		=> 'Font Weight',
											'selector'	=> '+ .title_2'
											),

									),//end of title_2

									'split'		=> array(
										array(
											'property' 	=> 'background-color',
											'label'		=> 'Split Background Color',
											'selector'	=> '+ .split-color'
										)
									),
									'description'		=> array(
										array(
											//css property
											'property' 	=> 'color',
											'label'		=> 'Desctiption Color',
											'selector'	=> '+ .desc'
											),

									),//end of description
								)
							)//end of options
						)

					),
					//style end here
				)
			)
		));

	endif;
}
endif;

function corporis_title_2_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title_2' => '',
		'desc' => '',
		'alignment' => 'text-center',
		'custom_class' => '',
		'custom_css' => ''
	),$atts);
	extract($corporis_shortcode_atts);

	$wrap_class = apply_filters( 'kc-el-class', $atts );
	$wrap_class[] = $custom_css;
	$extra_class = implode(' ', $wrap_class);

?>

	<div class="row text-center u-MarginBottom100 u-xs-MarginBottom30 <?php echo esc_attr($alignment);?>">
	    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
	        <h1 class="u-MarginTop0 u-MarginBottom35"><?php echo esc_html($title_2)?></h1>
	    </div>
	    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
	        <p class="u-LineHeight2"><?php echo esc_html($desc)?></p>
	    </div>
	</div>

<?php
return ob_get_clean();
}

add_shortcode( 'corporis_title_2', 'corporis_title_2_shor' );




?>





		