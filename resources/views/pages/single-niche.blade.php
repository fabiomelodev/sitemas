<x-layout.base>
    <x-slot name="title">
        Church | Sitemas
    </x-slot>

    <!-- banner -->
    <section class="banner">

        <div class="banner-wrapper">

            <div class="container flex justify-center">

                <div class="w-full lg:w-10/12">

                    <h1
                    class="text-4xl lg:text-[64px] font-bold text-center text-white"
                    style="line-height:120%">
                        Seu site de igreja
                    </h1>

                    <p
                    class="text-2xl lg:text-[44px] font-medium text-center text-white mb-10"
                    style="line-height:100%">
                        pronto, moderno e funcionando <br />
                        por assinatura mensal
                    </p>

                    <p class="text-lg lg:text-2xl font-medium text-center text-white">
                        Ideal para igrejas evangélicas e católicas
                    </p>

                    <div class="flex justify-center mt-8">
                        <form method="POST" action="{{ route('niche.process', $niche) }}">
                            @csrf

                            <button
                            class="btn-pattern text-xs lg:text-lg font-bold uppercase px-4 lg:px-6"
                            type="submit">
                                Começar agora
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <!-- how -->
    <section class="py-20">

        <div class="container grid grid-cols-1 lg:grid-cols-3 gap-4">

            @php
                $cards = [
                    [
                        'title' => 'Como funciona',
                        'items' => [
                            [
                                'title'       => '📄 Escolha um modelo',
                                'description' => 'Selecione o visual ideal para sua igreja.'
                            ],

                            [
                                'title'       => '📝 Preencha o formulário',
                                'description' => 'Informe os dados básicos e pronto.'
                            ],

                            [
                                'title'       => '⚙️ A gente configura tudo',
                                'description' => 'Você recebe seu site bonito e funcionando.'
                            ],
                        ]
                    ],

                    [
                        'title' => 'Informe seus dados',
                        'items' => [
                            [
                                'title'       => '🏷️ Nome da igreja',
                                'description' => ''
                            ],

                            [
                                'title'       => '🎨 Modelo desejado',
                                'description' => ''
                            ],

                            [
                                'title'       => '🌐 Subdomínio personalizado',
                                'description' => ''
                            ],

                            [
                                'title'       => '📧 E-mail para contato',
                                'description' => ''
                            ],

                            [
                                'title'       => 'Usamos essas informações para montar e entregar seu site.',
                                'description' => ''
                            ],
                        ]
                    ],

                    [
                        'title' => 'Receba seu site pronto em até 48h',
                        'items' => [
                            [
                                'title'       => '🕒 Entrega em até 2 dias úteis',
                                'description' => ''
                            ],

                            [
                                'title'       => '🔗 Link pronto para acesso',
                                'description' => ''
                            ],

                            [
                                'title'       => 'Edite textos, e imagens com facilidade',
                                'description' => ''
                            ]
                        ]
                    ],
                ];

                $delay = 3000;
            @endphp

            @foreach($cards as $card)
                @php
                    $delay = $delay + 2000;
                @endphp

                <div
                class="border-2 border-electric-violet-700 rounded-[20px] bg-white p-8"
                data-aos="fade-up"
                data-aos-duration="3000"
                data-aos-delay="{{ $delay }}">

                    <h3 class="text-2xl font-semibold text-steel-gray-950 mb-6">
                        {{ $card['title'] }}
                    </h3>

                    @foreach($card['items'] as $item)
                        <div class="mb-4">
                            <p class="font-bold">
                                {{ $item['title'] }}
                            </p>

                            @if($item['description'])
                                <p class="font-normal">
                                    {{ $item['description'] }}
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    <!-- end how -->

    <!-- plans -->
    <section class="plans">

        <div class="plans-wrapper">

            <div class="container grid grid-cols-1 lg:grid-cols-3 gap-4">

                <div class="col-span-full">

                    <h2 class="title-pattern text-center text-white mb-10">
                        Nossos planos
                    </h2>
                </div>

                {{-- @php
                    $plans = [
                        [
                            'title' => 'Básico',
                            'value' => '39',
                            'main'  => false,
                            'items' => [
                                [
                                    'title'       => '📄 1x Modelo landing page',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '⚙️ Painel de controle',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '📧 Suporte via Whatsapp',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '🔗 1x Subdomínio disponível',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '📧 1x E-mail',
                                    'description' => '(seusite@sitemas.com.br)'
                                ],
                            ]
                        ],

                        [
                            'title' => 'Básico',
                            'value' => '39',
                            'main'  => true,
                            'items' => [
                                [
                                    'title'       => '📄 1x Modelo landing page',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '⚙️ Painel de controle',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '📧 Suporte via Whatsapp',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '🔗 1x Subdomínio disponível',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '📧 1x E-mail',
                                    'description' => '(seusite@sitemas.com.br)'
                                ],
                            ]
                        ],

                        [
                            'title' => 'Básico',
                            'value' => '39',
                            'main'  => false,
                            'items' => [
                                [
                                    'title'       => '📄 1x Modelo landing page',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '⚙️ Painel de controle',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '📧 Suporte via Whatsapp',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '🔗 1x Subdomínio disponível',
                                    'description' => ''
                                ],

                                [
                                    'title'       => '📧 1x E-mail',
                                    'description' => '(seusite@sitemas.com.br)'
                                ],
                            ]
                        ],
                    ];
                @endphp --}}

                @foreach($plans as $plan)
                    <div
                    class="shadow-lg border rounded-[20px] overflow-hidden relative bg-white py-8 px-8 lg:px-4 xl:px-8"
                    data-aos="fade-up"
                    data-aos-duration="3000"
                    data-aos-delay="5000">

                        @if($plan->emphasis)
                            <div class="w-full top-0 left-0 absolute bg-steel-gray-950 py-1">
                                <p class="font-bold text-center text-white">
                                    Recomendado
                                </p>
                            </div>
                        @endif

                        <div class="mb-10">
                            <p class="text-[32px] font-bold text-center text-steel-gray-950 mb-2">
                                {{ $plan->title }}
                            </p>

                            <p
                            class="text-[64px] font-bold text-center text-steel-gray-950"
                            style="line-height:100%">
                                R$ {{ $plan->value }}
                            </p>

                            <p class="text-xl font-bold text-center text-steel-gray-950">
                                / mês
                            </p>
                        </div>

                        @foreach($plan->items as $item)
                            <div class="mb-4">
                                <p class="font-medium">
                                    {{ $item['title'] }}
                                </p>

                                @if($item['description'])
                                    <p
                                    class="text-xs font-medium"
                                    style="line-height:100%">
                                        {{ $item['description'] }}
                                    </p>
                                @endif
                            </div>
                        @endforeach

                        <div class="flex justify-center mt-20">
                            <a
                                class="btn-pattern text-lg font-bold text-white"
                                href="#">
                                Assinar agora!
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end plans -->

    <section class="py-10 lg:py-20">

        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-4">

            <div>

                <h2 class="title-pattern text-steel-gray-950 mb-6">
                    Torne sua igreja reconhecida
                </h2>

                <p class="font-medium text-steel-gray-950">
                    Leve sua igreja para o digital com um site moderno, bonito e
                    fácil de atualizar. Com um endereço próprio, informações
                    claras e agenda acessível, sua comunidade encontra tudo em
                    um só lugar. Mostre a identidade da sua igreja com excelência
                    e fortaleça sua presença na internet.
                </p>
            </div>

            <div class="hidden lg:flex justify-center">
                <img
                src="{{ Vite::asset('resources/images/about-image.png') }}"
                data-aos="fade-left"
                data-aos-duration="3000"
                data-aos-delay="{{ $delay }}"/>
            </div>
        </div>
    </section>

    <!-- templates -->
    <section class="py-10 lg:py-20">

        <div class="container flex flex-col gap-4">

            <div class="col-span-full flex flex-col lg:flex-row justify-between gap-6 lg:gap-0">

                <div>

                    <h2 class="title-pattern text-steel-gray-950 mb-3">
                        Nossos modelos
                    </h2>

                    <p class="text-base lg:text-xl font-medium text-steel-gray-950">
                        Escolha o melhor modelo para a sua igreja
                    </p>
                </div>

                <div class="flex items-end">
                    <div
                    data-aos="fade-left"
                    data-aos-duration="2000">
                        <a
                        class="btn-pattern text-sm lg:text-2xl font-bold text-white"
                        href="#">
                            Ver todos
                        </a>
                    </div>
                </div>
            </div>

            <div class="hidden lg:grid grid-cols-3 gap-4">
                @foreach($templates as $template)
                    <div
                    class="flex flex-col items-center gap-4"
                    data-aos="fade-up"
                    data-aos-duration="3000">

                        <div class="w-full h-[280px] shadow-lg rounded-[20px] overflow-hidden bg-steel-gray-950"></div>

                        <h3 class="text-2xl font-bold text-center text-steel-gray-950">
                            {{ $template->title }}
                        </h3>
                    </div>
                @endforeach
            </div>

            <div class="relative lg:hidden">

                <div class="swiper js-swiper-modules">

                    <div class="swiper-wrapper">

                        @foreach($templates as $template)
                            <div class="swiper-slide">
                                <div class="flex flex-col items-center gap-4">

                                    <div class="w-full h-[280px] shadow-lg rounded-[20px] overflow-hidden bg-steel-gray-950"></div>

                                    <h3 class="text-lg font-bold text-center text-steel-gray-950">
                                        {{ $template->title }}
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-pagination swiper-pagination-modules js-swiper-pagination-modules"></div>
            </div>
        </div>
    </section>
    <!-- end templates -->

    <!-- faq -->
    <section class="py-20">

        <div class="container flex flex-wrap">

            <div class="w-full mb-6">
                <h2 class="title-pattern text-steel-gray-950 mb-3">
                    FAQ
                </h2>
            </div>

            {{-- @php
                $faqItems = [
                    [
                        'title'       => 'Como posso alterar imagens e textos?',
                        'description' => 'Acessando o painel de controle do seu site meumodelo.sitemas.com.br/admin poderá alterar alterar imagens, textos e links sem complexidade.'
                    ],

                    [
                        'title'       => 'Como funciona os planos?',
                        'description' => 'Importante: Os planos Essencial e Avançado funcionam por assinatura mensal, ou seja, o site permanece ativo enquanto a assinatura estiver vigente. <br /> Se preferir adquirir o modelo de forma definitiva, oferecemos essa opção mediante orçamento, com instalação realizada em sua própria hospedagem.'
                    ],

                    [
                        'title'       => 'E se eu quiser cancelar?',
                        'description' => 'Iremos manter os seus dados e modelo com seu conteúdo por dois meses  após o cancelamento. Podendo retomar o site entre os dois meses com todos os dados.'
                    ],

                    [
                        'title'       => 'Preciso pagar alguma taxa de instalação?',
                        'description' => 'Não. Assinando um dos planos, não há taxa de instalação. O site é configurado e entregue sem custo adicional.'
                    ],

                    [
                        'title'       => 'Consigo usar meu domínio próprio?',
                        'description' => 'Sim, é possível usar o domínio da sua igreja (ex: www.suaigreja.com.br). Para configurar corretamente, consulte o suporte.'
                    ]
                ];
            @endphp --}}

            <div
            class="w-full lg:w-8/12"
            x-data="{ faqActive: 0 }">

                @foreach($faqs as $key => $item)
                    <div class="mb-6 last:mb-0">
                        <button x-on:click="faqActive == {{ $key }} ? faqActive = null : faqActive = {{ $key }}">
                            <h3 class="text-lg lg:text-2xl font-bold text-left text-steel-gray-950 mb-4">
                                {{ $item['title'] }}
                            </h3>
                        </button>

                        <div
                        x-show="faqActive == {{ $key }}"
                        x-cloak>
                            <p class="font-medium text-steel-gray-950">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end faq -->
</x-layout.base>
