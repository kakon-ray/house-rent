
@extends('guest')
@section('content')
<div class="container">
    <div class="col-lg-6 mx-auto pt-5">
        <div class="card p-4">
            <h2 class="text-center pb-3">Registration</h2>
            <form action="{{ route('signup.store') }}" class="flex flex-col space-y-5" method="POST">
                @csrf
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px] w-100"/>
                <br><br>
                <input type="text" name="email" placeholder="Enter your email" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px] w-100"/>
                <br><br>
                <input type="password" name="password" placeholder="Enter your password" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px] w-100"/>
                <br><br>
                <input type="address" name="address" placeholder="Enter your address" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px] w-100"/>
    
                <button type="submit" class="btn btn-primary py-3 my-4 w-100 rounded-0">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection

