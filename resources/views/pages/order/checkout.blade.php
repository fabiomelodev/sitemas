<x-layout.base>
    <x-slot name="title">
        Church | Sitemas
    </x-slot>

    <section class="py-20">

        <div class="container grid grid-cols-3 gap-4">

            <div class="col-span-2 flex flex-col gap-4">

                <div class="shadow-lg border rounded-3xl flex justify-between items-center py-4 px-8">

                    <div>
                        <h3 class="text-xl font-bold text-gray-800">
                            Subomínio:
                        </h3>

                        <p class="text-sm font-medium text-gray-700">
                            {{ $order->domain()->first()->title }}
                        </p>
                    </div>

                    <a
                    class="text-lg font-bold text-gray-800"
                    href="#">
                        Editar
                    </a>
                </div>

                <div class="shadow-lg border rounded-3xl flex justify-between items-center py-4 px-8">

                    <div>
                        <h3 class="text-xl font-bold text-gray-800">
                            Plano:
                        </h3>

                        <p class="text-sm font-medium text-gray-700">
                            {{ $order->plan()->first()->title }} | R$ {{ $order->plan()->first()->value }}
                        </p>
                    </div>

                    <a
                    class="text-lg font-bold text-gray-800"
                    href="#">
                        Editar
                    </a>
                </div>

                <div class="shadow-lg border rounded-3xl flex justify-between items-center py-4 px-8">

                    <div>
                        <h3 class="text-xl font-bold text-gray-800">
                            Modelo:
                        </h3>

                        <p class="text-sm font-medium text-gray-700">
                            {{ $order->template()->first()->title }}
                        </p>
                    </div>

                    <a
                    class="text-lg font-bold text-gray-800"
                    href="#">
                        Editar
                    </a>
                </div>

                <div class="shadow-lg border rounded-3xl flex justify-between items-center py-4 px-8">

                    <div>
                        <h3 class="text-xl font-bold text-gray-800">
                            Dados:
                        </h3>

                        <p class="text-sm font-medium text-gray-700">
                            {{ $order->customer()->first()->company }},
                            {{ $order->customer()->first()->website }},
                            {{ $order->customer()->first()->email }},
                            {{ $order->customer()->first()->phone }}
                        </p>
                    </div>

                    <a
                    class="text-lg font-bold text-gray-800"
                    href="#">
                        Editar
                    </a>
                </div>
            </div>

            <div class="col-span-1">

                <div class="shadow-lg border rounded-3xl p-4">

                    <div>
                        <p class="text-sm font-black text-center text-gray-800">
                            Mensalmente
                        </p>

                        <p class="text-4xl font-black text-center text-gray-800">
                            R$ 00,00
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <a
                        class="inline-block shadow-lg rounded-full text-sm font-bold text-white bg-green-300 mt-12 py-3 px-8"
                        href="#">
                            Pagar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
