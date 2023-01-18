@extends('layouts.app')

@section('content')
<!-- component -->
<body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class=" flex justify-center px-6 my-12">





                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    @if (session('message'))
                    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>{{session('message')}}.</p>
                      </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <span >{{ $error }}.
                                        </span>
                                    </div>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('message'))

                     @endif

                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">Forgot Your Password?</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            We get it, stuff happens. Just enter your email address below and we'll send you a
                            link to reset your password!
                        </p>
                    </div>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="/forget-password" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="email"
                                type="email"
                                placeholder="Enter Email Address..."
                            />
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Reset Password
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="/register"
                            >
                                Create an Account!
                            </a>
                        </div>
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="/login"
                            >
                                Already have an account? Login!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
