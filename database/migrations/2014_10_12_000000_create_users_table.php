<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->index('user_id');
            $table->integer('socket_id')->nullable()->index('socket_id');
            $table->string('email')->unique()->index('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('activity_status',['Online','Offline'])->default('Offline')->index('activity_status');
            $table->string('session_token')->nullable();
            $table->softDeletes();
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
};
