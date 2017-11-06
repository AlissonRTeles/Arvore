@extends('layouts.app')
@section('content')

<div class="container">
    <!-- um painel para cada sociedade -->
    @if (count($grupos) > 0)
    @foreach ($grupos as $grupo)
    @if ($grupo->grupo_ok=="S")
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$grupo->grupo_nome}}</div>

                <div class="panel-body">
        			<p>{{$grupo->grupo_membros}}</p>                    
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @endif
</div>
@endsection
