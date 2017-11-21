<div class="logo"></div>
<div class="logo_text"><?php echo $site_title; ?></div>
<?php
    foreach($users as $user)
    {
        echo '<li>', $user["author_ID"],'</li>';
    }
?>
    