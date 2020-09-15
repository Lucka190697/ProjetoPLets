<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('loans_date');
            $table->timestamp('return_date');
            $table->boolean('is_loan')->default(false);

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')
                ->references('id')
                ->on('books');

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
        Schema::dropIfExists('loans');
    }
}
