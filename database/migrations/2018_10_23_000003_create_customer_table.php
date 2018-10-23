<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'customer';

    /**
     * Run the migrations.
     * @table customer
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('family_name', 45)->nullable();
            $table->string('first_name', 45);
            $table->date('birthday');
            $table->integer('gender');
            $table->string('family_name_kana', 45)->nullable();
            $table->string('first_name_kana', 45)->nullable();
            $table->string('phone', 13)->nullable();
            $table->string('mobile_phone', 13)->nullable();
            $table->integer('type')->default('0');
            $table->dateTime('create_date');
            $table->dateTime('update_time');
            $table->longText('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
