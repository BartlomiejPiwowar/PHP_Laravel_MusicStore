<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Sklep') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl p-2">Nasze produkty</h1>
                        <!-- Wyśrodkowany Przycisk Dodaj Produkt -->
                        @if(Auth::check() && Auth::user()->is_admin)
                            <a href="{{ route('books.create') }}"
                               class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                                Dodaj nowy
                            </a>
                        @endif
                    </div>


                    {{-- Formularz filtrowania produktów po typie --}}
                    <form action="{{ route('products.index') }}" method="GET" class="mb-4">
                        <select name="type" class="px-12 py-3 border rounded focus:outline-none focus:ring-1 focus:ring-gray-300 bg-white text-gray-700 hover:bg-gray-100">
                            <option value="">Wybierz typ produktu</option>
                            <option value="Instrumenty smyczkowe" {{ request('type') == 'Instrumenty smyczkowe' ? 'selected' : '' }}>Instrumenty smyczkowe</option>
                            <option value="Instrumenty klawiszowe" {{ request('type') == 'Instrumenty klawiszowe' ? 'selected' : '' }}>Instrumenty klawiszowe</option>
                            <option value="Instrumenty strunowe" {{ request('type') == 'Instrumenty strunowe' ? 'selected' : '' }}>Instrumenty strunowe</option>
                            <option value="Instrumenty dęte" {{ request('type') == 'Instrumenty dęte' ? 'selected' : '' }}>Instrumenty dęte</option>
                            <option value="Instrumenty perkusyjne" {{ request('type') == 'Instrumenty perkusyjne' ? 'selected' : '' }}>Instrumenty perkusyjne</option>
                            <option value="Płyty" {{ request('type') == 'Płyty' ? 'selected' : '' }}>Płyty</option>
                            <option value="Śpiewniki" {{ request('type') == 'Śpiewniki' ? 'selected' : '' }}>Śpiewniki</option>
                            <option value="Inne" {{ request('type') == 'Inne' ? 'selected' : '' }}>Inne</option>
                        </select>
                        <x-primary-button type="submit">Filtruj</x-primary-button>
                    </form>

                    {{-- Wyświetlanie produktów --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @if($products->isEmpty())
                            <p>Wszystko wyprzedane! Przepraszamy.</p>
                        @else
                            @foreach ($products as $product)
                                <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col relative justify-center items-center  h-full">
                                    {{-- Sprawdzanie, czy obrazek to URL lub lokalny plik --}}
                                    <a href="{{ route('products.show', $product->id) }}" class="mt-4 text-gray-900 hover:text-gray-700 flex-grow">
                                        @if ($product->image)
                                            @if (filter_var($product->image, FILTER_VALIDATE_URL))
                                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-auto h-48 object-contain  justify-center my-auto mx-auto  rounded">
                                            @else
                                                <img src="{{ asset('/' . $product->image) }}" alt="{{ $product->name }}" class="w-auto h-48 object-contain justify-center my-auto mx-auto rounded">
                                            @endif
                                        @else
                                            <div class="w-48 h-48 bg-gray-300 rounded mr-8">
{{--
                                                <img src="/gitara.jpg" class="w-auto h-48 object-contain justify-center my-auto mx-auto rounded">
--}}
                                            </div> <!-- Placeholder w razie braku obrazu -->
                                        @endif
                                        <h3 class="text-xl font-bold text-gray-700">{{ $product->name }}</h3>
                                        <p class="text-gray-500 mt-4">{{ $product->description }}</p>
                                        <p class="text-gray-700 font-bold mt-4 mb-4 pt-6">{{ number_format($product->price, 2) }} PLN</p>
                                    </a>
                                    <div class="mt-auto flex justify-center">
                                        {{-- Przycisk edycji produktu --}}
                                        @if(Auth::check() && Auth::user()->is_admin)
                                            <!-- Formularz edycji -->
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button type="submit" onclick="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                                                    Usuń
                                                </x-danger-button>
                                            </form>
                                            <form action="{{ route('products.edit', $product->id) }}" method="GET" class="ml-2">
                                                <x-primary-button type="submit">
                                                    Edytuj
                                                </x-primary-button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
