<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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