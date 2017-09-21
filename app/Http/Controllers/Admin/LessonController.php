<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;

class LessonController extends Controller
{
    public function index(Request $request)
    {
        if($request -> isMethod('get'))
        {
            return view('admin.lesson.index');
        }
        else if($request -> isMethod('post'))
        {
            $count = Lesson::count();
            $offset = $request->input('start');
            $limit = $request->input('length');

            $orderway = $request->input('order.0.dir');
            $id = $request->input('order.0.column');
            $order = $request->input('columns.'.$id.'.data');

            $data = Lesson::offset($offset)->
                limit($limit)->
                with('course')->
                orderBy($order,$orderway)->
                get();
            $info = [
                'draw' => $request -> get('draw'),
                'recordsTotal' => $count,
                'recordsFiltered' => $count,
                'data' => $data
            ];
            return $info;
        }
    }
}
