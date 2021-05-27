<?php

use App\Models\Dose;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioDosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_doses', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('observacoes')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Dose::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_doses');
    }
}
