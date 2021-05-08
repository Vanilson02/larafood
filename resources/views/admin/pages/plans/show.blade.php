@extends('adminlte::page')

@section('title',"Detalhes do Plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"> Plano: {{ $plan->name}} </li>

    </ol>
    @include('admin.includs.alert')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">   
            <h3>{{ $plan->name}}</h3><a href="{{ route('details.plan.index', $plan->url)}}" class="btn btn-dark">Detalhes</a>
        </div>
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $plan->name }}
                </li>
                <li>
                    <strong>URL: </strong> {{ $plan->url }}
                </li>
                <li>
                    <strong>Preço: </strong> R$ {{ number_format($plan->price, 2, ',', '.') }}
                </li>
                <li>
                    <strong>Decrição: </strong> {{ $plan->description }}
                </li>
            </ul>
            
        </div>
        <div class="card-footer">
            <form action="{{ route('plans.destroy',$plan->url) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><span class="fas fa-trash-alt">Apagar</span></button>
            </form>
        </div>
    </div>
@endsection