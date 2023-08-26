<?php
include('all-course-page-php-code.php');
?>


<style>
    .hidden {
        display: none !important;
    }

    .country-form-design {
        border-radius: 4px;
        display: flex;
        border: 1px solid #000;
        height: 45px!important;
        padding: 10px;
        box-shadow: inset 0 0 3px 0 rgb(0 0 0 / 30%)!important;
        border:none;
    }
</style>
<!-- Cantfind batch -->
<div class="modal" id="need_customized">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0;">
            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/date.webp" alt="Date">
                        Tell Us Your Preferred Starting Date</h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>

            <div class="modal-body" style="padding:30px;">
                <form action="mail" method="post" id="submitformcantf">
                    <input type="text" class="hidden" name="coursedate_title">
                    <input type="hidden" name="comingfrom" value="Can’t find a BATCH <?php echo $data . $data1; ?>">
                    <div class="form-group">
                        <input class="form-control modal_form_styling" type="date" name="date" minlength="01-01-2022"
                            placeholder=" " required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control modal_form_styling" name="email" placeholder="Email*"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>

                    <!-- <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="tel" name="number" id="request_bacth" minlength="10" maxlength="16"
                                pattern="^[1-9]\d*$" onkeypress="return number_e(event)"
                                class="did-floating-input course_number_field modal_form_styling"
                                placeholder="Mobile Number*" required>
                        </div>
                    </div> -->

                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    


                    <div class=" form-conn mt-4">
                        <input id="buttonhidecantf" name="coursedate" type="submit" class="course_modal_btn w-100"
                            value="Submit Now">
                        <div id="buttonshowcantf" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- enquire Now -->
<div class="modal" id="enquir_now">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/started.webp"
                            alt="Started">I'm interested in the program</h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>


            <div class="modal-body" style="padding:30px;">
                <form action="mail" method="post" id="submitformenqnow">
                    <input type="text" class="hidden" name="nam_mail_no_query_title">
                    <input type="hidden" name="comingfrom" value="Enquire Now <?php echo $data . $data1; ?>">

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" "
                                pattern="[A-Z\sa-z]{3,20}" required>
                            <label class="did-floating-label" style="color: #000;">Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="email" name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000;">Email*</label>
                        </div>
                    </div>

                    <!-- <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="tel" name="number" id="enquire_now" minlength="10" maxlength="16"
                                onkeypress="return number_e(event)"
                                class="did-floating-input course_number_field modal_form_styling"
                                placeholder="Mobile Number*" pattern="^[1-9]\d*$" required>
                        </div>
                    </div> -->

                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    <br>

                    <div class="form-con">
                        <div class="floating-label">
                            <textarea class="floating-input floating-textarea modal_form_styling" style="height:auto;"
                                rows="3" name="query" placeholder=" "></textarea>
                            <label class="labelplace" style="color: #000;"> Query (Optional)</label>
                        </div>
                    </div>


                    <div class=" form-conn mt-2">
                        <input id="buttonhideenqnow" type="submit" class="course_modal_btn w-100" name="all_form_submit"
                            value="Submit">
                        <div id="buttonshowenqnow" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Apply Now -->
<div class="modal" id="Apply_now">

    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/apply_icon.webp"
                            alt="Apply Now"> Apply Now</h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>


            <!-- Modal body -->
            <div class="modal-body" style="padding:30px;">
                <form action="mail" method="post" id="submitformapply">
                    <input type="text" class="hidden" name="nam_mail_no_query_title">
                    <input type="hidden" name="comingfrom" value="Apply Now  <?php echo $data . $data1; ?>">


                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" "
                                pattern="[A-Z\sa-z]{3,20}" required>
                            <label class="did-floating-label" style="color: #000;">Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="email" name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000;">Email*</label>
                        </div>
                    </div>
                    <!-- <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="tel" name="number" id="applynow" minlength="10" maxlength="16" onkeypress="return number_e(event)" class="did-floating-input course_number_field modal_form_styling" placeholder="Mobile Number*" pattern="^[1-9]\d*$"  required>
                        </div>
                    </div> -->
                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel">
                    </div>
                    <br>

                    <div class="form-con">
                        <div class="floating-label">
                            <textarea class="floating-input floating-textarea modal_form_styling"
                                style="height:100%!important;" rows="3" name="query" placeholder=" "></textarea>
                            <label class="labelplace" style="color: #000;"> Query (Optional)</label>
                        </div>
                    </div>

                    <div class=" form-conn mt-2">
                        <input id="buttonhideapply" name="all_form_submit" type="submit" class="course_modal_btn w-100"
                            value="Apply Now">
                        <div id="buttonshowapply" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Download Brochure -->
