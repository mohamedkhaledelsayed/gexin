@extends('frontend.layouts.site') 
@section('title','GEXIN') 
@section('content')
@include('frontend.includes.bannerpages')
<section id="blog" class="showcase blog-grid">

            <div class="container">

                <div class="row text-center intro">

                    <div class="col-12">

                        <h2>الأخبار</h2>

                        <p class="text-max-800">هنا صفحة عرض الاخبار</p>

                    </div>

                </div>



                <!-- Blog Grid -->

           

                   

                <div class="row">
                @foreach($news as $new)  
					<div class="col-6 col-md-3">
						 <div class="card p-0 text-center">
                         
                                <div class="col-12 p-0">
                                    <div class="image">
                                    <a href="{{route('blogdetails',$new->id)}}">   <img src="../uploads/latestnews/{{$new->image}}" alt="Lorem ipsum">  </a>
                                    </div>
                                    <div class="p-2 text-warning">
											<h4>{{$new->title}}</h4>
                                            <p>{{mb_substr($new->description,0,70,'utf-8')}}</p>
                                        
									</div>
                                </div>
                              
                            </div>
                    </div>
                @endforeach    
			
                </div>

                 

             



                <!-- Pagination -->

                <div class="row">

                    <div class="col-12">

                        <nav>

                            <ul class="pagination m-auto justify-content-center">

                              
                           {{$news->links()}}
  


                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </section>
@endsection