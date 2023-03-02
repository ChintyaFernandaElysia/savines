@extends('layouts.app')

@section('title', 'Income')

@section('contents')
{{-- @extends('incomes.layout') --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
  
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('incomes.create') }}">+ Add Data</a> --}}
                <button class="btn btn-success" onCLick="create()">+ Add Data</button>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div id="read" class="mt-3">

    </div>

{!! $income->links() !!}

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
        // Jquery ajax
        $(document).ready(function(){
            read()
        });

        // show database
        function read() {
            console.log('tekan read()')
            $.get("{{url('incomes/read')}}", {}, function(data, status){
                $("#read").html(data);
            });

        }

        function create() {
            console.log('tekan create()')
            $.get("{{url('incomes/create')}}", {}, function(data, status){
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
            $.get("{{url('incomes')}}/" + id, {}, function(data, status){
                $("#exampleModalLabel").html('Edit Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }
    </script>
@endsection
  

