<?php
class Laptop {
  public $os;
  public $brand;

  function set_os($os) {
    $this->os = $os;
  }
  function get_os() {
    return $this->os;
  }
  function set_brand($brand) {
    $this->brand = $brand;
  }
  function get_brand() {
    return $this->brand;
  }
}

$dell = new Laptop();
$dell->set_os('Bkantwi Unix');
$dell->set_brand('alienware');
echo "Operating Systen: " . $dell->get_os();
echo "<br>";
echo "Machine Brand: " . $dell->get_brand();
?> 