<footer>
    <div class="environment">
        <p>Page rendered in {elapsed_time} seconds</p>
        <p>Environment: <?= ENVIRONMENT ?></p>
    </div>
    <div class="copyrights">
        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
            open source licence.</p>
    </div>
</footer>
<!-- SCRIPTS -->
<script>
function toggleMenu() {
    var menuItems = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
        menuItem.classList.toggle("hidden");
    }
}
</script>