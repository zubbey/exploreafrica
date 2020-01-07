<?php

include_once 'validate.php';
include('component/menu.php');

?>

    <button class="d-none" onclick="payWithPaystack();" id="pay_btn" name="pay_btn" type="button"> </button>

    <!-- start banner Area -->
    <section class="banner-area-donate relative about-banner-donate p-5" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Donate to end <br>social vices in Africa
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start Payment form -->
    <section class="auto">
        <div class="row">
            <div class="col">
                <div class="alert alert-success text-center" style="background: #ffffff; border: none;">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                <h3 class="h1">For Cheque Donation or transfer, use Foundation Account below:</h3>
                 <ul>
                    <li class="lead bold"><span>Account Name:</span> <h3>Explore Africa Foundation</h3></li>
                     <li class="lead bold"><span>Bank:</span> <h3>Guaranty Trust Bank (GTB)</h3></li>
                </ul>
                <div class="divider"></div>
                <div class="row">
                  <div class="col-sm">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">0269404198</h5>
                        <p class="card-text">NGN</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">0269404253</h5>
                        <p class="card-text">USD</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">0269403847</h5>
                        <p class="card-text">GBP</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">0269404260</h5>
                        <p class="card-text">EUR</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>    
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div id="payOptions" class="row ">

                <div class="h5 line-break">OR</div>

                <div class="col">
                    <p class="h5">Donate an amount</p>
                    <div id="first_form-row" class="form-row">
                        <button type="submit" name='btn1' class="btn btn-secondary btn-lg">&#8358; 1,000</button>
                        <button type="submit" name='btn2' class="btn btn-secondary btn-lg">&#8358; 5,000</button>
                        <button type="submit" name='btn3' class="btn btn-secondary btn-lg">&#8358; 20,000</button>
                        <button type="submit" name='btn4' class="btn btn-secondary btn-lg">&#8358; 50,000</button>
                        <button type="submit" name='btn5' class="btn btn-secondary btn-lg">&#8358; 100,000</button>
                        <img class="loading d-none" src="https://media.giphy.com/media/sSgvbe1m3n93G/giphy.gif">
                        <input class="bold" name='amount_d' id="amount_d" value="NGN: <?php echo $S_amount . '.00' ?>"
                               autocomplete="off" disabled>
                    </div>
                </div>
                <!-- <//php echo "USD: ".$S_amount.".00"> -->
                <div class="line1"></div>

                <div class="col">
                    <p class="h5">other amount</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&#8358;</span>
                        </div>
                        <input name='other' type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                               placeholder="Your Own Amount" value="<?php echo $S_amount; ?>">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                            <!-- <button name="setbtn" type="submit" class="btn btn-secondary">Set amount</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-w-b">

                <div id="payDetails" class="row">
                    <div class="col">
                        <p class="h5">Enter Personal Details</p>
                        <div id="check1" class="custom-control custom-checkbox">
                            <input name="checkbox1" type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Donate Anonymously</label>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <span class="error">* <?php echo $firstnameErr; ?></span>
                                <input name='fname' type="text" class="form-control" placeholder="First name"
                                       value="<?php echo $firstname; ?>">
                            </div>
                            <div class="col">
                                <span class="error">* <?php echo $lastnameErr; ?></span>
                                <input name='lname' type="text" class="form-control" placeholder="Last name"
                                       value="<?php echo $lastname; ?>">
                            </div>
                        </div>
                        <div class="form-row form-group ">
                            <div class="col-md-9">
                                <span class="error">* <?php echo $stateErr; ?></span>
                                <input name='state' type="text" class="form-control" for="inputCity" id="inputCity"
                                       placeholder="State / Country" value="<?php echo $state; ?>">
                            </div>
                            <div class="col-md-3">
                                <span class="error">* <?php echo $postalErr; ?></span>
                                <input name='postal' type="text" class="form-control" for="inputZip" id="inputZip"
                                       placeholder="Postal Code" value="<?php echo $postal; ?>">
                            </div>
                        </div>
                        <div class="form-row input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Choose Campaign</span>
                            </div>
                            <select name='choose' class="custom-select custom-select required">
                                <option value="1" selected>Back to School Support Project</option>
                                <option value="2">Youth Konnect for Peace Network</option>
                                <option value="3">Free Health Care Support Services</option>
                                <option value="4">Free Skill Acquisition and Entrepreneurship Training</option>
                                <option value="5">Schools Educational outreach</option>
                                <option value="6">Young leaders mentoring programme</option>
                                <option value="7">Electoral Violence & Drug Abuse Campaign</option>
                                <option value="8">Renovation and upgrade of community schools libraries and
                                    laboratories
                                </option>
                                <option value="9">Educational support and scholarship programme</option>
                                <option value="10">Summer ICT and Personal development bootcamp</option>
                                <option value="11">Youth Enterprise Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="line2"></div>
                    <div class="col">
                        <p class="h5">Enter your email</p>
                        <span class="error">* <?php echo $emailAddressErr; ?></span>
                        <div class="form-row input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input name='email' type="text" class="form-control" placeholder="Enter Email Address"
                                   value="<?php echo $emailAddress; ?>">
                            <!-- <button name="emailbtn" type="submit" class="btn btn-secondary">Submit</button> -->

                        </div>
                        <dl id="info" class="col">
                            <dt class="col h5">Programme Description</dt>
                            <dd class="col justify-content-center">EAF runs a highly flexible and cooperative span of
                                control so that our workspace is not stifled up by some unnecessary bureaucracy that
                                most times delays work execution, dwindles employee motivation, and discourages
                                effective team work.
                            </dd>
                        </dl>
                        <input name="give_btn" type="submit" class="btn btn-secondary btn-lg left" value="GIVE NOW"/>
                    </div>
                </div>
            </div> <!-- full background width start here -->
        </form> <!-- Personal information for database -->
    </section>
<?php include('component/footer.php'); ?>
