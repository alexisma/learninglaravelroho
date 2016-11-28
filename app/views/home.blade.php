@extends('layouts.layout')

@section('center')
<div class="featured-heading">
    <h1>Welcome {{Auth::user()->username}} {{$testData}}</h1>
    <h2>semper est vitae luctus metus libero eu augue Morbi purus libero</h2>
</div>
<div class="ruler"></div>
<div class="featured-blocks">
    <div class="row-fluid">
        <div class="span4">
            <div class="media">
                <i class="fa fa-refresh"></i>
                <div class="media-body">
                    <h1 class="media-heading">Morbi interdum</h1>
                    <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem.</p>

                    <div class="readmore">
                        <a href="#">Read more <i class="fa fa-arrow-circle-right"></i> </a>
                    </div>

                </div>
            </div>


        </div>
        <div class="span4">
            <div class="media">
                <i class="fa fa-headphones"></i>
                <div class="media-body">
                    <h1 class="media-heading">Vivamus molestie</h1>
                    <p>Cinspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem</p>
                    <div class="readmore">
                        <a href="#">Read more <i class="fa fa-arrow-circle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="media">
                <i class="fa fa-repeat"></i>
                <div class="media-body">
                    <h1 class="media-heading">Fusce lobortis </h1>
                    <p>Jovispendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem</p>
                    <div class="readmore">
                        <a href="#">Read more <i class="fa fa-arrow-circle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ruler"></div>
<div class="tabs">
    <ul id="myTabContent" class="nav nav-tabs">
        <li class="active"><a href="#vestibuluco" data-toggle="tab">Vestibu luco</a></li>
        <li class=""><a href="#fuscelobin" data-toggle="tab">Fusce lobin</a></li>
        <li class=""><a href="#praesentplac" data-toggle="tab">Praesent plac</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="vestibuluco">
            <div class="media">
                {{ HTML::image('img/img1.jpg') }}
                <div class="media-body">
                    <h1 class="media-heading ruler-bottom">Integer vitae libero ac risus</h1>
                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede</p>
                    <div class="readmore">
                        <a href="#">Read more <i class="fa fa-arrow-circle-right"></i> </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="fuscelobin">
            <div class="media">
                {{ HTML::image('img/img1.jpg') }}
                <div class="media-body">
                    <h1 class="media-heading ruler-bottom">Nunc tellus ante mattis eget</h1>
                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede</p>
                    <div class="readmore">
                        <a href="#">Readmore <i class="fa fa-arrow-circle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="praesentplac">
            <div class="media">
                {{ HTML::image('img/img1.jpg') }}
                <div class="media-body">
                    <h1 class="media-heading ruler-bottom">Etiam pellentesque mauris ut lectus</h1>
                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede</p>
                    <div class="readmore">
                        <a href="#">Read more <i class="fa fa-arrow-circle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="featured-content">
    <div class="row-fluid">
        <div class="span4">
            <div class="block">
                <div class="block-title">
                    <h1>Morbi interdum </h1>
                </div>
                <div class="block-content">
                    <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper ehicula. Integer adipiscing risus a sem</p>
                    <ul>
                        <li><i class="fa fa-check"></i>Fusce accumsan mollis eros lorem </li>
                        <li><i class="fa fa-check"></i>Pellentesque a diam sit amet mi ullam</li>
                        <li><i class="fa fa-check"></i>Vehicula teger adipiscing risus a sem</li>
                        <li><i class="fa fa-check"></i>Nunc tellus mattis eget gravida vitad</li>
                    </ul>
                    <a href="#">read more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="block">
                <div class="block-title">
                    <h1>Morbi interdum </h1>
                </div>
                <div class="block-content">
                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis.</p>
                    <p>Libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in.</p>
                    <p>Acinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante.</p>
                    <a href="#">read more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="block">
                <div class="block-title">
                    <h1>Morbi interdum </h1>
                </div>
                <div class="block-content">
                    <p>Morbi interdum mollis sapien. Sed ac risus</p>
                    <div class="row-fluid">
                        <ul class="gallery">
                            <li>
                                <a href="#" >
                                    {{ HTML::image('img/img2.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{ HTML::image('img/img3.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{ HTML::image('img/img4.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{ HTML::image('img/img5.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    {{ HTML::image('img/img6.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{ HTML::image('img/img7.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{ HTML::image('img/img8.jpg') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{ HTML::image('img/img9.jpg') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="#">read more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop