@extends('index')

@section('content')

<div class="w-full max-w-xs">

<form method ="put" action="\user\{id}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
   {{ csrf_field() }} 
   <div class="mb-4">
     <span style="background-color:blue;color:white;" class="text-gray-700">USERS</span>
 <label class="block text-gray-700 text-sm font-bold mb-2" for="Role Id">
        Id
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id"
       name="nidame" type="text" placeholder="Role Id">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
       Delete
      </button>
    </div>
  </form>
</div>
@endsection