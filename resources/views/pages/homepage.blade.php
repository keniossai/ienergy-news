@extends('layouts.base')

<style>
    h4:hover{
        text-decoration: underline;
    }
</style>

@section('content')
 <!-- Web Ticker -->
 <section class="top-news">
    <div class="container">
        <div class="news-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="ticker d-flex">
                        <div class="news-head">
                            <span>MOST READ<i class="fa fa-caret-right" aria-hidden="true"></i></span>
                        </div>
                        <ul id="webTicker">
                            <li><a href=""><i class="fa fa-dot-circle-o"></i>These sentences are selected from various online news.</a></li>
                            <li><a href=""><i class="fa fa-dot-circle-o"></i>This handout will help you understand how paragraphs are formed.</a></li>
                            <li><a href=""><i class="fa fa-dot-circle-o"></i>It is usually composed of several sentences that together develop one.</a></li>
                            <li><a href=""><i class="fa fa-dot-circle-o"></i>The purpose of this handout is to give some basic instruction.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Web Ticker -->


 <!-- Slider Area 3 -->
 <section class="slider-area3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 slider-fix">
                <div class="owl-slider owl-carousel">
                    <div class="slider-content">
                        <img style="height: 300px;" src="{{asset('assets')}}/img/slider-6.jpg" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <!-- <h4><a href="newsdetails">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences.</a></h4> -->
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">FASHION</li>
                                <li class="list-inline-item">March 11, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4><a href="newsdetails">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences.</a></h4>
            </div>
            <div class="col-md-3">
                <div class="slider-sidebar">
                    <img src="{{asset('assets')}}/img/sl-sidebar-3.jpg" alt="" class="img-fluid">
                    <div class="sidebar-layer">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">SPORTS</li>
                            <li class="list-inline-item">March 11, 2022</li>
                        </ul>
                    </div>
                </div>
                <h4><a href="newsdetails">This handout will help you understand how paragraphs are formed.</a></h4>
            </div>
            <div class="col-md-3 sidebar-fix2">
                <div class="slider-sidebar">
                    <img src="{{asset('assets')}}/img/sl-sidebar-5.jpg" alt="" class="img-fluid">
                    <div class="sidebar-layer">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">FASHION</li>
                            <li class="list-inline-item">March 11, 2022</li>
                        </ul>
                    </div>
                </div>
                <h4><a href="newsdetails">This handout will help you understand how paragraphs are formed.</a></h4>
            </div>
        </div>
    </div>
</section>
<!-- End Slider Area 3 -->
<section class="news-area">
    <div class="container">
        <!-- <h1 class="mt-4">POLITICS</h1> -->
        <div class="row">
            <div class="col-md-12">
                <div class="latest-news">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-3 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="" class="img-fluid">
                                        <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">Sports</li>
                                            <li class="list-inline-item">February 11, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
        
    </div>
</section>

<!-- News Area 2 -->
<section class="news-area2">
    <div class="container">
        <div class="row">
            
            <div class=" col-md-12">
                <div class="pop-news">
                    <div class="sec-title">
                        <h5>Popular News</h5>
                    </div>
                    <div class="owl-carousel popular-slider">
                        <div class="popular-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-1.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-2.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-3.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-4.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-5.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-6.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-7.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-8.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-9.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-10.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-11.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/popular-12.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="newsdetails">These sentences are selected from various online news....</a></h4>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
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
</section>
<!-- End News Area 2 -->

<!-- Video Area -->

<!-- More News Area-->
<section class="more-news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="more-news">
                    <div class="sec-title">
                        <h5>More News</h5>
                    </div>
                    <div class="more-slider owl-carousel">
                        <div class="more-item">
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-1.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Life Style</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-2.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Sports</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-3.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Health</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-4.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Fashion</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-7.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Sports</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                        </div>
                        <div class="more-item">
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-5.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Life Style</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-6.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Health</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-7.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Sports</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-8.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Opinion</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img src="{{asset('assets')}}/img/more-3.jpg" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Health</li>
                                        <li class="list-inline-item">March 11, 2022</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mv-widget">
                            <div class="sec-title">
                                <h5>Most Viewed</h5>
                            </div>
                            <div class="mv-slider owl-carousel">
                                <div class="mv-item">
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-3.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-8.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-9.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-12.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mv-item">
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-6.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-11.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-7.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-4.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="add-widget">
                            <img src="{{asset('assets')}}/img/add1.jpg" alt="" class="img-fluid">
                            <div class="add-layer text-center">
                                <p>Best Template For Your Online News</p>
                                <a href="">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tag-widget">
                            <div class="sec-title">
                                <h5>Tag List</h5>
                            </div>
                            <div class="tag-box">
                                <a href="#">News</a>
                                <a href="#">Article</a>
                                <a href="#">World</a>
                                <a href="#">Google</a>
                                <a href="#">Health</a>
                                <a href="#">Online</a>
                                <a href="#">World</a>
                                <a href="#">Food</a>
                                <a href="#">National</a>
                                <a href="#">Business</a>
                                <a href="#">Sports</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End More News Area-->


@endsection