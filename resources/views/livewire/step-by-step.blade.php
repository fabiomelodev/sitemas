<div x-data="{ showMenu: false }" @scroll.window="showMenu = window.pageYOffset > 250">
    <div
    class="w-full top-4 left-0 fixed flex justify-center z-50"
    x-show="showMenu"
    x-transition:enter="transition duration-1000"
    x-transition:enter-start="-translate-y-10 opacity-40"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition duration-500"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-10 opacity-40">
        <x-step-by-step stepCurrent="{{ $this->showStepCurrent($stepCurrent) }}" />
    </div>

    <section class="py-20">

        <div class="container flex justify-center">

            <div class="w-8/12">
                <x-step-by-step stepCurrent="{{ $this->showStepCurrent($stepCurrent) }}" />
            </div>
        </div>
    </section>

    <section class="pb-20">

        <!-- domains -->
        @if($this->showStepCurrent($stepCurrent) == 'stepDomain')
            <div class="container flex flex-wrap justify-center gap-8">

                <div class="w-full">

                    <h2 class="title-pattern text-center text-steel-gray-950 mb-10">
                        Escolha seu subdomínio
                    </h2>
                </div>

                <div class="w-8/12">

                    <div class="flex">
                        <input
                        class="w-full border border-magenta-/-fuchsia-600 rounded-full text-lg font-normal text-steel-gray-950 py-2 px-8"
                        type="text"
                        wire:model.live="subdomain"
                        placeholder="Digite o subdomínio que deseja" />

                        <p class="rounded flex items-center text-sm font-bold text-steel-gray-950 p-2">
                            .sitemas.com.br
                        </p>
                    </div>

                    @if($messageDomain)
                        <div class="flex justify-center">
                            <div class="rounded-full shadow-lg bg-magenta-/-fuchsia-600 mt-2 py-1 px-3">
                                <p class="text-sm font-medium text-center {{ $availableSubdomain ? 'text-white' : 'text-red-400' }} text-white">
                                    {{ $messageDomain }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <!-- end domains -->

        <!-- plans -->
        @if($this->showStepCurrent($stepCurrent) == 'stepPlans')
            <div class="container grid grid-cols-1 lg:grid-cols-3 gap-4">

                <div class="col-span-full">

                    <h2 class="title-pattern text-center text-steel-gray-950 mb-10">
                        Escolher plano
                    </h2>
                </div>

                @foreach($this->getPlans() as $plan)
                    <div class="shadow-lg border rounded-[20px] overflow-hidden relative bg-white py-8 px-8 lg:px-4 xl:px-8">

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
                            @if ($selectedPlanId !== $plan->id)
                                <button
                                class="btn-pattern text-lg font-bold text-white"
                                type="button"
                                wire:click="addSelectedPlan({{ $plan->id }})">
                                    Selecionar
                                </button>
                            @else
                                <button
                                class="btn-pattern btn-pattern-remove text-lg font-bold text-white"
                                type="button"
                                wire:click="removeSelectedPlan({{ $plan->id }})">
                                    Remover
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <!-- end plans -->

        <!-- templates -->
        @if($this->showStepCurrent($stepCurrent) == 'stepTemplates')
            <div class="container flex flex-col gap-8">

                <div class="col-span-full">

                    <h2 class="title-pattern text-center text-steel-gray-950 mb-3">
                        Escolha seu modelo
                    </h2>

                    <p class="text-base lg:text-xl font-medium text-center text-steel-gray-950">
                        Escolha o melhor modelo que combina com sua igreja
                    </p>
                </div>

                <div class="hidden lg:grid grid-cols-3 gap-y-8 gap-x-4">

                    @foreach($this->getTemplates() as $template)
                        <div class="flex flex-col items-center gap-4">

                            <div class="w-full h-[280px] shadow-lg rounded-[20px] overflow-hidden bg-steel-gray-950"></div>

                            <div>
                                <h3 class="text-2xl font-bold text-center text-steel-gray-950 mb-4">
                                    {{ $template->title }}
                                </h3>

                                @if($template->features())
                                    @foreach($template->features()->get() as $feature)
                                        <p class="text-xl font-medium text-center text-steel-gray-950">
                                            {{ $feature->title }}
                                        </p>
                                    @endforeach
                                @endif
                            </div>

                            <div class="flex items-center gap-2 mt-6">
                                <a
                                class="w-12 h-12 transition hover:scale-90 border-2 border-magenta-/-fuchsia-600 shadow-lg rounded-full overflow-hidden inline-block p-[2px] cursor-pointer"
                                href="#">

                                    <div class="w-full h-full rounded-full flex justify-center items-center bg-gradient-blue-purple">
                                        <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                    </div>
                                </a>

                                @if ($selectedTemplateId !== $template->id)
                                    <button
                                    class="h-12 transition hover:scale-90 border-2 border-magenta-/-fuchsia-600 shadow-lg rounded-full overflow-hidden inline-block p-[2px] cursor-pointer"
                                    type="button"
                                    wire:click="addSelectedTemplate({{ $template->id }})">

                                        <div class="w-full h-full rounded-full flex justify-center items-center text-lg font-bold text-center text-white bg-gradient-blue-purple px-6">
                                            Selecionar
                                        </div>
                                    </button>
                                @else
                                    <button
                                    class="btn-pattern btn-pattern-remove text-lg font-bold text-white"
                                    type="button"
                                    wire:click="removeSelectedTemplate()">
                                        Remover
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="relative lg:hidden">

                    <div class="swiper js-swiper-modules">

                        <div class="swiper-wrapper">

                            @foreach($modules as $module)
                                <div class="swiper-slide">
                                    <div class="flex flex-col items-center gap-4">

                                        <div class="w-full h-[280px] shadow-lg rounded-[20px] overflow-hidden bg-steel-gray-950"></div>

                                        <h3 class="text-lg font-bold text-center text-steel-gray-950">
                                            {{ $module['title'] }}
                                        </h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-modules js-swiper-pagination-modules"></div>
                </div> --}}
            </div>
        @endif
        <!-- end templates -->

        <!-- data -->
        @if($this->showStepCurrent($stepCurrent) == 'stepData')
            <div class="container flex flex-wrap justify-center gap-16">

                <div class="w-full">

                    <h2 class="title-pattern text-center text-steel-gray-950 mb-3">
                        Preencha seus dados
                    </h2>

                    <p class="text-base lg:text-xl font-medium text-center text-steel-gray-950">
                        Escolha o melhor modelo que combina com sua igreja
                    </p>
                </div>

                <div class="w-8/12">

                    <form>

                        <div class="flex flex-wrap gap-6">

                            <div class="w-full flex flex-col gap-2">

                                <label
                                class="text-xl font-bold text-steel-gray-950 pl-4"
                                for="company">
                                    Nome da igreja:
                                </label>

                                <input
                                class="w-full border border-magenta-/-fuchsia-600 rounded-full text-lg font-normal text-steel-gray-950 py-2 px-8"
                                type="text"
                                wire:model="company"
                                id="company" />

                                @error('company')
                                    <span class="text-red-600 text-sm pl-4">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="w-full flex flex-col gap-2">

                                <label
                                class="text-xl font-bold text-steel-gray-950 pl-4"
                                for="website">
                                    Nome do site:
                                </label>

                                <input
                                class="w-full border border-magenta-/-fuchsia-600 rounded-full text-lg font-normal text-steel-gray-950 py-2 px-8"
                                type="text"
                                wire:model="website"
                                id="website" />

                                @error('website')
                                    <span class="text-red-600 text-sm pl-4">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="w-full flex flex-col gap-2">

                                <label
                                class="text-xl font-bold text-steel-gray-950 pl-4"
                                for="email">
                                    E-mail:
                                </label>

                                <input
                                class="w-full border border-magenta-/-fuchsia-600 rounded-full text-lg font-normal text-steel-gray-950 py-2 px-8"
                                type="email"
                                wire:model="email"
                                id="email"
                                placeholder="seuemail@gmail.com" />

                                @error('email')
                                    <span class="text-red-600 text-sm pl-4">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="w-full flex flex-col gap-2">

                                <label
                                class="text-xl font-bold text-steel-gray-950 pl-4"
                                for="phone">
                                    Telefone ou Whatsapp com DDD:
                                </label>

                                <input
                                class="w-full border border-magenta-/-fuchsia-600 rounded-full text-lg font-normal text-steel-gray-950 py-2 px-8"
                                type="text"
                                wire:model="phone"
                                id="phone"
                                placeholder="(xx) 99999-9999" />

                                @error('phone')
                                    <span class="text-red-600 text-sm pl-4">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif
        <!-- end data -->
    </section>

    <div class="w-full bottom-0 left-0 fixed flex flex-wrap justify-center items-center gap-4 bg-steel-gray-950 py-2 z-50">

        <div class="w-full">
            <p class="text-sm font-medium text-center text-white">
                {{ $guidance }}
            </p>
        </div>

        <button
        class="btn-pattern"
        type="button"
        wire:click="prev()">
            Voltar
        </button>

        @if($buttonNextStatus)
            @if($showButtonSubmit)
                <button
                class="btn-pattern"
                type="button"
                wire:click="submit()">
                    Enviar
                </button>
            @else
                <button
                class="btn-pattern"
                type="button"
                wire:click="next()">
                    Próximo
                </button>
            @endif
        @else
             <div class="btn-pattern opacity-20">
                Próximo
            </div>
        @endif
    </div>
</div>
