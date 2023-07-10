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
        Schema::create('halaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan']);
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('email');
            $table->text('alamat');
            $table->string('image');
            $table->double('nilai_tes')->nullable();
            $table->double('nilai_interview')->nullable();
            $table->double('ipk')->nullable();
            $table->double('rangkap_jabatan')->nullable();
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
        Schema::dropIfExists('halaman');
    }
};
