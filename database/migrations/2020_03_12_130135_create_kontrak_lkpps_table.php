<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrakLkppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak_lkpps', function (Blueprint $table) {
            $table->foreignId('bakn_id')->unique();
            $table->id();
            $table->string('nomor_kontrak')->unique();
            $table->date('tanggal_kontrak');
            $table->string('jenis_kontrak');
            $table->longText('isi');

            $table->text('lampiran')->nullable();
            $table->text('title_lampiran')->nullable();
            $table->date('tgl_lampiran')->nullable();
            $table->text('file')->nullable();
            $table->text('title')->nullable();
            $table->date('upload')->nullable();

            $table->json('approval')->nullable();
            $table->string('end_approval');

            $table->enum('status',['draft_kontrak','save_kontrak','done_kontrak']);
            $table->tinyInteger('created_by');
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
        Schema::dropIfExists('kontrak_lkpps');
    }
}
