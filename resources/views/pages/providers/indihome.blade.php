<x-layouts.base title="Analisis Sentimen untuk ISP">

  {{-- Provider --}}
  <section>
      <div class="bg-[#EDEDED] pt-[72px]">
          <div class="container mx-auto">
              <div class=" items-center lg:mt-[10rem] mt-20">
                  <div class="content-center px-3 lg:grow lg:px-10">
                      <h1
                          class="font-display not-italic font-extrabold text-3xl md:text-[50px] lg:text-[40px] text-[#262829] pb-10 lg:leading-[100%]">
                          <strong>Indihome</strong>
                      </h1>
                      <p
                          class="font-display not-italic font-normal text-justify text-xl md:text-[25px] md:leading-9 lg:text-xl max-w-[60rem] text-[#262829]">
                          Indihome adalah merek dagang yang dimiliki oleh PT Telekomunikasi Indonesia, Tbk. (Telkom), perusahaan telekomunikasi terbesar di Indonesia. Indihome menyediakan layanan internet berkecepatan tinggi, TV berlangganan (TV kabel), dan telepon rumah (fixed line) kepada pelanggan di seluruh Indonesia.
                          <br><br>Indihome telah menjadi salah satu penyedia layanan internet terkemuka di Indonesia dan dikenal karena dukungan dari jaringan serat optik yang luas dan infrastruktur telekomunikasi yang kuat. Sebagai bagian dari Telkom, Indihome telah menjadi pilihan populer bagi banyak rumah tangga dan bisnis di Indonesia yang mencari layanan komunikasi terpadu dan andal.
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
                          Total data mencapai <strong>144.517</strong></p>
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
                          src="{{ URL::to('/img/providers/indihome/wordcloudindihome.png') }}">
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
                          <br><br>Dan yang seperti kita lihat pada gambar, kata yang paling sering muncul salah satunya ialah <strong>"indihome"</strong>, <strong>"pakai"</strong>, dan <strong>"terima kasih"</strong>.
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
                          src="{{ URL::to('/img/providers/indihome/negatifindihome.jpg') }}">
                      <img class="mx-auto shadow-2xl shadow-[#BEF5C2]/60 lg:w-[400px]"
                          src="{{ URL::to('/img/providers/indihome/positifindihome.jpg') }}">
                  </div>
                  <div class=" mx-auto pt-5 font-bold leading-6 font-body lg:w-[900px]">
                      <h2 class="font-normal lg:text-center text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600">
                          Dan seperti yang kita lihat pada gambar, kata yang paling sering muncul pada sentimen kelas negatif salah satunya ialah <strong>"indihome"</strong>, <strong>"milik"</strong>, dan <strong>"tagih"</strong>.
                          Sedangkan kata yang paling sering muncul pada sentimen kelas positif salah satunya ialah <strong>"indihome"</strong>, <strong>"pakai"</strong>, dan <strong>"smiling wajah"</strong>.
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
                          <p class="font-display text-3xl md:text-[38px] lg:text-3xl font-bold">41.006</p>
                          <p class="font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">Negatif</p>
                      </div>
                      <div class="rounded-xl shadow-xl py-3 bg-[#EDEDED]/40">
                          <img class="mx-auto h-10 md:h-12 lg:h-10 mb-1"
                              src="{{ URL::to('/img/providers/flat.png') }}">
                          <p class="font-display text-3xl md:text-[38px] lg:text-3xl font-bold">63.056</p>
                          <p class="font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">Netral</p>
                      </div>
                      <div class="rounded-xl shadow-xl py-3 bg-[#BEF5C2]/40">
                          <img class="mx-auto h-10 md:h-12 lg:h-10 mb-1"
                              src="{{ URL::to('/img/providers/smile.png') }}">
                          <p class="font-display text-3xl md:text-[38px] lg:text-3xl font-bold">26.935</p>
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
                        udah nonton dan tada bagus banget, gak rugi langganan indihome tv dirumah ceunah. top dah</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@yuni_marimar</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        indihome ini kebiasaan bgt dah kalo ujan gini sinyalnya ampun ampunann</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@PradythaVelisya</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @fauzan_aolindar Asli. Urg jg akhirnya langganan wifi. Tapi mending skrg indihome bagus cuy gaada gangguan..</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@elfanmdi</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        Indihome kenapa gangguan mulu dah</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@blithenesc</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @blueandari Tergantung lokasi kali ya, dirmh w indihome bagus2 aja lemot/error paling 3bln sekali itu jg cuma beberapa menit</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@areuokayhun</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        ih indihome jelek banget sinyalnya</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@lpuwormn</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @kudila_ disini indihome bagus koneksi lancar terus</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@SinggangMs</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        buka notif aja gak bisa sumpah jelek banget indihome</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@slaythv</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        @medanfess_ Aku indihome bagus kok</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@Bramjungs</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-base lg:text-base md:text-2xl font-normal">
                        sebel banget sama indihome buat hari ini</p>
                      <p class="text-center font-display mt-1 text-base lg:text-base md:text-2xl font-semibold ">@jonquiIe</p>
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
                      <h1 class="font-display pb-5 text-3xl md:text-[50px] lg:text-3xl font-extrabold text-base-800">Hasil Akurasi Indihome</h1>
                  </div>
                  <div class="md:mt-4 lg:mt-0 mx-auto font-bold leading-6 font-body lg:text-center text-justify text-base md:text-[25px] md:leading-9 lg:text-base ml-10w-full lg:w-10/12 xl:w-9/12">
                      <h2 class="font-normal text-base-500">Dengan menggunakan metode Naive Bayes dalam analisis ini, hasil yang kami dapatkan untuk akurasi provider Indihome ini adalah sebagai berikut.</h2>
                  </div>
                  <div class="grid gap-5 grid-cols-2 pt-5 lg:grid-cols-4 px-14">
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">Accuracy</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">85%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">Precision</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">85%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">Recall</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">85%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display text-base lg:text-base md:text-2xl font-semibold ">F1-Score</p>
                          <p class="font-display mt-3 text-3xl md:text-[38px] lg:text-3xl font-bold">85%</p>
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
                      Dengan akurasi yang mencapai 85%. 
                      Hasil analisis yang didapatkan untuk provider internet Indihome ini dalam waktu 10 bulan memiliki data 
                      kelas sentimen negatif sebanyak <strong>41.006 data</strong>, 
                      kelas sentimen netral sebanyak <strong>63.056 data</strong>, 
                      dan kelas sentimen positif sebanyak <strong>26.935 data</strong>.
                  </p>
                  </div>
          </div>
      </div>
  </div>

</x-layouts.base>