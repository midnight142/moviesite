<div class="col-lg-12 col-md-12 f-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=home">Home</a></li>
            <li class="breadcrumb-item"><a href="#"><?= $name->name ?></a></li>
        </ol>
    </nav>


    <div class="col-lg-12 list-related-box">
        <div class="row">
            <?php
            foreach ($kind as $k) {
                ?>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 related-item">
                    <a href="?controller=movie&action=detail&id=<?= $k->id ?>">
                        <figure class="text-center">
                            <img src="<?= $k->image ?>" class="figure-img img-fluid rounded mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">
                                <p class="fg-name-vi"><?= $k->name_vi ?></p>
                                <p class="fg-name-en"><?= $k->name_en ?></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <?php
            }
            ?>

        </div>
    </div>

    <div class="pagination">
        <a href="?controller=list&action=category&id=<?= $id ?>&page=<?= ($page + 1) ?>"><button>Trang kế →</button></a>
    </div>
</div>