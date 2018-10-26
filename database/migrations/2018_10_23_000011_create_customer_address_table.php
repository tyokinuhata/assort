<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'customer_address';

    /**
     * Run the migrations.
     * @table customer_address
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('zip_code', 8);
            $table->integer('address_pref');
            $table->string('address_city', 45);
            $table->string('address_town', 100);
            $table->string('address_build', 100)->nullable();
            $table->string('address_name', 45);
            $table->string('contact_tel', 13);

            $table->index(["customer_id"], 'fk_customer_address_customer1_idx');


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
