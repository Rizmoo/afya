<div>
    <section class="shop-area ptb-100">
        <div class="container">
            <div class="woocommerce-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <div class="woocommerce-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="woocommerce-topbar-ordering">
                            <select style="display: none;">
                                <option value="1">Default sorting</option>
                                <option value="2">Sort by popularity</option>
                                <option value="0">Sort by average rating</option>
                                <option value="3">Sort by latest</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Sort by new</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">Default sorting</span><ul class="list"><li data-value="1" class="option selected focus">Default sorting</li><li data-value="2" class="option">Sort by popularity</li><li data-value="0" class="option">Sort by average rating</li><li data-value="3" class="option">Sort by latest</li><li data-value="4" class="option">Sort by price: low to high</li><li data-value="5" class="option">Sort by price: high to low</li><li data-value="6" class="option">Sort by new</li></ul></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($providers as $provider)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ $provider -> photo }}" alt="image">
                                <img src="{{ $provider -> photo }}" alt="image">
                            </a>
                            <a href="#" class="add-to-cart-btn">View More <i class="flaticon-shopping-bag"></i></a>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{ route('shop.provider', $provider) }}">{{ $provider -> name }}</a></h3>
{{--                            <div class="price">--}}
{{--                                <span class="new">$8.50</span>--}}
{{--                                <span class="old">$12.50</span>--}}
{{--                            </div>--}}
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
