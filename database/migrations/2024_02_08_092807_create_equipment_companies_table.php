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
        Schema::create('equipment_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',100);
            $table->string('logo')->nullable();
            $table->string('address',250)->nullable();
            $table->string('email',150);
            $table->text('descripation',500);
            $table->tinyInteger('status')->default('0');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_companies');
    }
};
