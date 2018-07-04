<?php
namespace App\Controller;

class TarefaController extends AppController
{

    use \Crud\Controller\ControllerTrait;
    /*public function index()
    {
        $tarefas = $this->Tarefa->find()->all();
        
        $this->set('tarefas', $tarefas);
        $this->set('_serialize', ['tarefas']);
    }*/
	
	public function reorder()
	{
		$request = $this->request;
		echo"<pre>";print_r($request);die;
		//$tarefas = $this->Tarefa->find($request);
	}
}