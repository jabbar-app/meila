<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->string('prefix')->after('name');
        });
    }

    public function down()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->dropColumn('prefix');
        });
    }
};
