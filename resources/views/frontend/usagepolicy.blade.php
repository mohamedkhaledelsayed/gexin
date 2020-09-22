@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content')
@include('frontend.includes.bannerpages')

<section class="single">

            <div class="container">

                <div class="row content" dir="rtl">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-right">

                        <div class="row intro">

                            <div class="col-12 p-0">
                      @if($usagepolicy)
                                <h2>{{ $usagepolicy->title }} </h2>

                             

                                {!! $usagepolicy->descrption !!}
                                
				                    </div>

                        </div>



                    </div>


                    <div class="gallery col-12 col-md-6">
                         <a href="../uploads/usagepolicy/{{ $usagepolicy->image  }}">
                            <img src="../uploads/usagepolicy/{{ $usagepolicy->image  }}" class="image-fit">
                        </a>
                        @endif
                    </div>

                </div>
						<div class="row item">

                            <div class="col-12 align-self-center" align="center">

                                <h4> كونوا على تواصل معنا</h4>

                                <ul class="navbar-nav social share-list">


                                    <li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>

                                    </li>
									<li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-youtube"></i></a>

                                    </li>
									<li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>

                                    </li>
									<li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-soundcloud"></i></a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>

                                    </li>

                                </ul>

                            </div>

                        </div>     

            </div>

        </section>


@endsection