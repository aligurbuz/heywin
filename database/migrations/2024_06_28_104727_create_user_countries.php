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
        Schema::create('user_countries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_country_code')->default(0)->unique();

            $table->bigInteger('user_code')->unique()->comment('user code');
            $table->bigInteger('country_code')->index()->comment('country code');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->timestamps();
        });

        pushMigration('countries','user','userCountry');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_countries');
    }
};
