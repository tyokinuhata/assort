<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderContentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'order_content';

    /**
     * Run the migrations.
     * @table order_content
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('amount');
            $table->integer('subtotal')->default('0');
            $table->integer('is_arrival')->default('0');

            $table->index(["product_id"], 'fk_order_product1_idx');

            $table->index(["order_id"], 'fk_order_content_order1_idx');


          
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
