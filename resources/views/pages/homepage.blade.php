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
                            <img style="width: 100%;" src="https://images.rigzone.com/images/news/articles/168266_582x327.webp" alt="">
                            <span class="sportsmagazine-black-transparent"></span>
                            <div class="sportsmagazine-featured-caption">
                                <h2> OPEC Says Ukraine War Threatens Oil Demand</h2>
                                <span class="sportsmagazine-color">Tuesday, March 15, 2022 | Grant Smith</span>
                            </div>
                        </div>
                        <div class="sportsmagazine-featured-slider-layer">
                            <img style="width: 100%;" src="https://images.rigzone.com/images/news/articles/168256_582x327.webp" alt="">
                            <span class="sportsmagazine-black-transparent"></span>
                            <div class="sportsmagazine-featured-caption">
                                <h2>Exxon Elects New VP Of Public And Government Affairs </h2>
                                <span class="sportsmagazine-color">Tuesday, March 15, 2022 | Rigzone Staff</span>
                            </div>
                        </div>
                        
                    </div>
                    <!--// Featured Slider \\-->

                    <!--// Latest Match Result \\-->
                    

                    <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Latest News</h2></div> <!--// Fancy Title \\-->
                    <!--// Blog's \\-->
                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                        <ul class="row">
                            <li class="col-md-6">
                                <figure>
                                    <a href="newsdetails"><img src="https://images.rigzone.com/images/news/articles/168264_582x327.webp" alt=""></a>
                                    <figcaption>
                                        <span><small>Featured</small></span>
                                        <a href="newsdetails" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                    </figcaption>
                                </figure>
                                <section>
                                    <h2><a href="newsdetails"> Times Square Billboards Have Oil Message for Biden </a></h2>
                                    <p>Last week, the Job Creators Network (JCN) placed a billboard in the heart of Times Square calling on U.S. President Joe Biden to reject oil from foreign countries and produce it domestically.</p>
                                </section>
                                <div class="sportsmagazine-blog-grid-options">
                                    <a href="newsdetails" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assets/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                    <ul>
                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">32</a></li>
                                        <li><i class="fa fa-eye"></i> <a href="404.html">80</a></li>
                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">9</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-md-6 sportsmagazine-the-league">
                                <figure>
                                    <a href="newsdetails"><img src="https://images.rigzone.com/images/news/articles/168263_582x327.webp" alt=""></a>
                                    <figcaption>
                                        <span><small>Trending</small></span>
                                        <a href="newsdetails" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                    </figcaption>
                                </figure>
                                <section>
                                    <h2><a href="newsdetails"> Russian Oil Company Calls for End to Armed Conflict</a></h2>
                                    <p>Lukoil’s board of directors has called for the “soonest termination of the armed conflict” in a statement posted on the company’s website.“The board of directors of Lukoil expresses herewith its deepest.</p>
                                </section>
                                <div class="sportsmagazine-blog-grid-options">
                                    <a href="newsdetails" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assets/extra-images/blog-thumb-1.jpg')}}" alt="">Rigzone Staff</a>
                                    <ul>
                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">32</a></li>
                                        <li><i class="fa fa-eye"></i> <a href="404.html">80</a></li>
                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">9</a></li>
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
                                            <a href="newsdetails"><img src="https://images.rigzone.com/images/news/articles/168041_582x327.webp" alt=""></a>
                                            <figcaption>
                                                <span><small>Stock Market</small></span>
                                                <a href="newsdetails" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="newsdetails"> Kinetik Starts Trading on Nasdaq </a></h2>
                                            <p>Altus Midstream Company and BCP Raptor Holdco have completed their merger, forming Kinetik Holdings, a fully integrated midstream company.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="newsdetails" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assets/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">3</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="404.html">28</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="404.html">33</a></li>
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
                                            <h6><a href="newsdetails">The victry againts The Shark bring us closer to the Final</a></h6>
                                            <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-12 playoffs">
                                        <div class="sportsmagazine-blog-list-wrap">
                                            <span>Playoffs</span>
                                            <h6><a href="newsdetails">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                            <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-12 playoffs">
                                        <div class="sportsmagazine-blog-list-wrap">
                                            <span>Playoffs</span>
                                            <h6><a href="newsdetails">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
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
                        <img style="width: 100%; height: 400px;" src="https://images.rigzone.com/images/news/articles/168238_582x327.webp" alt="">
                        <span class="sportsmagazine-add-transparent"></span>
                        <figcaption>
                            <div class="sportsmagazine-addbanner-caption">
                                <h2> IOG Flows First Saturn Banks Gas. BP Gas Sale Agreement In Place. </h2>
                                <p>UK oil and gas firm IOG has confirmed first gas from Phase 1 of its Saturn.</p>
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
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-theleague">
                                            <div class="popular_news_text">
                                                <small>The League</small>
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
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
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
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
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="newsdetails">Basketball Stadium will  a max capacity for 5000 fans</a>
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