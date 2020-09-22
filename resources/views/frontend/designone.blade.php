@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content') 
      <!-- Banner -->
      <section id="slider" class=" sectionnopadding">
            <div class="swiper-container slider-full animation mt-3">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="../../uploads/category/{{$category->bannerimage }}" class="image-slider">
                    </div>
                </div>
            </div>
        </section>


<section>
			
            <div class="container mtsm">
                 <div class="row text-center intro">

                    <div class="col-12">

                        <h2> {{$category->title}}</h2>

                        <p class="text-max-800">{{$category->description}}</p><br>


                    </div>

                </div>

              <div class="col-lg-12" id="section1">
                <div class="filters border border-secondary rounded p-4">
				<form class="row">
					<div class="col-12 p-0 align-self-center">
						<div class="row">
							<div class="col-12 p-0 input-group">
								<button class="btn primary-button"><i class="icon-magnifier"></i>بحث</button>
								<input type="text" class="form-control" placeholder="يمكنك البحث عن ما تريد" style="text-align: right">
							</div>
						</div>
					</div>
				</form>

				<div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(#);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">

					<div class="section-content p-b30">
                        <div class="wt-accordion acc-bg-dark acc-has-bg" id="accordion10">

							<div class="panel wt-panel">
                                <div class="acod-head" align="right">
                                     <h6 class="acod-title text-uppercase">
                                        <a data-toggle="collapse" href="#collapseTwo10" class="collapsed" data-parent="#accordion10" >
                                        تصفية حسب 
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h6>
                                </div>
                                <div id="collapseTwo10" class="acod-body collapse" align="right">

				<div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(#);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container"><br>
                    <div class="section-head">
                         <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-6 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>التصنيف</option>
                                                    <option>أكشن</option>
                                                    <option>مغامرة</option>                               <option>لعب مجاني</option>
                                                    <option>محاكاة</option>                               <option>سباق</option>
                                                    <option>رياضات</option>                               <option>رياضات</option>
                                                    <option>إستراتيجية</option>                           <option>الوصول المبكر</option>
                                                </select>
                                            </div>
											<div class="col-6 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>القسم</option>
                                                    <option>صفقات خاصة</option>
                                                    <option>كروت الشحن</option>
                                                    <option>جيم توب اب</option>
                                                    <option>جيم توب اب مكرر</option>                     <option>قسم رقم 4</option>
                                                    <option>قسم رقم 5</option>
                                                    <option>قسم رقم 6</option>
                                                    <option>قسم رقم 7</option>
                                                    <option>قسم رقم 8</option>
                                                </select>
                                            </div>
                                            <div class="col-6 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>النوع</option>
                                                    <option>الرسوم المتحركة</option>
                                                    <option>إنتاج الصوت</option>
                                                    <option>انتاج الفيديو</option>
                                                    <option>التصميم</option>
                                                    <option>تحرير الصور</option>
                                                    <option>التعليم</option>
                                                    <option>تطوير الالعاب</option>
                                                    <option>خدمات</option>
                                                </select>
                                            </div>
											<div class="col-6 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>بطاقات</option>
                                                    <option>بطاقة</option>
                                                    <option>كروت الشحن</option>
                                                    <option>جيم توب اب</option>
                                                    <option>جيم توب اب مكرر</option>                     <option>قسم رقم 4</option>
                                                    <option>قسم رقم 5</option>
                                                    <option>قسم رقم 6</option>
                                                    <option>قسم رقم 7</option>
                                                    <option>قسم رقم 8</option>
                                                </select>
                                            </div>
										</div>
                                    </fieldset>
                                </div>
                            </div>
                    </div>                    
                       </div>
                         </div>
						 </div>                                        
                    </div>
                </div>
            </div> 
                </div>
                  </div>
                </div>
              </div>
              <br>
        <!--  [ on mobile] -->
        <section id="section2" class="offers">
              <div class="col-lg-12">
                <div class="filters border border-secondary rounded p-4">
				<form class="row">
					<div class="col-12 p-0 align-self-center">
						<div class="row">
							<div class="col-12 p-0 input-group">
								<button class="btn primary-button"><i class="icon-magnifier"></i>بحث</button>
								<input type="text" class="form-control" placeholder="يمكنك البحث عن ما تريد" style="text-align: right">
							</div>
						</div>
					</div>
				</form>

				<div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(#);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">

					<div class="section-content p-b30">
                        <div class="wt-accordion acc-bg-dark acc-has-bg" id="accordion10">

							<div class="panel wt-panel">
                                <div class="acod-head" align="right">
                                     <h6 class="acod-title text-uppercase">
                                        <a data-toggle="collapse" href="#collapseTwo10" class="collapsed" data-parent="#accordion10" >
                                        تصفية حسب 
                                        </a>
                                     </h6>
                                </div>
                                <div id="collapseTwo10" class="acod-body collapse" align="right">

				<div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(#);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container"><br>
                    <div class="section-head">
                         <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-12 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>التصنيف</option>
                                                    <option>أكشن</option>
                                                    <option>مغامرة</option>                               <option>لعب مجاني</option>
                                                    <option>محاكاة</option>                               <option>سباق</option>
                                                    <option>رياضات</option>                               <option>رياضات</option>
                                                    <option>إستراتيجية</option>                           <option>الوصول المبكر</option>
                                                </select>
                                            </div>
											<div class="col-12 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>القسم</option>
                                                    <option>صفقات خاصة</option>
                                                    <option>كروت الشحن</option>
                                                    <option>جيم توب اب</option>
                                                    <option>جيم توب اب مكرر</option>                     <option>قسم رقم 4</option>
                                                    <option>قسم رقم 5</option>
                                                    <option>قسم رقم 6</option>
                                                    <option>قسم رقم 7</option>
                                                    <option>قسم رقم 8</option>
                                                </select>
                                            </div>
                                            <div class="col-12 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>النوع</option>
                                                    <option>الرسوم المتحركة</option>
                                                    <option>إنتاج الصوت</option>
                                                    <option>انتاج الفيديو</option>
                                                    <option>التصميم</option>
                                                    <option>تحرير الصور</option>
                                                    <option>التعليم</option>
                                                    <option>تطوير الالعاب</option>
                                                    <option>خدمات</option>
                                                </select>
                                            </div>
											<div class="col-12 input-group p-1">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>بطاقات</option>
                                                    <option>بطاقة</option>
                                                    <option>كروت الشحن</option>
                                                    <option>جيم توب اب</option>
                                                    <option>جيم توب اب مكرر</option>                     <option>قسم رقم 4</option>
                                                    <option>قسم رقم 5</option>
                                                    <option>قسم رقم 6</option>
                                                    <option>قسم رقم 7</option>
                                                    <option>قسم رقم 8</option>
                                                </select>
                                            </div>
										</div>
                                    </fieldset>
                                </div>
                            </div>
                    </div>                    
                       </div>
                         </div>
						 </div>                                        
                    </div>
                </div>
            </div> 
                </div>
                  </div>
                </div>
              </div><br>
        </section>

        @if($category->Games->count())    
                    @foreach ($category->Games as $game) 
                <div class="row">
					<div class="col-6 col-md-4 card">
						<img src="../../../uploads/games/{{$game->image}}">
						<div class="priceonimg">{{$game->price}}</div>
						<div class="priceonimgtop2">
						<h5 dir="rtl" class="font-weight-bold">OFF {{$game->percentage}}%</h5>
						</div>

					</div>
							
                </div>
            </div>
        </section>
                           
            <section  class="showcase blog-grid">

            <div class="container">

                                <div class="row">

                    <div class="col-12">

                        <nav>

                         
                        <ul class="pagination m-auto justify-content-center">

                                                        

                             <li >{{$game->paginate()}}</li>



                        </ul>

                        </nav>

                    </div>

                </div>


            </div>

        </section>
        @endforeach
        @endif   

@endsection