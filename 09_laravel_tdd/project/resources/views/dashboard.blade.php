<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Koszyk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Sekcja koszyka -->
                    <div id="koszyk-content">
                    @if ($koszykItems->isEmpty())
                        <!-- Komunikat dla pustego koszyka -->
                        <div class="text-center">
                            <p class="text-xl text-gray-600">Twój koszyk jest pusty.</p>
                            <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-700 text-lg mt-4 inline-block">
                                Przeglądaj produkty
                            </a>
                        </div>
                    @else
                        @foreach ($koszykItems as $item)
                            <div class="bg-gray-100 p-4 m-2 rounded-lg shadow-md flex items-center">
                                <!-- Obrazek produktu -->
                                @if (filter_var($item->product->image, FILTER_VALIDATE_URL))
                                    <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}" class="w-48 h-48 object-cover mb-4 rounded">
                                @else
                                    <img src="{{ asset('/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="w-full h-48 object-cover mb-4 rounded">
                                @endif

                                <!-- Informacje o produkcie -->
                                <div class="flex-1 m-2">
                                    <h3 class="text-lg font-semibold">{{ $item->product->name }}</h3>
                                    <p class="text-gray-500">{{ $item->product->description }}</p>
                                    <p class="text-gray-700 font-bold">{{ number_format($item->product->price * $item->quantity, 2) }} PLN</p>
                                    <p class="text-gray-500">Ilość: {{ $item->quantity }}</p>
                                    <a href="{{ route('products.show', $item->product->id) }}" class="mt-4 text-gray-500 hover:text-gray-700">Zobacz szczegóły</a>

                                </div>

                                <!-- Usuwanie produktu z koszyka -->
                                <div class="ml-4">
                                    <form action="{{ route('koszyk.destroy', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Usuń</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                            <!-- Przycisk zamówienia -->
                            <div class="mt-6 mr-2 flex justify-end">
                                <form method="POST" action="{{ route('koszyk.checkout') }}" id="checkout-form">
                                    @csrf
                                    <x-primary-button type="submit">Zamów</x-primary-button>
                                </form>
                            </div>
                    @endif
                    </div>

                    <!-- Sekcja podziękowania -->
                    <div id="thank-you-message" class="hidden text-center flex flex-col items-center">
                        <h3 class="text-4xl font-bold mb-6">Dziękujemy za zamówienie!</h3>
                        <p class="text-2xl mb-6">
                            Twoje zamówienie zostało złożone pomyślnie. <br>
                            W zakładce <strong>"Moje zamówienia"</strong> na swoim Profilu możesz sprawdzić jego aktualny status.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('#checkout-form').addEventListener('submit', async function (event) {
            event.preventDefault();

            try {
                const response = await fetch("{{ route('koszyk.checkout') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    body: JSON.stringify({}),
                });

                if (response.ok) {
                    document.getElementById('koszyk-content').classList.add('hidden');
                    document.getElementById('thank-you-message').classList.remove('hidden');
                } else {
                    alert("Błąd podczas składania zamówienia. Spróbuj ponownie.");
                }
            } catch (error) {
                console.error("Błąd:", error);
            }
        });
    </script>
</x-app-layout>
