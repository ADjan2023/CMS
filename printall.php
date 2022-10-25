<?php

$url = 'https://ecommerceskeletonserver.herokuapp.com/actions/apicontact.php';
/*
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);
$data=json_decode($resp,true);

curl_close($curl);

$i=0;
echo "<table style ='border: 1px solid black;'>";
while($i < count($data)){
echo "<tr>";
echo "<td>".$data[$i]['pname']."</td>";
echo "<td>".$data[$i]['pphoned']."</td>";
echo "<td> <form method='POST' action='../actions/selectonecontact.php' >
            <input type='hidden' name='pid' value='".$data[$i]['pid']."'>
            <input type='submit' value='Update' name='update'>
         </form>
      </td>
      <td>
         <form method='POST' action='../actions/deletecontact.php' >
            <input type='hidden' name='pid' value='".$data[$i]['pid']."'>
            <input type='submit' value='Delete' name='delete'>
         </form>
            
         
      </td>";
echo "</tr>";
$i++;
}
echo "</table>";*/
$data=json_decode(file_get_contents($url, false),true);
print_r($data);

/*function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                       
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}
   $get_data = callAPI('GET', 'https://ecommerceskeletonserver.herokuapp.com/actions/apicontact.php', false);
   $response = json_decode($get_data, true);
   print_r($response);
*/
?>
