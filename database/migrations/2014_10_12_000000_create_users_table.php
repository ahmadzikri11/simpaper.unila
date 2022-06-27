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
            $table->id()->autoIncrement()->unique();
            $table->string('name', 30);
            $table->string('email', 25)->unique();
            $table->string('role', 5)->default('user');
            $table->char('npm', 10)->unique()->nullable();
            $table->string('phone', 15)->nullable();
            $table->foreignIdFor(\App\Models\Prodi::class, 'prodi_id')->nullable();
            $table->foreignIdFor(\App\Models\Fakultas::class, 'fakultas_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
