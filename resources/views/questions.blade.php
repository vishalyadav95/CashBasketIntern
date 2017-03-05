@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Questions list</div>

                <div class="panel-body">
                    @foreach ($Questions as $question)
                      <p> {{ $question->tournment }} <?php $temp=explode(',',$question->teams);echo $temp['0'].' Vs '.$temp['1'];?> {{ $question->question }} </p>
                      <a href="{{ url('questions/'.$question->id.'/') }}">link</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
