<div class="d-flex">

    <p class="text-sm text-gray">
        Mostrando de
        <span class="fw-normal">
            <?= $$paginate['from'] ?>
        </span>
        a
        <span class="fw-normal">
            <?= $$paginate['to'] ?>

        </span>
        de
        <span class="fw-normal">
            <?= $$paginate['total'] ?>
        </span>
        resultados
    </p>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a class="page-link" href="<?= $$paginate['prev_page_url'] ?>" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
            <?php for ($i = 1; $i <= $$paginate['last_page']; $i++) : ?>
              
                <li class="<?= $$paginate['current_page'] == $i ? 'page-item active' : 'page-item' ?>">
                <a class="page-link" href="/<?=$paginate?>?page=<?= $i ?><?= isset($_GET['search'])? "&search={$_GET['search']}":''?>">
                        <?= $i ?></a></li>

            <?php endfor ?>

            <li class="page-item">
                
                <a class="page-link" href="<?= $$paginate['next_page_url'] ?>">Next</a>
            </li>
        </ul>
    </nav>
</div>