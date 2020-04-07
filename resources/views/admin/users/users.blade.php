<!DOCTYPE html>

<html lang="en">
<head>
<title>Laravel DataTable - Tuts Make</title>

<link rel="stylesheet" href="{{asset('css/app.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('css/bootstrap-4.4.1-rtl.css')}}" /> --}}
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
{{-- <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet"> --}}
{{-- <link  href="ttps://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> --}}
</head>
      <body>
         <div class="container">
            <br><br><br>
            <table class="table table-bordered table-hover" id="laravel_datatable">
               <thead>
                  <tr>
                    <th>آیدی</th>
                    <th>نام و نام خانوادگی</th>
                    <th>نام کاربری</th>
                    <th>تلفن همراه</th>
                    <th>ایمیل</th>
                    <th>جنسیت</th>
                    <th>تاریخ عضویت</th>
                    {{-- <th>Edit</th>
                    <th>Delete</th> --}}
                  </tr>
               </thead>
            </table>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
            
           processing: true,
           serverSide: true,
           dataType:'POST',
           ajax: "{{ Route('admin.users.alluserdatatables') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'username', name: 'username' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'gender', name: 'gender' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                   
                 ]
        });
     });
  </script>
   </body>
</html>

