<?php
/*
  Plugin Name: Stop Stupid Shake
  Description: A theme-agnostic plugin for preventing the stupid shaking effect on the login form.
  Version: 1.0
  Author: Perfect Zero Labs
  Author URI: http://perfectzerolabs.com/
*/

class PZL_StopStupidShake
{
	static public function now()
	{
		remove_action('login_head', 'wp_shake_js', 12);
	}
}

add_action('login_head', array('PZL_StopStupidShake', 'now'));
