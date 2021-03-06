@extends('templates.home.master')
@section('title') Tin tức @endsection
@section('src-home')
    <link rel="stylesheet" type="text/css" href="{{ asset('home/styles/categories.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/styles/categories_responsive.css') }}">
@endsection
@section('content-home')

    <!-- Social -->
    <div class="header_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    </header>

    <!-- Menu -->

    <div class="menu menu_mm trans_300">
        <div class="menu_container menu_mm">
            <div class="page_menu_content">

                <div class="page_menu_search menu_mm">
                    <form action="#">
                        <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                    </form>
                </div>
                <ul class="page_menu_nav menu_mm">
                    <li class="page_menu_item has-children menu_mm">
                        <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                        <ul class="page_menu_selection menu_mm">
                            <li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="page_menu_item has-children menu_mm">
                        <a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
                        <ul class="page_menu_selection menu_mm">
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{ asset('home/images/abc.jpg') }})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Tin tức</div>
                              
                            
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products -->
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">


   <!-- Product Sorting -->
   <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Tổng <span>{{count($news)}}</span> tin tức </div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                   
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>title</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        @foreach($news as $key => $value)
                            <div class="product">
                                <div class="product_image"><img src="{{ asset("storage/news_thumbnail/$value->thumbnail") }}" alt=""></div>
                                <div class="product_content">
                                    <div class="product_title">
                                        <a href="{{route('home.page.newDetail', $value->id)}}">
                                            {{$value->title}}
                                        </a>
                                    </div>
{{--                                    <div class="product_price">{{number_format($value->price)}} đ</div>--}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row icon_box_row">

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        
                        <div class="icon_box_title">GIỚI THIỆU </div>
                        <div class="icon_box_text">
                            <p>Ra đời từ năm 2020, chỉ từ một cửa hàng thời trang nhỏ, đến nay THE MERRY đã không ngừng phát triển và trở thành một hệ thống cửa hàng chuyên kinh doanh thời trang trẻ, là một trong những thương hiệu thời trang hàng đầu tại Đà Nẵng....</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                       
                        <div class="icon_box_title">GIAO HÀNG TẬN NHÀ</div>
                        <div class="icon_box_text">
                            <p>Liên doanh với các hãng vận chuyển hàng đầu, THE MERRY hỗ trợ dịch vụ giao hàng tận nơi trên tất cả tỉnh thành. Ngoài ra, khách hàng cũng có thể chọn vẩn chuyển tốc hành, giao hàng theo ngày yêu cầu. </p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        
                        <div class="icon_box_title">LIÊN HỆ</div>
                        <div class="icon_box_text">
                            <p>Trụ sở: K118/19 Mai Lão Bạng, Hải Châu, Đà Nẵng</p>
                            <p>Email: shopthemerry.vn@gmail.com</p>
                            <p>Số điện thoại: 0905540706 </p>
                                                   </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('src-footer')
    <script src="{{ asset('home/js/categories.js') }}"></script>
@endsection
