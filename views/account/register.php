<div class="card">
    <h5 class="card-header text-center py-4">
<!--        <p style="float: left; text-align: left"><i class="fas fa-chevron-left"></i></p>-->
        <strong>Register</strong>
    </h5>
    <div class="card-body">
        <form action="?controller=account&action=register" method="post">
            <div class="md-form">
                <label for="user">Username:</label>
                <input type="text" id="user" name="user" class="form-control">
            </div>
            <div class="md-form mt-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="md-form mt-3">
                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="pwd" class="form-control">
            </div>
            <div class="md-form mt-3">
                <label for="re-pwd">Confirm Password:</label>
                <input type="password" id="re-pwd" name="re-pwd" class="form-control">
            </div>
            <input class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Sign up">
            <p style="text-align: center"><a href="#">Back to Home</a></p>
        </form>
    </div>
</div>