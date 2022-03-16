@extends('layouts.base')


@section('content')
<div class="sportsmagazine-main-section" style="height: 900px;">
    <div class="container">
        <div class="row">

            <!--// Content \\-->
            <div class="col-lg-12" style="margin-top: 150px;">
                
                

                <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Regions</h2></div> <!--// Fancy Title \\-->
                <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                    <ul>
                        <li>
                            <figure>
                                <a data-fancybox-group="group" href="africa-news" class="fancybox"><img src="https://assets.spe.org/cf/6c/8ef83e3af94ade8239a15d2b3761/ogf-lng-hero-qatar-north-field.jpg" alt=""></a>
                                <figcaption>
                                    <h6><a href="africa-news">North Africa</a></h6>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a data-fancybox-group="group" href="africa-news" class="fancybox"><img src="https://em-views.com/wp-content/uploads/2017/02/GABON-WEST-AFRICA-OIL-RIG-1.jpg" alt=""></a>
                                <figcaption>
                                    <h6><a href="africa-news">West Africa</a></h6>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a data-fancybox-group="group" href="africa-news" class="fancybox"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-jfUVrjnCjL8t9J0-cR6k7sMEfe8hkGnW9ZPNVwUlt398C_Fx5UE5zmnGXli6HfDAseI&usqp=CAU" alt=""></a>
                                <figcaption>
                                    <h6><a href="africa-news">Middle East</a></h6>
                                </figcaption>
                            </figure>
                        </li>
                        
                    </ul>
                </div>

            </div>
            <!--// Content \\-->

            
        </div>
    </div>
</div>
@endsection