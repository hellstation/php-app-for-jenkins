<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = '/tmp/sample-app.log';
    $message = file_get_contents('php://input');
    file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Application - AWS Elastic Beanstalk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <section class="congratulations">
        <h1>Congratulations<br><span>DevOps Engineer!!!</span></h1>
        <p>Your AWS Elastic Beanstalk <em>PHP</em> application is now running on your own dedicated environment in the AWS&nbsp;Cloud</p>
        <p>You are running PHP version <?php echo phpversion(); ?></p>
    </section>

    <section class="instructions">
        <h2>What's Next?</h2>
        <ul>
            <li><a href="https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/">AWS Elastic Beanstalk overview</a></li>
            <li><a href="https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/create-deploy-php-eb.html">Deploying AWS Elastic Beanstalk Applications in PHP Using Eb and Git</a></li>
            <li><a href="https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/create-deploy-php-rds.html">Using Amazon RDS with PHP</a></li>
            <li><a href="https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/customize-containers-ec2.html">Customizing the Software on EC2 Instances</a></li>
            <li><a href="https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Customizing Environment Resources</a></li>
        </ul>

        <h2>AWS SDK for PHP</h2>
        <ul>
            <li><a href="https://aws.amazon.com/sdk-for-php/">AWS SDK for PHP home</a></li>
            <li><a href="https://aws.amazon.com/php/">PHP developer center</a></li>
            <li><a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP on GitHub</a></li>
        </ul>
        <h2>Some Picture</h2>
        <img src="image.jpg" alt="Sample Image">
    </section>
</body>
</html>
<?php
}
?>
