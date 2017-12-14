<?php include 'hf/hlog.php'; ?>
<body class="bimg">
    <div class="container">     
        <div class="col-sm-5 mx-auto pb-1" style="padding-top: 7%;"> 
            <h1 class="shdwff">Aplikasi Ujian Online</h1>
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    Login Ujian Online
                </div>
                <div class="card-body">
                    <form> <!-- MASUKKAN FORM ACTION DISNI -->
                        <div class="form-group">
                            <label for="uid">Username:</label>
                            <input type="text" class="form-control" id="uid" placeholder="Masukkan Username" name="uid">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" name="pswd">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
<?php include 'hf/footer.php'; ?>