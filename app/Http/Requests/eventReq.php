<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class eventReq extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return[
            'name' => 'required|min:4|string',
            'date' => 'required|string|min:4',
            'event_duration' => 'required|min:4|string',
            'decs' => 'nullable|min:4',
            'image' => 'required',

            'price' => 'required|numeric',

        ];
    }

    public function messages()
    {
        return[

                //name
                'name.required' =>'يرجي ادخال اسم الحدث',
                'name.min' =>'اسم الحدث قصير جدا ',
                'name.string' =>'اسم الحدث يجب أن يكون نصا ',
                //date
                'date.required' =>'يرجي ادخال تاريخ الحدث',
                'date.min' =>'تاريخ الحدث قصير جدا ',
                'date.string' =>'تاريخ الحدث يجب أن يكون نصا ',
                //

                //course_duration
                'evevt_duration.required' =>'يرجي ادخال مدة الحدث',
                'evevt_duration.min' =>'عدد أحرف مدة الحدث قصير جدا ',
                'course_duration.string' =>'أحرف مدة الحدث يجب أن تكون نصا ',
                //decs
                'decs.min' =>'محاور الحدث قصيرة جدا ',

                //image
                'date.required' =>' يرجي ادخال صورةالحدث ',
                // 'date.image' =>'صورةالحدث يجب أن تكون صورة ',

                //price
                'price.required' =>'يرجي ادخال سعر الحدث',
                'price.numeric' =>'اسم الحدث يجب أن يكون رقما ',
        ];
    }
}
