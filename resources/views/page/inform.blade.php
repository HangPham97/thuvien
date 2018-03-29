@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Trang cá nhân</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href={{route('index')}}>Trang chủ</a> / <span>Trang cá nhân</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title" style="font-size: 30px">Tên tài khoản: <b> {{Auth::user()->name}}</b></p>
                                <br>
                                <p class="single-item-title" style="font-size: 30px">Email: {{Auth::user()->email}}</p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>
                            <div class="space20">&nbsp;</div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><strong><a href="#tab-description">Các sách đã mượn</a></strong></li>
                        </ul>
                        @foreach($bill_detail as $book)
                            <div class="panel" id="tab-description">
                                <ul>
                                    <li><p>Tên sách:  {{$book->name}}</p>
                                        <p>Số lượng:  {{$book->quantity}}</p>
                                        <p>Ngày mượn: {{$book->created_at}}</p>
                                        <p>Ngày trả:  {{$book->give_back_date}}</p>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="space50">&nbsp;</div>
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection