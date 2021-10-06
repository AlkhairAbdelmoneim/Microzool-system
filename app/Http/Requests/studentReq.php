<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentReq extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return[
            'full_name' => 'required|min:4|string',
            'phone' => 'required|numeric|min:9',
            'course_id' => 'required',

        ];
    }

    public function messages()
    {
        return[

                //name
                'name.required' =>'يرجي ادخال اسم الطالب',
                // 'name.max' =>'الاسم طويل جدا ',
                'name.min' =>'الاسم قصير جدا ',
                'name.string' =>'الاسم يجب أن يكون نصا ',
                //phone
                'phone.required' =>'يرجي ادخال رقم الهاتف',
                'phone.numeric' =>"يرجي ادخال رقم هاتف صحيح",
                // 'phone.max' =>'رقم الهاتف طويل جدا ',
                'phone.min' =>'رقم الهاتف قصير جدا ',
                //subject
                'course_id.required' =>'يرجي ادخال اسم الدورة',





        ];
    }
}
