<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
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
            $table->string('customerName');
            $table->string('customerEmail')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('customerNation')->nullable();
            $table->string('customerRegion')->nullable();
            $table->string('customerDistrict')->nullable();
            $table->string('customerWard')->nullable();
            $table->string('customerStreet')->nullable();
            $table->string('customerAddress')->nullable();
            $table->string('homePhone')->nullable();
            $table->string('workPhone')->nullable();
            $table->string('mobilePhone')->nullable();
            $table->string('kinName')->nullable();
            $table->string('relationship')->nullable();
            $table->string('kinAddress')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('kinEmail')->nullable();
            $table->string('rentCategory')->nullable();
            $table->date('commencementDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('paymentCategory')->nullable();
            $table->string('status')->nullable();
            $table->text('note')->nullable();
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
}
