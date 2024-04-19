<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->uuid('account_id')->primary();
            $table->bigInteger('users_id');
            $table->string('name');
            $table->date('birth_date');
            $table->string('birth_country');
            $table->string('gender');
            $table->string('citizen');
            $table->string('religion');
            $table->string('generation');
            $table->bigInteger('telephone');
            $table->text('complete_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account', function (Blueprint $table) {
            //
        });
    }
}
