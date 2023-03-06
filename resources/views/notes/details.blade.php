    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Note Detail</h2>
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

<form action="{{ route('notes.update',$data->id) }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <textarea class="form-control" style="height:40px" name="date" placeholder="Date">{{ $date }}</textarea>
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
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $data->description }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <button class="btn btn-success mt-2" onClick="update({{ $data->id }})"> Update </button>
        
        <a class="btn btn-danger" href="/notes/destroy/{{ $data->id }}">Delete</a>
    </div>
</form>