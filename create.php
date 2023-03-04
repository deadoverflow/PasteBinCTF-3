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

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $job = new Job($_POST['code'], $_POST['key']);
          $job = serialize($job);
          $job = base64_encode($job);
          echo '
          <script>
              window.location.href = "/execute.php?state=' . $job .'";
          </script>';
          exit();
        }

?>