<x-layouts.base title="Analisis Sentimen untuk ISP">

    {{-- Provider --}}
    <section>
        <div class="bg-[#EDEDED] pt-[72px]">
            <div class="container mx-auto">
                <div class=" items-center lg:mt-[10rem] mt-20">
                    <div class="content-center px-3 lg:grow lg:px-10">
                        <h1
                            class="font-display not-italic font-extrabold text-3xl lg:text-[40px] text-[#262829] pb-10 lg:leading-[100%]">
                            <strong>Myrepublic</strong>
                        </h1>
                        <p
                            class="font-display not-italic  font-normal text-xl max-w-[60rem] text-[#262829] pb-5 leading-7">
                            MyRepublic adalah perusahaan penyedia layanan internet yang berbasis di Singapura dan telah berkembang menjadi penyedia global dengan kehadiran di beberapa negara, termasuk Indonesia. Perusahaan ini didirikan di Singapura pada tahun 2011 oleh Malcolm Rodrigues, seorang pengusaha teknologi informasi.
                            <br><br>Sebagai perusahaan yang berkembang pesat di bidang layanan internet, MyRepublic terus berupaya untuk meningkatkan kualitas layanan mereka dan memperluas jangkauan di pasar yang ada serta menghadirkan inovasi baru.
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
                            Total data mencapai <strong>4.454</strong></p>
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
                            src="{{ URL::to('/img/providers/myrepublic/wordcloudmyrepublic.png') }}">
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
                            <br><br>Dan yang seperti kita lihat pada gambar, kata yang paling sering muncul salah satunya ialah <strong>"myrepublic"</strong>, <strong>"republic"</strong>, dan <strong>"engga"</strong>.
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
                            src="{{ URL::to('/img/providers/myrepublic/negatifmyrepublic.jpg') }}">
                        <img class="mx-auto shadow-2xl shadow-[#BEF5C2]/60 lg:w-[400px]"
                            src="{{ URL::to('/img/providers/myrepublic/positifmyrepublic.jpg') }}">
                    </div>
                    <div class=" mx-auto pt-5 font-bold leading-6 font-body lg:w-[900px]">
                        <h2 class="font-normal text-base-500">
                            Dan seperti yang kita lihat pada gambar, kata yang paling sering muncul pada sentimen kelas negatif salah satunya ialah <strong>"myrepublic"</strong>, <strong>"republic"</strong>, dan <strong>"engga"</strong>.
                            Sedangkan kata yang paling sering muncul pada sentimen kelas positif salah satunya ialah <strong>"myrepublic"</strong>, <strong>"pakai"</strong>, dan <strong>"promo"</strong>.
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
                            <p class="font-display text-3xl font-bold">1.023</p>
                            <p class="font-display mt-1 font-semibold ">Negatif</p>
                        </div>
                        <div class="rounded-xl shadow-xl py-3 bg-[#EDEDED]/40">
                            <img class="mx-auto h-10 mb-1"
                                src="{{ URL::to('/img/providers/flat.png') }}">
                            <p class="font-display text-3xl font-bold">2.649</p>
                            <p class="font-display mt-1 font-semibold ">Netral</p>
                        </div>
                        <div class="rounded-xl shadow-xl py-3 bg-[#BEF5C2]/40">
                            <img class="mx-auto h-10 mb-1"
                                src="{{ URL::to('/img/providers/smile.png') }}">
                            <p class="font-display text-3xl font-bold">613</p>
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
                            @everyonewoo17 Cocok”an fira, cuma aku dirumah pke myrepublic okeh sih kenceng</p>
                        <p class="text-center font-display mt-1 font-semibold ">@gyuffle_ly</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            Haduhh ini myrepublic kenapa sih woy</p>
                        <p class="text-center font-display mt-1 font-semibold ">@thegoldnine</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @singgihadn @ryandirachman @andika_suleman Pake myrepublic kenceng wifinya mbps gede harga 350rebu ajahhh~.</p>
                        <p class="text-center font-display mt-1 font-semibold ">@felovania</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            ganti wifi ke my republic berharap makin cepet soalnya up speed ke 20mbps eh malah lebih lemit dr wifi sebelumnya wkwkwk</p>
                        <p class="text-center font-display mt-1 font-semibold ">@ttokittokiya</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @intanhay Makanya pakai My Republic, kenceng cuy.</p>
                        <p class="text-center font-display mt-1 font-semibold ">@henrykuro</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            myrepublic parah banget jeleknya beberapa hari ini dah</p>
                        <p class="text-center font-display mt-1 font-semibold ">@matthewptr_</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @tanyakanrl myrepublic dirumah gue lancaaarrr jayaaa</p>
                        <p class="text-center font-display mt-1 font-semibold ">@kucingsenjaku</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            My republic lu jelek bgt jenapa sih</p>
                        <p class="text-center font-display mt-1 font-semibold ">@gyutuboo</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/smile.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            @Askrlfess Myrepublic bagus nder kalo di rmh gua kenceng bgt udh mana csnya responsif</p>
                        <p class="text-center font-display mt-1 font-semibold ">@thalspaw</p>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="px-10">
                        <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                        <img class="mx-auto h-16 mb-1"
                            src="{{ URL::to('/img/providers/bad.png') }}">
                        <p class="p-3 text-center font-display text-normal font-normal">
                            myrepublic jelek</p>
                        <p class="text-center font-display mt-1 font-semibold ">@psychoclaa</p>
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
                        <h1 class="font-display pb-5 text-3xl font-extrabold text-base-800">Hasil Akurasi Myrepublic</h1>
                    </div>
                    <div class=" mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                        <h2 class="font-normal text-base-500">Dengan menggunakan metode Naive Bayes dalam analisis ini, hasil yang kami dapatkan untuk akurasi provider Myrepublic ini adalah sebagai berikut.</h2>
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
                        kelas sentimen negatif sebanyak <strong>1.023 data</strong>, 
                        kelas sentimen netral sebanyak <strong>2.649 data</strong>, 
                        dan kelas sentimen positif sebanyak <strong>613 data</strong>.
                    </p>
                    </div>
            </div>
        </div>
    </div>
  
  </x-layouts.base>