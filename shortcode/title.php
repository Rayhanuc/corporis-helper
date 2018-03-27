<?php


add_action( 'init', 'corporis_title_section' );
if(!function_exists('corporis_title_section')):

function corporis_title_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_title' => array(
				'name' 		=> esc_html__( 'Corporis Title', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-bold',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//title
						array(
							'name'  => 'title',
							'label' => esc_html__( 'Title', 'corporis' ) ,//translateable
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
									'title'		=> array(
										array(
											//css property
											'property' 	=> 'color',
											'label'		=> 'Title Color',
											'selector'	=> '+ .title'
											),
										array(
											//css property
											'property' 	=> 'font-size',
											'label'		=> 'Font Size',
											'selector'	=> '+ .title'
											),
										array(
											//css property
											'property' 	=> 'font-weight',
											'label'		=> 'Font Weight',
											'selector'	=> '+ .title'
											),

									),//end of title

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

function corporis_title_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title' => '',
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
<div class="<?php echo $custom_class ?> <?php echo $extra_class?>">
	<div class="<?php echo esc_attr($alignment);?> u-MarginBottom100">
	    <h1 class="u-MarginTop0 u-MarginBottom10 u-Weight700 title"><?php echo esc_html($title)?></h1>
	    <div class="Split split-color"></div>
	    <p class="u-MarginTop35 desc"><?php echo esc_html($desc)?></p>
	</div>
</div>

<?php
return ob_get_clean();
}

add_shortcode( 'corporis_title', 'corporis_title_shor' );




?>