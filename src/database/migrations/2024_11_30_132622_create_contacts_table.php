<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->varchar('category_id');
            $table->varchar('first_name');
            $table->varchar('last_name');
            $table->tinyint('gender');
            $table->varchar('email');
            $table->varchar('tel');
            $table->varchar('address');
            $table->varchar('building');
            $table->text('detail')
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
