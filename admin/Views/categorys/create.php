<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= BASE_URL_ADMIN ?>?act=categorys" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create New Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN ?>?act=categorys">Categorys</a></div>
            <div class="breadcrumb-item">Create New Category</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Create New Category</h2>
        <!-- {{-- <p class="section-lead">--}}
        {{-- Tạo category--}}
        {{-- </p>--}} -->

        <form class="row" action="" method="post">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Write Your Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control <?= !empty($_SESSION['errors']['name']) ? 'is-invalid' : '' ?>" name="name" placeholder="Nhập name category của bạn">
                                <div class="invalid-feedback">
                                    <?= !empty($_SESSION['errors']['name']) ? $_SESSION['errors']['name'] : '' ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary" name="submit">Create Category</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>