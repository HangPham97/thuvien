@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Sách {{$book->name}}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href={{route('index')}}>Trang chủ</a> / <span>Thông tin chi tiết</span>
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
                        <div class="col-sm-4">
                            <img src="source/assets/dest/images/{{$book->image}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">Tên sách: {{$book->name}}</p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>Tác giả: {{$book->author}}</p><br>
                                <p>Số lượng: {{$book->number}}</p><br>
                            </div>
                                <a class="add-to-cart" href="{{route('borrow',$book->id)}}"><i class="fa fa-book"></i> Mượn</a>
                                <div class="clearfix"></div>
                    </div> <!-- best sellers widget -->
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection