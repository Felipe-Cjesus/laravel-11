@extends('admin.layouts.app')
@section('title', 'Listagem dos usu�rios')
@section('content')
<h1>Usu�rios</h1>
    
    <a href="{{ route('users.create') }}">Novo</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>-</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usua?rio cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection