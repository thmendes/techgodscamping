<style>
    .carousel {
        height: 440px;
        margin-top: 90px;
    }

    .carousel-caption {
        z-index: 10;
        padding-bottom: 112px;
    }

    .carousel .item {
        height: 440px;
    }

    .carousel-inner>.item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 440px;
    }
    .carousel-control {
        background: transparent!important;
    }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @if(count($journals) > 0)
            @for($i = 0; $i < count($journals); $i++)
                @if($i == 0)
                    <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>        
                @else
                    <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>        
                @endif
            @endfor
        @endif
    </ol>
    <div class="carousel-inner" role="listbox">
        @if(count($journals) > 0)
            @foreach($journals as $key=>$journal)
                @if($key == 0)
                    <div class="item active">
                @else
                    <div class="item">
                @endif
                    <img class="first-slide" src="{{asset("/storage/institutional/journal_covers/$journal->cover")}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{$journal->title}}</h1>
                            <h3>{{$journal->subtitle}}</h3>
                            <a class="btn btn-lg btn-default" href="/noticias/{{ $journal->id }}" role="button">Saiba Mais</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="item active">
                <img class="first-slide" src="{{ asset('images/institutional/banner.png') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Paróquia Nossa Senhora Aparecida</h1>
                        <a class="btn btn-lg btn-default" href="#church-row" role="button">Saiba Mais</a>
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>