<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
<div class="card-body">
    <h1 class="text-center text-info">
        New Contact
    </h1>
    <form action="{{route('store')}}" method="post">

    @csrf
    <div class="form-group mb-5">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
        @error('name')
        <p>fill out the name</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="phone">Phone</label>
        <input type="number" name="phone" class="form-control">
    </div>
    <div class="form-group mb-3">
        <button type="submit" class="btn btn-info">save</button>
    </div>
    </form>
</div>
</div>