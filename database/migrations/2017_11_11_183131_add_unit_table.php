<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/11/2017
 * Time: 8:40 PM
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building_id');
            $table->string('name')->default("Not entered");
            $table->string('renter')->default("Not entered");
            $table->string('file')->default("Not entered");
            $table->string('maintenance')->default("No maintenance is currently needed");
            $table->double('rent')->default(0.0);
            $table->double('gas')->default(0.0);
            $table->double('water')->default(0.0);
            $table->double('electricity')->default(0.0);
            $table->double('damages')->default(0.0);
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
        Schema::drop('units');
    }
}