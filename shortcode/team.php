<?php


add_action( 'init', 'corporis_team_section' );
if(!function_exists('corporis_team_section')):

function corporis_team_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_team' => array(
				'name' 		=> esc_html__( 'Team', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-steam-square',
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
							'name'  => 'desig',
							'label' => esc_html__( 'Desctiption', 'corporis' ) ,//translateable
							'type'	=> 'text',
						)
					)
				)

			)
		));

	endif;
}
endif;

function corporis_team_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'image' => '',
		'title' => '',
		'desig' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>

    <div class="u-BoxShadow100">
        <div class="Blurb Blurb--wrapper20">

        	<?php

        		$img_src = wp_get_attachment_image_src($image, 'large');
        	?>
            <img class="img-responsive" src="<?php echo esc_url($img_src[0]);?>" alt="...">
            <h4 class="u-MarginTop25 u-MarginBottom0"><?php echo esc_html($title);?></h4>
            <p class="text-muted"><?php echo esc_html($desig);?></p>
            <p class="u-MarginTop20 Anchors">
                <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </p>
        </div>
    </div>


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_team', 'corporis_team_section_shor' );




?>



		