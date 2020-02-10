<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio extends Front
{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    header("Location: https://sample.ideadigitalindonesia.com");
  }

  function umroh()
  {
    header("Location: https://sample.ideadigitalindonesia.com/umroh");
  }

  function sekolah1()
  {
    header("Location: https://sample.ideadigitalindonesia.com/sekolah1");
  }
}
