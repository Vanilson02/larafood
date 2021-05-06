@extends('adminlte::page')

@section('title','Adicionar novo detalhe ao plano')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index',$plan->url) }}" class="active">Detalhes</a></li>
        <li class="breadcrumb-item">Editar: {{ $detail->name }}</li>

    </ol>
    <h1>Adicionar novo detalhe ao plano {{ $plan->name }}</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('details.plan.update', [$plan->url, $detail->id]) }}" method="post">
                @method('PUT')
                @include('admin.pages.plans.details._partialsDetails.form')
            </form>
        </div>
    </div>
@endsection