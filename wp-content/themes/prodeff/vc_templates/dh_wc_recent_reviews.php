<?php
$output ='';
$default_atts =  array(
	'title'=>'',
	'number'=>10,
	'el_class' => ''
);
extract( shortcode_atts($default_atts, $atts ) );
$el_class = $this->getExtraClass( $el_class );
if(!empty($el_class))
	$output .= '<div class="' . $el_class . '">';
$type = 'WC_Widget_Recent_Reviews';
$args = array('widget_id'=>'woocommerce_recent_reviews');
ob_start();
the_widget( $type, wp_parse_args($atts,$default_atts), $args );
$output .= ob_get_clean();
if(!empty($el_class))
	$output .= '</div>';
echo $output;