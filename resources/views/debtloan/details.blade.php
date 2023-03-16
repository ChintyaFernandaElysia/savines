{{-- @extends('incomes.') --}}
  
{{-- @section('content') --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Debt / Loan Detail</h2>
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

<form action="{{ route('debtloan.update',$data->id) }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" class="form-control" style="height:40px" name="date" placeholder="Date">{{ $data->date }}
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
                <select class="block w-100 pt-2 pb-2 pl-2 mt-1" name="status">
                    @if($data->status == "Expense")
                        <option selected value="Income">Expense</option>
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
        <h2>Person Data</h2>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <textarea class="form-control" style="height:40px" name="name" placeholder="Name">{{ $data->name }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <textarea class="form-control" style="height:40px" name="gender" placeholder="Gender">{{ $data->gender }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telp:</strong>
                <textarea class="form-control" style="height:40px" name="telp" placeholder="Telp">{{ $data->telp }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:40px" name="address" placeholder="Address">{{ $data->address }}</textarea>
            </div>
        </div>
        
    </div>
    <div class="row">
        <button class="btn btn-success mt-2" onClick="update({{ $data->id }})"> Update </button>
        
        <a class="btn btn-danger" href="/debtloan/destroy/{{ $data->id }}">Delete</a>
    </div>
</form>
{{-- @endsection --}}