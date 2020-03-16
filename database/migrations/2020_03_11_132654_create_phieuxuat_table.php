<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuxuat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hinhthucxuat')->unsigned();
            $table->foreign('id_hinhthucxuat')->references('id')->on('hinhthucxuat');
            $table->integer('lydoxuat')->nullable();
            $table->date('ngayxuat');
            $table->integer('id_nguoixuat')->unsigned();
            $table->foreign('id_nguoixuat')->references('id')->on('users');
            $table->integer('px_tongtien');
            $table->string('xuatcho');
            $table->string('diachi')->nullable();
            $table->string('sdt')->nullable();
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
        Schema::dropIfExists('phieuxuat');
    }
}
