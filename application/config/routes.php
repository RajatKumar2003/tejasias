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
$route['default_controller'] = 'Site_Controller';
$route['admin'] = 'Admin_Controller';
$route['Gallery'] = 'Gallery_Controller';
$route['Gallery/savegallery'] = 'Gallery_Controller/savegallery';
$route['Gallery/deletegallery'] = 'Gallery_Controller/deletegallery';
$route['Blog/category'] = 'Blog_Controller/category';
$route['Blog/savecategory'] = 'Blog_Controller/savecategory';
$route['Blog/editcategory/(:num)'] = 'Blog_Controller/editcategory/$1';
$route['Blog/updatecategory'] = 'Blog_Controller/updatecategory';
$route['Blog/deletecategory'] = 'Blog_Controller/deletecategory';
$route['Blog'] = 'Blog_Controller/index';
$route['Blog/saveblog'] = 'Blog_Controller/saveblog';
$route['Blog/editblog/(:num)'] = 'Blog_Controller/editblog/$1';
$route['Blog/updateblog'] = 'Blog_Controller/updateblog';
$route['Blog/deleteblog'] = 'Blog_Controller/deleteblog';
$route['Testimonial'] = 'Testimonial_Controller';
$route['Testimonial/savetestimonial'] = 'Testimonial_Controller/savetestimonial';
$route['Testimonial/edittestimonial/(:num)'] = 'Testimonial_Controller/edittestimonial/$1';
$route['Testimonial/updatetestimonial'] = 'Testimonial_Controller/updatetestimonial';
$route['Testimonial/deletetestimonial'] = 'Testimonial_Controller/deletetestimonial';
$route['Seo'] = 'Seo_Controller';
$route['Seo/updateseo'] = 'Seo_Controller/updateseo';
$route['Inquiry'] = 'Inquiry_Controller';
$route['Inquiry/deletecontact'] = 'Inquiry_Controller/deletecontact';
$route['Inquiry/deletesyllabusinquiry'] = 'Inquiry_Controller/deletesyllabusinquiry';
$route['Inquiry/deletedonate'] = 'Inquiry_Controller/deletedonate';
$route['Navigation'] = 'Navigation_Controller';
$route['Navigation/parentlink'] = 'Navigation_Controller/parentlink';
$route['Navigation/saveparentlink'] = 'Navigation_Controller/saveparentlink';
$route['Navigation/editparent/(:num)'] = 'Navigation_Controller/editparent/$1';
$route['Navigation/updateparentlink'] = 'Navigation_Controller/updateparentlink';
$route['Navigation/deleteparentlink'] = 'Navigation_Controller/deleteparentlink';
$route['Navigation/savemenulink'] = 'Navigation_Controller/savemenulink';
$route['Navigation/editmenu/(:num)'] = 'Navigation_Controller/editmenu/$1';
$route['Navigation/updatemenulink'] = 'Navigation_Controller/updatemenulink';
$route['Navigation/deletemenulink'] = 'Navigation_Controller/deletemenulink';

$route['Update/category'] = 'Update_Controller/category';
$route['Update/savecategory'] = 'Update_Controller/savecategory';
$route['Update/editcategory/(:num)'] = 'Update_Controller/editcategory/$1';
$route['Update/updatecategory'] = 'Update_Controller/updatecategory';
$route['Update/deletecategory'] = 'Update_Controller/deletecategory';
$route['Update'] = 'Update_Controller/index';
$route['Update/saveupdate'] = 'Update_Controller/saveupdate';
$route['Update/editupdate/(:num)'] = 'Update_Controller/editupdate/$1';
$route['Update/updateupdates'] = 'Update_Controller/updateupdates';
$route['Update/deleteupdate'] = 'Update_Controller/deleteupdate';
$route['Syllabus'] = 'Syllabus_Controller';
$route['Syllabus/savesyllabus'] = 'Syllabus_Controller/savesyllabus';
$route['Syllabus/deletesyllabus'] = 'Syllabus_Controller/deletesyllabus';
$route['Syllabus/downloadSyllabus'] = 'Site_Controller/downloadsyllabus';
$route['logout'] = 'Logout';
$route['404_override'] = '';
$route['contact'] = 'Site_Controller/contact';
$route['add_contact'] = 'Site_Controller/addcontact';
$route['savecontactform'] = 'Site_Controller/savecontactform';
$route['about'] = 'Site_Controller/about';
$route['courses'] = 'Site_Controller/course';
$route['faculty'] = 'Site_Controller/faculty';
$route['blogs'] = 'Site_Controller/blog';
$route['gallery'] = 'Site_Controller/gallery';
$route['update'] = 'Site_Controller/update';
$route['unsetsession'] = 'Site_Controller/unsetsession';
$route['blogdetail/(:num)'] = 'Site_Controller/blogdetail/$1';
$route['blogbycategory/(:num)'] = 'Site_Controller/blogbycategory/$1';
$route['translate_uri_dashes'] = FALSE;
