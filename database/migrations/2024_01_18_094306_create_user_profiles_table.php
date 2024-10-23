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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id()->index('user_profile_id');
            $table->integer('ref_user_id')->index('user_profile_ref_user_id');
            $table->string('username',50)->nullable()->index('user_profile_username');
            $table->string('name');
            $table->string('avtar')->nullable();
            $table->string('profile_img',30)->nullable();
            $table->dateTime('last_active')->nullable()->index('user_profile_last_active');
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
        Schema::dropIfExists('user_profiles');
    }
};
