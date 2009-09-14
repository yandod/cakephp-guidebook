<?php
Router::connect('/m/user/:action/*', array('controller' => 'user', 'prefix' => 'mobile', 'mobile' => true));
?>