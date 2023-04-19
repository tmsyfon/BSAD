<html lang="th">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./inc/demo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="service/province.service.js" type="text/javascript"></script>
</head>
<style>
    * {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body>

    <div class="container" style="margin-top: 25px;">
        <h1>REGISTER</h1>
        <form method="post" action="save_register.php">
            <div class="form-group">
                <label>Username</label><br>
                <input class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group" name="password">
                <label>Password</label><br>
                <input class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group" name="firstname">
                <label>Firstname</label><br>
                <input class="form-control" placeholder="Firstname" name="firstname">
            </div>
            <div class="form-group" name="lastname">
                <label>Lastname</label><br>
                <input class="form-control" placeholder="lastaname" name="lastname">
            </div>
            <div class="form-group" name="phone">
                <label>Phone</label><br>
                <input class="form-control" placeholder="Phone" name="phone">
            </div>
            <h1>ADDRESS</h1>
            <div class="form-group" name="house">
                <label>House No. / Village</label><br>
                <input class="form-control" name="house">
            </div>
            <div class="row">
                <div class="col-12" name="province">
                    <label class="control-label">Province</label>
                    <select class="form-control" placeholder="Province" name="province" id="province">
                        <option value="">Choose</option>
                    </select>
                </div>
                <div class="col-12" name="district">
                    <label class="control-label">District</label>
                    <select class="form-control" placeholder="District" name="district" id="district">
                        <option value="">Choose</option>
                    </select>
                </div>
                <div class="col-12" name="subdistrict">
                    <label class="control-label">Subdistrict</label>
                    <select class="form-control" placeholder="Subdistrict" name="subdistrict" id="subdistrict">
                        <option value="">Choose</option>
                    </select>
                </div>
            </div>
            <div class="form-group" name="postal">
                <label>Postal Code</label><br>
                <input class="form-control" name="postal">
            </div>
            <button type="submit" class="btn btn-dark">Register</button>
        </form>
    </div>
</body>
