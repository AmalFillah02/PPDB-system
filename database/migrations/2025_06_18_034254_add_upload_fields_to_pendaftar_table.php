<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftar', function (Blueprint $table) {
            $table->string('upload_kk')->nullable();
            $table->string('upload_nisn')->nullable();
            $table->string('upload_akta')->nullable();
            $table->string('upload_skl')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pendaftar', function (Blueprint $table) {
            $table->dropColumn(['upload_kk', 'upload_nisn', 'upload_akta', 'upload_skl']);
        });
    }

};