<div class="modal" id="dnload_brochure">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/download_icon.webp"
                            alt="Download Brochure"> Download Brochure </h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="padding:30px;">
                <form action="mail" method="post" id="submitformdownloadb">
                    <input type="text" class="hidden" name="nam_mail_no_title">
                    <input type="hidden" name="comingfrom" value="Download Brochure <?php echo $data . $data1; ?>">
                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" "
                                pattern="[A-Z\sa-z]{3,20}" required>
                            <label class="did-floating-label" style="color: #000;">Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="email" name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000;">Email*</label>
                        </div>
                    </div>
                    <!-- <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="tel" name="number" id="download_brochure_c" minlength="10" maxlength="16"
                                onkeypress="return number_e(event)"
                                class="did-floating-input course_number_field modal_form_styling"
                                placeholder="Mobile Number*" pattern="^[1-9]\d*$" required>
                        </div>
                    </div> -->

                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    <br>


                    <div class=" form-conn mt-2">
                        <input id="buttonhidedownloadb" name="home-page-submit" type="submit"
                            class="course_modal_btn w-100" value="Download Now">
                        <div id="buttonshowdownloadb" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Get Certificate -->
<div class="modal" id="get_certification">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/certificate.webp"
                            alt="Download Sample Certificate"> Download Sample Certificate </h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="padding:30px;">

                <form action="mail" method="post" id="submitformcertfic">
                    <input type="text" class="hidden" name="nam_mail_no_title">
                    <input type="hidden" name="comingfrom"
                        value="Download Sample Certificate  <?php echo $data . $data1; ?>">

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" "
                                pattern="[A-Z\sa-z]{3,20}" required>
                            <label class="did-floating-label" style="color: #000;"
                                style="color: #000;">Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="email" name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000;">Email*</label>
                        </div>
                    </div>
                    <!-- <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="tel" name="number" id="get_dertificate" minlength="10" maxlength="16"
                                onkeypress="return number_e(event)"
                                class="did-floating-input course_number_field modal_form_styling"
                                placeholder="Mobile Number*" pattern="^[1-9]\d*$" required>
                        </div>
                    </div> -->

                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    <br>


                    <div class="form-conn mt-2">
                        <input id="buttonhidecertfic" name="home-page-submit" type="submit"
                            class="course_modal_btn w-100" value="Preview Certificate">
                        <div id="buttonshowcertfic" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- refer and earn -->
<div class="modal" id="get_refer">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/refer-and-earn.webp"
                            alt="Refer a Friend"> Refer a Friend and get Reward</h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="padding:30px;">

                <form action="mail" method="post" id="submitformreff">
                    <input type="text" class="hidden" name="nam_mail_no_query_title">
                    <input type="hidden" name="comingfrom" value="Refer a Friend  <?php echo $data . $data1; ?>">

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" "
                                pattern="[A-Z\sa-z]{3,20}" required>
                            <label class="did-floating-label" style="color: #000;">Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="email" name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000;">Email*</label>
                        </div>
                    </div>

                    <!-- <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="tel" name="number" id="get_refer_earn" minlength="10" maxlength="16"
                                onkeypress="return number_e(event)"
                                class="did-floating-input course_number_field modal_form_styling"
                                placeholder="Mobile Number*" pattern="^[1-9]\d*$" required>
                        </div>
                    </div> -->

                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    <br>




                    <div class="form-con">
                        <div class="floating-label">
                            <textarea class="floating-input floating-textarea modal_form_styling" style="height:100%;"
                                rows="3" name="query" placeholder=" "></textarea>
                            <label class="labelplace" style="color: #000;"> Query (Optional)</label>
                        </div>
                    </div>


                    <div class=" form-conn mt-2">
                        <input name="all_form_submit" id="buttonhidereff" type="submit" class="course_modal_btn w-100"
                            value="Get Reward">
                        <div id="buttonshowreff" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- download curriculum -->
<div class="modal" id="download_curriculum">
    <div class="modal-dialog1">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/download_icon.webp"
                            alt="Download Curriculum">Download Curriculum</h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="padding:30px;">

                <form action="mail" method="post" id="submitformdownc1">
                    <input type="text" class="hidden" name="nam_mail_no_title">
                    <input type="hidden" name="comingfrom" value="Download Curriculum  <?php echo $data . $data1; ?>">

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" "
                                pattern="[A-Z\sa-z]{3,20}" required>
                            <label class="did-floating-label" style="color: #000;">Name*</label>
                        </div>
                    </div>
                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input modal_form_styling" minlength="10" type="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" placeholder=" " required>
                            <label class="did-floating-label" style="color: #000;">Email*</label>
                        </div>
                    </div>


                    <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    <br>


                    <div class=" form-conn mt-2">
                        <input id="buttonhidedownc1" name="home-page-submit" type="submit" class="course_modal_btn w-100"
                            value="Download Crriculum">
                        <div id="buttonshowdownc1" class="course_modal_btn w-100"
                            style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>

                  
                </form>
            </div>
        </div>
    </div>
