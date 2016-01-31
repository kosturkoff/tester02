<?php
$user_data = array('first_name' => "Venislav",
                   'second_name' => "Ivanov", 
                   'third_name' => "Georgiev",
                   'tel_nr' => "0882333444");
echo "<ul>";
echo "<li>First Name: ".$user_data['first_name']."</li>";
echo "<li>Second Name: ".$user_data['second_name']."</li>";
echo "<li>Third Name: ".$user_data['third_name']."</li>";
echo "<li>Tel Nr: ".$user_data['tel_nr']."</li>";
echo "</ul>";

echo "<table border=1>";
echo "<tr>";
Echo "<td>First Name - ".$user_data['first_name']."</td>";
Echo "<td>Second Name - ".$user_data['second_name']."</td>";
Echo "<td>Third Name - ".$user_data['third_name']."</td>";
Echo "<td>Tel number - ".$user_data['tel_nr']."</td>";
echo "</tr>";
echo "</table>";
?>