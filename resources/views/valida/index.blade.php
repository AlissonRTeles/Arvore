@extends('layouts.app')
@section('content')

<div class="container">
    <!-- um painel para cada sociedade -->
    @if (count($grupos) > 0)
    @foreach ($grupos as $grupo)
    @if ($grupo->grupo_ok=="N")
    <div class="row">
        <form class="form-horizontal" method="post" action="{{action('ValidaController@update',$grupo->id)}}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$grupo->grupo_nome}}</div>

                    <div class="panel-body">
            			<p>{{$grupo->grupo_membros}}</p>                    
                        <div class="form-group">
                            <div class="col-md-1 col-md-offset-10">
                                <button type="submit" class="btn btn-primary">
                                    Aprovar
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    @endif
    @endforeach
    @endif
</div>
@endsection
