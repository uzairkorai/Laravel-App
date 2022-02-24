<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>App</title>
</head>
<body class="bg-gray-200">
    <div class="mt-20  flex justify-center">
        <div class="mt-2 w-6/12 bg-white p-6 rounded-lg">
            <p class="mt-2 mb-8 text-center text-sm text-gray-500">
                <a class="font-medium text-indigo-600 hover:text-indigo-500" href="{{route('register')}}">Create Account</a>
            </p>
            @if (session('status'))
            <div class="bg-red-500 p-4 rounded-md mb-6 text-white text-center">
                {{session('status')}}
            </div>
            @endif
            <form class="" action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                     @error('email')
                           <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" >

                     @error('password')
                           <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>