<x-layouts.base title="Analisis Sentimen untuk ISP">

  {{-- Provider --}}
  <section>
      <div class="bg-[#EDEDED] pt-[72px]">
          <div class="container mx-auto">
              <div class=" items-center lg:mt-[10rem] mt-20">
                  <div class="content-center px-3 lg:grow lg:px-10">
                      <h1
                          class="font-display not-italic font-extrabold text-3xl lg:text-[40px] text-[#262829] pb-10 lg:leading-[100%]">
                          <strong>Xlhome</strong>
                      </h1>
                      <p
                          class="font-display not-italic  font-normal text-xl max-w-[60rem] text-[#262829] pb-5 leading-7">
                          XL HOME merupakan layanan internet rumah super cepat dan tanpa batas berbasis fiber optic dari XL Axiata, yang memiliki tujuan untuk menghadirkan pengalaman terbaik bagi keluarga progresif Indonesia dalam berinternet dan menikmati tayangan hiburan kekinian. Dengan biaya instalasi dan sewa perangkat yang sudah termasuk dalam harga berlangganan.
                          <br><br>Layanan XL Home cenderung menargetkan konsumen yang membutuhkan koneksi internet stabil dan cepat di rumah atau tempat tinggal. XL Home menyediakan berbagai paket internet dengan kapasitas data yang berbeda, sesuai dengan kebutuhan dan preferensi pelanggan.
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
                          Total data mencapai <strong>569</strong></p>
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
                          src="{{ URL::to('/img/providers/xlhome/wordcloudxlhome.png') }}">
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
                          <br><br>Dan yang seperti kita lihat pada gambar, kata yang paling sering muncul salah satunya ialah <strong>"xlhome"</strong>, <strong>"internet"</strong>, dan <strong>"engga"</strong>.
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
                          src="{{ URL::to('/img/providers/xlhome/negatifxlhome.jpg') }}">
                      <img class="mx-auto shadow-2xl shadow-[#BEF5C2]/60 lg:w-[400px]"
                          src="{{ URL::to('/img/providers/xlhome/positifxlhome.jpg') }}">
                  </div>
                  <div class=" mx-auto pt-5 font-bold leading-6 font-body lg:w-[900px]">
                      <h2 class="font-normal text-base-500">
                          Dan seperti yang kita lihat pada gambar, kata yang paling sering muncul pada sentimen kelas negatif salah satunya ialah <strong>"xlhome"</strong>, <strong>"ganggu"</strong>, dan <strong>"engga"</strong>.
                          Sedangkan kata yang paling sering muncul pada sentimen kelas positif salah satunya ialah <strong>"xlhome"</strong>, <strong>"pakai"</strong>, dan <strong>"pasang"</strong>.
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
                          <p class="font-display text-3xl font-bold">203</p>
                          <p class="font-display mt-1 font-semibold ">Negatif</p>
                      </div>
                      <div class="rounded-xl shadow-xl py-3 bg-[#EDEDED]/40">
                          <img class="mx-auto h-10 mb-1"
                              src="{{ URL::to('/img/providers/flat.png') }}">
                          <p class="font-display text-3xl font-bold">155</p>
                          <p class="font-display mt-1 font-semibold ">Netral</p>
                      </div>
                      <div class="rounded-xl shadow-xl py-3 bg-[#BEF5C2]/40">
                          <img class="mx-auto h-10 mb-1"
                              src="{{ URL::to('/img/providers/smile.png') }}">
                          <p class="font-display text-3xl font-bold">108</p>
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
                        @su9arbb paling bener ganti xlhome</p>
                      <p class="text-center font-display mt-1 font-semibold ">@shicnji</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        ampun xlhome dari pagi sampai malam busuk banget jaringannya</p>
                      <p class="text-center font-display mt-1 font-semibold ">@kingvays</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        Gokil xlhome stabil 6mbps</p>
                      <p class="text-center font-display mt-1 font-semibold ">@MIX3DRACE</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        @xlhome internet saya kenapa lemot gini ya, jaringan bapuk</p>
                      <p class="text-center font-display mt-1 font-semibold ">@yusufgutawaa</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        @shitisntlicious ganti xlhome waee</p>
                      <p class="text-center font-display mt-1 font-semibold ">@verticallyxx</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        Mau nangis xlhome gangguan mulu</p>
                      <p class="text-center font-display mt-1 font-semibold ">@Imaucans</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        saat nya beralih ke xlhome</p>
                      <p class="text-center font-display mt-1 font-semibold ">@Vousmevoyezyz</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        xlhome kamu kenapa naik turun gini internetnya :(</p>
                      <p class="text-center font-display mt-1 font-semibold ">@pixiehrt_z</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/smile.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        @Askrlfess xlhome menurutku bagus sih</p>
                      <p class="text-center font-display mt-1 font-semibold ">@sheapatu</p>
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="px-10">
                      <div class="text-center w-[-100px] p-3 shadow-xl bg-[#EDEDED]/40 rounded-xl ">
                      <img class="mx-auto h-16 mb-1"
                          src="{{ URL::to('/img/providers/bad.png') }}">
                      <p class="p-3 text-center font-display text-normal font-normal">
                        Xlhome lagi kenapa dehh lola pisan</p>
                      <p class="text-center font-display mt-1 font-semibold ">@winterthefirst</p>
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
                      <h1 class="font-display pb-5 text-3xl font-extrabold text-base-800">Hasil Akurasi Xlhome</h1>
                  </div>
                  <div class=" mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                      <h2 class="font-normal text-base-500">Dengan menggunakan metode Naive Bayes dalam analisis ini, hasil yang kami dapatkan untuk akurasi provider Xlhome ini adalah sebagai berikut.</h2>
                  </div>
                  <div class="grid gap-5 grid-cols-2 pt-5 md:grid-cols-1 lg:grid-cols-4 px-14">
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display font-semibold ">Accuracy</p>
                          <p class="font-display mt-3 text-3xl font-bold">68%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display font-semibold ">Precision</p>
                          <p class="font-display mt-3 text-3xl font-bold">73%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display font-semibold ">Recall</p>
                          <p class="font-display mt-3 text-3xl font-bold">68%</p>
                      </div>
                      <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                          <p class="font-display font-semibold ">F1-Score</p>
                          <p class="font-display mt-3 text-3xl font-bold">67%</p>
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
                      Dengan akurasi yang mencapai 68%. 
                      Hasil analisis yang didapatkan untuk provider internet First Media ini dalam waktu 6 bulan memiliki data 
                      kelas sentimen negatif sebanyak <strong>203 data</strong>, 
                      kelas sentimen netral sebanyak <strong>155 data</strong>, 
                      dan kelas sentimen positif sebanyak <strong>108 data</strong>.
                  </p>
                  </div>
          </div>
      </div>
  </div>

</x-layouts.base>