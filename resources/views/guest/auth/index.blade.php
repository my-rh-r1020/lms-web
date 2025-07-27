@extends('guest.layout.index')

@section('content')
    <div class="bg-[#EEF7FF] h-[100vh] flex justify-center-safe items-center">
        <div class="bg-white w-[600px] rounded-md flex flex-col justify-center px-14 py-[50px] lg:px-16">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Logo LMS"
                    class="mx-auto h-10 w-auto" />
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login Akun</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" required autocomplete="email"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 sm:text-sm/6"
                                placeholder="Your Email" />
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-[#0084FF] hover:text-[#0271D9]">Lupa
                                    password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 sm:text-sm/6"
                                placeholder="Your Password" />
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-[#0084FF] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-[#0271D9] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400 transition duration-300">Login</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    Belum punya akun?
                    <a href="#" class="font-semibold text-[#0084FF] hover:text-[#0271D9]">Register</a>
                </p>
            </div>
        </div>
    </div>
@endsection
