<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'product';

    /**
     * Run the migrations.
     * @table product
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_codename_id');
            $table->integer('size_id');
            $table->integer('color_id');
            $table->integer('stock_shelf_id');
            $table->integer('stock_amount');
            $table->dateTime('update');
            $table->dateTime('created');
            $table->integer('updateby');

            $table->index(["size_id"], 'fk_product_size1_idx');

            $table->index(["color_id"], 'fk_product_color1_idx');

            $table->index(["stock_shelf_id"], 'fk_product_stock_shelf1_idx');

            $table->index(["product_codename_id"], 'fk_product_product_codename_idx');

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
