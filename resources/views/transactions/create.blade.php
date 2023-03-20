
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Transaction</h2>
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
   
<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
  
    <input type="text" name="user_id" id="user_id" value="{{ auth()->user()->id }}" hidden/>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" class="form-control" style="height:40px" name="date" placeholder="Date">
                {{-- <input type="text" id="datepicker" class="form-control" style="height:40px" name="date" placeholder="date"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input class="form-control" style="height:40px" name="title" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <br>
                {{-- <input class="form-control" style="height:40px" name="status" placeholder="Status"> --}}
                <select class="block w-100 pt-2 pb-2 pl-2 mt-1" name="status">
                    <option value="Expense">Expense</option>
                    <option value="Income">Income</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
                <input class="form-control" style="height:40px" name="amount" placeholder="Amount">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {{-- <script type="text/javascript">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css">
    <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
        </script> --}}

  
