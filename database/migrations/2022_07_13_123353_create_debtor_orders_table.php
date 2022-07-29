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
        Schema::create('debtor_orders', function (Blueprint $table) {
            $table->id();
            $table->string('incoming')->default('off');
            $table->string('account_holder')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('branch_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_type')->nullable();

            $table->string('debit_order_type')->nullable();
            $table->string('method_of_contact')->nullable();
            $table->string('deduction_instruction')->nullable();
            $table->string('foreign_account')->default('off');
            $table->string('amount')->nullable();
            $table->string('period')->nullable();
            $table->string('due_date')->nullable();
            $table->string('ptp_comments')->nullable();
            $table->string('ptp_result')->nullable();
            $table->foreignId('user_id');

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
        Schema::dropIfExists('debtor_orders');
    }
};
