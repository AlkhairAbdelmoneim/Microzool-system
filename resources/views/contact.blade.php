@extends('layouts.app')
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
	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>العنوان</h4>
						<p>غرب مول الواحة عمارة عبد المجيد السيد الطابق الثالث</p>
					</div>
					<div class="contact-info">
						<h4>هاتف</h4>
						<p>922318333 (249+)</p>
					</div>
					<div class="contact-info">
						<h4>البريد الإلكتروني</h4>
						<p>training@microzool.com</p>
					</div>
					<div class="contact-info">
						<h4>مواعيد العمل</h4>
						<p>السبت - الخميس:
                            8 صباحا - 6 مساء</p>
					</div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
			</div>
			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>إبقي علي تواصل معنا </h3>
					<p>اتصل بنا للحصول على أفضل العروض والدورات</p>
				</div>
				<form class="comment-form --contact" method="POST" action="{{ route('contacts.store')}}">
                    {{ csrf_field() }}
                    @csrf
                    <div class="row">
						<div class="col-lg-6">
							<input type="text" placeholder="إسمك" name="name" required>
						</div>
						<div class="col-lg-6">
							<input type="text" placeholder="رقم الهاتف" name="phone" required>
						</div>
                        <div class="col-lg-6">
							<input type="email" placeholder="بريدك اللإلكتروني" name="email">
						</div>
						<div class="col-lg-6">
							<input type="text" placeholder="الموضوع" required name="subject">
						</div>
						<div class="col-lg-12">
							<textarea placeholder="الرسالة" required name="content"></textarea>
							<div class="text-center">
								<button class="site-btn">إرسال</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Courses section end-->


    @stop

@section('js')
@stop
