@extends('layouts.app')

@section('title', 'Expense')

@section('contents')
@extends('expenses.layout')

    <div class="row">
        <div class="col-lg-12 margin-tb">
  
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('expenses.create') }}"> Create New Expense</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Title</th>
            <th>Amount</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($expenses as $expense)
        <tr>
            <td>{{ $expense->id }}</td>
            <td>{{ $date}}</td>
            <td>{{ $expense->title }}</td>
            <td>{{ $expense->amount }}</td>
            <td>{{ $expense->description }}</td>
            <td>
                <form action="{{ route('expenses.destroy',$expense->id) }}" method="POST">

                    {{-- <a class="btn btn-info" href="{{ route('expenses',$expense->id) }}">Show</a> --}}

                    <a class="btn btn-primary" href="{{ route('expenses.edit',$expense->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $expenses->links() !!}
    @endsection
  

