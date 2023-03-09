@extends('layouts.app')

@section('title', 'Notes')

@section('contents')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row justify-content-between">
        <div class="margin-tb d-flex align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Overall</h6>
        </div>
        <div class="margin-tb">
            <div class="pull-right">
            <button class="btn btn-primary" onCLick="create()">+ Add Data</button>
            </div>
        </div>
    </div>
    <div class="mx-3 mt-3">
        <table class="table table-bordered" style="width:100%">
            <tr>
                <th style="width:5%">No</th>
                <th style="width:10%">Date</th>
                <th style="width:15%">Title</th>
                <th style="width:25%">Description</th>
                <th style="width:5%">Action</th>
            </tr>
            @php($no = 1)
            @foreach ($notes as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->description }}</td>
                <td>
                    <button class="btn" onClick="show({{ $data->id }})"> 
                        <svg width="43" height="36" viewBox="0 0 43 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.0454102" width="42" height="36" rx="5" fill="#476BD3"/>
                            <path d="M20.0454 11H30.0454M20.0454 15H25.0454" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.0454 11H13.0454C12.4931 11 12.0454 11.4477 12.0454 12V14C12.0454 14.5523 12.4931 15 13.0454 15H15.0454C15.5977 15 16.0454 14.5523 16.0454 14V12C16.0454 11.4477 15.5977 11 15.0454 11Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.0454 21H30.0454M20.0454 25H25.0454" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.0454 21H13.0454C12.4931 21 12.0454 21.4477 12.0454 22V24C12.0454 24.5523 12.4931 25 13.0454 25H15.0454C15.5977 25 16.0454 24.5523 16.0454 24V22C16.0454 21.4477 15.5977 21 15.0454 21Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {!! $notes->links() !!}
</div>
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="page" class="p-2"></div>
            </div>
            </div>
        </div>
        </div>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script>
        // // Jquery ajax
        // $(document).ready(function(){
        //     read()
        // });

        // show database
        function read() {
            console.log('tekan read()')
            $.get("{{url('notes/read')}}", {}, function(data, status){
                $("#read").html(data);
            });

        }

        function create() {
            console.log('tekan create()')
            $.get("{{url('notes/create')}}", {}, function(data, status){
                $("#exampleModalLabel").html('Create Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        function store() {
            console.log('tekan store()')
            var name = $("#name").val();
            $.ajax({
                type : "get",
                url : "{{url('store')}}",
                data : "name=" + name,
                success:function(data){
                    $(".btn-close").click();
                    show();
                }
            });
        }

        function show(id) {
            console.log('tekan show()')
            $.get("{{url('notes')}}/" + id, {}, function(data, status){
                $("#exampleModalLabel").html('Edit Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }
    </script>
@endsection
  

