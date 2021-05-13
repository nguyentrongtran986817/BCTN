<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanlopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanlops', function (Blueprint $table) {
            $table->id();
            $table->string('nhanlop_name');
            $table->string('nhanlop_gioitinh');
            $table->string('nhanlop_monday');
            $table->string('nhanlop_lopday');
            $table->string('nhanlop_luong');
            $table->string('nhanlop_sobuoi');
            $table->string('nhanlop_thuday');
            $table->string('nhanlop_lienhe');
            $table->string('nhanlop_ten');
            $table->string('nhanlop_sdt');
            $table->string('nhanlop_status');
            $table->string('nhanlop_ngaynhan');
            $table->string('nhanlop_noidung');
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
        Schema::dropIfExists('nhanlops');
    }
}
