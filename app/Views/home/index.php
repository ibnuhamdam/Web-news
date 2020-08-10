<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <section class="headline">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="headline-news mt-5">
                    <div class="row">
                        <div class="col-6 pr-0  head-1" style="background:  linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('<?= base_url('assets/'); ?>/headline.jpg');background-size:cover; background-repeat: no-repeat;">
                            <a href="#">
                                <h5>Judul Utama</h5>
                            </a>
                            <hr>
                        </div>
                        <div class="col-6">

                            <div class="row">
                                <div class="col-6 pr-0 item head-2 text-left" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/'); ?>/headline-2.jpg');background-size:cover; background-repeat: no-repeat;">
                                    <a href="#">
                                        <h5>Judul Utama</h5>
                                    </a>
                                    <hr>
                                </div>
                                <div class="col-6 pr-0 item head-2 text-left" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/'); ?>/headline-3.jpg');background-size:cover; background-repeat: no-repeat;">
                                    <a href="#">
                                        <h5>Judul Utama</h5>
                                    </a>
                                    <hr>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-6 pr-0 item head-2" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/'); ?>/headline-4.jpg');background-size:cover; background-repeat: no-repeat;">
                                    <a href="#">
                                        <h5>Judul Utama</h5>
                                    </a>
                                    <hr>
                                </div>
                                <div class="col-6 pr-0 item head-2" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/'); ?>/headline-5.jpg');background-size:cover; background-repeat: no-repeat;">
                                    <a href="#">
                                        <h5>Judul Utama</h5>
                                    </a>
                                    <hr>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="olahraga">
        <hr>
        <div class="row">
            <div class="col-12 mb-2">
                <h5> Olahraga</h5>
                <div class="row mt-4">
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-5">
                                <img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h5>Judul</h5>
                                <hr>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, molestiae? Autem explicabo dicta odit porro? Odio officia officiis, dolore minima neque nostrum expedita voluptates dolorum tempore ipsum assumenda, deleniti vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-5">
                                <img src="<?= base_url('assets'); ?>/headline.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h5>Judul</h5>
                                <hr>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis pariatur a aspernatur veniam qui? Beatae, pariatur non temporibus praesentium est voluptas suscipit numquam deserunt eveniet fuga eaque voluptatem earum sequi? </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="covid">
        <!-- <hr> -->
        <div class="row">
            <div class="col-12 mb-2">
                <h5> Covid-19</h5>
                <div class="row mt-4">
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-5">
                                <img src="<?= base_url('assets'); ?>/headline-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h5>Covid</h5>
                                <hr>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, molestiae? Autem explicabo dicta odit porro? Odio officia officiis, dolore minima neque nostrum expedita voluptates dolorum tempore ipsum assumenda, deleniti vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-5">
                                <img src="<?= base_url('assets'); ?>/headline-5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h5>Covid</h5>
                                <hr>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis pariatur a aspernatur veniam qui? Beatae, pariatur non temporibus praesentium est voluptas suscipit numquam deserunt eveniet fuga eaque voluptatem earum sequi? </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="iklan mt-5">
        <div class="row">
            <div class="col-md-12 isi text-center py-auto">
                <h3 class="py-5">Iklan 1140×130px</h3>
            </div>
        </div>
    </section>

    <section class="lain-lain">
        <hr>
        <div class="row">
            <div class="col-12 mb-2">
                <h5> Berita Lainnya</h5>
                <div class="row mt-4">
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, molestiae? Autem explicabo dicta odit porro? Odio officia officiis, dolore minima neque nostrum expedita voluptates dolorum tempore ipsum assumenda, deleniti vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis pariatur a aspernatur veniam qui? Beatae, pariatur non temporibus praesentium est voluptas suscipit numquam deserunt eveniet fuga eaque voluptatem earum sequi? </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, molestiae? Autem explicabo dicta odit porro? Odio officia officiis, dolore minima neque nostrum expedita voluptates dolorum tempore ipsum assumenda, deleniti vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis pariatur a aspernatur veniam qui? Beatae, pariatur non temporibus praesentium est voluptas suscipit numquam deserunt eveniet fuga eaque voluptatem earum sequi? </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, molestiae? Autem explicabo dicta odit porro? Odio officia officiis, dolore minima neque nostrum expedita voluptates dolorum tempore ipsum assumenda, deleniti vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis pariatur a aspernatur veniam qui? Beatae, pariatur non temporibus praesentium est voluptas suscipit numquam deserunt eveniet fuga eaque voluptatem earum sequi? </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, molestiae? Autem explicabo dicta odit porro? Odio officia officiis, dolore minima neque nostrum expedita voluptates dolorum tempore ipsum assumenda, deleniti vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 content">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= base_url('assets'); ?>/headline.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <p class="text-left text-secondary">10/08/2020</p>
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis pariatur a aspernatur veniam qui? Beatae, pariatur non temporibus praesentium est voluptas suscipit numquam deserunt eveniet fuga eaque voluptatem earum sequi? </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 justify-content-center text-center">
                <button class="btn btn-lihatlain">Lihat Lainnya</button>
            </div>
        </div>
    </section>

    <section class="blog">
        <hr>
        <div class="row">
            <div class="col-12">
                <h5>Our Blog</h5>
                <div class="row mb-4 mt-3">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6"><img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt=""></div>
                            <div class="col-6">
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify">Lorem ipsum dolor sit sequi nemo numquam accusamus obcaecati quaerat.</p>
                                <p class="text-left text-secondary">Nama Penulis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6"><img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt=""></div>
                            <div class="col-6">
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify">Lorem ipsum dolor sit, ad temporibus sequi nemo numquam accusamus obcaecati quaerat.</p>
                                <p class="text-left text-secondary">Nama Penulis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6"><img src="<?= base_url('assets'); ?>/headline-2.jpg" class="img-fluid" alt=""></div>
                            <div class="col-6">
                                <h5> <a href="#"> Judul berita </a></h5>
                                <p class="text-justify">Lorem ipsum dolor sit, temporibus sequi nemo numquam accusamus obcaecati quaerat.</p>
                                <p class="text-left text-secondary">Nama Penulis</p>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

</div>
<?= $this->endSection('content'); ?>