<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5"><h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in
            previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your
            liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
</div>

<div class="d-flex gap-3">
    <?php foreach ($products as $product): ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $product->getPicture() ?: '' ?>" class="card-img-top" alt="..." height="200" loading="lazy" style="object-fit: cover">
            <div class="card-body">
                <h5 class="card-title"><?= $product->getTitle() ?></h5>
                <p class="card-text"><?= $product->getPrice() ?> €</p>
                <p class="card-text"><?= $product->getDescription() ?></p>
                <a href="/product/<?= $product->getSlug() ?>/<?= $product->getId() ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
