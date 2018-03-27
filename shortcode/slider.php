<?php


add_action( 'init', 'corporis_slider_section' );
if(!function_exists('corporis_slider_section')):

function corporis_slider_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_slider' => array(
				'name' 		=> esc_html__( 'Slider', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-object-ungroup',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//slider
						array(
							'type'			=> 'group',
							'label'			=> __('Options', 'kingcomposer'),
							'name'			=> 'slider',
							'description'	=> '',
							'options'		=> array('add_text' => __('Add New Slider', 'kingcomposer')),					
							// you can use all param type to register child params
							'params' => array(

								array(
									'type' => 'attach_images',
									'label' => 'Image upload',
									'name' => 'image',
									'admin_label' => true,
								),
								array(
									'type' => 'text',
									'label' => 'Title',
									'name' => 'title',
									'admin_label' => true,
								),
								array(
									'type' => 'textarea',
									'label' => 'Slogan',
									'name' => 'slogan',
									'admin_label' => true,
								),
								array(
									'type' => 'text',
									'label' => 'Button Text 1',
									'name' => 'button_text_1',
									'admin_label' => true,
								),
								array(
									'type' => 'text',
									'label' => 'Button LInk 1',
									'name' => 'button_link_1',
									'admin_label' => true,
								),
								array(
									'type' => 'text',
									'label' => 'Button Text 2',
									'name' => 'button_text_2',
									'admin_label' => true,
								),
								array(
									'type' => 'text',
									'label' => 'button LInk 2',
									'name' => 'button_link_2',
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

function corporis__slider_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'slider' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>

    <!--slider start-->
    <div class="swiper-container js-FullHeight">

		

        <div class="swiper-wrapper">

        	<?php foreach( $slider as $items): ?>
            <section class="swiper-slide ImageBackground ImageBackground--overlay" data-overlay="3" data-scheme="light" data-swiper-autoplay="200">
                <div class="ImageBackground__holder">
                	<?php

                	$img_src = wp_get_attachment_image_src( $items->image, 'full' )

                	?>
                    <img src="<?php echo esc_url($img_src[0]);?>" alt="...">
                </div>
                <div class="container u-vCenter">
                    <div class="row ">
                        <div class="text-center text-white" data-animate="fadeInUp">
                            <h1 class="text-uppercase u-FontSize60 u-xs-FontSize40 u-MarginTop0 u-MarginBottom5 u-LetterSpacing2 u-Weight700"><?php echo esc_html($items->title);?></h1>
                            <p class="text-lg  text-white u-MarginBottom15" ><?php echo esc_html($items->slogan);?></p>
                            <div class="u-MarginTop50 u-MarginBottom15">
                                <a href="<?php echo($items->button_link_1);?>" class="btn btn-primary u-MarginRight10"><?php echo esc_html($items->button_text_1);?></a>
                                <a href="#" class="btn btn-white btn-white--transparent"><?php echo esc_html($items->button_text_2);?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php endforeach ;?>
        </div>

    	

        <!-- Add Arrows -->
        <div class="swiper-control swiper-button-next"></div>
        <div class="swiper-control swiper-button-prev"></div>
    </div>
    <!--slider end-->

<?php
return ob_get_clean();
}

add_shortcode( 'corporis_slider', 'corporis__slider_section_shor' );




?>