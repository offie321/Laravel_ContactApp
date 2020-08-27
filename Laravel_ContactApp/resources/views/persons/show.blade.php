@extends('persons.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('persons.index') }}"> Go back </a>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $person->name }}
            </div>
        </div>

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $person->email }}
            </div>
        </div>

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Phonenumber:</strong>
                {{ $person->phonenumber }}
            </div>
        </div>

    </div>
@endsection
