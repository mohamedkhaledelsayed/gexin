    <!-- Author -->
    <div class="row item" dir="ltr">
                            <div class="col-12 align-self-center text-right" align="right">
                        @if($sidebar->BestsellerGame ==1)        
                                <h4>الأفضل مبيعاً</h4>
                       <div class="col-12 col-md-12 col-lg-12 item">
                        <div class="card">
                            <div class="row">
                                <a href="assets/images/work-1.jpg">
                                    <img src="assets/images/psn-card-home.jpg" alt="Imaginary Art">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($sidebar->CategoryGame ==1) 
                    @foreach($categories as $category)
                                <h4>{{$category->title}}</h4>
                             <div class="row">
								<div class="col-6 col-md-6 card">
									<img src="../../../uploads/category/{{$category->homeimage}}">
								</div>
								
							</div><br>
                    @endforeach     
                      
                @endif
                @if($sidebar->BestsellerProduct ==1)
                    <h4>الأفضل مبيعاً</h4>
                    <div class="row">
                    @foreach($productsbestseller as $productbestseller)

					<div class="col-6 col-md-6 card">
						<img src="../../../uploads/product/{{$productbestseller->image}}">
						<div class="priceonimg">
							<h5 class="font-weight-bold">{{$productbestseller->title}}</h5>
							<p>EGP {{$productbestseller->price}}</p>
						</div>
					</div>
				@endforeach
                </div><br>
                @endif

                        <!-- Most Viwed -->
                        <div class="row item" dir="ltr">
                            <div class="col-12 align-self-center text-right" align="right">
                            @if($sidebar->LastNews ==1)    
                                <h4>أحدث الأخبار</h4>
                                <ul class="list-group list-group-flush">
                                @foreach($latestnews as $latestnew)    
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#"><img src="../../../uploads/latestnews/{{ $latestnew->image }}" alt=""></a>
                                        {{ $latestnew->title }}
                                    </li>
                                @endforeach    
                                    
                                    </ul>
                            </div>
                            @endif
                        </div> 
                            </div>
                        </div>
                     <!-- Categories -->
                        <div class="row item">
                            <div class="col-12 align-self-center" align="right">
                            @if($sidebar->categories ==1)   
                                <h4>اقسام الموقع</h4>
                                <ul class="list-group list-group-flush">
                                @foreach($categories as $category)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">{{$category->title}}</a>
                                        <span class="badge circle">{{$category->Gamescount()}}</span>
                                    </li>
                                @endforeach
                                @foreach($categoriesproduct as $categoryproduct)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">{{$categoryproduct->title}}</a>
                                        <span class="badge circle">{{$categoryproduct->productcount()}}</span>
                                    </li>
                                @endforeach
                                </ul>
                            @endif  
                            </div>
                        </div>
                            