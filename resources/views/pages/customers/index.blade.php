@extends('../../layout/main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
		rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/CSS/shared/iconly.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
				integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
				crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">FullName</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Avatar</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        // dd($customers);
        @endphp
        @if ($customers->isEmpty())
        <tr>
            <td colspan="9" class="text-center">
                No data has found!
            </td>
        </tr>
        @else
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->fullname }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phonenumber }}</td>
            <td><img src={{$customer->avatar}} alt="image" style="height: 80px; width:100px"><img></td>
            <td>{{ date_create($customer->created_at)->format("d-m-Y H:i:s")}}</td>
            <td>
                <button class="btn btn-success mb-2">
                    <i class="fas fa-eye icon"></i>
                </button>
                <form action="" method="POST">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection