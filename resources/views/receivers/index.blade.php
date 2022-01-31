@extends('layouts.master')

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gradient-secondary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">New Receiver</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('new-receiver')}}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="name" placeholder="John Doe" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone:</label>
                            <input type="text"  name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" name="email" placeholder="john@shipping.com" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Street Address:</label>
                            <input type="text"  name="street_address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Postal Address:</label>
                            <input type="text" name="postal_address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">City:</label>
                            <input type="text"  name="city" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">State:</label>
                            <input type="text" name="state" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Country:</label>
                            <input type="text" name="country" placeholder="Nigeria" class="form-control" required>
                        </div>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-secondary">Save</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Shipping: Receivers</h3>
                            <a href="#" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                                Add new Receiver</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table bg-gradient-secondary text-light table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#ID</th>
                                    <th>Sender</th>
                                    <th>Phone</th><th>Email</th>
                                    <th>Address</th>
                                    <th>Postal Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($receivers as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            {{$item->phone}}
                                        </td>
                                        <td>{{$item->email}}</td>
                                        <td><p>{{$item->street_address}}</p></td>
                                        <td>{{$item->postal_address}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>
                                            {{$item->state}}
                                        </td>
                                        <td>
                                            {{$item->country}}
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-secondary"><i class="far fa-eye"></i> </a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-secondary"><i class="far fa-edit"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
