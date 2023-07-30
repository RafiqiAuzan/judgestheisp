<x-layouts.base title="Analisis Sentimen untuk ISP">

    {{-- Provider --}}
    <section>
        <div class="bg-[#EDEDED] pt-[72px]">
            <div class="container mx-auto">
                <div class=" items-center lg:mt-[10rem] mt-20">
                    <div class="content-center px-3 lg:grow lg:px-10">
                        <h1
                            class="font-display not-italic font-extrabold text-3xl lg:text-[40px] text-[#262829] pb-10 lg:leading-[100%]">
                            <strong>Biznet</strong>
                        </h1>
                        <p
                            class="font-display not-italic  font-normal text-xl max-w-[60rem] text-[#262829] pb-5 leading-7">
                            Biznet adalah salah satu perusahaan penyedia layanan internet terkemuka di Indonesia. Perusahaan ini didirikan pada tahun 2000 dan telah berkembang pesat sejak saat itu. Bisnis inti Biznet terfokus pada menyediakan layanan komunikasi dan teknologi informasi, termasuk layanan internet berkecepatan tinggi, jaringan data, cloud computing, dan layanan data center.
                            <br><br>Perusahaan ini telah dikenal karena fokusnya pada kehandalan jaringan, kualitas layanan, dan dukungan pelanggan yang baik. Biznet telah menjadi salah satu pilihan utama bagi perusahaan dan individu di Indonesia yang membutuhkan akses internet yang andal dan cepat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Info --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto">
                <div class="lg:flex items-center">
                    <div class="item-center lg:w-[800px]">
                        <img class="mx-auto lg:w-[500px]"
                            src="{{ URL::to('/img/providers/search.svg') }}">
                    </div>
                    <div class="grid grid-cols-1 rounded-xl bg-[#F6F6F6]/60 px-2 py-2 lg:py-6">
                        <div class="flex mt-2 lg:mt-0 pb-5">
                            <img class="w-4 h-4 my-1"
                            src="{{ URL::to('/img/providers/dot.png') }}">
                            <p class="my-auto ml-5 font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                            Total data mencapai <strong>9.239</strong></p>
                        </div>
                        <div class="flex mt-2 lg:mt-0 pb-5">
                            <img class="w-4 h-4 my-1"
                            src="{{ URL::to('/img/providers/dot.png') }}">
                            <p class="my-auto ml-5 font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                                Interval lama waktu data yang diambil dari bulan <strong>September 2022 - Februari 2023 ( 6 bulan ) </strong></p>
                        </div>
                        <div class="flex mt-2 lg:mt-0 pb-5">
                            <img class="w-4 h-4 my-1"
                            src="{{ URL::to('/img/providers/dot.png') }}">
                            <p class="my-auto ml-5 font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                                Data diambil melalui media sosial <strong>twitter</strong></p>
                        </div>
                        <div class="flex mt-2 lg:mt-0">
                            <img class="w-4 h-4 my-1"
                            src="{{ URL::to('/img/providers/dot.png') }}">
                            <p class="my-auto ml-5 font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                                Analisis sentimen terbagi dalam 3 kelas yaitu <strong>Negatif, Netral, Positif</strong></p>
                        </div>
                    </div>
                </div>
            </div>

    {{-- WordCloud --}}
            <div class="container mx-auto">
                <div class="lg:flex items-center mt-5 lg:mt-10">
                    <div class="lg:order-2 item-center lg:w-[800px]">
                        <img class="mx-auto shadow-2xl lg:w-[400px]"
                            src="{{ URL::to('/img/providers/biznet/wordcloudbiznet.png') }}">
                    </div>
                    <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                        <h1
                            class="  font-display not-italic font-extrabold text-3xl lg:text-[35px] text-[#262829] pb-5 mt-5 lg:mt-0  lg:leading-[100%]">
                            <strong>WordCloud</strong>
                        </h1>
                        <p
                            class="font-body not-italic font-normal text-base text-base-600 lg:max-w-[35rem]">
                            Wordcloud adalah representasi visual dari sebuah data teks.
                            Kata-kata yang paling sering muncul dalam teks tersebut ditampilkan dalam ukuran yang lebih besar dan lebih mencolok daripada kata-kata yang jarang muncul.
                            <br><br>Dan yang seperti kita lihat pada gambar, kata yang paling sering muncul salah satunya ialah <strong>"biznet"</strong>, <strong>"pakai"</strong>, dan <strong>"engga"</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WordCloud Positif & Negatif --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto flex items-center space-between">
                <div class="px-10 pb-8 mx-auto text-center mt-10">
                    <div class="lg:mt-10">
                        <h1 class="font-display pb-3 text-3xl font-extrabold text-base-800">WordCloud Positif dan Negatif</h1>
                    </div>
                    <div class=" mx-auto pb-5 font-bold leading-6 font-body lg:w-[900px]">
                        <h2 class="font-normal text-base-500">
                            Wordcloud juga dapat merepresentasikan visual dari sebuah data teks berdasarkan kelas sentimennya.
                            dan pada gambar ini, kita membagi 2 wordcloud untuk kelas sentimen negatif, dan kelas sentimen positif.
                            Untuk sentimen kelas negatif memiliki teks dengan warna merah, dan untuk sentimen kelas positif memiliki teks dengan warna hijau.
                        </h2>
                    </div>
                    <div class="grid grid-cols-2 gap-10 mx-auto lg:w-[800px]">
                        <img class="mx-auto shadow-2xl shadow-[#F5BEBE]/60 lg:w-[400px]"
                            src="{{ URL::to('/img/providers/biznet/negatifbiznet.jpg') }}">
                        <img class="mx-auto shadow-2xl shadow-[#BEF5C2]/60 lg:w-[400px]"
                            src="{{ URL::to('/img/providers/biznet/positifbiznet.jpg') }}">
                    </div>
                    <div class=" mx-auto pt-5 font-bold leading-6 font-body lg:w-[900px]">
                        <h2 class="font-normal text-base-500">
                            Dan seperti yang kita lihat pada gambar, kata yang paling sering muncul pada sentimen kelas negatif salah satunya ialah <strong>"biznet"</strong>, <strong>"engga"</strong>, dan <strong>"ganggu"</strong>.
                            Sedangkan kata yang paling sering muncul pada sentimen kelas positif salah satunya ialah <strong>"biznet"</strong>, <strong>"pakai"</strong>, dan <strong>"lancar"</strong>.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sentimen --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto flex items-center space-between">
                <div class="px-10 pb-8 mx-auto text-center mb-[60px]">
                    <div class=" lg:mt-10">
                        <h1 class="font-display pb-5 text-3xl font-extrabold text-base-800">Jumlah Sentimen</h1>
                    </div>
                    <div class=" mx-auto font-bold leading-6 font-body lg:w-[900px]">
                        <h2 class="font-normal text-base-500">
                            Penelitian ini memiliki 3 kelas sentimen yaitu Negatif, Netral, dan Positif.
                            Dengan melakukan sentimen polarity untuk mengidentifikasi dari setiap data yang akan dimasukkan kedalam kelas sentimen.
                            Maka akan menghasilkan jumlah dari tiap kelas sentimen seperti dibawah ini.
                            
                        </h2>
                    </div>
                    <div class="grid gap-5 grid-cols-2 pt-5 lg:grid-cols-3 px-10 lg:px-32">
                        <div class="rounded-xl shadow-xl py-3 bg-[#F5BEBE]/40">
                            <img class="mx-auto h-10 mb-1"
                                src="{{ URL::to('/img/providers/bad.png') }}">
                            <p class="font-display text-3xl font-bold">3.208</p>
                            <p class="font-display mt-1 font-semibold ">Negatif</p>
                        </div>
                        <div class="rounded-xl shadow-xl py-3 bg-[#EDEDED]/40">
                            <img class="mx-auto h-10 mb-1"
                                src="{{ URL::to('/img/providers/flat.png') }}">
                            <p class="font-display text-3xl font-bold">4.492</p>
                            <p class="font-display mt-1 font-semibold ">Netral</p>
                        </div>
                        <div class="rounded-xl shadow-xl py-3 bg-[#BEF5C2]/40">
                            <img class="mx-auto h-10 mb-1"
                                src="{{ URL::to('/img/providers/smile.png') }}">
                            <p class="font-display text-3xl font-bold">1.485</p>
                            <p class="font-display mt-1 font-semibold ">Positif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Swiper -->
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container swiper mySwiper">
                <div class="p-5 swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @akunyakul Gila sih bu biznet emang lumayan kenceng bgt. Gak lemott juga</p>
                        <p class="text-center font-display mt-1 font-semibold ">@kurniawanfrman</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            kenapa biznet sampah banget ini ping tinggi mulu</p>
                        <p class="text-center font-display mt-1 font-semibold ">@veghaaa</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            Terbaik sih ini biznet</p>
                        <p class="text-center font-display mt-1 font-semibold ">@BiznetHome</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            biznet kenapa lagi dah buset muter muter mulu</p>
                        <p class="text-center font-display mt-1 font-semibold ">@_dtaee</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @indomyfess biznet! lancar terus gapernah lelet dan gapernah ada masalah, kl pun ada masalah itu cmn bentar dan cepet tanggapnya!</p>
                        <p class="text-center font-display mt-1 font-semibold ">@sasadesii</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            kenapa ya biznet jelek bgt akhir2 ini</p>
                        <p class="text-center font-display mt-1 font-semibold ">@Cheol_im_meng</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @wahkerensih biznet ajaa bagus</p>
                        <p class="text-center font-display mt-1 font-semibold ">@txtdariibay</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            ini biznet jadi sering trobel knp dah</p>
                        <p class="text-center font-display mt-1 font-semibold ">@auliadahime</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @samarindabase gw pke biznet..bagus aja</p>
                        <p class="text-center font-display mt-1 font-semibold ">@gamajeje</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            Biznet bisa kendala juga ternyata, memang tidak ada yang sempurna</p>
                        <p class="text-center font-display mt-1 font-semibold ">@Adelard_Illham</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="ml-5 swiper-pagination"></div>
            </div>
        </div>
    </section>

    {{-- Hasil Akurasi --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto flex items-center space-between pt-10">
                <div class="px-10 pb-8 mx-auto text-center lg:mb-[30px]">
                    <div class="mt-10">
                        <h1 class="font-display pb-5 text-3xl font-extrabold text-base-800">Hasil Akurasi Biznet</h1>
                    </div>
                    <div class=" mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                        <h2 class="font-normal text-base-500">Dengan menggunakan metode Naive Bayes dalam analisis ini, hasil yang kami dapatkan untuk akurasi provider Biznet ini adalah sebagai berikut.</h2>
                    </div>
                    <div class="grid gap-5 grid-cols-2 pt-5 md:grid-cols-1 lg:grid-cols-4 px-14">
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">Accuracy</p>
                            <p class="font-display mt-3 text-3xl font-bold">83%</p>
                        </div>
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">Precision</p>
                            <p class="font-display mt-3 text-3xl font-bold">84%</p>
                        </div>
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">Recall</p>
                            <p class="font-display mt-3 text-3xl font-bold">83%</p>
                        </div>
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">F1-Score</p>
                            <p class="font-display mt-3 text-3xl font-bold">83%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Conclusion --}}
    <div class="bg-[#EDEDED]">
        <div class="container mx-auto">
            <div class="lg:flex items-center pb-10">
                <div class="lg:order-2 item-center lg:w-[800px]">
                    <img class="mx-auto lg:w-[400px]"
                        src="{{ URL::to('/img/providers/conclusion.svg') }}">
                </div>
                <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                    <h1
                        class="  font-display not-italic font-extrabold text-3xl lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                        <strong>Kesimpulan</strong>
                    </h1>
                    <p
                        class="font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                        Dengan akurasi yang mencapai 83%. 
                        Hasil analisis yang didapatkan untuk provider internet First Media ini dalam waktu 6 bulan memiliki data 
                        kelas sentimen negatif sebanyak <strong>3.208 data</strong>, 
                        kelas sentimen netral sebanyak <strong>4.492 data</strong>, 
                        dan kelas sentimen positif sebanyak <strong>1.485 data</strong>.
                    </p>
                    </div>
            </div>
        </div>
    </div>

</x-layouts.base>