</div>


<!-- reviews slider -->
<div class="container">
    <h3 id="reviews" class="course_reviews_heading">
        <?php echo $data; ?> <b style="color:#cc0f0f;"> <span>Reviews</span> </b>
    </h3>
    <section class="testimonial_section">
        <div class="">

            <div class="testimonial_box">
                <div class="testimonial_container">
                    <div class="background_layer"></div>
                    <div class="layer_content">
                        <div class="testimonial_owlCarousel owl-carousel container">
                            <div class="testimonials">
                                <div class="testimonial_content">
                                    <div class="testimonial_caption">
                                        <h6>Arpna Rastogi</h6>

                                    </div>
                                    <p>Overall a very informative training session. Course content got well covered and
                                        also demonstrated the concept very well. Thanks for such an informative and
                                        concept-clearing training session.</p>
                                    <div style="color:orange">
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span
                                            style="color:#000; font-weight:bold;">5/5</span>

                                    </div>
                                </div>
                                <div class="images_box">
                                    <div class="testimonial_img">
                                        <img class="img-center" src="assets-new/img/reviews/girl1.webp" alt="reviews">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials">
                                <div class="testimonial_content">
                                    <div class="testimonial_caption">
                                        <h6>Aakash Upadhyay</h6>

                                    </div>
                                    <p>I had a great time doing this course and everyone involved in the KVCH has made
                                        it a great experience. I look forward to doing more courses with you guys in the
                                        future and have been recommending you to everyone I know. Thank you for all the
                                        assistance and feedback, it has been delightful and very gratifying.</p>

                                    <div style="color:orange">
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star-half"></span> <span
                                            style="color:#000; font-weight:bold;">4.9/5</span>
                                    </div>
                                </div>
                                <div class="images_box">
                                    <div class="testimonial_img">

                                        <img class="img-center" src="assets-new/img/reviews/boy1.webp" alt="reviews">

                                    </div>
                                </div>
                            </div>
                            <div class="testimonials">
                                <div class="testimonial_content">
                                    <div class="testimonial_caption">
                                        <h6>Ananya Sharma</h6>

                                    </div>
                                    <p>No difficulties for me, I found everything was just right. Always had good
                                        feedback after handing in assessments with some good advice attached. I
                                        personally think it's good the way it is. I really enjoyed doing this course, it
                                        gave me a world of knowledge and it was a fun learning experience!</p>

                                    <div style="color:orange">
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span
                                            style="color:#000; font-weight:bold;">5/5</span>
                                    </div>
                                </div>
                                <div class="images_box">
                                    <div class="testimonial_img">
                                        <img class="img-center" src="assets-new/img/reviews/girl2.webp" alt="reviews">
                                    </div>
                                </div>
                            </div>

                            <div class="testimonials">
                                <div class="testimonial_content">
                                    <div class="testimonial_caption">
                                        <h6>Mohan Kumar</h6>

                                    </div>
                                    <p>The trainer helped me to enhance my coding knowledge. He gave me good project
                                        support. Had awesome training experience, Got confidence and grip to do
                                        programming on my own.Excellent knowledge sharing session. Very interesting
                                        explanations. Enjoyed my time here.</p>

                                    <div style="color:orange">
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span
                                            style="color:#000; font-weight:bold;">5/5</span>
                                    </div>
                                </div>
                                <div class="images_box">
                                    <div class="testimonial_img">

                                        <img class="img-center" src="assets-new/img/reviews/boy2.webp" alt="reviews">

                                    </div>
                                </div>
                            </div>

                            <div class="testimonials">
                                <div class="testimonial_content">
                                    <div class="testimonial_caption">
                                        <h6>Arpita Singh</h6>
                                        <!-- <span>CEO, Axura</span> -->
                                    </div>
                                    <p>Excellent training and management . Quality is maintained throughout the courses
                                        and the teachers are available for continuous support . I would recommend this
                                        institution for someone who is looking for hands-on training on any of the
                                        latest technologies and looking to learn better . The staff is extremely
                                        supportive and cooperative.</p>

                                    <div style="color:orange">
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            style="color:#000; font-weight:bold;">4/5</span>
                                    </div>
                                </div>
                                <div class="images_box">
                                    <div class="testimonial_img">
                                        <img class="img-center" src="assets-new/img/reviews/girl3.webp" alt="reviews">

                                    </div>
                                </div>
                            </div>

                            <div class="testimonials">
                                <div class="testimonial_content">
                                    <div class="testimonial_caption">
                                        <h6>Zeessan Seikh</h6>

                                    </div>
                                    <p>I've never completed a course like this before (remote instruction) and I cannot
                                        express how great the instructor was and the overall content of the material. I
                                        would definitely recommend this to my co-workers as well as friends. I will be
                                        looking into taking more of these classes through KVCH in the near future. Thank
                                        you !</p>

                                    <div style="color:orange">
                                        <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                            class="fa fa-star"></span> <span
                                            style="color:#000; font-weight:bold;">5/5</span>
                                    </div>
                                </div>
                                <div class="images_box">
                                    <div class="testimonial_img">

                                        <img class="img-center" src="assets-new/img/reviews/boy.webp" alt="reviews">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<!-- refere and earn -->
