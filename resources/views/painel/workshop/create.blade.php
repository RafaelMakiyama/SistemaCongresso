@extends('painel.layout')

@section('conteudo')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Cadastrar Workshop</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('workshop.store') }}" method="post">
            @csrf

            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input  placeholder="Nome" type="text" name="name" id="name" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Vagas</label>
                            <div class="col-sm-5">
                                <input type="number" name="vacancies" id="vacancies" class="form-control" placeholder=".col-md-2">

                            </div>
                           </div>
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                         </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Carga horária</label>
                    <div class="col-sm-10">
                        <input type="number" name="workload" id="workload" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Periodo</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="period" id="period">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea id="console" name="description" id="description" class="form-control" rows="8"></textarea><br>

                    </div>
                </div>



            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Cadastrar</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>


@endsection
