@extends('layouts.app')

@section('content')
{!! Form::model($user, ['url' => '/change_password' . $user->id, 'method' => 'post']) !!}
   
<div class="form-group">
  {!! Form::label('password', 'Password') !!}
  <div class="form-controls">
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
  </div>
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
@endsection