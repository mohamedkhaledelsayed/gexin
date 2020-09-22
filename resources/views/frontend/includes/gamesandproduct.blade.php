<div class="swiper-container slider-mid items">
                   <h3 align="right">منتجات ذات صلة</h3>
                    <div class="swiper-wrapper">
                    @foreach($games as $game)    
                        <div class="swiper-slide slide-center item">
                            <div class="card p-0 text-center">
                                <div class="col-12 p-0">
                                    <div class="image-over">
                                        <img src="../../../uploads/games/{{$game->image}}" alt="">
                                    </div>
                                    <div class="p-2 text-warning">
									<h5 class="font-weight-bold">{{$game->title}}</h5>
									<p>EGP {{$game->price}}</p>
									</div>
                                </div>
                            </div>
                        </div>
                     @endforeach  
					</div>
                    <div class="swiper-pagination"></div>
                </div><br><br>
                
                
                   <div class="swiper-container slider-mid items">
                   <h3 align="right">أخبار ذات صلة</h3>
                    <div class="swiper-wrapper">
                    @foreach($latestnews as $new)
                        <div class="swiper-slide slide-center item">
                            <div class="card p-0 text-center">
                                <div class="col-12 p-0">
                                    <div class="">
                                        <img src="../../uploads/latestnews/{{$new->image}}" alt="">
                                    </div>
                                    <div class="p-2 text-warning">
									<h5 class="font-weight-bold">{{$new->title}}</h5>
									</div>
                                </div>
                            </div>
                        </div>
                   @endforeach   
					</div>
                    <div class="swiper-pagination"></div>
                </div>