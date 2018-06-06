<style>
    @media (min-width: 768px) {
        #church-img {
            text-align: right;
            margin: 45px 0 30px 0; 
        }
    }

    @media (max-width: 768px) {
        #church-img {
            text-align: center;
            margin: 0px 0 30px 0; 
        }
    }

    .crunch {
        margin-top: 30px;
    }

    #church-text {
        background: url( {{ asset('/images/institutional/bg-church.png') }} ) no-repeat;
    }

    #church-text > h1 {
        color: #ffdb5e;
        font-weight: bold;
        font-size: 45px;
        line-height: 1.8;
        margin-bottom: 0px;
    }

    #church-text> p {
        text-align: justify;
    }
    #church-img {
        margin: 45px 0 30px; 
    }

    #church-img img {
        max-width: 100%;
    }

    .hr-yellow {
        width: 100px;
        height: 6px;
        background-color: #ffdb5e;
        border-width: 0px;
        margin: 5px 0px 30px 0px;
    }

}
    
</style>
<div class="crunch">
    <div class="row-fluid" id="church-row">
        <div class="col-md-6" id="church-text">
            <h1>A Paróquia</h1>
            <hr class="hr-yellow"/>
            <p>Cras tempor fermentum dui, laoreet laoreet velit varius ut. In nibh nulla, euismod at nisi id, pretium lacinia augue.
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris lacinia quam ac sapien tincidunt, at ultricies
                sem sagittis. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor fermentum dui, laoreet laoreet velit varius
                ut. In nibh nulla, euismod at nisi id, pretium lacinia augue. Interdum et malesuada fames ac ante ipsum primis
                in faucibus. Mauris lacinia quam ac sapien tincidunt, at ultricies sem sagittis. Sed sagittis, massa eu accumsan
                posuere, mi nisl fringilla mauris, in ullamcorper libero enim eu arcu. Nunc laoreet risus ut elit ornare elementum.
                Nullam sit amet neque ultricies libero iaculis faucibus. Sed arcu nulla, scelerisque sit amet risus ultrices,
                eleifend sollicitudin risus. Nulla facilisi. Morbi non leo at libero efficitur elementum at sit amet nulla.</p>
            <p>Mauris lacinia quam ac sapien tincidunt, in ullamcorper libero enim eu arcu. Nunc laoreet risus ut elit ornare elementum.
                Scelerisque sit amet risus ultrices, eleifend sollicitudin risus. Nulla facilisi. Morbi non leo at libero efficitur
                elementum at sit amet nulla.</p>
        </div>
        <div class="col-md-6" id="church-img">
            <img src="{{ asset('images/institutional/church.png') }}" alt="Igreja de Douradina em um dia ensolarado.">
        </div>
    </div>
</div>