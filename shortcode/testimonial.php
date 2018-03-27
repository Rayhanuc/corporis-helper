<?php


add_action( 'init', 'corporis_testimonial_section' );
if(!function_exists('corporis_testimonial_section')):

function corporis_testimonial_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_testimonial' => array(
				'name' 		=> esc_html__( 'Testimonial', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-automobile',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//testimonial
						array(
							'type'			=> 'group',
							'label'			=> __('Options', 'kingcomposer'),
							'name'			=> 'testimonail',
							'description'	=> '',
							'options'		=> array('add_text' => __('Add New Testimonial', 'kingcomposer')),					
							// you can use all param type to register child params
							'params' => array(
								array(
									'type' => 'text',
									'label' => 'Name',
									'name' => 'name',
									'admin_label' => true,
								),
								array(
									'type' => 'text',
									'label' => 'Designation',
									'name' => 'desig',
									'admin_label' => true,
								),
								array(
									'type' => 'textarea',
									'label' => 'Description',
									'name' => 'desc',
									'admin_label' => true,
								),
								array(
									'type' => 'attach_images',
									'label' => 'Image upload',
									'name' => 'image',
									'admin_label' => true,
								),
							)
						)
					)
				)

			)
		));

	endif;
}
endif;

function corporis__testimonial_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'testimonail' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>
	<!-- html testimonial section start -->
	<div class="js-OwlCarousel owl-carousel owl-theme OwlDots">
		
		<?php foreach( $testimonail as $item ): ?>

	    <div class="owl-carousel-item">
	        <div class="Thumb Thumb--62px Thumb--image Thumb--rounded">
	        	<?php

	        		$img_src = wp_get_attachment_image_src( $item->image, 'full');

	        	?>
	            <img class="img-responsive" src="<?php echo esc_url($img_src[0]);?>" alt="...">
	        </div>
	        <p class="text-italic u-MarginTop30"><?php echo esc_html($item->desc);?></p>
	        <h5 class="text-primary text-uppercase u-MarginTop30 u-MarginBottom5 u-Weight700">- <?php echo esc_html($item->name);?> -</h5>
	        <p class="small"><?php echo esc_html($item->desig)?></p>
	    </div>

		<?php endforeach ;?>

    </div>
    <!-- html testimonial section end -->


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_testimonial', 'corporis__testimonial_section_shor' );




?>