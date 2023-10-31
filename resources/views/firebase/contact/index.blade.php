
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
<a href="{{route('create')}}" class="btn btn-info my-5">add contact</a>
<table class="table table-striped">
<thead>
    <tr>
        <th>name</th>
        <th>last name</th>
        <th>phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
    @foreach($tests as $key => $test)
    <tr>
        <td>{{$test['name']}}</td>
        <td>{{$test['lastname']}}</td>
        <td>{{$test['phone']}}</td>
        <td>
            <a href="{{ url('edit-contact/' .$key)}}" class="btn btn-success">edit</a>
        </td>
        <td>
            <a href="{{url('delete-contact/' .$key)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>