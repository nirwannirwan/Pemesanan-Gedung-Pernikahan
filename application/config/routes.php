<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'welcome';
$route['home/search'] = 'home/home/search_gedung/$1';
$route['home/details/(:any)'] = 'home/home/gedung_details/$1';
$route['home/view-catering'] = 'home/home/view_catering';
$route['validate'] = 'login/sign_in';
$route['home/order-gedung/validate/(:any)'] = 'home/home/order';
$route['home/(:any)/sort-by-name'] = 'home/home/sort_by_name';
$route['home/jadwal-periode'] = 'home/home/jadwal_per_periode/$1/$2';
$route['home/pemesanan'] = 'home/home/pemesanan';
$route['home/pembayaran'] = 'home/home/pembayaran';
$route['home/pemesanan/details/(:any)'] = 'home/home/detail_pemesanan/$1';
$route['home/order-gedung/(:any)'] = 'home/home/order_gedung/$1';
$route['home/cancel-order/(:any)'] = 'home/home/cancel_order/$1';
$route['home/(:any)/sort-by-capacity'] = 'home/home/sort_by_capacity';
$route['home/jadwal'] = 'home/home/jadwal_gedung';
$route['home/(:any)'] = 'home/home';

$route['pembayaran/frm_pembayaran'] = 'pembayaran/pembayaran/index';
$route['registration/status'] = 'registration/registration/add_user';
$route['edit_data/(:any)'] = 'home/home/edit_data/$1';
$route['register'] = 'registration/registration';

$route['admin'] = 'admin/login';
$route['admin/edit/(:any)'] = 'admin/admin_controls/edit_gedung/$1';
$route['admin/pemesanan2'] = 'admin/admin_controls/pemesanan2';
$route['admin/dashboard'] = 'admin/admin_controls/dashboard';
$route['admin/detail_transaksi/(:any)'] = 'admin/admin_controls/detail_transaksi/$1';
$route['admin/transaksi'] = 'admin/admin_controls/transaksi';
$route['admin/pembayaran'] = 'admin/admin_controls/pembayaran';
$route['admin/pembayaran/details/(:any)'] = 'admin/admin_controls/read_transaction/$1';
$route['admin/detail_pemesanan/(:any)'] = 'admin/admin_controls/detail_pemesanan/$1';
$route['admin/add_gedung'] = 'admin/admin_controls/tambah_gedung';
$route['admin/add_catering'] = 'admin/admin_controls/tambah_catering';
$route['admin/rekap_aktivitas'] = 'admin/admin_controls/rekap_aktivitas';
$route['admin/rekap_pembayaran'] = 'admin/admin_controls/rekap_pembayaran';
$route['admin/rekap_pembayaran/details'] = 'admin/admin_controls/rekap_pembayaran_det/$1/$2';
$route['admin/rekap_aktivitas/details'] = 'admin/admin_controls/rekap_aktivitas_det/$1/$2';
$route['admin/log_in'] = 'admin/login/is_sign_in';
$route['admin/log_out'] = 'admin/login/log_out';
$route['admin/pembayaran-listrik'] = 'admin/admin_controls/pembayaran_listrik';
$route['admin/pembayaran-air'] = 'admin/admin_controls/pembayaran_air';
$route['admin/pembayaran-kebersihan'] = 'admin/admin_controls/pembayaran_kebersihan';
$route['admin/list'] = 'admin/admin_controls/list_user';
$route['admin/gedung'] = 'admin/admin_controls/list_gedung';
$route['admin/catering'] = 'admin/admin_controls/list_catering';
$route['admin/kegiatan_download_pdf/(:any)/(:any)'] = 'admin/admin_controls/kegiatan_export_pdf/$1/$2';
$route['admin/perawatan_download_pdf/(:any)/(:any)'] = 'admin/admin_controls/perawatan_export_pdf/$1/$2';
$route['admin/rekap_transaksi'] = 'admin/admin_controls/rekap_transaksi';
$route['admin/rekap_transaksi/details'] = 'admin/admin_controls/rekap_transaksi_det/$1/$2';
$route['admin/transaksi_download_pdf/(:any)/(:any)'] = 'admin/admin_controls/transaksi_export_pdf/$1/$2';

$route['manage'] = 'manage/manage/index';
$route['manage/dashboard'] = 'manage/manage/dashboard';
$route['manage/report_perawatan'] = 'manage/manage/laporan_perawatan';
$route['manage/download_pdf'] = 'manage/manage/all_export_to_pdf';
$route['manage/listrik_download_pdf'] = 'manage/manage/listrik_export_to_pdf';
$route['manage/air_download_pdf'] = 'manage/manage/air_export_to_pdf';
$route['manage/kebersihan_download_pdf'] = 'manage/manage/kebersihan_export_to_pdf';
$route['manage/report_kegiatan'] = 'manage/manage/laporan_kegiatan';
$route['manage/kegiatan_download_pdf/(:any)/(:any)'] = 'manage/manage/kegiatan_export_pdf/$1/$2';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

