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
            $table->string('token');
            $table->foreignIdFor(\App\Models\File::class, 'file1');
            $table->foreignIdFor(\App\Models\File::class, 'file2');
            $table->foreignIdFor(\App\Models\File::class, 'file3');
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
