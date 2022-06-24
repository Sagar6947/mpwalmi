<?php
session_start();
unset($_SESSION['mpwalmi_employee']);
session_destroy();

?>
<script type="text/javascript">
window.location="index.php";
</script>