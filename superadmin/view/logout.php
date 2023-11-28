<script>
    window.location.href = "index.php?controller=superadmin&function=login";
</script>
<?php 
session_start();
session_destroy();
header('location: index.php?controller=superadmin&function=login');
?>


