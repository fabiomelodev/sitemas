<div>
    <form method="POST" action="{{ route('niche.process', $niche) }}">
        @csrf

        <div class="banner-search">
            <div class="flex">
                <input
                class="banner-search-field"
                type="text"
                wire:model.live="subdomain"
                name="subdomain"
                placeholder="Digite o subdomínio que deseja" />

                <p class="rounded flex items-center text-sm font-bold text-steel-gray-950 p-2">
                    .sitemas.com.br
                </p>
            </div>

            @if ($message === '✅ Subdomínio disponível!')
                <button
                class="btn-pattern text-xs lg:text-lg font-bold uppercase px-4 lg:px-6"
                type="submit">
                    Continuar
                </button>
            @else
                <div class="btn-pattern opacity-40 flex items-center text-xs lg:text-lg font-bold uppercase cursor-no-drop px-4 lg:px-6">
                    Digite o subdomínio
                </div>
            @endif
        </div>
    </form>

    @if($message)
        <p class="text-sm lg:text-lg font-medium {{ $availableSubdomain ? 'text-white' : 'text-red-400' }} mt-2 px-4 lg:px-10">
            {{ $message }}
        </p>
    @endif
</div>
