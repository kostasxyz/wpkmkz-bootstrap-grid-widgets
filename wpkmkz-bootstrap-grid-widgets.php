<?php
/**
 * @package   WPkmkz Boostrap Grid Widgets
 * @author    Kostas Skapator Charal <kostas@skapator.com>
 * @license   GPL-2.0+
 * @link      http://wpkamikaze.com/wpkmkz-bs-grid-widgets
 * @copyright 2014 WPkmkz
 *
 * wpkmkz-bootstrap-grid-widgets
 * Plugin Name:       WPkmkz Boostrap Grid Widgets
 * Plugin URI:        http://wpkamikaze.com/wpkmkz-bs-grid-widgets
 * Description:       Add bootstrap rows and columns to your widgets.
 * Tags:              bootstrap, widgets
 * Version:           1.0.0
 * Author:            Kostas Skapator Charal
 * Author URI:        http://skapator.com
 * Text Domain:       wpkmkz-bsgw
 * Requires at least: 3.5.1
 * Tested up to:      3.8.1
 * Stable tag:        1.0.0
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */

/*
|----------------------------------------------------------------
|   Add the options form
|----------------------------------------------------------------
|
*/
function wpkmkz_add_bs_grid_widgets_form($t,$return,$instance) {
    $instance = wp_parse_args(
        (array)$instance,
        array(
          'wpkmkz_bs_row_start' => '',
          'wpkmkz_bs_row_end'   => '',
          'wpkmkz_bs_col_lg'    => '',
          'wpkmkz_bs_col_md'    => '',
          'wpkmkz_bs_col_sm'    => '',
          'wpkmkz_bs_col_xs'    => '',
          'wpkmkz_bs_hide_lg'   => '',
          'wpkmkz_bs_hide_md'   => '',
          'wpkmkz_bs_hide_sm'   => '',
          'wpkmkz_bs_hide_xs'   => '',
        )
    );

    $cols = array(0,1,2,3,4,5,6,7,8,9,10,11,12);
    ?>
    <div class="wpkmkz-bs-grid-widgets">
      <h3><a href="#" class="wpkmkz-bs-grid-widgets-handle"><?php _e('Bootstrap grid class', 'wpkmkz-bsgw'); ?> <span class="dashicons dashicons-arrow-down-alt"></span></a></h3>
      <div class="wpkmkz-bs-grid-widgets-inner">
        <p>
          <?php _e('Please see ', 'wpkmkz-bsgw'); ?> 
          <a href="http://getbootstrap.com/css/#grid-options" target="_blank">
            <?php echo esc_url('http://getbootstrap.com/css/#grid-options'); ?>
          </a> 
          <?php _e(' for documentation.', 'wpkmkz-bsgw'); ?>
        </p>
        <hr>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_row_start'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_row_start'); ?>"
            name="<?php echo $t->get_field_name('wpkmkz_bs_row_start'); ?>"
            type="checkbox"
            value="1"
            <?php echo $instance['wpkmkz_bs_row_start'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Open a div.row', 'wpkmkz-bsgw'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_row_end'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_row_end'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_row_end'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_row_end'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Close a div.row', 'wpkmkz-bsgw'); ?></label>
        </p>
        <hr>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_lg'); ?>"><?php _e('.col-lg- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_lg'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_lg'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_lg'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_md'); ?>"><?php _e('.col-md- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_md'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_md'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_md'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_sm'); ?>"><?php _e('.col-sm- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_sm'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_sm'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_sm'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_xs'); ?>"><?php _e('.col-xs- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_xs'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_xs'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_xs'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </p>
        <hr>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_lg'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_hide_lg'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_hide_lg'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_hide_lg'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-lg', 'wpkmkz'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_md'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_hide_md'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_hide_md'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_hide_md'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-md', 'wpkmkz'); ?></label>
        </p>
        <p>
            <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_sm'); ?>">
            <input
              class="wpkmkz-bs-grid-input"
              id="<?php echo $t->get_field_id('wpkmkz_bs_hide_sm'); ?>"
              type="checkbox"
              name="<?php echo $t->get_field_name('wpkmkz_bs_hide_sm'); ?>"
              value="1"
              <?php echo $instance['wpkmkz_bs_hide_sm'] == '1' ? ' checked="checked"' : ''; ?>>
              <?php _e('Hide on .col-sm', 'wpkmkz'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_xs'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_hide_xs'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_hide_xs'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_hide_xs'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-xs', 'wpkmkz'); ?></label>
        </p>
      </div>
    </div>
    <?php
    $return = null;
    return array($t,$return,$instance);
}
add_action('in_widget_form', 'wpkmkz_add_bs_grid_widgets_form',5,3);


