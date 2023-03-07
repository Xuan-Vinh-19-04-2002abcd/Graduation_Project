@extends('layout.main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/CSS/shared/iconly.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Pitch's name</th>
            <th scope="col">User's name</th>
            <th scope="col">Day</th>
            <th scope="col">Time</th>
            <th scope="col">User's contact</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    
    <tbody>
        @php
        
        @endphp
        @foreach ( $bookings as $key => $booking)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $booking->namepitch }}</td>
            <td>{{ $booking->fullname}}</td>
            <td>{{ $booking->day}}</td>
            <td>{{ $booking->time}}</td>
            <td>{{ $booking->contact}}</td>
            <td>{{ $booking->description}}</td>
            <td>
                <button class="btn btn-danger mb-2">
                    Pending
                </button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection