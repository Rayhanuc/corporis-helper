<?php

add_action('init','corporis_clint_logo_section');

if (!function_exists('corporis_clint_logo_section')):

function corporis_clint_logo_section(){

	if(function_exists('kc_add_map')):

		kc_add_map(array(

			'images_section'=>array(

				'name'=> esc_html__('clint_logo','corporis'),
				'icon'=> 'fa fa-file-image-o',
				'category'=> esc_html__('corporis','corporis'),
				'params'=> array(
					'content'=> array(
						array(
							'name'=> 'image1',							
							'label'=> esc_html__('upload images 1','corporis'),
							'type'=> 'attach_images',
						),
						array(
							'name'=> 'image2',
							'label'=> esc_html__('upload images 2','corporis'),
							'type'=> 'attach_images',
						),
						array(
							'name'=> 'image3',
							'label'=> esc_html__('upload images 3','corporis'),							
							'type'=> 'attach_images',
						),
						array(
							'name'=> 'image4',
							'label'=> esc_html__('upload images 4','corporis'),
							'type'=> 'attach_images',
						),
						array(
							'name'=> 'image5',
							'label'=> esc_html__('upload images 5','corporis'),
							'type'=> 'attach_images',
						),
						array(
							'name'=> 'image6',
							'label'=> esc_html__('upload images 6','corporis'),
							'type'=> 'attach_images',
						),
						

					)

				)

			)

		));
	endif;
  }
endif;

add_shortcode('images_section','corporis_clint_logo_shortcode');

function corporis_clint_logo_shortcode($first,$second){

	ob_start();

	$corporis_images_output = shortcode_atts(array(

		'image1'=>'',
		'image2'=>'',
		'image3'=>'',
		'image4'=>'',
		'image5'=>'',
		'image6'=>'',
		
	),$first);

	extract($corporis_images_output);
	$img_src1 = wp_get_attachment_image_src($image1,'small');
	$img_src2 = wp_get_attachment_image_src($image2,'small');
	$img_src3 = wp_get_attachment_image_src($image3,'small');
	$img_src4 = wp_get_attachment_image_src($image4,'small');
	$img_src5 = wp_get_attachment_image_src($image5,'small');
	$img_src6 = wp_get_attachment_image_src($image6,'small');


	
	
?>

      <div class="row u-MarginTop100 u-xs-MarginTop30">
	    <div class="Clients text-center">
	        <img src="<?php echo esc_url($img_src1[0]);?>" alt="..." height="100">
	        <img src="<?php echo esc_url($img_src2[0]);?>" alt="..." height="100">
	        <img src="<?php echo esc_url($img_src3[0]);?>" alt="..." height="100">
	        <img src="<?php echo esc_url($img_src4[0]);?>" alt="..." height="100">
	        <img src="<?php echo esc_url($img_src5[0]);?>" alt="..." height="100">
	        <img src="<?php echo esc_url($img_src6[0]);?>" alt="..." height="100">
	    </div>
	  </div>

<?php 

return ob_get_clean();
  
  }

  

?>