<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDanhsachgiasu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_danhsachgiasu', function (Blueprint $table) {
            $table->Increments('danhsachgiasu_id');
            $table->string('danhsachgiasu_ten');
            $table->string('danhsachgiasu_hinhanh');
            $table->string('danhsachgiasu_ngaysinh');
            $table->string('danhsachgiasu_hienla');
            $table->string('danhsachgiasu_lopday');
            $table->string('danhsachgiasu_monday');
            $table->string('danhsachgiasu_ngayday');
            $table->string('danhsachgiasu_hienthi');
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
        Schema::dropIfExists('tbl_danhsachgiasu');
    }
}
