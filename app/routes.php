<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
 *      Header Routes
 */
    // NonAuthenticated User (Guest)
    Route::get('/', array('as' => 'home', 'before' => 'login', 'uses' => 'HomeController@getIndex'));
	 Route::get('/login', array('as' => 'login','before' => 'login', 'uses' => 'HomeController@getlogin'));
    Route::get('logout', array('as' => 'logout', 'uses' => 'LogInController@logout'));
   // Route::group(array('before' => 'auth'), function () {

    
    Route::get('/mainLandingPage', array('as' => 'landing', 'uses' => 'LandingController@getIndex'));
    
    /*
        Item
    */
    Route::get('/applications/item/main', array('as' => 'itemMain', 'uses' => 'ItemController@getIndex'));
    
    Route::post('/applications/item/main', array('as' => 'getAllItem', 'uses' => 'ItemController@getItems'));
	Route::post('/applications/item/main2', array('as' => 'removeItem', 'uses' => 'ItemController@destroy'));
	Route::get('/applications/item/getItemdetails', array('as' => 'getItemdetails', 'uses' => 'ItemController@getItemdetails'));
	//Route::post('getItemdetails', 'ItemController@getItemdetails');
     Route::post('postNewItem', 'ItemController@postNewItem');
	//Route::post('/applications/item/main', array('as' => 'postItem', 'uses' => 'ItemController@postItem'));
    Route::post('/applications/employee/insertPoints', array('as' => 'postEmployeePoints', 'uses' => 'EmployeePointsController@postPoints'));
    Route::get('/applications/employees/empProfile', array('as' => 'employeeProfile', 'uses' => 'EmployeeController@getProfile'));
    Route::post('/applications/employee/insertTransfer', array('as' => 'postEmployeeTransfer', 'uses' => 'EmployeeTransferController@postTransfer'));
    Route::post('/applications/employee/insertDeduction', array('as' => 'postEmployeeDeduction', 'uses' => 'EmployeeDeductionController@postDeduction'));
    Route::post('/applications/employee/insertWriteUp', array('as' => 'postEmployeeWriteUp', 'uses' => 'EmployeeWriteupController@postWriteup'));
    Route::post('/applications/employee/insertTest', array('as' => 'postEmployeeTest', 'uses' => 'EmployeeTestController@postTest'));
        Route::post('/applications/employee/insertNote', array('as' => 'postEmployeeNote', 'uses' => 'EmployeeNotesController@postNote'));
        Route::post('/applications/employee/insertHiddenNote', array('as' => 'postEmployeeHiddenNote', 'uses' => 'EmployeeNotesController@postHiddenNote'));
        Route::get('office/resources/searchAllEmployees', array('as' => 'searchAllEmployees', 'uses' => 'EmployeeController@searchAllEmployees'));   //Search While Typing--Query All Vendors
        Route::post('/applications/employee/pointsPrint', array('as' => 'employeeStorePointsPrint', 'uses' => 'EmployeePointsController@getLocationPoints'));
        Route::get('/applications/employee/pointsPrint', array('as' => 'employeeStorePointsPrint', 'uses' => 'EmployeePointsController@getLocationPoints'));

   

//});

/*
    Unauthenticated group
 */
Route::group(array('before' => 'guest'), function () {
    /*
     * CSRF Protection
     */
    Route::group(array('before' => 'csrf'), function () {
        Route::post('/loginAttempt', array('as' => 'postLogin', 'uses' => 'LogInController@postLogin'));
    });
});



