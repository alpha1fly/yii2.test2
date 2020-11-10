<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <br>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <div class="row">
        <div class="col-lg-5">
            <div id="msgsDialog" class="block">
                <div id="msgsContent">
                    <?php foreach ($chatMessages as $oneChatMessage): ?>
                    <div class="msg"><div class="info">
                            <span class="name"><?= $oneChatMessage->id_user?>>:</span>
                            <span class="name"><?= $oneChatMessage->users->name?>></span>


                            <span class="misc"><span class="date"><?= $oneChatMessage->datestamp?></span>
                                <span class="id"></span></span></div><?= $oneChatMessage->text?></div>

                    <?php endforeach;?>
                </div>

                <label class="options first"><input id="autoScroll" type="checkbox" checked="checked"> прокручивать вниз</label>
                <label class="options"><input id="playSound" type="checkbox" checked="checked"> звук</label>

                <div class="ct"></div>
                <div class="cb"></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-5">
            <form action="" method="post" id="sendForm">
                <div id="sendDialog" class="block2" style="position: relative;">
                    <input type="text" name="name" value="dfsdfsdf" maxlength="64" placeholder="Имя">
                    <textarea name="text" placeholder="Текст" style="margin-top: 0.5em; height: 160px; box-sizing: border-box;" maxlength="1024"></textarea>
                    <input type="submit" value="отправить" class="button" title="ctrl + enter" id="submit">
                    <div class="ad"></div>
                </div>
            </form>
        </div>
    </div>
    <?php var_dump($oneChatMessage->users->name);
    ?>
</div>
