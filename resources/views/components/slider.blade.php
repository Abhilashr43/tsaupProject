@if (isset($silderdata))
    <div class="owl-carousel-wrapper" style="height: 670px">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
            data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-75px', 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            @foreach ($silderdata as $data)
                <div class="position-relative" data-dynamic-height="['670px','670px','670px','550px','500px']"
                    style="background-image: url({{ asset($data->image_path) }}); background-size: cover; background-position: center; height: 670px;">
                    <div class="container position-relative z-index-1 h-100">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@else
    <h1><b>$sliderdata</b> needs to be set in using(child) template</h1>
@endif
