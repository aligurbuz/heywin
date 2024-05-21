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
        Schema::create('draws', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('draw_code')->default(0)->unique();
            $table->bigInteger('product_code')->index()->comment('product code');

            $table->char('name')->comment('draw name');
            $table->text('description')->nullable()->comment('draw description');
            $table->boolean('is_auto_draw')->default(0)->comment('0: video draw, 1: auto draw');
            $table->char('image_url')->comment('The image that should appear in the listing. A listing image must be added for each raffle as it will be required for product combinations.');
            $table->char('video_url')->nullable()->comment('If the draw will be held as a video, the video URL will be entered.');
            $table->double('price')->default('0')->comment('Draw ticket price');
            $table->integer('winner_count')->default('1')->comment('It determines how many winners there will be in the raffle.');
            $table->integer('max_ticket')->default('0')->comment('How many tickets can a user buy in the draw?');

            $table->timestamp('start_date')->comment('The date the draw will go live.');
            $table->timestamp('end_date')->comment('The date the draw will cease broadcasting.');
            $table->timestamp('draw_date')->comment('The date the draw will take place.');
            $table->integer('stock')->default(0)->comment('The specified number of tickets for the draw.');

            $table->index(['start_date','end_date'],'startEnd');
            $table->index(['draw_date'],'drawDate');
            $table->index(['stock'],'stock');


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

        pushMigration('draws','store','draw');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('draws');
    }
};
