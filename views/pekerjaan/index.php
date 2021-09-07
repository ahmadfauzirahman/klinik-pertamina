<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PekerjaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pekerjaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Tambah Pekerjaan', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'tableOptions' => [
                            'class' => 'table table-sm table-bordered table-hover table-list-item'
                        ],
                        'columns' => [
                            [
                                'contentOptions' => ['style' => 'text-align:center'],

                                'class' => 'yii\grid\SerialColumn'
                            ],

                            // 'id_pekerjaan',
                            [
                                'contentOptions' => ['style' => ''],
                                'headerOptions' => ['style' => ''],
                                'attribute' => 'nama_pekerjaan'
                            ],
                            [

                                'contentOptions' => ['style' => 'text-align:center'],
                                'headerOptions' => ['style' => 'text-align:center'],
                                'label' => 'Status',
                                'attribute' => 'aktif',
                                'value' => function ($model) {
                                    return $model->aktif == 0 ? 'Aktif' : 'Tidak Aktif';
                                }
                            ],

                            [
                                'contentOptions' => ['style' => 'text-align:center;width:110px'],
                                'class' => 'hail812\adminlte3\yii\grid\ActionColumn'
                            ],
                        ],
                        'summaryOptions' => ['class' => 'summary mb-2'],
                        'pager' => [
                            'class' => 'yii\bootstrap4\LinkPager',
                        ]
                    ]); ?>

                    <?php Pjax::end(); ?>

                </div>
                <!--.card-body-->
            </div>
            <!--.card-->
        </div>
        <!--.col-md-12-->
    </div>
    <!--.row-->
</div>