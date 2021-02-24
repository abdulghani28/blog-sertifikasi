<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Admin
$route['login_admin'] = 'AdminController/login';
$route['register_admin'] = 'AdminController/register';
$route['prosesregister_admin'] = 'AdminController/prosesregister_admin';
$route['proseslogin_admin'] = 'AdminController/proseslogin_admin';
$route['admin/(:any)'] = 'AdminController/halaman_admin/$1';

//Hapus
$route['hapus/kategori/(:num)'] = 'KategoriController/hapus/$1';
$route['hapus/artikel/(:num)'] = 'ArtikelController/hapus/$1';

//Tambah
$route['tambah/kategori'] = 'KategoriController/tambah';
$route['tambah/artikel'] = 'ArtikelController/tambah';

//Ke Edit
$route['ke_edit/artikel/(:num)'] = 'ArtikelController/ke_edit/$1';

//Edit
$route['edit/kategori/(:num)'] = 'KategoriController/edit/$1';
$route['edit/artikel/(:num)'] = 'ArtikelController/edit/$1';

//Guest
$route['artikel/(:num)'] = 'GuestController/ke_detail/$1';
$route['pencarian'] = 'GuestController/pencarian';

$route['logout'] = 'AdminController/logout';
$route['default_controller'] = 'GuestController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
