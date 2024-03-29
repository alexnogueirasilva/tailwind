@extends('layouts.app1')
@section('content')
    <div class="container mx-auto">
        <form class="w-full max-w-sm" action="{{route('membros.store')}}" method="POST">
            @csrf
            <div class="flex items-center border-b border-teal-500 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" name="nome" placeholder="Jane Doe" aria-label="Full name">
                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                    Cadastrar
                </button>
                <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="cancel">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
@endsection
