<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpphLkppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spph_lkpps', function (Blueprint $table) {
            $table->id();
            $table->string('nomorspph')->unique();
            $table->date('tglspph');
            $table->string('nomorsph')->nullable();
            $table->date('tglsph')->nullable();
            $table->text('judul');
            $table->string('pic')->nullable();
            $table->string('dari')->nullable();
            $table->string('tembusan')->nullable();
            $table->smallInteger('id_mitra')->nullable();
            $table->text('detail')->nullable();
            $table->double('nilai_project')->nullable();

            $table->text('lampiran')->nullable();
            $table->text('title_lampiran')->nullable();
            $table->date('tgl_lampiran')->nullable();
            $table->text('file')->nullable();
            $table->text('title')->nullable();
            $table->date('upload')->nullable();

            $table->tinyInteger('created_by');
            $table->enum('status', ['draft_spph','save_spph','done_spph']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migratidons.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spph_lkpps');
    }
}
