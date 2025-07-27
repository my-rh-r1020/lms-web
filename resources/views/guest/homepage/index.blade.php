@extends('guest.layout.index')

@section('content')
    {{-- Header --}}
    <header class="bg-[#F7F3F3] top-0 h-[100px] px-[30px] flex justify-between items-center-safe">
        <div>
            <img src="#" alt="logo-lms" class="w-[30px]">
        </div>
        <div>
            <a href="{{ route('login') }}"
                class="bg-[#0084FF] hover:bg-[#0271D9] text-[#FFFDFD] px-4 py-2 rounded-md font-normal transition duration-300">Login</a>

        </div>
    </header>

    {{-- Hero/Banner --}}
    <section class="bg-[#D9D9D9] h-[600px]">
        <div class="relative isolate overflow-hidden px-[30px] pt-14">
            {{-- <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                </div>
            </div> --}}
            <img src="#" alt="banner-img">
            <div class="mx-auto max-w-2xl py-32">
                <div class="text-center">
                    <h4 class="mb-8">LOGO LMS</h4>
                    <h1 class="text-3xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Selamat Datang
                        di LMS Prodi TI</h1>
                    <p class="mt-8 text-lg font-medium text-pretty">LMS merupakan media pembelajaran digital di lingkungan
                        Program Studi Teknik Informatika</p>
                </div>
            </div>
            {{-- <div aria-hidden="true"
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
                </div>
            </div> --}}
        </div>
    </section>

    {{-- FAQ --}}
    <section class="px-[80px] py-[140px]">
        <div class="grid grid-cols-2 gap-[100px]">
            <div>
                <div class="text-[32px] font-bold mb-5">Frequently Asked Question (FAQ)</div>
                <p class="font-normal">Berisikan kumpulan jawaban dari pertanyaan yang sering ditanyakan terkait LMS</p>
            </div>
            <div class="bg-amber-50">
                <li>Pertanyaan 1</li>
                <li>Pertanyaan 2</li>
                <li>Pertanyaan 3</li>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-[#F7F3F3] h-[100px] text-center">
        <span>@2025, Created by RIFALDI HERIKSON</span>
    </footer>
@endsection
