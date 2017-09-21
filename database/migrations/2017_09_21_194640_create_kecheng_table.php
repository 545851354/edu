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
            $table->string('profession_desc')->notNull()->default('')->comment('专业描述');
            $table->string('cover_img',100)->notNull()->default('')->comment('封面图地址');
            $table->timestamps();
        });
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name',32)->notNull()->comment('课程名称');
            $table->integer('profession_id')->notNull()->comment('所属专业ID');
            $table->decimal('course_price',9,2)->notNull()->default(0)->comment('课程价格');
            $table->string('course_desc')->notNull()->default('')->comment('课程描述');
            $table->string('cover_img',100)->notNull()->default('')->comment('封面图地址');
            $table->timestamps();
        });
        Schema::create('lesson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lesson_name',64)->notNull()->comment('课程名称');
            $table->integer('course_id')->notNull()->comment('所属课程ID');
            $table->string('lesson_desc')->notNull()->default('')->comment('课程描述');
            $table->integer('lesson_length')->notNull()->default(0)->comment('课程时长');
            $table->string('teacher_name')->notNull()->default('')->comment('讲师名称');
            $table->string('video_address',100)->notNull()->default('')->comment('课时点播地址');
            $table->string('cover_img',100)->notNull()->default('')->comment('封面图地址');
            $table->integer('status')->notNull()->default(1)->comment('可是状态');
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
