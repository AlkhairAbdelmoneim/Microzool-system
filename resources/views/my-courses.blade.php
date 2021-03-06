@extends('layouts.app')
@section('content')


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> الرئيسية</a> <i class="fa fa-angle-left"></i>
			<span>الدورات التدريبية</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

<!-- Courses section -->
<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3><b>دوراتنا التدريبية </b> </h3>
            <p style="font-size: 17px;">بناء عالم أفضل ، دورة واحدة في كل مرة</p>
        </div>
        <div class="row">
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="assest-front/img/course/1.jpg" alt="">
                    <div class="course-cat">
                         <a href="http" class="course-cat"> <span>BUSINESS</span> </a>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Certificate Course in Writing<br>for a Global Market</h4>
                    <h4 class="cource-price">$100<span></span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="assest-front/img/course/2.jpg" alt="">
                    <div class="course-cat">
                        <span>Marketing</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Google AdWords: Get More<br> Customers with Search Marketing </h4>
                    <h4 class="cource-price">$150<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="assest-front/img/course/3.jpg" alt="">
                    <div class="course-cat">
                        <span>DESIGN</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>The Ultimate Drawing Course<br> Beginner to Advanced</h4>
                    <h4 class="cource-price">$180<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="assest-front/img/course/4.jpg" alt="">
                    <div class="course-cat">
                        <span>DATABASE</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h4>
                    <h4 class="cource-price">$150<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="assest-front/img/course/5.jpg" alt="">
                    <div class="course-cat">
                        <span>PROGRAM</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Web Developer Bootcamp<br>Make web  applications</h4>
                    <h4 class="cource-price">$250<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="assest-front/img/course/6.jpg" alt="">
                    <div class="course-cat">
                        <span>BUSINESS</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>How to Start an Amazon<br>FBA Store on a Tight Budget</h4>
                    <h4 class="cource-price">$150<span>/month</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses section end-->


    @stop

@section('js')
@stop
