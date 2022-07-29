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
        Schema::create('debtors', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable();
            $table->string('initial')->nullable();
            $table->string('client_reference')->nullable();
            $table->string('old_client_reference')->nullable();
            $table->string('account_type')->nullable();
            $table->string('debtor_first_name')->nullable();
            $table->string('debtor_surname')->nullable();
            $table->string('debtor_title')->nullable();
            $table->string('home_phone2')->nullable();
            $table->string('cell_phone2')->nullable();

            $table->string('surname')->nullable();
            $table->string('second_name')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('title')->nullable();
            $table->string('client_division')->nullable();
            $table->string('client_profile_account')->nullable();
            $table->string('amount')->nullable();
            $table->string('debtor_second_name')->nullable();
            $table->string('debtor_initial')->nullable();
            $table->string('home_phone1')->nullable();
            $table->string('cell_phone1')->nullable();
            $table->string('interest_rate')->nullable();
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
        Schema::dropIfExists('debtors');
    }
};
