@extends('backend.layouts.master')

@section('title', 'View Bookings')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">

            @include('alerts')

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>BookID</th>
                        <!-- <th>UserID</th> -->
                        <th>Title</th>
                        <th>Name</th>
                        <th>PhNo</th>
                        <th>Email</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Price</th>
                        <th>People</th>
                        <th>Total</th>
                        <th>Reviews</th>
                        <th>Createdat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->bookable_id }}</td>
                        <!-- <td>{{ $booking->user_id }}</td> -->
                        <td>{{ $booking->title }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->phno }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->start }}</td>
                        <td>{{ $booking->end }}</td>
                        <td>{{ $booking->price }}</td>
                        <td>{{ $booking->noofpeople}}</td>
                        <td>{{ $booking->total }}</td>
                        <td>{{ $booking->content }}</td>
                        <td>{{ $booking->created_at->format('d - m - Y') }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $bookings->links() }}
    </div>

</div>

@endsection