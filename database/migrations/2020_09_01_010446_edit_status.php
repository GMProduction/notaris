<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonan', function (Blueprint $table) {
            $table->dropColumn('status');
            //
        });
        Schema::table('permohonan', function (Blueprint $table) {
            $table->enum('status', ['0', '1', '2','3','4','5','6','7'])->default('0');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permohonan', function (Blueprint $table) {
            //
        });
    }
}
