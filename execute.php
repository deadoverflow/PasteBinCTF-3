<?php 
class Job {
    var $code;
    var $passwd;
    var $compared;
    public function __construct($code, $passwd) {
        $this->code = $code;
        $this->passwd = $passwd;
        $this->compared = 0;
    }
    public function verify() {
        $curr_passwd = file_get_contents('./donotaccess');
        if ($curr_passwd == $this->passwd) {
            return true;
        }
        else {
            return false;
        }
    }
    public function execute() {
        eval($this->code);
    }
}

    if (isset($_GET['state'])) {
        $job = $_GET['state'];
        $job = base64_decode($job);
        $job = unserialize($job);
        $job_compared = 0;
        if ($job->verify() || $job->compared == 1) {
            $job->execute();
            echo ' <div class="container">
            <h1>PasteBin - Execution Result</h1>
            <p style="color: #008000;" class="success">The code was executed successfully!</p>
          </div>';
        }
        else {
            echo '<div class="container">
            <h1>PasteBin - Execution Result</h1>
            <p style="color: #ff0000;" class="failure">Invalid key, the code was not executed.</p>
          </div>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PasteBin - Execution Result</title>
  <style>
    body {
      background-color: #f7f7f7;
      color: #333;
      font-family: Arial, sans-serif;
      line-height: 1.5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 100px);
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
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
    p {
      font-size: 18px;
      text-align: center;
    }
   
    .failure {
      color: #ff0000;
    }
  </style>
</head>
<body>

</body>
</html>

