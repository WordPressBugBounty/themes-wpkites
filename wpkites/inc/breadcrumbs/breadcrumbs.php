<?php

// theme sub header breadcrumb functions
if (!function_exists('wpkites_breadcrumbs')):
    function wpkites_breadcrumbs() {
        global $post;
        $homeLink = home_url('/');
        $hide_show_banner = get_theme_mod('banner_enable', true);
        $breadcrumb='';
		$wpkites_breadcrumb_type = get_theme_mod('wpkites_breadcrumb_type','yoast');
        if ($hide_show_banner == true) {?>
            <section class="page-title-section" <?php if (get_header_image()) { ?> style="background:url('<?php header_image(); ?>')" <?php } ?>>		
                <div class="breadcrumb-overlay" style="background-color: rgba(0,0,0,0.6);">
                    <div class="container">
                        <div class="row">
                            <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
							if($wpkites_breadcrumb_type == 'yoast') {
                            if ( function_exists('yoast_breadcrumb') ) {
                                $wpseo_titles=get_option('wpseo_titles');
                                if($wpseo_titles['breadcrumbs-enable']==true){
                                   $breadcrumbs = yoast_breadcrumb("","",false);
                                   $breadcrumb='<ul class="page-breadcrumb">
                                                    <li>'.wp_kses_post($breadcrumbs).'</li>
                                                </ul>';
                                }   
                            }
							}
                            if(get_theme_mod('breadcrumb_position','page_header')=='page_header'  && get_theme_mod('breadcrumb_enable',true)==true):
                                $breadcrumb_col='col-lg-6 col-md-6 col-sm-12';
                            else:
                                $breadcrumb_col='col-lg-12 col-md-6 col-sm-12';
                            endif;
                            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                            $breadcrumb_enable_disable  = get_theme_mod('breadcrumb_enable',true);
                            $wpkites_breadcrumbs_choice =get_post_meta(get_the_ID(),'wpkites_show_breadcrumb', true );
                            if(get_theme_mod('breadcrumb_alignment','parallel')=='parallel') { 
                                if(get_theme_mod('breadcrumb_position','page_header')=='page_header'):
                                    echo '<div class="col-lg-6 col-md-6 col-sm-12 parallel">';
                                    do_action('wpkites_breadcrumbs_page_title_hook');
                                    echo '</div>';
                                endif;
                                if($breadcrumb){echo '<div class="'.$breadcrumb_col.' text-right parallel">'.$breadcrumb.'</div>';}
                                elseif($wpkites_breadcrumb_type == 'rankmath') {
								if( function_exists( 'rank_math_the_breadcrumbs' ) ) {
							    echo '<div class="'.$breadcrumb_col.' text-right parallel">'; rank_math_the_breadcrumbs();	echo '</div>';
							    }}
						        elseif($wpkites_breadcrumb_type == 'navxt') { if( function_exists( 'bcn_display' ) ){
								echo '<div class="'.$breadcrumb_col.' text-right parallel"><nav class="navxt-breadcrumb">';
                                 bcn_display();
								echo '</nav></div>';;
                                }  
                               } 								
                            }
                            elseif(get_theme_mod('breadcrumb_alignment','parallel')=='parallelr') {
                                if($breadcrumb){echo '<div class="'.$breadcrumb_col.'  parallel">'.$breadcrumb.'</div>';}
							    elseif($wpkites_breadcrumb_type == 'rankmath') {
								if( function_exists( 'rank_math_the_breadcrumbs' ) ) {
							    echo '<div class="'.$breadcrumb_col.' text-left parallel">'; rank_math_the_breadcrumbs();	echo '</div>';
							    }}
						        elseif($wpkites_breadcrumb_type == 'navxt') { if( function_exists( 'bcn_display' ) ){
								echo '<div class="'.$breadcrumb_col.' text-left parallel"><nav class="navxt-breadcrumb">';
                                 bcn_display();
								echo '</nav></div>';;
                                }  
                               }	
                                if(get_theme_mod('breadcrumb_position','page_header')=='page_header'):
                                    if(($breadcrumb)||($wpkites_breadcrumb_type == 'rankmath')||($wpkites_breadcrumb_type == 'navxt')) { 
                                        $col='col-lg-6 col-md-6 col-sm-12';
                                    }
                                    else { 
                                        $col='col-lg-12 col-md-12 col-sm-12';
                                    }              
                                    echo '<div class="'.$col.' text-right parallel">';
                                    do_action('wpkites_breadcrumbs_page_title_hook');
                                    echo '</div>';
                                endif;
                            }
                            elseif(get_theme_mod('breadcrumb_alignment','parallel')=='centered') { 
                                echo '<div class="col-lg-12 col-md-12 col-sm-12 text-center">';
                                if(get_theme_mod('breadcrumb_position','page_header')=='page_header'):
                                    do_action('wpkites_breadcrumbs_page_title_hook');
                                endif;
                                if($breadcrumb){echo $breadcrumb;}
							    elseif($wpkites_breadcrumb_type == 'rankmath') {
								if( function_exists( 'rank_math_the_breadcrumbs' ) ) {
							        rank_math_the_breadcrumbs();	
							    }}
						        elseif($wpkites_breadcrumb_type == 'navxt') { if( function_exists( 'bcn_display' ) ){
								echo '<nav class="navxt-breadcrumb">';
                                 bcn_display();
								echo '</nav></div>';;
                                }  
                               }	
                                echo'</div>';
                            }
                            elseif(get_theme_mod('breadcrumb_alignment','parallel')=='left') { 
                                echo '<div class="col-lg-12 col-md-12 col-sm-12 text-left">';
                                if(get_theme_mod('breadcrumb_position','page_header')=='page_header'):                       
                                    do_action('wpkites_breadcrumbs_page_title_hook');
                                endif;
                                if($breadcrumb){echo $breadcrumb;}
								elseif($wpkites_breadcrumb_type == 'rankmath') {
								if( function_exists( 'rank_math_the_breadcrumbs' ) ) {
							    rank_math_the_breadcrumbs();
							    }}
						        elseif($wpkites_breadcrumb_type == 'navxt') { if( function_exists( 'bcn_display' ) ){
								echo '<nav class=" navxt-breadcrumb">';
                                 bcn_display();
								echo '</nav>';;
                                }  
                               }
                                echo'</div>';
                            }
                            elseif(get_theme_mod('breadcrumb_alignment','parallel')=='right'){ 
                                echo '<div class="col-lg-12 col-md-12 col-sm-12 text-right">';
                                if(get_theme_mod('breadcrumb_position','page_header')=='page_header'):
                                    do_action('wpkites_breadcrumbs_page_title_hook');
                                endif;
                                if($breadcrumb){echo $breadcrumb;}
								elseif($wpkites_breadcrumb_type == 'rankmath') {
								if( function_exists( 'rank_math_the_breadcrumbs' ) ) {
							     rank_math_the_breadcrumbs();
							    }}
						        elseif($wpkites_breadcrumb_type == 'navxt') { if( function_exists( 'bcn_display' ) ){
								echo '<nav class="navxt-breadcrumb">';
                                 bcn_display();
								echo '</nav>';;
                                }  
                               }
                                echo'</div>';
                            }?>
                        </div>	
                    </div>
                </div>
            </section>
            <div class="page-seperate"></div>
        <?php } else { ?><div class="page-seperate"></div><?php
        }
    }

endif;
?>