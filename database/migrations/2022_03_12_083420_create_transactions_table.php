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
            $table->string('periode_wisuda', 10)->nullable();
            $table->string('tahun_wisuda', 4)->nullable();
            $table->string('validator', 30)->nullable();
            $table->string('file1');
            $table->string('file2');
            $table->string('file3')->nullable();
            $table->string('ktm');
            $table->string('photo');
            $table->text('message', 500)->nullable();
            $table->string('link_repository', 100)->nullable();
            $table->string('tanda_terima')->nullable();
            $table->string('status', 15)->default('Diproses');
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
