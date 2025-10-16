<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';



?>


<?php include_once './parts/header.php'; ?>



       

        <div class="position-relative overflow-hidden p-3 p-md-5 p-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
              <img src="images/pngtree-a-smilling-closeup-photo-of-joker-face-image-png-image_12645725.png" alt="">
                <h1 class="display-4 fw-normal">اربح مع راكان</h1>
                <p class="lead fw-normal">باقي على فتح التسجيل</p>
                <h3 id="countdown" style="color:Green; FontSize:24px;"></h3>
                <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
                    
</div>

<div class="container">
  <h3>للدخول في السحب اتبع ما يلي:</h3>
<ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على انستغرام بالتاريخ المذكور اعلاه</li>
                <li class="list-group-item">ساقوم ببث مباشر لمدة ساعتين عبارة عن اسئلة و اجوبة حرة للجميع</li>
                <li class="list-group-item">خلال فترة الساعتين سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل اسمك و ايميلك</li>
                <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
                <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج الجوكر</li>
</ul>
</div>
</div>





<div class="container">
      <div class="position-relative text-right">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control"  value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>


    <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control"  value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>


    <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" id="email" class="form-control"  value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
 
 
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>

</div>
</div>










   



 



<div class="loader-con">
<div id="loader">
  <canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>



  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Test Modal</title>
</head>
<body class="p-4">






<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" class="btn btn-primary"  id="winner">
    اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"> الرابح في المسابقة </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($user as $userss): ?>
        <h1 class="display-4 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($userss['firstName']) . ' ' . htmlspecialchars($userss['lastName']) . '<br>' . htmlspecialchars($userss['email']); ?>  </h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>




















<?php include_once './parts/footer.php'; ?>






