<?php

namespace App\Controllers;

class ProcesarConfig extends BaseController
{
    public function procesar()
    {
      // obtener datos del formulario  config_slider
      $autoplay = $this->request->getPost('autoplay');
      $nav = $this->request->getPost('nav');
      // validar valores de variables para obtener resultados en la vista  image_slider.php
      if ($autoplay == 1 ) {
        $autoplay = "true";
      }
      if ($autoplay == 0 ) {
        $autoplay = "false";
      }
      if ($nav == 1 ) {
        $nav = "true";
      }
      if ($nav == 0 ) {
        $nav = "false";
      }

      // Pasar datos a la vista
        $data['autoplay'] = $autoplay;
        $data['nav'] = $nav;

      // Renderizar la vista
        return view('image_slider', $data);
    }

}
