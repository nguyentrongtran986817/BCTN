<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDanhsachlophoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_danhsachlophoc', function (Blueprint $table) {
            $table->Increments('danhsachlophoc_id');
            $table->string('danhsachlopday_monday');
            $table->string('danhsachlopday_lopday');
            $table->string('danhsachlopday_diachi');
            $table->string('danhsachlopday_luong');
            $table->string('danhsachlopday_sobuoi');
            $table->string('danhsachlopday_thuday');
            $table->string('danhsachlopday_thoigian');
            $table->string('danhsachlopday_lienhe');
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
        Schema::dropIfExists('tbl_danhsachlophoc');
    }
}
