<div class="body-panel">
    <div class="panel panel-default">
        <div class="panel-heading">
            Phim Hành Động
        </div>
        <div class="panel-body">
            <table width="100%">
                <tr>
                    <th>ID</th>
                    <th>Tên Phim</th>
                    <th>Đạo Diễn</th>
                    <th>Thời Lượng</th>
                    <th>Năm Sản Xuất</th>
                </tr>
                <?php
                    foreach ($film as $f) {
                        ?>
                            <tr>
                                <td id="m-id"><?= $f->id ?></td>
                                <td id="m-name"><a href="<?= HOST ?>?controller=movie&action=detail&id=<?= $f->id ?>"><?= $f->name_vi ?></a></td>
                                <td id="m-director"><?= $f->director ?></td>
                                <td id="m-time"><?= $f->time ?></td>
                                <td id="m-year"><?= $f->year ?></td>
                                <td id="m-hidden">
                                    <input type="hidden" id="m-name_en" value="<?= $f->name_en ?>">
                                    <input type="hidden" id="m-link" value="<?= $f->link ?>">
                                    <input type="hidden" id="m-img" value="<?= $f->image ?>">
                                    <input type="hidden" id="m-quality" value="<?= $f->quality ?>">
                                    <input type="hidden" id="m-category" value="<?= $f->category ?>">
                                    <input type="hidden" id="m-type" value="<?= $f->type ?>">
                                    <input type="hidden" id="m-country" value="<?= $f->country ?>">
                                    <input type="hidden" id="m-desc" value="<?= $f->desc ?>">
                                </td>
                                <td>
                                    <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="del"><i class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Phim Lẻ
        </div>
        <div class="panel-body">
            <table width="100%">
                <tr>
                    <th>ID</th>
                    <th>Tên Phim</th>
                    <th>Đạo Diễn</th>
                    <th>Thời Lượng</th>
                    <th>Năm Sản Xuất</th>
                </tr>
                <?php
                foreach ($film2 as $f) {
                    ?>
                    <tr>
                        <td id="m-id"><?= $f->id ?></td>
                        <td id="m-name"><a href="<?= HOST ?>?controller=movie&action=detail&id=<?= $f->id ?>"><?= $f->name_vi ?></a></td>
                        <td id="m-director"><?= $f->director ?></td>
                        <td id="m-time"><?= $f->time ?></td>
                        <td id="m-year"><?= $f->year ?></td>
                        <td id="m-hidden">
                            <input type="hidden" id="m-name_en" value="<?= $f->name_en ?>">
                            <input type="hidden" id="m-link" value="<?= $f->link ?>">
                            <input type="hidden" id="m-img" value="<?= $f->image ?>">
                            <input type="hidden" id="m-quality" value="<?= $f->quality ?>">
                            <input type="hidden" id="m-category" value="<?= $f->category ?>">
                            <input type="hidden" id="m-type" value="<?= $f->type ?>">
                            <input type="hidden" id="m-country" value="<?= $f->country ?>">
                            <input type="hidden" id="m-desc" value="<?= $f->desc ?>">
                        </td>
                        <td>
                            <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                            <a href="#" class="del"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Phim Chiếu Rạp
        </div>
        <div class="panel-body">
            <table width="100%">
                <tr>
                    <th>ID</th>
                    <th>Tên Phim</th>
                    <th>Đạo Diễn</th>
                    <th>Thời Lượng</th>
                    <th>Năm Sản Xuất</th>
                </tr>
                <?php
                foreach ($film3 as $f) {
                    ?>
                    <tr>
                        <td id="m-id"><?= $f->id ?></td>
                        <td id="m-name"><a href="<?= HOST ?>?controller=movie&action=detail&id=<?= $f->id ?>"><?= $f->name_vi ?></a></td>
                        <td id="m-director"><?= $f->director ?></td>
                        <td id="m-time"><?= $f->time ?></td>
                        <td id="m-year"><?= $f->year ?></td>
                        <td id="m-hidden">
                            <input type="hidden" id="m-name_en" value="<?= $f->name_en ?>">
                            <input type="hidden" id="m-link" value="<?= $f->link ?>">
                            <input type="hidden" id="m-img" value="<?= $f->image ?>">
                            <input type="hidden" id="m-quality" value="<?= $f->quality ?>">
                            <input type="hidden" id="m-category" value="<?= $f->category ?>">
                            <input type="hidden" id="m-type" value="<?= $f->type ?>">
                            <input type="hidden" id="m-country" value="<?= $f->country ?>">
                            <input type="hidden" id="m-desc" value="<?= $f->desc ?>">
                        </td>
                        <td>
                            <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                            <a href="#" class="del"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Phim Tài Liệu
        </div>
        <div class="panel-body">
            <table width="100%">
                <tr>
                    <th>ID</th>
                    <th>Tên Phim</th>
                    <th>Đạo Diễn</th>
                    <th>Thời Lượng</th>
                    <th>Năm Sản Xuất</th>
                </tr>
                <?php
                foreach ($film4 as $f) {
                    ?>
                    <tr>
                        <td id="m-id"><?= $f->id ?></td>
                        <td id="m-name"><a href="<?= HOST ?>?controller=movie&action=detail&id=<?= $f->id ?>"><?= $f->name_vi ?></a></td>
                        <td id="m-director"><?= $f->director ?></td>
                        <td id="m-time"><?= $f->time ?></td>
                        <td id="m-year"><?= $f->year ?></td>
                        <td id="m-hidden">
                            <input type="hidden" id="m-name_en" value="<?= $f->name_en ?>">
                            <input type="hidden" id="m-link" value="<?= $f->link ?>">
                            <input type="hidden" id="m-img" value="<?= $f->image ?>">
                            <input type="hidden" id="m-quality" value="<?= $f->quality ?>">
                            <input type="hidden" id="m-category" value="<?= $f->category ?>">
                            <input type="hidden" id="m-type" value="<?= $f->type ?>">
                            <input type="hidden" id="m-country" value="<?= $f->country ?>">
                            <input type="hidden" id="m-desc" value="<?= $f->desc ?>">
                        </td>
                        <td>
                            <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                            <a href="#" class="del"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Phim Việt Nam
        </div>
        <div class="panel-body">
            <table width="100%">
                <tr>
                    <th>ID</th>
                    <th>Tên Phim</th>
                    <th>Đạo Diễn</th>
                    <th>Thời Lượng</th>
                    <th>Năm Sản Xuất</th>
                </tr>
                <?php
                foreach ($film5 as $f) {
                    ?>
                    <tr>
                        <td id="m-id"><?= $f->id ?></td>
                        <td id="m-name"><a href="<?= HOST ?>?controller=movie&action=detail&id=<?= $f->id ?>"><?= $f->name_vi ?></a></td>
                        <td id="m-director"><?= $f->director ?></td>
                        <td id="m-time"><?= $f->time ?></td>
                        <td id="m-year"><?= $f->year ?></td>
                        <td id="m-hidden">
                            <input type="hidden" id="m-name_en" value="<?= $f->name_en ?>">
                            <input type="hidden" id="m-link" value="<?= $f->link ?>">
                            <input type="hidden" id="m-img" value="<?= $f->image ?>">
                            <input type="hidden" id="m-quality" value="<?= $f->quality ?>">
                            <input type="hidden" id="m-category" value="<?= $f->category ?>">
                            <input type="hidden" id="m-type" value="<?= $f->type ?>">
                            <input type="hidden" id="m-country" value="<?= $f->country ?>">
                            <input type="hidden" id="m-desc" value="<?= $f->desc ?>">
                        </td>
                        <td>
                            <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                            <a href="#" class="del"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chỉnh sửa</h4>
                </div>
                <form action="?controller=panel&action=update" method="post">
                    <div class="modal-body">
                        <span>ID</span>
                        <input class="form-control form-control-lg" id="m1-id" name="m1-id" type="text" readonly>
                        <span>Tên Phim</span>
                        <input class="form-control form-control-lg" id="m1-name" name="m1-name" type="text">
                        <span>Tên Gốc</span>
                        <input class="form-control form-control-lg" id="m1-name_en" name="m1-name_en" type="text">
                        <span>Link Phim</span>
                        <input class="form-control form-control-lg" id="m1-link" name="m1-link" type="text">
                        <span>Đạo Diễn</span>
                        <input class="form-control form-control-lg" id="m1-director" name="m1-director" type="text">
                        <span>Thời Lượng</span>
                        <input class="form-control form-control-lg" id="m1-time" name="m1-time" type="text">
                        <span>Chất Lượng</span>
                        <input class="form-control form-control-lg" id="m1-quality" name="m1-quality" type="text">
                        <span>Thể Loại</span>
                        <input class="form-control form-control-lg" id="m1-category" name="m1-category" type="text">
                        <span>Loại Phim</span>
                        <input class="form-control form-control-lg" id="m1-type" name="m1-type" type="text">
                        <span>Năm Sản Xuất</span>
                        <input class="form-control form-control-lg" id="m1-year" name="m1-year" type="text">
                        <span>Quốc Gia</span>
                        <input class="form-control form-control-lg" id="m1-country" name="m1-country" type="text">
                        <span>Mô Tả</span>
                        <textarea class="form-control form-control-lg" id="m1-desc" name="m1-desc"></textarea>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content del-movie">
                <div class="modal-header">
                    <h4 class="modal-title" id="msg"></h4>
                </div>
                <form action="?controller=panel&action=delete" method="post">
                    <input type="hidden" id="f-id" name="fid" value="">
                    <div class="modal-footer m-button">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>