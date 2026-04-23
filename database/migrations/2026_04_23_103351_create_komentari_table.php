<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('komentari', function (Blueprint $table) {
        $table->id();
        $table->string('ime_autora');
        $table->string('email')->unique();
        $table->text('tekst');
        $table->boolean('odobren')->default(false);
        $table->timestamps();
    });
}
};
