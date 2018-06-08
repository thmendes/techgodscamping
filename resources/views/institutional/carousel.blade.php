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
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="{{ asset('images/institutional/banner.png') }}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Paróquia Nossa Senhora Aparecida</h1>
                    <a class="btn btn-lg btn-default" href="#" role="button">Saiba Mais</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
                <img class="first-slide" src="{{ asset('images/institutional/banner.png') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Paróquia Nossa Senhora Aparecida</h1>
                        <a class="btn btn-lg btn-default" href="#" role="button">Saiba Mais</a>
                        </p>
                    </div>
                </div>
            </div>
    </div>
</div>