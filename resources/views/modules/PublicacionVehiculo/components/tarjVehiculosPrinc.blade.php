<section class="relative py-20 bg-center bg-no-repeat"
    style="background-image: url('{{ asset('img/fondo-carrusel.jpg.jpeg') }}'); background-size: 100%;">

    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <div class="mb-10">
            <h2 class="text-white text-4xl font-bold">Autos destacados</h2>
            <p class="text-gray-300 mt-2 text-sm">
                Alquila fácil, rápido y seguro, elige el que más te guste.
            </p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                @foreach ($vehiculos as $vehiculo)
                    @php
                        $fotos = $vehiculo->fotos_vehiculos ?? collect();
                        $fotoPrincipal = $fotos->first();
                        $fotoUrl = $fotoPrincipal ? $fotoPrincipal->url : asset('img/no-image.jpg');
                        $miniaturas = $fotos->take(3)->map(fn($f) => $f->url)->values()->toArray();
                        $precio = number_format((float) ($vehiculo->prerent ?? 0), 0, ',', '.');
                    @endphp

                    <div class="swiper-slide">
                        <article class="overflow-hidden rounded-2xl bg-white shadow-sm w-full max-w-xs mx-auto">

                            <div class="h-44 w-full bg-gray-100">
                                <img src="{{ $fotoUrl }}" alt="Foto vehículo"
                                    class="h-full w-full object-cover block" loading="lazy" />
                            </div>

                            <div class="p-4">
                                <div class="grid grid-cols-2 gap-x-10 gap-y-2 text-sm">
                                    <div class="flex items-baseline gap-2">
                                        <span class="font-bold text-gray-900">Marca:</span>
                                        <span class="text-gray-700 uppercase">
                                            {{ $vehiculo->marca?->des ?? '---' }}
                                        </span>
                                    </div>

                                    <div class="flex items-baseline justify-end gap-2 text-right">
                                        <span class="font-bold text-gray-900">Modelo:</span>
                                        <span class="text-gray-700">{{ $vehiculo->mod ?? '---' }}</span>
                                    </div>

                                    <div class="flex items-baseline gap-2">
                                        <span class="font-bold text-gray-900">Línea:</span>
                                        <span class="text-gray-700">{{ $vehiculo->linea?->des ?? '---' }}</span>
                                    </div>

                                    <div class="flex items-baseline justify-end gap-2 text-right">
                                        <span class="font-bold text-gray-900">Color:</span>
                                        <span class="text-gray-700">{{ $vehiculo->col ?? '---' }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="rounded-bl-2xl bg-slate-900 px-4 py-3 text-center text-sm font-extrabold text-white">
                                    ${{ $precio }} / DÍA
                                </div>

                                @auth
                                    <button type="button"
                                        class="btn-open-reserva rounded-br-2xl bg-[#C91843] px-4 py-3 text-center text-sm font-extrabold text-white hover:bg-[#B0174B]"
                                        
                                        data-codveh="{{ $vehiculo->cod }}"
                                        data-marca="{{ $vehiculo->marca?->des }}"
                                        data-linea="{{ $vehiculo->linea?->des }}"
                                        data-modelo="{{ $vehiculo->mod }}"
                                        data-color="{{ $vehiculo->col }}"
                                        data-combustible="{{ $vehiculo->combustible?->des }}"
                                        data-pasajeros="{{ $vehiculo->pas }}"
                                        data-precio="{{ $precio }}"
                                        data-precio_raw="{{ (float) ($vehiculo->prerent ?? 0) }}"
                                        data-foto="{{ $fotoUrl }}"
                                        data-thumbs='@json($miniaturas)'
                                    >
                                        RENTAR
                                    </button>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-br-2xl bg-[#C91843] px-4 py-3 text-center text-sm font-extrabold text-white hover:bg-[#B0174B]">
                                        RENTAR
                                    </a>
                                @endauth
                            </div>

                        </article>
                    </div>
                @endforeach

            </div>

            <div class="swiper-button-next custom-arrow"></div>
            <div class="swiper-button-prev custom-arrow"></div>
            <div class="swiper-pagination mt-10"></div>
        </div>

    </div>
</section>

{{-- SWIPER --}}
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1280: { slidesPerView: 4 },
        },
    });
</script>

{{-- SCRIPT PARA ABRIR MODAL --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {

        document.querySelectorAll('.btn-open-reserva').forEach(btn => {
            btn.addEventListener('click', function () {

                const data = {
                    codveh: this.dataset.codveh,
                    marca: this.dataset.marca,
                    linea: this.dataset.linea,
                    modelo: this.dataset.modelo,
                    color: this.dataset.color,
                    combustible: this.dataset.combustible,
                    pasajeros: this.dataset.pasajeros,
                    precio: this.dataset.precio,
                    precio_raw: this.dataset.precio_raw,
                    foto: this.dataset.foto,
                    thumbs: JSON.parse(this.dataset.thumbs || '[]')
                };

                window.dispatchEvent(new CustomEvent('seleccionar-vehiculo-directo', {
                    detail: data
                }));

                window.dispatchEvent(new CustomEvent('open-modal', {
                    detail: 'reserva-directa-car'
                }));

            });
        });

    });
</script>