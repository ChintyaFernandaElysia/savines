@extends('layouts.app')

@section('title', 'Income')

@section('contents')
@extends('incomes.layout')

    <div class="row">
        <div class="col-lg-12 margin-tb">
  
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('incomes.create') }}"> Create New Income</a>
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
            <th>Title</th>
            <th>Amount</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($incomes as $income)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $income->title }}</td>
            <td>{{ $income->amount }}</td>
            <td>{{ $income->description }}</td>
            <td>
                <form action="{{ route('incomes.destroy',$income->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('incomes.show',$income->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('incomes.edit',$income->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $incomes->links() !!}
    @endsection
  

