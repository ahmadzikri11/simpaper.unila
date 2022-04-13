<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            $table->timestamps();
            $table->string('periode_wisuda');
            $table->string('tahun_wisuda');
            $table->string('token');
            $table->string('file1');
            $table->string('file2');
            $table->string('file3');
            $table->string('ktm');
            $table->string('photo');
            $table->string('messege')->nullable();
            $table->string('status')->default('Diproses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
