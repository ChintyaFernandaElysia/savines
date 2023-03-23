<div class="row mx-2" style="background-color: white">
    <div class="d-flex justify-content-between">
        <div class="margin-tb">
            Debt / Loan
        </div>
        <div class="margin-tb">
            <div class="pull-right">
                <button class="btn btn-success" onCLick="create()">+ Add Data</button>
            </div>
        </div>
    </div>

    <table class="table table-bordered" style="width:100%">
        <tr>
            <th style="width:5%">No</th>
            <th style="width:10%">Date</th>
            <th style="width:20%">Title</th>
            <th style="width:15%">Status</th>
            <th style="width:15%">Amount</th>
            <th style="width:8%">Action</th>
        </tr>
        @foreach ($debtloan as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->date }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->status }}</td>
            <td>{{ $data->amount }}</td>
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

{!! $debtloan->links() !!}
    

</div>