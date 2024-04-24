@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
    <div class="container">
        @if (\Session::has('success'))
        <div class="alert alert-success w-50 mx-auto text-center mb-0 mt-4">{!!
          \Session::get('success')
          !!}</div>
        @endif
        @if(\Session::has('error'))
        <div class="alert alert-danger w-50 mx-auto text-center mb-0 mt-4">{!! \Session::get('error')
          !!}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Rent Amount</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_property as $item)
                <tr>
                    <th>
                        <img src="{{$item->img}}" class="img-fluid" style="height:100px" alt="">
                    </th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->catagory}}</td>
                    <td>{{$item->amount}}</td>
                    <td>{{$item->number}}</td>
                    <td>
                        <a href="{{url('dashboard/edit-property',['id'=>$item->id])}}" type="button" class="btn btn-success">Update</button>

                    </td>
                    <td>

                        <div>
                            <form method="POST" action="/dashboard/property-delete">
                                @csrf
                                <input type="text" value="{{$item->id}}" name="id" class="d-none">
                                <button type="submit" class="btn btn-danger ms-2">Remove</button>

                            </form>
                        </div>

                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection