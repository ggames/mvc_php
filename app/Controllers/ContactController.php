<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends Controller {
   
    public function index() {  

        $model = new Contact();

        $contacts = $model->all();

        return  $this->view('contacts.index', compact('contacts'));
    }

    public function create() {

     
        return $this->view('contacts.create');
    }

    public function store() {

        $data = $_POST;

        $model = new Contact();

        $model->create($data);

        header('Location: /contacts');


        return 'Aqui se procesa el formulario de contactos';
    }

    public function show($id) {

        return " Aqui se mostrará el contacto con id: {$id} ";
    }

    public function edit($id) {

        return "Aquí se mostrará el formulario para editar un contacto";
    }

    public function update($id) {

        return "Aquí se procesará el formulario de edicion del contacto con id: {$id}";      
    }

    public function destroy($id) {

        return "Aquí se procesará la petición de eliminar el contacto con id: {$id}";
    }

}