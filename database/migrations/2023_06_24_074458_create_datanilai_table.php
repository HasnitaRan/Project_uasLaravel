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
        Schema::create('datanilai', function (Blueprint $table) {
            $table->id();
            $table->string('anggotas_id');
            $table->double('nilai_tes');
            $table->double('nilai_interview');
            $table->double('ipk');
            $table->double('rangkap_jabatan');
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
        Schema::dropIfExists('datanilai');
    }
};
