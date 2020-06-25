@extends('.layouts.master')

@section('content')
<!-- start GRID -->
<section>
    <h1>Back-Office <span class="yellow">Refunds</span></h1>

    <table class="container">
        <thead>
        <tr>
            <th><h1>Reference</h1></th>
            <th><h1>First Name</h1></th>
            <th><h1>Last Name</h1></th>
            <th><h1>email</h1></th>
            <th><h1>Transaction date</h1></th>
            <th><h1>Amount</h1></th>
            <th><h1>Amount Currency</h1></th>
            <th><h1>Status</h1></th>
            <th><h1>Created at</h1></th>
        </tr>
        </thead>
        <tbody>
        @foreach($refunds as $refund)
            <tr>
                <td>{{$refund->reference}}</td>
                <td>{{$refund->first_name}}</td>
                <td>{{$refund->last_name}}</td>
                <td>{{$refund->email}}</td>
                <td>{{$refund->transaction_date}}</td>
                <td>{{$refund->amount}}</td>
                <td>{{$refund->amount_currency}}</td>
                <td>{{$refund->status}}</td>
                <td>{{$refund->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
@stop
