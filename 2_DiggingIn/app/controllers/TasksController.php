<?php

class TasksController extends BaseController {
  public function index()
  {
    //fetch all tasks
    $tasks = Task::all();
    
    
    //load a view to display item
    return View::make('tasks.index', ['tasks' => $tasks]);
  }
  
  public function show($id)
  {
    return 'show task of id with: ' . $id;
  }
}