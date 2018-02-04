<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditFertilizerColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fertilizers', function (Blueprint $table) {
            $table->dropColumn('remarks');
        });
        Schema::table('garbages', function (Blueprint $table) {
            $table->dropColumn('remarks');
        });

        Schema::table('fertilizers', function (Blueprint $table) {
            $table->string('remarks')->nullable()->after('name');
        });
        Schema::table('garbages', function (Blueprint $table) {
            $table->string('remarks')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
