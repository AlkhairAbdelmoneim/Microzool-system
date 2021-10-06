@extends('layouts.app')
@section('content')

<!-- Breadcrumb section -->
<div class="site-breadcrumb">
    <div class="container">
        <a href="#"><i class="fa fa-home"></i> الرئيسية</a> <i class="fa fa-angle-left"></i>
        <span> الأحداث</span>
    </div>
</div>
<!-- Breadcrumb section end -->
	<!-- Event section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
			<b>	<h3 style="font-size: 30px;">الأحداث</h3>
				<p style="font-size: 17px;">بدأ قسمنا سلسلة من الأحداث</p> </b>
			</div>
			<div class="row">
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="assest-front/img/event/1.jpg" alt="">
						<div class="event-date">
							<span>24 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>The dos and don'ts of writing a personal<br>statement for languages</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="assest-front/img/event/2.jpg" alt="">
						<div class="event-date">
							<span>22 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>University interview tips:<br>confidence won't make up for flannel</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Event section end -->


    @stop

@section('js')
@stop
