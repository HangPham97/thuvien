@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Giới thiệu</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index">Trang chủ</a> / <span>Giới thiệu</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">
            <div class="our-history">
                <h2 class="text-center wow fadeInDown">Về chúng tôi</h2>
                <div class="space35">&nbsp;</div>
                <div class="history-slides">
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="source/assets/dest/images/khoa.jpg" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Nguyễn Xuân Khoa</h5>
                                <p>
                                    <br />
                                    Sinh viên HEDSPI K60<br />
                                    Lớp Việt Nhật B<br />
                                    <br />
                                </p>
                                <!-- 								<div class="space20">&nbsp;</div>
                                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                                                            </div> -->
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="source/assets/dest/images/hang.jpg" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <h5 class="other-title">Phạm Thị Hằng</h5>
                                    <p>
                                        <br />
                                        Sinh viên HEDSPI K60<br />
                                        Lớp Việt Nhật A<br />
                                        <br />
                                    </p>
                                    <!-- 								<div class="space20">&nbsp;</div>
                                                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                                                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space50">&nbsp;</div>
                <hr />
                <div class="space50">&nbsp;</div>
                <h2 class="text-center wow fadeInDown">Về trang web</h2>
                <div class="space20">&nbsp;</div>
                <p class="text-center wow fadeInLeft">Được xây dựng trong quá trình làm project môn Thực hành CSDL<br /> Giải quyết vấn đề mượn sách của thư viện truyền thống </p>
                <div class="space35">&nbsp;</div>


                <div class="space50">&nbsp;</div>
                <hr />
                <div class="space50">&nbsp;</div>

                <h2 class="text-center wow fadeInDownwow fadeInDown">Cách thức hoạt động</h2>
                <div class="space20">&nbsp;</div>
                <h5 class="text-center other-title wow fadeInLeft">Trang web</h5>
                <p class="text-center wow fadeInRight">Cập nhật thông tin sách có trong thư viện truyền thống<br />Cho mượn sách online</p>
                <div class="space20">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-6 wow fadeInLeft">
                        <div class="beta-person media">

                            <img class="pull-left" src="assets/dest/images/person2.jpg" alt="">

                            <div class="media-body beta-person-body">
                                <h5>Người dùng</h5>
                                <p class="font-large"><b>Sinh viên</b></p>
                                <p>Người dùng sẽ đăng ký tài khoản trên trang web. Sau đó lựa chọn sách cần mượn và mượn sách online. Sách sẽ được giữ trong vòng 3 ngày cho sinh viên tới nhận. Sau khi dùng xong hoặc đến hạn phải trả sách, sinh viên  phải mang đến trả sách.</p>
                                <a href="/">Mượn sách ngay <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInRight">
                        <div class="beta-person media ">

                            <img class="pull-left" src="assets/dest/images/person3.jpg" alt="">

                            <div class="media-body beta-person-body">
                                <h5>Quản trị viên</h5>
                                <p class="font-large"><b>Nhân viên thư viện</b></p>
                                <p>Nhân viên thư viện cập nhật thông tin sách khi có sách mới hoặc có sự thay đổi về sách. Tiếp nhận sách sinh viên đem trả hoặc lấy sách sinh viên đã đăng ký trên web ra cho sinh viên. Cập nhật thông tin vào CSDL.</p>
                                <a href="/admin/books">Quản lý sách ngay <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space60">&nbsp;</div>
                <h5 class="text-center other-title wow fadeInDown">Sơ đồ trang web</h5>
                <p class="text-center wow fadeInUp">Mô tả các thành phần của trang web <br />Giúp người dùng dễ tiếp cận</p>
                <div class="space20">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="beta-person beta-person-full">
                            <div class="bets-img-hover">
                                <img src="assets/dest/images/person1.jpg" alt="">
                            </div>
                            <div class="beta-person-body">
                                <h5>Trang chủ</h5>
                                <p>Lưu trữ các thông tin tổng quát nhất về trang web, về các sách mới hoặc sách được mượn nhiều.</p>
                                <a href="/">Xem trang chủ <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="beta-person beta-person-full">
                            <div class="bets-img-hover">
                                <img src="assets/dest/images/person2.jpg" alt="">
                            </div>
                            <div class="beta-person-body">
                                <h5>Phân loại</h5>
                                <p>Chia sách theo từng năm và tài liệu học tiếng Nhật. Người dùng dễ dàng tìm kiếm sách theo năm học</p>
                                <a href="loaisach">Xem phân loại <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="beta-person beta-person-full">
                            <div class="bets-img-hover">
                                <img src="assets/dest/images/person3.jpg" alt="">
                            </div>
                            <div class="beta-person-body">
                                <h5>Giới thiệu</h5>
                                <p>Giới thiệu thông tin về trang web, những người tạo ra trang web và mục đích tạo ra trang web.</p>
                                <a href="/about">Xem giới thiệu <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="beta-person beta-person-full">
                            <div class="bets-img-hover">
                                <img src="assets/dest/images/person4.jpg" alt="">
                            </div>
                            <div class="beta-person-body">
                                <h5>Đăng nhập</h5>
                                <p>Người dùng có thể đăng nhập, đăng ký tài khoản hoặc kiểm tra thông tin cá nhân</p>
                                <a href="/login">Xem đăng nhập/đăng ký<i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- #content -->
        </div> <!-- .container -->
@endsection