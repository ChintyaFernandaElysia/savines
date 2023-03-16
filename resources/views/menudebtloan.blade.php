@extends('layouts.app')
@section('title', 'Menu')
@section('contents')
<div class="menu">
    <div class="debtandloan">
        <a class="btn btn-danger btn-lg btn-block py-5 mb-3 mt-3" href="{{ route('debtloan') }}" role="button">Debt / Loan</a>
    </div>
    <div class="repaymentanddebtcollection">
        <a class="btn btn-success btn-lg btn-block py-5 mb-3 mt-3" href="{{ route('repaymentanddebtcollection') }}" role="button">Repayment / DebtCollection</a>
    </div>
    
</div>
@endsection


