<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'โรงพยาบาลฟากท่า',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
             $report_mnu_itms[] = ['label' => 'เพิ่มประเภทความเสี่ยง', 'url' => ['risk-clinictype/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มแผนกที่รายงาน', 'url' => ['risk-add-dep/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มโปรแกรมความเสี่ยง', 'url' => ['program-head/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มระดับความรุนแรง', 'url' => ['risklevel/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มหัวข้ออุบัติการณ์', 'url' => ['program-detail/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มอุบัติการณ์ตาม simple', 'url' => ['faktha-risk-simple/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มหัวสถานะรายการ', 'url' => ['faktha-risk-status/index']];
             $report_mnu_itms[] = ['label' => 'เพิ่มอุบัติการณ์ตาม simple', 'url' => ['faktha-risk-simple/index']];
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'ระบบจัดการข้อมูล', 
                    'items' => $report_mnu_itms
                    ],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
