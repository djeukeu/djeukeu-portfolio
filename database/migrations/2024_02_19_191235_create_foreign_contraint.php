<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('post', function (Blueprint $table) {
            $table->foreignUuid('category_id')->constrained('category', 'id');
        });

        Schema::table('post_tag', function (Blueprint $table) {
            $table->foreignUuid('tag_id')->constrained('tag', 'id');
            $table->foreignUuid('post_id')->constrained('post', 'id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
