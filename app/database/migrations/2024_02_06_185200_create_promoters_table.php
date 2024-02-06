<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('promoters')) {
            Schema::create('promoters', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->timestamps();
            });
        }

        DB::table('promoters')->insert(
            array(
                ['name' => 'Hot Dogtor Studios'],
                ['name' => 'Bong Kong'],
                ['name' => 'One Punch Band'],
                ['name' => 'Apply Zii'],
                ['name' => 'Beer4Us'],
                ['name' => 'Nu Metal Generation'],
                ['name' => 'Tio Macaco']
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promoters');
    }
};
