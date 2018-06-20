<style>
    #map {
        height: 277px;
        width: 100%;
    }

    .footer {
        height: auto;
        padding-bottom: 30px;
        position: relative;
        max-width: 100%;
        background-color: #ffdb5e;
    }

    .footer h2 {
        color: #e3bc3e;
        font-weight: bold;
        line-height: 1.2;
    }

    .wrapper {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
    }

    .wrapper p {
        color: #fff;
    }

    .btn-default-form {
        background: #d7b137;
        color: #ffdb5e;
        width: 120px;
        height: 40px;
        font-size: 18px;
        font-weight: bold;
        line-height: 1.2;
    }

    /* LIB */

    .no-border {
        border: none;
    }

    textarea {
        resize: none;
        scroll-behavior: auto;
    }

    .width-50 {
        width: 50px;
    }

    .margin-right-10{
        margin-right: 10px;
    }
    .no-background{
        background: transparent;
    }
</style>
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="container">

                <div class="col-md-4">
                    <h2>Localização</h2>
                    <div id="map"></div>
                </div>
                <div class="col-md-4">
                    <h2>Informações</h2>
                    <p style="color:#b8911a">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi perspiciatis magnam, ab ipsa laboriosam
                        tempore tenetur, aliquid repellat, ex cum dicta reiciendis accusamus. Omnis repudiandae quasi mollitia,
                        iusto odio dignissimos.</p>
                    <div class="wrapper">
                        <div class="width-50">
                            <i class="fas fa-phone fa-2x" data-fa-transform="flip-h" style="color:#d7b137"></i>
                        </div>
                        <div>
                            <p>(44) 3663 - 1172</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="width-50">
                            <i class="fas fa-map-marker fa-2x" style="color:#d7b137"></i>
                        </div>
                        <div>
                            <p>Rua Paraná, 704 - Centro</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="width-50">
                            <i class="fas fa-envelope fa-2x" style="color:#d7b137"></i>
                        </div>
                        <div>
                            <p>paroquiadouradina@yahoo.com.br</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Contato</h2>
                    <form style="margin-right: 20px;" id="message" action="/mail/send" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" hidden="">Nome</label>
                            <input id="name" type="text" name="name" placeholder="Nome" class="form-control no-border">
                        </div>
                        <div class="form-group">
                            <label for="email" hidden="">E-mail</label>
                            <input id="email" name="email" type="text" placeholder="E-mail" class="form-control no-border">
                        </div>
                        <div class="form-group">
                            <label for="contentMessage" hidden="">Mensagem</label>
                            <textarea rows="6" id="contentMessage" name="contentMessage" placeholder="Sua mensagem" class="form-control no-border"></textarea>
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-default btn-default-form no-border pull-right">
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    function initMap() {
        var uluru = {
            lat: -23.383717,
            lng: -53.291123
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPw2z3k3D_JKlc4k6Sj_HND0-4E1duOvw&callback=initMap">
</script>