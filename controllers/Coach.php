<?php

namespace Controllers;


use Models\Coach as ModelCoach;

class Coach extends Controller
{
  public function showCoach($id)
  {
    $model = new ModelCoach;
    $coach = $model->getCoach($id);
    $this->render('views/showCoach.php', [
      'coach' => $coach,
    ]);
  }
}
