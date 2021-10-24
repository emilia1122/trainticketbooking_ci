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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Train
$route['tren'] = 'train';
$route['tren/adauga'] = 'train/create'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['tren/editeaza/(:num)'] = 'train/edit/$1'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['tren/sterge/(:num)'] = 'train/delete/$1'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['tren/afiseaza/(:num)'] = 'train/show/$1';

//Destination
$route['ruta'] = 'destination';
$route['ruta/adauga'] = 'destination/create'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['ruta/editeaza/(:num)'] = 'destination/edit/$1'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['ruta/afiseaza/(:num)'] = 'destination/show/$1'; 
$route['ruta/sterge/(:num)'] = 'destination/delete/$1';//helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin

//Ticket
$route['bilet'] = 'ticket';
$route['bilet/adauga'] = 'ticket/create'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['bilet/sterge/(:num)'] = 'ticket/delete/$1'; //helper cu islogg ca sa nu poata accesa daca nu e logat atat utilizator cat si admin
$route['bilet/afiseaza/(:num)'] = 'bilet/show/$1';

//User
$route['cont/adauga'] = 'user/register';
$route['cont/autentificare'] = 'user/login';
$route['cont/deconectare'] = 'user/logout';

//Despre
$route['tren/despre'] = 'train';



