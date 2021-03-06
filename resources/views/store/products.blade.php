@extends('store.layouts.app')
@extends('store.layouts.header')
@extends('store.layouts.sidebar')
@extends('store.layouts.footer')

@section('products')
    <div class="xt-product-subpage">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <aside class="col-md-3 product-sidebar">

                    <div class="xt-side-deal">
                        <div class="">

                        </div>
                    </div>
                </aside>
                <div class="col-md-9">
                    <!--end singlw item info -->
                    <div class="xt-feature-product">
                        <div class="section-separator">
                            <div class="xt-filter-nav">

                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="xt-page-pagination">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination xt-pagination">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#" aria-label="Next"><i class="fa fa-caret-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 xt-top-hr">
                                    <hr class="xt-hr">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="xt-each-feature">
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/2.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">Sweater</span>
                                                <span class="name xt-semibold">Red Color</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Sweater</span>
                                                    <span class="name xt-semibold">Red Color</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/1.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">T-Shirt</span>
                                                <span class="name xt-semibold">2017 Model</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">T-Shirt</span>
                                                    <span class="name xt-semibold">2017 Model</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/3.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">New Look</span>
                                                <span class="name xt-semibold">2018 Model Coming Soon</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">New Look</span>
                                                    <span class="name xt-semibold">2018 Model Coming Soon</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/4.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">Lipstick</span>
                                                <span class="name xt-semibold">Imported From U.S.</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Lipstick</span>
                                                    <span class="name xt-semibold">Imported From U.S.</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/b2.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">Shirt</span>
                                                <span class="name xt-semibold">Exclusive Design</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Shirt</span>
                                                    <span class="name xt-semibold">Exclusive Design</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/b1.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">Tops</span>
                                                <span class="name xt-semibold">Spring Collection</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Tops</span>
                                                    <span class="name xt-semibold">Spring Collection</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/b1.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">Sweater</span>
                                                <span class="name xt-semibold">Red Color</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Sweater</span>
                                                    <span class="name xt-semibold">Red Color</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/1.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">T-Shirt</span>
                                                <span class="name xt-semibold">2017 Model</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">T-Shirt</span>
                                                    <span class="name xt-semibold">2017 Model</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="xt-feature">
                                        <div class="product-img">
                                            <img src="{{ asset ('images/3.jpg') }}" alt="" class="img-responsive">
                                            <span class="product-tag xt-uppercase">sale!</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <span class="category xt-uppercase">New Look</span>
                                                <span class="name xt-semibold">2018 Model Coming Soon</span>
                                            </div>
                                            <div class="price-tag pull-right">
                                                <span class="old-price"><del>$280</del></span>
                                                <span class="new-price xt-semibold">$260</span>
                                            </div>
                                            <div class="xt-featured-caption">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">New Look</span>
                                                    <span class="name xt-semibold">2018 Model Coming Soon</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="old-price"><del>$280</del></span>
                                                    <span class="new-price xt-semibold">$260</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="" class="btn btn-fill">Add to cart</a>
                                                    <ul class="reaction">
                                                        <li><a href=""><i class="fa fa-search"></i></a></li>
                                                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 xt-bottom-hr">
                                <hr class="xt-hr">
                            </div>
                            <div class="xt-filter-nav padding-bottom-60">
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <div class="xt-view">
                                        <a href="" class="active"><i class="fa fa-th-large"></i></a>
                                        <a href=""><i class="fa fa-navicon"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 xt-show-item">
                                    <label>Show: </label>
                                    <div class="xt-select xt-search-opt xt-item-view-count">
                                        <select class="xt-category-search select-beast">
                                            <option>4</option>
                                            <option>8</option>
                                            <option>12</option>
                                            <option>20</option>
                                            <option>40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group xt-shop-category col-md-4 col-sm-4 col-xs-12">
                                    <div class="xt-select xt-search-opt">
                                        <select class="xt-category-search select-beast">
                                            <option>Shirt</option>
                                            <option>Pant</option>
                                            <option>Jeans</option>
                                            <option>Jackets</option>
                                        </select>
                                    </div>
                                    <div class="xt-search-opt xt-search-btn">
                                        <button type="button" class="btn-search"><i class="fa fa-long-arrow-down"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="xt-page-pagination">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination xt-pagination">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#" aria-label="Next"><i class="fa fa-caret-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection