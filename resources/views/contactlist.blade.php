<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
        </x-slot>
       
    <!-- Custom fonts for this template-->
    <link href="admin/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Page Wrapper -->
    <div id="wrapper">
<!-- salam -->
<div class="container mt-5">
         <div class="row">
                <h3>Customer Contact Story</h3>
              <br>
            <div class="col-md-12">
                     
             <table class="table table-bordered" id="laravel_crud">
              <thead>
                 <tr>
                    <th>Name of customer</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Request Time</th>
                    <td colspan="2">Action</td>
                 </tr>
              </thead>
              <tbody>
                  <tr>
                  @foreach ($contactlist as $row)
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->subject }}</td>
                    <td>{{ $row->message }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>
                     <button class="btn btn-danger" type="submit">Delete</button>

                   </td>
                 </tr>
                 @endforeach
              </tbody>
             </table> 
            </div>
         </div>
      </div>
</div>
<!--end salam-->
        
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="admin/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/chart-area-demo.js"></script>
    <script src="admin/js/chart-pie-demo.js"></script>


</x-app-layout>

