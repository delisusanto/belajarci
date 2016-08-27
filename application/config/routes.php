<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'halaman';
$route['(:any)'] = 'halaman/page/$1';
$route['halaman/(:any)'] = 'halaman/page/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
