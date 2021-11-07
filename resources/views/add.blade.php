<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@extends('header')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-12 text-center ">
    <style>
        .btn{
            background-color:#f35588

        }
        </style>
    <form action="/upload" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" class="form-control" name="file" id="file" style="width: 800px ; display: inline-block;">
        <br>
    </div>
       
        
        <div class="form-group">
            <label for="parent_id">Select Folder :</label>
           
            <select id="parent_id" name="parent_id" class="form-control @error('parent_id') is-invalid @enderror" style="width: 690px ; display: inline-block;">
                <option value="">No Parent</option>
                
                <?php foreach ($folders as  $folder) : ?>
                @if ($folder->namefolder == !null)
                <option value="<?= $folder->id ?>"> <?= $folder->namefolder ?> </option>
                @endif
                <?php endforeach ?>
                
            </select>
        </div>

        <button type="submit" class="btn-sm" style="width: 80px;height: 37px; background-color:#f35588 ; border:#f35588">
        Upload
        </button>
    </form>
</div>
    </div>
</div>
<script src="{{ asset('assets/dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dashboard/dist/js/adminlte.min.js') }}"></script>
@endsection