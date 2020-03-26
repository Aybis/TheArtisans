<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBakLkppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bak_lkpps', function (Blueprint $table) {
            $table->foreignId('spph_id')->unique();
            $table->id();
            $table->string('nomor_bak')->unique();
            $table->date('tgl_bak');
            $table->double('harga');
            $table->text('isi');

            $table->text('ruang_lingkup')->nullable();
            $table->text('lokasi_pekerjaan')->nullable();
            $table->text('jangka_waktu')->nullable();
            $table->text('cara_bayar')->nullable();
            $table->text('ketentuan')->nullable();

            $table->text('lampiran')->nullable();
            $table->text('title_lampiran')->nullable();
            $table->date('tgl_lampiran')->nullable();
            $table->text('file')->nullable();
            $table->text('title')->nullable();
            $table->date('upload')->nullable();

            $table->json('approval')->nullable();
            $table->string('end_approval');

            $table->tinyInteger('crated_by');
            $table->enum('status',['draft_bak','save_bak','done_bak']);
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
        Schema::dropIfExists('bak_lkpps');
    }
}
