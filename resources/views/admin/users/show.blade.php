@extends('admin.layouts.app')
@section('title', 'Detalhes do usuário')
@section('content')
    <h1>Novo Usuário</h1>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>
    <x-alert/>

    <!-- @can('is-owner', $user)
        Usu�rio liberado para Deletar
    @endcan -->

    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Excluir</button>
    </form>
    @endcan
@endsection