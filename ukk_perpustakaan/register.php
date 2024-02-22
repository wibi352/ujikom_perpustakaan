<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($_POST['login'])) {
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_telepon = $_POST['no_telepon'];
                                            $level = $_POST['level'];
                                            $username = $_POST['username'];

                                            $password = md5($_POST['password']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user (nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                            if (insert) {
                                                echo '<script>alert("Register berhasil, silahkan login"); location.href="login.php";</script>';
                                            } else {
                                                echo '<script>alert("Maaf, Register gagal");</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" required  type="text" required name="username" placeholder="Masukan nama lengkap"/>
                                                <label for="inputEmail">Nama lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" required name="email"placeholder="Masukan email" />
                                                <label for="inputPassword">email</label>
                                            </div>
                                              
                                              <div class="form-group">
                                              
                                                <label class="small-mb-1">Alamat</label>
                                                 <textarea name="alamat" rows="5" class="form-control py-4"></textarea>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="no_telepon"placeholder="Masukan no. telepon" />
                                                <label for="inputPassword">No. telepon</label>
                                            </div>
                                            </div>
                                              <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="username"placeholder="Masukan username" />
                                                <label for="inputPassword">Username</label>
                                            </div>
                                              <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="password"placeholder="Masukan password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                             <div class="form-grup">

                                                <label class="small-mb-1">Level</label>
                                                <select name="level" class="form-select-py-4">
                                                <option value="peminjam">peminjam</option>
                                                <option value="admin">admin</option>

                                                </select>
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn btn-primary" typeS="submit" name="login" value="login">Register</button>
                                                 <a class="btn btn-danger" href="login.php">Login</a>
                                                 
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
