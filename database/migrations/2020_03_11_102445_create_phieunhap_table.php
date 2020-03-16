<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hinhthucnhap')->unsigned();
            $table->foreign('id_hinhthucnhap')->references('id')->on('hinhthucnhap');
            $table->string('lydonhap')->nullable();
            $table->date('ngaynhap');
            $table->integer('id_nguoinhap')->unsigned();
            $table->foreign('id_nguoinhap')->references('id')->on('users');
            $table->integer('tongtien');
            $table->string('nhaptu');
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
        Schema::dropIfExists('phieunhap');
    }
}
