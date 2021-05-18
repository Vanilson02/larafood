@extends('adminlte::page')

@section('title',"Detalhes do Perfil {$profile->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfil</a></li>
        <li class="breadcrumb-item"> Perfil: {{ $profile->name}} </li>

    </ol>
    @include('admin.includs.alert')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">  
            {{ $profile->name}} 
        </div>
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $profile->name }}
                </li>
                
                <li>
                    <strong>Decrição: </strong> {{ $profile->description }}
                </li>
            </ul>
            
        </div>
        <div class="card-footer">
            <form action="{{ route('profiles.destroy',$profile->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><span class="fas fa-trash-alt">Apagar</span></button>
            </form>
        </div>
    </div>
@endsection