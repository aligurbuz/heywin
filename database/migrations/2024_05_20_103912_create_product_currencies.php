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
        Schema::create('product_currencies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_currency_code')->default(0)->unique();
            $table->bigInteger('product_code')->index()->comment('product code');
            $table->bigInteger('currency_code')->index()->comment('currency code');

            //$table->char('column')->comment('');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('productCurrencies','store','productCurrency');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_currencies');
    }
};
