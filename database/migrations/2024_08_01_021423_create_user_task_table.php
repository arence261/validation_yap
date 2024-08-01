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
       Schema::create('user_task', function (Blueprint $table) {
           $table->id();
           $table->integer('user_id')->nullable();
           $table->string('task_name')->nullable();
           $table->enum('status', ['Pending, On process','Complete','Cancelled'])->nullable();
           $table->text('description')->nullable();
           $table->date('deadline')->nullable();
           $table->date('complete_at')->nullable();
           $table->timestamps();
       });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('user_task');
   }

};