<div id="refer-and-earn">
</div>
<section class="refer-section">
    <div class="container">
        <div class="row" style="align-items:center">
            <div class="col-sm-6"><img src="assets-new/img/refer-left-img.webp" alt="gift vouchers for training"
                    class="img-fluid" style="width: 100%; height:auto"></div>
            <div class="col-sm-6">
                <h2>Refer your friends/colleagues and receive gift vouchers upto INR 3000/-</h2>
                <p>Share your referral among people you know, and receive exciting gift vouchers in return.</p>
                <a href="javascript:void(0)" class="referring-btn" data-toggle="modal" data-target="#get_refer">Start
                    Referring </a>
            </div>
        </div>
    </div>
</section>


<!-- Inspiring upcoming form -->
<section class="form-content">
    <div class="container">
        <div class="form-content-wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-section">
                        <h2>Inspiring upcoming generation of learners</h2>
                        <p>We inspire companies and employees to work for betterment. Fill in your details to enquire
                            about our training program.</p>
                        <div class="contact-form">
                            <form action="mail" method="post" id="submitforminspiring">
                                <input type="text" class="hidden" name="nam_mail_no_training_title">
                                <input type="hidden" name="comingfrom"
                                    value=" Inspiring upcoming <?php echo $data . $data1; ?>">
                                <div class="form-col">
                                    <div class="did-floating-label-content">
                                        <input class="did-floating-input" type="text" name="name" placeholder=" "
                                            pattern="[A-Z\sa-z]{3,20}" required>
                                        <label class="did-floating-label">Name *</label>
                                    </div>

                                    <i class="input-icon"><img src="assets-new/img/user.webp" alt="name"> </i>
                                </div>
                                <div class="form-col">
                                    <div class="did-floating-label-content">
                                        <input class="did-floating-input" type="email" name="email" placeholder=" "
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                        <label class="did-floating-label">Email *</label>
                                    </div>

                                    <i class="input-icon">
                                        <img src="assets-new/img/mail.webp" alt="Mail"> </i>
                                </div>
                                <!-- <div class="form-col">
                                    <div class="did-floating-label-content">
                                        <input type="tel" class="did-floating-input" minlength="10" maxlength="16"
                                            name="number" onkeypress="return number_e(event)" placeholder=" "
                                            pattern="^[1-9]\d*$" required>
                                        <label class="did-floating-label">Phone *</label>
                                    </div>

                                    <i class="input-icon">
                                        <img src="assets-new/img/phn.webp" alt="Phone Number"> </i>
                                </div> -->

                    <div class="country-form-design" style="height:55px!important; border-radius:100px; box-shadow: none;">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input  name="number"  placeholder="Phone Number" style="border:none; height: auto; color: #000;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                            
                    </div>
                    <br>

                                <div class="form-col">
                                    <div class="did-floating-label-content">
                                        <select class="did-floating-select"
                                            onclick="this.setAttribute('value', this.value);"
                                            onchange="this.setAttribute('value', this.value);" value="" name="taining"
                                            required type="text">
                                            <option value=""></option>
                                            <option value="Personal Requirement">Personal Requirement </option>
                                            <option value="Organizational Requirement">Organizational Requirement
                                            </option>
                                            <option value="Technical Training">Technical Training</option>
                                            <option value="Soft Skills Training">Soft Skills Training</option>
                                            <option value="Language Skills Training">Language Skills Training</option>
                                        </select>
                                        <label class="did-floating-label">Type of Inquiry* </label>
                                    </div>

                                </div>


                                <div class="form-col2">
                                    <div class="btn" id="buttonhideinspiring"> <input href="javascript:void(0)"
                                            name="all_form_submit1" type="submit"
                                            style="background-color:transparent; border:none; color:#fff;  font-weight:bold;"
                                            value="Submit" data-submit-value="Please Wait"></div>
                                    <div id="buttonshowinspiring" class="btn"
                                        style=" display:none; text-align:center; cursor:none;" disabled>Please wait
                                    </div>
                                </div>

                                <p>By Submit, you agree to our <a href="terms-use.php" style="text-decoration: none;">
                                        terms and conditions</a> and our<a href="privacy-policy.php"
                                        style="text-decoration: none;"> privacy policy</a>.</p>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 last-sec-features">
                    <div class="content-section">
                        <h2 style="color:#fff;">What are the benefits of our training program?</h2>
                        <p style="color:#fff;">Features/Benefits.</p>
                        <ul>
                            <li>Live, interactive training by experts.
                            </li>
                            <li>Curriculum that focuses on the learner.
                            </li>
                            <li>Challenge-based, hands-on project work.
                            </li>
                            <li>Testing of Expertise in a Variety of Areas.
                            </li>
                            <li>Opportunities for team building.
                            </li>
                            <li>Cost- saving training.
                            </li>
                            <li>Convenient for your employees.
                            </li>
                            <li>Completely tailor-made curriculum.
                            </li>
                            <li>Post training support and query management.</li>
                            <li> Regular feedbacks to monitor training effectiveness.</li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- reviews js -->
