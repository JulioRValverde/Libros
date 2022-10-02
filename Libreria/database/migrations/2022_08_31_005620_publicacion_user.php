<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Publicacion;
use App\Models\Estado;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion_user', function (Blueprint $table) {
            //
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('publicacion_id');
            $table->foreignId('estado_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    

        Schema::dropIfExists('publicacion_user');
    }
};
