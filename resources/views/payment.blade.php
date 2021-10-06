@extends('layouts.app')
@section('content')


    <!-- Breadcrumb section -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="#"><i class="fa fa-home"></i> الرئيسية</a> <i class="fa fa-angle-left"></i>
            <span> صفحة الدفع</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->

    <!-- Event section -->


    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5" style="text-align: center" enctype="multipart/form-data">
                    <br> الرجاء سداد الفاتورة في رقم الحساب : <input class=""  placeholder=" 2581722" type="text"
                        disabled><br> <br>
                    باسم : <input class=""  placeholder=" منذر شاكر الطيب إدريس "  type=" text" disabled> (في التعليق أكتب
                    إسمك وإسم الدورة ) <br> <br>


                </div>
                <p class="mg-b-20" style="text-align: center">وإرفاق الإشعار وادخال رقم العملية وملئ البيانات الأخري
                </p>
                <form action="{{ route('payments.store') }}" method="POST" autocomplete="false" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row row-sm">
                        <div class="col-6">
                            <div class="form-group mg-b-0" style="text-align: right">
                                <label class="form-label" style="text-align: right">إسم الطالب رباعي : <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" name="name" placeholder="الأسم رباعي" required type="text">
                            </div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <div class="form-group">
                                <label class="form-label">رقم الهاتف : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="phone" placeholder="رقم هاتف الطالب" required
                                    type="text">
                            </div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <div class="form-group">
                                <label class="form-label">رقم العملية : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="process_num"
                                    placeholder="رقم عملية المعاملة الموجودة في الأشعار " required type="text">
                            </div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <div class="form-group">
                                <label class="form-label">تحميل الإشعار : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="eshaar" required type="file">
                            </div>
                        </div>
                        <div class="col-12"><button class="form-control" type="submit"
                                style="background-color: #020031;color:#fff">تسجيل</button></div>
                    </div>
                </form> <br>
                <div class="main-content-label mg-b-5" style="text-align: center">
                    يرجى العلم أنه ستتم مراجهة هذه العملية يدويا وقد تستغرق ما بين 3 - 24 ساعة .
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- Event section end -->


@stop

@section('js')
    <script>
        use = "strict";

        $(document).on('click', '#send', function(e) {

            e.preventDefault();

            $('#name_error').text('');
            $('#email_error').text('');
            $('#address_error').text('');
            $('#phone_error').text('');
            $('#message_error').text('');
            $('#message_error').text('');

            var formData = new FormData($('#form_data')[0]);

            $.ajax({
                type: "post",
                url: "{{-- route('store') --}}",
                cach: false,
                processData: false,
                contentType: false,
                data: formData,

                success: function(data) {

                    $('input[type=email],input[type=text]').val('');
                    $('#textarea').val('');

                    $.each(data, function(key, val) {

                        $('#success').text(val);

                        $('#success-msg').fadeIn(300, function() {
                            $(this).fadeOut(11000);
                        });
                    });
                },

                error: function(reject) {

                    var response = $.parseJSON(reject.responseText);

                    $.each(response.errors, function(key, val) {

                        $('#' + key + '_error').text(val);

                    });

                }
            });

        });
    </script>
@stop
