<section class="trending-podcast-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Noticias Gerais</h4>
                </div>
            </div>
                    <form wire:submit="busca()" class="custom-form search-form flex-fill me-3 mb-10">
                        <div class="input-group input-group-lg">
                            <input wire:model="titulo_buscado" type="text" class="form-control" placeholder="Procurar uma noticia">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </div>
                    </form>
                    @if(count($noticias) > 0)
                        @foreach($noticias as $noticia)
                            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                                <div class="custom-block custom-block-full">
                                    <div class="custom-block-image-wrap">
                                        <a href="detail-page.html">
                                            <img src="{{ asset ('assets/images/podcast/27376480_7326766.jpg') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="custom-block-info">
                                        <h5 class="mb-2">
                                            <a href="detail-page.html">
                                                {{ $noticia->titulo }}
                                            </a>
                                        </h5>

                                        <div class="profile-block d-flex">
                                            <img src="{{ asset ('assets/images/profile/woman-posing-black-dress-medium-shot.jpg') }}" class="profile-block-image img-fluid" alt="">

                                            <p>{{ $noticia->subtitulo }}
                                                <strong>{{ $noticia->user_id }}</strong></p>
                                        </div>

                                        <p class="mb-0">{{ $noticia->descricao }}</p>

                                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                            <a href="#" class="bi-headphones me-1">
                                                <span>100k</span>
                                            </a>

                                            <a href="#" class="bi-heart me-1">
                                                <span>2.5k</span>
                                            </a>

                                            <a href="#" class="bi-chat me-1">
                                                <span>924k</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="social-share d-flex flex-column ms-auto">
                                        <a href="#" class="badge ms-auto">
                                            <i class="bi-heart"></i>
                                        </a>

                                        <a href="#" class="badge ms-auto">
                                            <i class="bi-bookmark"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Sem noticias para voce hoje !</h4>
                            </div>
                        </div>
            @endif
        </div>
    </div>
</section>
