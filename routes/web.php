<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('asset-categories/destroy', 'AssetCategoryController@massDestroy')->name('asset-categories.massDestroy');

    Route::resource('asset-categories', 'AssetCategoryController');

    Route::delete('asset-locations/destroy', 'AssetLocationController@massDestroy')->name('asset-locations.massDestroy');

    Route::resource('asset-locations', 'AssetLocationController');

    Route::delete('asset-statuses/destroy', 'AssetStatusController@massDestroy')->name('asset-statuses.massDestroy');

    Route::resource('asset-statuses', 'AssetStatusController');

    Route::delete('assets/destroy', 'AssetController@massDestroy')->name('assets.massDestroy');

    Route::resource('assets', 'AssetController');

    Route::post('assets/media', 'AssetController@storeMedia')->name('assets.storeMedia');

    Route::delete('assets-histories/destroy', 'AssetsHistoryController@massDestroy')->name('assets-histories.massDestroy');

    Route::resource('assets-histories', 'AssetsHistoryController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    Route::delete('crm-statuses/destroy', 'CrmStatusController@massDestroy')->name('crm-statuses.massDestroy');

    Route::resource('crm-statuses', 'CrmStatusController');

    Route::delete('crm-customers/destroy', 'CrmCustomerController@massDestroy')->name('crm-customers.massDestroy');

    Route::resource('crm-customers', 'CrmCustomerController');

    Route::delete('crm-notes/destroy', 'CrmNoteController@massDestroy')->name('crm-notes.massDestroy');

    Route::resource('crm-notes', 'CrmNoteController');

    Route::delete('crm-documents/destroy', 'CrmDocumentController@massDestroy')->name('crm-documents.massDestroy');

    Route::resource('crm-documents', 'CrmDocumentController');

    Route::post('crm-documents/media', 'CrmDocumentController@storeMedia')->name('crm-documents.storeMedia');
});
