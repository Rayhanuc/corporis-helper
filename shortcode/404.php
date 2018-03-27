<?php


add_action( 'init', 'corporis_404_section' );
if(!function_exists('corporis_404_section')):

function corporis_404_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_404' => array(
				'name' 		=> esc_html__( '404', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-exclamation-circle',
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
							'name'  => 'btn_text',
							'label' => esc_html__( 'Button Text', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'btn_link',
							'label' => esc_html__( 'Button Link', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
					)
				)

			)
		));

	endif;
}
endif;

function corporis_404_page_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title' => '',
		'desc' => '',
		'btn_text' => '',
		'btn_link' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>

	<div class="row">
        <div class="col-sm-6 col-sm-offset-3 u-MarginTop100 u-xs-MarginTop30 u-xs-MarginBottom30">
            <div class="u-MarginTop50 text-center ">
                <h1 class="u-FontSize75 u-xs-FontSize40 u-Weight700 u-MarginBottom0"><?php echo esc_html($title);?></h1>
                <h2 class="u-weight300 u-MarginTop10"><?php echo esc_html($desc);?> </h2>
                <a href="<?php echo esc_url($btn_link);?>" class="btn btn-primary"><?php echo esc_html($btn_text);?></a>
            </div>
        </div>
    </div>


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_404', 'corporis_404_page_section_shor' );




?>