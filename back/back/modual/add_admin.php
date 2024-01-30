<h1>新增帳號</h1>
<table>
    <tr>
        <th>帳號</th>
        <td><input type="text" name="acc" id="acc"></td>
        <td><button class="chkbtn">確認帳號是否重覆</button></td>
    </tr>
    <tr>
        <th>密碼</th>
        <td><input type="password" name="pw" id="pw" disabled></td>
        <td></td>
    </tr>
    <tr>
        <th>再次確認密碼</th>
        <td><input type="password" name="pw2" id="pw2" disabled></td>
        <td></td>
    </tr>
    <tr>
        <td colspa="3">
            <input class="subbtn" type="button" value="新增" style="display:none">
        </td>
        <!-- <td></td> -->
        <!-- <td></td> -->
    </tr>
</table>
<script>
$('.chkbtn').on('click', function() {
    // console.log($(this));
    $.post("./api/add_admin.php", {
        acc: $('#acc').val()
    }, function(res) {
        if (res != 0) {
            alert('帳號重覆');
        } else {
            $('.subbtn').css('display', 'inline-block');
            $('#pw').removeAttr('disabled');
            $('#pw2').removeAttr('disabled');
        }

    })
})
$('.subbtn').on('click', function() {
    let acc = $('#acc').val();
    let pw = $('#pw').val();
    let pw2 = $('#pw2').val();
    if (acc === "" || pw === "" || pw2 === "") {
        alert('請輸入完整資料');
        return;
    } else if (pw != pw2) {
        alert('密碼不一致');
        return;
    } else {
        $.post("./api/add_admin.php", {
            acc: $('#acc').val(),
            pw: $('#pw').val()
        }, function(res) {
            // if (res != 0) {
            //     alert('帳號重覆');
            // } 
            if (res == "recurrent") {
                alert('帳號重覆');
            } else {
                alert(res);
                location.reload();
            }
        })
    }
})
</script>