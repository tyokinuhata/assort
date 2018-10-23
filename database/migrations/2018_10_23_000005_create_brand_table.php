<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'brand';

    /**
     * Run the migrations.
     * @table brand
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
            $table->string('kana', 45);
            $table->string('zip_code', 8);
            $table->integer('address_pref');
            $table->string('addres_city', 45);
            $table->string('addres_town', 100);
            $table->string('addres_bild', 100)->nullable();
            $table->string('tel', 13);
            $table->string('mail', 100);
            $table->string('fax', 13)->nullable();
            $table->integer('updateby');
            $table->dateTime('update');
            $table->integer('staff_id');
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
