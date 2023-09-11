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
        Schema::create('bcsakhis', function (Blueprint $table) {
          //   $table->id();
        //     $table->string('name')->nullable();
        //     $table->string('designation')->nullable();
        //     $table->string('contact')->nullable();
        //     $table->string('parent_shg')->nullable();
        //     $table->string('village')->nullable();
        //     $table->string('bank_name')->nullable();
        //     $table->string('service')->nullable();
        //     $table->string('branch_name')->nullable();
        //     $table->string('branch_code')->nullable();
        //     $table->string('block')->nullable();
        //     $table->string('block_type')->nullable();
        //     $table->string('district')->nullable();
        //     $table->string('corporate_bc')->nullable();
        //     $table->string('agent_id')->nullable();
        //     $table->string('date_code_creation')->nullable();
        //     $table->string('iibf_certificate')->nullable();
        //     $table->string('model')->nullable();
        //     $table->string('machine_id')->nullable();
        //     $table->string('no_village')->nullable();
        //     $table->string('no_shg')->nullable();
        //     $table->string('od_limit')->nullable();
        //     $table->string('settlement_account')->nullable();
        //     $table->string('created_by')->nullable();
        //     $table->string('date')->nullable();
        //     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcsakhis');
    }
};
