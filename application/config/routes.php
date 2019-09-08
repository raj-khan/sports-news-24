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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Front-End Page
$route['cricket'] = 'home/cricket';
$route['about'] = 'home/about';
$route['privacy-policy'] = 'home/privacyPolicy';
$route['copyright'] = 'home/copyright';

//BackendPage

//Admin_login
$route['user-admin'] = 'Admin_user_panel';
$route['user-admin/login/login-check'] = 'Admin_user_panel/admin_login_check';
$route['admin/super-admin'] = 'Super_admin';
$route['admin/change-password'] = 'Super_admin/changePass';

//===========Categories==========

//main Category
$route['user-admin/add-main-category'] = 'Category/add_category';
$route['user-admin/save-category'] = 'Category/save_category';
$route['user-admin/view-all-category'] = 'Category/manage_category';
$route['user-admin/publish-category/(.+)'] = 'Category/publish_category/$1';
$route['user-admin/un_publish-category/(.+)'] = 'Category/un_publish_category/$1';
$route['user-admin/update-category/(.+)'] = 'Category/show_for_update_category/$1';
$route['user-admin/update-main-category'] = 'Category/update_category';
$route['user-admin/delete-category/(.+)'] = 'Category/delete_category/$1';

//Sub Category
$route['user-admin/add-sub-category'] = 'Category/add_sub_category';
$route['user-admin/save-sub-category'] = 'Category/save_sub_category';
$route['user-admin/view-sub-category'] = 'Category/manage_sub_category';
$route['user-admin/publish-sub-category/(.+)'] = 'Category/publish_sub_category/$1';
$route['user-admin/un-publish-sub-category/(.+)'] = 'Category/un_publish_sub_category/$1';
$route['user-admin/update-sub-category/(.+)'] = 'Category/show_for_update_sub_category/$1';
$route['user-admin/updated-sub-category'] = 'Category/update_sub_category';
$route['user-admin/delete-sub-category/(.+)'] = 'Category/delete_sub_category/$1';


//========News==========
$route['user-admin/add-news'] = 'News/add_news';
$route['user-admin/save-news'] = 'News/save_news';
$route['user-admin/view-news'] = 'News/view_news';
$route['user-admin/un-publish-news/(.+)'] = 'News/un_publish_news/$1';
$route['user-admin/publish-news/(.+)'] = 'News/publish_news/$1';
$route['user-admin/update-news/(.+)'] = 'News/show_for_update_news/$1';
$route['user-admin/updated_news'] = 'News/update_news';
$route['user-admin/delete-news/(.+)'] = 'News/delete_news/$1';


//===============Other Page===========
$route['user-admin/add-common-page'] = 'CommonPage/createCommonPage';
$route['user-admin/save-common-page'] = 'CommonPage/storeCommonPage';
$route['user-admin/view-common-page'] = 'CommonPage/viewCommonPage';
$route['user-admin/update-common-page/(.+)'] = 'CommonPage/showForUpdateCommonPage/$1';
$route['user-admin/update-common-page'] = 'CommonPage/updateCommonPage';
$route['user-admin/delete-common-page-content/(.+)'] = 'CommonPage/deleteCommonPage/$1';



//#======================details Page View=========================
$route['single/(.+.+)'] = 'Fetch_frontend_data/show_details_news/$1/$2';


//#======================Menu Page View=========================
$route['sports/(.+.+)'] = 'Fetch_frontend_data/show_menu_news/$1/$2';
