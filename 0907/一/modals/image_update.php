<form action="./api/update.php" method="post" enctype="multipart/form-data">
<div class="cent">
        <h3 class="cent">更新圖片</h3>


        <div>更換圖片:<input type="file" name="img" id=""></div>

    </div>
    <div class="cent">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="hidden" name="table" value="image">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>