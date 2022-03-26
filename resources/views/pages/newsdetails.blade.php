@extends('layouts.base')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-box">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                            <li class="list-inline-item">{{$post->slug}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb Area -->

    <!-- News Details Area -->
    <section class="category-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-heading">
                                <h4>{{$post->title}}</h4>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">{{$post->user->name}}</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>{{$post->created_at->format('M d, Y')}}</li>
                                    {{-- <li class="list-inline-item"><i class="fa fa-commenting-o"></i><a href="#">(09 Comments)</a></li> --}}
                                </ul>
                            </div>
                            <div class="news-content">
                                <img src="{{$post->image}}" alt="" class="img-fluid">
                                <p>{{$post->description}}</p>
                            </div>
                            {{-- <div class="news-comment">
                                <i class="fa fa-quote-right"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quam perspiciatis exdicta, quibusdam ut. Id unde recusandae esse dignissimos iure mollitia laborum aperiam? Sequi iusto delectus minus libero iusto
                                    quas.</p>
                                <span>ANDRU JAMES</span>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-5 padding-fix-r">
                                    <div class="news-img-sm">
                                        <img src="" alt="" class="img-fluid">
                                    </div>
                                </div>
                                {{-- <div class="col-md-7">
                                    <div class="news-sm-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit tempora animi esse asperiores! Quibusdam facere eaque rem doloremque, iure velit nulla quo? Harum molestias officia magnam nam eius nisi
                                            illum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium perspiciatis asperiores ullam, tempora quae doloribus, voluptas iure laborum eveniet ipsa natus aspernatur.Sit tempora animi esse
                                            asperiores! Quibusdam facere eaque rem.</p>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="news-btm-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet necessitatibus laudantium est delectus reprehenderit hic maxime, inventore repudiandae culpa quam? Ratione earum dolorum dolorem soluta aliquam
                                    possimus commodi numquam voluptatibus.</p>
                            </div> --}}
                        </div>
                        <div class="col-md-12">
                            <div class="social-tag d-flex justify-content-between">
                                <div class="social">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href="">Facebook</a></li>
                                        <li class="list-inline-item"><a href="">Twitter</a></li>
                                        <li class="list-inline-item"><a href="">Google Plus</a></li>
                                        <li class="list-inline-item"><a href="">Pinterest</a></li>
                                    </ul>
                                </div>
                                <div class="tag">
                                    <ul class="list-unstyled list-inline">
                                        @if ($post->tags()->count() > 0)
                                            <li class="list-inline-item">Tags :</li>
                                            @foreach ($post->tags as $tag)
                                            <li class="list-inline-item"><a href="">#{{$tag->name}}</a>,</li>
                                            @endforeach                                            
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="news-author d-flex">
                                <div class="author-img">
                                    <img src="{{asset('assets')}}/img/author.jpg" alt="">
                                </div>
                                <div class="author-content">
                                    <h6>Author : <a href="">Md Tahmidur Rahman</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi doloribus unde molestias laborum delectus adipisci, eos repellat in debitis cum impedit numquam, architecto, facilis.</p>
                                    <ul class="list-unstyled list-inline f-social">
                                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-rss"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="comment-sec">
                                <div class="sec-title">
                                    <h5>Comments <span>(03)</span></h5>
                                </div>
                                <div class="comment-box d-flex">
                                    <div class="comment-img">
                                        <a href=""><img src="{{asset('assets')}}/img/comm-1.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">John Doe</a></li>
                                            <li class="list-inline-item"><a href="">Reply</a></li>
                                        </ul>
                                        <span>Feb 11, 2019 at 3:15pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est.</p>
                                    </div>
                                </div>
                                <div class="comment-box comment-box2 d-flex">
                                    <div class="comment-img">
                                        <a href=""><img src="{{asset('assets')}}/img/comm-2.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">Mary Chang</a></li>
                                            <li class="list-inline-item"><a href="">Reply</a></li>
                                        </ul>
                                        <span>Feb 11, 2019 at 3:15pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est.</p>
                                    </div>
                                </div>
                                <div class="comment-box d-flex">
                                    <div class="comment-img">
                                        <a href=""><img src="{{asset('assets')}}/img/comm-3.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">Kate Brown</a></li>
                                            <li class="list-inline-item"><a href="">Reply</a></li>
                                        </ul>
                                        <span>Feb 11, 2019 at 3:15pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="comment-form">
                                <div class="sec-title">
                                    <h5>Leave Your Comment</h5>
                                </div>
                                <form class="com-form" action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" value="" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" value="" placeholder="Enter Your Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="name" placeholder="Your Comment Here"></textarea>
                                            <button type="button" name="button">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-widget">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#recent">Recent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#comment">Comment</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="recent" role="tabpanel">
                                        <div class="rec-item d-flex">
                                            <div class="rec-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-6.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>20 Seconds ago</span>
                                            </div>
                                        </div>
                                        <div class="rec-item d-flex">
                                            <div class="rec-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-11.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>4 minutes ago</span>
                                            </div>
                                        </div>
                                        <div class="rec-item d-flex">
                                            <div class="rec-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-7.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>47 minutes ago</span>
                                            </div>
                                        </div>
                                        <div class="rec-item d-flex">
                                            <div class="rec-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-4.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>1 Hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="popular" role="tabpanel">
                                        <div class="pop-item d-flex">
                                            <div class="pop-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-3.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pop-item d-flex">
                                            <div class="pop-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-8.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pop-item d-flex">
                                            <div class="pop-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-9.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pop-item d-flex">
                                            <div class="pop-img">
                                                <a href=""><img src="{{asset('assets')}}/img/lt-sm-12.jpg" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                    <div class="tab-pane fade" id="comment" role="tabpanel">
                                        <div class="com-item d-flex">
                                            <div class="com-img">
                                                <a href=""><img src="{{asset('assets')}}/img/com-1.png" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href=""><span>James</span>: Nesciunt quaerat ipsam fugiat impedit dignissimos unde...</a></p>
                                            </div>
                                        </div>
                                        <div class="com-item d-flex">
                                            <div class="com-img">
                                                <a href=""><img src="{{asset('assets')}}/img/com-2.png" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href=""><span>Mary</span>: Nesciunt quaerat ipsam fugiat impedit dignissimos unde...</a></p>
                                            </div>
                                        </div>
                                        <div class="com-item d-flex">
                                            <div class="com-img">
                                                <a href=""><img src="{{asset('assets')}}/img/com-1.png" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href=""><span>John</span>: Nesciunt quaerat ipsam fugiat impedit dignissimos unde...</a></p>
                                            </div>
                                        </div>
                                        <div class="com-item d-flex">
                                            <div class="com-img">
                                                <a href=""><img src="{{asset('assets')}}/img/com-2.png" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href=""><span>Anna</span>: Nesciunt quaerat ipsam fugiat impedit dignissimos unde...</a></p>
                                            </div>
                                        </div>
                                        <div class="com-item d-flex">
                                            <div class="com-img">
                                                <a href=""><img src="{{asset('assets')}}/img/com-1.png" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href=""><span>Maxx</span>: Nesciunt quaerat ipsam fugiat impedit dignissimos unde...</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                                                <p><a href="">These sentences are selected from various online news.</a></p>
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
                        <div class="col-md-12 col-md-0">
                            <div class="app-widget">
                                <img src="{{asset('assets')}}/img/news-app.jpg" alt="" class="img-fluid app-img">
                                <div class="img-content">
                                    <h4>Stay Connected</h4>
                                    <p>Download our app and get latest news and updates. Watch live news anytime.</p>
                                    <ul class="list-unstyled">
                                        <li><a href="#"><img src="{{asset('assets')}}/img/app1.png" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('assets')}}/img/app2.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="relate-news">
                        <div class="sec-title">
                            <h5>Related News</h5>
                        </div>
                        <div class="relate-slider owl-carousel">
                            <div class="rel-item">
                                <img src="{{asset('assets')}}/img/ls-1.jpg" alt="">
                                <div class="rel-layer">
                                    <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">TECHNOLOGY</li>
                                        <li class="list-inline-item">February 11, 2019</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rel-item">
                                <img src="{{asset('assets')}}/img/ls-2.jpg" alt="">
                                <div class="rel-layer">
                                    <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">TECHNOLOGY</li>
                                        <li class="list-inline-item">February 11, 2019</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rel-item">
                                <img src="{{asset('assets')}}/img/lt-bg-3.jpg" alt="">
                                <div class="rel-layer">
                                    <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">TECHNOLOGY</li>
                                        <li class="list-inline-item">February 11, 2019</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rel-item">
                                <img src="{{asset('assets')}}/img/int-1.jpg" alt="">
                                <div class="rel-layer">
                                    <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">TECHNOLOGY</li>
                                        <li class="list-inline-item">February 11, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Details Area -->
@endsection