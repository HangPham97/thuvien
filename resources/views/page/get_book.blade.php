@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Mượn sách</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="index.html">Trang chủ</a> / <span>Mượn sách</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">

            @if (Auth::check())
                <form action="{{route('dathang2')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row" style="color: red;">@if(Session::has('thongbao'))<b>{{Session::get('thongbao')}}</b>@endif</div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Phiếu thông tin</h4>
                        <div class="space20">&nbsp;</div>
                        <div class="form-block">
                            <label>Giới tính </label>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ*</label>
                            <input type="text" id="address" name="address" placeholder="Street Address" required>
                        </div>


                        <div class="form-block">
                            <label for="phone">Điện thoại*</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>
                        <div class="form-block">
                            <label for="give_back_date">Ngày trả</label>
                            <input type="date" name="give_back_date" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head"><h5>Sách đã đăng ký mượn</h5></div>
                            <div class="your-order-body" style="padding: 0px 10px">
                                <div class="your-order-item">
                                    <div>
                                    @if(Session::has('cart'))
                                        @foreach($book_cart as $cart)
                                            <!--  one item	 -->
                                                <div class="media">
                                                    <img width="25%" src="source/assets/dest/images/{{$cart['item']['image']}}" alt="" class="pull-left">
                                                    <div class="media-body">
                                                        <p class="font-large">{{$cart['item']['name']}}</p>
                                                        <span class="color-gray your-order-info">Số lượng: {{$cart['qty']/2}}</span>
                                                    </div>
                                                </div>
                                                <!-- end one item -->
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="your-order-body">
                            </div>

                            <div class="text-center"><button type="submit" class="beta-btn primary" href="#">Mượn<i class="fa fa-chevron-right"></i></button></div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
            @else
                <form action="{{route('dathang1')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row" style="color: red;">@if(Session::has('thongbao'))<b>{{Session::get('thongbao')}}</b>@endif</div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Phiếu thông tin</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="name">Họ tên*</label>
                            <input type="text" name="name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-block">
                            <label>Giới tính </label>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

                        </div>

                        <div class="form-block">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" required placeholder="expample@gmail.com">
                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ*</label>
                            <input type="text" id="address" name="address" placeholder="Street Address" required>
                        </div>


                        <div class="form-block">
                            <label for="phone">Điện thoại*</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>
                        <div class="form-block">
                            <label for="give_back_date">Ngày trả</label>
                            <input type="date" name="give_back_date" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head"><h5>Sách đã đăng ký mượn</h5></div>
                            <div class="your-order-body" style="padding: 0px 10px">
                                <div class="your-order-item">
                                    <div>
                                    @if(Session::has('cart'))
                                        @foreach($book_cart as $cart)
                                            <!--  one item	 -->
                                                <div class="media">
                                                    <img width="25%" src="source/assets/dest/images/{{$cart['item']['image']}}" alt="" class="pull-left">
                                                    <div class="media-body">
                                                        <p class="font-large">{{$cart['item']['name']}}</p>
                                                        <span class="color-gray your-order-info">Số lượng: {{$cart['qty']/2}}</span>
                                                    </div>
                                                </div>
                                                <!-- end one item -->
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="your-order-body">
                            </div>

                            <div class="text-center"><button type="submit" class="beta-btn primary" href="#">Mượn<i class="fa fa-chevron-right"></i></button></div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
            @endif
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection