<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtPhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_phieunhap', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sanpham')->unsigned();
            $table->integer('id_phieunhap')->unsigned();
            $table->integer('soluong')->unsigned();
            $table->integer('thanhtien');
            $table->integer('gianhap');
            $table->foreign('id_sanpham')->references('id')->on('sanpham');
            $table->foreign('id_phieunhap')->references('id')->on('phieunhap');
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
        Schema::dropIfExists('ct_phieunhap');
    }
}
