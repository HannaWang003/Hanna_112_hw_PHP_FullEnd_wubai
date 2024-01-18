
    <div id="login" class="container" style="background:transparent;width:50%;height:40%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);padding:20px;backdrop-filter:blur(50%px)">
    <h1>管理者登入</h1>
    <main>
        <div>
          <form>
    <label for="acc">ACCOUNT</label><br>
  <input type="text" id="acc" name="acc"><br>
  <label for="pw">PASSWORD</label><br>
  <input type="password" id="pw" name="pw">
  </div>
  <div class="mt-3">
  <input class="me-3" type="button" value="登入" onclick="login()">
   <input type="reset" value="重置">
   </form>
  </div>
</main>
</div>
<script>
function login(){
    $.post("./api/chk_acc.php?do=admin",{
      acc: $("#acc").val(),
    pw: $("#pw").val()},
      (res)=>{
        console.log(res);
      if(res=="empty"){
        alert("帳號及密碼不得為空");
      }
      else if(parseInt(res)==0){
        alert("帳號或密碼錯誤");
        location.reload();
      }
      else{
        alert("登入成功");
        location.href="./back.php";     }
    }
    )}
</script>
