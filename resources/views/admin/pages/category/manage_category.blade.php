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
                    <th scope="col">Cateogry Name</th>
                    <th scope="col">Cateogry Slug</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                  
                    <td>{{$item->category_name}}</td>
                    <td>{{$item->category_slug}}</td>

                    <td>
                        <a href="{{url('dashboard/edit-category',['id'=>$item->id])}}" type="button" class="btn btn-success">Update</button>

                    </td>
                    <td>

                        <div>
                            <form method="POST" action="/dashboard/delete-category">
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