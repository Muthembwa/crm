<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-06-27 15:08:52',
            'updated_at' => '2019-06-27 15:08:52',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '17',
                'title'      => 'asset_management_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '18',
                'title'      => 'asset_category_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '19',
                'title'      => 'asset_category_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '20',
                'title'      => 'asset_category_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '21',
                'title'      => 'asset_category_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '22',
                'title'      => 'asset_category_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '23',
                'title'      => 'asset_location_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '24',
                'title'      => 'asset_location_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '25',
                'title'      => 'asset_location_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '26',
                'title'      => 'asset_location_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '27',
                'title'      => 'asset_location_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '28',
                'title'      => 'asset_status_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '29',
                'title'      => 'asset_status_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '30',
                'title'      => 'asset_status_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '31',
                'title'      => 'asset_status_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '32',
                'title'      => 'asset_status_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '33',
                'title'      => 'asset_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '34',
                'title'      => 'asset_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '35',
                'title'      => 'asset_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '36',
                'title'      => 'asset_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '37',
                'title'      => 'asset_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '38',
                'title'      => 'assets_history_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '39',
                'title'      => 'basic_c_r_m_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '40',
                'title'      => 'crm_status_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '41',
                'title'      => 'crm_status_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '42',
                'title'      => 'crm_status_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '43',
                'title'      => 'crm_status_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '44',
                'title'      => 'crm_status_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '45',
                'title'      => 'crm_customer_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '46',
                'title'      => 'crm_customer_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '47',
                'title'      => 'crm_customer_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '48',
                'title'      => 'crm_customer_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '49',
                'title'      => 'crm_customer_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '50',
                'title'      => 'crm_note_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '51',
                'title'      => 'crm_note_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '52',
                'title'      => 'crm_note_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '53',
                'title'      => 'crm_note_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '54',
                'title'      => 'crm_note_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '55',
                'title'      => 'crm_document_create',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '56',
                'title'      => 'crm_document_edit',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '57',
                'title'      => 'crm_document_show',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '58',
                'title'      => 'crm_document_delete',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ],
            [
                'id'         => '59',
                'title'      => 'crm_document_access',
                'created_at' => '2019-06-27 15:08:52',
                'updated_at' => '2019-06-27 15:08:52',
            ]];

        Permission::insert($permissions);
    }
}
