@extends('layout.main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/CSS/shared/iconly.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
<div class="space50">&nbsp;</div>
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Edit Pitch</h2>
    </div>
    <div class="space50">&nbsp;</div>
    <div class="container">
        <form action="{{route('updateform',$pitch->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for='editName'>Name</label>
                <input type="text" class="form-control" name="editName" id="editName"  value="{{$pitch->namepitch}}"required>
            </div>
            <div class="form-group">
                <label for='editAddress'>Address</label>
                <input type="text" class="form-control" name="editAddress" id="editAddress"  value="{{$pitch->address }}"required>
            </div>
            <div class="form-group">
                <label for='editPnum'>Phone number</label>
                <input type="text" class="form-control" name="editPnum" id="editPnum"  value="{{$pitch->phonenumber}}"required>
            </div>
            <div class="form-group">
                <label for='editImage'>Image</label>
                <input type="file" class="form-control-file" name="editImage" id="editImage" required>
            </div>
            <div class="form-group">
                <label for='editPrice'>Price per hours</label>
                <input type="number" min=10000 class="form-control" name="editPrice" id="editPrice" value="{{$pitch->price_hour}}"equired>
            </div>
            <div class="form-group">
                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
                <script type="text/javascript">
                    $(document).ready(function(e) {
                        $('#editImage').change(function() {
                            let reader = new FileReader();
                            reader.onload = (e) => {
                                $('#preview-image-before-upload').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        });
                    });
                </script>
            </div>
          

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="space50">&nbsp;</div>
</div>
@endsection