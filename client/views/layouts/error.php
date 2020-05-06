

<?php
/* @var $exception \yii\web\HttpException|\Exception */
/* @var $this \yii\web\View */

if(!empty($exception)) {
    if ($exception instanceof \yii\web\HttpException) {
        $code = $exception->statusCode;
    } else {
        $code = $exception->getCode();
    }
//      $name = $handler->getExceptionName($exception);
    if ($name === null) {
        $name = 'Error';
    }
    if ($code) {
//          $name .= " (#$code)";
    }

    if ($exception instanceof \yii\base\UserException) {
        $message = $exception->getMessage();
    } else {
        $message = 'An internal server error occurred.';
    }
}

Yii::$app->layout = false;
?>

<?php if (method_exists($this, 'beginPage')) {
    $this->beginPage();
} ?>

<?= $this->render('@common/views/error/view', [
    'message' => $message,
])
// Hello
?>

<?php if (method_exists($this, 'endPage')) {
    $this->endPage();
} ?>
