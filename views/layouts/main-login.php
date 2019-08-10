<?php
use yii\helpers\Html;
use app\assets\MaterialPluginAsset;
use dmstr\widgets\Alert;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
$this->title = 'Pengajuan Beasiswa Bidikmisi UIN Sunan Ampel';
dmstr\web\AdminLteAsset::register($this);



?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
    <meta charset="<?= Yii::$app->charset; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="<?= Url::to('@web/uin.png'); ?>">
    <?= Html::csrfMetaTags(); ?>
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
</head>
<body class="login-page">

<?php $this->beginBody(); ?>
<?=Alert::widget()?>

    <?= $content; ?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
