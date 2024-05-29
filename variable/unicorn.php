<form method="get" action="">
    <input type="radio" id="human" name="gender" value="human">
    <label for="male">Human</label>
    <br>
    <input type="radio" id="cat" name="gender" value="cat">
    <label for="female">Cat</label>
    <br>
    <input type="radio" id="unicorn" name="gender" value="unicorn">
    <label for="female">Unicorn</label>
    <br>
    <br>
	<input type="submit" name="submit" value="Registration">
</form>

<?php 
if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    
    $gif = ($gender == human) ? "https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZnRwaWx1bzVweGthaWFvdzRtOG1zbHV0cGtxempwd2V0b2IyNm41ZiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/w3AOSBckIzlrod6YCa/giphy.gif" : (($gender == cat) ? "https://media.giphy.com/media/vFKqnCdLPNOKc/giphy.gif?cid=790b761137la3tkqqip9d5v7uy3dozh13d9a8dxn50kv94df&ep=v1_gifs_search&rid=giphy.gif&ct=g" : "https://media.giphy.com/media/122pLlowwMS5aM/giphy.gif?cid=ecf05e476nkws17r9w6cdst1cl694wt4g3o7xmme2rvuct6v&ep=v1_gifs_search&rid=giphy.gif&ct=g");
    echo "<img src=\"$gif\" alt=\"Gif\">";
    }
?>