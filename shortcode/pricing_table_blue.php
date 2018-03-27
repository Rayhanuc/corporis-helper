<?php


add_action( 'init', 'corporis_pricing_table_blue_section' );
if(!function_exists('corporis_pricing_table_blue_section')):

function corporis_pricing_table_blue_section(){
	if(function_exists('kc_add_map')):
		kc_add_map(array(
			'corporis_pricing_table_blue' => array(
				'name' 		=> esc_html__( 'Pricing Table Blue', 'corporis' ),//translateable
				'icon' 		=> 'fa fa-fa',
				'category' 	=> esc_html__( 'Corporis', 'corporis' ),//translateable
				'params'	=> array(
					'content'	=> array(
						//Pricing Table
						array(
							'name'  => 'title',
							'label' => esc_html__( 'Type', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'amount',
							'label' => esc_html__( 'Amount', 'corporis' ) ,//translateable
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
						),
						array(
							'name'  => 'text3',
							'label' => esc_html__( 'Text 3', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'text4',
							'label' => esc_html__( 'Text 4', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'text5',
							'label' => esc_html__( 'Text 5', 'corporis' ) ,//translateable
							'type'	=> 'text',
						),
						array(
							'name'  => 'text6',
							'label' => esc_html__( 'Text 6', 'corporis' ) ,//translateable
							'type'	=> 'text',
						)
					)
				)

			)
		));

	endif;
}
endif;

function corporis_pricing_table_blue_section_shor($atts,$content){
	ob_start();
	$corporis_shortcode_atts = shortcode_atts( array(
		'title' => '',
		'amount' => '',
		'text1' => '',
		'text2' => '',
		'text3' => '',
		'text4' => '',
		'text5' => '',
		'text6' => ''
	),$atts);
	extract($corporis_shortcode_atts);

?>

    <!--pricing table start-->
    <div class="text-center u-MarginBottom35 u-Padding0">
        <div class="u-BoxShadow100">
            <div class="Blurb Blurb--wrapper bg-primary bg-primary--gradient310">
                <h3 class="text-white u-MarginTop0"><?php echo esc_html($title);?></h3>
                <div class="text-white u-FontSize50 u-Weight700">
                    <small class="u-InlineBlock u-VerticalMiddle">$</small><?php echo esc_html($amount);?>
                </div>
                <small class="text-white text-uppercase"><?php echo esc_html($text1);?></small>
                <p class="text-white u-MarginTop35 u-MarginBottom35 u-LineHeight3">
                    - <?php echo esc_html($text2);?>
                    <br>
                    - <?php echo esc_html($text3);?>
                    <br>
                    - <?php echo esc_html($text4);?>
                    <br>
                    - <?php echo esc_html($text5);?>
                </p>
                <a class="btn btn-white u-Rounded" href="#"><?php echo esc_html($text6);?></a>
            </div>
        </div>
    </div>
    <!--pricing table end-->


    


<?php
return ob_get_clean();
}

add_shortcode( 'corporis_pricing_table_blue', 'corporis_pricing_table_blue_section_shor' );




?>



		