<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{

  public function getIndex()
  {
    return View('pages.welcome');
  }
  public function getGallery()
  {
    return "Esta es la galeria";
  }
  public function postContact()
  {

  }
}
