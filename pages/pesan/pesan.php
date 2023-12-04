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

            <?php include('components/navbar.php'); ?>
    </nav>


    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">

                    <h2 class="mb-0">Pesan Yuk!</h2>
                </div>

            </div>
        </div>
    </header>


    <!-- <div class="d-flex"> -->

    <section class="latest-podcast-section section-padding d-flex" style="margin-top: -100px;" id="section_2">
        <div class="style col-lg-2 gx-5 row" style="margin-left: 10px;">
            <form action="">
                <h5>Filter</h5>
                <hr>
                <h6 style="font-weight:500; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Urutkan</h6>
                <select value="" class="form-control">
                    <option value="">Harga Terendah</option>
                    <option value="">Harga Terendah</option>
                    <option value="">Rating Terendah</option>
                    <option value="">Rating Terendah</option>
                </select>
                <hr>
                <h6 style="font-weight:500; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Lokasi</h6>

                <input type="text" class="form-control" placeholder="Lokasi">
                <!-- <select name="" id="" class="form-control">
                    <option value="">--Lokasi--</option>
                    <option value="">Jakarta</option>
                    <option value="">Surabaya</option>
                    <option value="">Malang</option>
                    <option value="">Banten</option>
                </select> -->
                <button style="margin-top: 5px;" class="btn btn-block btn-primary">Apply</button>

                <hr>

                <div class="" style="margin-top: 20px;">
                    <h6 style="font-weight:500; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Rentang Harga</h6>
                    <div class="filter-content collapse show" id="collapse_3" style="margin-top: 10px;">
                        <div class="card-body">
                            <!-- <input type="range" class="custom-range" min="0" max="100" name=""> -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Minimal</label>
                                    <input class="form-control" placeholder="Rp " type="number">
                                </div>
                                <div class="form-group text-right col-md-6">
                                    <label>Maksimal</label>
                                    <input class="form-control" placeholder="Rp" type="number">
                                </div>
                            </div> <!-- form-row.// -->
                            <button style="margin-top: 5px;" class="btn btn-block btn-primary">Apply</button>
                        </div><!-- card-body.// -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h6 style="font-weight:500; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Rating</h6>

                    <div class="col">
                        <input type="checkbox">
                        <i class="bi-star">2</i>
                    </div>
                    <div class="col">
                        <input type="checkbox">
                        <i class="bi-star">3</i>
                    </div>
                    <div class="col">
                        <input type="checkbox">
                        <i class="bi-star">5</i>
                    </div>
                    <button style="margin-top: 5px;" class="btn btn-block btn-primary">Apply</button>

                </div>
            </form>
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="d-flex items-center" style="gap: 100px;">
                    <div class="">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Pilih Jasa Kamu</h4>
                        </div>
                    </div>
                    <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                        <div class="input-group input-group-lg">
                            <input name="search" type="search" class="form-control" id="search" placeholder="Jasa bangunan..." aria-label="Search">

                            <button type="submit" class="form-control" id="submit">
                                <i class="bi-search"></i>
                            </button>
                        </div>
                    </form>

                </div>
                <!-- <div class="flex justify-content-start">
                    <div class="col-lg-5">
                        <select name="" id="" class="form-control">
                            <option value="">Jakarta</option>
                            <option value="">Jakarta</option>
                            <option value="">Jakarta</option>
                            <option value="">Jakarta</option>

                        </select>
                    </div>
                </div> -->
                <div class="row gy-3">
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="images/trending1.jpg" style="width: 120px;" alt="">

                                    </a><a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn"> Subscribe </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html"> Jasa Bangunan </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg" class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Sebuah Jasa Bangunan yang Siap Membantumu...</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="images/trending1.jpg" style="width: 120px;" alt="">

                                    </a><a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn"> Subscribe </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html"> Jasa Bangunan </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg" class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Sebuah Jasa Bangunan yang Siap Membantumu...</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="images/trending1.jpg" style="width: 120px;" alt="">

                                    </a><a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn"> Subscribe </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html"> Jasa Bangunan </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg" class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Sebuah Jasa Bangunan yang Siap Membantumu...</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="images/trending1.jpg" style="width: 120px;" alt="">

                                    </a><a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn"> Subscribe </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html"> Jasa Bangunan </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg" class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Sebuah Jasa Bangunan yang Siap Membantumu...</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="images/trending1.jpg" style="width: 120px;" alt="">

                                    </a><a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn"> Subscribe </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html"> Jasa Bangunan </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg" class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Sebuah Jasa Bangunan yang Siap Membantumu...</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="images/trending1.jpg" style="width: 120px;" alt="">

                                    </a><a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn"> Subscribe </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html"> Jasa Bangunan </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg" class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Sebuah Jasa Bangunan yang Siap Membantumu...</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- </div> -->



</main>