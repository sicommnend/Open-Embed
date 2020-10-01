<?php
if (!defined('SMF'))
	require_once('SSI.php');

add_integration_function('integrate_pre_include','$sourcedir/og.php');
add_integration_function('integrate_bbc_codes','og_bbc');
add_integration_function('integrate_bbc_buttons', 'og_bbc_button');
add_integration_function('integrate_modify_modifications','og_admin');
add_integration_function('integrate_admin_areas','og_admin_areas');
$smcFunc['db_query']('', "INSERT INTO {db_prefix}scheduled_tasks (time_offset, time_regularity, time_unit, disabled, task) VALUES ('0', '1', 'w', '0', 'og_prune')");
?>
