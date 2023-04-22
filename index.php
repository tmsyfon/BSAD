<HTML>
  <?php
  // ตรวจสอบว่ามี session หรือยัง
  session_start();
  if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    // ใช้ $user_id ได้ทุกหน้า
  } else {
    // ถ้าไม่มี session ให้ redirect ไปหน้า Login
    header("Location: login.php");
    exit();
  }
  ?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <style>
  /* แทรก CSS code ที่คัดลอกมา */
  @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  /* กำหนด Font สำหรับส่วนต่าง ๆ ของเว็บไซต์ */
  body {
    font-family: 'Kanit', sans-serif;
  }
  h1, h2, h3, h4, h5, h6 {
    font-family: 'Kanit', sans-serif;
    font-weight: bold;
  }
  /* กำหนด Font สำหรับฟอร์ม */
  form label, form input, form button {
    font-family: 'Kanit', sans-serif;
    font-weight: normal;
  }
   .container {
     /* width:33.33%;
      position: fixed;
      top: 50%;
   left: 50%;
   transform: translate(-50%, -50%); */
   width: 30%;

     margin: auto;
     border: 1px solid #ccc;
     border-radius: 10px; /* เพิ่มความฟุ้งของเส้นขอบ */
     padding: 20px;
   }


  #drop-area img {
    display: none;
  }

  #drop-area {
  width: 50%;
  height: 2em; /* ขนาด Textbox ปกติ */
  border: 2px dashed gray;
  overflow: hidden; /* ไม่ให้ภาพที่แทรกรูปเกินขนาดของ Drop Area */
  margin-bottom: 10px; /* เพิ่มช่องว่างด้านล่าง Drop Area */
}




 </style>

</head>
<div style=" height: 100px; display: flex; justify-content: center; align-items: center;">
  <img src="image/logo.png" alt="logo" style="height: 80px;">
</div>
<div style="text-align:center; margin-bottom:30px;">
  <h2>เพิ่มข้อมูลรูปพรรณ</h2>
</div>
<div class="container" style="margin-bottom:150px; margin-top:50px;">
<form action="upload2.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
  <label for="text">ชื่อ:</label>
  <input type="text" class="form-control" id="text" name="text"><br><br>
</div>
  <div class="form-group">
  <label for="text2">เบอร์โทรศัพท์:</label>
  <input type="text" class="form-control" id="text2" name="text2"><br><br>
</div>
<div class="form-group">
<label for="text2">เพศ:</label>
<select class="form-control" id="text3" name="text3">
  <option value="ชาย">ชาย</option>
  <option value="หญิง">หญิง</option>
</select>
<br><br>
</div>
<div class="form-group">
<label for="text2">สีผิว:</label>
<select class="form-control" id="text4" name="text4">
  <option value="ขาว">ขาว</option>
  <option value="แทน">แทน</option>
  <option value="ดำ">ดำ</option>
  <option value="เหลือง">เหลือง</option>
</select>
<br><br>
</div>

<div class="form-group">
<label for="text2">กรุ๊ปเลือด:</label>
<select class="form-control" id="text5" name="text5">
  <option value="ยังไม่ทราบ">ยังไม่ทราบ</option>
  <option value="A">กรุ๊ป A</option>
    <option value="B">กรุ๊ป B</option>
  <option value="AB">กรุ๊ป AB</option>
  <option value="O">กรุ๊ป O</option>
</select>
<br><br>
</div>
<div class="form-group">
  <label for="text2">สีผม:</label>
  <input type="text" class="form-control" id="text6" name="text6"><br><br>
</div>
<div class="form-group">
  <label for="text2">ชื่อแก๊ง:</label>
  <input type="text" class="form-control" id="text7" name="text7"><br><br>
</div>

<div class="form-group">
  <label for="text2">หมายเหตุ:</label>
  <input type="text" class="form-control" id="text8" name="text8"><br><br>
</div>





  <label for="image1">ภาพที่ 1:</label>
  <input type="file" id="image1" name="image1" accept=".jpg,.png" required><br><br>
  <div class="row">
    <div class="col">
      <img src="" id="preview1" class="img-thumbnail" style="display:none;">
    </div>
  </div>
  <label for="image2">ภาพที่ 2:</label>
  <input type="file" id="image2" name="image2" accept=".jpg,.png"><br><br>
  <div class="row">
      <div class="col">
      <img src="" id="preview2" class="img-thumbnail" style="display:none;">
    </div>
  </div>
  <label for="image3">ภาพที่ 3:</label>
  <input type="file" id="image3" name="image3" accept=".jpg,.png"><br><br>

  <!-- ตัวอย่างการแสดงภาพตัวอย่าง แต่ละตัว -->
<div class="row">

  <div class="col">
    <img src="" id="preview3" class="img-thumbnail" style="display:none;">
  </div>
</div>
<label for="image3">ภาพที่ 4:</label>
<input type="file" id="image4" name="image4" accept=".jpg,.png"><br><br>

<!-- ตัวอย่างการแสดงภาพตัวอย่าง แต่ละตัว -->
<div class="row">

<div class="col">
  <img src="" id="preview4" class="img-thumbnail" style="display:none;">
</div>
</div>
<label for="image3">ภาพที่ 5:</label>
<input type="file" id="image5" name="image5" accept=".jpg,.png"><br><br>

