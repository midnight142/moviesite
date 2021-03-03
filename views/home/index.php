<div class="col-md-12 col-lg-8 col-xl-8 tab-content">
    <div class="row list-movie">
        <div class="col-xl-12 movie-title-wrap">
            <div class="movie-title">
                <h2 class="caption">Phim Hành Động</h2>
                <button type="button" class="btn btn-secondary btn-sm" style="background-color: rgba(210, 201, 255, 0.04)"><a href="?controller=list&action=category&id=1">View All</a></button>
            </div>
        </div>
        <?php
            foreach ($film as $f) {
                ?>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-3 item">
                        <a href="?controller=movie&action=detail&id=<?= $f->id ?>">
                            <div class="card">
                                <img src="<?= $f->image ?>" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="entry-name"><?= $f->name_vi ?></span>
                                    <span class="original-name"><?= $f->name_en ?></span>
                                </div>
                                <span class="ribbon"><?= $f->quality ?></span>
                            </div>
                        </a>
                    </div>
                <?php
            }
        ?>

        <div class="col-xl-12 movie-title-wrap">
            <div class="movie-title">
                <h2 class="caption">Phim Lẻ</h2>
                <button type="button" class="btn btn-secondary btn-sm" style="background-color: rgba(210, 201, 255, 0.04)"><a href="?controller=list&action=kind&id=1">View All</a></button>
            </div>
        </div>

        <?php
        foreach ($film2 as $f) {
            ?>
            <div class="col-6 col-sm-4 col-md-3 col-xl-3 item">
                <a href="?controller=movie&action=detail&id=<?= $f->id ?>">
                    <div class="card">
                        <img src="<?= $f->image ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <span class="entry-name"><?= $f->name_vi ?></span>
                            <span class="original-name"><?= $f->name_en ?></span>
                        </div>
                        <span class="ribbon"><?= $f->quality ?></span>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>

        <div class="col-xl-12 movie-title-wrap">
            <div class="movie-title">
                <h2 class="caption">Phim Việt Nam</h2>
            </div>
        </div>

        <?php
        foreach ($film3 as $f) {
            ?>
            <div class="col-6 col-sm-4 col-md-3 col-xl-3 item">
                <a href="?controller=movie&action=detail&id=<?= $f->id ?>">
                    <div class="card">
                        <img src="<?= $f->image ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <span class="entry-name"><?= $f->name_vi ?></span>
                            <span class="original-name"><?= $f->name_en ?></span>
                        </div>
                        <span class="ribbon"><?= $f->quality ?></span>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>
