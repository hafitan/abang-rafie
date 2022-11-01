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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // $table->string('user_id');
            $table->string('nama_pemohon');
            $table->string('no_tlp');
            $table->string('asal_intansi');
            $table->string('nama_kegiatan');
            $table->string('pic_kegiatan');
            $table->string('pic_pmli');
            $table->string('tanggal_pelaksanaan');
            $table->string('tempat_platfrom');
            $table->string('email');
            $table->string('option1');
            
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
        Schema::dropIfExists('students');
    }
};
