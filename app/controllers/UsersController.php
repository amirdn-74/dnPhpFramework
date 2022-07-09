<?php

namespace App\Controllers;

use Core\Response;

class UsersController
{
  public function index()
  {
    return "listing users";
  }

  public function create()
  {
    return "providing create form";
  }

  public function store()
  {
    $data = json_decode(file_get_contents('php://input'), true);

    pre($data);
  }

  public function show($id)
  {
    return "getting user: {$id}";
  }

  public function edit($id)
  {
    return "providing update form for user: {$id}";
  }

  public function update($id)
  {
    return "updating user: {$id}";
  }

  public function destroy($id)
  {
    return "deleting user: {$id}";
  }

  public function home()
  {
    return "home page";
  }
}
