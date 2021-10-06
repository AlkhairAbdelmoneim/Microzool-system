<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class courseReq extends FormRequest
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
            'course_duration' => 'required|min:4|string',
            'decs' => 'nullable|min:4',
            'image' => 'required|image',
            'teacher_id' => 'required|numeric',
            'price' => 'required|numeric',

        ];
    }

    public function messages()
    {
        return[

                //name
                'name.required' =>'يرجي ادخال اسم الدورة',
                'name.min' =>'اسم الدورة قصير جدا ',
                'name.string' =>'اسم الدورة يجب أن يكون نصا ',
                //date
                'date.required' =>'يرجي ادخال تاريخ الدورة',
                'date.min' =>'تاريخ الدورة قصير جدا ',
                'date.string' =>'تاريخ الدورة يجب أن يكون نصا ',
                //

                //course_duration
                'course_duration.required' =>'يرجي ادخال مدةالدورة',
                'course_duration.min' =>'عدد أحرف مدة الدورة قصير جدا ',
                'course_duration.string' =>'أحرف مدة الدورة يجب أن تكون نصا ',
                //decs
                'decs.min' =>'محاور الدورة قصيرة جدا ',

                //image
                'date.required' =>'يرجي ادخال صورةالدورة',
                'date.string' =>'صورةالدورة يجب أن تكون صورة ',
                //teacher_id
                'teacher_id.required' =>'يرجي ادخال معرف الأستاذ',
                //price
                'price.required' =>'يرجي ادخال سعر الدورة',
                'name.numeric' =>'اسم الدورة يجب أن يكون رقما ',
        ];
    }
}
