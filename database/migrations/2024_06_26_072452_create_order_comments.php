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
        Schema::create('order_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_comment_code')->default(0)->unique();
            $table->bigInteger('product_code')->index()->comment('order product code');
            $table->bigInteger('order_code')->index()->comment('order code');

            $table->text('image')->nullable()->comment('order comment image url path');
            $table->text('comment')->comment('order comment');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->boolean('status')->default(0)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('comment','orders','orderComment');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_comments');
    }
};
