<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$csrf = Yii::$app->request->csrfToken;
$csrfParam = Yii::$app->request->csrfParam;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
        	<form id="form-signup" action="submitsignup" method="post">
				<input type="hidden" name="<?=$csrfParam?>" value="<?=$csrf?>">
				
				<div class="form-group">
					<label class="control-label" for="signupform-username">Username</label>
					<input type="text" id="signupform-username" class="form-control" name="username">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="signupform-email">Email</label>
					<input type="text" id="signupform-email" class="form-control" name="email">
				</div>
				
				<div class="form-group field-signupform-password required has-success">
					<label class="control-label" for="signupform-password">Password</label>
					<input type="password" id="signupform-password" class="form-control" name="password">
				</div>
				
                <button type="submit" class="btn btn-primary" name="signup-button">Signup</button>                </div>

            </form>
        </div>
    </div>
</div>
