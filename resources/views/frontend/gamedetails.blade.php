@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content') 
        <!-- Banner -->
        <section id="slider" class=" sectionnopadding">
            <div class="swiper-container slider-full animation mt-3">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="../../uploads/games/{{$game->bannerimage}}" class="image-slider">
                    </div>
                </div>
            </div>
        </section>

        <section class="single" dir="rtl">
            <div class="container">
                <div class="row content">
                    <main class="col-12 col-lg-8 p-0">

                        <!-- Text -->
                        <div class="row" align="right">
                            <div class="col-12 align-self-center">
                                <h2>{{$game->title}}</h2>
                              
								<div align="center">
                                <a href="checkout.html" class="cart-btn" style="color: #FFFFFF"><i class="fa fa-cart-plus"></i> اضغط هنا للشحن </a>
                                <a href="checkout.html" class="cart-btn" style="color: #FFFFFF"><i class="fa fa-cart-plus"></i> اضغط هنا للتحميل </a><br><br>   	
								</div>
                         
                                   {!! $game->description !!}

								<div align="center">
                                <a href="checkout.html" class="cart-btn" style="color: #FFFFFF"><i class="fa fa-cart-plus"></i> اضغط هنا للشحن </a>
                                <a href="checkout.html" class="cart-btn" style="color: #FFFFFF"><i class="fa fa-cart-plus"></i> اضغط هنا للتحميل </a><br><br>   	
								</div>
                   
                    </main>
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">

                            @include('frontend.includes.sidebar')
					</aside>
               
                </div>
            <!-- SECTION CONTENT WITH BACKGROUND -->
            <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(#);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                	<!-- TILE START -->
                    <div class="section-head">
                                    
                        <h4 class="text-uppercase text-white" align="right">الأحكام والشروط</h4>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-primary"></div>
                        </div>
                    
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- ACCORDIAN  BG DARK -->
                    <div class="section-content p-b30">
                        <div class="wt-accordion acc-bg-dark acc-has-bg" id="accordion10">
                            <div class="panel wt-panel">
                                <div class="acod-head acc-actives" align="right">
                                     <h6 class="acod-title text-uppercase">
                                        <a data-toggle="collapse" href="#collapseOne10" data-parent="#accordion10" ><i class="icon-arrow-down"></i> اضغط هنا للتعرف على الاحكام والشروط
                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h6>
                                </div>
                                <div id="collapseOne10" class="acod-body collapse in" align="right">
                                    <div class="acod-content p-tb15"> 
                                            {{ $game->terms_conditions }}
									</div>
                                </div>
                            </div>
                        </div>                                        
                    </div>
                        
                </div>
            </div><br>

            <!-- SECTION CONTENT END --> 
                <h4 class="text-uppercase text-white" align="right">التعليمات</h4>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                        @foreach($game->instructions as $instruction)    
                            <img src="../../uploads/instructions/{{$instruction->image}}" class="icon icon-layers" >
                            <h4>{{ $instruction->title }} </h4>
                            <p>{{substr($instruction->description,0,30)}}</p>
                        @endforeach    
                        </div>
                    </div>
        
        
                                
                       
                   
                </div>
          
                  <br>

				<div align="center">
				<a href="#" class="cart-btn" style="color: #FFFFFF"><i class="fa fa-cart-plus"></i>زر اضافى</a>
				<a href="#" class="cart-btn" style="color: #FFFFFF"><i class="fa fa-cart-plus"></i>زر اضافى </a><br><br>   	
				</div>                                                                     
                                                                      
                  @include('frontend.includes.gamesandproduct')
                
            </div>
        </section>
        
        

        
 @endsection       