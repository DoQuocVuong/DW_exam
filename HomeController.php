<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function create(){
        return view('/passwords/login');
    }
public function index(Request $request){
$student = new Students();
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Phải nhập vào 1 số",
            "min" => "Giá trị tối thiểu 0 hoặc 6 ký tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];

        $rules = [
            "student_name" => "required|string|max:255",
            "student_email" => "required|string",
            "student_phone" => "required|string",
            "feedback" =>"required|string"
        ];

        $this->validate($request, $rules, $messages);
        if($this-$this->validate()->fail()){
            return redirect('login');
        }
        else{
            $student->student_name=$request->student_name;
            $student->student_email=$request->student_email;
            $student->student_phone=$request->student_phone;
            $student->feedback=$request->feedback;
            $student->save();

        }

        return redirect('login.blade.php');
    }
}
