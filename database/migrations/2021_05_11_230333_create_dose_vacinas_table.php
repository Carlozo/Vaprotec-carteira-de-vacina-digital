<?php

use App\Models\User;
use App\Models\Vacina;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoseVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dose_vacinas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('observacoes')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Vacina::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dose_vacinas');
    }
}
