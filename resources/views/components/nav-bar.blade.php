<nav id="navbar" class="flex w-screen px-8 lg:px-32 max-w-screen justify-between text-[16px] items-center py-5 text-nowrap">
    <img  src="storage/logo.svg"  alt="">
    <div id="menu"  class="flex lg:flex-row flex-col  lg:w-fit w-full inset-0 px-8  am lg:h-fit h-screen lg:bg-transparent bg-white lg:relative fixed gap-8 lg:gap-10 items-start top-0 lg:translate-y-0 -translate-y-full text-[#066434] font-medium">


        <div class="w-full flex justify-end mt-6 ">
            <svg id="back" class="hidden" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 5L5 19M5 5L19 19" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
        </div>


        <a href="#">
            HOME
        </a>
        <a href="#">
            TENTANG KAMI
        </a>
        <a href="#">
            LAYANAN
        </a>
        <a href="#">
            KONTAK
        </a>
        <a href="" id="gabung" class="px-6 text-center rounded-full w-full align-bottom  text-[16px] hidden font-semibold text-white bg-[#066434] p-4 ">
            BERGABUNG
        </a>

    </div>
    <a href="" class="lg:flex hidden font-semibold text-white bg-[#066434] p-4 rounded-lg">
        BERGABUNG
    </a>
    <svg id="burger" class="lg:hidden flex" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6C4 5.73478 4.10536 5.48043 4.29289 5.29289C4.48043 5.10536 4.73478 5 5 5H19C19.2652 5 19.5196 5.10536 19.7071 5.29289C19.8946 5.48043 20 5.73478 20 6C20 6.26522 19.8946 6.51957 19.7071 6.70711C19.5196 6.89464 19.2652 7 19 7H5C4.73478 7 4.48043 6.89464 4.29289 6.70711C4.10536 6.51957 4 6.26522 4 6ZM4 12C4 11.7348 4.10536 11.4804 4.29289 11.2929C4.48043 11.1054 4.73478 11 5 11H19C19.2652 11 19.5196 11.1054 19.7071 11.2929C19.8946 11.4804 20 11.7348 20 12C20 12.2652 19.8946 12.5196 19.7071 12.7071C19.5196 12.8946 19.2652 13 19 13H5C4.73478 13 4.48043 12.8946 4.29289 12.7071C4.10536 12.5196 4 12.2652 4 12ZM5 17C4.73478 17 4.48043 17.1054 4.29289 17.2929C4.10536 17.4804 4 17.7348 4 18C4 18.2652 4.10536 18.5196 4.29289 18.7071C4.48043 18.8946 4.73478 19 5 19H19C19.2652 19 19.5196 18.8946 19.7071 18.7071C19.8946 18.5196 20 18.2652 20 18C20 17.7348 19.8946 17.4804 19.7071 17.2929C19.5196 17.1054 19.2652 17 19 17H5Z" fill="black"/>
        </svg>
</nav>

<script>
    const button =document.querySelector('#burger');
const back =document.querySelector('#back');
const plan = document.querySelector("#button-plan");
const nav = document.querySelector("#navbar");

button.addEventListener('click', () => {
    const menu = document.querySelector('#menu');
    const gabung = document.querySelector('#gabung');
    menu.classList.remove('-translate-y-full');
    back.classList.remove('hidden');
    gabung.classList.remove('hidden');

})
back.addEventListener('click', () => {
    const menu = document.querySelector('#menu');
    menu.classList.add('-translate-y-full');
})
plan.addEventListener("click", function () {
    const menu = document.querySelector('#menu');
    menu.classList.add('-translate-y-full');
});
</script>
