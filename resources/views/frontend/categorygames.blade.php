@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content')
      <!-- Banner -->
      <section id="slider" class=" sectionnopadding">
            <div class="swiper-container slider-full animation mt-3">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="{{asset('site/assets/images/slid1.jpg')}}" class="image-slider">
                    </div>
                </div>
            </div>
        </section>


<section>

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
						<img src="../../../uploads/games/{{$game->image}}">
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
						<img src="../../../uploads/games/{{$game->image}}">
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
						<img src="../../../uploads/games/{{$game->image}}">
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
						<img src="../../../uploads/games/{{$game->image}}">
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
      

@endsection