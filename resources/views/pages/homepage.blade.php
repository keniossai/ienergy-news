@extends('layouts.base')



@section('content')
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section">
        <div class="container">
            <div class="row">
                <!--// Content \\-->
                <div class="col-md-8">
                    
                    <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Featured News</h2></div> <!--// Fancy Title \\-->
                    <!--// Featured Slider \\-->
                    <div class="sportsmagazine-featured-slider">
                        <div class="sportsmagazine-featured-slider-layer">
                            <img src="{{asset('assets/extra-images/featured-slider-1.jpg')}}" alt="">
                            <span class="sportsmagazine-black-transparent"></span>
                            <div class="sportsmagazine-featured-caption">
                                <h2>Fusce at molestie elit, sit amet Curabitur in tellus non risu illa vitae non nunc</h2>
                                <span class="sportsmagazine-color">03 December 2017 / John Maxwell</span>
                            </div>
                        </div>
                        <div class="sportsmagazine-featured-slider-layer">
                            <img src="{{asset('assets/extra-images/featured-slider-2.jpg')}}" alt="">
                            <span class="sportsmagazine-black-transparent"></span>
                            <div class="sportsmagazine-featured-caption">
                                <h2>Fusce at molestie elit, sit amet Curabitur in tellus non risu illa vitae non nunc</h2>
                                <span class="sportsmagazine-color">03 December 2017 / John Maxwell</span>
                            </div>
                        </div>
                    </div>
                    <!--// Featured Slider \\-->

                    <!--// Latest Match Result \\-->
                    

                    <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Latest Blogs</h2></div> <!--// Fancy Title \\-->
                    <!--// Blog's \\-->
                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                        <ul class="row">
                            <li class="col-md-6">
                                <figure>
                                    <a href="blog-detail.html"><img src="{{asset('assets/extra-images/latest-blog-1.jpg')}}" alt=""></a>
                                    <figcaption>
                                        <span><small>Featured</small></span>
                                        <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                    </figcaption>
                                </figure>
                                <section>
                                    <h2><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                </section>
                                <div class="sportsmagazine-blog-grid-options">
                                    <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assets/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                    <ul>
                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                        <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-md-6 sportsmagazine-the-league">
                                <figure>
                                    <a href="blog-detail.html"><img src="{{asset('assets/extra-images/latest-blog-2.jpg')}}" alt=""></a>
                                    <figcaption>
                                        <span><small>The League</small></span>
                                        <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                    </figcaption>
                                </figure>
                                <section>
                                    <h2><a href="blog-detail.html">Michael Bryan was chosen as best player with 45 points</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                </section>
                                <div class="sportsmagazine-blog-grid-options">
                                    <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assets/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                    <ul>
                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                        <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    <li class="col-md-12 sportsmagazine-the-team">
                                        <figure>
                                            <a href="blog-detail.html"><img src="{{asset('assets/extra-images/latest-blog-3.jpg')}}" alt=""></a>
                                            <figcaption>
                                                <span><small>The Team</small></span>
                                                <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="blog-detail.html">The vicotory againts The Shark brings us close to the Final</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assets/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sportsmagazine-blog sportsmagazine-blog-list">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-blog-list-wrap">
                                            <span>The Team</span>
                                            <h6><a href="blog-detail.html">The victry againts The Shark bring us closer to the Final</a></h6>
                                            <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-12 playoffs">
                                        <div class="sportsmagazine-blog-list-wrap">
                                            <span>Playoffs</span>
                                            <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                            <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-12 playoffs">
                                        <div class="sportsmagazine-blog-list-wrap">
                                            <span>Playoffs</span>
                                            <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                            <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// Blog's \\-->

                    <!--// Advertisement \\-->
                    <figure class="sportsmagazine-add-banner">
                        <img src="{{asset('assets/extra-images/add-thumb-1.jpg')}}" alt="">
                        <span class="sportsmagazine-add-transparent"></span>
                        <figcaption>
                            <div class="sportsmagazine-addbanner-caption">
                                <h2>Take a look at the brand New Uniforms for next season</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Utac malesuada ante. Curabitur lacinia.</p>
                                <a href="404.html" class="sportsmagazine-banner-btn">Read More <span></span></a>
                            </div>
                        </figcaption>
                    </figure>
                    <!--// Advertisement \\-->

                </div>
                <!--// Content \\-->

                <!--// SideBaar \\-->
                <aside class="col-md-4">
                    
                   

                    <!--// Widget Trending News \\-->
                    <div class="widget widget_trending_news">
                        <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                        <!-- Nav tabs -->
                        <ul class="nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-theleague">
                                            <div class="popular_news_text">
                                                <small>The League</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li class="widget-theleague">
                                            <div class="popular_news_text">
                                                <small>The League</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Widget Trending News \\-->

                    <!--// Widget Next Match \\-->
                    
                    <!--// Widget Next Match \\-->

                    <!--// Widget Newsletter \\-->
                    <div class="widget widget_newsletter">
                        <div class="sportsmagazine-fancy-title"><h2>Our Newsletter</h2></div>
                        <form>
                            <label>Subscribe Now</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante.</p>
                            <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                            <input type="text" value="Enter Your email" onblur="if(this.value == '') { this.value ='Enter Your email'; }" onfocus="if(this.value =='Enter Your email') { this.value = ''; }">
                            <label class="widget_newsletter_btn"><input type="submit" value="Subscribe"></label>
                        </form>
                    </div>
                    <!--// Widget Newsletter \\-->

                    <!--// Widget Add \\-->
                    <div class="widget widget_add">
                        <img src="{{asset('assets/extra-images/add.jpg')}}" alt="">
                    </div>
                    <!--// Widget Add \\-->

                </aside>
                <!--// SideBaar \\-->

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
@endsection