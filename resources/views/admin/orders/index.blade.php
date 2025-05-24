@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-dark text-center">List of All Customer Details</h2>
    
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Delivery Address</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Date</th>
                    <th scope="col">Show Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                @php
                $total = $order->orderItems->sum(fn($item) => $item->quantity * $item->price);
                @endphp
                <tr>
                    <td class="text-center fw-bold">{{ $order->id }}</td>
                    <td>{{ $order->full_name }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->delivery_address }}</td>
                    <td class="text-success fw-semibold">${{ number_format($total, 2) }}</td>
                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('admin.orders.index', ['selected' => $order->id]) }}"
                            class="btn btn-sm btn-outline-primary">
                            Show
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $orders->links() }}
    </div>

    @if(request('selected'))
    @php
    $selectedOrder = $orders->where('id', request('selected'))->first();
    @endphp
    @if($selectedOrder)
    <hr class="my-5">
    <h3 class="text-dark text-center mb-3"> Products Ordered</h3>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>

                </tr>
            </thead>
            <tbody>
                @foreach($selectedOrder->orderItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->product->category->name ?? 'No Category' }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <p class="text-danger fw-bold text-center"> Order not found.</p>
    @endif
    @endif
</div>
<!-- {{ $orders->appends(request()->all())->links() }} -->
@endsection