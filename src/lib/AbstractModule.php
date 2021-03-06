<?php
namespace ovicko\opencart;

abstract class AbstractModule
{
    abstract function view();
    abstract function controller();
    abstract function model();
    abstract function language();

}