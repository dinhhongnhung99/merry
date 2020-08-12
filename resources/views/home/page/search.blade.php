@extends('templates.home.master')
@section('title') Tìm kiếm @endsection
@section('src-home')
    <link rel="stylesheet" type="text/css" href="{{ asset('home/styles/categories.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/styles/categories_responsive.css') }}">
@endsection
@section('content-home')
    
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">
                <ul> Kết quả tìm kiếm: <strong>{{ $keyword }}</strong></ul>
                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Tổng <span>{{ count($data) }}</span> sản phẩm</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
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
                        @foreach ($data as $item)
                            <div class="product">
                                <div class="product_image">
                                    <img src="{{ $item->getImg() }}" alt="">
                                </div>
                                <div class="product_extra product_new"><a href="">New</a></div>
                                {{--<div class="product_extra product_sale"></div>--}}
                                <div class="product_content">
                                    <div class="product_title">
                                        {{ $item->name }}
                                    </div>
                                    <div class="product_price">Giá: {{ $item->getPrice() }} đ</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
        
   
        @endsection
        @section('src-footer')
            <script src="{{ asset('home/js/categories.js') }}"></script>
        @endsection
