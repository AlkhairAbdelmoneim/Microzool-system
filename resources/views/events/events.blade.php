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
                <h4 class="content-title mb-0 my-auto">الأحداث </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                عرض الأحداث</span>
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


    <!-- row -->
    <div class="row">


        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">

                            <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                               data-toggle="modal" href="#modaldemo8">


                               اضافة حدث</a>

                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">اسم الحدث</th>
                                <th class="border-bottom-0">التاريخ</th>
                                <th class="border-bottom-0">مدة الحدث</th>
                                <th class="border-bottom-0">محاور الحدث</th>
                                <th class="border-bottom-0">السعر</th>
                                <th class="border-bottom-0">الصورة </th>
                                <th class="border-bottom-0"> العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

@foreach( $events as $event)
                                <tr>
                                    <td>{{ $event ->id}}</td>
                                    <td>{{ $event ->name}}</td>
                                    <td>{{ $event ->date }}</td>
                                    <td>{{ $event ->course_duration}}</td>
                                    <td>{{ $event ->decs}}</td>
                                    <td>{{ $event ->price}}</td>
                                    <td>{{ $event ->image}}</td>
                                    <td>

                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                               data-id="{{ $event->id}}"
                                               data-name="{{ $event->name }}"
                                               data-date="{{ $event ->date }}"
                                               data-event_duration="{{ $event ->event_duration}}"

                                               data-decs="{{ $event ->decs }}"
                                               data-image="{{ $event ->image }}"
                                               data-price="{{ $event ->price }}"
                                               data-toggle="modal"
                                               href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>

                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                               data-id="{{ $event ->id}}" data-name="{{ $event ->name }}"
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
                        <h6 class="modal-title">اضافة حدث</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                      type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('events.store') }}" method="post">
                            {{ csrf_field() }}



                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الحدث</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> تاريخ الحدث</label>
                                <input type="text" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> مدة الحدث</label>
                                <input type="text" class="form-control" id="event_duration" name="event_duration">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">  محاور الحدث</label>
                                <input type="text" class="form-control" id="decs" name="decs">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">  صورة الحدث</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">  سعر الحدث </label>
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
                        <h5 class="modal-title" id="exampleModalLabel">تعديل الحدث</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="events/update" method="post" autocomplete="off">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">اسم الحدث</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> تاريخ الحدث</label>
                                    <input type="text" class="form-control" id="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> مدة الحدث</label>
                                    <input type="text" class="form-control" id="event_duration" name="course_duration">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">  محاور الحدث</label>
                                    <input type="text" class="form-control" id="decs" name="decs">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">  صورة الحدث</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">  سعر الحدث </label>
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
                        <h6 class="modal-title">حذف الحدث</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                      type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="events/destroy" method="post">
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
            var event_duration = button.data('event_duration')
            var decs = button.data('decs')
            var image = button.data('image')
            var price = button.data('price')
            // ###################################
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #date').val(date);
            modal.find('.modal-body #event_duration').val(event_duration);
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
