@extends('layouts.public')

@section('title', 'Axtarışın nəticələri')

@section('content')

<section id="page-title" class="page-title-center page-title-parallax page-title-dark" style="background-image: url('/img/front//hotels/page-title.jpg'); background-position: center center; padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>{{ $flights->total() }} Flights Found</h1>
        <span>Baku &nbsp;&nbsp;<i class="icon-map-marker"></i>&nbsp;&nbsp; London</span>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin col_last clearfix" style="width: 100%">

                <!-- Posts
                ============================================= -->
                <div id="posts" class="small-thumbs">

                    @foreach ($flights as $flight)
                    <div class="entry clearfix">
                        <div class="row clearfix">
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-10 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="blog-single.html">{{ $flight['company'] }}</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-plane"></i><a href="#">{{ $flight['plane'] }}</a></li>
                                        <li><i class="icon-time"></i><a href="#"> Estimate arrival: {{ date("F j, Y, g:i a", strtotime($flight['arrival'])) }}</a></li><!-- 25 July 2019 2:34 PM -->
                                    </ul>
                                    <div class="entry-content">
                                        {{ $flight['description'] }}
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 center">
                                <div class="hotel-price">
                                    <i class="icon-dollar"></i>{{ $flight['price'] }}
                                </div>
                                <small><em>Price per person*</em></small><br>
                                <a href="#"class="button button-rounded topmargin-sm">Buy ticket</a>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach

                    
                </div>
                {{ $flights->links() }}
            </div>

        </div>

    </div>

</section><!-- #content end -->
@endsection
