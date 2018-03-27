<?php


add_action( 'init', 'corporis_we_do_section' );
if(!function_exists('corporis_we_do_section')):

function corporis_we_do_section(){
    if(function_exists('kc_add_map')):
        kc_add_map(array(
            'corporis_we_do' => array(
                'name'      => esc_html__( 'We Do', 'corporis' ),//translateable
                'icon'      => 'fa fa-adjust',
                'category'  => esc_html__( 'Corporis', 'corporis' ),//translateable
                'params'    => array(
                    'content'   => array(
                        //title
                        array(
                            'name'  => 'title',
                            'label' => esc_html__( 'Title', 'corporis' ) ,//translateable
                            'type'  => 'text',
                        ),
                        array(
                            'name'  => 'title2',
                            'label' => esc_html__( 'Title Two', 'corporis' ) ,//translateable
                            'type'  => 'text',
                        ),
                        array(
                            'name'  => 'desc',
                            'label' => esc_html__( 'Desctiption', 'corporis' ) ,//translateable
                            'type'  => 'textarea',
                        ),
                        array(
                            'name'  => 'btn_text',
                            'label' => esc_html__( 'Btn Text', 'corporis' ) ,//translateable
                            'type'  => 'text',
                        ),
                        array(
                            'name'  => 'btn_linkt',
                            'label' => esc_html__( 'Btn Link', 'corporis' ) ,//translateable
                            'type'  => 'text',
                        )
                    )
                )

            )
        ));

    endif;
}
endif;

function corporis_we_do_section_shor($atts,$content){
    ob_start();
    $corporis_shortcode_atts = shortcode_atts( array(
        'title' => '',
        'title2' => '',
        'desc' => '',
        'btn_text' => '',
        'btn_linkt' => ''
    ),$atts);
    extract($corporis_shortcode_atts);

?>

        <div class="">
            <div class="u-PaddingRight40 u-md-Padding0 u-sm-PaddingRight20 u-xs-PaddingLeft20">
                <span class="u-Weight300 u-FontSize75 text-muted u-Opacity20"><?php echo esc_html($title);?></span>
                <h4 class="Blurb__hoverText u-MarginTop10 u-Weight700 text-uppercase"><?php echo esc_html($title2);?></h4>
                <p class="u-LineHeight2"><?php echo esc_html($desc);?></p>
                <p class="u-MarginTop25">
                    <a class="btn-go" href="<?php echo esc_attr( $btn_linkt )?>" role="button"><?php echo esc_html($btn_text);?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

<?php
return ob_get_clean();
}

add_shortcode( 'corporis_we_do', 'corporis_we_do_section_shor' );




?>