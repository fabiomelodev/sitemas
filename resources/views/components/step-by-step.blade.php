@props([
    'stepCurrent'
])

@php
    $steps = [
        'stepDomain' => [
            'stepDomain'    => 'execution',
            'stepPlans'     => 'on-hold',
            'stepTemplates' => 'on-hold',
            'stepData'      => 'on-hold',
            'stepPayment'   => 'on-hold',
        ],

        'stepPlans' => [
            'stepDomain'    => 'completed',
            'stepPlans'     => 'execution',
            'stepTemplates' => 'on-hold',
            'stepData'      => 'on-hold',
            'stepPayment'   => 'on-hold',
        ],

        'stepTemplates' => [
            'stepDomain'    => 'completed',
            'stepPlans'     => 'completed',
            'stepTemplates' => 'execution',
            'stepData'      => 'on-hold',
            'stepPayment'   => 'on-hold',
        ],

        'stepData' => [
            'stepDomain'    => 'completed',
            'stepPlans'     => 'completed',
            'stepTemplates' => 'completed',
            'stepData'      => 'execution',
            'stepPayment'   => 'on-hold',

        ],

        'stepPayment' => [
            'stepDomain'    => 'completed',
            'stepPlans'     => 'completed',
            'stepTemplates' => 'completed',
            'stepData'      => 'completed',
            'stepPayment'   => 'execution',
        ],
    ];
@endphp

<div class="step-wrapper">

    <div class="flex flex-col items-center gap-2 py-1 px-4">
        <div class="w-11 h-11 border shadow-lg rounded-full relative flex justify-center items-center bg-white">
            <svg class="w-8 h-8 fill-steel-gray-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 0L332.1 0c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9L448 336c0 26.5-21.5 48-48 48l-192 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48zM48 128l80 0 0 64-64 0 0 256 192 0 0-32 64 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 176c0-26.5 21.5-48 48-48z"/></svg>

            @if($steps[$stepCurrent]['stepDomain'] == 'completed')
                <div class="w-4 h-4 -bottom-2 -right-0 shadow-lg rounded-full overflow-hidden absolute flex justify-center items-center bg-white">
                    <svg class="w-2 h-2 fill-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                </div>
            @endif
        </div>

        <p class="text-xs font-bold text-center text-white">
            Subdomínio
        </p>
    </div>

    <div class="flex flex-col items-center gap-2 {{ $steps[$stepCurrent]['stepTemplates'] == 'on-hold' ? 'opacity-20' : '' }} py-1 px-4">
        <div class="w-11 h-11 border shadow-lg rounded-full relative flex justify-center items-center bg-white">
            <svg class="w-8 h-8 fill-steel-gray-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 0L332.1 0c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9L448 336c0 26.5-21.5 48-48 48l-192 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48zM48 128l80 0 0 64-64 0 0 256 192 0 0-32 64 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 176c0-26.5 21.5-48 48-48z"/></svg>

            @if($steps[$stepCurrent]['stepPlans'] == 'completed')
                <div class="w-4 h-4 -bottom-2 -right-0 shadow-lg rounded-full overflow-hidden absolute flex justify-center items-center bg-white">
                    <svg class="w-2 h-2 fill-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                </div>
            @endif
        </div>

        <p class="text-xs font-bold text-center text-white">
            Planos
        </p>
    </div>

    <div class="flex flex-col items-center gap-2 {{ $steps[$stepCurrent]['stepTemplates'] == 'on-hold' ? 'opacity-20' : '' }} py-1 px-4">
        <div class="w-11 h-11 border shadow-lg rounded-full relative flex justify-center items-center bg-white">
            <svg class="w-8 h-8 fill-steel-gray-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 0L332.1 0c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9L448 336c0 26.5-21.5 48-48 48l-192 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48zM48 128l80 0 0 64-64 0 0 256 192 0 0-32 64 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 176c0-26.5 21.5-48 48-48z"/></svg>

            @if($steps[$stepCurrent]['stepTemplates'] == 'completed')
                <div class="w-4 h-4 -bottom-2 -right-0 shadow-lg rounded-full overflow-hidden absolute flex justify-center items-center bg-white">
                    <svg class="w-2 h-2 fill-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                </div>
            @endif
        </div>

        <p class="text-xs font-bold text-center text-white">
            Modelos
        </p>
    </div>

    <div class="flex flex-col items-center gap-2 {{ $steps[$stepCurrent]['stepData'] == 'on-hold' ? 'opacity-20' : '' }} py-1 px-4">
        <div class="w-11 h-11 border shadow-lg rounded-full relative flex justify-center items-center bg-white">
            <svg class="w-8 h-8 fill-steel-gray-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 0L332.1 0c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9L448 336c0 26.5-21.5 48-48 48l-192 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48zM48 128l80 0 0 64-64 0 0 256 192 0 0-32 64 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 176c0-26.5 21.5-48 48-48z"/></svg>

            @if($steps[$stepCurrent]['stepData'] == 'completed')
                <div class="w-4 h-4 -bottom-2 -right-0 shadow-lg rounded-full overflow-hidden absolute flex justify-center items-center bg-white">
                    <svg class="w-2 h-2 fill-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                </div>
            @endif
        </div>

        <p class="text-xs font-bold text-center text-white">
            Dados
        </p>
    </div>

    <div class="flex flex-col items-center gap-2 {{ $steps[$stepCurrent]['stepPayment'] == 'on-hold' ? 'opacity-20' : '' }} py-1 px-4">
        <div class="w-11 h-11 border shadow-lg rounded-full relative flex justify-center items-center bg-white">
            <svg class="w-8 h-8 fill-steel-gray-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 0L332.1 0c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9L448 336c0 26.5-21.5 48-48 48l-192 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48zM48 128l80 0 0 64-64 0 0 256 192 0 0-32 64 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 176c0-26.5 21.5-48 48-48z"/></svg>

            @if($steps[$stepCurrent]['stepPayment'] == 'completed')
                <div class="w-4 h-4 -bottom-2 -right-0 shadow-lg rounded-full overflow-hidden absolute flex justify-center items-center bg-white">
                    <svg class="w-2 h-2 fill-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                </div>
            @endif
        </div>

        <p class="text-xs font-bold text-center text-white">
            Pagamentos
        </p>
    </div>
</div>
<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
