@extends('layout')
@section('body-content')

    <div class="container pt-5">
        <div class="row py-4 mb-2">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="300">
                        Grand Master Paul Weiler</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="500">President</p>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                    Elected as ITF President at the ITF
                    Congress in Inzell, Germany, on April 28th 2019..</p>
                {{-- <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius,
                    elementum mauris eget, egestas quam.</p>
                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="1000">
                </div> --}}
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src={{ asset('img/about/president.jpg') }} class="img-fluid mb-2" alt="">
            </div>
        </div>
    </div>
@endsection
