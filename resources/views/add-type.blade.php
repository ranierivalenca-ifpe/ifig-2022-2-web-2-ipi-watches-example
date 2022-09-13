<x-app-layout>
    <x-slot name="header">
        Adicionar tipo
    </x-slot>
    <form action="/add-type" method="POST">
        @csrf
        <x-text-input name="type" placeholder="type" />
        <button>Enviar</button>
    </form>
</x-app-layout>