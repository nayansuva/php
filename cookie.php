<?php
echo "RIGHT CLICK, GO TO INSPECT, APLICATIONS, http://localhost";
 setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // SYNTAX-setcookie("name", "value", "how much time it will exist", "defult browser file path")
 setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
 setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

?>