<?php 
defined('is_running') or die('Not an entry point...');

/****************************/
/* Flipping Countdown Timer */
/****************************/


/* localisation */
$section_lang = self::$i18n['section']['lang'];

$section = array();
$section['values'] = array_merge(array(
  'end_day'       => date("Y",strtotime('+1 year')).'-01-01',
  'end_time'      => '00:00',
  'years'         => '0',
  'weeks'         => '0',
  'days'          => '1',
  'hours'         => '1',
  'minutes'       => '1',
  'seconds'       => '1',
  'header'       => 'Until the New Year',
  'font-size'    => '1rem',
  'font-color'   => '#333',
), $sectionCurrentValues );

$section['attributes'] = array(
  'class' => '',
);

$format = '';
$format .= $section['values']['years'] ? 'year|' : '';
$format .= $section['values']['weeks'] ? 'week|' : '';
$format .= $section['values']['days'] ? 'day|' : '';
$format .= $section['values']['hours'] ? 'hour|' : '';
$format .= $section['values']['minutes'] ? 'minute|' : '';
$format .= $section['values']['seconds'] ? 'second' : '';

$section['content']  = '
	<div class="countdown-box">
		<div class="countdown-header h2">
		 {{header}}
		</div>
		<div class="countdown" style="font-size:{{font-size}}; color:{{font-color}}"
			data-datetime = "{{end_day}}, {{end_time}}";
			data-tyears = "'.$section_lang['year'].'";
			data-tweeks = "'.$section_lang['week'].'";
			data-tdays = "'.$section_lang['day'].'";
			data-thours = "'.$section_lang['hour'].'";
			data-tminutes = "'.$section_lang['minute'].'";
			data-tseconds = "'.$section_lang['second'].'";
			data-format = "'.$format.'";
		>
		</div>
	</div>
';

$section['gp_label'] = 'mh Countdown Timer';
$section['gp_color'] = '#E04006';

$section['always_process_values'] = false;

$components = '';

$css_files = array( 'style.scss', 'vendor/countDown.scss' );
$js_files = array( 'vendor/countDown.min.js', 'script.js' );
$javascript = '';