<!-- ตัวอย่างการแสดงภาพตัวอย่าง แต่ละตัว -->
<div class="row">

<div class="col">
  <img src="" id="preview5" class="img-thumbnail" style="display:none;">
</div>
</div>

<!-- <input type="file" id="file-input" name="file-input" style="display:none;">
<div id="drop-area" onclick="removeImage()">
  <p>Drop image here or click to select</p>
</div>
<div style="position:relative;">
  <img id="preview" src="" style="width:100px;height:100px;">

</div> -->
<style>
  #mytextbox {
    position: relative;
    margin-bottom: 20px;
  }

  #preview {
    position: absolute;
    bottom: -50px;
    width: 50%;
  }
</style>

<script>
  var dropArea = document.getElementById('drop-area');
  var fileInput = document.getElementById('file-input');
  var preview = document.getElementById('preview');


  // Prevent default drag behaviors
  ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
    document.addEventListener(eventName, preventDefaults, false);
  });

  // Highlight drop area when item is dragged over it
  ['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false);
  });

  // Unhighlight drop area when item is dragged out of it
  ['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false);
  });

  // Handle dropped files
  dropArea.addEventListener('drop', handleDrop, false);

  // Handle file input change event
  fileInput.addEventListener('change', handleFileInput, false);

  // Handle paste event
  document.addEventListener('paste', handlePaste, false);

  function preventDefaults(event) {
    event.preventDefault();
    event.stopPropagation();
  }

  function highlight() {
    dropArea.style.background = 'lightgray';
  }

  function unhighlight() {
    dropArea.style.background = '';
  }

  function handleDrop(event) {
    var dt = event.dataTransfer;
    var files = dt.files;

    handleFiles(files);
  }

  function handleFileInput(event) {
    var files = event.target.files;

    handleFiles(files);
  }

  function handlePaste(event) {
  var items = (event.clipboardData || event.originalEvent.clipboardData).items;
  for (var i = 0; i < items.length; i++) {
    if (items[i].type.indexOf('image') !== -1) {
      var file = items[i].getAsFile();
      var reader = new FileReader();
      reader.onload = function(e) {
        clearPreview(); // ลบภาพที่แสดงใน Area ออก
        preview.src = e.target.result;
        preview.style.display = 'inline';
        var blob = new Blob([file], {type: 'image/png'});
        blob.name = "pasted-image.png";
        var fileList = new FileList();
        fileList.add(blob);
        fileInput.files = fileList;
      };
      reader.readAsDataURL(file);
      break;
    }
  }
}

function handleFiles(files) {
clearPreview(); // ลบภาพที่แสดงใน Area ออก
var file = files[0];
var reader = new FileReader();
reader.onload = function(e) {
  preview.src = e.target.result;
  preview.style.display = 'inline';
  fileInput.files[0] = file;
};
reader.readAsDataURL(file);
}
  dropArea.addEventListener('mouseenter', addBlinkingCursor, false);
dropArea.addEventListener('mouseleave', removeBlinkingCursor, false);

function addBlinkingCursor() {
  dropArea.style.cursor = 'text';
  var intervalId = setInterval(function() {
    dropArea.style.border = dropArea.style.border ? '' : '2px dashed gray';
  }, 500);
  dropArea.dataset.cursorInterval = intervalId;
}

function removeBlinkingCursor() {
  dropArea.style.cursor = '';
  clearInterval(dropArea.dataset.cursorInterval);
  dropArea.style.border = '2px dashed gray';
}

dropArea.addEventListener('click', function() {
  this.innerHTML = '&nbsp;';
  this.contentEditable = 'true';
  this.classList.add('editable');
  this.focus();
});

dropArea.addEventListener('blur', function() {
  if (!this.textContent.trim()) {
    this.innerHTML = 'Drop image here or click to select';
    this.contentEditable = 'false';
    this.classList.remove('editable');
  }
});

var blinkInterval;
dropArea.addEventListener('focus', function() {
  blinkInterval = setInterval(function() {
    dropArea.classList.toggle('blink');
  }, 500);
});

dropArea.addEventListener('blur', function() {
  clearInterval(blinkInterval);
  dropArea.classList.remove('blink');
});

function removeImage() {
  preview.src = "";
  preview.style.display = 'none';
  fileInput.value = "";
}

function clearPreview() {
  preview.src = '';
  preview.style.display = 'none';
}


</script>




  <input type="submit" value="Upload">
</form>
</div>
</HTML>
<!-- JavaScript เพื่อแสดงภาพตัวอย่างเมื่อเลือกไฟล์ -->
<script>
  function previewImage(event, preview) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById(preview);
      output.src = reader.result;
      output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
  }

  document.getElementById("image1").addEventListener("change", function(event){
    previewImage(event, "preview1");
  });
  document.getElementById("image2").addEventListener("change", function(event){
    previewImage(event, "preview2");
  });
  document.getElementById("image3").addEventListener("change", function(event){
    previewImage(event, "preview3");
  });
  document.getElementById("image4").addEventListener("change", function(event){
    previewImage(event, "preview4");
  });
  document.getElementById("image5").addEventListener("change", function(event){
    previewImage(event, "preview5");
  });
  </script>
