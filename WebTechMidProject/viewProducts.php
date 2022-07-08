<?php
include('header.php');
require('rootheader.html');

if (!file_exists("products.txt"))
  {
    echo "The file from above cannot be found!";
    exit;
  }

$fp = fopen("products.txt", "r");

if (!$fp)
  {
    echo "File cannot be opened";
    exit;
  }

echo <<<EOF
<style>
table, td, th {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid black;
  text-align: left;
}
</style>
EOF;

echo '<h3>Products for Sell </h3>';

$count = 0;
$cols = 5; // the number of data items per row
echo '<table>'; // open table
// render headers
echo '<tr>
  <th>Name</th>
  <th>Category</th>
  <th>Price</th>
  <th>Quantity</th>
  <th>Expire Date</th>
  </tr>';
echo '<tr>'; // open first row
while(!feof($fp))
{
    if($count < $cols) 
    {
      $info = fgets($fp);
      $col = explode('|',$info);

      foreach($col as $data)
        {

          echo "<td>". trim($data)."</td>\n";
        
          $count++;
        }
        
    } 
    else 
      {
        $count = 0; // reset counter
        echo '</tr><tr>'; // close current row, start new row
      }
}
echo "</tr></table>";
fclose($fp); 
  echo '<br> <a href="sellerHome.php?name=".$name."\"> Back   </a>   | 
  <a href="logout.php"> Log Out </a>';

?>