{{-- @extends('incomes.') --}}
  
{{-- @section('content') --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Transaction Detail</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your textarea.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('transactions.update',$data->id) }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" class="form-control" style="height:40px" name="date" placeholder="Date" value="{{ $data->date }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <textarea class="form-control" style="height:40px" name="title" placeholder="Title">{{ $data->title }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <br>
                {{-- <textarea class="form-control" style="height:40px" name="status" placeholder="Status"> --}}
                <select class="form-control" name="status">
                    @if($data->status == "Expense")
                        <option selected value="Expense">Expense</option>
                    @else
                        <option value="Expense">Expense</option>
                    @endif

                    @if($data->status == "Income")
                        <option selected value="Income">Income</option>
                    @else
                        <option value="Income">Income</option>
                    @endif

                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
                <textarea class="form-control" style="height:40px" name="amount" placeholder="Amount">{{ $data->amount }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $data->description }}</textarea>
            </div>
        </div>
    </div>
    
    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $data->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $data->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
                {{ $data->amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $data->description }}
            </div>
        </div>
    </div> --}}

    <div class="row">
        <button class="btn btn-success mt-2" onClick="update({{ $data->id }})"> Update </button>
        
        <a class="btn btn-danger" href="/transactions/destroy/{{ $data->id }}">Delete</a>
    </div>
</form>
{{-- @endsection --}}