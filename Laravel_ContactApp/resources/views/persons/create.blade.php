@extends('persons.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('persons.index') }}"> Go back </a>
            </div>
        </div>
    </div>

    <form action="{{ route('persons.store') }}" method="POST">
        @csrf
        <div class="row">

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Phonenumber:</strong>
                    <input type="number" name="phonenumber" class="form-control" placeholder="Phonenumber">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <button type="submit" class="btn- btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </form>
@endsection
