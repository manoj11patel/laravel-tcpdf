<?php
namespace Manoj\TCPDF\Facades;

use Illuminate\Support\Facades\Facade;

class TCPDF extends Facade
{
	protected static function getFacadeAccessor(){return 'tcpdf';}
}