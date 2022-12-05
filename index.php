<?php include './components/header.php'?>

<?php
if (isset($_GET['hello'])) {
    $hi = $_GET['hello'];
    echo "<h1 class='font-bold uppercase text-2xl text-red-600'>$hi</h1>";
}
    
?>
<!-- <H2 class=" items-center 	">SHOP THÚ CƯNG UY TÍN NHẤT THẾ GIỚI</H2> -->

<DIV class="   bg-[#c0c0c0]">


    <div class="pt-3">
        <h3 class=" mx-1 mt-5 md:mx-[110px]  lg:mx-28 text-3xl">
            Họ và tên : Bùi Chí Thanh
        </h3>
        <h3 class=" mx-1 mt-5 md:mx-[110px] lg:mx-28 text-3xl">
            Mã sinh viên : ph28992
        </h3>

    </div>

    <div class=" items-center	mt-20 ml-[350px] ">

        <a href="./components//login.php"> <button
                class="mb-5 md:ml-6 rounded text-3xl px-7 py-2  lg:ml-8 text-red-600 border border-current transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300">
                LOGIN
            </button></a>

        <a href=".//components//create_pet.php"> <button
                class="mb-5 md:ml-6 rounded text-3xl px-7 py-2  lg:ml-8 text-red-600 border border-current transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300">
                Quản lý vật nuôi
            </button></a>

        <a href=".//components//create_category.php"> <button
                class="mb-5 md:ml-6 rounded text-3xl px-7 py-2  lg:ml-8 text-red-600 border border-current transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300">
                Quản lý loại vật nuôi
            </button></a>
    </div>
</DIV>

<?php include './components/footer.php'?>