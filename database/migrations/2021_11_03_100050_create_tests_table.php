<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('tests');
    }

    //Retrieve Data
    /**
     * Laravel has an elegant way of retrieving data, with Eloquent. Think of each Eloquent model as a powerful query builder allowing you to 
     * fluently query the database table associated with the model.
     * 
     * 
     *   $flights = App\Models\Flight::where('active', 1)
     *         ->orderBy('name', 'desc')
     *           ->take(10)
     *         ->get();
     */
}
