<?php

namespace App\Controllers;
use App\Models\HotelesModel;


class HotelesController extends BaseController
{
    //Mostrar las tablas de la base de datos
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos ['datos']=$hoteles->findAll();
      // print_r($datos);
      return view('hoteles',$datos);
    }


     //agregar planes y nuevo planes
     public function nuevosHoteles():string 
     {
         return view('hoteles_nuevos');
     }
     public function agregarHoteles()
     {
         $hotel = $this->request->getVar('txtHotelId');
         //echo "<br>Id = ". $id;
         $nombre=$this->request->getVar('txtNombre');
         //echo "<br>nombre = ". $nombre;
         $correo = $this->request->getVar('txtCorreo');
         //echo "<br>Pago =". $pago;
         $telefono = $this->request->getVar('txtTelefono');
         //echo "<br>Minutos = ". $minutos;
         $direccion = $this->request->getvar('txtDireccion');
         //echo "<br>Mensajes = ". $mensajes;
         $ciudad = $this->request->getvar('txtCiudad');
         $categoria = $this->request->getvar('txtCategoria');
         $usuario = $this->request->getvar('txtUsuario');
         $hoteles = new HotelesModel();
         $datos=[
             'hotel_id'=>$hotel,
             'nombre'=>$nombre,
             'correoelectronico'=>$correo,
             'telefono'=>$telefono,
             'direccion'=>$direccion,
             'ciudad_id'=>$ciudad,
             'categoria_id'=>$categoria,
             'usuario_id'=>$usuario
         ];
         $hoteles->insert($datos);
         echo "Datos guardados";
         return redirect()->route('hoteles');
     }


//eliminar 
     public function eliminarHoteles($id=null){
       echo $id;
       $hoteles = new HotelesModel();
       $hoteles->delete($id);
       return redirect()->route('hoteles');
        
    }
    
    //modificar

    public function modificarHoteles(){
        $datos=[
            'hotel_id'=>$this->request->getVar('txtHotelId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreoElec'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudad'),
            'categoria_id'=>$this->request->getVar('txtCategoriaId'),
            'usuario_id'=>$this->request->getVar('txtUsuario')  
        ];
       // print_r($datos);
        $hoteles = new HotelesModel();
         $hoteles->update($datos['hotel_id'], $datos);
         return redirect()->route()('hotel_id');  
         }
         //buscar
    public function buscarHoteles($id=null){
        //echo "id o codigo: ".$id;
        $hoteles = new HotelesModel();
       $datos['datos'] =$hoteles ->where ('hotel_id', $id)->first();
       print_r($datos);
       return view('moodificar_hoteles',$datos);
    }

     }