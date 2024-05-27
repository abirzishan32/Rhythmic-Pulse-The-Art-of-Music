
@extends('layouts.app')
@section('content')

<div class="event-ticket">
    <div>
      <h3>
        MERCH ORDER
      </h3>
    </div>
  </div>
    <table class="table event-table">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Address</th>
                <th>Currency</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->transaction_id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->currency }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection
