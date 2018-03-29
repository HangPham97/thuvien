@extends('master')
@section('content')
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
            <div class="banner" >
                <ul>
                    <!-- THE FIRST SLIDE -->
                    @foreach($slide as $sl)
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; height: 100%; opacity: 1; visibility: inherit; margin-left: auto; margin-right: auto;">
                            </div>
                        </div>

                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Tất cả các sách</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($book)}} mẫu</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($book as $bk)
                            <div class="col-sm-3" style="margin-bottom: 20px">
                                <div class="single-item">
                                    <div class="single-item-header" >
                                        <a href={{route('detail',$bk)}}><img src="source/assets/dest/images/{{$bk->image}}" alt="" width = 150px; height = 200px; style="border: 1px solid gray;"></a>
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