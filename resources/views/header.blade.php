<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-right auto-width-right">
                <nav class="main-menu">
                <ul class="l-inline ov">
                    @if (Auth::check())
                        <li><a style="color: black"> Chào bạn {{Auth::user()->name}}</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                <li><a href="{{ route('inform') }}">Trang cá nhân</a></li>
                            </ul>
                        </li>
                    @else
                        <li> <a style="color: black;">Đăng nhập/Đăng ký</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('register') }}">Đăng ký</a></li>
                            </li>
                        </ul>
                        </li>

                    @endif
                </ul>
                </nav>
            </div>
            <div class="pull-right auto-width-right">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href={{route('index')}}><img src="source/assets/dest/images/logohedspi2.png" width="15px">  THƯ VIỆN SỐ HEDSPI</a></li>
                    </ul>
            </div>
             <div class="pull-right auto-width-right">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href="https://www.facebook.com/Th%C6%B0-Vi%E1%BB%87n-Hedspi-195260584359643/"><img src="https://www.facebook.com/images/fb_icon_325x325.png" width="11px">  FANPAGE</a></li>
                    </ul>
            </div>
        </div>
    </div> <!-- .container -->
    <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href={{route('index')}} id="logo"><img src="source/assets/dest/images/banner2.png" width="350px" style="margin-left: 50px" alt="">
                </a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space30">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{route('search')}}">
                        <input type="text" value="" name="key" id="s" placeholder="Nhập vào tên sách ..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-book" aria-hidden="true"></i> Sách @if(Session::has('cart'))({{(session('cart')->totalQty / 2)}})@else(Trống) @endif <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="beta-dropdown cart-body">
                            @if(Session::has('cart'))
                            @foreach($book_cart as $book)
                            <div class="cart-item">
                                <a class="cart-item-delete" href="{{route('delete',$book['item']['id'])}}"><i class="fa fa-times"></i></a>
                                <div class="media">
                                    <a class="pull-left" href="{{route('detail',$book)}}"}}><img src="source/assets/dest/images/{{$book['item']['image']}}" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="cart-item-title">{{$book['item']['name']}}</span>
                                        <span class="cart-item-amount"> Số lượng: {{$book['qty']/2}} </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                            <div class="cart-caption">
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{route('dathang')}}" class="beta-btn primary text-center">Mượn sách <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-body -->
    <div class="header-bottom" style="background-color: darkred; height: 55px">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('index')}}">Trang chủ</a>
                    </li>
                    <li><a>Phân loại</a>
                        <ul class="sub-menu">
                            @foreach($cate as $cate_book)
                            <li><a href="{{route('category',$cate_book->id)}}">{{$cate_book->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">Giới thiệu</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-bottom -->
</div>
<!-- #header -->