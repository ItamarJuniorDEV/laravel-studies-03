@extends('layouts.main_layout')
@section('content')

<h3>Este texto faz parte da view</h3>

{{-- renderizar o component --}}
<x-my-component message="Mensagem aqui" />

{{-- renderizar o component que existe dentro da subpasta --}}
<x-admin.admin-card :name="$myName" teste="Olá mundo" />

<h3>Este texto faz parte da view</h3>

<p>{{ $myName }}</p>

@endsection