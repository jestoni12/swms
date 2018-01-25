<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmployeesLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->nullable();
            $table->date('log_date')->nullable();
            $table->timestamp('login1')->nullable();
            $table->timestamp('logout1')->nullable();
            $table->timestamp('login2')->nullable();
            $table->timestamp('logout2')->nullable();
            $table->timestamp('login3')->nullable();
            $table->timestamp('logout3')->nullable();
            $table->timestamp('login4')->nullable();
            $table->timestamp('logout4')->nullable();
            $table->timestamp('login5')->nullable();
            $table->timestamp('logout5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_logs');
    }
}
