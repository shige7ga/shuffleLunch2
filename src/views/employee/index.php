<h2><?php echo $formTitle ?></h2>
<form action="" method="post">
    <div>
        <label for="empNo">社員番号：</label>
        <input type="text" id="empNo" name="empNo">
    </div>
    <div>
        <label for="empName">社員名：</label>
        <input type="text" id="empName" name="empName">
    </div>
    <input type="submit" value="<?php echo $formButton ?>">
</form>
<h2>社員一覧</h2>
<ul>
    <?php foreach ($employees as $employee) : ?>
        <li><?php echo $employee['emp_no'] . '：' . $employee['emp_name'] ?></li>
    <?php endforeach ?>
</ul>
