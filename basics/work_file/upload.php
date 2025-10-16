<?php
$maxFileSize = 1024 * 1024 * 8;
$maxHeightSizeImg = 720;
$maxWidthSizeImg = 1280;

if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    $imageUploadInfo = getimagesize($file['tmp_name']);

    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } elseif ($file['size'] > $maxFileSize) {
        $error = 'Размер файла слишком больше 8мб!';
    } elseif ($file['error'] == UPLOAD_ERR_INI_SIZE) {
        $error = 'Размер файла слишком большой';
    } elseif ($imageUploadInfo[0] > $maxWidthSizeImg || $imageUploadInfo[1] > $maxHeightSizeImg) {
        $error = 'Размер изображения не должен превышать ' . $maxWidthSizeImg . 'x' . $maxHeightSizeImg . '!';
    } else {
        $result = 'http://myproject.loc/uploads/' . $srcFileName;
    }
}
?>


<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <?= $error ?>
<?php elseif (!empty($result)): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>
