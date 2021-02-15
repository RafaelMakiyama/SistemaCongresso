@extends('painel.layout')

@section('conteudo')


<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">WORKSHOP</h2>
            <a href="{{ route('workshop.create') }}">
            <button type="button" class="btn btn-info float-right" style="margin-right: 5px;">
                <i class="fas fa-plus-square"> </i> Adicionar Workshop
            </button>
            </a>

        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <a href="#" class="btn btn-primary-outline pull-right">Arrange a Valuation</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Periodo</th>
                    <th>Nº de vagas</th>
                    <th>Carga horária</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                </thead>
                <tbody>
                @foreach($workshops as $workshop)
                <tr>
                    <td>{{ $workshop->id }}</td>
                    <td>{{ $workshop->name }}</td>
                    <td>{{ $workshop->period }}</td>
                    <td>{{ $workshop->vacancies }}</td>
                    <td>{{ $workshop->workload  }}</td>
                    <td>{{ Str::limit($workshop->description, 40)  }}</td>
                    <td> <a class="btn btn-default m-r-sm" href="{{ route('workshop.edit', $workshop->id) }}"><i class="fa fa-edit"></i> </td>
                    <td><a class="btn btn-default m-r-sm" href="{{ route('workshop.delete', $workshop->id) }}"><i class="fa fa-trash"></i> </td

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

</div>
</div>


@endsection