/*
|----------------------------------------------------------------
|   Save form options
|----------------------------------------------------------------
|
*/
function wpkmkz_add_bs_grid_widgets_form_update($instance, $new_instance, $old_instance){
    $instance['wpkmkz_bs_row_start'] = $new_instance['wpkmkz_bs_row_start'];
    $instance['wpkmkz_bs_row_end']   = $new_instance['wpkmkz_bs_row_end'];
    $instance['wpkmkz_bs_col_lg']    = $new_instance['wpkmkz_bs_col_lg'];
    $instance['wpkmkz_bs_col_md']    = $new_instance['wpkmkz_bs_col_md'];
    $instance['wpkmkz_bs_col_sm']    = $new_instance['wpkmkz_bs_col_sm'];
    $instance['wpkmkz_bs_col_xs']    = $new_instance['wpkmkz_bs_col_xs'];
    $instance['wpkmkz_bs_hide_xl']   = $new_instance['wpkmkz_bs_hide_xl'];
    $instance['wpkmkz_bs_hide_lg']   = $new_instance['wpkmkz_bs_hide_lg'];
    $instance['wpkmkz_bs_hide_md']   = $new_instance['wpkmkz_bs_hide_md'];
    $instance['wpkmkz_bs_hide_sm']   = $new_instance['wpkmkz_bs_hide_sm'];
    $instance['wpkmkz_bs_hide_xs']   = $new_instance['wpkmkz_bs_hide_xs'];
    return $instance;
}
add_filter('widget_update_callback', 'wpkmkz_add_bs_grid_widgets_form_update',5,3);


/*
|----------------------------------------------------------------
|   Add widget css classes
|----------------------------------------------------------------
|
*/
function wpkmkz_add_bs_grid_widgets_dynamic_sidebar_params($params){
    global $wp_registered_widgets;
    $widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];

    $classes = array();
    $cols = array(
      'wpkmkz_bs_col_lg'  =>'col-lg-',
      'wpkmkz_bs_col_md'  =>'col-md-',
      'wpkmkz_bs_col_sm'  =>'col-sm-',
      'wpkmkz_bs_col_xs'  =>'col-xs-',
      'wpkmkz_bs_hide_lg' =>'hidden-lg',
      'wpkmkz_bs_hide_md' =>'hidden-md',
      'wpkmkz_bs_hide_sm' =>'hidden-sm',
      'wpkmkz_bs_hide_xs' =>'hidden-xs'
    );

    foreach($cols as $col_opt => $col)
    {
      if(isset($widget_opt[$widget_num][$col_opt]) && $widget_opt[$widget_num][$col_opt] != '0')
        $classes[] = strpos($col_opt, 'hide') ? $col : $col.$widget_opt[$widget_num][$col_opt];
    }

    $params[0]['before_widget'] = str_replace(
        'class="',
        'class="' . join(' ', $classes ) . ' ',
        $params[0]['before_widget']
    );

    if(isset($widget_opt[$widget_num]['wpkmkz_bs_row_start']) && $widget_opt[$widget_num]['wpkmkz_bs_row_start'] == '1')
      $params[0]['before_widget'] = '<div class="row">'.$params[0]['before_widget'];

    if(isset($widget_opt[$widget_num]['wpkmkz_bs_row_end']) && $widget_opt[$widget_num]['wpkmkz_bs_row_end'] == '1')
      $params[0]['after_widget'] = $params[0]['after_widget'].'</div><!-- /.row -->';

    return $params;
}
add_filter('dynamic_sidebar_params', 'wpkmkz_add_bs_grid_widgets_dynamic_sidebar_params');


/*
|----------------------------------------------------------------
|   Admin scripts
|----------------------------------------------------------------
|
*/
function wpkmkz_add_bs_grid_widgets_head_style(){
  global $pagenow;

  if($pagenow == 'widgets.php')
  {
    echo '<style>.wpkmkz-bs-grid-widgets label{font-weight: bold;}.wpkmkz-bs-grid-widgets>h3 {background:#0074a2;color:#fff;border-top:3px solid #0074a2;text-align:center;border-radius:4px}.wpkmkz-bs-grid-widgets>h3>a{line-height:30px;color:#fff}.wpkmkz-bs-grid-widgets>h3>a span{line-height:30px;color:#fff}.wpkmkz-bs-grid-widgets-inner{display:none;}.wpkmkz-bs-grid-widgets-handle{text-decoration:none;}</style>';

    echo '<script type="text/javascript">
            jQuery(document).ready(function($){
              $("body").on("click", ".wpkmkz-bs-grid-widgets-handle", function(){
                $(this).parent().siblings(".wpkmkz-bs-grid-widgets-inner").slideToggle();
                return false;
              });
            });
        </script>';
  }

}
add_action('admin_head', 'wpkmkz_add_bs_grid_widgets_head_style');