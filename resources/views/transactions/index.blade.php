@extends('layouts.app')

@section('title', 'Transactions')

@section('contents')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="card shadow mb-4">
    <div class="card-header py-2 d-flex flex-row justify-content-between">
        <div class="margin-tb d-flex align-items-center">
            <h6 class="m-0 font-weight-bold text-success">Overall</h6>
        </div>
        <div class="margin-tb">
            <div class="pull-right">
                <button class="btn btn-success" onCLick="create()">+ Add Data</button>
            </div>
        </div>
    </div>
    <div class="mx-3 mt-3">
        <table class="table table-bordered" style="width:100%">
            <tr>
                <th style="width:5%">No</th>
                <th style="width:10%">Date</th>
                <th style="width:20%">Title</th>
                <th style="width:15%">Status</th>
                <th style="width:15%">Amount</th>
                <th style="width:8%">Action</th>
            </tr>
            @php($no = 1)
            @foreach ($transactions as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->status }}</td> 
                <td>{{ 'Rp '.number_format($data->amount, 0, ',', '.') }}</td>
                <td>
                    <button class="btn" onClick="show({{ $data->id }})"> 
                        <svg width="42" height="36" viewBox="0 0 42 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="42" height="36" rx="5" fill="#44CD9D"/>
                            <path d="M20 11H30M20 15H25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 11H13C12.4477 11 12 11.4477 12 12V14C12 14.5523 12.4477 15 13 15H15C15.5523 15 16 14.5523 16 14V12C16 11.4477 15.5523 11 15 11Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 21H30M20 25H25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 21H13C12.4477 21 12 21.4477 12 22V24C12 24.5523 12.4477 25 13 25H15C15.5523 25 16 24.5523 16 24V22C16 21.4477 15.5523 21 15 21Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
        <div>
        </div>
    </div>
</div>

{!! $transactions->links() !!}

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
</div>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script>
        function read() {
            console.log('tekan read()')
            $.get("{{url('transactions/read')}}", {}, function(data, status){
                $("#read").html(data);
            });

        }

        function create() {
            console.log('tekan create()')
            $.get("{{url('transactions/create')}}", {}, function(data, status){
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
            $.get("{{url('transactions')}}/" + id, {}, function(data, status){
                $("#exampleModalLabel").html('Edit Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }
    </script>
@endsection


