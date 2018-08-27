<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PanduanApp */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Panduan Aplikasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panduan-app-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_panduan_app], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_panduan_app], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_panduan_app',
            'judul',
            'isi:ntext',
            [
                'attribute'=>'gambar',
                'format'=>'raw',
                'value'=> Html::img(Yii::getAlias('@web')."/uploads/".$model->gambar,['height'=>'auto','width'=>'500px']),
            ],
            'url',
        ],
    ]) ?>

</div>
