<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('saloon_name')->nullable()->change();
            $table->text('saloon_address')->nullable()->change();
            $table->decimal('discount')->nullable()->change();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('saloon_name')->nullable(false)->change();
            $table->text('saloon_address')->nullable(false)->change();
            $table->decimal('discount')->nullable(false)->change();
        });
    }

};
