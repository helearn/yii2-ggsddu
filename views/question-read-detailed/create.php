<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionReadDetailed */

$this->title = Yii::t('app', 'Create Hl Question Read Detailed');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hl Question Read Detaileds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hl-question-read-detailed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
