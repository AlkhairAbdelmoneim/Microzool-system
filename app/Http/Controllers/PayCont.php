<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
use App\Http\Requests\paymentReq;
use Illuminate\Support\Facades\Validator;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreService;

class PayCont extends Controller

{

    public function index()
    {
        //
        $payments = payment::all();
        return view('payments.payments',compact('payments'));
    }

    public function create()
    {
        //
    }
     public function store(paymentReq $request)
     {

        $request_data = $request->except(['_token']);

        if ($request->eshaar) {
    
            Image::make($request->eshaar)->resize(800, 700)->save(public_path('uploads/img/payments/' .$request->eshaar->hashName()));

            $request_data['eshaar'] = $request->eshaar->hashName();

        }


        // insert
         payment::create($request_data);


         $notification = array(
            'message' => 'تم استلام طلبك بنجاح جاري التحقق منه .. ',
            'alert-type' => 'success'
        );

        return redirect('payment')->with($notification);


        //  session()->flash('Add', 'تم استلام طلبك بنجاح جاري التحقق منه .. ');
        //  return redirect('payment');

     }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {


    }

    public function destroy(Request $request)
    {

        $id = $request->id;
        $id =  payment::find($id);

        if(!$id){

            $notification = array(
                'message' => 'هنالك خطأ ما',
                'alert-type' => 'warning'
            );
            return redirect('payment')->with($notification);

        }

            if ($id['eshaar'] != 'image.png') {
                
                Storage::disk('public_uploads')->delete('/img/payments/' .$id['eshaar']);
            }   


            $id->delete();

            $notification = array(
                'message' => 'تم حذف البيانات بنجاح',
                'alert-type' => 'success'
            );

            return redirect('payments')->with($notification);





    }
}
