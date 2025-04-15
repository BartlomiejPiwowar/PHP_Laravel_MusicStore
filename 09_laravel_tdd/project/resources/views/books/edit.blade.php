<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edycja Produktu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Formularz AKTUALIZACJI!! produktu -->
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" class="flex items-center">
                        @csrf
                        @method('PUT')

                        <!-- Kolumna po lewej stronie (formularz edycji) -->
                        <div class="w-2/3 pr-4">
                            <!-- Nazwa produktu -->
                            <div>
                                <x-input-label for="name" :value="__('Product Name')"/>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$product->name" style="width: 100%;"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <!-- Cena produktu -->
                            <div class="mt-4">
                                <x-input-label for="price" :value="__('Price')"/>
                                <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" step="0.01" :value="$product->price" style="width: 100%;"/>
                                <x-input-error :messages="$errors->get('price')" class="mt-2"/>
                            </div>

                            <!-- Opis produktu -->
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')"/>
                                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$product->description" style="width: 100%;"/>
                                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                            </div>

                            <!-- Typ produktu -->
                            <div class="mt-4">
                                <x-input-label for="type" :value="__('Product Type')"/>
                                <select id="type" name="type" class="block mt-1 w-full" style="width: 100%;">
                                    <option value="Instrumenty smyczkowe" {{ $product->type == 'Instrumenty smyczkowe' ? 'selected' : '' }}>Instrumenty smyczkowe</option>
                                    <option value="Instrumenty klawiszowe" {{ $product->type == 'Instrumenty klawiszowe' ? 'selected' : '' }}>Instrumenty klawiszowe</option>
                                    <option value="Instrumenty strunowe" {{ $product->type == 'Instrumenty strunowe' ? 'selected' : '' }}>Instrumenty strunowe</option>
                                    <option value="Instrumenty dęte" {{ $product->type == 'Instrumenty dęte' ? 'selected' : '' }}>Instrumenty dęte</option>
                                    <option value="Instrumenty perkusyjne" {{ $product->type == 'Instrumenty perkusyjne' ? 'selected' : '' }}>Instrumenty perkusyjne</option>
                                    <option value="Płyty" {{ $product->type == 'Płyty' ? 'selected' : '' }}>Płyty</option>
                                    <option value="Śpiewniki" {{ $product->type == 'Śpiewniki' ? 'selected' : '' }}>Śpiewniki</option>
                                    <option value="Inne" {{ $product->type == 'Inne' ? 'selected' : '' }}>Inne</option>
                                </select>
                                <x-input-error :messages="$errors->get('type')" class="mt-2"/>
                            </div>

                            <!-- Przesyłanie obrazu -->
                            <div class="mt-4">
                                <x-input-label for="image" :value="__('Product Image')"/>
                                <input type="file" id="image" name="image" class="form-input mt-1 block w-full" style="width: 100%;"/>
                                <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                            </div>

                            <!-- Przycisk do zapisania zmian -->
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button type="submit" class="ms-4">
                                    Zatwierdź
                                </x-primary-button>
                            </div>
                        </div>

                        <!-- Kolumna po prawej stronie (zdjęcie produktu) -->
                        <div class="w-1/3 ml-auto">
                            @if ($product->image)
                                @if (filter_var($product->image, FILTER_VALIDATE_URL)) <!-- Sprawdzanie, czy to URL -->
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-96 h-96 object-cover rounded mr-6">
                                @else
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-96 h-96 object-cover rounded m-2">
                                @endif
                            @else
                                <div class="w-96 h-96 bg-gray-300 rounded mr-8"></div> <!-- Placeholder w razie braku obrazu -->
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
