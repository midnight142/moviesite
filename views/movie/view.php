<div class="col-lg-12 col-md-12 f-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=home">Home</a></li>
            <li class="breadcrumb-item"><a href="?controller=list&action=kind&id=<?= $kind->id ?>"><?= $kind->name ?></a></li>
            <li class="breadcrumb-item"><a href="?controller=list&action=category&id=<?= $cat->id ?>"><?= $cat->cat ?></a></li>
            <li class="breadcrumb-item"><a href="?controller=movie&action=detail&id=<?= $fi->id ?>"><?= $fi->name_vi ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">Xem Phim</li>
        </ol>
    </nav>

    <div class="f-jw-info">
        <div class="name-group">
            <p class="n1"><?= $fi->name_vi ?></p>
            <p class="n2"><?= $fi->name_en ?></p>
        </div>
        <div class="info-group">
            <ul>
                <li><i class="fas fa-user"></i> <?= $fi->director ?></li>
                <li><i class="fas fa-clock"></i> <?= $fi->time ?></li>
                <li><i class="far fa-calendar-alt"></i> <?= $fi->year ?></li>
                <li><i class="fas fa-eye"></i> <?= number_format($fi->views) ?> lượt xem</li>
            </ul>
        </div>
    </div>
    
    <div class="embed-responsive embed-responsive-16by9 player">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GrAaG6zifRQ" allowfullscreen></iframe>
    </div>

    <div class="related-header">
        <span><i class="far fa-comment-dots"></i> Bình Luận</span>
    </div>

    <section class="content-item" id="comments">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form action="comment.php" method="post">
                        <h3 class="pull-left">New Comment</h3>
                        <fieldset>
                            <div class="row">
                                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                    <textarea class="form-control" id="message" name="comment" placeholder="Your message" required=""></textarea>
                                </div>
                                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                    <input type="text" class="form-control" name="nickname" placeholder="Nick name">
                                </div>
                            </div>
                            <input type="hidden" value="<?= $fi->id ?>" name="fid">
                            <input type="submit" class="btn btn-primary pull-right" value="Submit">
                        </fieldset>
                    </form>

                    <h3>4 Comments</h3>
                    <?php
                        foreach ($cmt as $c) {
                            ?>
                                <!-- COMMENT 1 - START -->
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?= $c->nickname ?></h4>
                                        <p><?= $c->comment ?></p>
                                    </div>
                                </div>
                                <!-- COMMENT 1 - END -->
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>


