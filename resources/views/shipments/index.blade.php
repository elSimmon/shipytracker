@extends('layouts.master')

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gradient-secondary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">New Shipment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('new-shipping')}}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sender:</label>
                            <select class="form-control" name="sender_id">
                                <option>Select</option>
                                @foreach($senders as $a)
                                    <option value="{{$a->id}}">{{$a->name}}-{{$a->email}}-{{$a->phone}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Receiver:</label>
                            <select class="form-control" name="receiver_id">
                                <option>Select</option>
                                @foreach($receivers as $a)
                                    <option value="{{$a->id}}">{{$a->name}}-{{$a->email}}-{{$a->phone}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Package type:</label>
                            <select class="form-control" name="package_type">
                                <option value="Document">Document</option>
                                <option value="Parcel">Parcel</option>
                                <option value="Sentiments">Sentiments</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Consignment number:</label>
                            <input type="text"  name="consignment_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Net Weight(kg):</label>
                            <input type="number" name="net_weight" placeholder="10" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Gross Weight(kg):</label>
                            <input type="number" name="gross_weight" placeholder="10" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Package number:</label>
                            <input type="text"  name="package_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Voyage Number:</label>
                            <input type="text" name="voyage_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Package Description:</label>
                            <textarea name="package_description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Departure time:</label>
                            <input type="time" name="departure_time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Origin:</label>
                            <input type="text" name="origin" placeholder="Nigeria" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Destination:</label>
                            <input type="text" name="destination" placeholder="Nigeria" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Take-off date:</label>
                            <input type="date" name="take_off_date" placeholder="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Expected delivery date:</label>
                            <input type="date" name="expected_delivery_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Comment:</label>
                            <input type="text" name="comment" placeholder="arrived safely" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                            <select name="status" class="form-control">
                                <option value="In Transit">In Transit</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Pick-up time:</label>
                            <input type="time" name="pickup_time" class="form-control" required>
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
                            <h3 class="card-title">Shipping: Consignments</h3>
                            <a href="#" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                                Add new Shipping</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table bg-gradient-secondary text-light table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#ID</th>
                                    <th>Sender</th>
                                    <th>Receiver</th><th>Consignment no.</th>
                                    <th>Package type</th>
                                    <th>Net weight</th>
                                    <th>Gross weight</th>
                                    <th>Package no.</th>
                                    <th>Voyage no.</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shipments as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->sender->name}}</td>
                                        <td>
                                            {{$item->receiver->name}}
                                        </td>
                                        <td>{{$item->consignment_no}}</td>
                                        <td><p>{{$item->package_type}}</p></td>
                                        <td>{{$item->net_weight}}</td>
                                        <td>{{$item->gross_weight}}</td>
                                        <td>
                                            {{$item->package_no}}
                                        </td>
                                        <td>
                                            {{$item->voyage_no}}
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
