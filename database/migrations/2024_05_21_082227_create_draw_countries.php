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
        Schema::create('draw_countries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('draw_country_code')->default(0)->unique();
            $table->bigInteger('draw_code')->unique()->comment('draw code');
            $table->bigInteger('country_code')->index()->comment('draw country code');

            //$table->char('column')->comment('');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            //$table->boolean('status')->default(1)->comment('0:active 1:passive');
            //$table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('drawCountries','store','drawCountry');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('draw_countries');
    }
};
