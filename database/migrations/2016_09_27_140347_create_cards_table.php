<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // since we used --create=cards in the php artisan command laravel knew that it would be creating a 'cards' table as opposed to modifying one with Schema::table
        // We will be creating a cards table when we run this migration when we deploy this app (php artisan migrate)
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            // $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('cards');
    }
}
