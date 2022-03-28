@extends('layouts.main')
@section('container')

<header id="header" class="header">
    <section class="page-section " id="about">
        <div class="container">
            <div class="row">
                        <div class="col-lg-6 col-xl-5">
                            <div class="text-container">
                                <div class="section-title text-dark font-weight-bold">Welcome to Kampung Inggris </div>
                                <h1 class="h1-large text-dark font-weight-bold">Website ini di gunakan sebagai media promosi Kampung Inggris Pare</h1>
                                <p class="p-large">Informasi mengenai website ini masih terbatas, dengan adanya Kampung Inggris Pare kami berharap dapat membantu calon-calon siswa agar dapat memilih tempat kursus bahasa inggris faforit anda dan juga mengetahui secara langsung apa saja lembaga-lebanga kursus yang ada di kampung inggris.
                                    Silahkan dinilai dan berikan nilainya.</p>
                                <a class="btn btn-success" href="/about">About Me</a>
                                <a class="btn btn-primary" href="/posts">Kampung Inggris Pare</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="image-container">
                                <img class="img-fluid" src="img/1.png" alt="alternative">
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Saya tahu apa yang anda cari!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Mulai Dari Kampung Inggris Pare Kamu bisa mendapat apa yang kamu cari sekaligus yang kamu butuhkan, Berminat saya!</p>
                    <a class="btn btn-light btn-xl" href="/home">Mulai!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Mepersembahkan</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Trusted</h3>
                        <p class="text-muted mb-0">Kampung Inggris Pare selalu menyajikan konten yang terpecaya!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class="text-muted mb-0">Kampung Inggris Pare selalu memperbarui semua isi dari Kampus Fair.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Global</h3>
                        <p class="text-muted mb-0">Kampung Inggris Pare akan Segera menuju tahap Global!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Made with Love</h3>
                        <p class="text-muted mb-0">Dibuat dengan cinta untuk membantu yang membutuhkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Genta English Course</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-name">(BEC) Basic English Course</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Titik Nol English Course</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Global English Course</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Mr.Bob English Course</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-name">LC English Course</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Lihat Semua Lembaga Kursus Bahasa Inggris Pare</h2>
            <a class="btn btn-light btn-xl" href="/posts">Kunjungi Saya!</a>
        </div>
    </section>


</header>

<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Kampus Fair</div></div>
</footer>

@endsection


