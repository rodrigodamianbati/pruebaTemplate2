<?php
    class Inicio extends CI_Controller{


        public function __construct() {
        
            parent::__construct(); 
            $this->load->model("Usuario_model");
            $this->load->model("Alojamiento_model");
            $this->load->library("session");
        }

        public function index() {

            if(isset($this->session->userdata['logged_in'])){
                if($this->session->userdata['rol'] == 'administrador'){

                    
                    $usuario["ver"]=$this->Usuario_model->ver();

                    $this->load->view("usuario_view", $usuario);
                    

                    // $this->load->view("inicio/head");
                    // $this->load->view("usuario/usuario_top_nav.php");
                    // $this->load->view("usuario/administrador_side_nav");
                    // $this->load->view("usuario/administrador_body", $usuario);

                    // $this->load->view("inicio/footer");
                    
                }
                else{
                    $this->load->view("inicio/head");
                    
                    // Probando
                    // recupero nombre y apellido de la base
                    // $id=$this->session->userdata['id'];
                
                    // $result= $this->Usuario_model->getUsuario($id->id);
                    // print_r($result);
                    // die();
                    // Fin Probando
                    
                    $this->load->view("usuario/usuario_top_nav.php");
                    $this->load->view("usuario/usuario_side_nav");

                    $this->load->view("inicio/inicio_view");

                    $this->load->view("inicio/footer");
                }
            }
            else{
                 
                $this->load->view("inicio/head");
                $this->load->view("inicio/header");

                $this->load->view("inicio/inicio_view");

                $this->load->view("inicio/footer");
            }
          
        }

        public function getCiudadesFiltrado($ciu){
            $resultado= $this->Alojamiento_model->localidadesFiltrado($ciu);
            
            echo json_encode($resultado);
        }
        public function getCiudades(){
            $resultado= $this->Alojamiento_model->localidades();
            echo json_encode($resultado);
        }



        public function cerrar_sesion(){
            $this->session->sess_destroy();
            redirect('inicio');
        }

    }

?>