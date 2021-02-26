<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí tài khoản :D
	</title>
</head>
<body>:D :D :D :D
<?php
include ('KetNoi.php');

?>
<h1>Trang đăng ký thành viên</h1>
        <form action="xuly.php" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="name" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="pass" size="50" />
                    </td>
                </tr>
                <tr>
                	<td>
                		Xác nhận lại mật khẩu
                	</td>
                	<td>
                		<input type="password" name="pass2" size="50" / >
                	</td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="email" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="Fname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                       Phone :
                    </td>
                    <td>
                        <input type="text" name="sdt" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Loại Tài Khoản : 
                    </td>
                    <td>
                        <input type="text" name="id" size="50" value="Thành Viên" />
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
</body>
</html>