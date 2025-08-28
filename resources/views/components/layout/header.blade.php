<header
class="w-full bg-white py-4"
x-data="{ openMenu: false }">

    <div class="container flex flex-wrap">

        <div class="w-2/12">
            <a href="#">
                <img
                src="{{ Vite::asset('resources/images/header-logo.png') }}"
                alt="Logo - Sitemas Church" />
            </a>
        </div>

        <div class="w-10/12 flex justify-end items-center">

            <nav class="hidden lg:flex justify-end">

                @php
                    $items = [
                        [
                            'title' => 'Modelos',
                            'link'  => '#'
                        ],

                        [
                            'title' => 'Planos',
                            'link'  => '#'
                        ],

                        [
                            'title' => 'FAQ',
                            'link'  => '#'
                        ]
                    ];
                @endphp

                <ul class="flex items-center gap-6">
                    @foreach($items as $item)
                        <li>
                            <a
                            class="font-medium text-steel-gray-950"
                            href="{{ $item['link'] }}">
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach

                    <li class="ml-6">
                        <a
                        class="btn-pattern text-sm font-bold"
                        href="#">
                            Faça orçamento
                        </a>
                    </li>
                </ul>
            </nav>

            <nav
            class="w-full h-full top-0 left-0 fixed flex flex-col items-center gap-20 bg-steel-gray-950 p-4"
            x-show="openMenu"
            x-cloak
            x-transition:enter="transition duration-500"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-0"
            x-transition:leave="transition duration-500"
            x-transition:leave-start="translate-0"
            x-transition:leave-end="translate-x-full">

                <button
                class="w-10 h-10 top-4 right-4 shadow-lg rounded-full absolute flex justify-center items-center bg-white"
                x-on:click="openMenu = false">
                    <svg class="w-4 h-4 fill-steel-gray-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </button>

                <div>
                    <a href="#">
                        <img
                        src="{{ Vite::asset('resources/images/header-logo.png') }}"
                        alt="Logo - Sitemas Church" />
                    </a>
                </div>

                @php
                    $items = [
                        [
                            'title' => 'Modelos',
                            'link'  => '#'
                        ],

                        [
                            'title' => 'Planos',
                            'link'  => '#'
                        ],

                        [
                            'title' => 'FAQ',
                            'link'  => '#'
                        ]
                    ];
                @endphp

                <ul class="flex flex-col items-center gap-6">
                    @foreach($items as $item)
                        <li>
                            <a
                            class="text-lg font-medium text-white"
                            href="{{ $item['link'] }}">
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach

                    <li class="ml-6">
                        <a
                        class="btn-pattern text-sm font-bold"
                        href="#">
                            Faça orçamento
                        </a>
                    </li>
                </ul>
            </nav>

            <button
            class="w-10 h-10 shadow-lg rounded-full flex lg:hidden justify-center items-center bg-steel-gray-950"
            x-on:click="openMenu = true">
                <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            </button>
        </div>
    </div>
</header>
