<style>
    .news-display {
        padding-bottom: 30px;
        padding-top: 30px;
        position: relative;
        max-width: 100%;
        background-color: #fff;
        margin-top: 90px;
        color: #747474;
    }
    .news-display img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 5px;
    }
</style>
<div class="news-display">
    <div class="row-fluid" id="church-row">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="container">
                        <img src="{{asset("/storage/institutional/journal_covers/$journal->cover")}}" class="">
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <h1>{!! $journal->title !!}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <h3>{!! $journal->subtitle !!}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        {!! $journal->body !!}
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>