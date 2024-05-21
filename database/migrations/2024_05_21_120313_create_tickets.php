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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ticket_code')->default(0)->unique();
            $table->bigInteger('draw_code')->index()->comment('draw code');
            $table->bigInteger('customer_code')->index()->comment('user code');

            $table->char('number')->comment('ticket number');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->enum('ticket_status',[0,1,2])->default(0)->comment('0:pending 1:lost 2:win');

            //$table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('drawTickets','store','ticket');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
