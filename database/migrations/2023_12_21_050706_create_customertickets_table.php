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
        Schema::create('customertickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned()->index()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('admin_id')->unsigned()->index()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('ticket_id')->nullable();
            $table->string('subject')->nullable();
            $table->string('description')->nullable();
            $table->string('file')->nullable();
            $table->enum('ticket_status',['0','1'])->default('1');
            $table->string('updated_by')->nullable();
            $table->string('updated_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customertickets');
    }
};
