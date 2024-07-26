<?php

namespace App\Controllers;
use App\Models\ClientesModel;


class ClientesController extends BaseController
{
      //Mostrar las tablas de la base de datos
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos ['datos']=$clientes->findAll();
      // print_r($datos);
      return view('clientes',$datos);
    }


     //agregar planes y nuevo planes
     public function nuevosClientes():string 
     {
         return view('clientes_nuevos');
     }
     public function agregarClientes()
     {
         $cliente = $this->request->getVar('txtCliente');
         //echo "<br>Id = ". $id;
         $nombre=$this->request->getVar('txtNombre');
         //echo "<br>nombre = ". $nombre;
         $apellido = $this->request->getVar('txtApellido');
         //echo "<br>Pago =". $pago;
         $nit = $this->request->getVar('txtNit');
         //echo "<br>Minutos = ". $minutos;
         $telefono = $this->request->getvar('txtTelefono');
         //echo "<br>Mensajes = ". $mensajes;
         $correo = $this->request->getvar('txtCorreo');
         $direccion = $this->request->getvar('txtDireccion');
         $contra = $this->request->getvar('txtContra');
         $clientes = new ClientesModel();
         $datos=[
             'cliente_id'=>$cliente,
             'nombre'=>$nombre,
             'apellido'=>$apellido,
             'nit'=>$nit,
             'telefono'=>$telefono,
             'correo_electronico'=>$correo,
             'direccion'=>$direccion,
             'contrasenia'=>$contra
         ];
         $clientes->insert($datos);
         echo "Datos guardados";
         return redirect()->route('clientes');
     }


     //Eliminar 
     public function eliminarCliente($id=null){
        echo $id;
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('clientes');  
      
      
    }

    //modificar
    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getVar('txtClienteId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'contrasenia'=>$this->request->getVar('txtContrasenia')  
        ];
         // print_r($datos);
         $clientes = new ClientesModel();
         $clientes->update($datos['cliente_id'], $datos);
         return redirect()->route()('cliente_id');  
         }
         public function buscarCliente($id=null){
            //echo "id o codigo: ".$id;
            $clientes = new ClientesModel();
           $datos['datos'] =$clientes ->where ('cliente_id', $id)->first();
           print_r($datos);
           return view('modificar_clientes',$datos);
         
         }
         
     }