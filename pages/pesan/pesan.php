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
                                    <a href="?page=detail" class="custom-block-image-wrap">
                                        <img src="images/industry/omahtukang.png" style="width: 120px; height:100px; object-fit:contain" alt="">

                                    </a>


                                </div>

                                <div class="mt-2">
                                    <a href="?page=detail" class="btn custom-btn"> Detail </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1 row">
                                    <small class="me-4 col">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>
                                    <small class="me-4 col">
                                        <i class="bi-map custom-icon"></i>
                                        Jalan Hayam Wuruk 17, Surabaya </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="?page=detail"> Jasa Bangunan </a>
                                </h5>



                                <p class="mb-0" style="font-weight: 500;">Jasa Untuk Kamu yang Butuh Bantuan Bangunan Rumah</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge text-bg-success ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge text-bg-success ms-auto">
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
                                    <a href="?page=detail" class="custom-block-image-wrap">
                                        <img src="images/industry/air.png" style="width: 120px; height:100px; object-fit:contain" alt="">

                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="?page=detail" class="btn custom-btn"> Detail </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1 row">
                                    <small class="me-4 col">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>
                                    <small class="me-4 col">
                                        <i class="bi-map custom-icon"></i>
                                        Jalan Gajah Mada 18, Gebang, Jogja </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="?page=detail"> Jasa Pompa Air </a>
                                </h5>



                                <p class="mb-0" style="font-weight: 500;">Jasa Untuk Bantuan Perbaikan Perairan hingga Ledeng</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge text-bg-success ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge text-bg-success ms-auto">
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
                                    <a href="?page=detail" class="custom-block-image-wrap">
                                        <img src="images/industry/griffin.jpg" style="width: 120px; height:100px; object-fit:contain" alt="">

                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="?page=detail" class="btn custom-btn"> Detail </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1 row">
                                    <small class="me-4 col">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>
                                    <small class="me-4 col">
                                        <i class="bi-map custom-icon"></i>
                                        Jalan Anoman Obong 21, Jakarta</small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="?page=detail"> Jasa Servis AC </a>
                                </h5>



                                <p class="mb-0" style="font-weight: 500;"> Jasa Untuk Bantuan Perbaikan AC dan Elektronik</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge text-bg-success ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge text-bg-success ms-auto">
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
                                    <a href="?page=detail" class="custom-block-image-wrap">
                                        <img src="images/industry/jogja.jpg" style="width: 120px; height:100px; object-fit:contain" alt="">

                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="?page=detail" class="btn custom-btn"> Detail </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1 row">
                                    <small class="me-4 col">
                                        <i class="bi-star custom-icon"></i>
                                        4 Stars </small>
                                    <small class="me-4 col">
                                        <i class="bi-map custom-icon"></i>
                                        Jalan Surat 21, Malang </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="?page=detail"> Jasa Perbaiki Kunci </a>
                                </h5>



                                <p class="mb-0" style="font-weight: 500;">Jasa Perbaikan Kunci dan Barang Sehari-hari</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge text-bg-success ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge text-bg-success ms-auto">
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
                                    <a href="?page=detail" class="custom-block-image-wrap">
                                        <img src="images/industry/mrd.png" style="width: 120px; height:100px; object-fit:contain" alt="">

                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="?page=detail" class="btn custom-btn"> Detail </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1 row">
                                    <small class="me-4 col">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>
                                    <small class="me-4 col">
                                        <i class="bi-map custom-icon"></i>
                                        Jalan Kacapiring IV/18, Jember </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="?page=detail"> Jasa Servis Laptop </a>
                                </h5>



                                <p class="mb-0" style="font-weight: 500;">Jasa Untuk Perbaikan dan Maintenance Laptop/PC</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge text-bg-success ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge text-bg-success ms-auto">
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
                                    <a href="?page=detail" class="custom-block-image-wrap">
                                        <img src="images/industry/pijat.png" style="width: 120px; height:100px; object-fit:contain" alt="">

                                    </a>

                                </div>

                                <div class="mt-2">
                                    <a href="?page=detail" class="btn custom-btn"> Detail </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1 row">
                                    <small class="me-4 col">
                                        <i class="bi-star custom-icon"></i>
                                        5 Stars </small>
                                    <small class="me-4 col">
                                        <i class="bi-map custom-icon"></i>
                                        Jalan Mayor 21, Yogyakarta </small>

                                </div>

                                <h5 class="mb-2">
                                    <a href="?page=detail"> Jasa Pijat </a>
                                </h5>



                                <p class="mb-0" style="font-weight: 500;">Jasa Pijat Area Yogyakarta Murah Meriah</p>


                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge text-bg-success ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge text-bg-success ms-auto">
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