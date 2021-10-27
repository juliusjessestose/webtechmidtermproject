<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Attendance Form') }}</title>
    
@include('admin.adminlayouts.head')
</head>

<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
   
@include('admin.adminlayouts.header')
    <!

    
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                   
                 
                    
                    <div class="main-body">
                        <div class="page-wrapper">
                            
                           @yield('content')
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.adminlayouts.footer')
</body>
</html>
