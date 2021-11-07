<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@extends('header')

@section('content')

<div class="container">
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
                <small ><a href="{{ route('create.folder') }}" class="btn btn-sm " >Creat Folder</a></small>
                <small><a href="{{ route('add.folder') }}" class="btn btn-sm ">Add to Folder</a></small>
                <br>
                <br>
                
                
						
                <form action="/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class=" form-control" name="file" id="file" style="width: 800px ; display: inline-block;">
                    <button type="submit" class="btn-sm  " style="width: 80px;height: 37px; background-color:#f35588 ; border:#f35588" > 
                        Upload
                    </button>
                    
                </form>
            </div>
        </div>
    </div>

@endsection