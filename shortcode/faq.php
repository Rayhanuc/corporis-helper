<?php


add_action( 'init', 'corporis_faq_section' );
if(!function_exists('corporis_faq_section')):

function corporis_faq_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_faq' => array(
				'name' 		=> esc_html__( 'Corporis faq', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-pencil-square',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//faq
						array(
							'name'  => 'title1',
							'label' => esc_html__( 'title1', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'desc1',
							'label' => esc_html__( 'Desctiption1', 'corporis' ) ,//translateable
							'type'	=> 'textarea',
						),
						array(
							'name'  => 'title2',
							'label' => esc_html__( 'title2', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'desc2',
							'label' => esc_html__( 'Desctiption2', 'corporis' ) ,//translateable
							'type'	=> 'textarea',
						),
						array(
							'name'  => 'title3',
							'label' => esc_html__( 'title3', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'desc3',
							'label' => esc_html__( 'Desctiption3', 'corporis' ) ,//translateable
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
									'title1'		=> array(
										array(
											//css property
											'property' 	=> 'color',
											'label'		=> 'title1 Color',
											'selector'	=> '+ .title1'
											),
										array(
											//css property
											'property' 	=> 'font-size',
											'label'		=> 'Font Size',
											'selector'	=> '+ .title1'
											),
										array(
											//css property
											'property' 	=> 'font-weight',
											'label'		=> 'Font Weight',
											'selector'	=> '+ .title1'
											),

									),//end of title
									'title2'		=> array(
										array(
											//css property
											'property' 	=> 'color',
											'label'		=> 'title2 Color',
											'selector'	=> '+ .title2'
											),
										array(
											//css property
											'property' 	=> 'font-size',
											'label'		=> 'Font Size',
											'selector'	=> '+ .title2'
											),
										array(
											//css property
											'property' 	=> 'font-weight',
											'label'		=> 'Font Weight',
											'selector'	=> '+ .title2'
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

function corporis_faq_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title1' => '',
		'title2' => '',
		'title3' => '',
		'desc1' => '',
		'desc2' => '',
		'desc3' => '',
		'alignment' => 'text-center',
		'custom_class' => '',
		'custom_css' => ''
	),$atts);
	extract($corporis_shortcode_atts);

	$wrap_class = apply_filters( 'kc-el-class', $atts );
	$wrap_class[] = $custom_css;
	$extra_class = implode(' ', $wrap_class);

?>

<div class="panel-group u-PaddingRight20 u-sm-PaddingRight0" id="accordion1">
    <div class="panel panel-default--">
        <div class="panel-heading" id="heading1">
            <div class="panel-title ">
                <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                    <?php echo esc_html($title1);?>
                </a>
            </div>
        </div>
        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
                <?php echo esc_html($desc1)?>
            </div>
        </div>
    </div>
    <div class="panel panel-default--">
        <div class="panel-heading" role="tab" id="heading2">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    <?php echo esc_html($title2);?>
                </a>
            </div>
        </div>
        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false">
            <div class="panel-body">
                <?php echo esc_html($desc2)?>
            </div>
        </div>
    </div>
    <div class="panel panel-default--">
        <div class="panel-heading" role="tab" id="heading3">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    <?php echo esc_html($title3);?>
                </a>
            </div>
        </div>
        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3" aria-expanded="false">
            <div class="panel-body">
                <?php echo esc_html($desc3)?>
            </div>
        </div>
    </div>
</div>








<?php
return ob_get_clean();
}

add_shortcode( 'corporis_faq', 'corporis_faq_shor' );




?>