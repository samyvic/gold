<!--<?php
  //check if user is coming from a request
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Assign variables
    $user = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    //Creating array of errors
    $formErrors = array();
    if(strlen($phone) > 12){
      $formErrors[] = 'رقم الجوال يجب الا يتعدى 12 رقم!';
    }

   ini_set('SMTP','myserver');
   ini_set('smtp_port',25);

    //If no errors send the email [ mail(to, subject, Message, headers, parameters)]
    $headers = "From: " . $mail . "\r\n";
    $myEmail = 'sub@diamondchart.co';
    $subject = 'Golden Chart  | ' . $phone . "\r\n";
    if (empty ($formErrors)){
      mail($myEmail, $subject , $user, $headers);
      $user ='';
      $phone ='';
      $mail ='';
      $success =" <div class=''>لقد تم التسجيل!</div>";
    }

  }

?>
-->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="تقدم مؤسسة جولد تشارت استشارات مالية وفنية بسوق البورصة السعودية وتهتم الشركه فى مساعده المستثمر في الحفاظ على رأس المال وزيادة الارباح والحماية من الخسائر ونزول السوق." />
    <meta name="keywords" content="جولدن, تشارت, جولدن تشارت, مؤسسة, التداول, استشارة, استشارات, مالية, مال, سوق , اسواق, السعودي, السعودية, السعودى, البورصة, البورصه, فنية, رأس مال, رأس المال, ارباح, زيادة, الخسائر, الشراء, البيع, الاسهم,أسهم , الاسهم, الخبراء , المحللين, مؤشرات . اقتصاد, استثمار, العملاء, الخبرة, الخبراء, امانة, مربح, ارباح, احترافية, اسهم, ارتفاع, ارتفعت, مؤشرات, مكسب">
    <title>تسجيل | جولدن تشارت</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  </head>

  <body>
       <!-- Start register -->
      <div class="register">
        <!-- Start Mobile Navbar -->
        <div class="mobile-nav">
          <div class="mobile-container">
            <!-- Top Navigation Menu -->
            <div class="topnav">
              <div >
                <a href="index.html" class="logo"> <img src="logo.png"> </a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fas fa-bars"></i>
                </a>
              </div>

            </div>

            <div id="myLinks" class="myLinks">
              <a href="index.html" class="active"><i class="fas fa-grip-vertical"></i><span>خدماتنا</span></a>
              <a href="about.html"><i class="fas fa-clone"></i><span>الباقات</span></a>
              <a href="services.html"><i class="fas fa-users"></i><span>آراء العملاء</span></a>
              <a href="register.php"><i class="fas fa-user-plus"></i><span>تسجيل</span></a>
              <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=+966 56 378 0545&amp;text=&amp;source=&amp;data=&amp;app_absent=" class="whats"><i class="fab fa-whatsapp"></i></a>
            </div>

          </div>
        </div>
        <!-- End mobile Navbar -->
        <div class="side-nav">
          <div class="box box1">
            <a href="index.html"><img src="logo.png"></a>
          </div>
          <a href="services.html">
          <div class="box box2">
            <i class="fas fa-grip-vertical"></i>
            <h2>خدماتنا</h2>
          </div>
          </a>
          <a href="baqat.html">
          <div class="box box3">
            <i class="fas fa-clone"></i>
            <h2>الباقات</h2>
          </div>
          </a>
          <a href="feedback.html">
          <div class="box box4">
            <i class="fas fa-users"></i>
            <h2>آراء العملاء</h2>
          </div>
          </a>
          <a href="register.php">
          <div class="box box5">
            <i class="fas fa-user-plus"></i>
            <h2>تسجيل</h2>
          </div>
          </a>
          <div class="box box6">
              <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=+966 56 378 0545&amp;text=&amp;source=&amp;data=&amp;app_absent=" class="whats"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <div class="reg-form">
          <div class="container">

            <h1>سجل الآن</h1>
            <p>سجل الآن و احصل على توصيات مجانية وكن من الرابحين</p>

            <!--<div class="errors">
              <?php
                if (isset($formErrors)){
                  foreach ($formErrors as $error) {
                    echo $error . '<br>';
                  }
                }
              ?>
              <?php if (isset($success)) {echo $success;} ?>
            </div>-->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

              <input type="text" name="name" placeholder="" value="الاسم*" onfocus="if(this.value==this.defaultValue)this.value=''"
              onblur="if(this.value=='')this.value=this.defaultValue">

              <input type="text" name="phone" value="رقم الجوال*" onfocus="if(this.value==this.defaultValue)this.value=''"
              onblur="if(this.value=='')this.value=this.defaultValue">

              <input type="email" name="email" value="البريد الإليكتروني*" onfocus="if(this.value==this.defaultValue)this.value=''"
              onblur="if(this.value=='')this.value=this.defaultValue">

              <input class="button" type="submit" value="تسجيل">
            </form>

          </div>
        </div>
        <div class="overlay">
          <img src="register.jpg">
        </div>

      </div>
      <!-- End register -->
      <!-- Mobile Nav -->
      <script>
      function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      </script>


  </body>
</html>
