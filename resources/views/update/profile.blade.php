@extends('layouts.app')

@section('content')
{!! Form::model($user, ['url' => '/update_profile/' . $user->id, 'method' => 'put']) !!}
    <div class="form-group">
  {!! Form::label('name', 'Name') !!}
  <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  @if($errors->has('name'))
    <p class="text-danger">{{$errors->first('name')}}</p>
  @endif
</div>

<div class="form-group">
  {!! Form::label('address', 'Address') !!}
  <div class="form-controls">
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('phone', 'Phone') !!}
  <div class="form-controls">
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
  </div>
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
@endsection
