<?php

class Sofa {

  public static $instance_count = 0;

  public $seats = 3;
  public $arms = 2;

  public function __construct($args=[])
      {
        self::$instance_count++;
        $this->seats= $args['seats'] ?? NULL;
        $this->arms = $args['arms'] ?? NULL;
      }

  public function __destruct()
  {
    self::$instance_count--;
  }

}

class Couch extends Sofa {
  var $arms = 0;
}

class Loveseat extends Sofa {
  var $seats = 2;
}

$sofa = new Sofa(['seats'=>2,'arms'=>1]);
echo 'Sofa<br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';

$couch = new Couch(['seats'=>3,'arms'=>1]);
echo 'Couch<br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

echo "Unsetting sofa" . "<br>";
unset($sofa);
echo "Instance count after unsetting " . Sofa::$instance_count . "<br>";
echo "<br>";

$loveseat = new Loveseat(['seats'=>2,'arms'=>2]);
echo 'Loveseat<br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo 'Instance count before destructors run: ' . Sofa::$instance_count . '<br />';

?>
