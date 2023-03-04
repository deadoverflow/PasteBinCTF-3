<?php 
class Paste {
    var $code;
    public function __construct($code) {
        $this->code = $code;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['code'];
    $paste = new Paste($code);
    $ser = serialize($paste);
    $code = base64_encode($ser);
    

    echo ' <div class="container">
    <h1>PasteBin</h1>
    <form method="POST">
      <label for="code">Paste your code here:</label>
      <textarea id="code" name="code" rows="10" cols="50"></textarea>
      <input type="submit" value="Save">
    </form>
    <div class="link-section">
    <a href="/view.php?code=' . $code .'">Link to your paste</a>
  </div>
  </div>';
}
?>
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
      padding: 40px 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #0080ff;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    input[type="submit"] {
      display: block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #0080ff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0066cc;
    }
    #code:focus {
        outline: none;
    }
    .link-section {
      margin-top: 20px;
      text-align: center;
    }
    .link-section a {
      color: #0080ff;
      text-decoration: none;
    }
</style>