<?php
/**
 * Idée General des Class Controllers
 * la propriété doit etre présente dans les autres Class de Controllers
 * Récuperer le Bon \Models\Name en fonction du Controller
 */

namespace Controllers;

abstract class Controller {

    protected $model;
    //rendre le controller dynamique
    protected $modelName;

    public function __construct()
    {
        $this->model = new $this->modelName(); // new \Models\Article ou Comment
    }

}