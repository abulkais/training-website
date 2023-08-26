<?php
include('all-course-page-php-code.php');

?>
<style>
    .hidden {
        display: none;
    }

    .country-form-design1 {
        border-radius: 4px;
        display: flex;
        border: 1px solid #000;
        height: 45px !important;
        padding: 10px;
        box-shadow: none;
        border: 1px solid #000 !important;
    }
</style>
<div style="position:sticky!important; top:90px!important; ">

    <div class="course_frm">
        <h4 style="color:#2a56ad; text-align:center;">Request Information</h4>
        <hr>
        <form action="mail" method="post" id="submitform">
            <input type="text" class="hidden" name="con_title">
            <input type="hidden" name="comingfrom" value="Request information <?php echo $data . $data1; ?> ">
            <div class="form-con">
                <div class="did-floating-label-content">
                    <input type="text" placeholder=" " class="did-floating-input  course_form_design" name="name" pattern="[A-Z\sa-z]{3,20}" required>
                    <label class="did-floating-label" style="color: #000; font-weight:500;">Name*</label>
                </div>
            </div>

            <div class="form-con">
                <div class="did-floating-label-content">
                    <input type="email" placeholder=" " class="did-floating-input  course_form_design" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    <label class="did-floating-label" style="color: #000; font-weight:500;">Email*</label>
                </div>
            </div>

            <div class="country-form-design1">
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
                    <option value="+886 (TW) "> +886</option>
                    <option value="+90 (TR) "> +90</option>
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
                <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10" minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
            </div>
            <p></p>
            <!-- </div> -->


            <div class="form-group">
                <div class="radio-padding">
                    <label class="radio-content">Inquiry for : </label>
                    <input type="radio" name="taining" value="Myself" style="width:15px; height:15px;" class="ml-2" checked>
                    <label class="radio-content">Myself</label>
                    <input name="taining" value="My Company" type="radio" style="width:15px; height:15px;" class="ml-2">
                    <label class="radio-content">My Company</label>
                </div>
            </div>

            <div class="form-con">
                <div class="floating-label">
                    <textarea class="floating-input floating-textarea course_form_design" style="height:100%!important;" name="query" placeholder=" "></textarea>
                    <label class="labelplace" style="color: #000; font-weight:500;"> Query (Optional)</label>
                </div>
            </div>

            <div class="form-group mt-2">
                <input id="buttonhide" type="submit" name="conatct_form_submit" class="curriculum_box_btn w-100" value="Submit">
                <div id="buttonshow" class="curriculum_box_btn w-100" style="display: none; text-align:center; cursor:none;" disabled>Please wait</div>
            </div>

            <p style="font-size:10px;"> By clicking "Submit" you agree to our <a href="https://kvch.in/terms-use" style="color:#cc0f0f;"> terms &amp; conditions</a> and our
                <a href="https://kvch.in/privacy-policy" style="color:#cc0f0f">privacy policy.</a>
            </p>
        </form>
    </div>


    <!-- number box -->
    <div class="course_number_box mt-4">

        <div class="number_box">
            <span>Indian Nationals (For Voice Call)</span>
            <h4> <img src="assets-new/img/icons/icon2.png" alt="Indian Nationals (For Voice Call)"> +91-9510-860-860</h4>
        </div>

        <hr>
        <div class="number_box">
            <span>International Nationals (For Voice Call)</span>
            <h4> <img src="assets-new/img/icons/icon1.png" alt="International Nationals (For Voice Call)"> +1-844-44-55-767</h4>
        </div>
        <hr>

        <div class="number_box">
            <span>Whatsapp (For call & chat)</span>
            <h4> <img src="assets-new/img/icons/icon3.png" alt="Whatsapp"> +91-9654-861-762</h4>
        </div>

    </div>

</div>