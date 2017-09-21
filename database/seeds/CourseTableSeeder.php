<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            [
                'course_name'   => 'PHP核心编程',
                'profession_id' => 1,
                'course_price'  => 1343.54,
                'course_desc'   => '22222很基础的课程'
            ],
            [
                'course_name'   => 'jQuery埃拉诺',
                'profession_id' => 1,
                'course_price'  => 4235.54,
                'course_desc'   => '222222很基础的课程'
            ],
            [
                'course_name'   => 'lamp环境安装',
                'profession_id' => 1,
                'course_price'  => 2345.54,
                'course_desc'   => '22222很基础的课程'
            ],
        ]);
    }
}
