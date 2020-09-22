@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content') 
@include('frontend.includes.bannerpages')
<section class="single" dir="rtl">
            <div class="container">
                <div class="row content">
                    <main class="col-12 col-lg-8 p-0">

                        <!-- Text -->
                        <div class="row" align="right">
                            <div class="col-12 align-self-center">
                            <h2>{{$newshow->title}}</h2>


                           {!!  $newshow->content!!}
						<div class="row item">

                            <div class="col-12 align-self-center" align="center">

                                <h4>شارك الموضوع</h4>

                                <ul class="navbar-nav social share-list">


                                    <li class="nav-item">
                                    <a href="https://www.facebook.com/sharer.php?u=#" target="_blank" class="nav-link">
                                                <i class="icon-social-facebook"></i></a>

                                    </li>

                                    <li class="nav-item">

                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=#" target="_blank" class="nav-link">
                                    <i class="icon-social-linkedin"></i></a>

                                    </li>

                                    <li class="nav-item">

                                    <a href="https://twitter.com/share?url=#&text=Simple Share Buttons" target="_blank" class="nav-link">
                                    <i class="icon-social-twitter"></i></a>

                                    </li>

                                </ul>

                            </div>

                        </div>     
                        
                        
                    </main>
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">

                                    @include('frontend.includes.sidebar')
					</aside>
               
                </div>

                @include('frontend.includes.gamesandproduct')
                
            
        </section>
@endsection