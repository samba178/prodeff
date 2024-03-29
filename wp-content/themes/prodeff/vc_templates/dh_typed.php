<?php
$typed_text_bg = $typed_text_color = $typed_font_size = '';
$atts = vc_map_get_attributes($this->getShortcode(), $atts);


extract($atts);

wp_enqueue_script('typed');

$class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class, $this->settings['base'], $atts );

$css_class = "dh-typed {$css_class}";
$custom_css = '';
if(!empty($typed_font_size))
	$custom_css .='font-size:'.$typed_font_size.';';

if(preg_match_all("/(\*.*?\*)/is", $typed_text, $typed_entries))
{
	foreach($typed_entries[0] as $typed_entry)
	{
		$typed_options = array(
			'cursorChar' => $typed_options_cursorchar,
			'showCursor' => $typed_options_cursorchar ? true : false,
				
			'loop'       => $typed_options_loopcount == -1 || $typed_options_loopcount > 0 ? true : false,
			'loopCount'  => $typed_options_loopcount > 0 ? ($typed_options_loopcount-1) : 0,
				
			'typeSpeed'  => absint($typed_options_typespeed),
			'backSpeed'  => absint($typed_options_backspeed),
				
			'startDelay' => absint($typed_options_startdelay),
			'backDelay'  => absint($typed_options_backdelay),
		);

		$typed_processed = $this->process_entry($typed_entry, $typed_options,$typed_font_size, $typed_text_bg,$typed_text_color);
		$typed_text = str_replace($typed_entry, $typed_processed['el'], $typed_text);

	}
}
?>
<div class="<?php echo esc_attr($css_class) . vc_shortcode_custom_css_class($css, ' '); ?>">
	<div class="dh-typed-wrap" <?php if(!empty($custom_css)){?>style="<?php echo $custom_css ?>"<?php }?>>
	<?php echo $typed_text; ?>
	</div>
</div>
