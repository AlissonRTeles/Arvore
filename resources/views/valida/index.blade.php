@extends('layouts.app')
@section('content')

<div class="container">
    <!-- um painel para cada sociedade -->
    @if (count($grupos) > 0)
    @foreach ($grupos as $grupo)
    <div class="row">
        <form class="form-horizontal" method="post" action="{{action('ValidaController@update',$grupo->id)}}">
            {{ csrf_field() }}
            <!-- para o post funcionar tem que colocar esse comando eu nao entendi o pq -->
            <input type="hidden" name="_method" value="PUT">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$grupo->grupo_nome}} @if($grupo->grupo_ok == 'S')<span class="badge badge-pill badge-danger">Confirmado</span> @else <span class="badge badge-pill badge-danger">Aguardando</span> @endif</div>

                    <div class="panel-body">
            			<p>{{$grupo->grupo_membros}}</p>                    
                        <div class="form-group">
                            
                            <div class="col-md-1 col-md-offset-1">
                                <input type="submit" class="btn btn-primary" name="reprovar" value="Reprovar">
                            </div>

                            <div class="col-md-1 col-md-offset-1">
                                <input type="submit" class="btn btn-primary" name="aprovar" value="Aprovar">
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
