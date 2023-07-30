<x-layouts.base title="Analisis Sentimen untuk ISP">

    {{-- Image --}}
    <section>
        <div class="bg-[#EDEDED] pt-[84px]">
            <div class="container mx-auto">
                <img class="mx-auto lg:w-[500px]"
                    src="{{ URL::to('/img/aboutus/discussion.svg') }}">
            </div>
        </div>
    </section>

    {{-- APA ITU JUDGES THE ISP --}}
    <section>
        <div class="bg-[#EDEDED] pt-[30px] lg:pb-[100px]">
            <div class="container mx-auto">
                <div class="items-center px-3 lg:grow">
                    <h1
                        class="text-center font-display not-italic font-extrabold text-3xl lg:text-[50px] text-[#60D072]/90 pb-8">
                        <strong>APA ITU<br><br>JUDGES THE ISP?</strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Pengertian --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto">
                <div class="lg:flex items-center rounded-3xl bg-[#F6F6F6]/60">
                    <div class="item-center lg:w-[800px]">
                        <img class="mx-auto lg:w-[400px]"
                            src="{{ URL::to('/img/aboutus/idea.svg') }}">
                    </div>
                    <div class="item-center px-3 lg:grow lg:px-10 lg:mr-[95px] ">
                        <p class="font-body not-italic font-normal text-base text-base-600 max-w-[50rem] pb-5 lg:pb-0">
                            <strong class=" text-[#60D072]/80 text-xl">Judges the ISP</strong>
                            merupakan sebuah platform untuk melihat hasil analasis terkait sentimen kepuasan pelanggan terhadap provider yang mereka gunakan.
                            Dengan bantuan media sosial twitter, kami mengambil tweet orang-orang mengenai tanggapan mereka terhadap salah satu provider internet.
                            Tweet tersebut akan kami kumpulkan dan kami jadikan sebuah data sebagai bahan analisis kami.
                            <br><br>Data yang sudah kami kumpulkan tersebut akan kami analisis untuk dibagi menjadi 3 kelas sentimen, diantaranya adalah negatif, netral, dan positif.
                            Setelah itu akan kami hitung dari setiap kelas sentimennya untuk melihat berapa jumlah data tersebut berdasarkan kelas sentimennya.
                            <br><br>Berdasarkan perhitungan tersebut akan <strong>menghasilkan sebuah analisis untuk dapat melihat berapa jumlah tanggapan yang bersifat positif maupun negatif dari orang-orang terhadap suatu provider internet</strong>. 
                        </p>
                    </div>
                </div>
            </div>

            {{-- Algoritma Naive Bayes --}}
            <div class="container mx-auto">
                <div class="lg:flex items-center rounded-3xl bg-[#F6F6F6]/60 mt-10">
                    <div class="lg:order-2 item-center lg:w-[800px]">
                        <img class="mx-auto lg:w-[400px]"
                            src="{{ URL::to('/img/aboutus/algorithm.svg') }}">
                    </div>
                    <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                        <h1
                            class="  font-display not-italic font-extrabold text-3xl lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                            <strong>Algoritma Naive Bayes</strong>
                        </h1>
                        <p
                            class="font-body not-italic font-normal text-base text-base-600 max-w-[50rem]">
                            Algoritma Naive Bayes adalah metode klasifikasi yang berdasarkan pada Teorema Bayes dengan asumsi "naif" atau sederhana. 
                            Ini adalah salah satu algoritma pembelajaran mesin yang paling populer untuk tugas klasifikasi teks, seperti analisis sentimen.
                            Dan algoritma Naive Bayes ini cocok untuk klasifikasi dua kelas atau multi-kelas.
                            <br><br>
                            Salah satu alasan kenapa kami memilih algoritma Naive Bayes ini adalah karena algoritma ini sangat populer dalam analisis teks karena kinerjanya yang baik, terutama ketika data teks relatif besar dan dimensi fitur (jumlah kata) cukup besar. Meskipun asumsi "naif" algoritma ini mungkin tidak selalu benar dalam bahasa alami, algoritma ini tetap sering memberikan hasil yang baik dalam tugas klasifikasi teks, termasuk analisis sentimen.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tahapan Analisis --}}
    <div class="bg-[#EDEDED] py-[50px]">
        <div class="container flex mx-auto">
            <div class="mx-auto py-10 rounded-3xl bg-[#F6F6F6]/60">
                <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                    <h1
                        class=" text-center font-display not-italic font-extrabold text-3xl lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                        <strong>Tahapan Analisis</strong>
                    </h1>
                    <p class="mx-auto font-body not-italic font-normal text-base text-base-600 max-w-[950px]">
                        Singkatnya, untuk melakukan analisis ini perlu beberapa tahapan yang perlu kalian ketahui, diantaranya adalah :
                        <br><br>1. Pengumpulan data<br>
                        Pada tahap ini kami melakukan pengumpulan data sentimen melalui media sosial twitter. dan data yang diambil harus berkaitan dengan provider internet yang akan dianalisis.
                        <br><br>2. Sentimen Polarity<br>
                        Pada tahap ini kami melakukan pelabelan sebuah data untuk membagikan data tersebut menjadi 3 kelas sentimen, yaitu terdiri dari negatif, netral, dan positif.
                        <br><br>3. Klasifikasi dan pengujian model algoritma Naive Bayes<br>
                        Pada tahap ini kami melakukan pengujian dengan bantuan perhitungan metrik yang membantu untuk mengukur seberapa baik model dapat memahami dan menganalisis sentimen yang terkandung dalam teks. Terdapat 4 metrik yang digunakan untuk mengukur atau mengevaluasi kinerja sebuah model, diantaranya adalah Accuracy, Precision, Recall, dan F1-Score.
                    </p>
                    <ul class="list-disc mx-auto font-body not-italic font-normal pl-[40px] pt-[10px] text-base text-base-600 max-w-[950px]">
                        <li>Acccuracy merupakan ketepatan suatu sistem melakukan pengklasifikasian yang benar atau sesuai.</li>
                        <li>Precision merupakan seberapa besar tingkat ketepatan antara informasi yang diminta oleh pengguna dengan jawaban yang diberikan oleh sistem.</li>
                        <li>Recall merupakan seberapa besar tingkat keberhasilan sistem dalam menemukan kembali sebuah informasi.</li>
                        <li>F1-Score merupakan parameter tunggal ukuran keberhasilan retrieval yang menggabungkan recall dan precision.</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.base>