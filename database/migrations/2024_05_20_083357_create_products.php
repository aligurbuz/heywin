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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_code')->default(0)->unique();

            $table->char('name')->comment('product name');
            $table->text('description')->nullable()->comment('product description');
            $table->boolean('is_digital')->default(0)->comment('Will the product be sent by cargo or by e-mail? 0:physical 1:digital');
            $table->double('price')->index()->comment('Product sale price');

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

        fullTextSearchTable('products',['name']);
        pushMigration('products','store','product');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
