<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561647578265AssetStatusesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('asset_statuses')) {
            Schema::create('asset_statuses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('asset_statuses');
    }
}
