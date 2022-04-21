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


        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">GetQuotes list</div>

                <div class="card-body">


                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Download file</th>
                        </tr>
                        @forelse ($books as $book)
                            <tr>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->email }}</td>
                                <td>{{ $book->phone }}</td>
                                <td>{{ $book->message }}</td>
                                <td>{{ $book->timeline }}</td>
                                <td>{{ $book->budget }}</td>
                                <td><a href="{{ route('books.download', $book->uuid) }}">{{ $book->file }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No books found.</td>
                            </tr>
                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
        
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

