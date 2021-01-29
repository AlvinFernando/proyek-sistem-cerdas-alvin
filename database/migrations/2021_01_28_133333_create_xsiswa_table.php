<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXsiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xsiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_xsiswa');
            $table->string('nm_xsiswa');
            $table->string('kelas');
            $table->string('jk');
            $table->string('agama');
            $table->text('alamat');
            $table->string('telp');
            $table->string('nm_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nm_ibu');
            $table->string('pekerjaan_ibu');
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
        Schema::dropIfExists('xsiswa');
    }
}
