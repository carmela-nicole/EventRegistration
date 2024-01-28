<!DOCTYPE html>
<html lang="en">

{{-- // THIS IS FRANCES RIEL A. JULIO CODE --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Create Event</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('main.index') }}>EVENT MANAGEMENT</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('main.create') }}>Add Event</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add an Event</h3>
                <form action="{{ route('main.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter event name">
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required placeholder="Enter event location">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
