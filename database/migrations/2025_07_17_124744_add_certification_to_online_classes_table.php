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
        Schema::table('online_classes', function (Blueprint $table) {
            //
             $table->unsignedBigInteger('certification_id')->nullable()->default(null);
               $table->enum('type', ['formation', 'event', 'certification'])->default('event')->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('online_classes', function (Blueprint $table) {
             $table->dropForeign(['certification_id']);
        $table->dropColumn('certification_id');

        // Revenir à l'ancien enum si nécessaire
       // $table->enum('type', ['formation', 'event'])->default('event')->change();
        });
    }
};
