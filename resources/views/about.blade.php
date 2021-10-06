@extends('layouts.app')
@section('content')

<!-- Breadcrumb section -->
<div class="site-breadcrumb">
    <div class="container">
        <a href="#"><i class="fa fa-home"></i> الرئيسية</a> <i class="fa fa-angle-left"></i>
        <span> عنا</span>
    </div>
</div>
<!-- Breadcrumb section end -->

	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>مرحبا بكم في قسم التدريب</h3>
				<p style="font-size: 17px">دع الشباب يبدعون ويصنعون اختلافًا</p>
			</div>
			<div class="row">
				<div class="col-lg-6 about-text">
					<h5>عنا </h5>
					<p> نحن نعمل في قسم التدريب لإعداد المجال التقني وخلق بيئة مثالية
                    </p>
					<h5 class="pt-4">لماذا نحن ؟</h5>
					<p>من الصعب أن تحلق في قطيع ليس لك ، أو أن تتعايش مع أشخاص ليسوا مثلك ، وهذا هو السبب في أن جميع الطامحين والممثلين في المجال التقني يرون قسم التدريب وجهة لهم.</p>
					<ul class="about-list">
						<li><i class="fa fa-check-square-o"></i> نعتقد أن الاستثمار الحقيقي هو الفرد من خلال تأهيله وامتلاكه للتكنولوجيا الحديثة .</li>
						<li><i class="fa fa-check-square-o"></i> الوصول بالكوادر الفنية والهندسية إلى درجات الإتقان المهني.</li>
						<li><i class="fa fa-check-square-o"></i> نعمل معًا لتحقيق مفهوم المجال التقني المثالي.</li>
						<li><i class="fa fa-check-square-o"></i> نعتقد أن الاستثمار الحقيقي هو الفرد من خلال تأهيله وامتلاكه للتكنولوجيا الحديثة</li>
					</ul>
				</div>
				<div class="col-lg-6 pt-5 pt-lg-0">
					<img src="assest-front/img/about.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- About section end-->





	<!-- Team section  -->
	{{-- <section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>OUR TEAM</h3>
				<p>The professional standards and expectations</p>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="assest-front/img/member/1.jpg">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>Sasha Johnson</h5>
						<p>Literature Teacher</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="assest-front/img/member/2.jpg">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>Darmian Shaw</h5>
						<p>Physics Teacher</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="assest-front/img/member/3.jpg">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>Joshua Matt</h5>
						<p>Matt Teacher</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="assest-front/img/member/4.jpg">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>Taylor Launer</h5>
						<p>Music Teacher</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Team section end -->



    @stop

@section('js')
@stop
