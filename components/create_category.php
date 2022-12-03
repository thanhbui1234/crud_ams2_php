<?php include './header.php'?>

<form enctype="multipart/form-data" action="/components//list_category.php"
    class="w-full pb-20 pt-24 grid place-items-center bg-[#c0c0c0] " method="POST">
    <h3 class="border py-2 w-[360px] pl-6 rounded-r-lg rounded-l-lg text-xl bg-red-500 text-white border-red-500">Pet
        Category
        Information</h3>
    <div>
        <div class="w-[360px] bg-white rounded-b-xl pl-3 ">
            <div class="grid grid-rows-2 gap-1">
                <div class="grid">
                    <label class="py-2 text-2xl" for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder=".....">
                </div>

            </div>


            <div class="grid pb-5">
                <input
                    class="button border border-current transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300 rounded-full px-5 py-1 mt-2 place-self-center bg-green-500"
                    type="submit" name="submit" value="Gửi thông tin">
            </div>
        </div>



    </div>

</form>

s