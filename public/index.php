<?php

include __DIR__ . "/../src/view/parties/_header.php";
require_once __DIR__ . "/../src/routes/routes.php";

// session_start();

// if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == "admin") {
//     header("Location: /shop_product/admin");
// }

?>
<!-- navbar -->


<?php include_once __DIR__ . "/../src/view/parties/_navbar.php" ?>
<!-- Header-->
<header class="bg-dark py-5 background-home">
    <div class="my-5 px-4 px-lg-5 container">
        <div class="text-right text-white">
            <h1 class="fw-bolder display-4">
                <?php
                if (isset($_SESSION['user_name']) && $_SESSION['user_role'] == 'client') { ?>
                    <?=
                        $_SESSION['user_name'] . " مرحبا بك" ?>
                <?php } else {
                    echo "مرحبا بكم";
                }
                ?>
            </h1>
            <p class="mb-0 fw-normal text-white-50 lead">بوكاديا يرحب بكم</p>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="mt-5 px-4 px-lg-5 container">
        <div class="justify-content-center row-cols-2 row-cols-md-3 row-cols-xl-4 gx-4 gx-lg-5 row">
            <?php foreach ($products as $key => $value) { ?>
                <div class="mb-5 col">
                    <div class="h-100 card">
                        <!-- Product image-->
                        <img class="card-img-top object-fit-contain" src=<?= $value['product_image'] ?> alt="..."
                            style="height: 9.5rem;" />
                        <!-- Product details-->
                        <div class="p-4 card-body">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $value["product_name"] ?></h5>
                                <!-- Product price-->
                                <!-- <span class="text-muted text-decoration-line-through">20.00 DH</span> -->
                                <?php echo $value["product_price"] ?> DH
                            </div>
                        </div>
                        <!-- Product actions-->
                         <?php if (!empty($ids) && in_array($value['product_id'],  $ids)) {?>
                             <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                                 <div class="text-center"><button class="mt-auto btn btn-outline-success" 
                                         >Dégà choisis</button></div>
                             </div>
                        <?php }else {?>
                            <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                                 <div class="text-center"><a class="mt-auto btn btn-outline-dark" href=<?php echo "/shop_product/addToCart?id=" . $value['product_id'] ?>
                                         href="#">Add to cart</a></div>
                             </div>
                        <?php }?>
                    </div>
                </div>
            <?php } ?>


            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Sale badge-->
                    <div class="position-absolute bg-dark text-white badge" style="top: 0.5rem; right: 0.5rem">Sale
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Special Item</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center mb-2 text-warning small">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Sale badge-->
                    <div class="position-absolute bg-dark text-white badge" style="top: 0.5rem; right: 0.5rem">Sale
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Sale Item</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Popular Item</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center mb-2 text-warning small">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Sale badge-->
                    <div class="position-absolute bg-dark text-white badge" style="top: 0.5rem; right: 0.5rem">Sale
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Sale Item</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <!-- Product price-->
                            $120.00 - $280.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark" href="#">View options</a></div>
                    </div>
                </div>
            </div>
            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Sale badge-->
                    <div class="position-absolute bg-dark text-white badge" style="top: 0.5rem; right: 0.5rem">Sale
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Special Item</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center mb-2 text-warning small">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="mb-5 col">
                <div class="h-100 card">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Popular Item</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center mb-2 text-warning small">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="bg-transparent p-4 pt-0 border-top-0 card-footer">
                        <div class="text-center"><a class="mt-auto btn btn-outline-dark" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const dataCart = <?php echo json_encode($filteredProducts) ?>;
    const ids = <?php echo json_encode($ids) ?>;
    const user_id = <?php echo $_SESSION['user_id'] ?>;
</script>
<!-- <script src=<?php echo __DIR__ . "../assets/js/main.js" ?>></script> -->
<?php include_once __DIR__ . "/../src/view/parties/_footer.php" ?>