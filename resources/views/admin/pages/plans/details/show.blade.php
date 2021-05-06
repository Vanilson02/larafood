@extends('adminlte::page')

@section('title',"Detalhe {$detail->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index',$plan->url) }}" class="active">Detalhes</a></li>
        <li class="breadcrumb-item">{{ $detail->name }}</li>
    </ol>
    @include('admin.includs.alert')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalhes do detalhe {{ $detail->name }}</h3>
        </div>
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong>{{ $detail->name }}
                </li>
                <li>
                    <strong>Plano: </strong>{{ $plan->name }}
                </li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{ route('details.plan.destroy',[$plan->url, $detail->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@endsection