<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Date</th>
        <th>Title</th>
        <th>Amount</th>
        <th>Description</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($incomes as $income)
    <tr>
        <td>{{ $income->id }}</td>
        <td>{{ $date }}</td>
        <td>{{ $income->title }}</td>
        <td>{{ $income->amount }}</td>
        <td>{{ $income->description }}</td>
        <td>
            <button class="btn" onClick="show({{ $income->id }})"> Details </button>
        </td>
    </tr>
    @endforeach
</table>

{!! $incomes->links() !!}