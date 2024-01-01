<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('details', function (Blueprint $table) {
            $table
                ->foreign('caracteristique_id')
                ->references('id')
                ->on('caracteristiques')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('details', function (Blueprint $table) {
            $table->dropForeign(['caracteristique_id']);
            $table->dropForeign(['detail_id']);
        });
    }
};
