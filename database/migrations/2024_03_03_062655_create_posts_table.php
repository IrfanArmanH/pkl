<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//buat id unik
use Haruncpi\LaravelIdGenerator\IdGenerator;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            // $customId = $this->generateCustomId();
            $table->id();
            $table->string('custom_id'); // Ini menambahkan field custom_id untuk menyimpan ID dengan format yang Anda inginkan
            $table->string('nama');
            $table->string('nik', 16)->unique();
            $table->string('email');
            $table->string('pekerjaan');
            $table->string('masalah');
            $table->string('sketsa_lokasi');
            $table->string('dokumen_kelurahan');
            $table->decimal('longitude',18, 12);
            $table->decimal('latitude',18, 12);
            $table->integer('tindak_lanjut')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
    
    public function generateCustomId()
    {
        $lastPost = \App\Models\Post::latest()->first();
        $lastId = $lastPost ? substr($lastPost->custom_id, -4) + 1 : 1;
        $dateCode = date('ymd');

        return 'PJU-' . $dateCode . str_pad($lastId, 4, '0', STR_PAD_LEFT);
    }
};

