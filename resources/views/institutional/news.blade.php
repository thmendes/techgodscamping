<style>
    .news {
        height: auto;
        padding-bottom: 30px;
        position: relative;
        max-width: 100%;
        background-color: #fff;
    }

    .news h2 {
        color: #ffdb5e;
        font-weight: bold;
        font-size: 35pt;
    }

    .news img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .news-photo {}

    .hr-yellow {
        width: 100px;
        height: 6px;
        background-color: #ffdb5e;
        border-width: 0px;
        margin: 5px 0px 30px 0px;
    }

    .news h3 {
        color: #747474;
        margin: 0;
    }

    .data {
        background-color: rgb(130, 130, 128);
        color: #fff;
        border-radius: 20px;
        max-width: 150px;
        margin: 5px;
        vertical-align: baseline;
    }

    .news p {
        color: #fff;
        vertical-align: -webkit-baseline-middle;
    }

    @media (max-width: 992px) {
        .data {
            padding-top: 8px;
        }
    }
</style>
<div class="news">
    <div class="container">
        <div class="row-fluid justify-content-center no-margin" id="news-row">
            <div class="row">
                <div class="col-md-12">
                    <h2>Notícias Recentes</h2>
                    <hr class="hr-yellow" />
                </div>
            </div>
            <div class="row">
                @foreach($journals as $journal)
                    <div class="col-md-3">
                        <a href="/noticias/{{ $journal->id }}">
                            <div class="thumbnail no-border">
                                <img src="{{asset("/storage/institutional/journal_covers/$journal->cover")}}" class="">
                                <div class="caption">
                                    <center>
                                        <h3>{{$journal->title}}</h3>
                                        <div class="data">
                                        <i class="fas fa-calendar-alt margin-right-10"></i>{{ $journal->created_at->toFormattedDateString() }}</div>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            @if(count($journals) == 4)
                <div class="row">
                    <center><a href="/noticias" style="color:#747474;">Ver Mais</a></center>
                </div>
            @endif
        </div>
    </div>
</div>