<?php include './header.php'?>
<?php include './funtions.php'?>
<?php include './conn.php'?>
<?php

if (isset($_POST['submit'])) {
    create();

}
?>

<div class=" bg-white border-y border-b dark:bg-gray-900 dark:border-gray-700">

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Type pet
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Weight
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Image
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php read();?>

                <?php foreach ($data as $row => $value) {
    $id = $value['id'];
    $name = $value['name'];
    $type_animal = $value['type_animal'];
    $age = $value['age'];
    $weight = $value['weight'];
    $img = $value['img'];
    $url = "/components//edit_pets.php?id=$id";
    $url2 = "/components//delete_pets.php?id=$id";

    ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo checkForm($id) ?>
                    </th>
                    <td class="py-4 px-6 font-bold">
                        <?php echo checkForm($name); ?>
                    </td>
                    <td class="py-4 px-6 font-bold">
                        <?php echo checkForm($type_animal); ?>
                    </td>
                    <td class="py-4 px-6 font-bold">
                        <?php echo checkForm($age); ?>

                    </td>
                    <th scope="col" class="py-3 px-6 font-bold">
                        <?php echo checkForm($weight); ?>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <img class="w-[50px]" src="/uploads//<?php echo checkForm($img); ?> " alt="">
                    </th>
                    <td class="py-4 px-6">
                        <a href="<?php echo $url ?>" ; class="font-medium text-blue-600 d
                            ark:text-blue-500 hover:underline">Edit</a>
                        <a onclick=" return confirm('Ban muon xoa truong nay?')" href="<?php echo $url2 ?> "
                            class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>

                    </td>
                </tr>

                <?php }?>

            </tbody>
        </table>
    </div>

</div>

<?php include './footer.php'?>