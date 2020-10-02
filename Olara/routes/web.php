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
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */

//Route::get('/','cproductcontroller@getIndex'); 

/*Route::get('/', [
    'uses'=>'cproductcontroller@getIndex',
    'as' => 'cproduct.index'
]);*/
/*Route::get('index',[
    'uses' => 'cproductcontroller@getindex',
    'as' => 'cproduct.index'
    ]);*/


  /*  Route::get('/add-to-cart/{cproduct}/add','cproductcontroller@getAddToCart');
    Route::get('/add-to-cart/{cproduct}/view/add','cproductcontroller@getAddToCartFromView');
    Route::get('/add-to-cart/{cproduct}/view','cproductcontroller@viewItem');
    Route::get('/shopping_cart','cproductcontroller@getCart')->name('shop.shoppingCart');
    Route::post('/add-to-cart/view/bulkadd','CartController@bulkAdd')->middleware('auth');*/


    //modify to productController
    Route::get('/add-to-cart/{product}/add','ProductsController@getAddToCart');
    Route::get('/remove/cart/{product}','ProductsController@deleteCartItem');
    Route::get('/add-to-cart/{product}/view/add','ProductsController@getAddToCartFromView');
    Route::get('/add-to-cart/{product}/view','ProductsController@viewItem');
    Route::get('/shopping_cart','ProductsController@getCart')->name('shop.shoppingCart');
    Route::post('/add-to-cart/view/bulkadd','CartController@bulkAdd')->middleware('auth');


 

    


/*
Route::get('/reduce/{id}',[
    'uses' => 'cproductcontroller@getReduceByOne',
    'as' => 'cproduct.reduceByOne'
]);
   
Route::get('/remove/{id}',[
    'uses' => 'cproductcontroller@getRemoveItem',
    'as' => 'cproduct.remove'
]);

    Route::get('/checkout',[
        'uses' => 'cproductcontroller@getCheckout',
        'as' => 'checkout',
        'middleware' => 'auth'
    ]);
   // Route::get('/','cproductcontroller@getCheckout');

    Route::post('/checkout',[
        'uses' => 'cproductcontroller@postCheckout',
        'as' => 'checkout' ,
        'middleware' => 'auth'
    ]);*/



    //modify to product controller


    Route::get('/reduce/{id}',[
        'uses' => 'ProductsControllerer@getReduceByOne',      
        'as' => 'product.reduceByOne'
    ]);
       
    Route::get('/remove/{id}',[
        'uses' => 'ProductsController@getRemoveItem',
        'as' => 'product.remove'
    ]);
    
        Route::get('/checkout',[
            'uses' => 'ProductsController@getCheckout',
            'as' => 'checkout',
            'middleware' => 'auth'
        ]);
       // Route::get('/','cproductcontroller@getCheckout');
    
        Route::post('/checkout',[
            'uses' => 'ProductsController@postCheckout',
            'as' => 'checkout' ,
            'middleware' => 'auth'
        ]);







   // Route::get('/','cproductcontroller@postCheckout');

Route::group(['prefix' => 'user'],function(){
    Route::group(['middleware' => 'guest'],function(){
        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
    
        ]);
        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);
        
        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);
        
        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });
    Route::group(['middleware' => 'auth'],function(){
        Route::get('/profile',[
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
            ]);
        });
    });
    
               
/* Route::get('/','UserController@getSignup');

Route::get('/','UserController@postSignup'); */

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/reduce/{item}', 'cproductcontroller@getReduceByOne');
Route::get('/remove/{item}', 'cproductcontroller@getRemoveItem');


Route::get('/h', 'addDesignController@create');
Route::post('/hi', 'addDesignController@store');






//Route::get('/admin','AdminController@login');
Route::match(['get', 'post'],'/admin','AdminController@login');
//logout
Route::get('/logout', 'AdminController@logout');


Route::get('/admin/dashboard', 'AdminController@dashboard');




Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
// Route::get('/admin/add-category','CategoryController@addCategory');


