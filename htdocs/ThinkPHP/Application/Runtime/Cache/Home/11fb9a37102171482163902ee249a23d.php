<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): foreach($list as $key=>$result): echo ($result["id"]); ?>--<?php echo ($result["name"]); ?><input class='delcheck' type='checkbox'/><br/><?php endforeach; endif; ?>