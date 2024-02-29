<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="teks" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="teks" name="username" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>
                        <select name="level" id="level" required>
                            <option disable selected> pilih </option>
                            <option value="admin">Admin</option>
                            <option value="user">user</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="button" name="submit" value="register"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

<?php

        if (isset($_POST['Submit'])) {
            $nama= $_POST['nama'];
            $username= $_POST['username'];
            $password= $_POST['password'];
            $level= $_POST['level'];
            $email = $_POST['email'];
            echo($password);

            include_once("koneksi.php");

            $result = mysqli_query($mysqli,"INSERT INTO user(nama,username,password,level,email)
            VALUES('$nama','$username','$password','$level','$email')");

            header("location:index.php");
        }
        ?>