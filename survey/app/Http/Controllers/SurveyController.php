<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use Validator;


class SurveyController extends Controller
{

    public function create(Request $request)
    {
       return view('survey.create');
    }

    public function store(Request $request)
    {
        $rules =
        [
            'name' => 'required|between:1,20',
            'age' => 'required',
            'gender' => 'required|in:女性,男性',
            'type' => 'required',
            'comment' => 'required',
        ];
        $messages = [
            'name.required' =>'※お名前が未入力です',
            'name.between' =>'※1から20文字以内でご記入ください',
            'age.required' =>'※年齢が未入力です',
            'gender.required' =>'※性別が未入力です',
            'type.required' =>'※希望種別が未入力です',
            'comment.required' =>'※ご質問・ご要望が未入力です'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect('/create')
                ->withErrors($validator)
                ->withInput();
        }
        //$this->validate($request, $validate_rule,$messages);
        //return view('form.index',['msg'=>'アンケートを受け付けました。有難うございます。']);


        $survey = new Survey();

        $survey->name = request('name');
        $survey->age = request('age');
        $survey->gender = request('gender');
        $survey->type = request('type');
        $survey->comment = request('comment');

        $survey->save();

        return redirect('/create')->with('mssg', 'アンケートの回答を受け付けました。'); //{{ $session('mssg') }}
        //return view('survey.create',['mssg'=>'アンケートの回答を受け付けました。']);
        //return request('type');
    }


    public function index(Request $request){

       $sort = $request->sort;
        $surveys = Survey::orderBy('created_at','desc')->paginate(7);;//latest()->get();
        //$name = request('name');
        //dd($surveys);
        $param = ['surveys'=>$surveys,'sort'=>$sort];
        return view('survey.index',$param);
    }

    public function show($id){

        
        $survey = Survey::findOrFail($id);
      
        return view('survey.show', ['survey' => $survey]);
     }

}
