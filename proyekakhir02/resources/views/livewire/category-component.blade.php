<main id="main" class="main-site left-sidebar">
<div class="container">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Kategori Produk</span></li>
            <li class="item-link"><span>{{$category_name}}</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="banner-shop">
                <a href="#" class="banner-link">
                    <figure><img src="{{ asset('assets/images/shop-banner.jpg') }}" alt=""></figure>
                </a>
            </div>
            <div class="wrap-shop-control">
                <h1 class="shop-title">{{$category_name}}</h1>
                <div class="wrap-right">
                    <div class="sort-item orderby ">
                        <select name="orderby" class="use-chosen" wire:model="sorting">
                            <option value="default" selected="selected">Urutkan</option>
                            <option value="date">Terbaru</option>
                            <option value="price">Harga: Rendah ke Tinggi</option>
                            <option value="price-desc">Harga: Tinggi ke Rendah</option>
                        </select>
                    </div>

                    <div class="sort-item product-per-page">
                        <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                            <option value="12" selected="selected">12 per halaman</option>
                            <option value="16">16 per halaman</option>
                            <option value="18">18 per halaman</option>
                            <option value="21">21 per halaman</option>
                            <option value="24">24 per halaman</option>
                            <option value="30">30 per halaman</option>
                            <option value="32">32 per halaman</option>
                        </select>
                    </div>

                    <div class="change-display-mode">
                        <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                    </div>
                </div>
            </div><!--end wrap shop control-->
            <div class="row">
                <ul class="product-list grid-products equal-container">
                    @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">Rp.{{$product->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="wrap-pagination-info">
                {{$products->links()}}
                <!-- <ul class="page-numbers">
                    <li><span class="page-number-item current" >1</span></li>
                    <li><a class="page-number-item" href="#" >2</a></li>
                    <li><a class="page-number-item" href="#" >3</a></li>
                    <li><a class="page-number-item next-link" href="#" >Next</a></li>
                </ul>
                <p class="result-count">Showing 1-8 of 12 result</p> -->
            </div> 
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">Semua Kategori</h2>
                <div class="widget-content">
                    <ul class="list-category">
                        @foreach ($categories as $category)
                        <li class="category-item">
                            <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
                        </li>
                        @endforeach                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</main>