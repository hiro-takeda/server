<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller{
    public function index(Request $request) {
        //name�p�����[�^���擾����
        //�w�肳��Ă��Ȃ��ꍇ�́u�������v�Ƃ���
        $name = $request->input('name','������');
        //hello�r���[��name�̒l��n��
        //�A�z�z����g�p���A['View�ɓn���ϐ���'�@=> �n���l]�@�̌`�Ŏw�肷��B
        return view('hello',['name' => $name]);
    }
}
?>