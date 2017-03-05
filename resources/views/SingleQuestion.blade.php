@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $Question->tournment }} <?php $temp=explode(',',$Question->teams);echo $temp['0'].' Vs '.$temp['1'];?> {{ $Question->question }}</div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url($Link) }}">
                      {{ csrf_field() }}
                      <?php $temp=explode(',',$Question->options);?>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                            <label>
                              @foreach ($temp as $option)
                                <input type="radio" name="{{ $option }}" {{ old($option) ? 'checked' : '' }} value="{{ $option }}"> {{ $option }}
                                <br />
                              @endforeach
                            </label>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Submit My Answer
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
