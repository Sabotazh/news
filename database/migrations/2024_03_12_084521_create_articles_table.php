<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title_ua');
            $table->string('title_pl');
            $table->string('title_en');
            $table->string('subtitle_ua');
            $table->string('subtitle_pl');
            $table->string('subtitle_en');
            $table->text('description_ua');
            $table->text('description_pl');
            $table->text('description_en');
            $table->string('slug');
            $table->string('image');
            $table->boolean('is_published');
            $table->datetime('publication_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
