
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    @extends('header')
    @section('content')
    <body class="antialiased">
        <header class="masthead">
            <div class="container">
               
                <div class="row align-items-center">
                    <div class="col-lg-7 py-5">
                        <br>
                        <br>
                        <h1 class="mb-4">File Manegment System</h1>
                     </div>
                    <div class="col-lg-5">
                        <br>
                            <br>
                            <br>
                            <br>
                           
                        <div class="py-5 px-4 masthead-cards">
                           
                        
                            <div class="d-flex">
                                <a href="{{ route('create.file') }}" class="w-50 pl-3">
                                    <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover" >
                                        <div class="card-body text-center" >
                                            <div class="text-center">
                                                <i class="fa fa-4x fa-file my-2"></i>
                                            </div>
                                            Upload Files
                                        </div>
                                    </div>
                                </a>
                              
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                             
                            </div>
                            <div class="shape"></div>
                        </div>
                    </div>
                </div>
            </div>
            <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
                <defs>
                    <style>
                        .a {
                            fill: none;
                        }
                        
                        .b {
                            clip-path: url(#a);
                        }
                        
                        .c,
                        .d {
                            fill: #f9f9fc;
                        }
                        
                        .d {
                            opacity: 0.5;
                            isolation: isolate;
                        }
                    </style>
                    <clipPath id="a">
                        <rect class="a" width="1920" height="75"></rect>
                    </clipPath>
                </defs>
                <title>wave</title>
                <g class="b">
                    <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
                </g>
                <g class="b">
                    <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
                </g>
                <g class="b">
                    <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
                </g>
                <g class="b">
                    <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
                </g>
            </svg>
        </header>
        
        <style type="text/css">
        
        
        .masthead {
            padding: 3rem 0 7rem;
            position: relative;
            background-color: #dd3d31;
            background-image: url(https://startbootstrap.com/assets/img/overlay.svg), linear-gradient(45deg, #dd3d31 0%, #d22f23 100%);
            background-size: cover;
            z-index: 0
        }
        
        .masthead svg.wave {
            position: absolute;
            bottom: -1px;
            left: 0
        }
        
        .masthead h1 {
            color: #fff;
            font-weight: 700;
            font-size: 2rem;
            line-height: 1.1;
            z-index: 1
        }
        
        .masthead h2 {
            color: rgba(255, 255, 255, .6);
            font-weight: 600;
            z-index: 1;
            font-size: 1.2rem
        }
        
        .masthead a {
            color: rgba(255, 255, 255, .8);
            text-decoration: underline;
            z-index: 1
        }
        .hidden a{
            text-decoration: none;
        }
        .masthead a:hover {
            color: #fff
        }
        
        .masthead a:active {
            text-decoration: none
        }
        
        @media(min-width:992px) {
            .masthead h1 {
                font-size: 3rem
            }
            .masthead h2 {
                font-size: 1.5rem
            }
        }
        
        .masthead .masthead-cards {
            position: relative;
            z-index: 1
        }
        
        .masthead .masthead-cards .shape {
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, .3);
            top: -10px;
            left: -35px;
            z-index: -1;
            border-radius: 30% 70% 70% 30%/30% 30% 70% 70%
        }
        
        .masthead .masthead-cards .card {
            opacity: 1;
            font-size: .8rem;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: .05rem;
            color: #212529;
            transition: .15s all
        }
        
        .masthead .masthead-cards .card:hover {
            margin-top: -.25rem;
            margin-bottom: .25rem
        }
        
        .masthead .masthead-cards .card:active {
            margin-top: inherit;
            margin-bottom: inherit
        }
        
        .masthead .masthead-cards .card.border-bottom-blue:hover {
            color: #2092ed
        }
        
        .masthead .masthead-cards .card.border-bottom-green:hover {
            color: #28a745
        }
        
        .masthead .masthead-cards .card.border-bottom-red:hover {
            color: #dd3d31
        }
        
        .masthead .masthead-cards .card.border-bottom-yellow:hover {
            color: #ffc107
        }
        
        .masthead-page {
            padding: 1rem 0 4rem
        }
        
        @media(min-width:992px) {
            .masthead-page h1 {
                font-size: 2.5rem
            }
        }
        
        .border-bottom-yellow {
            border-color: #ffc107!important;
        }
        
        .border-bottom-red {
            border-color: #dd3d31!important;
        }
        
        .border-bottom-blue {
            border-color: #2092ed!important;
        }
        
        .border-bottom-green {
            border-color: #28a745!important;
        }
        
        .border-bottom-blue, .border-bottom-green, .border-bottom-red, .border-bottom-yellow {
            border-bottom: .4rem solid!important;
        }
        .shadow-lg {
            box-shadow: 0 2rem 1.5rem -1.5rem rgba(33,37,41,.15),0 0 1.5rem .5rem rgba(33,37,41,.05)!important;
        }
        .border-0 {
            border: 0!important;
        }
        </style>
    </body>
    @endsection

