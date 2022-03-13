@extends('layouts.base')


@section('content')
<div class="sportsmagazine-subheader">
    <span class="subheader-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Region News</h1>
            </div>
        </div>
    </div>
</div>
<!--// SubHeader \\-->

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section sportsmagazine-shop-listfull">
        <div class="container">
            <div class="row">
                
                <div class="col-md-9">
                    <div class="sportsmagazine-shop sportsmagazine-shop-list">
                        <ul class="row">
                            <li class="col-md-12">
                                <figure>
                                    <a href="shop-detail.html"><img src="{{asset('assets/extra-images/latest-blog-2.jpg')}}" alt=""></a>
                                </figure>
                                <div class="sportsmagazine-shop-list-text">
                                    <h4><a href="shop-detail.html">Sundown Sneakers</a></h4>
                                    <span class="sportsmagazine-price-cartbox">
                                        <small>Published:</small>
                                        <time datetime="2022-02-14 20:00"> <i class="fa fa-clock-o" aria-hidden="true"></i> August 23rd, 2016</time>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. bitur lacinia diam tempus tempor consectetur.Ut ac malesuada ante. bitur lacinia diam tempus tempor </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--// Pagination \\-->
                    <div class="sportsmagazine-pagination">
                      <ul class="page-numbers">
                         <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                         <li><span class="page-numbers current">1</span></li>
                         <li><a class="page-numbers" href="404.html">2</a></li>
                         <li><a class="page-numbers" href="404.html">3</a></li>
                         <li><a class="page-numbers" href="404.html">4</a></li>
                         <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                      </ul>
                    </div>
                    <!--// Pagination \\-->
                </div>

                <!--// SideBar \\-->
                <aside class="col-md-3">

                    
                    <!--// Widget Popular Post \\-->
                    <div class="sportsmagazine-widget-heading"><h2>Related Posts</h2></div>
                    <div class="widget widget_popular_post">
                        <ul>
                            <li>
                                <div class="sportsmagazine-popular-post">
                                    <figure><a href="blog-detail.html"><img src="{{asset('assets/extra-images/widget-popular-pos')}}t1.jpg" alt=""></a></figure>
                                    <div class="sportsmagazine-popular-post-text">
                                        <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                        <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                    </div>
                                    <span></span>
                                </div>
                            </li>
                            <li>
                                <div class="sportsmagazine-popular-post">
                                    <figure><a href="blog-detail.html"><img src="{{asset('assets/extra-images/widget-popular-pos')}}t2.jpg" alt=""></a></figure>
                                    <div class="sportsmagazine-popular-post-text">
                                        <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                        <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                    </div>
                                    <span></span>
                                </div>
                            </li>
                            <li>
                                <div class="sportsmagazine-popular-post">
                                    <figure><a href="blog-detail.html"><img src="{{asset('assets/extra-images/widget-popular-pos')}}t3.jpg" alt=""></a></figure>
                                    <div class="sportsmagazine-popular-post-text">
                                        <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                        <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                    </div>
                                    <span></span>
                                </div>
                            </li>
                            <li>
                                <div class="sportsmagazine-popular-post">
                                    <figure><a href="blog-detail.html"><img src="{{asset('assets/extra-images/widget-popular-pos')}}t4.jpg" alt=""></a></figure>
                                    <div class="sportsmagazine-popular-post-text">
                                        <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                        <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                    </div>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--// Widget Popular Post \\-->

                    <!--// Widget Cetagories \\-->
                    <div class="sportsmagazine-widget-heading"><h2>Cetagories</h2></div>
                    <div class="widget widget_cetagories">
                        <ul>
                            <li><a href="404.html">Championship <span>( 13 )</span></a></li>
                            <li><a href="404.html">Super Ball <span>( 12 )</span></a></li>
                            <li><a href="404.html">Football <span>( 04 )</span></a></li>
                            <li><a href="404.html">Boxing <span>( 08 )</span></a></li>
                            <li><a href="404.html">BasketBall <span>( 13 )</span></a></li>
                        </ul>
                    </div>
                    <!--// Widget Cetagories \\-->


                </aside>
                <!--// SideBar \\-->


            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
@endsection