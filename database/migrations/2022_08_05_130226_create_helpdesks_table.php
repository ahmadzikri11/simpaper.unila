<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpdesksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpdesks', function (Blueprint $table) {
            $table->id();
            $table->string('ticket')->nullable();
            $table->string('layanan');
            $table->text('keterangan');
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            $table->string('prioritas');
            $table->string('status')->nullable();
            $table->string('aksi')->nullable();
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
        Schema::dropIfExists('helpdesks');
    }
}
