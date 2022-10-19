<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('brand_model_id')
                ->constrained('brand_models')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table
                ->foreignId('karoseri_id')
                ->constrained('karoseris')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('noreg')->unique();
            $table->string('slug')->unique();
            $table->string('pic')->nullable();
            $table->string('vin')->nullable();
            $table->string('engineNumber')->nullable();
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
        Schema::dropIfExists('units');
    }
};
