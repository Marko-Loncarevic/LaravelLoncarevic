<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('proizvodi', function (Blueprint $table) {
        $table->id();
        $table->string('naziv');
        $table->text('opis')->nullable();
        $table->decimal('cijena', 10, 2);
        $table->integer('kolicina_na_stanju')->default(0);
        $table->string('kategorija');
        $table->string('sku')->unique();
        $table->boolean('aktivan')->default(true);
        $table->string('proizvodjac'); // NOVA KOLONA
        $table->timestamps();
    });
}
};
