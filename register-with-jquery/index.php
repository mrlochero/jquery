<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<label>
    <input type="text" name="hovaten" value="" id="hoten" placeholder="nhập họ tên"><br>
    <input type="text" name="email" value="" id="email" placeholder="nhập email"><br>
    <input type="text" name="phone" value="" id="phone" placeholder="nhập số phone"><br>
    <input type="text" name="ghichu" value="" id="ghichu" placeholder="nhập ghi chú"><br>
    <input type="submit" value="Gửi" id="gui">
    <br>
    <br>
    <br>
    <h3>load dữ liệu bằng AJAX</h3>
    <div id="result"></div>
</label>

<script language="javascript">
    $(document).ready(function () {

        // insert data
        $('#gui').on('click', function () {
            var hoten = $('#hoten').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var ghichu = $('#ghichu').val()

            if (hoten == '' || email == '' || phone == '') {
                alert('vui lòng nhập dữu liệu');
            } else {
                $.ajax({
                    url: "ajax_action.php",
                    type: "POST",
                    data: {
                        hoten: hoten,
                        email: email,
                        phone: phone,
                        ghichu: ghichu
                    },
                    success: function (result) {
                        fetch_data();
                    }
                });
            }
        })

        function fetch_data() {
            $.ajax({
                url: "ajax_action.php",
                type: "POST",
                success: function (data) {
                    $('#result').html(data);
                }
            })
        }

        fetch_data();


    })


</script>
</body>
</html>