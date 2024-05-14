<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>
</head>
@include('layouts.header')
<body>
            <div class="container">
            <h3 class="d-flex justify-content-center my-5"><b>WATI Accounts</b></h3>
            <table class="table ">
        <thead>
            <tr>
                <th>Account Type</th>
                <th>Phone number</th>
                <th>Domain</th>
                <th>Status</th>
                <th>Further Action</th>
            </tr>
        </thead>
            </table>

            <button class="btn btn-success d-flex align-items-end mt-5">It may take up to 30 minutes for your new account to be activated. 
                Please check your email for further instructions</button>
                <p>If you need any other help please mail us to <a href="">support@wati.io </a></p>
    </div>
</body>
</html>