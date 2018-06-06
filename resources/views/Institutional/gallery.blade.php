<style>
    .gallery {
        height: auto;
        padding-bottom: 30px;
        padding-top: 30px;
        position: relative;
        max-width: 100%;
        background-color: #ffdb5e;
    }

    .gallery img {
        max-width: 100%;
        max-height: 95%;
        margin-bottom: 10px;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        border-radius: 5px;
    }

    .gallery h2 {
        color: white;
        font-weight: bold;
        font-size: 35pt;
    }

    .gallery hr {
        width: 100px;
        height: 6px;
        border-radius: 7px;
        background-color: rgb(223, 191, 80);
        border-width: 0px;
        margin-top: 0;
    }

    .gallery center {
        margin-bottom: 50px;
    }

    .view-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
    }

    .gallery-photo:hover .view-overlay {
        opacity: 0.95;
    }

    .view {
        font-size: 30px;
        font-weight: bold;
        color: rgb(255, 219, 94);
        background-color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        padding: 0px 55px 0;
        border-radius: 25px;
    }
</style>
<div class="gallery">
    <div class="container">
        <div class="row-fluid justify-content-center no-margin" id="gallery-row">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h2>Galeria de fotos</h2>
                        <hr/>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 gallery-photo">
                    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery1">
                        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        <div class="view-overlay">
                            <div class="view">Ver</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 gallery-photo">
                    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery2">
                        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        <div class="view-overlay">
                            <div class="view">Ver</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 gallery-photo">
                    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery3">
                        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        <div class="view-overlay">
                            <div class="view">Ver</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 gallery-photo">
                    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery4">
                        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        <div class="view-overlay">
                            <div class="view">Ver</div>
                        </div>
                    </a>
                </div>
                <div data-toggle="lightbox" data-gallery="example-gallery3" data-remote="https://unsplash.it/1200/768.jpg?image=264" data-title="Hidden item 1"></div>
            </div>
        </div>
    </div>
</div>