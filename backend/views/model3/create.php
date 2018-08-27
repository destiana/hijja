<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Model3 */

$this->title = 'Create Model - 3';
$this->params['breadcrumbs'][] = ['label' => 'Model - 3', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
