<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kliniks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('harga');
            $table->double('jarak');
            $table->double('layanan');
            $table->double('testimoni');
            $table->double('teknologi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kliniks');
    }
};



    
