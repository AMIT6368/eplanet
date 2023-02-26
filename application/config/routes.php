<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LoginAuth/index';
$route['404_override'] = 'Superadmin/page_not_found';
// $route['404_override'] = '';
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
$route['SAdminProfile'] = 'Superadmin/AdminProfile';
$route['SWebsiteSetting'] = 'Superadmin/WebsiteSetting';
$route['SLoginActivity'] = 'Superadmin/LoginActivity';
//other superadmin 
$route['SDashboard'] = 'Superadmin/Dashboard';
$route['superadmin'] = 'Superadmin/index';
$route['SActiveUser'] = 'Superadmin/ActiveUser';
$route['SDeactiveUser'] = 'Superadmin/DeactiveUser';
//menu
$route['SMenuList'] = 'Superadmin/MenuList';
$route['SMenuAdd'] = 'Superadmin/MenuAdd';
$route['SMenuEdit/(.+)'] = 'Superadmin/MenuEdit/$1';
$route['SMenuChangeStatus'] = 'Superadmin/MenuChangeStatus';
$route['SMenuDelete'] = 'Superadmin/MenuDelete';
$route['SMenuEditProcess'] = 'Superadmin/MenuEditProcess';
$route['SMenuAddProcess'] = 'Superadmin/MenuAddProcess';
//Category
$route['SCategoryList'] = 'Superadmin/CategoryList';
$route['SCategoryAdd'] = 'Superadmin/CategoryAdd';
$route['SCategoryEdit/(.+)'] = 'Superadmin/CategoryEdit/$1';
$route['SCategoryChangeStatus'] = 'Superadmin/CategoryChangeStatus';
$route['SCategoryDelete'] = 'Superadmin/CategoryDelete';
$route['SCategoryEditProcess'] = 'Superadmin/CategoryEditProcess';
$route['SCategoryAddProcess'] = 'Superadmin/CategoryAddProcess';
// Subcategory
$route['SSubCategoryList'] = 'Superadmin/SubCategoryList';
$route['SSubCategoryAdd'] = 'Superadmin/SubCategoryAdd';
$route['SSubCategoryEdit/(.+)'] = 'Superadmin/SubCategoryEdit/$1';
$route['SSubCategoryChangeStatus'] = 'Superadmin/SubCategoryChangeStatus';
$route['SSubCategoryDelete'] = 'Superadmin/SubCategoryDelete';
$route['SSubCategoryEditProcess'] = 'Superadmin/SubCategoryEditProcess';
$route['SSubCategoryAddProcess'] = 'Superadmin/SubCategoryAddProcess';
//Slider
$route['SSliderList'] = 'Superadmin/SliderList';
$route['SSliderAdd'] = 'Superadmin/SliderAdd';
$route['SSliderEdit/(.+)'] = 'Superadmin/SliderEdit/$1';
$route['SSliderChangeStatus'] = 'Superadmin/SliderChangeStatus';
$route['SSliderDelete'] = 'Superadmin/SliderDelete';
$route['SSliderEditProcess'] = 'Superadmin/SliderEditProcess';
$route['SSliderAddProcess'] = 'Superadmin/SliderAddProcess';
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