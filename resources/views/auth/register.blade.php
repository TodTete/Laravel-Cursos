@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="flex mx-auto my-12">
  <div class="w-1/2 pl-8">
    <img src="https://cdn.kastatic.org/ka-perseus-images/cee8b2a07623d8bcf2bbe793d6b9adb34464b28a.gif" style="position:relative;  right:3%; top:10%;" alt="Imagen" class="w-full h-auto rounded-lg">
  </div>
  <div class="w-1/2">
    <div class="block p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
      <h1 class="text-3xl text-center font-bold mb-6">Registro</h1>
      <form class="space-y-4" method="POST" action="">
        @csrf
        <div>
          <label for="name" class="text-sm font-semibold text-gray-600">Name</label>
          <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Enter your name"
            id="name" name="name">
          @error('name')        
            <p class="text-red-600 mt-2">* {{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="email" class="text-sm font-semibold text-gray-600">Email</label>
          <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Enter your email"
            id="email" name="email">
          @error('email')        
            <p class="text-red-600 mt-2">* {{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="password" class="text-sm font-semibold text-gray-600">Password</label>
          <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Enter your password"
            id="password" name="password">
          @error('password')        
            <p class="text-red-600 mt-2">* {{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="password_confirmation" class="text-sm font-semibold text-gray-600">Password confirmation</label>
          <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg
            placeholder-gray-900 p-2 focus:bg-white" placeholder="Confirm your password"
            id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
          text-white font-semibold p-2 my-3 hover:bg-indigo-600">Register</button>
      </form>
    </div>
  </div>
</div>

<footer class="bg-gray-800 text-white p-6">
  <div class="container mx-auto">
      <div class="flex justify-between items-center">
          <div>
              <h2 class="text-2xl font-bold">Contacto: Ricardo Vallejo Sanchez</h2>
              <p class="mt-2">Dirección: Tec, Pueb.</p>
              <p>Teléfono: 220-125-3713</p>
              <p>Email: vallejoricardo3@gmail.com</p>
          </div>
          <div>
              <h2 class="text-2xl font-bold">Visitame en:</h2>
              <div class="flex space-x-4 mt-2">
                  <a href="#" class="text-blue-500 hover:text-blue-300">
                      <i class="fab fa-facebook-square"></i> Facebook
                  </a>
                  <a href="#" class="text-blue-500 hover:text-blue-300">
                      <i class="fab fa-twitter-square"></i> Twitter
                  </a>
                  <a href="#" class="text-blue-500 hover:text-blue-300">
                      <i class="fab fa-linkedin"></i> LinkedIn
                  </a>
              </div>
          </div>
      </div>
  </div>
</footer>
@endsection
