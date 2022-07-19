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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('namaPanggilan');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('asal');
            $table->string('profileImage')->default('profile-images/user.png');
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
        Schema::dropIfExists('biodatas');
    }
};
