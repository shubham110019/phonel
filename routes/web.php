<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('admin', function () {
    return view('admin/login');
});




Route::group(['middleware' =>['auth','admin']], function(){
	
Route::get('dashboard', 'HomeController@index');

Route::get('admin/pickview', 'Phonepick@pick');

Route::get('admin/pickview/delete/{id}', 'Phonepick@pickdelete');

Route::get('admin/phonebooks', 'Phonebooks@book');

Route::get('admin/phonebooks/delete/{id}', 'Phonebooks@bookdelete');

Route::get('admin/phonebookview/{id}', 'PhonebookViews@phonevId');

Route::get('admin/blogview', 'Blogs@Blog2');

Route::get('admin/blogview/delete/{id}', 'Blogs@blogdelete');

Route::get('admin/blogadd', 'Blogs@blogadd');

Route::post('admin/blogadd','Blogs@store')->name('blogsubmit');

Route::get('admin/blogedit/{id}', 'Blogs@editid');
Route::post('admin/blogedit/{id}','Blogs@edit')->name('blogeditsubmit');


Route::get('admin/allcategory', 'Catsubs@phonecat');


Route::get('admin/phonecat', 'Phones@phonecatt');
Route::post('admin/phonecat','Phones@store')->name('phonecatsub');
Route::get('admin/phonecat/delete/{id}', 'Phones@phonecatdelete');


Route::get('admin/tabletcat', 'Tabletcats@tabletcatt');
Route::post('admin/tabletcat','Tabletcats@store')->name('tabletcatsub');
Route::get('admin/tabletcat/delete/{id}', 'Tabletcats@tabletcatdelete');

Route::get('admin/laptopcat', 'Laptops@laptopcatt');
Route::post('admin/laptopcat','Laptops@store')->name('laptopcatsub');
Route::get('admin/laptopcat/delete/{id}', 'Laptops@laptopcatdelete');



Route::get('admin/alldevice', 'Catsubs@devicecount');

Route::get('admin/allphone', 'Models@allPhonep');

Route::get('admin/addphone', 'Models@catallpro');
Route::post('admin/addphone','Models@store')->name('addphonepro');
Route::get('admin/allphone/delete/{id}', 'Models@phonedelete');

Route::get('admin/editphone/{id}', 'Models@editid');
Route::post('admin/editphone/{id}','Models@editphone');


Route::get('admin/addtablet', 'Tabletcats@tabletc2');
Route::post('admin/addtablet','Tabletcats@storetable')->name('addtabletpro');


Route::get('admin/alltablet', 'Tabletcats@alltab');
Route::get('admin/alltablet/delete/{id}', 'Tabletcats@tabdelete');

Route::get('admin/edittablet/{id}', 'Tabletcats@tabeditid');
Route::post('admin/edittablet/{id}','Tabletcats@edittablet');


Route::get('admin/contact', 'Contacts@contac');

Route::get('admin/allpartner', 'Contacts@partnerview');
Route::get('admin/allpartner/delete/{id}', 'Contacts@partnerdelete');

Route::get('admin/allcontact', 'Contacts@contactview');;

Route::get('admin/allfeedback', 'Contacts@feedbackview');
Route::get('admin/allfeedback/delete/{id}', 'Contacts@feedbackdelete');


Route::get('admin/pickadd/{id}', 'Phonepick@index');
Route::post('admin/pickadd/{id}','Phonepick@store')->name('picksub');


Route::get('admin/partnerview', 'Partnerlist@list');
Route::get('admin/partnerview/delete/{id}', 'Partnerlist@delete');

Route::get('admin/pickupuser/{id}', 'Pickupuser@pickupid');

Route::post('admin/pickupuser/{id}','Pickupuser@store')->name('pickadduser');


Route::get('admin/repairbooks','Repairs@repbook');
Route::get('admin/repairbooks/delete/{id}', 'Repairs@repdelete');


Route::get('admin/addpartner', function () {
    return view('admin/addpartner');
});
});






Route::get('/','Brands@brand');

Route::get('/autocomplete', 'Brands@index');
Route::post('/autocomplete/fetch', 'Brands@fetch')->name('autocomplete.fetch');



Route::get('phones', function () {
    return view('phones');
});


Route::get('partner','Partners@index');
Route::post('partner','Partners@store')->name('Partnersubmit');


Route::get('contact','Contacts@index');
Route::post('contact','Contacts@store')->name('contactsubmit');


Route::get('faq', function () {
    return view('faqview');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq','Faqs@list');

Route::get('phones','Phones@phone');



Route::get('blog','Blogs@blog');

Route::get('blog/view/{id}','Blogs@viewblog');


Route::get('action', function () {
    return view('action');
});

Route::get('careers', function () {
    return view('careers');
});

Route::get('feedback', function () {
    return view('feedback');
});


Route::get('singles', function () {
    return view('single');
});

Route::get('phone/model/singles/{id}','Singles@singleId');

Route::get('phone/model/singles/calculator/{id}','Calculators@cal');
Route::post('phoneactive','Calculators@uphones');
Route::get('phone/model/{category}','Models@modelId');



Route::get('phone/model/singles/calculator/userdetails','Calculators@cal');



Route::post('tabletactive','Calculators@utablets');
Route::get('tablet','Tabletcats@tablet');
Route::get('tablet/model/{category}','Tabletcats@tabletviewid');
Route::get('tablet/model/single/{id}','Singles@tabletsingleId');
Route::get('tablet/model/single/calculator/{id}','Calculators@tabletcal');




Route::get('laptop','Laptops@laptopcat2');
Route::get('laptop/model/{category}','Laptops@laptopviewid');

Route::get('repair','Repairs@viewephone');
Route::get('repair/model/{category}','Repairs@repairviewid');
Route::get('repair/model/calculator/{id}','Repairs@repaircal');
Route::post('repaisactive','Repairs@urepair');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('phonebookuser/{id}', 'dash@index');

Route::get('phonebookuser/failed/{id}', 'dash@Failed');

Route::get('faildeview', 'dash@failedview');

Route::get('closeddeals', 'dash@closedview');

Route::get('phonepickup/{id}', 'dash@pickupidpro');

Route::post('phonepickup/picksubmit/{id}','dash@picksubpro');
//Route::get('include/userheader', 'dash@userphonecout');