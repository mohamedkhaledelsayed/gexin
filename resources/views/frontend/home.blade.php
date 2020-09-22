@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content')
@include('frontend.includes.banner')
  <!--  [images on desktop] -->
  <section id="section1"  class="offers">
            <div class="container">
                <div class="row justify-content-center text-center items">
					<?php
					$i=0;
					$count =$categories->count();
					?>
                   @foreach($categories as $category)
                    <div class="col-12 col-md-6 col-lg-4 item">
					@if($i == 0)
                        <div   class="card featured  left">	
					@else
					<div   class="card">	
					@endif
					@if($i == $count)
						<div class="card featured right">
					@endif
                            <div class="gallery">
                                <a href="{{ route('categoryshow.show',$category->id) }}">
                                    <img src="../uploads/category/{{$category->homeimage}}" alt="Imaginary Art">
                                </a>
                            </div>
						</div>
					</div>
					@php 
					$i++;
					@endphp
                    @endforeach
         
                </div>
            </div>
        </section>
        <!--  [images on mobile] -->
        <section id="section2" class="offers">
            <div class="container">
                <div class="row justify-content-center text-center items">
                   @foreach($categories as $category)
                    <div class="col-4 item">
                        <div class="card featured left">
                            <div class="gallery">
                                <a href="">
                                    <img src="../uploads/category/{{$category->iconimage}}" alt="Imaginary Art">
                                </a>
								<p>اسم الصورة</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
            <!-- الأفضل مبيعا -->
            <section>
            <div class="container mtsm">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-right">الأفضل مبيعاً</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured left">
                            <div class="gallery">
                                <a href="{{asset('site/assets/images/work-1.jpg')}}">
                                    <img src="{{asset('site/assets/images/psn-card-home.jpg')}}" alt="Imaginary Art">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured right">
                            <div class="gallery">
                                <a href="{{asset('site/assets/images/work-2.jpg')}}">
                                    <img src="{{asset('site/assets/images/iTunes.jpg')}}" alt="Creative Wall">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- صفقات خاصة -->

     @foreach ($categories as $category)  
		@if($category->designs == 1)
	
		<section>
            <div class="container mtsm">
                <div class="row">
					<div class="col-6 text-left">
						<div class="desktop"><a href="{{route('gamesone')}}" class="btn primary-button"><i class="icon-grid"></i>عرض الكل</a></div>
						<div class="mobile"><a href="{{route('gamesone')}}"><i class="icon-grid"></i></a></div>
					</div>
					
                    <div class="col-6 text-right">
					
						<h3 class="featured">{{$category->title}}</h3>
				
					</div>
				
				</div>

                <div class="row">
				@if($category->Games->count())    
                @foreach ($category->Games->take(6) as $game)  
					<div class="col-6 col-md-4 card">
                    <a href="{{route('gameshow',$game->id)}}">
						<img src="../../uploads/games/{{$game->image}}">
                    </a>    
						<div class="priceonimg">{{$game->price}}</div>
						<div class="priceonimgtop2">
						@isset($game->percentage)		
						<h5 dir="rtl" class="font-weight-bold">OFF {{$game->percentage}}%</h5>
						@endisset
						</div>
					</div>
				@endforeach	
				@endif	
                </div>
            </div>
		</section>

				
		@endif
		@endforeach

	
		  <!-- كروت الشحن desktop  -->
		@foreach ($categories as $category)  
		@if($category->designs == 2)
          <section id="section1">
            <div class="container mtsm">
                <div class="row">
                   
					<div class="col-6 text-left">
						<div class="desktop"><a href="{{route('gamestwo')}}" class="btn primary-button"><i class="icon-grid"></i>عرض الكل</a></div>
						<div class="mobile"><a href="{{route('gamestwo')}}"><i class="icon-grid"></i></a></div>
					</div>
                    <div class="col-6 text-right">
                        <h3 class="featured">{{$category->title}}<h3>
                    </div>
                </div>
                @if($category->Games->count())    
                @foreach ($category->Games->take(6) as $game) 
                <div class="row">
					<div class="col-4 col-md-2 card">
                    <a href="{{route('gameshow',$game->id)}}">
						<img src="../../uploads/games/{{$game->image}}">
                    </a>    
					</div>
					@endforeach	
				@endif	
                </div>
            </div>
		  </section>
          @endif
		@endforeach
        <!-- كروت الشحن mobile  -->
        @foreach ($categories as $category)  
		@if($category->designs == 2)
        <section id="section2">
            <div class="container">
                <div class="row">
					<div class="col-6 text-left">
						<div class="desktop"><a href="{{route('gamestwo')}}" class="btn primary-button"><i class="icon-grid"></i>عرض الكل</a></div>
						<div class="mobile"><a href="{{route('gamestwo')}}"><i class="icon-grid"></i></a></div>
					</div>
                    <div class="col-6 text-right">
                        <h3 class="featured">{{$category->title}}</h3>
                    </div>
                </div>
                <div class="row">
                    @if($category->Games->count())    
                    @foreach ($category->Games->take(6) as $game) 
					<div class="col-4 col-md-2 card">
                    <a href="{{route('gameshow',$game->id)}}">
						<img src="../../uploads/games/{{$game->image}}">
                    </a>    
					</div>
					@endforeach	
				@endif
                </div>
            </div>
        </section>
        @endif
        @endforeach	
		@foreach ($categories as $category)  
		@if($category->designs == 3)
        <!-- قسم رقم 4 -->
		<section>
            <div class="container mtsm">
                <div class="row">
					<div class="col-6 text-left">
						<div class="desktop"><a href="{{ route('gamesthree') }}" class="btn primary-button"><i class="icon-grid"></i>عرض الكل</a></div>
						<div class="mobile"><a href="{{ route('gamesthree') }}"><i class="icon-grid"></i></a></div>
					</div>
                    <div class="col-6 text-right">
                        <h3 class="featured">{{$category->title}}</h3>
                    </div>
                </div>
                <div class="row">
				@if($category->Games->count())    
                @foreach ($category->Games->take(4) as $game)  
					<div class="col-6 col-md-3 card">
                    <a href="{{route('gameshow',$game->id)}}">
						<img src="../../uploads/games/{{$game->image}}">
                    </a>    
						<div class="priceonimg">
							<h5 class="font-weight-bold">{{$game->title}}</h5>
							<p>{{$game->price}}</p>
						</div>
					</div>
				@endforeach
				@endif		
				
                </div>
            </div>
		</section>
		@endif
		@endforeach
      

        <!-- أحدث الأخبار -->
        		<section>
            <div class="container mtsm">
                <div class="row">
					<div class="col-6 text-left">
						<div class="desktop"><a href="{{ route('news') }}" class="btn primary-button"><i class="icon-grid"></i>عرض الكل</a></div>
						<div class="mobile"><a href="{{ route('news') }}"><i class="icon-grid"></i></a></div>
					</div>
                    <div class="col-6 text-right">
                        <h3 class="featured">أحدث الأخبار</h3>
                    </div>
                </div>
                  <div class="row">
                @foreach($latestnews as $latestnew)  
					<div class="col-6 col-md-3">
						 <div class="card p-0 text-center">
                         
                                <div class="col-12 p-0">
                                    <div class="image-over">
                                    <a href="{{route('blogdetails',$latestnew->id)}}">   <img src="../uploads/latestnews/{{$latestnew->image}}" alt="Lorem ipsum">  </a>
                                    </div>
                                    <div class="p-2 text-warning">
											<h4>{{$latestnew->title}}</h4>
                                            <p>{{ $latestnew->description}}</p>
                                        
									</div>
                                </div>
                              
                            </div>
                    </div>
                @endforeach    
			
                </div>
            </div>
        </section>

        <!-- الفيدوهات -->

           <section>
            <div class="container mtsm">
                <div class="row">
					<div class="col-6 text-left">
						<div class="desktop"><a href="{{route('videos')}}" class="btn primary-button"><i class="icon-grid"></i>عرض الكل</a></div>
						<div class="mobile"><a href="{{route('videos')}}"><i class="icon-grid"></i></a></div>
					</div>
                    <div class="col-6 text-right">
                        <h3 class="featured">الفيديوهات</h3>
                    </div>
                </div>
                <div class="row">
                @foreach($videos as $video)
					<div class="col-6 col-md-3">
						<div class="row card p-0 text-center">
							<a data-poster="" href="{{$video->link}}">
								<i class="play-video icon-control-play"></i>
								<div class="mask-radius"></div>
								<img src="../uploads/video/{{$video->image}}" class="image-fit">
							</a>
						</div>
					</div>
				@endforeach
                </div>
                </div>
        </section>

        <!-- بوابات الدفع -->
        <section id="subscribe" class="subscription">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>بوابات الدفع</h2>
                        <p class="text-max-800">إظغط علي طريقة الدفع المناسبة إليك لمشاهدة فيديو عن طريق الإستخدام</p>
                    </div>
                </div>
				<div id="partner" class="">
					<div class="swiper-container slider-min">
						<div class="swiper-wrapper">
                        @foreach($paymantgetways as $paymantgetway)    
							<div class="swiper-slide slide-center item">
								<img src="../uploads/paymentgateway/{{$paymantgetway->image}}" class="image-fit w-85">
							</div>
					    @endforeach
						</div>
					</div>
				</div>
            </div>
        </section>
        
@endsection