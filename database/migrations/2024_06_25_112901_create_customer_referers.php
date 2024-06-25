<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_referers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_referer_code')->default(0)->unique();
            $table->bigInteger('customer_code')->index()->comment('customer calling a customer');
            $table->bigInteger('customer_friend_code')->index()->comment('customer code calling a customer');
            $table->enum('level', ['1', '2', '3'])->default(1)->comment('degree of user invocation. The client cannot determine.');
            $table->integer('percent')->default(0)->comment('customer percentage');
            $table->double('gain')->default(0)->comment('customer referer gain');
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

        pushMigration('referers', 'customer', 'customerReferer');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_referers');
    }
};
