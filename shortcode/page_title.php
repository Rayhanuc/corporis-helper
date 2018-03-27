<?php


add_action( 'init', 'corporis_page_title_section' );
if(!function_exists('corporis_page_title_section')):

function corporis_page_title_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_page_title' => array(
				'name' 		=> esc_html__( 'page_title', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-flickr',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//title
						array(
							'name'  => 'image',
							'label' => esc_html__( 'Image Upload', 'corporis' ) ,//translateable
							'type'	=> 'attach_images',
						),
						array(
							'name'  => 'title',
							'label' => esc_html__( 'Title', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'text1',
							'label' => esc_html__( 'Text 1', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'text2',
							'label' => esc_html__( 'Text 2', 'corporis' ) ,//translateable
							'type'	=> 'text',
						)
					)
				)

			)
		));

	endif;
}
endif;

function corporis_page_title_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'image' => '',
		'title' => '',
		'text1' => '',
		'text1' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>

    <!--page title start-->
    <section class="ImageBackground ImageBackground--overlay v-align-parent u-height450 js-Parallax" data-overlay="6">
        <div class="ImageBackground__holder">

        	<?php

        		$img_src = wp_get_attachment_image_src($image, 'large');
        	?>

            <img src="<?php echo esc_url($img_src[0]);?>" alt="..."/>
        </div>
        <div class="v-align-child">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-8 col-xs-12 text-white ">
                        <h1 class="u-Margin0 u-Weight700"><?php echo esc_html($title);?></h1>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <ol class="breadcrumb text-white u-MarginTop10 u-MarginBottom0 pull-right">
                            <li><a href="#"><?php echo esc_html($title);?></a></li>
                            <li class="active"><span><?php echo esc_html($title);?></span></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--page title end-->


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_page_title', 'corporis_page_title_section_shor' );




?>



		