@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@section('title')
    الدورات
@stop

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الدورات </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                عرض الدورات</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- row -->
    <div class="row">


        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">

                            <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                               data-toggle="modal" href="#modaldemo8">






                               اضافة دورة</a>

                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">اسم الدورة</th>
                                <th class="border-bottom-0">التاريخ</th>
                                <th class="border-bottom-0">مدة الدورة</th>
                                <th class="border-bottom-0">محاور الدورة</th>
                                <th class="border-bottom-0">اسم المدرب</th>
                                <th class="border-bottom-0">السعر</th>
                                <th class="border-bottom-0">الصورة </th>
                                <th class="border-bottom-0"> العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

@foreach( $courses as $course)
                                <tr>
                                    <td>{{ $course ->id}}</td>
                                    <td>{{ $course ->name}}</td>
                                    <td>{{ $course ->date }}</td>
                                    <td>{{ $course ->course_duration}}</td>
                                    <td>{{ $course ->decs}}</td>
                                    <td>{{ $course ->phone }}</td>
                                    <td>{{ $course ->price}}</td>
                                    <td>{{ $course ->image}}</td>
                                    <td>

                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                               data-id="{{ $course->id}}"
                                               data-name="{{ $course->name }}"
                                               data-date="{{ $course ->date }}"
                                               data-course_duration="{{ $course ->course_duration}}"
                                               data-techer_id="{{ $course ->phone }}"
                                               data-decs="{{ $course ->decs }}"
                                               data-image="{{ $course ->image }}"
                                               data-price="{{ $course ->price }}"
                                               data-toggle="modal"
                                               href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>

                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                               data-id="{{ $course ->id}}" data-name="{{ $course ->name }}"
                                               data-toggle="modal" href="#modaldemo9" title="حذف"><i
                                                    class="las la-trash"></i></a>

                                    </td>
                                </tr>
@endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

          <!-- start create modal -->
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة دورة</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                      type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('courses.store') }}" method="post">
                            {{ csrf_field() }}



                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الدورة</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> تاريخ الدورة</label>
                                <input type="text" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> مدة الدورة</label>
                                <input type="text" class="form-control" id="course_duration" name="course_duration">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">  المدرب</label>
                                <input type="text" class="form-control" id="techer_id" name="techer_id">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">  محاور الدورة</label>
                                <input type="text" class="form-control" id="decs" name="decs">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">  صورة للدورة</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">  سعر الدورة </label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">تاكيد</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End create modal -->


        </div>
        <!-- edit -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل الدورة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="courses/update" method="post" autocomplete="off">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">اسم الدورة</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> تاريخ الدورة</label>
                                    <input type="text" class="form-control" id="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> مدة الدورة</label>
                                    <input type="text" class="form-control" id="course_duration" name="course_duration">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">  المدرب</label>
                                    <input type="text" class="form-control" id="techer_id" name="techer_id">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">  محاور الدورة</label>
                                    <input type="text" class="form-control" id="decs" name="decs">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">  صورة للدورة</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">  سعر الدورة </label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>

                            </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">تاكيد</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- delete  -->
        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">حذف الدورة</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                      type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="courses/destroy" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="id" id="id" value="">
                            <input class="form-control" name="name"  id="name" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                </div>
                </form>
            </div>
        </div>




        <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>

    <script>




        $('#exampleModal2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var date = button.data('date')
            var course_duration = button.data('course_duration')
            var techer_id = button.data('techer_id')
            var decs = button.data('decs')
            var image = button.data('image')
            var price = button.data('price')
            // ###################################
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #date').val(date);
            modal.find('.modal-body #course_duration').val(course_duration);
            modal.find('.modal-body #techer_id').val(techer_id);
            modal.find('.modal-body #decs').val(decs);
            modal.find('.modal-body #image').val(image);
            modal.find('.modal-body #price').val(price);
        })
    </script>
{{-- ################ delete ################### --}}
    <script>
        $('#modaldemo9').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>

@endsection
