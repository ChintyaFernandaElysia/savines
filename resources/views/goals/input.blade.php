{{-- @extends('incomes.layout') --}}
  
{{-- @section('content') --}}
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Input amount</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('goals.addInput') }}" method="POST">
    @csrf
  
    <input type="text" name="user_id" id="user_id" value="{{ auth()->user()->id }}" hidden/>
    <input type="text" name="description" id="description" value="Goals" hidden/>
    <input type="date" name="date" placeholder="Date" value="{{ $date }}" hidden>
    <input type="text" name="status" placeholder="Status" value="Expense" hidden>

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <br>
                {{-- <input class="form-control" style="height:40px" name="status" placeholder="Status"> --}}
                <select class="block w-100 pt-2 pb-2 pl-2 mt-1" name="title">
                    @foreach ($goals as $data)
                    <option value="{{ $data->title }}">{{ $data->title }}</option>
                    @endforeach
                </select>

            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount :</strong>
                <input type="number" class="form-control" style="height:40px" name="amount" placeholder="amount">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
{{-- @endsection --}}