<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('asset-categories', 'AssetCategoryApiController');

    Route::apiResource('asset-locations', 'AssetLocationApiController');

    Route::apiResource('asset-statuses', 'AssetStatusApiController');

    Route::apiResource('assets', 'AssetApiController');

    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    Route::apiResource('crm-notes', 'CrmNoteApiController');

    Route::apiResource('crm-documents', 'CrmDocumentApiController');
});
