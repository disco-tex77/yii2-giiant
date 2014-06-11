<?php
/**
 * @var yii\web\View                      $this
 * @var yii\widgets\ActiveForm            $form
 * @var yii\gii\generators\crud\Generator $generator
 */

echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'searchModelClass');
echo $form->field($generator, 'controllerClass');
echo $form->field($generator, 'baseControllerClass');
echo $form->field($generator, 'moduleID');
echo $form->field($generator, 'indexWidgetType')->dropDownList(
          [
              'grid' => 'GridView',
              'list' => 'ListView',
          ]
);
echo $form->field($generator, 'actionButtonClass')->dropDownList(
    [
        'yii\\grid\\ActionColumn' => 'Default',
        'common\\helpers\\ActionColumn' => 'App Class',
    ]
);
echo $form->field($generator, 'providerList')->textarea();
