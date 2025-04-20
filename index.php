<?php include('data/pokemon.php'); ?>

<main>            
    <table class="pokemon-table">
        <thead>
            <tr>
                <th>Number</th>
                <th>Image</th>
                <th>Name</th>
                <th>Type(s)</th>
                <th>Abilities</th>
                <th>Height</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pokemonList as $pokemon): ?>
            <tr>
                <td><?= $pokemon['number'] ?></td>
                <td><img src="<?= $pokemon['image'] ?>" alt="<?= $pokemon['name'] ?>" class="pokemon-img"></td>
                <td><?= $pokemon['name'] ?></td>
                <td><?= implode(', ', $pokemon['types']) ?></td>
                <td><?= implode(', ', $pokemon['abilities']) ?></td>
                <td><?= $pokemon['height'] ?></td>
                <td><?= $pokemon['weight'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
