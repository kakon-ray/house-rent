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

        <div class="py-3 d-flex justify-content-between">
            <h1 class="text-xl">Manage Catgory</h1>
            
            <a href="/dashboard/add-category" class="btn btn-success"> + Add Category</a>
        </div>

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
                        <a href="{{url('dashboard/edit-category',['id'=>$item->id])}}" type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg></button>

                    </td>
                    <td>

                        <div>
                            <form method="POST" action="/dashboard/delete-category">
                                @csrf
                                <input type="text" value="{{$item->id}}" name="id" class="d-none">
                                <button type="submit" class="btn btn-danger ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg></button>

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