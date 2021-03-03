<div class="col-lg-8 col-md-12 f-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=home">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Trailer</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $trailer->name_vi ?></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="f-detail">
                <div class="thumb">
                    <img src="<?= $trailer->image ?>" alt="">
                    <div class="btn-block">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Trailer</button>
                    </div>
                </div>

                <div class="movie-info">
                    <h2><?= $trailer->name_vi ?></h2>
                    <h5><?= $trailer->name_en ?></h5>
                    <div class="group-info" style="margin-top: 20px;">
                        <p>Đạo diễn: <b><?= $trailer->director ?></b></p>
                        <p>Quốc Gia: <a href=""><?= $country ?></a></p>
                        <p>Năm: <a href=""><?= $trailer->year ?></a></p>
                        <p>Ngày ra rạp: <?= $trailer->date ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="film-content">
        <div class="f-content-header">
            <h5>NỘI DUNG PHIM</h5>
        </div>
        <div class="f-content-desc">
            <?= $trailer->desc ?>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SC7BfxpWieM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="related-header">
        <span><i class="fas fa-paper-plane"></i> CÓ THỂ BẠN CŨNG MUỐN XEM</span>
    </div>
    <div class="col-lg-12 list-related-box">
        <div class="row">
            <?php
            foreach ($related_t as $r) {
                ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 related-item">
                    <a href="?controller=movie&action=trailer&id=<?= $r->id ?>">
                        <figure class="text-center">
                            <img src="<?= $r->image ?>" class="figure-img img-fluid rounded mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">
                                <p class="fg-name-vi"><?= $r->name_vi ?></p>
                                <p class="fg-name-en"><?= $r->name_en ?></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

