@extends('layouts.app')
@section('content')

<div class="container">
    <!-- um painel para cada sociedade -->
    @if (count($tarefas) > 0)
    @foreach ($tarefas as $tarefa)
    
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$tarefa->tarefa_titulo}}</div>

                <div class="panel-body">
        			<p>{{$tarefa->tarefa_descricao}}</p>                    
                </div>
            </div>
        </div>
    </div>

    @endforeach
    @endif
</div>
@endsection
