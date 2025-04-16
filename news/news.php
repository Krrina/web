<?php
require_once 'NewsDB.class.php';

$news = new NewsDB();
$errMsg = "";

if (isset($_GET['del'])) {
    include 'delete_news.inc.php';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'save_news.inc.php';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Новостная лента</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Последние новости</h1>
    <?php if ($errMsg != ""): ?>
        <div style="color: red;"><?php echo $errMsg; ?></div>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <label>Заголовок новости:<br />
            <input type="text" name="title" /></label>
        </p>
        <p>
            <label>Категория:<br />
            <select name="category">
                <option value="1">Политика</option>
                <option value="2">Культура</option>
                <option value="3">Спорт</option>
            </select></label>
        </p>
        <p>
            <label>Описание:<br />
            <textarea name="description" cols="50" rows="5"></textarea></label>
        </p>
        <p>
            <label>Источник:<br />
            <input type="text" name="source" /></label>
        </p>
        <p>
            <input type="submit" value="Добавить новость" />
        </p>
    </form>
    <hr>
    <?php include 'get_news.inc.php'; ?>
    
     <a href='//www.plantuml.com/plantuml/png/pT71IiGm40RWUvvYm4lBwbwy5GzhgGT15yG7ADdaDmHY8fEfigZlRdP3hNq3SmeV_3F3p2wBPfbUW_9Hm2_QWExt-CX3Jv-Aojja_OwJDE8beACixAEx9AC5Bl5n4OjisB-9Jt71d2Oslx6seqDA0JhMuWvohbrSC-jZLOi0gKszxUWqcWF_oNuhPOBEcLQZNWtzkBzzl9kRLHpjeQFdfmSlk3xBXOCCVTEkTJEE9iKId8mqxKmMY_pZPSmdk_dQRgd-rGxHbiF-0000' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>

</body>
</html>