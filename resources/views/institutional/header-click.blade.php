<style>
    .navbar-toggle {
        border-color: #b8911a;
        margin-top: 45px;
    }

    .icon-bar {
        background: #b8911a;
    }

    #navbar>ul>li>a:hover {
        border-bottom: #ffdb5e solid 3px;
        background-color: white;
        padding-bottom: 0px;
    }

    #navbar>ul>li {
        padding-left: 15px;
        padding-right: 15px;
    }

    #navbar>ul>li>a {
        font-size: 20px;
        color: #747474;
        line-height: 1.2;
        padding-left: 0px;
        padding-right: 0px;
    }

    #navbar {
        margin-top: 30px;
    }

    @media (max-width: 768px) {
        #navbar>ul>li>a {
            text-align: center;
        }

        #navbar>ul>li>a:hover {
            text-align: center;
            padding-bottom: 10px;
            border: 0px none white;

        }
    }

    @media (min-width: 768px) {
        #navbar {
            float: right;
            margin-top: 36px;
        }
    }

    .navbar-header
    {
        margin-left: 0px!important;
        margin-right: 0px!important;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .navbar {
        background: white;
        border-radius: 0px;
        margin-bottom: 0px;
    }

    .navbar-brand {
        height: auto;
    }
</style>

<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-inverse fixed-top no-border">
        <div class="row">

            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                        aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="/">
                            <img class="img-responsive" src="{{ asset('/images/institutional/church-logo.png') }}" alt="Paróquia Nossa Senhora Aparecida - Douradina"
                                title="">
                        </a>
                    </div>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Início</a>
                        </li>
                        <li>
                            <a href="{{ url('/meuacampamento') }}"></a>
                        </li>  
                        <li>
                            <a href="/#gallery-row">Galeria</a>
                        </li>
                        <li>
                            <a href="/#news-row">Notícias</a>
                        </li>
                        <li>
                            <a href="/#church-row">A Paróquia</a>
                        </li>
                        <li>
                            <a href="/#footer">Contato</a>
                        </li>
                        <li>
                            <a href="{{ url('/pessoas/visitante/cadastrar') }}"><b style="color: #ffdb5e">Acampamento: Inscrição!</b></a>
                        </li>     
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>