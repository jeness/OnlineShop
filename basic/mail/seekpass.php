<p> Dear <?php echo $adminuser;?>，</p>

<p>The link to find back your password is as followed:</p>

<?php $url = Yii::$app->urlManager->createAbsoluteUrl(['admin/manage/mailchangepass', 'timestamp' => $time, 'adminuser' => $adminuser, 'token' => $token]); ?>
<p><a href="<?php echo $url; ?>"><?php echo $url; ?></a></p>

<p>The link is valid in 5 minutes. Please do not sent the link to others.</p>

<p>This email is automatically sent by the website backend system. Please do not reply it.</p>