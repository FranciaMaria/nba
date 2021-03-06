<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_verified')->default(0);
<<<<<<< HEAD:database/migrations/inDatabase/2014_10_12_000000_create_users_table.php
            $table->string('email_token')->nullable();
=======
>>>>>>> b4f38c9d365bc481423768a6ce39a433b7a06133:database/migrations/2014_10_12_000000_create_users_table.php
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
