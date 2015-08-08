@extends('layouts.front')

@section('content')

    <div id="front_search">
        <div id="front_banner">
            <h1>Search for a clinic near you</h1>
            <a href="#" class="btn btn-danger btn-search">Start here</a>
        </div>
    </div>


    <div id="front_statistics" class="gray-section section">
        <div class="align_center">
            <h1>Statistics</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="stats border-right">
                        <span>1000</span>
                        <p><i class="fa fa-hospital-o fa-lg"></i> &nbspClinics</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="stats border-right">
                        <span>1 Million</span>
                        <p><i class="fa fa-users fa-lg"></i> &nbspUsers</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="stats">
                        <span>20</span>
                        <p><i class="fa fa-building-o fa-lg"></i> &nbspCities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="front_feedback">
        <div class="align_center">
            <h1>Feedback</h1>
            <div class="container single-item">
                <div>
                    <p>
                        When people are complementing our homepage
                        (which a lot of our customers/suppliers have
                        been doing), or when talking about homepages
                        in general, I recommend you and your company
                        a lot. I inform about high value for money,
                        and that the language and geographical
                        distance does not mean anything.
                    </p>
                    <h5>BO ANDERSEN</h5>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Modi molestiae neque pariatur rem voluptatem? Accusantium
                        at atque dolorum et, iure, minima minus molestias
                        necessitatibus odit, porro praesentium quisquam sit voluptates.
                    </p>
                    <h5>ANONYMOUS</h5>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Cum cumque deleniti deserunt dicta distinctio quia totam
                        voluptates voluptatibus. Aliquid ea enim facere, laborum magni
                        natus necessitatibus non rerum similique voluptas!
                    </p>
                    <h5>KUGA YUMA</h5>
                </div>
            </div>

        </div>
    </div>
@stop

@section('page-script')

    <script>
        $(document).ready(function(){
            $('.single-item').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000
            });
        });


    </script>

@stop