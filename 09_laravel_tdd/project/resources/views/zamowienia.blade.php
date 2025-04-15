@if(Auth::check() && Auth::user()->is_admin)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Zamówienia') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Data zamówienia</th>
                                <th class="border border-gray-300 px-4 py-2">Użytkownik</th>
                                <th class="border border-gray-300 px-4 py-2">Produkty</th>
                                <th class="border border-gray-300 px-4 py-2">Łączna kwota</th>
                                <th class="border border-gray-300 px-4 py-2">Status</th>
                                <th class="border border-gray-300 px-4 py-2">Akcje</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $order->id }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $order->user->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <ul>
                                            @foreach ($order->products as $product)
                                                <li>{{ $product['name'] }} ({{ $product['quantity'] }} szt.)</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">{{ number_format($order->total_price, 2) }} PLN</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $order->status }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <select name="status">
                                                <option value="oczekujące" {{ $order->status == 'oczekujące' ? 'selected' : '' }}>oczekujące</option>
                                                <option value="realizowane" {{ $order->status == 'realizowane' ? 'selected' : '' }}>realizowane</option>
                                                <option value="wysłane" {{ $order->status == 'wysłane' ? 'selected' : '' }}>wysłane</option>
                                                <option value="anulowane" {{ $order->status == 'anulowane' ? 'selected' : '' }}>anulowane</option>
                                            </select>
                                            <button type="submit" class="text-blue-500">Zaktualizuj</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@else
    <x-app-layout>
        <div class="text-center mt-10">
            <h2 class="text-2xl font-bold text-red-600">Brak uprawnień.</h2>
            <p class="text-gray-600 mt-4">Nie masz wystarczających uprawnień, aby zobaczyć tę stronę.</p>
            <a href="{{ route('dashboard') }}" class="mt-4 inline-block text-blue-500 hover:text-blue-700">Wróć do strony głównej</a>
        </div>
    </x-app-layout>
@endif
