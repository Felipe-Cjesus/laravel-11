@if(session()->has('success'))
    <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md">
        {{ session('success') }}
    </div>
@endif

@if(session()->has('message'))
    <div class="bg-yellow-100 border-t-4 border-yellow-500 rounded-b text-yellow-900 px-4 py-3 shadow-md">
        {{ session('message') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
@endif