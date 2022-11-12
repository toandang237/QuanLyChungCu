<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\FalseType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("customer_name", 50)->nullable(false);
            $table->date('day_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('phone_number', 10);
            $table->string('id_card', 20)->nullable();
            $table->string('address', 250);
            $table->boolean('owner')->default(false)->unique();
            $table->foreignId('apartment_id')->nullable()->constrained('apartments')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};