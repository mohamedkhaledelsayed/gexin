@extends('frontend.layouts.site') @section('title','GEXIN') @section('content') @include('frontend.includes.bannerpages')

<section id="blog" class="showcase blog-grid">

    <div class="container">

        <div class="row text-center intro">

            <div class="col-12">

                <h2>الفيديوهات</h2>

                <p class="text-max-800">هنا صفحة عرض الفيديوهات</p>

            </div>

        </div>


        <div class="row">
            @foreach($videos as $video)
            <div class="col-6 col-md-3">
                <div class="row card p-0 text-center">
                    <a data-poster="" href="{{ $video->link }}">
                        <i class="play-video icon-control-play"></i>
                        <div class="mask-radius"></div>
                        <img src="../uploads/video/{{ $video->image }}" class="image-fit">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>




    <!-- Pagination -->

    <div class="row">

        <div class="col-12">

            <nav>

                <ul class="pagination m-auto justify-content-center">


                    <li> {{$videos->links()}}</li>



                </ul>

            </nav>

        </div>

    </div>
</section>
@endsection