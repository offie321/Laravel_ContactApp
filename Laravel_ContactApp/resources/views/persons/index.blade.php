@extends('persons.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('persons.create') }}"> Add New Person</a>
            </div>
        </div>

    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phonenumber</th>
        </tr>
        @foreach($persons as $key => $person)
            <tr>
                <td>{{ ++$i }}</td>
                <td> {{$person->name }} </td>
                <td> {{$person->email }} </td>
                <td> {{$person->phonenumber }} </td>
                <td>
                <form action="{{route('persons.destroy', $person->id)}}" method="POST">
                    <a class="btn btn-info" href="{{ route('persons.show', $person->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('persons.edit', $person->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>

        @endforeach
    </table>
@endsection
