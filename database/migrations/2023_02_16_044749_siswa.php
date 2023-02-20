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
        Schema::create('siswa', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('id_user')->unsigned();
        $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        $table->bigInteger('id_riwayat')->unsigned();
        $table->foreign('id_riwayat')->references('id')->on('riwayat_admin')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('siswa');
    }
};
