<?php namespace Gufy\LaravelRajaongkir;
use Illuminate\Support\Facades\Facade;
class RajaongkirFacade extends Facade{
  protected static function getFacadeAccessor() { return 'rajaongkir'; }
}
