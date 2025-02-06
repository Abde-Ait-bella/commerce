<?php include_once __DIR__ . "/../parties/_header.php"; ?>

<body>
    <?php include_once __DIR__ . "/../parties/_navbarAdmin.php" ?>
    <div class="bg-secondary p-5 addProduct_popup d-none" id="addProduct_popup">
        <div class="position-absolute bg-danger rounded btn btn-danger" style="top: -7px; right:-6px ; width: 2rem; height: 2rem; padding: 3px; padding-right: 1px;" onclick="togglePopup()"><i class="fa-minus fa-solid"></i></div>
        <form method="POST" action="/commerce/addProduct" enctype="multipart/form-data" name="productForm">
            <!-- Ligne avec deux champs : Nom et Quantité -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="nom" class="form-label fw-bold text-white">Nom</label>
                    <input type="text" class="form-control" name="nom" id="name" placeholder="Entrez le nom">
                </div>

                <div class="col-md-6">
                    <label for="quantite" class="form-label fw-bold text-white">Quantité</label>
                    <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Entrez la quantité">
                </div>
            </div>
            <!-- Ligne pour le champ Description -->
            <div class="mb-3">
                <label for="description" class="form-label fw-bold text-white">Description</label>
                <textarea class="form-control" name="description" id="description" rows="2"
                    placeholder="Entrez une description"></textarea>
            </div>
            <!-- Ligne pour le champ Prix -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="prix" class="form-label fw-bold text-white">Prix</label>
                    <input type="number" step="0.01" class="form-control" name="prix" id="prix" placeholder="Entrez le prix">
                </div>
                <div class="col-md-6">
                    <label for="formFileMultiple" class="form-label fw-bold text-white">Photo</label>
                    <input class="form-control" name="product_image" type="file" id="formFileMultiple" multiple>
                </div>
            </div>
            <!-- Bouton Envoyer -->
            <button type="submit" id="btn_submit" class="mt-3 px-4 btn btn-danger">Ajouter</button>
            <button type="button" onclick="cancel_popup()" class="mt-3 px-4 text-muted btn btn-light">Annuler</button>
        </form>
    </div>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include_once __DIR__ . "/../parties/_sidebar.php" ?>
        </div>
        <div id="layoutSidenav_content">
            <div class="mb-4 card">
                <div class="card-header">
                    <i class="fa-table fas me-1"></i>
                    La liste des Produits
                </div>
                <div class="card-body">
                    <table class="bg-white mb-0 align-middle table">
                        <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Quantitie</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $value) { ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src=<?= $value['product_image'] ?>
                                                alt="" style="width: 45px; height: 45px" class="object-fit-cover" />
                                            <div class="ms-3">
                                                <p class="mb-1 fw-bold"><?= $value['product_name'] ?></p>
                                                    <?php
                                                    $now = new DateTime();
                                                    $givenDate = new DateTime($value['created_at']);
                                                    $interval = $now->diff($givenDate);
                                                    if ($interval->y > 0) {
                                                        echo 'Il y a ' . $interval->y . ' year' . ($interval->y > 1 ? 's' : '');
                                                    } elseif ($interval->m > 0) {
                                                        echo 'Il y a ' . $interval->m . ' month' . ($interval->m > 1 ? 's' : '');
                                                    } elseif ($interval->d > 0) {
                                                        echo 'Il y a ' . $interval->d . ' day' . ($interval->d > 1 ? 's' : '');
                                                    } elseif ($interval->h > 0) {
                                                        echo 'Il y a ' . $interval->h . ' hour' . ($interval->h > 1 ? 's' : '');
                                                    } elseif ($interval->i > 0) {
                                                        echo 'Il y a ' . $interval->i . ' minute' . ($interval->i > 1 ? 's' : '');
                                                    } else {
                                                        echo 'just now';
                                                    }
                                                    ?>
                                                </p> 
                                            </div>
                                        </div>
                                    </td>
                                    <td style="padding: 21px 0">
                                        <p class="mb-0 text-muted"><?= $value['product_quantity'] ?></p>

                                    </td>

                                    <td style="padding: 21px 0">
                                        <p class="mb-0 text-muted"><?= $value['product_price'] ?> DH</p>

                                    </td>

                                    <td style="padding: 21px 0">
                                        <a onclick='editeProduct(<?= json_encode($value) ?>)'  class="mx-2 fs-4" style="cursor: pointer" >
                                            <i class="text-muted fa-gear fa-solid"></i>
                                        </a>
                                        <a  href=<?php echo "/commerce/delete?id=" . $value['product_id'] ?> class="mx-2 fs-4 no-outline">
                                            <i class="fa-trash-arrow-up text-muted fa-solid"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="position-fixed d-flex justify-content-end" style="top: 4.5rem; right:1rem ; z-index: 99">
                <button class="bg-secondary btn-rounded btn" onclick="togglePopup()"><i
                        class="text-white fa-plus fa-solid"></i></button>
            </div>
            <?php include_once __DIR__ . "/../parties/_footerAdmine.php" ?>
        </div>
    </div>
</body>

</html>