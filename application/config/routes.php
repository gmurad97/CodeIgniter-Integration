<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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



/*USER CONTROLLER*/
$route["default_controller"]            = "UserController/xlb_user_index";
$route["index"]                         = "UserController/xlb_user_index";
$route["service"]                       = "UserController/xlb_user_service";
$route["gallery"]                       = "UserController/xlb_user_gallery";
$route["contact"]                       = "UserController/xlb_user_contact";
$route["about"]                         = "UserController/xlb_user_about";

/*ADMIN CONTROLLER*/
$route["admin_auth"]                    = "AdminController/xlb_admin_login";
$route["admin_auth_action"]             = "AdminController/xlb_admin_login_action";
$route["dashboard"]                     = "AdminController/xlb_admin_dashboard";
$route["admin_logout"]                  = "AdminController/xlb_admin_logout";

/*ABOUT US*/
$route["about_us_create"]               = "AdminController/xlb_admin_create_about_us";
$route["about_us_create_action"]        = "AdminController/xlb_admin_create_about_us_action";
$route["about_us_edit"]                 = "AdminController/xlb_admin_about_us_edit";
$route["about_us_edit_action"]          = "AdminController/xlb_admin_about_us_edit_action";
$route["about_us_delete"]               = "AdminController/xlb_admin_about_us_delete";

/*TEAM*/
$route["team_create"]                   = "AdminController/xlb_admin_team_create";
$route["team_create_action"]            = "AdminController/xlb_admin_team_create_action";
$route["team_list"]                     = "AdminController/xlb_admin_team_list";
$route["team_detail_view/(.*)"]         = "AdminController/xlb_admin_team_detail_view/$1";
$route["team_delete/(.*)"]              = "AdminController/xlb_admin_team_delete/$1";
$route["team_edit/(.*)"]                = "AdminController/xlb_admin_team_edit/$1";
$route["team_edit_action/(.*)"]         = "AdminController/xlb_admin_team_edit_action/$1";

/*SERVICES*/
$route["services_create"]               = "AdminController/xlb_admin_services_create";
$route["services_create_action"]        = "AdminController/xlb_admin_services_create_action";
$route["services_list"]                 = "AdminController/xlb_admin_services_list";
$route["services_edit/(.*)"]            = "AdminController/xlb_admin_services_edit/$1";
$route["services_edit_action/(.*)"]     = "AdminController/xlb_admin_services_edit_action/$1";
$route["services_delete/(.*)"]          = "AdminController/xlb_admin_services_delete/$1";

/*LOGO*/
$route["logo_create"]                   = "AdminController/xlb_admin_logo_create";
$route["logo_create_action"]            = "AdminController/xlb_admin_logo_create_action";
$route["logo_edit"]                     = "AdminController/xlb_admin_logo_edit";
$route["logo_edit_action"]              = "AdminController/xlb_admin_logo_edit_action";
$route["logo_delete"]                   = "AdminController/xlb_admin_logo_delete";

/*HEADER LENDING*/
$route["header_lending_create"]         = "AdminController/xlb_admin_header_lending_create";
$route["header_lending_create_action"]  = "AdminController/xlb_admin_header_lending_create_action";
$route["header_lending_edit"]           = "AdminController/xlb_admin_header_lending_edit";
$route["header_lending_edit_action"]    = "AdminController/xlb_admin_header_lending_edit_action";
$route["header_lending_delete"]         = "AdminController/xlb_admin_header_lending_delete";

/*PRICE BLOCK*/
$route["price_create"]                  = "AdminController/xlb_admin_price_create";
$route["price_create_action"]           = "AdminController/xlb_admin_price_create_action";
$route["price_edit"]                    = "AdminController/xlb_admin_price_edit";
$route["price_edit_action"]             = "AdminController/xlb_admin_price_edit_action";
$route["price_delete"]                  = "AdminController/xlb_admin_price_delete";

/*WORKING HOURS*/
$route["working_hours_create"]          = "AdminController/xlb_admin_working_hours_create";
$route["working_hours_create_action"]   = "AdminController/xlb_admin_working_hours_create_action";
$route["working_hours_edit"]            = "AdminController/xlb_admin_working_hours_edit";
$route["working_hours_edit_action"]     = "AdminController/xlb_admin_working_hours_edit_action";
$route["working_hours_delete"]          = "AdminController/xlb_admin_working_hours_delete";


//OTHER
$route["404_override"]                  = "";
$route["translate_uri_dashes"]          = FALSE;
