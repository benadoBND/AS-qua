<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('produto', function (Blueprint $table) {
    $table->id();
    $table->timestamps();
    $table->string('nome', 200);
    $table->string('preco', 100);
    $table->integer('estoque');
});

