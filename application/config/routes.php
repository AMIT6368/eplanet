<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LoginAuth/index';
$route['404_override'] = 'Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
////  GENERAL  Login Auth 
$route['LoginProcess'] = 'LoginAuth/LoginProcess';
$route['SignUpProcess'] = 'LoginAuth/SignUpProcess';
$route['Signup'] = 'LoginAuth/signup';
$route['Login'] = 'LoginAuth/index';
$route['LogoutJS'] = 'LoginAuth/LogoutJS';
$route['Logout'] = 'LoginAuth/Logout';
$route['Getcookie'] = 'LoginAuth/Getcookie';
///  superadmin
$route['SDashboard'] = 'Superadmin/Dashboard';
$route['superadmin'] = 'Superadmin/index';


///  user section  
$route['Home'] = 'Home/index';
$route['UDashboard'] = 'Home/UDashboard';
$route['UMyProfile'] = 'Home/MyProfile';
$route['UWallet'] = 'Home/UWallet';
$route['UNotification'] = 'Home/UNotification';
$route['UCategory'] = 'Home/UCategory';
$route['USubCategory'] = 'Home/USubCategory';
$route['UCatSubCategoryDetail'] = 'Home/UCatSubCategoryDetail';
$route['UCatSubCategoryDetail_1'] = 'Home/UCatSubCategoryDetail_1';
$route['UCatSubCategoryDetail_2'] = 'Home/UCatSubCategoryDetail_2';
$route['UCatSubCategoryDetail_3'] = 'Home/UCatSubCategoryDetail_3';


?>