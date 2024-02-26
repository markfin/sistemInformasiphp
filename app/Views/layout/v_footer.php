<script>
const navbarNav = document.querySelector('.navbar-nav')
console.log(navbarNav)

document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.add('active')
}
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
})
feather.replace();
</script>
<!-- <script src="<?php echo base_url('script.js')?>">

</script> -->
<!-- <script>

</script> -->
<!-- const navbarNav = document.querySelector('.navbar-nav')

document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.add('active')
}
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', (e) => {
if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
    navbarNav.classList.remove('active');
}
}) -->
</body>

</html>