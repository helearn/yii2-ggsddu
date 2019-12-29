<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\TestPager */

$this->title = Yii::t('helearn-yii2ggsddu', 'Create Test Pager');
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Test Pagers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-pager-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
