<?php include './header.php'?>

<form enctype="multipart/form-data" action="/components//list_pet.php"
    class="w-full pb-20 pt-24 grid place-items-center bg-[#c0c0c0] " method="POST">
    <h3 class="border py-2 w-[360px] pl-6 rounded-r-lg rounded-l-lg text-xl bg-red-500 text-white border-red-500">Pet
        information</h3>
    <div>
        <div class="w-[360px] bg-white rounded-b-xl pl-3 ">
            <div class="grid grid-cols-2 gap-1">
                <div class="grid">
                    <label class="py-2" for="name">Name</label>
                    <input class="w-[150px]" type="text" id="name" name="name" placeholder=".....">
                </div>
                <div class="grid">
                    <label class="py-2" for="type_animal">Type pet</label>
                    <select name="option">
                        <option value="Gian">Gián</option>
                        <option value="Gà">Gà</option>
                        <option value="Chó">Chó</option>
                        <option value="Mèo">Mèo</option>
                        <option value="Ếch">Ếch</option>
                        <option value="Gái">Gái</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>
                <div class="grid">
                    <label class="py-2" for="age">AGE</label>
                    <input class="w-[150px]" type="number" value="1" min="1" id="age" name="age" placeholder=".....">
                </div>
                <div class="grid">
                    <label class="py-2" for="weight">KG</label>
                    <input class="w-[150px]" type="text" id="weight" name="weight" placeholder=".....">
                </div>
            </div>
            <div class="grid  pb-3">
                <label class="py-2" for="img">Image</label>
                <input name="img" type="file">
            </div>

            <div class="grid pb-5">
                <input
                    class="button border border-current transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300 rounded-full px-5 py-1 mt-2 place-self-center bg-green-500"
                    type="submit" name="submit" value="Gửi thông tin">
            </div>
        </div>



    </div>

</form>

<?php include './footer.php'?>