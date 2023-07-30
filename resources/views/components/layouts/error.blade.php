<x-layouts.base>
    <div
        class="relative flex items-top justify-center min-h-screen bg-[#EDEDED] sm:items-center sm:pt-0">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="flex mb-2 items-center justify-center pt-8 sm:pt-0">
                <div class="px-4 text-2xl text-base-600 border-r border-base-600 tracking-wider">
                    {{ $code }}
                </div>

                <div class="ml-4 text-2xl text-base-600 uppercase tracking-wider">
                    {{ $title }}
                </div>
            </div>
            <p class="text-center font-light text-base-600 py-2 text-lg">{{ $message }}
                <br>ke <a class="text-[#60D072]" href="{{ url('/') }}">Halaman
                    Utama</a>
            </p>
        </div>
    </div>
</x-layouts.base>
