<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->boolean('is_male')->default(1);
             $table->string('first_name');
             $table->string('city')->nullable()->default(null);
             $table->string('country')->nullable()->default(null);
             $table->foreignId('company_id')->references('id')->on('companies')->onDelete('cascade');
             $table->date('birth_date')->default(now());
             $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
};
