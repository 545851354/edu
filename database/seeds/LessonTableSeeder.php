<?php

use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lesson')->insert([
            [
                'lesson_name'   => 'PHP字符串啦啦啦',
                'course_id'     => 1,
                'lesson_length' => 20,
                'lesson_desc'   => '很基础的课程',
                'teacher_name'  => '刘备备'
            ],
            [
                'lesson_name'   => 'PHP数组啦啦啦',
                'course_id'     => 1,
                'lesson_length' => 10,
                'lesson_desc'   => '很难的课程',
                'teacher_name'  => '张飞飞'
            ],
            [
                'lesson_name'   => 'PHP文件上传啦啦啦',
                'course_id'     => 1,
                'lesson_length' => 15,
                'lesson_desc'   => '很有深度的课程',
                'teacher_name'  => '孙权权'
            ]
        ]);
    }
}
