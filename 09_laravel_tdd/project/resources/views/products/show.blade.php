<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-700 leading-tight">
            {{ __('Szczegóły produktu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Szczegóły produktu -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md flex items-start">
                        <!-- Obrazek produktu -->
                        @if ($product->image)
                            @if (filter_var($product->image, FILTER_VALIDATE_URL)) <!-- Sprawdzanie, czy to URL -->
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-96 w-auto object-contain rounded mr-6">
                            @else
                                <img src="{{ asset('/' . $product->image) }}" alt="{{ $product->name }}" class="h-96 w-auto object-contain rounded m-2">
                            @endif
                        @else
                            <div class="w-96 h-96 bg-gray-300 rounded mr-8"></div> <!-- Placeholder w razie braku obrazu -->
                        @endif

                        <!-- Informacje o produkcie -->
                        <div class="flex-1 ml-2 mt-4">
                            <h3 class="text-4xl font-bold text-gray-700 mb-6">{{ $product->name }}</h3>
                            <p class="text-gray-700 mt-2 text-lg">Typ: {{ $product->type }}</p>

                            <p class="text-gray-700 mt-6 text-2xl">{{ $product->description }}</p>
                            <p class="text-gray-700 text-2xl mt-6">{{ number_format($product->price, 2) }} PLN</p>
                            <!-- Dodanie produktu do koszyka -->
                            @if(Auth::check() && Auth::user()->is_admin)
                                <div class="pt-6 space-y-6">
                                    <!-- Formularz edycji -->
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button class="ml-2" type="submit" onclick="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                                            Usuń
                                        </x-danger-button>
                                    </form>
                                    <form action="{{ route('products.edit', $product->id) }}" method="GET" class="ml-2">
                                        <x-primary-button type="submit">
                                            Edytuj
                                        </x-primary-button>
                                    </form>
                            @elseif(Auth::check())
                                    <form action="{{ route('koszyk.store', $product->id) }}" method="POST" class="mt-6">
                                        @csrf
                                        <x-primary-button type="submit">
                                            Dodaj do koszyka
                                        </x-primary-button>
                                    </form>
                                    {{-- Przycisk dodaj do polubionych --}}
                                    <form action="{{ route('favorites.store', $product->id) }}" method="POST" class="mt-2">
                                        @csrf
                                        <x-primary-button>
                                            Dodaj do ulubionych
                                        </x-primary-button>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
                <!-- Link do powrotu do katalogu -->
                <div class="mt-6 flex justify-end items-center">
                    <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-gray-900 inline-block text-2xl p-6">
                        Powrót do katalogu
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
