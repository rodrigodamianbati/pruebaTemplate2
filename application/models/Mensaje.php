<?php

class Mensaje extends CI_Model{

    public function __construct()
    {
        //llamamos al constructor de la clase padre
        parent::__construct();
        //$this->load->model('Estado_model');
        $this->load->model('Mensaje');
    }

    public function mensajes($id_chat){

        $this->db->select('*');
        $this->db->where('id_chat',$id_chat);
        $this->db->order_by('marca_de_tiempo', 'ASC');
        $consulta = $this->db->get('mensaje');
        //$consulta = $this->db->get('reserva', $limite, $this->uri->segment(3));

        //$consulta = $consulta->custom_result_object("Alojamiento_model");

        //foreach ($consulta as $alojamiento) {
        //    $alojamiento->servicios = $alojamiento->servicios($alojamiento->id);
        //}
        //print_r($consulta->result());
        //die();
        return $consulta->result();
    }
}

?>