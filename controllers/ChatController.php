<?php


namespace app\controllers;


use app\models\Chat01;
use yii\web\Controller;

class ChatController extends Controller
{
    public function actionChatroom(){
        //SELECT `chat01`.`id`, `chat01`.`datestamp`, `chat01`.`text`, `users`.`name`, `users`.`id_role`
//FROM `chat01` INNER JOIN `users` on `chat01`.`id_user` = `users`.`id`
//ORDER BY `chat01`.`id` DESC
      //  LIMIT 100
        $chatMessages = Chat01::find()
         //   ->select(['id', 'datestamp', 'text'])
         //   ->from('chat01')
           // ->join('INNER JOIN', 'users', '`chat01`.`id_user` = `users`.`id`')
           // ->orderBy(['chat01.id' => SORT_DESC])
           // ->limit(100)
           ->all()
                   ;
        //var_dump($chatMessages);
        return $this->render('chatroom',
            compact('chatMessages')
        );
    }
}