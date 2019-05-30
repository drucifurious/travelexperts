<?php
class person {
  protected $firstName;
  protected $lastName;
  protected $address;
  protected $city;
  protected $province;
  protected $postal;
  protected $phone;
  protected $email;
    

  public function setFirstName($value) {
    $this->firstName = $value;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function setLastName($value) {
    $this->lastName = $value;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function setEmail($value) {
    $this->email = $value;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setAddress($value) {
    $this->address = $value;
  }

  public function getAddress() {
    return $this->address;
  }

  public function setPostal($value) {
    $this->postal = $value;
  }

  public function getPostal() {
    return $this->postal;
  }

  public function setCity($value) {
    $this->city = $value;
  }

  public function getCity() {
    return $this->city;
  }

  public function setProvince($value) {
    $this->province = $value;
  }

  public function getProvince() {
    return $this->province;
  }

  public function setPhone($value) {
    $this->phone = $value;
  }

  public function getPhone() {
    return $this->phone;
  }



  // public function __toString() {
  //   return $this->firstName . " " . $this->lastName . ", " .$this->address . ", " . $this->phone . ", " . $this->email;
  // }

}
class customer extends person {
  private $package;
  private $cctype;
  private $ccnum;
  private $ccexp;
  

  public function setPackage($value) {
    $this->package = $value;
  }

  public function getPackage() {
    return $this->package;
  }

  public function setccType($value) {
    $this->cctype = $value;
  }

  public function getccType() {
    return $this->cctype;
  }
  public function setccNum($value) {
    $this->ccnum = $value;
  }

  public function getccNum() {
    return $this->ccnum;
  }

  public function setccExp($value) {
    $this->ccexp = $value;
  }

  public function getccExp() {
    return $this->ccexp;
  }


  public function __toString() {
     return $this->firstName . " " . $this->lastName . ", " . $this->address . ", " . $this->city . ", " . $this->province . ", " . $this->phone . ", " . $this->email . ", " . $this->package . ", " . $this->cctype . ", " . $this->ccnum;
   }

}



?>