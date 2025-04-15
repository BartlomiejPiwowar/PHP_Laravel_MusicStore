<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-100 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
