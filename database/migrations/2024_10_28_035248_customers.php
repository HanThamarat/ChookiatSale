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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('PrefixName')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('MiddleName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('IDNumber')->nullable();
            $table->date('NewCardDate')->nullable();
            $table->date('ExpireCard')->namespace();
            $table->date('Brideday')->nullable();
            $table->enum('Gender', ['Male', 'FeMale'])->nullable();
            $table->string('Nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('LineID')->nullable();
            $table->string('FacebookName')->nullable();
            $table->integer('RelationST')->nullable();
            $table->string('FirstNameofRelation')->nullable();
            $table->string('LastNameofRelation')->nullable();
            $table->string('PhoneofRelation')->nullable();
            $table->string('Note')->nullable();
            $table->string('Address')->nullable();
            $table->string('PostAddress')->nullable();
            $table->string('Mobilephone1')->nullable();
            $table->string('Mobilephone2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
