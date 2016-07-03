<?php namespace Gufy\LaravelRajaongkir;
use Steevenz\Rajaongkir as Base;
class Rajaongkir extends Base{
  private Base $client;
  public function __construct($config = array()){
    $this->client = new Base($config);
  }
  public function __call($method, $arguments=[]){
    return call_user_func_array(array($this->client, $method), $arguments);
  }
}
