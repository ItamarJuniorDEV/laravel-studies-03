@extends('layouts.main_layout')
@section('content')

<h3>Este texto faz parte da view</h3>

{{-- renderizar o component --}}
<x-my-component />

{{-- renderizar o component que existe dentro da subpasta --}}
<x-admin.admin-card />

<h3>Este texto faz parte da view</h3>

@endsection