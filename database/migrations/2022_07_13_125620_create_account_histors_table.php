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
        Schema::create('account_histors', function (Blueprint $table) {
            $table->id();
            $table->string('account_no')->nullable();
            $table->string('action_type')->nullable();
            $table->string('cost')->nullable();
            $table->string('user_name')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('user_id')->nullable();
             $table->text('comments');

            $table->foreignId('debtor_id')
                             ->constrained()
                             ->onDelete('cascade');
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
        Schema::dropIfExists('account_histors');
    }
};
