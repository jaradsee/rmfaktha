<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;


use kartik\widgets\Select2;
use kartik\widgets\TypeaheadBasic;
use kartik\widgets\DepDrop;
use kartik\widgets\FileInput;

use frontend\models\RiskAddDep;
use frontend\models\RiskClinictype;
use frontend\models\RiskLevel;
use frontend\models\FakthaRiskStatus;
use frontend\models\FakthaRiskSimple;
use frontend\models\ProgramHead;
use frontend\models\ProgramDetail;
//use app\models\Employee;
//use app\models\Province;
//use app\models\Amphur;
//use app\models\District;

use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiskHead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk-head-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
   
<?= $form->errorSummary($model); ?>
     <div class="col-xs-4 col-sm-2 col-md-2">

    <?= $form->field($model, 'risk_id')->textInput(['maxlength' => true]) ?>
     </div>
    <div class="col-xs-6 col-sm-4 col-md-4">

    <?= $form->field($model, 'risk_date')->widget(DatePicker::classname(), [
        'language' => 'th',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions'=>[
          'changeMonth'=>true,
          'changeYear'=>true,
        ],
        'options'=>['class'=>'form-control']
      ]) ?>
         </div>
    <div class="col-xs-4 col-sm-2 col-md-2">
    <?= $form->field($model, 'risk_time')->textInput(['maxlength' => true]) ?>
    
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
    
       
    <?= $form->field($model, 'risk_department')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(RiskAddDep::find()->all(),'dep_id','dep_name'),
        'options' => ['placeholder' => 'เลือกแแผนก ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
       </div>   
    <div class="col-xs-6 col-sm-6">
        
     <?= $form->field($model, 'risk_miss')->inline()->radioList(\frontend\models\RiskHead::itemAlias('risk_miss')) ?>
    </div> 
    
<div class="col-xs-6 col-sm-6">
    
    <?= $form->field($model, 'clinictype')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(RiskClinictype::find()->all(),'id','name'),
        'options' => ['placeholder' => 'เลือกประเภทความเสี่ยง ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>  
    </div> 

    <?= $form->field($model, 'risk_event')->textarea(['rows' => 3]) ?>
       
     </div> 
<div class="col-xs-6 col-sm-6">
    <?= $form->field($model, 'risk_outcome_pt')->textInput(['maxlength' => true]) ?>
   </div>  

<div class="col-xs-6 col-sm-6">
    <?= $form->field($model, 'risk_outcome_guest')->textInput(['maxlength' => true]) ?>
  </div> 

  <div class="col-xs-6 col-sm-6">  
    <?= $form->field($model, 'risk_outcome_staff')->textInput(['maxlength' => true]) ?>
</div> 

<div class="col-xs-6 col-sm-6">
        <?= $form->field($model, 'risk_outcome_price')->textInput() ?>
   </div>   
      
  </div>     
  <div class="col-xs-6 col-sm-6">
    <?= $form->field($model, 'risk_safety')->textarea(['rows' => 3]) ?>
     </div> 
  
 <div class="col-xs-6 col-sm-6">
    <?= $form->field($model, 'risk_solve_begin')->textarea(['rows' => 3]) ?>
 </div>
   <div class="col-xs-6 col-sm-6">
    <?= $form->field($model, 'risk_sum_solve')->textarea(['rows' => 3]) ?>
   </div>

 <div class="col-xs-6 col-sm-6"> 
     <?= $form->field($model, 'risk_level')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(RiskLevel::find()->all(),'level','name'),
        'options' => ['placeholder' => 'เลือกระดับความรุนแรง ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>  
  </div>
 <div class="col-xs-6 col-sm-6">  
    <?= $form->field($model, 'risk_head_department')->textInput(['maxlength' => true]) ?>
</div>
 
    
   <div class="col-sm-4 col-md-4">
       <?= $form->field($model, 'risk_program_head')->dropdownList(
            ArrayHelper::map(ProgramHead::find()->all(),
            'id',
            'name'),
            [
                'id'=>'ddl-risk_program_head',
                'prompt'=>'เลือกโปรแกรมความเสี่ยง'
       ]); ?>
    </div>
     <div class="col-sm-4 col-md-4">
       <?= $form->field($model, 'risk_program_detail')->widget(DepDrop::classname(), [
            'options'=>['id'=>'ddl-risk_program_detail'],
            'data'=> [],
            'pluginOptions'=>[
                'depends'=>['ddl-risk_program_head'],
                'placeholder'=>'เลือกอำเภอ...',
                'url'=>Url::to(['/riskhead/get-risk_program_detail'])
            ]
        ]); ?>
    </div>

  
    <?= $form->field($model, 'risk_program_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'login_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'risk_sum_dep')->textInput() ?>

    <?= $form->field($model, 'risk_simple')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(FakthaRiskSimple::find()->all(),'id','name'),
        'options' => ['placeholder' => 'เลือกรายการตาม simple ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>  

    <?= $form->field($model, 'date_input')->widget(DatePicker::classname(), [
        'language' => 'th',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions'=>[
          'changeMonth'=>true,
          'changeYear'=>true,
        ],
        'options'=>['class'=>'form-control']
      ]) ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'last_staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'print_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'act_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic')->textInput() ?>
  
  <div class="col-xs-6 col-sm-6"> 
     <?= $form->field($model, 'risk_status')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(FakthaRiskStatus::find()->all(),'id','name'),
        'options' => ['placeholder' => 'เลือกสถานะของรายการ ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>  
      
   
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => ($model->isNewRecord ? 'btn btn-success' : 'btn btn-primary').' btn-lg btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
