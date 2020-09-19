<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_guest', function (Blueprint $table) { /// membuat table
            /// isi coloumnya
            $table->increments('id_guest'); /// pembautan kolom id dgn autoincrement
            $table->string('name'); /// varchar
            $table->string('email'); /// varchar
            $table->string('phone');
            $table->text('address');
            $table->string('status');
            $table->integer('id_group');
            $table->integer('id_sub_group');
            $table->timestamps(); /// pembuatan kolom create_at - update_at
            $table->datetime('deleted_at')->nullable(); /// for delete at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_guest');
    }
}
