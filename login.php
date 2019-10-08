<?php
include('component/menu.php');
?>

<div class="space"></div>
<div class="container">
    <div class="row">
        <div class="card w-50 mx-auto">
            <div class="card-body mt-10">
                <div class="pt-10 pb-10 mx-auto">

                    <ul class="nav nav-tabs pt-4 pb-4">
                        <li onclick="addActive1()" class="pr-5 login active">
                            <a data-toggle="tab" href="#signin">Sign in</a>
                        </li>
                        <li onclick="addActive2()" class="signup">
                            <a data-toggle="tab" href="#signup">Sign up</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="signin" class="tab-pane in active">
                            <h1 class="heading">Sign in to continue</h1>
                            <form role="Form" method="POST" action="" accept-charset="UTF-8">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password..."
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember me
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn default-button">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div id="signup" class="tab-pane fade">
                            <h1 class="heading">Join Us today</h1>
                            <p>You will receive an email to verify your account.</p>
                            <form role="Form" method="POST" action="" accept-charset="UTF-8">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password..."
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password2" placeholder="Verify password..."
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn default-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="space"></div>

<?php
include('component/footer.php');
?>
