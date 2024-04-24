@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <div class="container">
  
     <div class="card p-2">
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
        
        <form method="POST" action="/dashboard/add-category/submit">
            @csrf
            <div class="my-4">
              <label class="form-label"><b>Category Name </b></label>
              <input type="text" class="form-control" name="category_name" required autofocus
                placeholder="Enter Category Name">
            </div>

            <button type="submit" class="btn btn-primary p-3">
              Submit
            </button>
        
        </div>
        </form>
     </div>
  </div>
</div>
@endsection