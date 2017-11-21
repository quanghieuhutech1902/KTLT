<ul>
	<?php
    foreach($users as $user)
    {
        // echo '<li class="cta"><a href=','edit/',$user["id"],'>',$user["name"],'</a></li>';
        echo '<li class="cta"><a href=', $user["alias"],'-', $user["id"] ,'.html','>',$user["name"],'</a></li>';
    }
	?>
</ul>