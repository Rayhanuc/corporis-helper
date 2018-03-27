<?php


add_action( 'init', 'corporis_step_section' );
if(!function_exists('corporis_step_section')):

function corporis_step_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_step' => array(
				'name' 		=> esc_html__( 'Step', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-bicycle',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//Step
						array(
							'name'  => 'title',
							'label' => esc_html__( 'Title', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'number',
							'label' => esc_html__( 'Step Number', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'desc',
							'label' => esc_html__( 'Desctiption', 'corporis' ) ,//translateable
							'type'	=> 'textarea',
						),

						array(
							'name' => 'chose',
							'label' => 'Style',

							'type' => 'select',  // USAGE SELECT TYPE
							'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'image' => 'Image',
								'icon' => 'Icon',
							)
						),
						array(
							'name'  => 'icon',
							'label' => esc_html__( 'Icon', 'corporis' ) ,//translateable
							'type'	=> 'icon_picker',
							'relation' => array(
						        'parent'    => 'chose',
						        'show_when' => 'icon',
						    )
						),
						array(
							'name'  => 'image',
							'label' => esc_html__( 'Upload Image', 'corporis' ) ,//translateable
							'type'	=> 'attach_images',
							'relation' => array(
						        'parent'    => 'chose',
						        'show_when' => 'image',
						    )
						),
					)
				)

			)
		));

	endif;
}
endif;

function corporis__step_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title' => '',
		'number' => '',
		'desc' => '',
		'chose' => 'icon',
		'icon' => '',
		'image' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>
	<!-- html step section start -->
	<div class="text-center">
		<div class="Steps">
		    <div class="Step">
		        <div class="Step__thumb u-BoxShadow100">
		            <span class="Step__thumb-number"><?php echo esc_html($number);?></span>

		            <i class="Icon <?php echo esc_attr( $icon )?>"></i>
		            <?php
		            	$image_src = wp_get_attachment_image_src( $image,'large');

		            ?>
		            <img class="Step__thumb-img" src="<?php echo esc_url($image_src[0]);?>" alt="">
		        </div>
		        <h3><?php echo esc_html($title);?></h3>
		        <p class="u-MarginTop20"><?php echo esc_html($desc);?></p>
		    </div>
		    <div class="Step">
		        <div class="Step__thumb StepCurve StepCurve--down">
		            <img src="assets/imgs/step-downcurve.png" alt="">
		        </div>
		    </div>
	    </div>
    </div>
    <!-- html step section end -->


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_step', 'corporis__step_section_shor' );




?>