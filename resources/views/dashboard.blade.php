@extends('partials.admin')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Dashboard</div>
  <div class="panel-body">
    <h6>Hi {!! auth()->user()->name !!}</h6>

  </div>
</div>

@endsection