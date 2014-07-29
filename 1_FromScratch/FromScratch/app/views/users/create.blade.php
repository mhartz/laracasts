@extends('layouts/default')

@section('content')
  <h1>Create new user</h1>

  {{ Form::open(['route' => 'users.store']) }}
    
    <div>
      {{ Form::label('username', 'Username') }}
      {{ Form::input('text', 'username') }}
      {{ $errors->first('username', '<span class=error>:message</span>') }}
    </div>
    <div>
      {{ Form::label('password', 'Password') }}
      {{ Form::text('password') }}
      {{ $errors->first('password', '<span class=error>:message</span>') }}

    </div>
    
    <div>
      {{ Form::submit('Create User') }}
    </div>
    
  {{ Form::close() }}
@stop