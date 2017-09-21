<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKechengTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profession_name',32)->notNull()->unique()->comment('专业名称');
            $table->string('profession_desc')->notNull()->default()->comment('专业描述');
            $table->string('cover_img',100)->notNull()->default()->comment('封面地图地址');
            $table->timestamps();
        });
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profession_name',32)->notNull()->unique()->comment('专业名称');
            $table->timestamps();
        });
        Schema::create('profession', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profession_name',32)->notNull()->unique()->comment('专业名称');
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
        Schema::dropIfExists('profession');
    }
}
