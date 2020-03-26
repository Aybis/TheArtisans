<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaknLkppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakn_lkpps', function (Blueprint $table) {
            $table->foreignId('spph_id')->unique();
            $table->id();
            $table->date('tglbakn')->nullable();
            $table->string('tipe_rapat')->nullable();
            $table->string('pimpinan_rapat')->nullable();
            $table->string('peserta_mitra')->nullable();
            $table->string('peserta_pins')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->smallInteger('io_id')->nullable();

            $table->text('agenda')->nullable();
            $table->text('dasar_pembahasan')->nullable();
            $table->text('ruang_lingkup')->nullable();
            $table->text('lokasi_pekerjaan')->nullable();
            $table->text('jangka_waktu')->nullable();
            $table->text('harga_terbilang')->nullable();
            $table->text('cara_bayar')->nullable();
            $table->text('lain_lain')->nullable();

            $table->text('lampiran')->nullable();
            $table->text('title_lampiran')->nullable();
            $table->date('tgl_lampiran')->nullable();
            $table->text('file')->nullable();
            $table->text('title')->nullable();
            $table->date('upload')->nullable();

            $table->json('approval')->nullable();
            $table->string('end_approval');

            $table->enum('status',['draft_bakn','save_bakn','done_bakn']);
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
        Schema::dropIfExists('bakn_lkpps');
    }
}
