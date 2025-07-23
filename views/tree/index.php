<section class="my-5">
    <h1 class="mb-3">Trees</h1>
    <ul>
        <?php
        $i = 0;
        $i++;
        foreach ($trees as $tree) { ?>
            <li>
                <h3>Tree <?= $i ?>:</h3>
                <ul>
                    <li>Tree Name: <?= $tree->tree_name ?></li>
                    <li>Tree ID: <?= $tree->id ?></li>
                    <li>User ID: <?= $tree->user_id ?></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</section>