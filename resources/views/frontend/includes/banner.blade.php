   <!-- Banner -->
   <section id="slider" class=" sectionnopadding">
            <div class="swiper-container slider-full animation mt-3">
                <div class="swiper-wrapper">
   				@foreach($sliders as $slider)
                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="../uploads/slider/{{ $slider->image }}" class="image-slider">
						<div class="col-12 slide-content container">
							<div class=" align-self-center text-center text-md-right">
								<h4 class="p-0 m-0">{{substr($slider->caption,0,70)}}</h4>
								<p data-aos-delay="300" class="pb-3"></p>
								<div class="morebottonslider">
									<a href="{{ $slider->link }}" data-aos-delay="600" class="ml-auto  mr-auto btn primary-button"><i class="icon-cup"></i>تفاصيل أكثر</a>
								</div>
							</div>
						</div>
                    </div>
   				@endforeach
     

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>