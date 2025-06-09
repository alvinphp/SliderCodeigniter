<?php


namespace App\Controllers;
use App\Models\ImagenModel;
use Config\Database;

class Subir extends BaseController
{
    public function index()
    {
        return view('subirimagen');
    }

    public function cargar()
    {
        $db = Database::connect();
        $imagenes = $this->request->getFileMultiple('imagenes');

        // $imagenModel = model('App\Models\ImagenModel');
        if ($imagenes && isset($imagenes)) {

            foreach ($imagenes as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    // Validación simple de tipo MIME
                    if (in_array($img->getMimeType(), ['image/jpeg', 'image/png', 'image/gif'])) {
                        $nuevoNombre = $img->getRandomName();
                        $img->move(WRITEPATH . '../public/uploads', $nuevoNombre);
                         // echo "Imagen subida: $nuevoNombre<br>";
                        // subir a la base de datos
                        // $imagenModel = new ImagenModel;

                        $data = [
                                'ruta' => 'uploads/' . $nuevoNombre
                          ];
                          // Insertar datos
                        $db->table('imagen')->insertBatch($data);
                        $url = base_url("slider");
                        echo "<script>
                          alert('Imágenes subidas con éxito');
                          window.location.href = '$url';
                         </script>";
                      } else {
                        echo "Tipo no permitido: " . $img->getClientName() . "<br>";
                    }
                } else {
                    echo "Error al subir una imagen: " . $img->getErrorString() . "<br>";
                }

            }
        } else {
            echo "No se seleccionaron imágenes.";
        }

    }








// end
}
