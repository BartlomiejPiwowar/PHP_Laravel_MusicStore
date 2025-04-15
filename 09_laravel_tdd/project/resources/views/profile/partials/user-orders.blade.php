<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Moje zamówienia') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Przeglądaj swoje złożone zamówienia.') }}
        </p>
    </header>

    <div class="mt-6">
        @if ($orders->isEmpty())
            <p class="text-sm text-gray-600">Nie masz jeszcze żadnych zamówień.</p>
        @else
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Data zamówienia</th>
                    <th class="border border-gray-300 px-4 py-2">Produkty</th>
                    <th class="border border-gray-300 px-4 py-2">Łączna Kwota</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $order->created_at->format('d-m-Y H:i') }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <ul>
                                @foreach ($order->products as $product)
                                    <li>{{ $product['name'] }} ({{ $product['quantity'] }} szt.)</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($order->total_price, 2) }} PLN</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $order->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</section>
