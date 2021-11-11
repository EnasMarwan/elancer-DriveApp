@extends('header')

@section('content')

<div class="container">
    <style>
            
        .form-box input{
background: none;
height: 60px;
width:50%;

padding: 10px 25px;

padding-right: 30px;

color: #666;
text-transform: capitalize;

-webkit-border-radius: 5px;

border: 1px solid #d9d9d9;

        }
        
        </style>

    <br><br><br><br>
    <form action="{{ route('library.store') }}" method="post" >
        @csrf
        
        <div class="col-lg-12 text-center">
            <div class="form-box mb-30">
                <input type="text"  name="namefolder" id="namefolder" placeholder="Enter the name folder">
            </div>
        
          
            <button type="submit" class="btn btn-sm btn-dark"  style="background-color:#f35588">
            Create
            </button>
            </div>
    </form>
</div>

@endsection
