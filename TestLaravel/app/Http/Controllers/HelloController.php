<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller{
    public function index(Request $request) {
        //nameパラメータを取得する
        //指定されていない場合は「名無し」とする
        $name = $request->input('name','名無し');
        //helloビューにnameの値を渡す
        //連想配列を使用し、['Viewに渡す変数名'　=> 渡す値]　の形で指定する。
        return view('hello',['name' => $name]);
    }
}
?>