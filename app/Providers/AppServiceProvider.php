<?php

namespace App\Providers;
use App\Cate;
use Illuminate\Support\ServiceProvider;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
//     */
//    public function boot()
//    {
//        view()->composer('header',function($view){
//            $cate = Cate::all();
//            if(Session('cart')){
//                $oldCart = Session::get('cart');
//                $cart = new Cart($oldCart);
//            }
//            $view->with(['cate'=>$cate,'cart'=>Session::get('cart'), 'book_cart'=>$cart->items,'totalQty'=>$cart->totalQty]);
//        });
//    }

    public function boot()
    {
        view()->composer('header',function($view){
            $cate = Cate::all();

            $view->with('cate',$cate);
        });

        view()->composer(['header','page.get_book'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'book_cart'=>$cart->items,'totalQty'=>$cart->totalQty]);
            }
        });
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
