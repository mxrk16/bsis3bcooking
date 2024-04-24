<?php

class Users extends Controller
{
  public function index()
  {
    $x = new Task();
    $rows = $x->findAll();

    $this->view('users/index', [
      'users' => $rows
    ]);
  }

  public function create()
  {
    $x = new Task();

    if (count($_POST) > 0) {

      $arr['task_name'] = $_POST['task_name'];
      $arr['task_description'] = $_POST['task_description'];
      $arr['task_statue'] = $_POST['task_statue'];
      $arr['task_due'] = $_POST['task_due'];

      $x->insert($_POST);

      redirect('users');
    }

    $this->view('users/create');
  }

  public function edit($id)
  {
    $x = new Task();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('users');
    }

    $this->view('users/edit', [
      'user' => $row
    ]);
  }

  public function delete($id)
  {
    $x = new Task();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('users');
    }

    $this->view('users/delete', [
      'user' => $row
    ]);
  }
}