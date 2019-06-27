<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [[
            'id'         => '1',
            'name'       => 'Lead',
            'created_at' => '2019-06-27 15:08:51',
            'updated_at' => '2019-06-27 15:08:51',
        ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-06-27 15:08:51',
                'updated_at' => '2019-06-27 15:08:51',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-06-27 15:08:51',
                'updated_at' => '2019-06-27 15:08:51',
            ]];

        CrmStatus::insert($crmStatuses);
    }
}
