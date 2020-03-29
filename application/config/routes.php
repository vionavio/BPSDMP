<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "page/home";
$route['404_override'] = 'error';


$route['profil'] = 'page/profil';
$route['profilpeneliti'] = 'page/profilpeneliti';
$route['dasarhukum'] = 'page/dasarhukum';
$route['tugasfungsi'] = 'page/tugasfungsi';
$route['pageso'] = 'page/pageso';
$route['pagerkt'] = 'page/pagerkt';
$route['detailkominfo'] = 'page/detailkominfo';
$route['pagepengembangansdm'] = 'page/pagepengembangansdm';
$route['pengumuman'] = 'page/pengumuman';
$route['pagegaleri'] = 'page/pagegaleri';
$route['pagekontak'] = 'page/pagekontak';
$route['pagebr'] = 'page/pagebr';
$route['pagemg'] = 'page/pagemg';
$route['pagehl'] = 'page/pagehl';
$route['pagevisimisi'] = 'page/pagevisimisi';

/*********** USER DEFINED ROUTES *******************/

$route['admin'] = 'user';

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['InputBerita'] = 'Berita/input';
$route['Komentar'] = 'Berita/komentar';
$route['LihatDataBerita'] = 'Berita';

$route['InputProfil'] = 'Profil/input';
$route['list2'] = 'galeri/list2';
$route['LihatDataProfil'] = 'Profil';

$route['InputHasillitbang'] = 'Hasillitbang/input';
$route['LihatDataHasillitbang'] = 'Hasillitbang';

$route['InputBungarampai'] = 'Bungarampai/input';
$route['LihatDataBungarampai'] = 'Bungarampai';

$route['InputStrukturorganisasi'] = 'Strukturorganisasi/input';
$route['LihatDataSo'] = 'Strukturorganisasi';

$route['InputVisimisi'] = 'Visimisi/input';
$route['LihatDataVisimisi'] = 'Visimisi';

$route['InputIptek'] = 'Iptek/input';
$route['LihatDataIptek'] = 'Iptek';

$route['InputPengembangansdm'] = 'Pengembangansdm/input';
$route['LihatDataPengembangansdm'] = 'Pengembangansdm';

$route['InputPengumuman'] = 'Pengumuman/input';
$route['LihatDataPengumuman'] = 'Pengumuman';
$route['SimpanPengumuman'] = 'user/Input_Simpan_Pengumuman';

$route['InputRkt'] = 'Rkt/input';
$route['LihatDataRkt'] = 'Rkt';

$route['InputMajalahgagasan'] = 'Majalahgagasan/input';
$route['LihatDataMajalahgagasan'] = 'Majalahgagasan';

$route['InputKaryawan'] = 'Kepegawaian/input';
$route['LihatDataKaryawan'] = 'Kepegawaian';

$route['InputKontak'] = 'Kontak/input';
$route['LihatDataKontak'] = 'Kontak';
$route['SimpanKontak'] = 'user/Input_Simpan_Kontak';

$route['InputGaleri'] = 'Galeri/input';
$route['LihatDataGaleri'] = 'Galeri';

$route['InputPengumuman'] = 'user/Input_pengumuman';
$route['SimpanBerita'] = 'user/Input_Simpan_Berita';

$route['SimpanProfil'] = 'user/Input_Simpan_Profil';
$route['SimpanIptek'] = 'user/Input_Simpan_Iptek';
$route['SimpanRkt'] = 'Rkt/Input_Simpan_Rkt';

$route['SimpanGaleri'] = 'user/Input_Simpan_Galeri';
$route['SimpanKaryawan'] = 'user/Input_Simpan_Kepegawaian';

$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

/* End of file routes.php */
/* Location: ./application/config/routes.php */