<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="container">
    <h1>Employee Listing</h1>
    <a href="{{ Route('employee.create') }}">
        <button type="button" class="btn btn-primary">Add</button>
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">email</th>
            <th scope="col">Gender</th>
            <th scope="col">Created on</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($Employees AS $Emp)
            <tr>
                <th scope="row">{{ $Emp->id }}</th>
                <th scope="row">{{ $Emp->name }}</th>
                <th scope="row">{{ $Emp->phone }}</th>
                <th scope="row">{{ $Emp->email }}</th>
                <th scope="row">{{ $Emp->gender }}</th>
                <th scope="row">{{ $Emp->created_at }}</th>
                <th scope="row">
                    <a href="{{ Route('employee.edit',['id'=>$Emp->id]) }}" >
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{ Route('employee.delete',['id'=>$Emp->id]) }}" >
                        <button type="button" class="btn btn-warning">Delete</button>
                    </a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $Employees->links('pagination::bootstrap-5') }}

</div>

