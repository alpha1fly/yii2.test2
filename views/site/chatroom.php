<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 20]) ?>

                     <?= $form->field($model, 'subject') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>


                <?php ActiveForm::end(); ?>

            </div>
        </div>
    <div class="row">
        <div class="col-lg-5">
            <div id="msgsDialog" class="block">
                <div id="msgsContent">
                    <div class="msg"><div class="info"><span class="name">dfsdfsdf</span><span class="misc"><span class="date">09.11.2020 04:30:27</span> <span class="id">(127.0.0.1)</span></span></div>dsfs</div>

                    <div class="msg"><div class="info"><span class="name">dfsdfsdf</span><span class="misc"><span class="date">09.11.2020 04:30:30</span> <span class="id">(127.0.0.1)</span></span></div>dfs</div>

                    <div class="msg"><div class="info"><span class="name">dfsdfsdf</span><span class="misc"><span class="date">09.11.2020 04:30:34</span> <span class="id">(127.0.0.1)</span></span></div>sdfasdf</div>

                </div>

                <label class="options first"><input id="autoScroll" type="checkbox" checked="checked"> прокручивать вниз</label>
                <label class="options"><input id="playSound" type="checkbox" checked="checked"> звук</label>

                <div class="ct"></div>
                <div class="cb"></div>
            </div>
        </div>
    </div>


    <?php endif; ?>
</div>
