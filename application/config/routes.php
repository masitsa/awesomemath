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

$route['default_controller'] = "site";
$route['404_override'] = '';

/*
*	Site Routes
*/
$route['home'] = 'site/home_page';
$route['membership'] = 'site/membership';
$route['subscribe/teacher'] = 'site/account/subscribe_teacher';
$route['subscribe/student'] = 'site/account/subscribe_student';
$route['subscribe/school'] = 'site/account/subscribe_school';
$route['thankyou'] = 'site/thankyou';
$route['purchase/success'] = 'site/thank';
$route['purchase/failure'] = 'site/warn';
$route['contact'] = 'site/contact';
$route['site/mailing'] = 'site/mailing';

/*
*	Grades Routes
*/
$route['grades/(:num)'] = 'site/grades/grade/$1';

/*
*	Account Routes
*/
$route['account'] = 'site/account/my_account';
$route['account/subscriptions-list'] = 'site/account/subscriptions_list';
$route['account/my-details'] = 'site/account/my_details';
$route['account/update-details'] = 'site/account/update_account';
$route['account/update-password'] = 'site/account/update_password';
$route['account/update-school-password'] = 'site/account/update_school_password';
$route['account/sign-out'] = 'login/logout_user';

/*
*	Checkout Routes
*/
$route['checkout'] = 'site/checkout/checkout_user';
$route['checkout/register'] = 'site/checkout/register';
$route['checkout/login'] = 'site/checkout/login_user/1';
$route['checkout/my-details'] = 'site/checkout/my_details';
$route['checkout/delivery'] = 'site/checkout/delivery';
$route['checkout/payment'] = 'site/checkout/payment_options';
$route['checkout/subscription'] = 'site/checkout/subscription_details';
$route['checkout/add-delivery-instructions'] = 'site/checkout/add_delivery_instructions';
$route['checkout/add-payment-options'] = 'site/checkout/add_payment_options';
$route['checkout/confirm-subscription'] = 'site/checkout/confirm_subscription';

$route['forgot-password'] = 'site/forgot_password';

/*
*	District Routes
*/
$route['all-districts'] = 'admin/districts/index';
$route['add-district'] = 'admin/districts/add_district';
$route['edit-district/(:num)'] = 'admin/districts/edit_district/$1';
$route['delete-district/(:num)'] = 'admin/districts/delete_district/$1';
$route['activate-district/(:num)'] = 'admin/districts/activate_district/$1';
$route['deactivate-district/(:num)'] = 'admin/districts/deactivate_district/$1';

/*
*	School Routes
*/
$route['all-schools'] = 'admin/schools/index';
$route['add-school'] = 'admin/schools/add_school';
$route['edit-school/(:num)'] = 'admin/schools/edit_school/$1';
$route['delete-school/(:num)'] = 'admin/schools/delete_school/$1';
$route['activate-school/(:num)'] = 'admin/schools/activate_school/$1';
$route['deactivate-school/(:num)'] = 'admin/schools/deactivate_school/$1';

/*
*	User Types Routes
*/
$route['all-user_types'] = 'admin/user_types/index';
$route['add-user_type'] = 'admin/user_types/add_user_type';
$route['edit-user_type/(:num)'] = 'admin/user_types/edit_user_type/$1';
$route['delete-user_type/(:num)'] = 'admin/user_types/delete_user_type/$1';
$route['activate-user_type/(:num)'] = 'admin/user_types/activate_user_type/$1';
$route['deactivate-user_type/(:num)'] = 'admin/user_types/deactivate_user_type/$1';

/*
*	Topics Routes
*/
$route['all-topics'] = 'admin/topics/index';
$route['add-topic'] = 'admin/topics/add_topic';
$route['edit-topic/(:num)'] = 'admin/topics/edit_topic/$1';
$route['delete-topic/(:num)'] = 'admin/topics/delete_topic/$1';
$route['activate-topic/(:num)'] = 'admin/topics/activate_topic/$1';
$route['deactivate-topic/(:num)'] = 'admin/topics/deactivate_topic/$1';

/*
*	Subscriptions Routes
*/
$route['all-subscriptions'] = 'admin/subscriptions/index';
$route['add-subscription'] = 'admin/subscriptions/add_subscription';
$route['edit-subscription/(:num)'] = 'admin/subscriptions/edit_subscription/$1';
$route['delete-subscription/(:num)'] = 'admin/subscriptions/delete_subscription/$1';
$route['deactivate-subscription/(:num)'] = 'admin/subscriptions/deactivate_subscription/$1';
$route['activate-subscription/(:num)'] = 'admin/subscriptions/activate_subscription/$1';

/*
*	grades Routes
*/
$route['all-grades'] = 'admin/grades/index';
$route['add-grade'] = 'admin/grades/add_grade';
$route['edit-grade/(:num)'] = 'admin/grades/edit_grade/$1';
$route['delete-grade/(:num)'] = 'admin/grades/delete_grade/$1';
$route['activate-grade/(:num)'] = 'admin/grades/activate_grade/$1';
$route['deactivate-grade/(:num)'] = 'admin/grades/deactivate_grade/$1';

/*
*	Settings Routes
*/
$route['settings'] = 'admin/settings';

/*
*	Login Routes
*/
$route['reset-password'] = 'login/forgot_password';
$route['login-admin'] = 'login/login_admin';
$route['login'] = 'login/login_admin';
$route['logout-admin'] = 'login/logout_admin';
$route['sign-in'] = 'site/login_user';
$route['sign-out'] = 'login/logout_user';
$route['sign-up/school'] = 'site/register_school';
$route['sign-up/teacher'] = 'site/register_teacher';
$route['sign-up/student'] = 'site/register_student';
$route['sign-up'] = 'site/register_regular';
$route['account'] = 'site/account/my_account';
$route['admin'] = 'admin/index';
$route['email-campaign'] = 'admin/send_mail';

/*
*	Users Routes
*/
$route['all-users'] = 'admin/users';
$route['all-users/(:num)'] = 'admin/users/index/$1';
$route['add-user'] = 'admin/users/add_user';
$route['edit-user/(:num)'] = 'admin/users/edit_user/$1';
$route['delete-user/(:num)'] = 'admin/users/delete_user/$1';
$route['activate-user/(:num)'] = 'admin/users/activate_user/$1';
$route['deactivate-user/(:num)'] = 'admin/users/deactivate_user/$1';
$route['reset-user-password/(:num)'] = 'admin/users/reset_password/$1';
$route['admin-profile/(:num)'] = 'admin/users/admin_profile/$1';

//marketing
$route['(:any)'] = 'site/marketing/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */