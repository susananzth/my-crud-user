@extends('layouts.app')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                            <label>Show
                                <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Show</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Show</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        @forelse ($users as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                              <form class="" action="index.html" method="post">
                                  @csrf
                                  <a class="btn btn-primary" href=""><i class="fa fa-eye"></i></a>
                              </form>
                            </td>
                            <td>
                              <form class="" action="index.html" method="post">
                                  @csrf
                                  <a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a>
                              </form>
                            </td>
                            <td>
                              <form action="{{ route('users.destroy', $user) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete user?')"><i class="fa fa-trash-alt"></i></button>
                              </form>
                            </td>
                          </tr>
                          @empty <!-- Si no hay registros, mostrará el siguiente mensaje -->
                            <div class="alert alert-warning" role="alert">
                              ¡No records found!
                            </div>
                          @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
</div>
@endsection
