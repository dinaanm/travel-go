@extends('layouts.vendor')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Travel</th>
                                <th>Departure Date</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                @if ($item->travel_package->vendor_id == $account)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->travel_package->title }}</td>
                                        <td>{{ $item->travel_package->departure_date }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>Rp {{ $item->transaction_total }}</td>
                                        <td>{{ $item->transaction_status }}</td>
                                        <td>
                                            <a href="{{ route('transaction-vendor.show', $item->id) }}" class="btn btn-primary">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                            @endif
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
