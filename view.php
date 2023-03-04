<?php 
class Paste {
    var $code;
    public function __construct($code) {
        $this->code = $code;
    }
}
$code = $_GET['code'];
$code = base64_decode($code);
$code = unserialize($code);
echo '<div class="container">
<h1>PasteBin - View Paste</h1>
<pre>
  ' . $code->code .'
</pre>
</div>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PasteBin - View Paste</title>
  <style>
    body {
        background-color: #f7f7f7;
      color: #333;
      font-family: Arial, sans-serif;
      line-height: 1.5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      max-width: 800px;
      width: 600px;
      margin: 0 auto;
      padding: 40px 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 300px;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #0080ff;
    }
    pre {
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 5px;
      overflow-x: auto;
    }
  </style>
</head>
<body>
  
</body>
</html>

