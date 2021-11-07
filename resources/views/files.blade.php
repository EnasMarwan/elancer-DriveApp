

        @extends('header')

@section('content')
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" integrity="sha512-0/rEDduZGrqo4riUlwqyuHDQzp2D1ZCgH/gFIfjMIL5az8so6ZiXyhf1Rg8i6xsjv+z/Ubc4tt1thLigEcu6Ug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/front/css/style3.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
<style>
    li a{
    text-decoration:none !important;
}
</style>
  

  <div class="container flex-grow-1 light-style container-p-y">
    <div class="container-m-nx container-m-ny bg-lightest mb-3">
        <hr class="m-0" />
    </div>

    @if (session('success') )
        <div class="alert alert-success">
           {{ session('success')}}
           {{Session::forget('success')}}
        </div> 
      @endif

        
       
     
     
    <div class="file-manager-container file-manager-col-view">
        @foreach ($files as $file)


   
        <div class="file-item">
            <div class="file-item-select-bg bg-primary"></div>
            <label class="file-item-checkbox custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" />
                <span class="custom-control-label"></span>
            </label>
            <a href="{{ asset( $file->file_path) }}" class="file-item-name" >
            @if($file->file_type =='docx')
            <div class="file-item-icon far fa-file-word text-secondary"></div>
            @endif
            @if($file->file_type =='pdf')
            <div class="file-item-icon far fa-file-pdf text-secondary"></div>
            @endif
            @if($file->file_type =='html')
            <div class="file-item-icon fab fa-html5 text-secondary"></div>
            @endif
            @if($file->file_type =='txt')
            <div class="file-item-icon far fa-file-alt text-secondary"></div>
            @endif
            @if($file->file_type =='js')
            <div class="file-item-icon fab  fa-js text-secondary"></div>
            @endif
                {{ $file->name }}</a>
            <div class="file-item-changed">02/16/2018</div>
            <div class="file-item-actions btn-group">
                <button type="button" class="btn btn-default btn-sm rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                    {{-- <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                    <a class="dropdown-item" href="javascript:void(0)">Copy</a> --}}
                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                </div>
            </div>
        </div>


        @endforeach
        

        

    </div>
    {{ $files->withQueryString()->links() }}
    <br>
    <br>
</div>





 @endsection
