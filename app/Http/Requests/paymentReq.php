<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paymentReq extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return[
            'name' => 'required|max:30|min:4',
            'phone' => 'required|min:4',
            'process_num' => 'required|min:5',
            'eshaar' => 'required|mimes:png,jpg,jpeg',

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
                //process_num
                'process_num.required' =>'يرجي ادخال رقم العملية',
                'process_num.min' =>'رقم العملية قصير جدا',
                //eshaar
               'eshaar.required' =>"يرجي ادخال اشعار الدفع",
               'eshaar.image' =>" اشعار الدفع يجب أن يكون صورة",

        ];
    }
}
