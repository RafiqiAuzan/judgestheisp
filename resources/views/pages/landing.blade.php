<x-layouts.base title="Analisis Sentimen untuk ISP">
  
    {{-- Hero --}}
    <section class="lg:grid">
        <div class="bg-[#EDEDED] pt-[84px] lg:pt-0 lg:order-last">
            <div class="container mx-auto py-7 lg:pt-16">
                <div class="mx-auto text-center bg-gradient-to-r from-[#EDEDED] via-[#41B853]/50 to-[#EDEDED] lg:py-[20px] lg:mb-[110px] lg:px-32">
                    <!-- Additional required wrapper -->
                    <div class="swiper mySwiper2">
                        <div class="lg:flex mx-auto swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a class="" href="https://biznethome.net/"><img class="mx-auto h-24 p-3"
                                src="{{ URL::to('/img/landing/biznet.webp') }}"></a></div>
                            <div class="swiper-slide">
                                <a class="" href="https://www.firstmedia.com/"><img class="mx-auto h-24 p-3"
                                src="{{ URL::to('/img/landing/firstmedia.png') }}"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="" href="https://indihome.co.id/"><img class="mx-auto h-24 p-3"
                                    src="{{ URL::to('/img/landing/indihome.png') }}"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="" href="https://myrepublic.co.id/"><img class="mx-auto h-24 p-3"
                                    src="{{ URL::to('/img/landing/myrepublic.png') }}"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="" href="https://satu.xl.co.id/xl-home-fiber"><img class="mx-auto h-24 p-3"
                                    src="{{ URL::to('/img/landing/Xlhome.png') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#EDEDED] lg:pt-[72px]">
            <div class="container mx-auto">
                <div class="lg:flex items-center min-h-[37rem]">
                    <div class="order-2 ">
                        <img class="mx-auto w-[600px]"
                        src="{{ URL::to('/img/landing/hero.svg') }}">
                    </div>
                    <div class="content-center px-3 lg:grow lg:px-10">
                        <h1
                            class="font-display not-italic font-extrabold text-3xl lg:text-[40px] text-[#262829] pb-5 lg:leading-[100%]">
                            #PilihProviderYangTepat
                        </h1>
                        <p
                            class="font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                            Merasa bingung pilih provider? Tidak tau mana yang lebih baik diantara 5 provider ini? Apa sih pendapat beberapa orang terkait 5 provider ini? Mari lihat hasil analisis kami.</p>
                        <a href="/hasilanalisis"><x-atoms.button class="lg:w-auto w-full mt-[38px] mb-14">
                            <i class="bi bi-arrow-right-circle-fill"></i> Lihat Analisis
                        </x-atoms.button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Tahukah Kamu? --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto">
                <div class="lg:flex items-center rounded-3xl bg-[#F6F6F6]/60">
                    <div class="item-center lg:w-[800px]">
                        <img class="mx-auto lg:w-[400px]"
                            src="{{ URL::to('/img/landing/Thinking.svg') }}">
                    </div>
                    <div class="item-center px-3 lg:grow lg:px-10 lg:mr-[95px] ">
                        <h1
                            class="font-display not-italic font-extrabold text-3xl lg:text-[40px] text-[#262829] pb-5 lg:leading-[100%]">
                            <strong>Tahukah Kamu?</strong>
                        </h1>
                        <p class="font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem] pb-5 lg:pb-0">
                            Menurut hasil survei milik APJII 2022 menunjukkan bahwa sebanyak <strong>75,64%</strong> masyarakat tidak berlangganan internet dirumahnya.
                            Dan persentase masyarakat yang berlangganan pada tiap ISP lebih dari dua tahun hanya sebanyak <strong>31,71%</strong>.
                            <br><br>Apakah kamu salah satu diantaranya?
                            <br>Bingung provider mana yang dipercaya oleh masyarakat?
                            <br>Ingin tahu pendapat orang-orang pada tiap providernya?</p>
                    </div>
                </div>
            </div>

    {{-- Solusi Tepat Ada Disini! --}}
            <div class="container mx-auto">
                <div class="lg:flex items-center rounded-3xl bg-[#F6F6F6]/60 mt-10">
                    <div class="lg:order-2 item-center lg:w-[800px]">
                        <img class="mx-auto lg:w-[400px]"
                            src="{{ URL::to('/img/landing/creative.svg') }}">
                    </div>
                    <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                        <h1
                            class="  font-display not-italic font-extrabold text-3xl lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                            <strong>Solusi Tepat Ada Disini!</strong>
                        </h1>
                        <p
                            class="font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                            Kami ada untuk membantu permasalahan kalian bagi yang memiliki pertanyaan yang sama seperti diatas. 
                            Dengan hasil analisis kami, kalian dapat melihat :</p>
                        <div class="flex mt-3">
                            <img class="w-10 h-10"
                            src="{{ URL::to('/img/landing/ceklis.png') }}">
                            <p class="my-auto ml-5 font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                                seperti apa pendapat orang-orang pada tiap providernya</p>
                        </div>
                        <div class="flex mt-2 lg:mt-0 pb-5">
                            <img class="w-10 h-10"
                            src="{{ URL::to('/img/landing/ceklis.png') }}">
                            <p class="my-auto ml-5 font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">
                                persentase seberapa banyak orang-orang yang <strong>menyukai</strong> maupun <strong>tidak menyukai</strong> provider tersebut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Hasil Akurasi Kami --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto flex items-center space-between">
                <div class="px-10 pb-8 mx-auto text-center rounded-3xl bg-[#F6F6F6]/60 mt-10 mb-[60px]">
                    <div class="mt-10 lg:mt-10">
                        <h1 class="font-display pb-5 text-3xl font-extrabold text-base-800">Hasil Akurasi Kami</h1>
                    </div>
                    <div class=" mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                        <h2 class="font-normal text-base-500">Dengan menggunakan metode Naive Bayes dalam analisis ini, hasil yang kami dapatkan memiliki akurasi rata-rata diatas 80%.</h2>
                    </div>
                    <div class="grid gap-5 grid-cols-2 pt-5 md:grid-cols-1 lg:grid-cols-4 px-14">
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">Accuracy</p>
                            <p class="font-display mt-3 text-3xl font-bold">80%</p>
                        </div>
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">Precision</p>
                            <p class="font-display mt-3 text-3xl font-bold">81%</p>
                        </div>
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">Recall</p>
                            <p class="font-display mt-3 text-3xl font-bold">80%</p>
                        </div>
                        <div class="rounded-xl shadow-md p-5 bg-[#BEF5C2]/90">
                            <p class="font-display font-semibold ">F1-Score</p>
                            <p class="font-display mt-3 text-3xl font-bold">80%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</x-layouts.base>
