@extends("layouts.main")
@section("title","UndanginAja")
@section('main')
<section class="min-h-screen flex items-center bg-[--primary-color] text-white">
    <div class="container grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5 px-6">
        <div class="md:text-start text-center md:order-1 order-2">
            <h1 class="mb-4 text-5xl font-bold ">Buat Undangan Online Anda Sendiri dengan Mudah!</h1>
            <p class="mb-5 text-base text-white/80">Bagikan momen spesial Anda dengan cara modern dan hemat waktu. Buat undangan yang berkesan hanya dengan beberapa klik!</p>
            <div class="flex gap-2 md:justify-start justify-center"><a class="px-4  text-center text-sm py-3 rounded-md  hover:shadow-[--secondary-color]/50  bg-[--secondary-color] text-white  undefined" href="https://momenku.kholzt.com/register"><i class="fa fa-plus-circle"></i> Buat Undangan</a><a class="px-4  text-center text-sm py-3 rounded-md  hover:shadow-[--secondary-color]/50  border-[--secondary-color] border text-white  undefined" href=""><i class="fa-regular fa-circle-play text-[--secondary-color]"></i> Tutorial Undangan</a></div>
        </div>
        <div class="relative flex justify-center mt-14 md:mt-0 md:order-2 order-1">

        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container text-center">
        <h2 class="font-bold text-3xl mx-auto   mb-4 w-[500px] max-w-full text-black">Semua yang Anda Butuhkan untuk Undangan <span class="text-[--primary-color] text-black">Digital</span> yang Sempurna</h2>
        <p class="w-[894px] mx-auto max-w-full text-black">Undangan digital kami menghadirkan pengalaman tanpa batas: desain cantik, RSVP otomatis, galeri foto, hingga peta lokasi acara. Hanya dalam hitungan menit, bagikan undangan Anda ke keluarga dan teman dengan mudah! </p>
    </div>
</section>
<section class="min-h-screen  bg-[--primary-light] flex items-center ">
    <div class="container  px-6 ">
        <div class="text-center mb-10">
            <h1 class="text-3xl mx-auto font-bold  mb-4 w-[500px] max-w-full text-black">Pilih Tema Undangan Sesuai Keinginan Anda</h1>
            <p class=" w-[894px] mx-auto max-w-full text-black">Dari desain klasik hingga modern, temukan tema yang paling cocok untuk momen istimewa Anda. Semua tema dapat disesuaikan untuk mencerminkan kepribadian dan cerita cinta Anda.</p>
        </div>
        <div class="">
            <div class="flex justify-between mb-4">
                <h3 class="text-lg font-bold">Tema Undangan Populer</h3><a href="/themes">Lihat Semua <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2  gap-6  grid-cols-1 ">

                <article class="relative flex overflow-hidden flex-col h-full w-full rounded-xl bg-white"><img src="https://demo.datengdong.com/themes/three/thumb.png" alt="" class="w-full aspect-[382/290]	 object-cover	"><span class="px-2 py-1 absolute top-2 right-2  bg-[--secondary-color] text-white rounded-md text-xs">Free</span>
                    <div class="md:p-6 p-4">
                        <h3 class="text-md  text-black font-medium mb-1  group-hover:underline">Test 3</h3>
                        <p class="text-sm text-slate-600">Test Description</p>
                        <div class="grid md:grid-cols-2 mt-4 grid-cols-1 gap-2"><a class="px-4  text-center text-sm py-3 rounded-md  hover:shadow-[--primary-color]/50  border-[--primary-color] text-[--primary-color] border   undefined" href="">Preview</a><a class="px-4  text-center text-sm py-3 rounded-md  hover:shadow-[--primary-color]/50  bg-[--primary-color] text-white  undefined" href="">Gunakan</a></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
