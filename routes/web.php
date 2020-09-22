<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('delegate', function () {
    return view('backend.delegate.delegatedashbord');
});

Route::get('chat', function () {
    $users =App\User::all();
    return view('frontend.chat',compact('users'));
});

Route::get('login/{provider}', 'Auth\SocialController@redirectToProvider')->name('social.login');
Route::get('login/{provider}/callback', 'Auth\SocialController@handleProviderCallback');
Route::namespace('Backend')->prefix('backend')->group(function () {
    Route::get('/', 'DashboardController@index')->name('backend.dashbord');
    Route::get('/profile', 'AuthController@getProfile')->name('backend.profile');
    Route::post('/profile/save', 'AuthController@postProfile')->name('backend.profile.post');
    Route::get('/login','AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashbord');
    Route::get('/changePassword','PasswordController@changePasswordForm')->name('changePasswordForm');
    Route::post('/changePassword','PasswordController@changePassword')->name('changePassword');
    Route::get('/setting/{id}/edit','SettingController@setting')->name('setting.edit');
    Route::PUT('/setting/{id}/update','SettingController@settingstatus')->name('setting.update');

    /*=====================================videopage============================*/
    Route::get('sliderspage', 'SliderController@index')->name('slider');
    Route::get('slider/{id}','SliderController@edit')->name('slider.edit');
    Route::PUT('slider/{id}/update','SliderController@update')->name('slider.update');
    Route::get('slider', 'SliderController@sliderpage')->name('sliderpage');
    Route::post('sliderpage/store', 'SliderController@sliderstore')->name('sliderpage.store');
    Route::delete('sliderpage/{id}/delete', 'SliderController@destroy')->name('slider.destroy');

    /*=====================================videopage============================*/
    Route::get('videopage', 'VideosController@index')->name('video');
    Route::get('video/{id}','VideosController@edit')->name('video.edit');
    Route::PUT('video/{id}/update','VideosController@update')->name('video.update');
    Route::get('videopagecreate', 'VideosController@videopage')->name('videopage');
    Route::post('videopage/store', 'VideosController@videosstore')->name('videopage.store');
    Route::delete('videopage/{id}/delete', 'VideosController@destroy')->name('videopage.destroy');

    /*=====================================paymentgatewayspage============================*/
    Route::get('paymentgatewayspage', 'PaymentGateWaysController@index')->name('paymentgateway');
    Route::get('paymentgateway/{id}','PaymentGateWaysController@edit')->name('paymentgateway.edit');
    Route::PUT('paymentgateway/{id}/update','PaymentGateWaysController@update')->name('paymentgateway.update');
    Route::get('paymentgatewaypage', 'PaymentGateWaysController@paymentgateway')->name('paymentgatewaypage');
    Route::post('paymentgatewaypage/store', 'PaymentGateWaysController@paymentgatewaystore')->name('paymentgatewaypage.store');
    Route::delete('paymentgatewaypage/{id}/delete', 'PaymentGateWaysController@destroy')->name('latestnews.destroy');

    /*=====================================latestnewspage============================*/
    Route::get('latestnewspage', 'LatestNewsController@index')->name('latestnewspage');
    Route::get('latestnews/{id}','LatestNewsController@edit')->name('latestnews.edit');
    Route::PUT('latestnews/{id}/update','LatestNewsController@update')->name('latestnews.update');
    Route::get('latestnews', 'LatestNewsController@latestnews')->name('latestnews');
    Route::post('latestnews/store', 'LatestNewsController@latestnewstore')->name('latestnewspage.store');
    Route::delete('latestnewspage/{id}/delete', 'LatestNewsController@destroy')->name('latestnews.destroy');

    /*=====================================blogdetailspage============================*/
    Route::get('blogdetailspage', 'BlogDetailsController@index')->name('blogdetailspage');
    Route::get('blogdetails/{id}','BlogDetailsController@edit')->name('blogdetails.edit');
    Route::PUT('blogdetails/{id}/update','BlogDetailsController@update')->name('blogdetails.update');
    Route::get('blogdetails', 'BlogDetailsController@blogdetails')->name('blogdetails');
    Route::post('blogdetails/store', 'BlogDetailsController@blogdetailstore')->name('blogdetailspage.store');
    Route::delete('blogdetailspage/{id}/delete', 'BlogDetailsController@destroy')->name('blogdetails.destroy');
    /*=====================================privacypolicypage============================*/
    Route::get('privacypolicypage', 'PrivacyPolicyController@index')->name('privacypolicypage');
    Route::get('privacypolicy/{id}','PrivacyPolicyController@edit')->name('privacypolicy.edit');
    Route::PUT('privacypolicy/{id}/update','PrivacyPolicyController@update')->name('privacypolicy.update');
    Route::get('privacypolicy', 'PrivacyPolicyController@privacypolices')->name('privacypolicy');
    Route::post('privacypolicy/store', 'PrivacyPolicyController@privacypolicestore')->name('privacypolicypage.store');
    Route::delete('privacypolicypage/{id}/delete', 'PrivacyPolicyController@destroy')->name('privacypolicy.destroy');
   /*=====================================usagepolicypage============================*/
   Route::get('usagepolicypage', 'UsagePolicyController@index')->name('usagepolicypage');
   Route::get('usagepolicy/{id}','UsagePolicyController@edit')->name('usagepolicy.edit');
   Route::PUT('usagepolicy/{id}/update','UsagePolicyController@update')->name('usagepolicy.update');
   Route::get('usagepolicy', 'UsagePolicyController@usagepolicy')->name('usagepolicy');
   Route::post('usagepolicy/store', 'UsagePolicyController@usagepolicystore')->name('usagepolicypage.store');
   Route::delete('usagepolicypage/{id}/delete', 'UsagePolicyController@destroy')->name('usagepolicy.destroy');
   /*=====================================AboutUspage============================*/
   Route::get('aboutuspage', 'AboutUsController@index')->name('aboutuspage');
   Route::get('aboutus/{id}','AboutUsController@edit')->name('aboutus.edit');
   Route::PUT('aboutus/{id}/update','AboutUsController@update')->name('aboutus.update');
   Route::get('aboutus', 'AboutUsController@aboutus')->name('aboutus');
   Route::post('aboutus/store', 'AboutUsController@aboutusstore')->name('aboutuspage.store');
   Route::delete('aboutuspage/{id}/delete', 'AboutUsController@destroy')->name('aboutus.destroy');
   /*=====================================categoriespage============================*/
   Route::get('categories', 'CategoryController@index')->name('categories');
   Route::get('categories/{id}','CategoryController@edit')->name('categoriespage.edit');
   Route::PUT('categories/{id}/update','CategoryController@update')->name('categoriespage.update');
   Route::get('categoriespage', 'CategoryController@category')->name('categoriespage');
   Route::get('categories/{id}/show', 'CategoryController@show')->name('categorypageshow.show');
   Route::post('categories/store', 'CategoryController@categorystore')->name('categoriespage.store');
   Route::delete('categoriespage/{id}/delete', 'CategoryController@destroy')->name('category.destroy');
   /*=====================================Gamespage============================*/
   Route::get('game', 'GamesController@index')->name('gamepage');
   Route::get('game/{id}','GamesController@edit')->name('game.edit');
   Route::PUT('game/{id}/update','GamesController@update')->name('game.update');
   Route::get('gamepage', 'GamesController@game')->name('game');
   Route::post('game/store', 'GamesController@gamestore')->name('gamepage.store');
   Route::delete('gamepage/{id}/delete', 'GamesController@destroy')->name('game.destroy');
   Route::get('gamepageshow/{id}', 'GamesController@show')->name('game.show');

   /*=====================================Gamespage============================*/
   Route::get('categoriesproduct', 'CategoryProductController@index')->name('categoriesproduct');
   Route::get('categoriesproduct/{id}','CategoryProductController@edit')->name('categoriesproductpage.edit');
   Route::PUT('categoriesproduct/{id}/update','CategoryProductController@update')->name('categoriesproductpage.update');
   Route::get('categoriesproductpage', 'CategoryProductController@categoryproduct')->name('categoriesproductpage');
   Route::post('categoriesproduct/store', 'CategoryProductController@categoriesproductstore')->name('categoriesproductpage.store');
   Route::delete('categoryproduct/{id}/delete', 'CategoryProductController@destroy')->name('categoryproduct.destroy');
   /*=====================================productspage============================*/
   Route::get('products', 'ProductController@index')->name('products');
   Route::get('products/{id}','ProductController@edit')->name('product.edit');
   Route::PUT('products/{id}/update','ProductController@update')->name('productpage.update');
   Route::get('productpage', 'ProductController@product')->name('productpage');
   Route::post('products/store', 'ProductController@productstore')->name('productpage.store');
   Route::delete('productspage/{id}/delete', 'ProductController@destroy')->name('product.destroy');
   /*=====================================Gamespage============================*/
   Route::get('instructions', 'InstructionsController@index')->name('instructions');
   Route::get('instructions/{id}','InstructionsController@edit')->name('instructionspage.edit');
   Route::PUT('instructions/{id}/update','InstructionsController@update')->name('instructionspage.update');
   Route::get('instructionspage', 'InstructionsController@instructions')->name('instructionspage');
   Route::post('instructions/store', 'InstructionsController@instructionstore')->name('instructionspage.store');
   Route::delete('instructionspage/{id}/delete', 'InstructionsController@destroy')->name('instructions.destroy');

});


Route::namespace('frontend')->prefix('frontend')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/news', 'PagesController@news')->name('news');
    Route::get('/videos', 'PagesController@videos')->name('videos');
    Route::get('/blogdetails/{id}', 'PagesController@newshow')->name('blogdetails');
    Route::get('/aboutus', 'PagesController@aboutus')->name('aboutus');
    Route::get('/usagepolicy', 'PagesController@usagepolicy')->name('usagepolicy');
    Route::get('/privacypolicy', 'PagesController@privacypolicy')->name('privacypolicy');
    Route::get('categories/{id}/show', 'HomeController@category')->name('categoryshow.show');
    Route::get('gamesone', 'PagesController@designonegames')->name('gamesone');
    Route::get('gamestwo', 'PagesController@designtwogames')->name('gamestwo');
    Route::get('gamesthree', 'PagesController@designthreegames')->name('gamesthree');
    Route::get('gameshow/{id}', 'PagesController@gameshow')->name('gameshow');

});




Auth::routes();



