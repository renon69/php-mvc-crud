<?php include('header.php') ?>


<section class="grid grid-cols-2 gap-4 justify-center">
    <div class="grid grid-rows-2 gap-4 ">
        <h2 class="text-center h-12">Read Data</h2>
        <form action="." method="GET">
            <input type="hidden" name="action" value="select">
            <div class="grid grid-cols-1 gap-4">
                <label for="city">City Name:</label>
                <input type="text" id="city" name="city" required class="border border-gray-300 px-2 py-1">
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</section>
<section class="grid grid-cols-2 gap-4 justify-center">
    <div class="grid grid-rows-3 gap-4 h-12">
        <h2 class="text-center h-7">Create Data</h2>
        <form action="." method="POST">
            <div class="grid grid-cols-1 gap-4">
                <input type="hidden" name="action" value="insert">
                <label for="newCity">City Name:</label>
                <input type="text" name="city" id="newcity" required class="border border-gray-300 px-2 py-1">
                <label for="countrcode">Country Code:</label>
                <input type="text" name="countrycode" id="countrycode" required
                    class="border border-gray-300 px-2 py-1">
                <label for="district">District:</label>
                <input type="text" name="district" id="district" required class="border border-gray-300 px-2 py-1">
                <label for="population">Population:</label>
                <input type="text" name="population" id="population" required class="border border-gray-300 px-2 py-1">
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</section>


<?php include('footer.php') ?>