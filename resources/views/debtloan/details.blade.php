{{-- @extends('incomes.') --}}
  
{{-- @section('content') --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $data->status }} Detail</h2>
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
                <input type="date" class="form-control" style="height:40px" name="date" placeholder="Date" value="{{ $data->date }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Due Date:</strong>
                <input type="date" class="form-control" style="height:40px" name="due_date" placeholder="Due Date"value="{{ $data->due_date }}">
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
                    @if($data->status == "Debt")
                        <option selected value="Debt">Debt</option>
                    @else
                        <option value="Debt">Debt</option>
                    @endif

                    @if($data->status == "Loan")
                        <option selected value="Loan">Loan</option>
                    @else
                        <option value="Loan">Loan</option>
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

        <h2 class="mt-5">Person Data Detail</h2>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <textarea class="form-control" style="height:40px" name="person_name" placeholder="Name">{{ $data->person_name }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telp:</strong>
                <textarea class="form-control" style="height:40px" name="person_telp" placeholder="Telp">{{ $data->person_telp }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:40px" name="person_address" placeholder="Address">{{ $data->person_address }}</textarea>
            </div>
        </div>

        <h2 class="mt-5">Tracking Detail</h2>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
            <select class="form-control" name="tracking">
                @if($data->status == "Unpaid")
                <option selected value="Unpaid">Unpaid</option>
                @else
                <option value="Unpaid">Unpaid</option>
                @endif

                @if($data->tracking == "Paid")
                    <option selected value="Paid">Paid</option>
                @else
                    <option value="Paid">Paid</option>
                @endif
            </select>
        </div>
    </div>
    <div class="row">
        <button class="btn btn-success mt-2" onClick="update({{ $data->id }})"> Update </button>
        
        <a class="btn btn-danger" href="/debtloan/destroy/{{ $data->id }}">Delete</a>
    </div>
</form>
{{-- @endsection --}}