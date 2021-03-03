<div class="col-lg-8 col-md-12 f-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=home">Home</a></li>
            <li class="breadcrumb-item"><a href="?controller=list&action=kind&id=<?= $type->id ?>"><?= $type->name ?></a></li>
            <li class="breadcrumb-item"><a href="?controller=list&action=category&id=<?= $cat->id ?>"><?= $cat->cat ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $film->name_vi ?></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="f-detail">
                <div class="thumb">
                    <img src="<?= $film->image ?>" alt="">
                    <div class="btn-block">
                        <?php
                            if (isset($_SESSION['bookmark']) && in_array($film->id, $_SESSION['bookmark'])) {
                                ?>
<!--                                    <button class="btn btn-info">Đã Theo Dõi</button>-->
                                <?php
                            }
                            else
                            {
                                ?>
                                    <a href="?controller=home&action=bookmark&id=<?= $film->id ?>">
                                        <button type="button" class="btn btn-success">Theo Dõi</button>
                                    </a>
                                <?php
                            }
                        ?>

                        <a href="?controller=movie&action=view&id=<?= $film->id ?>"><button type="button" class="btn btn-danger">Xem Phim</button></a>
                    </div>
                </div>

                <div class="movie-info">
                    <h2><?= $film->name_vi ?></h2>
                    <h5><?= $film->name_en ?></h5>
                    <div class="group-info" style="margin-top: 20px;">
                        <p>Đạo diễn: <b><?= $film->director ?></b></p>
                        <p>Quốc Gia: <a href="#"><?= $country ?></a></p>
                        <p>Năm: <a href="#"><?= $film->year ?></a></p>
                        <p>Thời lượng: <?= $film->time ?></p>
                        <p>Chất lượng: <?= $film->quality ?></p>
                        <p>Thể Loại: <a href="#"><?= $cat->cat ?></a></p>
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
            <?= $film->desc ?>
        </div>
    </div>
    <div class="related-header">
        <span><i class="fas fa-paper-plane"></i> CÓ THỂ BẠN CŨNG MUỐN XEM</span>
    </div>
    <div class="col-lg-12 list-related-box">
        <div class="row">
            <?php
                foreach ($related as $r) {
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 related-item">
                        <a href="?controller=movie&action=detail&id=<?= $r->id ?>">
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