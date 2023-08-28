<x-layouts.base title="Analisis Sentimen untuk ISP">

  {{-- Provider --}}
  <section>
      <div class="bg-[#EDEDED] pt-[72px]">
          <div class="container mx-auto">
              <div class=" items-center lg:mt-[10rem] mt-20">
                  <div class="content-center px-3 lg:grow lg:px-10">
                      <h1
                          class="font-display not-italic font-extrabold text-3xl md:text-[50px] lg:text-[40px] text-[#262829] pb-10 lg:leading-[100%]">
                          <strong>Iconnect</strong>
                      </h1>
                      <p
                          class="font-display not-italic font-normal text-justify text-xl md:text-[25px] md:leading-9 lg:text-xl max-w-[60rem] text-[#262829]">
                          ICONNET merupakan penyedia layanan internet Broadband yang berbasis fiber optic dari PT PLN ICON Plus yang merupakan sub holding dari PT PLN (Persero).
                          ICONNET menyediakan 4 layanan internet dengan pilihan bandwidth mulai dari 10 Mbps, 20 Mbps, 50 Mbps dan 100 Mbps. ICONNET juga menyediakan layanan Add-On berupa Wifi extender dan OTT (TV).
                          <br><br>Value proposition ICONNET adalah andal (reliable), terjangkau (reliable), dan tanpa batas (unlimited).
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
                      <img class="mx-auto lg:w-[500px] w-[600px]"
                          src="{{ URL::to('/img/providers/search.svg') }}">
                  </div>
                  <div class="grid grid-cols-1 rounded-xl bg-[#F6F6F6]/60 px-2 mb-10 lg:mb-0 lg:py-6">
                      <div class="flex mt-2 lg:mt-0 pb-5">
                          <img class="w-4 h-4 mt-1 md:mt-2 lg:mt-1 my-1"
                          src="{{ URL::to('/img/providers/dot.png') }}">
                          <p class="my-auto ml-5 font-body not-italic font-normal text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                          Total data mencapai <strong>593</strong></p>
                      </div>
                      <div class="flex mt-2 lg:mt-0 pb-5">
                          <img class="w-4 h-4 mt-1 md:mt-2 lg:mt-1 my-1"
                          src="{{ URL::to('/img/providers/dot.png') }}">
                          <p class="my-auto ml-5 font-body not-italic font-normal text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                              Interval lama waktu data yang diambil dari bulan <strong>Mei 2022 - <br>Februari 2023 ( 10 bulan )  </strong></p>
                      </div>
                      <div class="flex mt-2 lg:mt-0 pb-5">
                          <img class="w-4 h-4 mt-1 md:mt-2 lg:mt-1 my-1"
                          src="{{ URL::to('/img/providers/dot.png') }}">
                          <p class="my-auto ml-5 font-body not-italic font-normal text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                              Data diambil melalui media sosial <strong>twitter</strong></p>
                      </div>
                      <div class="flex mt-2 lg:mt-0">
                          <img class="w-4 h-4 mt-1 md:mt-2 lg:mt-1 my-1"
                          src="{{ URL::to('/img/providers/dot.png') }}">
                          <p class="my-auto ml-5 font-body not-italic font-normal text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                              Analisis sentimen terbagi dalam 3 kelas yaitu <strong>Negatif, Netral, Positif</strong></p>
                      </div>
                  </div>
              </div>
          </div>

  {{-- WordCloud --}}
          <div class="container mx-auto">
              <div class="lg:flex items-center mt-5 lg:mt-10">
                  <div class="lg:order-2 item-center lg:w-[800px]">
                      <img class="mx-auto shadow-2xl lg:w-[400px] w-[600px]"
                          src="{{ URL::to('/img/providers/iconnect/wordcloudiconnect.png') }}">
                  </div>
                  <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                      <h1
                          class="font-display not-italic font-extrabold md:mt-10 md:text-[50px] text-3xl lg:text-[35px] text-[#262829] pb-5 mt-5 lg:mt-0  lg:leading-[100%]">
                          <strong>WordCloud</strong>
                      </h1>
                      <p
                          class="font-body not-italic font-normal text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 lg:max-w-[35rem]">
                          Wordcloud adalah representasi visual dari sebuah data teks.
                          Kata-kata yang paling sering muncul dalam teks tersebut ditampilkan dalam ukuran yang lebih besar dan lebih mencolok daripada kata-kata yang jarang muncul.
                          <br><br>Dan yang seperti kita lihat pada gambar, kata yang paling sering muncul salah satunya ialah <strong>"iconnect"</strong>, <strong>"internet"</strong>, dan <strong>"pln"</strong>.
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
                      <h1 class="font-display pb-3 text-3xl md:text-[38px] lg:text-3xl font-extrabold text-base-800">WordCloud Positif dan Negatif</h1>
                  </div>
                  <div class=" mx-auto pb-5 font-bold leading-6 font-body lg:w-[900px]">
                      <h2 class="lg:mt-0 mt-3 font-normal lg:text-center text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600">
                          Wordcloud juga dapat merepresentasikan visual dari sebuah data teks berdasarkan kelas sentimennya.
                          dan pada gambar ini, kita membagi 2 wordcloud untuk kelas sentimen negatif, dan kelas sentimen positif.
                          Untuk sentimen kelas negatif memiliki teks dengan warna merah, dan untuk sentimen kelas positif memiliki teks dengan warna hijau.
                      </h2>
                  </div>
                  <div class="grid grid-cols-2 gap-10 mx-auto lg:w-[800px]">
                      <img class="mx-auto shadow-2xl shadow-[#F5BEBE]/60 lg:w-[400px]"
                          src="{{ URL::to('/img/providers/iconnect/negatificonnect.png') }}">
                      <img class="mx-auto shadow-2xl shadow-[#BEF5C2]/60 lg:w-[400px]"
                          src="{{ URL::to('/img/providers/iconnect/positificonnect.png') }}">
                  </div>
                  <div class=" mx-auto pt-5 font-bold leading-6 font-body lg:w-[900px]">
                      <h2 class="font-normal lg:text-center text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600">
                          Dan seperti yang kita lihat pada gambar, kata yang paling sering muncul pada sentimen kelas negatif salah satunya ialah <strong>"iconnect"</strong>, <strong>"bayar"</strong>, dan <strong>"mati"</strong>.
                          Sedangkan kata yang paling sering muncul pada sentimen kelas positif salah satunya ialah <strong>"iconnect"</strong>, <strong>"murah"</strong>, dan <strong>"pasang"</strong>.
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
                      <h1 class="font-display pb-5 text-3xl lg:text-3xl md:text-[38px] font-extrabold text-base-800">Jumlah Sentimen</h1>
                  </div>
                  <div class=" mx-auto font-bold leading-6 font-body lg:w-[900px]">
                      <h2 class="font-normal lg:text-center text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600">
                          Penelitian ini memiliki 3 kelas sentimen yaitu Negatif, Netral, dan Positif.
                          Dengan melakukan sentimen polarity untuk mengidentifikasi dari setiap data yang akan dimasukkan kedalam kelas sentimen.
                          Maka akan menghasilkan jumlah dari tiap kelas sentimen seperti dibawah ini.
                          
                      </h2>
                  </div>
                  <div class="grid gap-5 grid-cols-2 pt-5 lg:grid-cols-3 px-10 lg:px-32">
                      <div class="rounded-xl shadow-xl py-3 bg-[#F5BEBE]/40">
                          <img class="mx-auto h-10 md:h-12 lg:h-10 mb-1"
                              src="{{ URL::to('/img/providers/bad.png') }}">
                          <p class="font-display text-3xl md:text-[38px] lg:text-3xl font-bold">217</p>
                          <p class="font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">Negatif</p>
                      </div>
                      <div class="rounded-xl shadow-xl py-3 bg-[#EDEDED]/40">
                          <img class="mx-auto h-10 md:h-12 lg:h-10 mb-1"
                              src="{{ URL::to('/img/providers/flat.png') }}">
                          <p class="font-display text-3xl md:text-[38px] lg:text-3xl font-bold">236</p>
                          <p class="font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">Netral</p>
                      </div>
                      <div class="rounded-xl shadow-xl py-3 bg-[#BEF5C2]/40">
                          <img class="mx-auto h-10 md:h-12 lg:h-10 mb-1"
                              src="{{ URL::to('/img/providers/smile.png') }}">
                          <p class="font-display text-3xl md:text-[38px] lg:text-3xl font-bold">136</p>
                          <p class="font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">Positif</p>
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
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @bogorfess_ iconnect muraaaah bagusss</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@chikijagung</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        ape dah ini wifi iconnect jelek amat udh seminggu @pln_123</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@youngkeeshh</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        Padahal pemain baru di dunia provider wifi untuk publik", tapi stabilitas jaringan, pelayanan," sampai soal harga lebih bagus Iconnect dari @pln_123</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@Indonesia_Anbu</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        iconnect gajelas anjirrr masa gangguan seminggu 2-3x</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@euppphany</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @indomyfess Aku pake Iconnect yg 20 mbps 240k/bulan. Lancar</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@reyan3779</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        iconnect busuk bgt anjir</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@fairyoshie</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @lovme_m0re Dah besok ganti iconnect aja</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@xmadeoflovex</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @pln_123 masa iya WiFi iconnect tiap hari ada aja gangguannya?</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@Jihanap99</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @convomfs iconnect, murah dan laju</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@lifeinblackst</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        iconnect kenapa error AAAAAA gwe mau nonton haikyuuuu</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@glicofilms</p>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- Hasil Akurasi --}}
  <section>
      <div class="bg-[#EDEDED]">
          <div class="container mx-auto flex items-center space-between">
              <div class="px-10 pb-8 mx-auto text-center lg:mb-[30px]">
                  <div class="mt-10">
                      <h1 class="font-display pb-5 text-3xl md:text-[50px] lg:text-3xl font-extrabold text-base-800">Hasil Akurasi Iconnect</h1>
                  </div>
                  <div class="md:mt-4 lg:mt-0 mx-auto font-bold leading-6 font-body lg:text-center text-justify text-base md:text-[25px] md:leading-9 lg:text-base ml-10w-full lg:w-10/12 xl:w-9/12">
                      <h2 class="font-normal text-base-500">Dengan menggunakan metode Naive Bayes dalam analisis ini, hasil yang kami dapatkan untuk akurasi provider Iconnect ini adalah sebagai berikut.</h2>
                  </div>
                  <div class="grid gap-5 grid-cols-2 pt-5 lg:grid-cols-4 px-14">
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">Accuracy</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">89%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">Precision</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">91%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">Recall</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">89%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">F1-Score</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">89%</p>
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
                  <img class="mx-auto lg:w-[400px] w-[600px]"
                      src="{{ URL::to('/img/providers/conclusion.svg') }}">
              </div>
              <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                  <h1
                      class="font-display not-italic font-extrabold md:text-[50px] text-3xl lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                      <strong>Kesimpulan</strong>
                  </h1>
                  <p
                      class="md:mt-4 lg:mt-0 font-body not-italic font-normal text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 lg:max-w-[35rem]">
                      Dengan akurasi yang mencapai 89%. 
                      Hasil analisis yang didapatkan untuk provider internet Iconnect ini dalam waktu 10 bulan memiliki data 
                      kelas sentimen negatif sebanyak <strong>217 data</strong>, 
                      kelas sentimen netral sebanyak <strong>236 data</strong>, 
                      dan kelas sentimen positif sebanyak <strong>136 data</strong>.
                  </p>
                  </div>
          </div>
      </div>
  </div>

</x-layouts.base>