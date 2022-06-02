<?php
session_start();
session_destroy();

echo "
<script>
console.log('aa');
location.href='login.php';
</script>
";
?>