<?php
/**
 * This is a standalone script that demonstrates Headless Drupal!
 */

try {
  // Get the sample file contents through the Drupal route

  $headless_route = $_SERVER['HTTP_HOST'] . '/headless';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $headless_route);

  curl_setopt($ch, CURLOPT_HEADER, 0);
//  curl_setopt($ch, CURLOPT_HTTPHEADER, $this->encodeHeader($uri));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLINFO_HEADER_OUT, 1);

  $response = curl_exec($ch);
  $info = curl_getinfo($ch);
  curl_close($ch);

  if ($info['http_code'] == 200) {
    echo($response);
  }
  else {
    if($info['http_code'] == 403) {
      print("Access denied! Make sure the user role has access to this route. The permission to allow is 'view headless content'.");
    }
    else {
      print("Something went wrong! We didn't get a 200 HTTP code, we got: " . $info['http_code']);
    }
  }


  die();
//  $data = file_get_contents('http://bodiless.dd:8083/headless');

  // Write them out to the browser!
//  echo $data;

}
catch(Exception $ex) {
  echo($ex->getMessage());
}

