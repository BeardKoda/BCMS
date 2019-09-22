@extends('admin.layout.app')
@section('title') Users @endsection
@section('head') @include('admin.layout.include.datatable')
@endsection
@section('content')

<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Users</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="userstable" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      @foreach($users as $user)
                      <tbody>
                        <tr>
                            <td>10</td>
                            <td>2003/12/26</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')
<script>
    $.noConflict();
    $(document).ready(function() {
        $('#userstable').DataTable({
            "info":false
        });
        console.log('data')
    });
 </script>
@endsection