<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    

    
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('jurusan');
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }

};
