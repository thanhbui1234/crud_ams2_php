<?php include './header.php'?>

<form action="/components//form.php" class="w-full pb-20 pt-24 grid place-items-center bg-[#c0c0c0] " method="POST">

    <h3 class="border py-2 w-[360px] pl-6 rounded-r-lg rounded-l-lg text-xl bg-red-500 text-white border-red-500">Sign
        In</h3>
    <div class="w-[360px] bg-white rounded-b-xl pl-3 ">
        <div class="grid">
            <label class="py-2" for="email">E-mail address</label>
            <input type="email" id="email" name="email" placeholder="mail@address.com">
        </div>

        <div class="grid">
            <label class="py-2" for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password">
        </div>

        <div class="grid pb-5">
            <input
                class="button border border-current transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300 rounded-full px-5 py-1 mt-2 place-self-center bg-green-500"
                type="submit" name="submit" value="Sign In">
        </div>
    </div>

</form>



<?php include './footer.php'?>