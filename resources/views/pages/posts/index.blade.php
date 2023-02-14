@extends('../../layout/main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/CSS/shared/iconly.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">User's id</th>
            <th scope="col">Content</th>
            <th scope="col">Images</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php

        @endphp
        @foreach ( $posts as $post)
        <tr>
            <td>{{ $post["user_id"]}}</td>
            <td>{{ $post["content"] }}</td>
            <td><img src={{$post["image"]}} alt="image" style="height: 80px; width:100px"><img></td>
            <td>{{ date_create($post["created_at"])->format("d-m-Y H:i:s")}}</td>
            <td>
            <td>
                <button class="btn btn-danger mb-2">
                    <i class="bi bi-x-octagon-fill"></i>
                </button>

                <form role="form" action="post/delete/{{$post["id"]}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection