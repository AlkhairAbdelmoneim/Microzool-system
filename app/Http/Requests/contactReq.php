<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactReq extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return[
            'name' => 'required|max:30|min:4|string',
            'phone' => 'required|min:8|max:15',
            'subject' => 'required|max:50|min:4',
            'content' => 'required',
            'email' => 'nullable|min:7|max:35|unique:contacts,email',
        ];
    }

    public function messages()
    {
        return[

                //name
                'name.required' =>'يرجي ادخال اسم الطالب',
                'name.max' =>'الاسم طويل جدا ',
                'name.min' =>'الاسم قصير جدا ',
                'name.string' =>'الاسم يجب أن يكون نصا ',
                //phone
                'phone.required' =>'يرجي ادخال رقم الهاتف',
                'phone.numeric' =>"يرجي ادخال رقم هاتف صحيح",
                'phone.max' =>'رقم الهاتف طويل جدا ',
                'phone.min' =>'رقم الهاتف قصير جدا ',
                //subject
                'subject.required' =>'يرجي ادخال  الموضوع',
                'subject.max' =>'الموضوع طويل جدا ',
                'subject.min' =>'الموضوع قصير جدا',
                //email
                'email.max' =>' البريد الإلكتروني طويل جدا ',
                'email.min' =>'البريد الإلكتروني قصير جدا',
                'email.unique' =>'البريد الإلكتروني موجود مسبقا',
                //content
               'content.required' =>"يرجي ادخال الرسالة",


        ];
    }
}
