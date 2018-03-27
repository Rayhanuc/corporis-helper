<?php


add_action( 'init', 'corporis_service_section' );
if(!function_exists('corporis_service_section')):

function corporis_service_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_service' => array(
				'name' 		=> esc_html__( 'Service', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-tty',
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
							'name'  => 'icon',
							'label' => esc_html__( 'Icon', 'corporis' ) ,//translateable
							'type'	=> 'icon_picker',
						),
					)
				)

			)
		));

	endif;
}
endif;

function corporis_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title' => '',
		'desc' => '',
		'icon' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>

	<div class="u-xs-MarginBottom30">
        <div class="Blurb u-PaddingLeft15 u-PaddingRight15">
            <div class="media u-OverflowVisible">
                <div class="media-left media-middle--">
                    <div class="Thumb">
                        <i class="Blurb__hoverText Icon <?php echo esc_attr( $icon )?> Icon--32px" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="media-body">
                    <h4 class="Blurb__hoverText text-uppercase u-MarginTop5"><?php echo esc_html($title);?></h4>
                    <p class="u-LineHeight2"><?php echo esc_html($desc);?></p>
                </div>
            </div>
        </div>
    </div>


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_service', 'corporis_section_shor' );




?>