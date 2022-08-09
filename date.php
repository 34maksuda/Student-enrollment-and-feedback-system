<?php
$currentyear=date('Y');
$startYear=$currentyear-5;
$endyear = $currentyear+5;
$yearArray = range($startYear,$endyear);
?>
<select name="year">
    <?php
    foreach ($yearArray as $year) {
        $selected = ($year == $currentyear) ? 'selected' : ''; ?>
        <option <?php echo $selected ?>><?php echo $year ; ?></option>
    <?php }
    ?>
</select>
