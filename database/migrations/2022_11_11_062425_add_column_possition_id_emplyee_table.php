<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->bigInteger('possition_id')->nullable();
        });
    }


    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->$table->dropColumn('possition_id');
        });
    }
};
