<div class="" id="st-container">
    <div class="">
        <div class="st-content-inner">
            <div class="st-content">
                <div class="section reset" style="min-height: 471px;">
                    <div class="row profiler">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="contents-reg">
                                    <h3>Register</h3>

                                    <div class="reg-invite text-center">

                                        <a href="#" class="facebooklogin">
                                            <p> <i class="fa fa-facebook"></i> SIGN IN WITH FACEBOOK</p>
                                        </a>
                                    </div>
                                    <div class="reg-invite text-center">

                                        <a href="<?php echo site_url("twitter/auth");?>">
                                            <p> <i class="fa fa-twitter"></i> SIGN IN WITH TWITTER</p>
                                        </a>
                                    </div>

                                    <div class="pad-btm">
                                        <div class="text-center color-p1">
                                            <h4>-&nbsp;OR&nbsp;-</h4> 
                                        </div>
                                    </div>
                                    <h5 class="text-center">enter your details below</h5>
                                    <h6 class="text-center" style="color:red;">
                                    <?php 
$msg=$this->input->get('alert');
if(isset($msg))
{
    echo $msg;
}
                    ?>
                                    </h6>
                                    <form method="post" action="<?php echo site_url('website/registeruser');?>" enctype="multipart/form-data">
                                        <div class="input-content1 text-center">
                                            <input value="" name="name" id="password" placeholder="NAME  * " type="text" class="usericon inputer" required>
                                            <input value="" name="email" id="conformPassword" placeholder="EMAIL *" type="text" class="emailicon inputer" required>
                                            <input value="" name="city" id="conformPassword" placeholder="CITY *" type="text" class="cityicon inputer" required>
                                        </div>
                                        <div class=" pad-select text-center">
                                            <span class="contage">AGE</span>
                                            <span class="pad-left">
<!--                                        <input type="number" placeholder="DD" name="day" min="1" max="30" class="input-age">-->
                                        <select name="day" id="" class="input-age">
                                            <option>Day</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
                                                    </select>
                                        <select name="month" id="" class="input-age">
                                            
	<option>Month</option>
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">Nobember</option>
	<option value="12">December</option>
                                        </select>
                                        <select name="year" id="" class="input-age">
                                        <option>Year</option>
     <option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>                                       
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	<option value="1904">1904</option>
	<option value="1903">1903</option>
	<option value="1902">1902</option>
	<option value="1901">1901</option>
                                        </select>
                                            </span>
                                            <span class="contage">SEX</span>
                                            <select class="select-sex" name="sex" required>
                                                <option value="male">MALE</option>
                                                <option value="female">FEMALE</option>
                                            </select>

                                        </div>
                                        <div class="input-content2 text-center pad-btm">
                                            <input id="uploadpic" placeholder="UPLOAD PROFILE PHOTO" name="logo" type="file" class="uploadicon" required>
                                        </div>
                                        <div class="text-center">
                                            <div class="gift-head">
                                                <img class="img-responsive" src="<?php echo base_url("webassets");?>/img/gift.png" style="margin:0 auto -2px;">
                                            </div>

                                            <div class="gift-head1">
                                                <p>WOULD YOU LIKE REDEEMABLE POINTS?</p>

                                            </div>
                                            <div class="gift-body">
                                                <div class="gift-body1">
                                                    <p>Each time you use our hashtag (#BPFT) on</p>
                                                    <p>Facebook,Twitter or Instagram you earn points</p>
                                                    <p>that are redeemable for cool prizes.</p>
                                                </div>
                                                <div class="gift-body2">
                                                    <p>You can keep a track of the points you earn on</p>
                                                    <p>your profile page.</p>
                                                </div>

                                                <div class="gift-body3">
                                                    <p>YES. CONNECT MY</p>
                                                    <p>SOCIAL MEDIA ACCOUNTS
                                                </div>
                                                <div class="reg-social">
                                                    <i class="fa fa-facebook"></i>
                                                    <input value="" name="facebookid" placeholder="Facebook Id" type="text" class="emailicon"><br>
                                                    <i class="fa fa-instagram"></i>
                                                    <input value="" name="instagram" placeholder="Instagram Id" type="text" class="emailicon"><br>
                                                    <i class="fa fa-twitter"></i>
                                                    <input value="" name="twitter" placeholder="Twitter Id" type="text" class="emailicon">


                                                </div>
                                                <div class="gift-body4">
                                                    <p>No sneaky business promise. We only take the information</p>
                                                    <p>needed to assign you your redeemable points.</p>

                                                </div>
                                            </div>
                                            
                                                <div class="input-content text-center pad-input">
                                                   <p style="margin: 0px;color: #A9A9A9;">Password must have a minimum of 6 characters</p>
                                                    <input value="" id="password" name="password" placeholder="PASSWORD *" type="password" class="lockicon" required pattern=".{6,}" title="Minimum 6 characters">
                                                    <div>
                                                       <div>
                                                
                                                        <input value="" id="conformPassword" name="confirmpassword" placeholder="CONFIRM PASSWORD *" type="password" class="lockicon" pattern=".{6,}"  title="Password doesnt match">
                                                    </div>
                                                </div>
                                            </div>


                                            <!--
                                                <div id="captcha-wrap">
        <div class="captcha-box">
            <img src="get_captcha.php" alt="" id="captcha" />
        </div>
        <div class="text-box">
            <label>Type the two words:</label>
            <input name="captcha-code" type="text" id="captcha-code">
        </div>
        <div class="captcha-action">
            <img src="refresh.jpg"  alt="" id="captcha-refresh" />
        </div>
    </div> 
-->


                                            <div class="reg-policy" style="padding-top:10px">
                                                <p>By registering, you agree to our <a href="#">Privacy Policy</a> 
                                                </p>
                                                <p>and <a href="<?php echo site_url("website/termscondition "); ?>">Terms &amp; Conditions</a>
                                                </p>
                                            </div>
                                            <div class="pad-pad">
                                                <div class="content-button2 text-center">
                                                    <a>
                                                        <button type="submit" class="text-center">CREATE AN ACCOUNT</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reg-policy pad-btm">
                                                <p>Already have an account? <a href="<?php echo site_url("website/login "); ?>">Login</a>
                                                </p>
                                            </div>
                                    </form>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>


                        <!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // refresh captcha
        $('img#captcha-refresh').click(function() {

            change_captcha();
        });

        function change_captcha() {
            document.getElementById('captcha').src = "get_captcha.php?rnd=" + Math.random();
        }
    });
</script>