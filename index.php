<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<?php
$ListaAlumnos2[] = new Alumno("CELSO ", "AGUIRRE", "AMBATO");
$ListaAlumnos2[] = new Alumno("WORMAN ", "ANDRADE","QUITO");
$ListaAlumnos2[] = new Alumno("FABIAN ", "REYES","QUITO");
$ListaAlumnos2[] = new Alumno("JOSE", "TORRES","IBARRA");
$ListaAlumnos2[] = new Alumno("EDUARDO ", "YAGUAR", "GUAYAQUIL");

echo '</br>';
echo '<H4>INTEGRANTES GRUPO 10</H4>';
echo '</br>';
echo ' <table class="table table-responsive table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Ciudad</th>
        </tr>
      </thead>
      <tbody>';


//arreglo    definir una variable 
//ListaAlumnos  as $index => $alumno   

//   =>
foreach ($ListaAlumnos2 as $index => $alumno) {
    echo '<tr>
          <td>' . ((int)$index + 1) . ' </td>
          <td>' . $alumno->getNombre() . '</td>
          <td>' . $alumno->getApellido() . '</td>
          <td>' . $alumno->getCiudad() . '</td>
        </tr>';
}

echo ' </tbody>
    </table>';



//Objeto Alumno
class Alumno
{
    public $nombre;
    public $apellido;
    public $ciudad;

    public function __construct($nombre, $apellido, $ciudad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->ciudad = $ciudad;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
}