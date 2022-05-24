<?php
session_start();
session_destroy();

echo "
<script>
console.log('aa');
location.herf='login.php';
</script>
";
?>