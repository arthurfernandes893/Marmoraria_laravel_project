@extends('templates.main')

@section('content')
        
    <!-----------------------carrossel comeco-------------------------------------->
    
    <section>
            <div id="carouselExampleDark" class="carousel carousel-dark slide bg-green" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner bg-success p-2 bg-opacity-25">
                <div class="carousel-item active" data-bs-interval="10000">
                    <a href=""><img src="https://blog.zlionbrasil.com.br/wp-content/uploads/2021/07/reducao-marmoraria.png" style="padding:10px;" class="d-block w-100 img-fluid"  alt="Luto pela morte do CEO"></a>
                    <div class="carousel-caption d-none d-md-block">
                    
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://media.gazetadopovo.com.br/2021/07/13190812/Banheiro_MacchiaOro_Execu%C3%A7%C3%A3o-Revest-Pedras_fotosRafaelLima-1920x1080-960x540.jpg" class="d-block w-100" style="padding:10px;" alt="Reator Arc">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://blog.imobiliarianovolar.net/wp-content/uploads/2022/03/marmore-granito-ou-quatzo.png" class="d-block w-100" style="padding:10px;" alt="Pepper Pots assume a presicencia da empresa.">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


    <!---------------------empresas parceiras----------------------------->
            <section class="p-3 bg-success bg-opacity-25">
            <br>
                <div class=" shadow-lg bloco rounded bg-success-subtle p-2 " style="font-size: 1.2rem;">
                <h1>Nosso Negócio</h1>
                <p>Nossa atividade de maior recorrência é a prestação de serviços para Concessionárias Administradores de Cemitérios. 
                Também realizamos serviços individuais, como <b>cubas</b> e <b>bancadas</b>.</p>
                </div>
    <br>
                <div class=" shadow-lg bloco rounded bg-success-subtle p-2 ">
                <h2>Confira abaixo as Concessionárias que prestamos serviços:</h2><br>
                    <img src="/img/reviver-logo.png" alt="logomarca Concessionaria Reviver" width="201.6px" height="87.5px">
                    <h1>Reviver</h1>
                    <p>Lorem ipsum dolor sit amet. Ut magni ratione eos inventore sunt id voluptatem 
                        rerum aut commodi deserunt rem saepe unde aut natus necessitatibus. 
                        Nam inventore distinctio sit adipisci rerum vel temporibus nemo. Non temporibus asperiores 
                        aut molestiae culpa in atque enim hic delectus debitis ut neque ratione! 
                        Et dicta excepturi quo natus dolores est sint autem aut voluptas debitis 
                        ab reprehenderit autem id eveniet explicabo id esse reiciendis.</p>
                </div>
        <br>
            <div class=" shadow bloco rounded bg-success-subtle p-2 ">
                <img src="/img/riopax-logo.png" alt="logomarca Concessionaria Riopax" width="201.6px" height="87.5px">    
                <h1>Rio Pax</h1>
                <p>Lorem ipsum dolor sit amet. Ut magni ratione eos inventore sunt id voluptatem 
                    rerum aut commodi deserunt rem saepe unde aut natus necessitatibus. 
                    Nam inventore distinctio sit adipisci rerum vel temporibus nemo. Non temporibus asperiores 
                    aut molestiae culpa in atque enim hic delectus debitis ut neque ratione! 
                    Et dicta excepturi quo natus dolores est sint autem aut voluptas debitis 
                    ab reprehenderit autem id eveniet explicabo id esse reiciendis.</p>
            </div>

            <div>
                
            </div>
            
        </section>

@endsection