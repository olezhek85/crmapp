<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\customer\Phone;
use frontend\models\customer\Customer;

$form = ActiveForm::begin([
  'id' => 'add-customer-form',
]);

echo $form->errorSummary([$customer, $phone]);
echo $form->field($customer, 'name');
echo $form->field($customer, 'birth_date');
echo $form->field($customer, 'notes');

echo $form->field($phone, 'number');

echo Html::submitButton('Submit', ['class' => 'btn btn-primary']);
ActiveForm::end();
