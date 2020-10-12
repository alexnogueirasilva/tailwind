@extends('layouts.app1')
@section('content')
<div class="container mx-auto">
        <table class="table-auto">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">Data Cadastro</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $membros as $membro)
            <tr>
                <td class="border px-4 py-2">{{$membro->id}}</td>
                <td class="border px-4 py-2">{{$membro->nome}}</td>
                <td class="border px-4 py-2">{{$membro->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    {{$membros->links()}}
</div>
@endsection

