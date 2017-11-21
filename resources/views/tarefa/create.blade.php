@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Tarefa</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{action('TarefaController@store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <label for="name" class="col-md-4 control-label">Título da Tarefa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>   
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="name" class="col-md-4 control-label">Descrição da Tarefa</label>

                            <div class="col-md-6">
                                <textarea id="descricao" cols="50" class="form-control" name="descricao"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
