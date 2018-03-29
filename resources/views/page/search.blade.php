@extends('master')
@section('content')
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($book)}} mẫu</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($book as $bk)
                                    <div class="col-sm-3" style="margin-bottom: 20px">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href={{route('detail',$bk)}}><img src="source/assets/dest/images/{{$bk->image}}" alt="" width = 150px; height = 200px;></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$bk->name}}</p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('borrow',$bk->id)}}"><i class="fa fa-book"></i></a>
                                                <a class="beta-btn primary" href="{{route('detail',$bk)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div> <!-- .beta-products-list -->


                            <div class="space50">&nbsp;</div>
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
@endsection