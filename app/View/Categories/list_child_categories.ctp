<?php if (!empty($categories)): ?>
<?php 
foreach ($categories as $k => $v) {
    echo "<option value=\"$k\">$v</option>";
} 
?>
<?php endif; ?>
