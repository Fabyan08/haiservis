<main>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand me-lg-5 me-0" href="?page=index">
                <img src="images/logo.png" style="width: 120px;" class="logo-image img-fluid" alt="templatemo pod talk">
            </a>

            <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                <div class="input-group input-group-lg">
                    <input name="search" type="search" class="form-control" id="search" placeholder="Cari..." aria-label="Search" />

                    <button type="submit" class="form-control" id="submit">
                        <i class="bi-search"></i>
                    </button>
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php include('components/navbar.php') ?>
        </div>
    </nav>


    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">

                    <h2 class="mb-0">Kontak & Pengaduan</h2>
                </div>

            </div>
        </div>
    </header>


    <section class="section-padding" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-12 pe-lg-5">
                    <div class="contact-info">
                        <h3 class="mb-4">Komunikasikan Kendalamu</h3>

                        <p class="d-flex border-bottom pb-3 mb-4">
                            <strong class="d-inline me-4">Phone:</strong>
                            <span>0895 1234 7689</span>
                        </p>

                        <p class="d-flex border-bottom pb-3 mb-4">
                            <strong class="d-inline me-4">Email:</strong>
                            <a href="#">haiservis@gmail.com</a>
                        </p>

                        <p class="d-flex">
                            <strong class="d-inline me-4">Location:</strong>
                            <span>Jalan Hayam Wuruk, Kota Yogyakarta</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.819917806043!2d103.84793601429608!3d1.281807962148459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da190c2c94ccb3%3A0x11213560829baa05!2sTwitter!5e0!3m2!1sen!2smy!4v1669212183861!5m2!1sen!2smy" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-section section-padding pt-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Tulis di Sini!</h4>
                    </div>

                    <form action="#" method="post" class="custom-form contact-form" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">

                                    <label for="floatingInput">Nama Kamu</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                    <label for="floatingInput">Email Kamu</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <input type="text" name="company" id="name" class="form-control" placeholder="Name" required="">

                                    <label for="floatingInput">Institusi</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>

                                    <label for="floatingTextarea">Tulis Pesan Kamu....</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Kirim</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>