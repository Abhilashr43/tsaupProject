@extends('layout')

@section('head-content-bottom')

    <link rel="stylesheet" href={{ asset('css/demos/demo-photography-2.css') }}>

@endsection
@section('body-content')

    <div role="main" class="main full-height initial-height" id="main">
        <section class="page-header page-header-modern page-header-background page-header-background-sm"
            style="background-image: url({{ asset('img/demos/photography/custom-header-bg.jpg') }});">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-normal text-12 m-0 pb-2">National Associations</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container p-0 pt-2">
            <div id="ourBlog" class="p-0 mt-4">
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-1.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Landscape
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Incredible Places</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-2.jpg') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Landscape
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Amazing Landscapes</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-3.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Travel
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Beautiful Flowers</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-4.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Wedding
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Lovely Wedding</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-5.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Travel
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Motor City</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-6.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Landscape
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Like Heaven</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-7.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Landscape
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Into the Wild</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-7.jpg') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Travel
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Pink Roses</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 isotope-item p-3">
                    <article class="our-blog-item">
                        <a href="demo-photography-2-blog-post" class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="{{ asset('img/demos/photography/blog/our-blog-9.jpg ') }}" alt=""
                                    class="img-fluid" />
                            </span>
                            <span class="category text-uppercase bg-color-quaternary">
                                Family
                            </span>
                        </a>
                        <div class="post-infos">
                            <div class="share">
                                <div class="share-icons bg-color-quaternary">
                                    <a href="#" class="text-decoration-none" title="Share on Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-decoration-none" title="Share on Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <span class="post-date">
                                31 NOV 2020
                            </span>
                            <h1 class="font-weight-normal">
                                <a href="demo-photography-2-blog-post" class="text-decoration-none">Family Tradition</a>
                            </h1>
                            <a href="demo-photography-2-blog-post" class="text-decoration-none">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id
                                    urna...
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        </section>
    @endsection
    @section('vednor-script-content-bottom')

        <script>
            $(window).on('load', function() {
                var $portfolioGrid = $('#portfolioGrid'),
                    $ourBlog = $('#ourBlog'),
                    gridSizer = $portfolioGrid.attr('data-grid-sizer');

                // Portfolio Grid
                if ($portfolioGrid.get(0)) {
                    $portfolioGrid.isotope({
                        itemSelector: '.isotope-item',
                        masonry: {
                            columnWidth: gridSizer,
                            gutter: 0
                        }
                    });

                    $portfolioGrid.isotope('layout');
                }

                if ($ourBlog.get(0)) {
                    $ourBlog.isotope({
                        itemSelector: '.isotope-item',
                        masonry: {
                            gutter: 0
                        }
                    });

                    $ourBlog.isotope('layout');
                }
            });

        </script>
    @endsection
