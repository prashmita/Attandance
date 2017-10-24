s <?php

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

Route::get('/', function () {
    return csrf_token();
});
Route::get('admin','HomeController@index')->name('admin.view');
Route::get('about','aboutController@about');

Auth::routes();
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::group(['middlewareGroup' => 'webGroup'],function() {


    /*login*/
    Route::get('/', 'LoginController@login')->name('login');
    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@dologin')->name('admin.login');
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::group(['middleware'=>'auth'],function(){

        Route::get('/home','HomeController@index')->name('dashboard');

    /*Settings*/
    Route::get('settings', 'SettingController@index')->name('settings');
    Route::get('settings/api', 'SettingController@api_index');
    Route::get('setting/add', 'SettingController@add')->name('setting.add');
    Route::post('setting/store', 'SettingController@store')->name('setting.store');
    Route::get('setting/edit/{id}', 'SettingController@edit')->name('setting.edit');
    Route::post('setting/edit/{id}', 'SettingController@save')->name('setting.edit.save');
    Route::get('setting/delete/{id}', 'SettingController@delete')->name('setting.delete');

    /*positions*/
    Route::get('positions', 'PositionController@index')->name('positions');
    Route::get('position/add', 'PositionController@add')->name('position.add');
    Route::post('position/store', 'PositionController@store')->name('position.store');
    Route::get('position/edit/{id}', 'PositionController@edit')->name('position.edit');
    Route::post('position/edit/{id}', 'PositionController@save')->name('position.edit.save');
    Route::get('position/delete/{id}', 'PositionController@delete')->name('position.delete');

    /*leavesCategory*/
    Route::get('leavesCategory', 'leavesCategoryController@index')->name('leavesCategory');
    Route::get('leavesCategory/add', 'leavesCategoryController@add')->name('leavesCategory.add');
    Route::post('leavesCategory/store', 'leavesCategoryController@store')->name('leavesCategory.store');
    Route::get('leavesCategory/edit/{id}', 'leavesCategoryController@edit')->name('leavesCategory.edit');
    Route::post('leavesCategory/edit/{id}', 'leavesCategoryController@save')->name('leavesCategory.edit.save');
    Route::get('leavesCategory/delete/{id}', 'leavesCategoryController@delete')->name('leavesCategory.delete');

    /*presents*/
    Route::get('presents', 'presentController@index')->name('presents');
    Route::get('present/add', 'presentController@add')->name('present.add');
    Route::post('present/store', 'presentController@store')->name('present.store');
    Route::get('present/edit/{id}', 'presentController@edit')->name('present.edit');
    Route::post('present/edit/{id}', 'presentController@save')->name('present.edit.save');
    Route::get('present/delete/{id}', 'presentController@delete')->name('present.delete');

    /*holidays*/
    Route::get('holiday', 'holidayController@index')->name('holiday');
    Route::get('holiday/add', 'holidayController@add')->name('holiday.add');
    Route::post('holiday/store', 'holidayController@store')->name('holiday.store');
    Route::get('holiday/edit{id}', 'holidayController@edit')->name('holiday.edit');
    Route::post('holiday/edit{id}', 'holidayController@save')->name('holiday.edit.save');
    Route::get('holiday/delete{id}', 'holidayController@delete')->name('holiday.delete');

    /*leave*/
    Route::get('leave', 'LeaveController@index')->name('leave');
    Route::get('leave/add', 'LeaveController@add')->name('leave.add');
    Route::post('leave/store', 'LeaveController@store')->name('leave.store');
    Route::get('leave/edit{id}', 'LeaveController@edit')->name('leave.edit');
    Route::post('leave/edit{id}', 'LeaveController@save')->name('leave.edit.save');
    Route::get('leave/delete{id}', 'LeaveController@delete')->name('leave.delete');

    /*permissions*/
    Route::get('permissions', 'PermissionController@index')->name('permissions');
    Route::get('permissions/add','PermissionController@add')->name('permissions.add');
    Route::post('permissions/store','PermissionController@store')->name('permissions.store');
    Route::get('permissions/edit{id}','PermissionController@edit')->name('permissions.edit');
    Route::post('permissions/edit{id}','PermissionController@save')->name('permissions.edit.save');
    Route::get('permissions/delete{id}','PermissionController@delete')->name('permissions.delete');
});

});
