<section>
    <?php
    $table = 'characters';
    $collums ='ID, Name, IMG, Race, Culture_Background, Profession_Class, Subclass, Place_of_birth';
    $values = 'state = ?';
    $bind = 's';
    $bindvalues = $state;
    $result = GetAll($table, $collums, $values, $index, $bind, $bindvalues);
    if (sizeof($result) > 0) {
        echo '<section class="grid">';
        foreach ($result as $row) {
            character_info($row)
        }
        echo '</section>'
    }
    ?>
</section>