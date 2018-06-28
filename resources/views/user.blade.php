@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                <table class="table">
                  {!! Form::model($user, ['route' => ['user.update'], 'method' => 'POST']) !!}
                  <tr><th colspan=2>My data</th></tr>
                    <tr>
                        <td>Name</td>
                        <td>{!! Form::text('name', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>E-mail address</td>
                        <td>{!! Form::text('email', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr><td colspan=2>{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}</td></tr>
                  {!! Form::close() !!}
                </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