//Route::get('/admin/view-categories','CategoryController@viewCategories');

//link route for side bar
Route::get('/admin/view-categories', ['as' => 'view','uses'=>'CategoryController@viewCategories']);
Route::get('/admin/add-category', ['as' => 'add','uses'=>'CategoryController@addCategory']);

Route::get('/admin/add-product', ['as' => 'add','uses'=>'ProductsController@addProduct']);
Route::get('/admin/view-products', ['as' => 'add','uses'=>'ProductsController@viewProducts']);



//route for edit category
Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
//route for delete category
Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');




//products
//route for add products
Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
//routs for view products
Route::get('/admin/view-products','ProductsController@viewProducts');
//route for edit products
Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
//route for delete products image
Route::get('/admin/delete-product-image/{id}','ProductsController@deleteProductImage');
//route for delete full product
Route::match(['get','post'],'/admin/delete-product/{id}','ProductsController@deleteProduct');


//advertistments
//route for add adds
Route::match(['get','post'],'/admin/add-adds','AddvertismentController@addAdds');
//routs for view adds
Route::get('/admin/view-adds','AddvertismentController@viewAdds');
//route for edit products
Route::match(['get','post'],'/admin/edit-adds/{id}','AddvertismentController@editAdds');
//route for delete products image
Route::get('/admin/delete-add-image/{id}','AddvertismentController@deleteAddImage');
//route for delete All advertisment detsils
Route::match(['get','post'],'/admin/delete-add/{id}','AddvertismentController@deleteAdd');



//Sales 
//route for add sales
Route::match(['get','post'],'/admin/add-sales','SaleController@addSales');
//routs for view sales
Route::get('/admin/view-sales','SaleController@viewSales');
//routes for edit sales
//route for edit products
Route::match(['get','post'],'/admin/edit-sales/{id}','SaleController@editSales');
//route for delete sales image
Route::get('/admin/delete-sales-image/{id}','SaleController@deleteSalesImage');
//route for delete All sales detsils
Route::match(['get','post'],'/admin/delete-sale/{id}','SaleController@deleteSale');


//view payment details
//routs for view sales
Route::get('/admin/view-payments','PaymentController@viewPaymentDetails');


//view cobtact details
Route::get('/admin/view-contacts','ContactController@viewContacts');

//order details
//view order details old
Route::get('/admin/view-Orders','OrderController@viewOrderDetails');

//view order details new
Route::get('/admin/view-Orders','CartController@viewOrderDetailsNew');

//view customer details
Route::get('/admin/view-Customers','UserController@viewOCustomerDetailsNew');

//view customer details
Route::get('/admin/view-Design','AddDesignController@viewDesignDetails');


//route for view product details in home page extra one
Route::get('/admin/view-H','ProductsController@viewHomeDeco');





//route for view product details in home page extra one
Route::get('/index','ProductsController@viewindex');

//route for rating
Route::get('posts', 'HomeController@posts')->name('posts');

Route::post('posts', 'HomeController@postPost')->name('posts.post'); 

Route::get('posts/{id}', 'HomeController@show')->name('posts.show');



//route for search 02
Route::get('/search','ProductsController@search')->name('search');




Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/paypal', function () {
    return view('paypal');
});



//sales email
Route::get('/email', 'MailController@home');
Route::post('send/email', 'MailController@sendemail');

// view profile details
Route::get('profile', 'UserController@profile');

//viw payment history
Route::get('payment', 'PaymentController@index');






//add comment discussion forum

Route::get('/comment', 'CommentController@index')->name('comment');

Route::resource('/comments','CommentController');
Route::resource('/replies','ReplieController');
Route::post('/replies/ajaxDelete','ReplieController@ajaxDelete');

//view comment details
Route::get('/viewcomment','viewcommentController@viewcomment');



//contacus

Route::get('/contact-us', 'ContactController@index');
Route::post('/create', 'ContactController@store');


//one mail
Route::get('/onemail', 'onemailController@index');
Route::post('/onesend/email', 'onemailController@onesendemail');





