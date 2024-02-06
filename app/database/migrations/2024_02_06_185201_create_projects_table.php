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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('wallet_balance', 10, 2);
            $table->foreignId('promoter_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('projects')->insert(
            array(
                ['name' => 'Finanças', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Segurança Social', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Infraestruturas de Portugal', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Governo de Portugal', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Camara Municipal de São João da Madeira', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Junta de Freguesia de São João da Madeira', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Camara Municipal de Santa Maria da Feira', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Junta de Freguesia de Santa Maria da Feira', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Camara Municipal de Oliveira de Azemeis', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Junta de Freguesia de Oliveira de Azemeis', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Camara Municipal de Ovar', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Junta de Freguesia de Ovar', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Camara Municipal do Porto', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Junta de Freguesia do Porto', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Camara Municipal de Arouca', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
                ['name' => 'Junta de Freguesia de Arouca', 'wallet_balance' => '100000.00', 'promoter_id' => 5],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
