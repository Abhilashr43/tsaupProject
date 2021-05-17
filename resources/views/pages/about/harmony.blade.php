@extends('layout')
@section('head-content-bottom')
    <style>
        .card {
            background-color: #eee;
        }

        section.section {
            background: #ffffff;
        }

    </style>
@endsection
@section('body-content')
    <section class="section section-height-4 border-0 m-0" id="ourteam">
        <div class="container container-xl-custom">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-6 text-center">
                    <div class="overflow-hidden">
                        <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation"
                            data-appear-animation="maskUp">OUR TEAM</span>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="250">Harmony Committee
                        </h2>
                    </div>
                    <p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">The purpose of the
                        Committee is to seek the integration of adults and older adults within the ITF, provide appropriate
                        advice and support to instructors on issues related to their participation in different Taekwon-Do
                        activities, and finally promote the maintenance and improvement of the health and quality of life of
                        students.</p>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <a href="ajax/demo-architecture-interior-ajax-team-detail.html"
                        class="text-decoration-none simple-ajax-popup">
                        <div class="card border-0 custom-box-shadow-1">
                            <svg class="custom-square-1 z-index-0" width="80" height="80">
                                <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                            </svg>
                            <img class="card-img-top z-index-1" src="img/team/team-2.jpg" alt="" />
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Michel Doe</h4>
                                <p class="card-text">CEO & Founder</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <a href="ajax/demo-architecture-interior-ajax-team-detail.html"
                        class="text-decoration-none simple-ajax-popup">
                        <div class="card border-0 custom-box-shadow-1">
                            <svg class="custom-square-1 z-index-0" width="80" height="80">
                                <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                            </svg>
                            <img class="card-img-top z-index-1" src="img/team/team-4.jpg" alt="" />
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Jessica Doe</h4>
                                <p class="card-text">Architect</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <a href="ajax/demo-architecture-interior-ajax-team-detail.html"
                        class="text-decoration-none simple-ajax-popup">
                        <div class="card border-0 custom-box-shadow-1">
                            <svg class="custom-square-1 z-index-0" width="80" height="80">
                                <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                            </svg>
                            <img class="card-img-top z-index-1" src="img/team/team-5.jpg" alt="" />
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">John Doe</h4>
                                <p class="card-text">Architect</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="ajax/demo-architecture-interior-ajax-team-detail.html"
                        class="text-decoration-none simple-ajax-popup">
                        <div class="card border-0 custom-box-shadow-1">
                            <svg class="custom-square-1 z-index-0" width="80" height="80">
                                <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                            </svg>
                            <img class="card-img-top z-index-1" src="img/team/team-6.jpg" alt="" />
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0">Alice Doe</h4>
                                <p class="card-text">Architect</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
