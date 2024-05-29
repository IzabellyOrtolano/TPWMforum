@extends('layouts.gpt')

@section('header', 'Listar Usuários')

@section('section1')
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>João Silva</td>
            <td>joao@example.com</td>
        </tr>
        <tr>
            <td>Maria Santos</td>
            <td>maria@example.com</td>
        </tr>
        
    </tbody>
</table>
@endsection
