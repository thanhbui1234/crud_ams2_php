<?php include './header.php'?>
<?php include './funtions.php'?>
<?php include './conn.php'?>
<?php

if (isset($_POST['submit'])) {
    create();

}
?>
<?php
aletdelete();
?>

<?php
aletUpdate();

?>



<button
    class=" transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300 rounded px-2 text-red-600 border bg-green-600 h-8 absolute right-0 top-[130px] "><a
        href=".//create_pet.php"><i class="fa-solid fa-plus">ADD
            NEW</i></a></button>

<div class=" bg-white border-y border-b dark:bg-gray-900 dark:border-gray-700 mt-10">

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
                        <a id="delete" href="<?php echo $url2 ?> "
                            class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>

                    </td>
                </tr>

                <?php }?>

            </tbody>
        </table>
    </div>

</div>
<!-- <script>
const delete1 = document.querySelector('#delete');
delete1.addEventListener('click', function() {
    console.log('hehe');
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won't be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })

})
</script> -->

<?php include './footer.php'?>