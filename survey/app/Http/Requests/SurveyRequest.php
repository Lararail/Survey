<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'create')
        {
            return true;
        }else{
            return false;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|between:1,20',
            'age' => 'required',
            'gender' => 'required|in:女性,男性',
            'type' => 'required',
            'comment' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' =>'※お名前が未入力です',
            'name.between' =>'※1から20文字以内でご記入ください',
            'age.required' =>'※年齢が未入力です',
            'gender.required' =>'※性別が未入力です',
            'type.required' =>'※希望種別が未入力です',
            'comment.required' =>'※ご質問・ご要望が未入力です',
        ];
    }
}
