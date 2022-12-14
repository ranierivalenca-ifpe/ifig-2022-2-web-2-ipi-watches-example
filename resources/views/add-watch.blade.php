<x-app-layout>
    <x-slot name="header">
        Adicionar relógio
    </x-slot>
    <form action="/add-watch" method="POST">
        @csrf
        <x-text-input name="size" placeholder="size" />
        <!-- <x-text-input name="type" placeholder="type" /> -->
        <select name="type">
            @foreach (\App\Models\Type::all() as $type)
                <option value={{$type->id}}>{{$type->type}}</option>
            @endforeach
        </select>
        <button>Enviar</button>
    </form>
</x-app-layout>