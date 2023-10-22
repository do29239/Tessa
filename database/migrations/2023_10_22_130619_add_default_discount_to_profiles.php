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
            $table->decimal('discount', 8, 2)->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('discount');
        });
    }
};
