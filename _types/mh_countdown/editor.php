<?php 

defined('is_running') or die('Not an entry point...');

$editor_lang = self::$i18n['editor']['lang'];

$editor = array(
  'custom_scripts'  => false,
  'custom_css'      => false,
  'controls'        => array(
  
    // value 'D_day' --start
    'D_day' => array(
      'label' => '<i class="fa fa-calendar"></i> '.$editor_lang['D_day'],
      'control_type' => 'datepicker',
      'attributes' => array(
        // 'class' => '',
        'placeholder' => 'Click me!',
        // 'pattern' => '', // regex for validation
      ),
      'on' => array(
        'focus' => 'function(){ $(this).select(); }',
      ),
    ), 
    // value 'D_day' --end


    // value 'T_time' --start
    'T_time' => array(
      'label' => '<i class="fa fa-clock-o"></i> '.$editor_lang['T_time'],
      'control_type' => 'clockpicker',
      'attributes' => array(
        // 'class' => '',
        'placeholder' => 'Click me!',
        // 'pattern' => '', // regex for validation
      ),
      'on' => array(
        'focus' => 'function(){ $(this).select(); }',
      ),
    ), 
    // value 'T_time' --end


    // value 'zone' --start
    'zone' => array(
      'label' => '<i class="fa fa-clock-o"></i> '.$editor_lang['zone'],
      'control_type' => 'text',
      'attributes' => array(
        // 'class' => '',
        'readonly' => 'readonly',
        //'placeholder' => '',
        // 'pattern' => '', // regex for validation
      ),
      'on' => array(
        'CustomSection:formElementsLoaded' => 'function(){ 
            $(this).val(Intl.DateTimeFormat().resolvedOptions().timeZone);
      	 }',
      ),
    ), 
    // value 'zone' --end


    // value 'down' --start
    'down' => array(
      'label' => ''.$editor_lang['down'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'down' --end


    // value 'years' --start
    'years' => array(
      'label' => ''.$editor_lang['year'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'years' --end


    // value 'weeks' --start
    'weeks' => array(
      'label' => ''.$editor_lang['week'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'weeks' --end


    // value 'days' --start
    'days' => array(
      'label' => ''.$editor_lang['day'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'days' --end


    // value 'hours' --start
    'hours' => array(
      'label' => ''.$editor_lang['hour'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'hours' --end


    // value 'minutes' --start
    'minutes' => array(
      'label' => ''.$editor_lang['minute'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'minutes' --end


    // value 'seconds' --start
    'seconds' => array(
      'label' => ''.$editor_lang['second'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(
      ),
    ),
    // value 'seconds' --end


    // value 'header' --start
    'header' => array(
      'label' => '<i class="fa fa-header"></i> '.$editor_lang['header'],
      'control_type' => 'text',
      'attributes' => array(
      ),
      'on' => array(
      ),
    ),
    // value 'header' --end


    // value 'header' --start
    'font-size' => array(
      'label' => '<i class="fa fa-text-height"></i> '.$editor_lang['font_size'],
      'control_type' => 'text',
      'attributes' => array(
      ),
      'on' => array(
      ),
    ),
    // value 'font-size' --end


    // value 'header' --start
    'font-color' => array(
      'label' => '<i class="fa fa-paint-brush"></i> '.$editor_lang['font_color'],
      'control_type' => 'colorpicker',
      'attributes' => array(
      ),
      'on' => array(
      ),
    ),
    // value 'font-color' --end

  ),
);
