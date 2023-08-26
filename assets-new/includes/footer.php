<style>
    .fixed_footer {
        position: sticky;
        bottom: 0px;
        padding-bottom: 0px;
        z-index: 40;
    }

    @media only screen and (max-width: 800px) {
        .fixed_footer {
            display: none !important;
        }
    }

    .fixed_footer_div {
        padding: 0px 5px 0px;
        width: 100%;
        background-color: #000;
    }

    .fixed_footer button {
        padding: 5px 20px;
        background-color: transparent;
        border: 1px solid #000;
    }

    @media only screen and (max-width: 1024px) {
        .fixed_footer button {
            padding: 5px 0px;
        }
    }

    .fixed_footer span a {
        color: #fff;
        font-size: 15px;
        font-weight: 600;
    }

    .fixed_footer img {
        color: #fff;
        font-size: 15px;
        font-weight: 600;
    }

    .form_design_place {
        color: #000;
        border: 1px solid #a6a6a6 !important;
    }

    .form_design_place::placeholder {
        color: #000 !important;
        font-size: 15px;
        font-weight: 500 !important;
    }

    .modal_form_styling {
        box-shadow: inset 0 0 3px 0 rgb(0 0 0 / 30%);
        border: 1px solid #cbd6e2;
        color: #444444;
        height: 45px;

    }

    .modal_form_styling:focus {
        /* border:2px solid #cbd6e2!important; */
        outline: none;
        box-shadow: inset 0 0 3px 0 rgb(0 0 0 / 60%) !important;
    }

    .modal_form_styling::placeholder {
        color: #a6a6a6 !important;
        font-size: 16px !important;
    }

    .course_number_field {
        width: 448px !important;
    }

    @media all and (max-width: 991px) {
        .course_number_field {
            width: 300px !important;
        }
    }


    .course_number_field1 {
        width: 318px;
    }

    @media all and (max-width: 991px) {
        .course_number_field1 {
            width: 290px !important;
        }
    }


    .course_modal_close {
        color: #525f78;
        font-weight: normal;
        opacity: 1;
        margin-top: -19px !important;
        padding: 0 !important;
        /* margin: 0!important; */
        border: none;
        background: #fff;
        font-size: 40px;
    }

    .course_modal_title {
        font-weight: 600;
        font-size: 20px;
        color: #525f78;
    }

    .course_modal_title img {
        width: 35px;
        height: auto;
        margin-right: 7px;
        /* margin-top: -10px; */
    }

    .course_modal_btn {
        font-weight: 600;
        cursor: pointer;
        padding: 10px 18px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 8px 3px #b1b1b19e;
        background: linear-gradient(90deg, #f2b627, #fd904f);
        color: #fff;
    }

    .country-form-design {
        border-radius: 4px;
        display: flex;

        height: 45px !important;
        padding: 10px;
        box-shadow: inset 0 0 3px 0 rgb(0 0 0 / 30%);
    }

    .country-form-design::placeholder {
        color: #000 !important;
    }
</style>

<section class="support-section support-section2">
    <div class="container">
        <div class="row mt-2">

            <div class="col-sm-6">
                <div class="support-text">
                    <h5>For queries, feedback & assistance</h5>
                    <div class="support-title">
                        <h2><span>KVCH</span> Learner <span class="red">Support</span></h2>
                        <div class="time">(9 AM - 7 PM)</div>
                    </div>
                    <ul class="clearfix">
                        <li>
                            <span>For Indian Nationals</span>
                            <a href="tel:919510860860"><img src="assets-new/img/india.webp" alt="For Indian Nationals"> +91.9510.860.860</a>
                        </li>
                        <li>
                            <span>For International Nationals</span>
                            <a href="tel:18444455767 "><img src="assets-new/img/international.webp" class="img-fluid" alt="For International Nationals"> +1.844.44.55.767 </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 hidden-sm">
                <div class="support-img mob-h"><img src="assets-new/img/footer-banner-img.webp" class="img-fluid" alt="kvch support" style="width:100%; height:auto;"></div>
            </div>

        </div>
    </div>
</section>

<footer class="page-footer" style="margin: 0px;">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-column">
                        <div class="footer-logo">
                            <a href="index"><img src="assets-new/img/footer-logo.webp" alt=""></a>
                        </div>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:training@kvch.in">training@kvch.in</a></p>
                        <p><i class="fa fa-headphones" aria-hidden="true"></i> <a href="tel:+91 9510 860 860"> +91.9510.860.860</a></p>
                        <div class="sponsor-images">
                            <img src="assets-new/img/sponsor-images-1.webp" class="img-fluid" alt="">
                            <img src="assets-new/img/sponsor-images-2.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-column quick-link">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="index">Training Solutions </a></li>
                            <li><a href="corporate-training">For Your Organization</a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="industrial-internship">Industrial Internship</a></li>
                            <li><a href="working-professionals">Training for Professionals</a></li>
                            <li><a href="corporate-training">Corporate Training</a></li>
                            <li><a href="in-house-training">In-House Training</a></li>
                            <li><a href="fly-me-a-trainer">Fly Me a Trainer</a></li>
                            <li><a href="study-abroad">Study Abroad</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-column">
                        <h4>Get the latest Updates</h4>
                        <p>Get the best learning and development news, research and resources direct to your inbox. </p>
                        <div class="newsletter">
                            <form method="post" action="mail" id="requestcallbackfooter2">
                                <input type="email" placeholder="Enter Email address*" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="off">
                                <input id="requestcallbackhide2" type="submit" name="subscribe_mail" value="" class="submit">
                                <div id="requestcallbackshow2" type="submit" style="display:none; text-align: center; cursor: not-allowed! important; border-radius: 100px;  background: #ca0f0f; font-size: 20px; padding: 6px;" value="" class="submit">
                                    <i class="fa fa-spinner fa-spin fa-lg"></i>
                                </div>
                            </form>

                            <script>
                                $('#requestcallbackfooter2').submit(function() {
                                    $('#requestcallbackhide2').hide();
                                    $('#requestcallbackshow2').show();
                                    // hit multiple enter button  prevent
                                    $(window).keydown(function(event) {
                                        if (event.keyCode == 13) {
                                            event.preventDefault();
                                            return false;
                                        }
                                    });
                                });
                            </script>
                        </div>
                        <div class="payment">
                            <p>Secure Payment By</p>
                            <a href="quick-pay"><img src="assets-new/img/payment.webp" class="img-fluid" alt="payment"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <p>KVCH® is a registered trademark of the KV Computer Home Pvt. Ltd.</p>
                <p>KVCH Pvt. Ltd. is rated 4.9 stars by google.com based on 946 reviews.</p>
            </div>
            <div class="global-presence">
                <h4>Global presence</h4>
                <ul class="clearfix">
                    <li>
                        <a href="https://kvch.in/nigeria/"><img src="assets-new/img/nigeria.webp" class="img-fluid" alt="Nigeria"> <span>Nigeria</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets-new/img/kenya.webp" class="img-fluid" alt="Kenya"> <span>Kenya</span></a>
                    </li>

                    <li>
                        <a href="https://kvch.in/dubai/"><img src="assets-new/img/dubai-flag.webp" class="img-fluid" alt="Dubai"> <span>Dubai</span></a>
                    </li>

                    <li>
                        <a href="javascript:void(0)"><img src="assets-new/img/botswana-flag.webp" class="img-fluid" alt="botswana"> <span> Botswana</span></a>
                    </li>


                    <li>
                        <a href="javascript:void(0)"><img src="assets-new/img/tanzania-flag.webp" class="img-fluid" alt="Tanzania"> <span> Tanzania</span></a>
                    </li>

                    <li>
                        <a href="javascript:void(0)"><img src="assets-new/img/rwanda.webp" class="img-fluid" alt="Rwanda"> <span>Rwanda</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets-new/img/Brazil.webp" alt="Brazil"> <span> Brazil</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets-new/img/argentina.webp" class="img-fluid" alt="Argentina"> <span> Argentina</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="margin-bottom:0%;">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="social-menu">
                    <ul class="clearfix">
                        <li><a href="https://www.facebook.com/KVCHGLOBAL/" target="blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>

                        <li><a href="https://twitter.com/kvchnoida" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>

                        <li><a href="https://www.instagram.com/kvchacademy/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>

                        <li><a href="https://www.linkedin.com/company/kvchglobal/" target="blank"><i class="fa fa-linkedin" target="blank" aria-hidden="true"></i> Linkedin</a></li>

                    </ul>
                </div>
                <div class="secondary-menu">
                    <ul class="clearfix">
                        <li><a href="privacy-policy">Privacy Policy </a></li>
                        <li><a href="terms-use">Terms & Condition</a></li>
                    </ul>
                </div>
                <div class="copyright">Copyright &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> KVCH, All Rights Reserved</div>
            </div>
        </div>
    </div>
</footer>

<style>
    .mobile-bottom-fixed {
        display: inline;
        position: fixed;
        bottom: 15px;
        width: 100%;
        height: 30px;
        z-index: 9
    }

    @media only screen and (max-width: 4000px) {
        .mobile-bottom-fixed {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        .mobile-bottom-fixed {
            display: flex;
            background: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0px;
            width: 100%;
            height: auto;
            z-index: 1000;
            box-shadow: 0 0 12px 0 rgb(0 0 0 / 3%);
        }

        .mobile-bottom-fixed img {
            border-radius: 4px;
            display: block;
            margin-bottom: 5px;

        }

        .course_modal_title {
            padding: 10px 0px;
        }

        .course_modal_title img {
            display: none;
        }


    }
</style>
<section class="mobile-bottom-fixed">
    <div class="container">
        <div class="row">
            <a href="tel:+91 9510860860"><img src="assets-new/img/icons/call-us.webp" style="width:100%; height:33px;" alt=""></a>
        </div>
    </div>

</section>
<div class="modal" id="request_callback1">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">
            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title">Get a Call Back </h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>


            <div class="modal-body" style="padding:30px;" >
                <form action="mail" method="post" onsubmit="return formvalidatec11();">
                    <input type="text" class="hidden" name="prefered_title">
                    <input type="hidden" name="comingfrom" value="Request Callback">
                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" " required pattern=[A-Z\sa-z]{3,20}>
                            <label class="did-floating-label" style="color: #000;">Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" minlength="3" maxlength="8" type="text" name="Prefer_time" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000; font-size:14px;">Preferred time to call (HH:MM)*</label>
                        </div>

                    </div>

                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">

                            <option value="+1 (US) ">US +1</option>
                            <option value="+20 (EG) ">EG +20</option>
                            <option value="+212 (MA) ">MA +212</option>
                            <option value="+213 (DZ) ">DZ +213</option>
                            <option value="+216 (TN) ">TN +216</option>
                            <option value="+218 (LY) ">LY +218</option>
                            <option value="+220 (GM) ">GM +220</option>
                            <option value="+221 (SN) ">SN +221</option>
                            <option value="+222 (MR) ">MR +222</option>
                            <option value="+223 (ML) ">ML +223</option>
                            <option value="+224 (GN) ">GN +224</option>
                            <option value="+225 (CI) ">CI +225</option>
                            <option value="+226 (BF) ">BF +226</option>
                            <option value="+227 (NE) ">NE +227</option>
                            <option value="+228 (TG) ">TG +228</option>
                            <option value="+229 (BJ) ">BJ +229</option>
                            <option value="+230 (MU) ">MU +230</option>
                            <option value="+231 (LR) ">LR +231</option>
                            <option value="+232 (SL) ">SL +232</option>
                            <option value="+233 (GH) ">GH +233</option>
                            <option value="+234 (NG) ">NG +234</option>
                            <option value="+235 (TD) ">TD +235</option>
                            <option value="+236 (CF) ">CF +236</option>
                            <option value="+237 (CM) ">CM +237</option>
                            <option value="+238 (CV) ">CV +238</option>
                            <option value="+239 (ST) ">ST +239</option>
                            <option value="+240 (GQ) ">GQ +240</option>
                            <option value="+241 (GA) ">GA +241</option>
                            <option value="+242 (CG) ">CG +242</option>
                            <option value="+243 (ZR) ">ZR +243</option>
                            <option value="+244 (AO) ">AO +244</option>
                            <option value="+245 (GW) ">GW +245</option>
                            <option value="+246 (BB) ">BB +246</option>
                            <option value="+248 (SC) ">SC +248</option>
                            <option value="+249 (SD) ">SD +249</option>
                            <option value="+250 (RW) ">RW +250</option>
                            <option value="+251 (ET) ">ET +251</option>
                            <option value="+252 (SO) ">SO +252</option>
                            <option value="+253 (DJ) ">DJ +253</option>
                            <option value="+254 (KE) ">KE +254</option>
                            <option value="+255 (TZ) ">TZ +255</option>
                            <option value="+256 (UG) ">UG +256</option>
                            <option value="+257 (BI) ">BI +257</option>
                            <option value="+258 (MZ) ">MZ +258</option>
                            <option value="+260 (ZM) ">ZM +260</option>
                            <option value="+261 (MG) ">MG +261</option>
                            <option value="+263 (ZW) ">ZW +263</option>
                            <option value="+264 (NA) ">NA +264</option>
                            <option value="+265 (MW) ">MW +265</option>
                            <option value="+266 (LS) ">LS +266</option>
                            <option value="+267 (BW) ">BW +267</option>
                            <option value="+268 (SZ) ">SZ +268</option>
                            <option value="+269 (KM) ">KM +269</option>
                            <option value="+27 (ZA) ">ZA +27</option>
                            <option value="+290 (SH) ">SH +290</option>
                            <option value="+299 (GL) ">GL +299</option>
                            <option value="+30 (GR) ">GR +30</option>
                            <option value="+31 (NL) ">NL +31</option>
                            <option value="+32 (BE) ">BE +32</option>
                            <option value="+33 (FR) ">FR +33</option>
                            <option value="+34 (ES) ">ES +34</option>
                            <option value="+345 (KY) ">KY +345</option>
                            <option value="+351 (PT) ">PT +351</option>
                            <option value="+352 (LU) ">LU +352</option>
                            <option value="+353 (IE) ">IE +353</option>
                            <option value="+354 (IS) ">IS +354</option>
                            <option value="+355 (AL) ">AL +355</option>
                            <option value="+356 (MT) ">MT +356</option>
                            <option value="+357 (CY) ">CY +357</option>
                            <option value="+358 (FI) ">FI +358</option>
                            <option value="+359 (BG) ">BG +359</option>
                            <option value="+36 (HU) ">HU +36</option>
                            <option value="+370 (LT) ">LT +370</option>
                            <option value="+371 (LV) ">LV +371</option>
                            <option value="+372 (EE) ">EE +372</option>
                            <option value="+373 (MD) ">MD +373</option>
                            <option value="+374 (AM) ">AM +374</option>
                            <option value="+375 (BY) ">BY +375</option>
                            <option value="+376 (AD) ">AD +376</option>
                            <option value="+377 (MC) ">MC +377</option>
                            <option value="+378 (SM) ">SM +378</option>
                            <option value="+380 (UA) ">UA +380</option>
                            <option value="+381 (RS) ">RS +381</option>
                            <option value="+382 (ME) ">ME +382</option>
                            <option value="+385 (HR) ">HR +385</option>
                            <option value="+386 (SI) ">SI +386</option>
                            <option value="+387 (BA) ">BA +387</option>
                            <option value="+389 (MK) ">MK +389</option>
                            <option value="+39 (IT) ">IT +39</option>
                            <option value="+40 (RO) ">RO +40</option>
                            <option value="+41 (CH) ">CH +41</option>
                            <option value="+420 (CZ) ">CZ +420</option>
                            <option value="+421 (SK) ">SK +421</option>
                            <option value="+423 (LI) ">LI +423</option>
                            <option value="+43 (AT) ">AT +43</option>
                            <option value="+44 (GB) ">GB +44</option>
                            <option value="+441 (BM) ">BM +441</option>
                            <option value="+45 (DK) ">DK +45</option>
                            <option value="+46 (SE) ">SE +46</option>
                            <option value="+47 (NO) ">NO +47</option>
                            <option value="+473 (GD) ">GD +473</option>
                            <option value="+48 (PL) ">PL +48</option>
                            <option value="+49 (DE) ">DE +49</option>
                            <option value="+501 (BZ) ">BZ +501</option>
                            <option value="+502 (GT) ">GT +502</option>
                            <option value="+503 (SV) ">SV +503</option>
                            <option value="+504 (HN) ">HN +504</option>
                            <option value="+505 (NI) ">NI +505</option>
                            <option value="+506 (CR) ">CR +506</option>
                            <option value="+507 (PA) ">PA +507</option>
                            <option value="+509 (HT) ">HT +509</option>
                            <option value="+51 (PE) ">PE +51</option>
                            <option value="+52 (MX) ">MX +52</option>
                            <option value="+53 (CU) ">CU +53</option>
                            <option value="+54 (AR) ">AR +54</option>
                            <option value="+55 (BR) ">BR +55</option>
                            <option value="+56 (CL) ">CL +56</option>
                            <option value="+57 (CO) ">CO +57</option>
                            <option value="+58 (VE) ">VE +58</option>
                            <option value="+591 (BO) ">BO +591</option>
                            <option value="+592 (GY) ">GY +592</option>
                            <option value="+593 (EC) ">EC +593</option>
                            <option value="+595 (PY) ">PY +595</option>
                            <option value="+597 (SR) ">SR +597</option>
                            <option value="+598 (UY) ">UY +598</option>
                            <option value="+60 (MY) ">MY +60</option>
                            <option value="+61 (AU) ">AU +61</option>
                            <option value="+62 (ID) ">ID +62</option>
                            <option value="+63 (PH) ">PH +63</option>
                            <option value="+64 (NZ) ">NZ +64</option>
                            <option value="+65 (SG) ">SG +65</option>
                            <option value="+66 (TH) ">TH +66</option>
                            <option value="+664 (MS) ">MS +664</option>
                            <option value="+673 (BN) ">BN +673</option>
                            <option value="+674 (NR) ">NR +674</option>
                            <option value="+675 (PG) ">PG +675</option>
                            <option value="+676 (TO) ">TO +676</option>
                            <option value="+677 (SB) ">SB +677</option>
                            <option value="+678 (VU) ">VU +678</option>
                            <option value="+679 (FJ) ">FJ +679</option>
                            <option value="+685 (WS) ">WS +685</option>
                            <option value="+686 (KI) ">KI +686</option>
                            <option value="+691 (FM) ">FM +691</option>
                            <option value="+7 (RU) ">RU +7</option>
                            <option value="+758 (LC) ">LC +758</option>
                            <option value="+767 (DM) ">DM +767</option>
                            <option value="+784 (VC) ">VC +784</option>
                            <option value="+809 (DO) ">DO +809</option>
                            <option value="+81 (JP) ">JP +81</option>
                            <option value="+82 (KR) ">KR +82</option>
                            <option value="+84 (VN) ">VN +84</option>
                            <option value="+850 (KP) ">KP +850</option>
                            <option value="+852 (HK) ">HK +852</option>
                            <option value="+853 (MO) ">MO +853</option>
                            <option value="+855 (KH) ">KH +855</option>
                            <option value="+856 (LA) ">LA +856</option>
                            <option value="+86 (CN) ">CN +86</option>
                            <option value="+868 (TT) ">TT +868</option>
                            <option value="+869 (KN) ">KN +869</option>
                            <option value="+876 (JM) ">JM +876</option>
                            <option value="+880 (BD) ">BD +880</option>
                            <option value="+880 (BD) ">BD +880</option>
                            <option value="+886 (TW) ">TW +886</option>
                            <option value="+91 (IN) " selected="selected"> IN +91</option>
                            <option value="+92 (PK) ">PK +92</option>
                            <option value="+93 (AF) ">AF +93</option>
                            <option value="+94 (LK) ">LK +94</option>
                            <option value="+95 (MM) ">MM +95</option>
                            <option value="+960 (MV) ">MV +960</option>
                            <option value="+961 (LB) ">LB +961</option>
                            <option value="+962 (JO) ">JO +962</option>
                            <option value="+963 (SY) ">SY +963</option>
                            <option value="+964 (IQ) ">IQ +964</option>
                            <option value="+965 (KW) ">KW +965</option>
                            <option value="+966 (SA) ">SA +966</option>
                            <option value="+967 (YE) ">YE +967</option>
                            <option value="+968 (OM) ">OM +968</option>
                            <option value="+971 (AE) ">AE +971</option>
                            <option value="+972 (IL) ">IL +972</option>
                            <option value="+973 (BH) ">BH +973</option>
                            <option value="+974 (QA) ">QA +974</option>
                            <option value="+975 (BT) ">BT +975</option>
                            <option value="+976 (MN) ">MN +976</option>
                            <option value="+977 (NP) ">NP +977</option>
                            <option value="+98 (IR) ">IR +98</option>
                            <option value="+993 (TM) ">TM +993</option>
                            <option value="+994 (AZ) ">AZ +994</option>
                            <option value="+995 (GE) ">GE +995</option>
                            <option value="+996 (KG) ">KG +996</option>
                            <option value="+998 (UZ) ">UZ +998</option>
                        </select>
                        <input name="number" placeholder="Phone Number" style="border:none; height: auto; color: #000;" maxlength="10" minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">

                    </div>

                    <p></p>

                    <center>
                        <div id="captha" class="g-recaptcha" data-sitekey="6Ldii1siAAAAACObLfaWSS0DVCYZdeXI4YdkdBKw" data-callback="verifyCaptcha">
                        </div>
                    </center>

                    <p id="captchamandatoryc11" style="text-align:center; color:red; padding: 10px 0px; font-size: 15px;"></p>

                    <div class="form-conn mt-1">
                        <input  type="submit" class="course_modal_btn w-100 formbuttonhide" name="footer_requestcallback" value="Submit">
                        <div  class="course_modal_btn w-100 formbuttonshow" style="display:none; text-align:center; cursor: not-allowed! important; opacity: 0.4;" disabled>Please wait</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $('#requestcallbackfooter').submit(function() {
        $('#requestcallbackhide').hide();
        $('#requestcallbackshow').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>



<script type="text/javascript" src="assets-new/js/intlelInput-jquery.min-country-no-2nd.js"></script>


<section class="fixed_footer footer-nav">
    <div class="fixed_footer_div">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <button>
                        <img src="assets-new/img/icons/call-gif.gif" class="mr-1">
                        <span> <b style="font-weight:normal; color:#fff"> Call us on:</b>
                            <a href="tel:+91 9510860860"><img src="assets-new/img/india.webp" class="ml-1" alt=""> +91-9510-860-860</a>
                            <a href="tel:+1 8444455767"> <img src="assets-new/img/international.webp" class="ml-2" alt=""> +1-844-44-55-767</span></a>
                    </button>
                </div>

                <div class="col-sm-3">
                    <button>
                        <span> <a href="https://wa.me/919654861762?text=Hii kvch" target="_blank" style="text-align:center;">
                                <img src="assets-new/img/wa.webp" alt=""> +91 9654-861-762
                            </a>
                        </span>
                    </button>
                </div>


                <div class="col-sm-3">
                    <button data-toggle="modal" data-target="#request_callback1">
                        <span style="color:#fff;"><img src="assets-new/img/icons/reqst-call-back-gif.gif" alt="" class="mr-1"> <b class="mt-5">Request a Callback</b></span>
                    </button>
                </div>



            </div>

        </div>
    </div>
</section>
<script>
    $(window).scroll(function(event) {
        function footer() {
            var scroll = $(window).scrollTop();
            if (scroll > 400) {
                $(".footer-nav").fadeIn("slow").addClass("show");
            } else {
                $(".footer-nav").fadeOut("slow").removeClass("show");
            }

            clearTimeout($.data(this, 'scrollTimer'));
            $.data(this, 'scrollTimer', setTimeout(function() {
                if ($('.footer-nav').is(':hover')) {
                    footer();
                } else {
                    $(".footer-nav").fadeOut("slow");
                }
            }, 4000));
        }
        footer();
    });
</script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim || (function(d, s) {
        var z = $zopim = function(c) {
                z._.push(c)
            },
            $ = z.s =
            d.createElement(s),
            e = d.getElementsByTagName(s)[0];
        z.set = function(o) {
            z.set.
            _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "https://v2.zopim.com/?4pkaL7DsKn4v0g7nXt0wWhTNH3FA8b86";
        z.t = +new Date;
        $.

        type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>
<!--End of Zendesk Chat Script-->
</body>

</html>