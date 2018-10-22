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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->enum('gender', ['Male','Female'])->nullable();
            $table->boolean('status')->default(1);

            $table->integer('role_id')->unsigned()->default(4);
            $table->foreign('role_id')->references('id')->on('roles');

            $table->integer('institution_id')->unsigned()->nullable();
            $table->foreign('institution_id')->references('id')->on('institutions');

            $table->integer('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('training_and_events');
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
