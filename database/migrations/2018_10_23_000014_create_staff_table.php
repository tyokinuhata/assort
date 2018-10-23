<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'staff';

    /**
     * Run the migrations.
     * @table staff
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code', 45)->nullable();
            $table->string('family_name', 45)->nullable();
            $table->string('first_name', 45)->nullable();
            $table->string('family_name_kana', 45)->nullable();
            $table->string('first_name_kana', 45)->nullable();
            $table->string('contact_tel', 13);
            $table->string('mail_address', 200);
            $table->integer('staff_role_id');

            $table->index(["staff_role_id"], 'fk_staff_staff_role1_idx');


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
