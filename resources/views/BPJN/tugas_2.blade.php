@extends('layouts.layanan')

@section('content')
<br><br><br><br>
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">
                    <div class="comment-img"><img src="assets/img/blog/sawah.jpg" alt="" width="800" ></div><br>

                    <h2 class="entry-title">
                        <a href="{{ route('tugas-fungsi') }}">TUGAS DAN FUNGSI</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                    href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                    href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">

                        <h3>TUGAS</h3>

                        <p>
                            Balai Besar Pelaksanaan Jalan Nasional mempunyai tugas melaksanakan perencanaan, pengadaan,
                            pembangunan dan preservasi jalan dan jembatan, penerapan sistem manajemen mutu dan
                            pengendalian mutu pelaksanaan pekerjaan, penyediaan dan pengujian bahan dan peralatan serta
                            keselamatan dan laik fungsi jalan dan jembatan sesuai dengan ketentuan peraturan
                            perundang-undangan.
                        </p>

                        <h3>FUNGSI</h3>

                        <p>
                            Balai Besar Pelaksanaan Jalan Nasional menyelenggarakan fungsi:
                        </p>
                        <ol>
                            <li>Balai Besar Pelaksanaan Jalan Nasional menyelenggarakan fungsi:</li>
                            <li>penyiapan, pelaksanaan, dan pengolahan data dan informasi jalan dan jembatan, serta
                                verifikasi data jaringan jalan daerah, dan verifikasi usulan pemrograman jalan daerah;
                            </li>
                            <li>pelaksanaan studi kelayakan, survei, investigasi, dan evaluasi perencanaan teknis bidang
                                jalan dan jembatan termasuk keselamatan jalan, daerah rawan bencana, dan lingkungan;
                            </li>
                            <li>pelaksanaan studi kelayakan, survei, investigasi, dan evaluasi perencanaan teknis bidang
                                jalan dan jembatan termasuk keselamatan jalan, daerah rawan bencana, dan lingkungan;
                            </li>
                            <li>penyusunan rencana, program, dan anggaran penanganan jalan dan jembatan termasuk sistem
                                manajemen keselamatan konstruksi dan lingkungan serta perubahannya;</li>
                            <li>penyiapan rencana dan dokumen pengadaan bidang jalan dan jembatan termasuk penyusunan
                                dan pengawasan penerapan analisis harga satuan pekerjaan bidang jalan dan jembatan;</li>
                            <li>pengendalian dan pelaksanaan pengadaan barang dan jasa kegiatan penanganan jalan dan
                                jembatan sesuai dengan ketentuan peraturan perundang-undangan;</li>
                            <li>sertifikasi laik operasi mesin pencampur aspal (asphalt mixing plant);</li>
                            <li>pengendalian pelaksanaan pekerjaan dan perubahan kontrak pekerjaan bidang jalan dan
                                jembatan termasuk evaluasi kinerja penyedia jasa;</li>
                            <li>penerapan hasil pengembangan teknologi bahan dan peralatan jalan dan jembatan;</li>
                            <li>pengendalian penerapan sistem manajemen keselamatan konstruksi dan lingkungan di bidang
                                jalan dan jembatan;</li>
                            <li>pengendalian penerapan sistem manajemen keselamatan konstruksi dan lingkungan di bidang
                                jalan dan jembatan;</li>
                            <li>pelaksanaan analisis dampak lingkungan dan lalu lintas;</li>
                            <li>penyiapan rencana kerja pengendalian dan pengawasan, serta pemanfaatan sumber daya
                                konstruksi penanganan jalan termasuk jalan bebas hambatan dan jalan tol yang
                                dilaksanakan konstruksinya oleh pemerintah;</li>
                            <li>pelaksanaan koordinasi, evaluasi, dan pengawasan terhadap pembangunan jalan tol yang
                                dilaksanakan oleh Badan Usaha Jalan Tol;</li>
                            <li>koordinasi dan pemantauan kegiatan operasi dan pemeliharaan jalan bebas hambatan dan
                                jalan tol serta koordinasi pelaksanaan uji teknis dan operasi jalan tol dalam rangka
                                laik fungsi jalan tol yang berada di wilayah kerjanya;</li>
                            <li>pelaksanaan program kelaikan jalan dan jembatan nasional termasuk uji laik fungsi;</li>
                            <li>pengadaan atau penyediaan, penyimpanan, pemeliharaan, penggunaan, dan pemantauan bahan
                                dan peralatan untuk jalan dan jembatan termasuk suku cadang sesuai dengan kewenangan;
                            </li>
                            <li>pengadaan atau penyediaan, penyimpanan, pemeliharaan, penggunaan, dan pemantauan bahan
                                dan peralatan untuk jalan dan jembatan termasuk suku cadang sesuai dengan kewenangan;
                            </li>
                            <li>penyusunan rencana, program dan anggaran, serta evaluasi perencanaan teknis perbaikan
                                kerusakan jalan dan jembatan akibat bencana alam;</li>
                            <li>penyusunan rencana, program dan anggaran, serta evaluasi perencanaan teknis perbaikan
                                kerusakan jalan dan jembatan akibat bencana alam;</li>
                            <li>penyusunan rencana, program dan anggaran, serta evaluasi perencanaan teknis perbaikan
                                kerusakan jalan dan jembatan akibat bencana alam;</li>
                            <li>penyediaan konsultasi teknik penanganan jalan dan jembatan pada jalan daerah termasuk
                                konektivitas jaringan jalan;</li>
                            <li>penyusunan laporan akuntabilitas kinerja balai besar;</li>
                            <li>penyiapan bahan dan pendampingan dalam periode audit internal dan eksternal dalam rangka
                                penuntasan temuan terkait penanganan jalan dan jembatan; dan</li>
                            <li>pelaksanaan penyusunan laporan akuntansi keuangan dan akuntansi barang milik negara
                                selaku unit akuntansi wilayah serta laporan kinerja pelaksanaan urusan tata usaha,
                                kepegawaian, keuangan, umum, barang milik negara, hukum, komunikasi publik dan rumah
                                tangga, serta koordinasi dengan instansi terkait.</li>

                        </ol>

                    </div>

                    <div class="entry-footer">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">Business</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div>

                </article><!-- End blog entry -->

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Profil</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <li><a href="#">Sejarah <span>(25)</span></a></li>
                            <li><a href="{{ route('tugas-fungsi') }}">Tugas dan Fungsi <span>(12)</span></a></li>
                            <li><a href="#">Struktur Organisasi <span>(5)</span></a></li>
                            <li><a href="#">Info Pejabat <span>(22)</span></a></li>
                            <li><a href="#">Info Pegawai <span>(8)</span></a></li>
                            <li><a href="{{ route('lokasi-kantor') }}">Lokasi Kantor <span>(14)</span></a></li>
                        </ul>
                    </div><!-- End sidebar categories-->

                    <h3 class="sidebar-title">Berita Terkini</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                            <h4><a href="blog-single.html">Evaluasi Jalur Mudik Lebaran 2022 : Ruas PANTURA Selama Arus
                                    Mudik Lebaran Lancar Jaya</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2022</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                            <h4><a href="blog-single.html">Evaluasi Jalur Mudik Lebaran 2022 : Mandat Zeropotholes
                                    Sukses Di Jalur Mudik Lebaran, Wilan Kembali Siapkan Strategi Untuk Jalur NATARU
                                    2022 Mendatang</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2022</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                            <h4><a href="blog-single.html">Apresiasi Balai Untuk Seluruh Satker : Target Pekerja Padat
                                    Karya Tunai Jauh Melebihi Target.</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2022</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                            <h4><a href="blog-single.html">Dampingi Jokowi Dan Basuki Tinjau Renovasi TMII : Wilan
                                    Sampaikan Progres Penanganan Jalan Kawasan TMII Sudah Mencapai 97,41 Persen</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2022</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                            <h4><a href="blog-single.html">Peringatan HUT Ke-77 Republik Indonesia, Robert Sampaikan
                                    Pesan Menteri Basuki : Insan PUPR Adalah Petarung Pembangunan Infrastruktur
                                    Indonesia</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2022</time>
                        </div>

                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->
@endsection