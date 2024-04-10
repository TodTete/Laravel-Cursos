@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="flex mx-auto my-12" style="position: relative; left:10%">
  <div class="w-1/2 pr-8">
    <div class="block p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
      <h1 class="text-3xl text-center font-bold mb-6">Iniciar Sesion</h1>
      <form class="space-y-4" method="POST" action="">
        @csrf
        <div>
          <label for="email" class="text-sm font-semibold text-gray-600">Email</label>
          <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Enter your email"
            id="email" name="email">
        </div>
        <div>
          <label for="password" class="text-sm font-semibold text-gray-600">Password</label>
          <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Enter your password"
            id="password" name="password">
        </div>
        @error('message')        
          <p class="text-red-600 mt-2">* {{ $message }}</p>
        @enderror

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
          text-white font-semibold p-2 my-3 hover:bg-indigo-600">Login</button>
      </form>
    </div>
  </div>
  <div class="w-1/2">
    <img src="https://aleduran.com/wp-content/uploads/lenguajes-programacion-top.gif" style="max-width: 70%" alt="Imagen" class="w-full h-auto rounded-lg">
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
                    <i class="fa-brands fa-facebook"></i> Facebook
                  </a>
                  <a href="#" class="text-blue-500 hover:text-blue-300">
                    <i class="fa-brands fa-twitter"></i>Twitter
                  </a>
                  <a href="#" class="text-blue-500 hover:text-blue-300">
                    <i class="fa-brands fa-linkedin"></i>LinkedIn
                  </a>
              </div>
          </div>
      </div>
  </div>
</footer>
@endsection
