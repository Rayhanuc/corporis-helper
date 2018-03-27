<?php


add_action( 'init', 'corporis_btn_style_section' );
if(!function_exists('corporis_btn_style_section')):

function corporis_btn_style_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_btn_style' => array(
				'name' 		=> esc_html__( 'Btn Style', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-square',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//btn_link
						array(
							'name'  => 'btn_text1',
							'label' => esc_html__( 'Button Text 1', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_link1',
							'label' => esc_html__( 'Button Link 1', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_text2',
							'label' => esc_html__( 'Button Text 2', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_link2',
							'label' => esc_html__( 'Button Link 2', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_text3',
							'label' => esc_html__( 'Button Text 3', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_link3',
							'label' => esc_html__( 'Button Link 3', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_text4',
							'label' => esc_html__( 'Button Text 4', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_link4',
							'label' => esc_html__( 'Button Link 4', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
					)
				)

			)
		));

	endif;
}
endif;

function corporis_btn_style_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'btn_text1' => '',
		'btn_link1' => '',
		'btn_text2' => '',
		'btn_link2' => '',
		'btn_text3' => '',
		'btn_link3' => '',
		'btn_text4' => '',
		'btn_link4' => '',
	),$atts);
	extract($corporis_shortcode_atts);

?>

	
	<div class="">
        <div class="u-MarginTop50 Shortcode-button">
            <a href="<?php echo esc_url($btn_link1);?>" class="btn btn-md btn-default u-Rounded"><?php echo esc_html($btn_text1);?></a>
            <a href="<?php echo esc_url($btn_text2);?>" class="btn btn-md btn-default u-Rounded"><?php echo esc_html($btn_text2);?></a>
            <a href="<?php echo esc_url($btn_text3);?>" class="btn btn-md btn-default u-Rounded"><?php echo esc_html($btn_text3);?></a>
        </div>
        <div class="u-MarginTop50 Shortcode-button">
            <a href="<?php echo esc_url($btn_text4);?>" class="btn btn-md btn-primary "><?php echo esc_html($btn_text4);?></a>
        </div>
    </div>



<?php
return ob_get_clean();
}

add_shortcode( 'corporis_btn_style', 'corporis_btn_style_section_shor' );




?>



		