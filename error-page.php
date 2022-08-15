<?php 
// To check information 
// echo '<pre>';
// print_r($_SERVER); 
// echo '</pre>';

// Creating base url
$baseURL = 'http://' . $_SERVER['HTTP_HOST']; 

$pieces = explode('/', $_SERVER['REQUEST_URI']);

$projName = $pieces[1];

unset($pieces[0], $pieces[1]);

$gibberish = implode('/', $pieces); 
// echo '<pre>';
// print_r($explodeURL); 
// echo '</pre>';


$styleURL = "$baseURL/$projName/css/style.css"; 
$homeURL = "$baseURL/$projName/index.php"; 
$imgURL = "$baseURL/$projName/img/emoji-face-2";
// echo $baseURL;
// echo '<br />';
// echo $styleURL; 
// echo '<br />';
// echo $homeURL; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">

    <title>Error Page</title>
    <link href="<?php echo $styleURL ?>" rel="stylesheet">
</head>
<body>
    <main class="error-page"> 
        <h1 class="erorr">OOPS.... Error Page</h1>
        <img src="<?php echo $imgURL ?>" alt="emoji face" class="center">
        <section class="message">
            <h1 class="title">Looks like you took a wrong turn</h1>
            <p>Thank you for your input, but the page <span><?php echo $gibberish; ?></span><br> does not exist</p>
            <p>Click <a href="<?php echo $homeURL?>">Home Page</a> to take you back</p>  
        </section>  
    </main>            
</body>
</html>