<script>
    $('.testimonial_owlCarousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 10000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<style>
    .number-res {
        width: 370px !important;
    }


    .img-hide {
        display: visible;
    }

    @media only screen and (max-width:500px) {
        .number-res {
            width: 385px !important;
        }

        .img-hide {
            display: none;
        }
    }

    @media only screen and (max-width:400px) {
        .number-res {
            width: 315px !important;
        }



    }
</style>

<!--  load popup -->
<div class="modal" id="coursepage">
    <div class="modal-dialog2">
        <div class="modal-content" style="background-color:#fff; padding:0px;">

            <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                    <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/book1.webp"
                            alt="Request a Callback"> Interested in <b style="color: #f9753e;">
                            <?php echo $data ?>
                        </b> Course?</h5>
                    <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="padding:20px;">
                <div class="row">
                    <div class="col-sm-5 img-hide">
                        <img src="assets-new/img/icons/enrollnow.webp" style="width: 100%; height:auto;" alt="">
                    </div>
                    <div class="col-sm-7">
                        <form action="mail" method="post" id="submitformrequestfooter">
                            <input type="text" class="hidden" name="nam_mail_no_title">
                            <input type="hidden" name="comingfrom"
                                value="Interested in <?php echo $data . $data1; ?>  ">
                            <div class="form-con">
                                <div class="did-floating-label-content">
                                    <input class="did-floating-input modal_form_styling" type="text" name="name"
                                        placeholder=" " required>
                                    <label class="did-floating-label" style="color: #000;">Name*</label>
                                </div>
                            </div>

                            <div class="form-con">
                                <div class="did-floating-label-content">
                                    <input class="did-floating-input modal_form_styling" type="email" name="email"
                                        placeholder=" " required>
                                    <label class="did-floating-label" style="color: #000;">Email*</label>
                                </div>
                            </div>


                            <!-- <div class="form-con">
                                <div class="did-floating-label-content">
                                    <input type="tel" name="number" minlength="10" maxlength="16" id="request_call_b"
                                        onkeypress="return number_e(event)" pattern="^[1-9]\d*$"
                                        class="did-floating-input  modal_form_styling number-res"
                                        style="padding-left: 0px!important;" placeholder="Mobile Number*" required>
                                </div>
                            </div> -->
                            <div class="country-form-design">
                        <select style="border:none;" name="countrycode">
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10"
                            minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                    </div>
                    
                    <p></p>



                            <div class="form-conn mt-2">
                                <input id="buttonhiderequestfooter" name="home-page-submit" type="submit"
                                    class="course_modal_btn w-100" value="Submit">
                                <div id="buttonshowrequestfooter" class="course_modal_btn w-100"
                                    style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                            </div>
                        </form>
                        <p style="font-size: 10px; color:#000" class="mt-3">By clicking "Submit" you agree to our <a
                                href="https://kvch.in/terms-use" target="_blank" style="color: #cc0f0f;">terms &
                                conditions </a> and our <a href="https://kvch.in/privacy-policy" target="_blank"
                                style="color: #cc0f0f;">privacy policy.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>