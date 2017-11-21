@extends('layouts.app')
@section('content')

<div class="container">
        
    <!--  area de mensagem de upload-->
    <div class="alert alert-success">
        Upload realizado com sucesso!
    </div>
    
    <!-- um painel para cada sociedade -->
    @if (count($tarefas) > 0)
        @foreach ($tarefas as $tarefa)
            <div class="row">

                <form class="form-horizontal" method="post" action="route('fase')" enctype="multipart/form-data">
                    {{ csrf_field() }}   

                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$tarefa->tarefa_titulo}}</div>

                            <div class="panel-body">
                    			<p>{{$tarefa->tarefa_descricao}}</p>

                                <div class="form-group">
                                    <div class="col-md-1 col-md-offset-1">
                                        <input type="file" class="form-control-file" name="file">
                                    </div>                                    
                                    <div class="col-md-1 col-md-offset-10">
                                    <div class="col-md-1 col-md-offset-1">
                                        <input type="submit" class="btn btn-primary" name="aprovar" value="Upload">
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        @endforeach
    @endif
</div>
@endsection
