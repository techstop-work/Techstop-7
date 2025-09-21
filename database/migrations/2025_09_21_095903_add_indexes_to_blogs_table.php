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
        Schema::table('blogs', function (Blueprint $table) {
            $table->index('status');
            $table->index('published_at');
            $table->index('category_id');
            $table->index(['status', 'published_at']);
            $table->index('title');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['published_at']);
            $table->dropIndex(['category_id']);
            $table->dropIndex(['status', 'published_at']);
            $table->dropIndex(['title']);
            $table->dropIndex(['slug']);
        });
    }
};
