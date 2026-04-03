<?php
/**
 * Main Configuration File
 */

// Dynamic Base URL Calculation
$base_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = $base_path === '/' ? '/' : $base_path . '/';

// Site Settings
$config['site_name']   = 'SD Cendekia';
$config['site_email']  = 'info@sdcendekia.sch.id';
$config['site_phone']  = '+62 812-3456-7890';
$config['site_address'] = 'Jl. Pendidikan No. 123, Indonesia';
