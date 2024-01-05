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
        Schema::create('customerusers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned()->index()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('admin_id')->unsigned()->index()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('name')->nullable();
            $table->string('user_name')->unique();
            $table->string('salutation')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('email')->unique();
            $table->string('position')->nullable();
            $table->string('password');
            $table->string('confirm_password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customerusers');
    }
};
