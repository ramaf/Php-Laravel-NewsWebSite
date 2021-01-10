<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($slider->take(3) as $rs)
            <div class="carousel-item @if($loop->first) active @endif">
                <img class="first-slide" style="width: 1920px; height: 836px;" src="{{ asset("storage/$rs->image") }}" alt="{{$rs->title}}">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>{{$rs->title}} </span>
                        <h1>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</h1>
                        <p>{{$rs->description}}</p>
                        <a class="buynow" href="{{route('news',['id' => $rs->id,'slug' => $rs->slug])}}">Read</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i><</i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i>></i>
        </a>

    </div>
</section>
