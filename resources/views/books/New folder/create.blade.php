<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new book</div>

                <div class="card-body">

                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        Title:
                        <br>
                        <input type="text" name="name" class="form-control">
                        <input type="text" name="email" class="form-control">
                        <input type="text" name="phone" class="form-control">
                        <input type="text" name="message" class="form-control">
                        <input type="text" name="timeline" class="form-control">
                        <input type="text" name="budget" class="form-control">
                        <input type="text" name="file" class="form-control">

                        <br>

                        Cover File:
                        <br>
                        <input type="file" name="file">

                        <br><br>

                        <input type="submit" value=" Upload book " class="btn btn-primary">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>