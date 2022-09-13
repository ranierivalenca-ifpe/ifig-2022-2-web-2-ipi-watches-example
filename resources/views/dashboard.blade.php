<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <h1 class="text-lg">Here your watches</h1>
                    @foreach (Auth::user()->watches as $watch)
                        <div class="border border-black">
                            {{$watch}}
                        </div>
                    @endforeach
                    <div class="border border-black">
                        <a href="/add-watch">Adicionar</a>
                    </div>
                    <h1 class="text-lg mt-4">Here your types</h1>
                    @foreach (\App\Models\Type::all() as $type)
                        <div class="border border-black">
                            {{$type}}
                        </div>
                    @endforeach
                    <div class="border border-black">
                        <a href="/add-type">Adicionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
