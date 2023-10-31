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
        Schema::create('Student_Detail', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Hobby");
            $table->string("Class");
            $table->unsignedBigInteger("student_id");
            $table->foreign("student_id")->references("id")->on("student")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('StudentDetail');
    }
};
