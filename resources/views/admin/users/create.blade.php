@extends('admin.layouts.app')

@section('title', 'Criar novo usuário')

@section('content')
    {{-- @include('admin.users.partials.breadcrumb') --}}
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100">
            Novo Usuário
        </h2>
    </div>
    {{-- @include('admin.includes.alerts') --}}
    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection
