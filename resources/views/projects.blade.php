
@extends('layouts.template')
@section('title', 'Programmatore - About')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-between">
            {{ __('Crea una Nuova idea di Progetto') }}
            <a href="/projects/create" class="btn btn-primary rounded-3">Crea una Nuova idea di Progetto</a>
        </h2>
        <br>
        <br>
        <br>
        <br>
        <br>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($projects)
                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <th>Scadenza</th>
                                <th></th>
                            </tr>

                            @foreach($projects as $p)
                                <tr>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->expiration_date}}</td>
                                    <td>
                                        <a href="/projects/{{$p->id}}" class="btn btn-success rounded-3">INFO-EDIT</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<@endsection