<?php include('header.php') ?>

<?php if ($results) { ?>
    <section>
        <h2>update or delete data</h2>
        <?php foreach ($results as $result) {
            $id = $result['ID'];
            $city = $result['Name'];
            $countrycode = $result['CountryCode'];
            $district = $result['District'];
            $population = $result['Population'];

            ?>
            <form class="update" action="." method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="city-<?= $id ?>" class="block">City Name:</label>
                <input type="text" name="city" id="city-<?= $id ?>" value="<?= $city ?>" required
                    class="border border-gray-300 px-2 py-1 mb-4">

                <label for="countrycode-<?= $id ?>" class="block">Country Code:</label>
                <input type="text" name="countrycode" id="countrycode-<?= $id ?>" value="<?= $countrycode ?>" required
                    class="border border-gray-300 px-2 py-1 mb-4">

                <label for="district-<?= $id ?>" class="block">District:</label>
                <input type="text" name="district" id="district-<?= $id ?>" value="<?= $district ?>" required
                    class="border border-gray-300 px-2 py-1 mb-4">

                <label for="population-<?= $id ?>" class="block">Population:</label>
                <input type="text" name="population" id="population-<?= $id ?>" value="<?= $population ?>" required
                    class="border border-gray-300 px-2 py-1 mb-4">

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>

            <form class="delete" action="." method="POST">
            <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button class="red">delete</button>
            </form>
            <?php  }?>
    </section>
<?php } else { ?>
    <p>sorry, no results</p>
<?php } ?>
<a href=".">go back back back</a>
<?php include('footer.php') ?>