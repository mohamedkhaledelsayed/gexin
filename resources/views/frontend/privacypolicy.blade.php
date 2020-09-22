@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content')
@include('frontend.includes.bannerpages')
<section id="blog" class="single">

            <div class="container">

                <div class="row content" dir="rtl" align="center">

                    <main class="col-12 col-lg-12 p-0">



                        <!-- صفحة صفقات خاصة -->

                        <div class="row">

                            <div class="col-12 align-self-center">
                            @if($privacypolices)
                                <h2>{{$privacypolices->title}}</h2>
                                {!! $privacypolices->description !!}
                                
                            @endif   
                            </div>

                        </div>

                     </main>

                </div>

            </div>

        </section>
@endsection        