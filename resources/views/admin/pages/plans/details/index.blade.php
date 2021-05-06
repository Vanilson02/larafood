@extends('adminlte::page')

@section('title',"Detalhes do Plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item">Detalhes</li>
    </ol>
    @include('admin.includs.alert')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalhes <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark">adicionar novo</a></h3>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{ $detail->name }}</td>
                            <td style="width:20px;">
                                <a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class="btn btn-dark"><i class="fas fa-search-plus"></i></a>
                            </td>
                            <td style="width:20px;">
                                <a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>  
            </table>       
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif  
        </div>
    </div>
@endsection