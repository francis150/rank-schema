
<!-- NOTE Pre-load Configs -->
<?php 
    // NOTE define js config variables
    echo '<script>let CONFIG; let MARKUPS_AVAILABLE</script>';

    // NOTE if config.json file exists, set config variable for php and js
    if (file_exists(plugin_dir_path( __FILE__ ). 'config.json')) {
        $CONFIG = json_decode(file_get_contents(plugin_dir_path( __FILE__ ). 'config.json'), true);
        echo '<script>CONFIG = '.json_encode($CONFIG).'</script>';
    }

    if (file_exists(plugin_dir_path( __FILE__ ). 'markups.json')) {
        $MARKUPS_AVAILABLE = true;
        echo '<script>MARKUPS_AVAILABLE = true</script>';
    }
?>

<!-- NOTE Admin Page UI -->
<section class="rank-main-wrapper">
    <!-- NOTE Notice container -->
    <div class="notice-container"></div>

    <!-- NOTE Get started view -->
    <section class="get-started-container">
        <div class="left">
            <div class="logo-container">
                <img id="rt-logo" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/logo.svg'; ?>">
                <p>Schema Markup</p>
            </div>
            <div class="content-container">
                <h1>Hassle-free</h1>
                <h2><span>Schema Markup</span> Plugin!</h2>
                <p>
                    Creates <span>Advance Schema Markup</span> code for you and embeds them to your pages. <span>No
                        coding
                        required!</span>
                </p>
            </div>
            <form action="#" method="POST">
                <input name="get-started" type="submit" class="get-started-btn" value="Get Started!">
            </form>
        </div>
        <img class="landing-img"
            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/landing_illustration.svg'; ?>">
    </section>

    <!-- NOTE Main Form and Sub forms View -->
    <section class="form-container">

        <div class="faq-overlay overlay-wrapper">
            <form method="POST">
                <h2>Frequently Asked Question</h2>

                <!-- Hidden feilds -->
                <input type="hidden" name="edit-key" value="">

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Question <span>*</span></label>
                        <input name="question" type="text" required>
                    </div>
                </div>

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Answer <span>*</span></label>
                        <textarea name="answer" rows="10" required></textarea>
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="faq-submit-btn">Add</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="about-page-overlay overlay-wrapper">
            <form action="#">
                <h2>About Page</h2>

                <!-- Hidden feilds -->
                <input type="hidden" name="edit-key" value="">

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>About Page URL <span>*</span></label>
                        <input name="url" type="text" required>
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="about-pages-submit-btn">Add</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="contact-page-overlay overlay-wrapper">
            <form action="#">
                <h2>Contact Page</h2>

                <!-- Hidden feilds -->
                <input type="hidden" name="edit-key" value="">

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Contact Page URL <span>*</span></label>
                        <input name="url" type="text" required>
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="contact-page-submit-btn">Add</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="services-overlay overlay-wrapper">
            <form action="#">
                <h2>Service Page</h2>

                <!-- Hidden feilds -->
                <input type="hidden" name="edit-key" value="">
                <input type="hidden" name="parent-key" value="">

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Service Page URL <span>*</span></label>
                        <input name="url" type="text" required>
                    </div>
                </div>

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Service Name <span>*</span></label>
                        <input name="name" type="text" required>
                    </div>
                </div>

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Description <span>*</span></label>
                        <textarea name="description" rows="10" required></textarea>
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="services-submit-btn">Add</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="service-areas-overlay overlay-wrapper">
            <form action="#">
                <h2>Service Area Page</h2>

                <!-- Hidden feilds -->
                <input type="hidden" name="edit-key" value="">

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Service Area Page URL <span>*</span></label>
                        <input name="url" type="text" required>
                    </div>
                </div>

                <div class="two-col-row">
                    <div class="input-wrapper">
                        <label>Street Address</label>
                        <input name="streetAddress" type="text">
                    </div>

                    <div class="input-wrapper">
                        <label>City/Town <span>*</span></label>
                        <input name="streetAddress" type="text" required>
                    </div>
                </div>

                <div class="two-col-row">
                    <div class="input-wrapper">
                        <label>State <span>*</span></label>
                        <input name="state" type="text" required>
                    </div>

                    <div class="input-wrapper">
                        <label>Country <span>*</span></label>
                        <input name="country" type="text" required>
                    </div>
                </div>

                <div class="two-col-row">
                    <div class="input-wrapper">
                        <label>Business Number for this Location</label>
                        <input name="phone" type="text">
                    </div>

                    <div class="input-wrapper">
                        <label>Business Email for this Location</label>
                        <input name="email" type="text">
                    </div>
                </div>

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Zip Codes <span>*</span></label>
                        <input name="zipCodes" type="text" required>
                        <small>Separate each zip code with a comma(,). At-least one(1) zip code is required</small>
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="service-areas-submit-btn">Add</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="blog-posts-overlay overlay-wrapper">
            <form action="#">
                <h2>Blog Post Page</h2>

                <!-- Hidden feilds -->
                <input type="hidden" name="edit-key" value="">

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Blog Post Page URL <span>*</span></label>
                        <input name="url" type="text" required>
                    </div>
                </div>

                <div class="three-col-row">
                    <div class="input-wrapper">
                        <label>Author</label>
                        <input name="author" type="text">
                    </div>

                    <div class="input-wrapper">
                        <label>Genre</label>
                        <input name="genre" type="text" required>
                    </div>

                    <div class="input-wrapper">
                        <label>Date Published <span>*</span></label>
                        <input name="datePublished" type="date" required>
                    </div>
                </div>

                <div class="two-col-row">
                    <div class="input-wrapper">
                        <label>Language <span>*</span></label>
                        <select autocomplete="on" name="inLanguage" required>
                            <option value="af">Afrikaans</option>
                            <option value="sq">Albanian - shqip</option>
                            <option value="am">Amharic - አማርኛ</option>
                            <option value="ar">Arabic - العربية</option>
                            <option value="an">Aragonese - aragonés</option>
                            <option value="hy">Armenian - հայերեն</option>
                            <option value="ast">Asturian - asturianu</option>
                            <option value="az">Azerbaijani - azərbaycan dili</option>
                            <option value="eu">Basque - euskara</option>
                            <option value="be">Belarusian - беларуская</option>
                            <option value="bn">Bengali - বাংলা</option>
                            <option value="bs">Bosnian - bosanski</option>
                            <option value="br">Breton - brezhoneg</option>
                            <option value="bg">Bulgarian - български</option>
                            <option value="ca">Catalan - català</option>
                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                            <option value="zh">Chinese - 中文</option>
                            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                            <option value="co">Corsican</option>
                            <option value="hr">Croatian - hrvatski</option>
                            <option value="cs">Czech - čeština</option>
                            <option value="da">Danish - dansk</option>
                            <option value="nl">Dutch - Nederlands</option>
                            <option value="en">English</option>
                            <option value="en-AU">English (Australia)</option>
                            <option value="en-CA">English (Canada)</option>
                            <option value="en-IN">English (India)</option>
                            <option value="en-NZ">English (New Zealand)</option>
                            <option value="en-ZA">English (South Africa)</option>
                            <option value="en-GB">English (United Kingdom)</option>
                            <option value="en-US" selected>English (United States)</option>
                            <option value="eo">Esperanto - esperanto</option>
                            <option value="et">Estonian - eesti</option>
                            <option value="fo">Faroese - føroyskt</option>
                            <option value="fil">Filipino</option>
                            <option value="fi">Finnish - suomi</option>
                            <option value="fr">French - français</option>
                            <option value="fr-CA">French (Canada) - français (Canada)</option>
                            <option value="fr-FR">French (France) - français (France)</option>
                            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                            <option value="gl">Galician - galego</option>
                            <option value="ka">Georgian - ქართული</option>
                            <option value="de">German - Deutsch</option>
                            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                            <option value="el">Greek - Ελληνικά</option>
                            <option value="gn">Guarani</option>
                            <option value="gu">Gujarati - ગુજરાતી</option>
                            <option value="ha">Hausa</option>
                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                            <option value="he">Hebrew - עברית</option>
                            <option value="hi">Hindi - हिन्दी</option>
                            <option value="hu">Hungarian - magyar</option>
                            <option value="is">Icelandic - íslenska</option>
                            <option value="id">Indonesian - Indonesia</option>
                            <option value="ia">Interlingua</option>
                            <option value="ga">Irish - Gaeilge</option>
                            <option value="it">Italian - italiano</option>
                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                            <option value="ja">Japanese - 日本語</option>
                            <option value="kn">Kannada - ಕನ್ನಡ</option>
                            <option value="kk">Kazakh - қазақ тілі</option>
                            <option value="km">Khmer - ខ្មែរ</option>
                            <option value="ko">Korean - 한국어</option>
                            <option value="ku">Kurdish - Kurdî</option>
                            <option value="ky">Kyrgyz - кыргызча</option>
                            <option value="lo">Lao - ລາວ</option>
                            <option value="la">Latin</option>
                            <option value="lv">Latvian - latviešu</option>
                            <option value="ln">Lingala - lingála</option>
                            <option value="lt">Lithuanian - lietuvių</option>
                            <option value="mk">Macedonian - македонски</option>
                            <option value="ms">Malay - Bahasa Melayu</option>
                            <option value="ml">Malayalam - മലയാളം</option>
                            <option value="mt">Maltese - Malti</option>
                            <option value="mr">Marathi - मराठी</option>
                            <option value="mn">Mongolian - монгол</option>
                            <option value="ne">Nepali - नेपाली</option>
                            <option value="no">Norwegian - norsk</option>
                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                            <option value="oc">Occitan</option>
                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                            <option value="om">Oromo - Oromoo</option>
                            <option value="ps">Pashto - پښتو</option>
                            <option value="fa">Persian - فارسی</option>
                            <option value="pl">Polish - polski</option>
                            <option value="pt">Portuguese - português</option>
                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                            <option value="qu">Quechua</option>
                            <option value="ro">Romanian - română</option>
                            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                            <option value="rm">Romansh - rumantsch</option>
                            <option value="ru">Russian - русский</option>
                            <option value="gd">Scottish Gaelic</option>
                            <option value="sr">Serbian - српски</option>
                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                            <option value="sn">Shona - chiShona</option>
                            <option value="sd">Sindhi</option>
                            <option value="si">Sinhala - සිංහල</option>
                            <option value="sk">Slovak - slovenčina</option>
                            <option value="sl">Slovenian - slovenščina</option>
                            <option value="so">Somali - Soomaali</option>
                            <option value="st">Southern Sotho</option>
                            <option value="es">Spanish - español</option>
                            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                            <option value="es-MX">Spanish (Mexico) - español (México)</option>
                            <option value="es-ES">Spanish (Spain) - español (España)</option>
                            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                            <option value="su">Sundanese</option>
                            <option value="sw">Swahili - Kiswahili</option>
                            <option value="sv">Swedish - svenska</option>
                            <option value="tg">Tajik - тоҷикӣ</option>
                            <option value="ta">Tamil - தமிழ்</option>
                            <option value="tt">Tatar</option>
                            <option value="te">Telugu - తెలుగు</option>
                            <option value="th">Thai - ไทย</option>
                            <option value="ti">Tigrinya - ትግርኛ</option>
                            <option value="to">Tongan - lea fakatonga</option>
                            <option value="tr">Turkish - Türkçe</option>
                            <option value="tk">Turkmen</option>
                            <option value="tw">Twi</option>
                            <option value="uk">Ukrainian - українська</option>
                            <option value="ur">Urdu - اردو</option>
                            <option value="ug">Uyghur</option>
                            <option value="uz">Uzbek - o‘zbek</option>
                            <option value="vi">Vietnamese - Tiếng Việt</option>
                            <option value="wa">Walloon - wa</option>
                            <option value="cy">Welsh - Cymraeg</option>
                            <option value="fy">Western Frisian</option>
                            <option value="xh">Xhosa</option>
                            <option value="yi">Yiddish</option>
                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                            <option value="zu">Zulu - isiZulu</option>
                        </select>
                    </div>

                    <div class="input-wrapper">
                        <label>Thumbnail Image URL</label>
                        <input name="thumbnailUrl" type="text" required>
                    </div>
                </div>

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Headline <span>*</span></label>
                        <input name="headline" type="text" required>
                    </div>
                </div>

                <div class="one-col-row">
                    <div class="input-wrapper">
                        <label>Content <span>*</span></label>
                        <textarea name="articleBody" rows="10" required></textarea>
                    </div>
                </div>

                <div class="buttons">
                    <input checked type="checkbox" name="isFamilyFriendly"><span>is this Content <b>Family Friendly</b>?</span>
                    <button type="submit" class="blog-posts-submit-btn">Add</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>

            </form>
        </div>

        <div class="logo-container">
            <img id="rt-logo" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/logo.svg'; ?>">
            <h2>Schema Markup</h2>
            <p>Fill out this form as much as possible so we can start building your <span>Advance Schema Code!</span>
            </p>
        </div>

        <form class="main-form" action="#">
            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Main Category <span>*</span></label>
                    <select id="schemaType" autocomplete="on" name="schemaType" required>
                        <option value="LocalBusiness" selected>LocalBusiness</option>

                        <option value="ArchiveOrganization">ArchiveOrganization</option>

                        <option value="AutomotiveBusiness">AutomotiveBusiness</option>

                        <option value="AutoBodyShop">&nbsp;&nbsp;&nbsp;&nbsp;AutoBodyShop</option>

                        <option value="AutoDealer">&nbsp;&nbsp;&nbsp;&nbsp;AutoDealer</option>

                        <option value="AutoPartsStore">&nbsp;&nbsp;&nbsp;&nbsp;AutoPartsStore</option>

                        <option value="AutoRental">&nbsp;&nbsp;&nbsp;&nbsp;AutoRental</option>

                        <option value="AutoRepair">&nbsp;&nbsp;&nbsp;&nbsp;AutoRepair</option>

                        <option value="AutoWash">&nbsp;&nbsp;&nbsp;&nbsp;AutoWash</option>

                        <option value="GasStation">&nbsp;&nbsp;&nbsp;&nbsp;GasStation</option>

                        <option value="MotorcycleDealer">&nbsp;&nbsp;&nbsp;&nbsp;MotorcycleDealer</option>

                        <option value="MotorcycleRepair">&nbsp;&nbsp;&nbsp;&nbsp;MotorcycleRepair</option>

                        <option value="ChildCare">ChildCare</option>

                        <option value="Dentist">Dentist</option>

                        <option value="DryCleaningOrLaundry">DryCleaningOrLaundry</option>

                        <option value="EmergencyService">EmergencyService</option>

                        <option value="FireStation">&nbsp;&nbsp;&nbsp;&nbsp;FireStation</option>

                        <option value="Hospital">&nbsp;&nbsp;&nbsp;&nbsp;Hospital</option>

                        <option value="PoliceStation">&nbsp;&nbsp;&nbsp;&nbsp;PoliceStation</option>

                        <option value="EmploymentAgency">EmploymentAgency</option>

                        <option value="EntertainmentBusiness">EntertainmentBusiness</option>

                        <option value="AdultEntertainment">&nbsp;&nbsp;&nbsp;&nbsp;AdultEntertainment</option>

                        <option value="AmusementPark">&nbsp;&nbsp;&nbsp;&nbsp;AmusementPark</option>

                        <option value="ArtGallery">&nbsp;&nbsp;&nbsp;&nbsp;ArtGallery</option>

                        <option value="Casino">&nbsp;&nbsp;&nbsp;&nbsp;Casino</option>

                        <option value="ComedyClub">&nbsp;&nbsp;&nbsp;&nbsp;ComedyClub</option>

                        <option value="MovieTheater">&nbsp;&nbsp;&nbsp;&nbsp;MovieTheater</option>

                        <option value="NightClub">&nbsp;&nbsp;&nbsp;&nbsp;NightClub</option>

                        <option value="FinancialService">FinancialService</option>

                        <option value="AccountingService">&nbsp;&nbsp;&nbsp;&nbsp;AccountingService</option>

                        <option value="AutomatedTeller">&nbsp;&nbsp;&nbsp;&nbsp;AutomatedTeller</option>

                        <option value="BankOrCreditUnion">&nbsp;&nbsp;&nbsp;&nbsp;BankOrCreditUnion</option>

                        <option value="InsuranceAgency">&nbsp;&nbsp;&nbsp;&nbsp;InsuranceAgency</option>

                        <option value="FoodEstablishment">FoodEstablishment</option>

                        <option value="Bakery">&nbsp;&nbsp;&nbsp;&nbsp;Bakery</option>

                        <option value="BarOrPub">&nbsp;&nbsp;&nbsp;&nbsp;BarOrPub</option>

                        <option value="Brewery">&nbsp;&nbsp;&nbsp;&nbsp;Brewery</option>

                        <option value="CafeOrCoffeeShop">&nbsp;&nbsp;&nbsp;&nbsp;CafeOrCoffeeShop</option>

                        <option value="Distillery">&nbsp;&nbsp;&nbsp;&nbsp;Distillery</option>

                        <option value="FastFoodRestaurant">&nbsp;&nbsp;&nbsp;&nbsp;FastFoodRestaurant</option>

                        <option value="IceCreamShop">&nbsp;&nbsp;&nbsp;&nbsp;IceCreamShop</option>

                        <option value="Restaurant">&nbsp;&nbsp;&nbsp;&nbsp;Restaurant</option>

                        <option value="Winery">&nbsp;&nbsp;&nbsp;&nbsp;Winery</option>

                        <option value="GovernmentOffice">GovernmentOffice</option>

                        <option value="PostOffice">&nbsp;&nbsp;&nbsp;&nbsp;PostOffice</option>

                        <option value="HealthAndBeautyBusiness">HealthAndBeautyBusiness</option>

                        <option value="BeautySalon">&nbsp;&nbsp;&nbsp;&nbsp;BeautySalon</option>

                        <option value="DaySpa">&nbsp;&nbsp;&nbsp;&nbsp;DaySpa</option>

                        <option value="HairSalon">&nbsp;&nbsp;&nbsp;&nbsp;HairSalon</option>

                        <option value="HealthClub">&nbsp;&nbsp;&nbsp;&nbsp;HealthClub</option>

                        <option value="NailSalon">&nbsp;&nbsp;&nbsp;&nbsp;NailSalon</option>

                        <option value="TattooParlor">&nbsp;&nbsp;&nbsp;&nbsp;TattooParlor</option>

                        <option value="HomeAndConstructionBusiness">HomeAndConstructionBusiness</option>

                        <option value="Electrician">&nbsp;&nbsp;&nbsp;&nbsp;Electrician</option>

                        <option value="GeneralContractor">&nbsp;&nbsp;&nbsp;&nbsp;GeneralContractor</option>

                        <option value="HVACBusiness">&nbsp;&nbsp;&nbsp;&nbsp;HVACBusiness</option>

                        <option value="HousePainter">&nbsp;&nbsp;&nbsp;&nbsp;HousePainter</option>

                        <option value="Locksmith">&nbsp;&nbsp;&nbsp;&nbsp;Locksmith</option>

                        <option value="MovingCompany">&nbsp;&nbsp;&nbsp;&nbsp;MovingCompany</option>

                        <option value="Plumber">&nbsp;&nbsp;&nbsp;&nbsp;Plumber</option>

                        <option value="RoofingContractor">&nbsp;&nbsp;&nbsp;&nbsp;RoofingContractor</option>

                        <option value="InternetCafe">InternetCafe</option>

                        <option value="LegalService">LegalService</option>

                        <option value="Attorney">&nbsp;&nbsp;&nbsp;&nbsp;Attorney</option>

                        <option value="Notary">&nbsp;&nbsp;&nbsp;&nbsp;Notary</option>

                        <option value="Library">Library</option>

                        <option value="LodgingBusiness">LodgingBusiness</option>

                        <option value="BedAndBreakfast">&nbsp;&nbsp;&nbsp;&nbsp;BedAndBreakfast</option>

                        <option value="Campground">&nbsp;&nbsp;&nbsp;&nbsp;Campground</option>

                        <option value="Hostel">&nbsp;&nbsp;&nbsp;&nbsp;Hostel</option>

                        <option value="Hotel">&nbsp;&nbsp;&nbsp;&nbsp;Hotel</option>

                        <option value="Motel">&nbsp;&nbsp;&nbsp;&nbsp;Motel</option>

                        <option value="Resort">&nbsp;&nbsp;&nbsp;&nbsp;Resort</option>

                        <option value="SkiResort">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SkiResort</option>

                        <option value="MedicalBusiness">MedicalBusiness</option>

                        <option value="CommunityHealth">&nbsp;&nbsp;&nbsp;&nbsp;CommunityHealth</option>

                        <option value="Dentist">&nbsp;&nbsp;&nbsp;&nbsp;Dentist</option>

                        <option value="Dermatology">&nbsp;&nbsp;&nbsp;&nbsp;Dermatology</option>

                        <option value="DietNutrition">&nbsp;&nbsp;&nbsp;&nbsp;DietNutrition</option>

                        <option value="Emergency">&nbsp;&nbsp;&nbsp;&nbsp;Emergency</option>

                        <option value="Geriatric">&nbsp;&nbsp;&nbsp;&nbsp;Geriatric</option>

                        <option value="Gynecologic">&nbsp;&nbsp;&nbsp;&nbsp;Gynecologic</option>

                        <option value="MedicalClinic">&nbsp;&nbsp;&nbsp;&nbsp;MedicalClinic</option>

                        <option value="Midwifery">&nbsp;&nbsp;&nbsp;&nbsp;Midwifery</option>

                        <option value="Nursing">&nbsp;&nbsp;&nbsp;&nbsp;Nursing</option>

                        <option value="Obstetric">&nbsp;&nbsp;&nbsp;&nbsp;Obstetric</option>

                        <option value="Oncologic">&nbsp;&nbsp;&nbsp;&nbsp;Oncologic</option>

                        <option value="Optician">&nbsp;&nbsp;&nbsp;&nbsp;Optician</option>

                        <option value="Optometric">&nbsp;&nbsp;&nbsp;&nbsp;Optometric</option>

                        <option value="Otolaryngologic">&nbsp;&nbsp;&nbsp;&nbsp;Otolaryngologic</option>

                        <option value="Pediatric">&nbsp;&nbsp;&nbsp;&nbsp;Pediatric</option>

                        <option value="Pharmacy">&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy</option>

                        <option value="Physician">&nbsp;&nbsp;&nbsp;&nbsp;Physician</option>

                        <option value="Physiotherapy">&nbsp;&nbsp;&nbsp;&nbsp;Physiotherapy</option>

                        <option value="PlasticSurgery">&nbsp;&nbsp;&nbsp;&nbsp;PlasticSurgery</option>

                        <option value="Podiatric">&nbsp;&nbsp;&nbsp;&nbsp;Podiatric</option>

                        <option value="PrimaryCare">&nbsp;&nbsp;&nbsp;&nbsp;PrimaryCare</option>

                        <option value="Psychiatric">&nbsp;&nbsp;&nbsp;&nbsp;Psychiatric</option>

                        <option value="PublicHealth">&nbsp;&nbsp;&nbsp;&nbsp;PublicHealth</option>

                        <option value="ProfessionalService">ProfessionalService</option>

                        <option value="RadioStation">RadioStation</option>

                        <option value="RealEstateAgent">RealEstateAgent</option>

                        <option value="RecyclingCenter">RecyclingCenter</option>

                        <option value="SelfStorage">SelfStorage</option>

                        <option value="ShoppingCenter">ShoppingCenter</option>

                        <option value="SportsActivityLocation">SportsActivityLocation</option>

                        <option value="BowlingAlley">&nbsp;&nbsp;&nbsp;&nbsp;BowlingAlley</option>

                        <option value="ExerciseGym">&nbsp;&nbsp;&nbsp;&nbsp;ExerciseGym</option>

                        <option value="GolfCourse">&nbsp;&nbsp;&nbsp;&nbsp;GolfCourse</option>

                        <option value="HealthClub">&nbsp;&nbsp;&nbsp;&nbsp;HealthClub</option>

                        <option value="PublicSwimmingPool">&nbsp;&nbsp;&nbsp;&nbsp;PublicSwimmingPool</option>

                        <option value="SkiResort">&nbsp;&nbsp;&nbsp;&nbsp;SkiResort</option>

                        <option value="SportsClub">&nbsp;&nbsp;&nbsp;&nbsp;SportsClub</option>

                        <option value="StadiumOrArena">&nbsp;&nbsp;&nbsp;&nbsp;StadiumOrArena</option>

                        <option value="TennisComplex">&nbsp;&nbsp;&nbsp;&nbsp;TennisComplex</option>

                        <option value="Store">Store</option>

                        <option value="AutoPartsStore">&nbsp;&nbsp;&nbsp;&nbsp;AutoPartsStore</option>

                        <option value="BikeStore">&nbsp;&nbsp;&nbsp;&nbsp;BikeStore</option>

                        <option value="BookStore">&nbsp;&nbsp;&nbsp;&nbsp;BookStore</option>

                        <option value="ClothingStore">&nbsp;&nbsp;&nbsp;&nbsp;ClothingStore</option>

                        <option value="ComputerStore">&nbsp;&nbsp;&nbsp;&nbsp;ComputerStore</option>

                        <option value="ConvenienceStore">&nbsp;&nbsp;&nbsp;&nbsp;ConvenienceStore</option>

                        <option value="DepartmentStore">&nbsp;&nbsp;&nbsp;&nbsp;DepartmentStore</option>

                        <option value="ElectronicsStore">&nbsp;&nbsp;&nbsp;&nbsp;ElectronicsStore</option>

                        <option value="Florist">&nbsp;&nbsp;&nbsp;&nbsp;Florist</option>

                        <option value="FurnitureStore">&nbsp;&nbsp;&nbsp;&nbsp;FurnitureStore</option>

                        <option value="GardenStore">&nbsp;&nbsp;&nbsp;&nbsp;GardenStore</option>

                        <option value="GroceryStore">&nbsp;&nbsp;&nbsp;&nbsp;GroceryStore</option>

                        <option value="HardwareStore">&nbsp;&nbsp;&nbsp;&nbsp;HardwareStore</option>

                        <option value="HobbyShop">&nbsp;&nbsp;&nbsp;&nbsp;HobbyShop</option>

                        <option value="HomeGoodsStore">&nbsp;&nbsp;&nbsp;&nbsp;HomeGoodsStore</option>

                        <option value="JewelryStore">&nbsp;&nbsp;&nbsp;&nbsp;JewelryStore</option>

                        <option value="LiquorStore">&nbsp;&nbsp;&nbsp;&nbsp;LiquorStore</option>

                        <option value="MensClothingStore">&nbsp;&nbsp;&nbsp;&nbsp;MensClothingStore</option>

                        <option value="MobilePhoneStore">&nbsp;&nbsp;&nbsp;&nbsp;MobilePhoneStore</option>

                        <option value="MovieRentalStore">&nbsp;&nbsp;&nbsp;&nbsp;MovieRentalStore</option>

                        <option value="MusicStore">&nbsp;&nbsp;&nbsp;&nbsp;MusicStore</option>

                        <option value="OfficeEquipmentStore">&nbsp;&nbsp;&nbsp;&nbsp;OfficeEquipmentStore</option>

                        <option value="OutletStore">&nbsp;&nbsp;&nbsp;&nbsp;OutletStore</option>

                        <option value="PawnShop">&nbsp;&nbsp;&nbsp;&nbsp;PawnShop</option>

                        <option value="PetStore">&nbsp;&nbsp;&nbsp;&nbsp;PetStore</option>

                        <option value="ShoeStore">&nbsp;&nbsp;&nbsp;&nbsp;ShoeStore</option>

                        <option value="SportingGoodsStore">&nbsp;&nbsp;&nbsp;&nbsp;SportingGoodsStore</option>

                        <option value="TireShop">&nbsp;&nbsp;&nbsp;&nbsp;TireShop</option>

                        <option value="ToyStore">&nbsp;&nbsp;&nbsp;&nbsp;ToyStore</option>

                        <option value="WholesaleStore">&nbsp;&nbsp;&nbsp;&nbsp;WholesaleStore</option>

                        <option value="TelevisionStation">TelevisionStation</option>

                        <option value="TouristInformationCenter">TouristInformationCenter</option>

                        <option value="TravelAgency">TravelAgency</option>
                    </select>
                </div>
            </div>

            <h2>Basic Info</h2>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Business Name <span>*</span></label>
                    <input name="businessName" type="text" required>
                </div>

                <div class="input-wrapper">
                    <label>Owners Name</label>
                    <input type="text" name="ownersName">
                </div>
            </div>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Image URL <span>*</span></label>
                    <input name="imageURL" type="text" required>
                </div>

                <div class="input-wrapper">
                    <label>Slogan <span>*</span></label>
                    <input type="text" name="slogan" required>
                </div>
            </div>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Description <span>*</span></label>
                    <textarea name="description" rows="10" required></textarea>
                </div>

                <div class="input-wrapper">
                    <label>Disambiguating Description <span>*</span></label>
                    <textarea name="disambiguatingDescription" rows="10" required></textarea>
                </div>
            </div>

            <h2>Primary Location</h2>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Street Address <span>*</span></label>
                    <input name="streetAddress" type="text" required>
                </div>

                <div class="input-wrapper">
                    <label>City/Town <span>*</span></label>
                    <input type="text" name="cityTown" required>
                </div>
            </div>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>State <span>*</span></label>
                    <input name="state" type="text" required>
                </div>

                <div class="input-wrapper">
                    <label>Zip Code <span>*</span></label>
                    <input type="text" name="zipCode" required>
                </div>
            </div>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Country <span>*</span></label>
                    <input name="country" type="text" required>
                </div>

                <div class="input-wrapper">

                </div>
            </div>

            <div class="two-col-row">
                <div class="input-wrapper">
                    <label>Contact Phone Number <span>*</span></label>
                    <input name="phone" type="text" required>
                </div>

                <div class="input-wrapper">
                    <label>Contact Email <span>*</span></label>
                    <input type="text" name="email" required>
                </div>
            </div>

            <h2>SEO</h2>

            <div class="two-col-row">
                <div class="input-wrapper wiki-entity">
                    <label>Wikipedia Entity <span>*</span></label>
                    <div>
                        <input name="query" type="text" required>
                        <button type="button">Validate</button>
                    </div>
                    <small>Press validate to check if Wiki Entity is available.</small>
                </div>

                <div class="input-wrapper">
                    <label>Privacy Policy Page</label>
                    <input type="text" name="privacyPolicyURL">
                </div>
            </div>

            <div class="one-col-row">
                <div class="input-wrapper">
                    <label>Keywords <span>*</span></label>
                    <input name="keywords" type="text" required>
                    <small>Separate each keyword with a comma (,)</small>
                </div>
            </div>

            <div class="one-col-row">
                <div class="input-wrapper">
                    <label>Backlinks/Citations</label>
                    <textarea name="backlinks" rows="10"></textarea>
                </div>
            </div>

            <h2>FAQ Page</h2>

            <div class="two-col-row">
                <div class="input-wrapper faq-url-input">
                    <label>FAQ Page URL</label>
                    <div>
                        <input name="faqURL" type="text">
                        <button type="button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>"></button>
                    </div>
                </div>

                <div class="input-wrapper"></div>
            </div>

            <div class="faqs-container">

                <div class="faq">
                    <div class="head">
                        <h3 class="question">Is Sod Better Than Seeding?</h3>
                        <button type="button" class="faq-edit-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                        <button type="button" class="faq-remove-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                    </div>
                    <p>Most people presume that new lawn installation and sodding go hand-in-hand. However, there are
                        other ways to install a new lawn as well, such as seeding, hydroseeding, and artificial grass
                        turf landscaping. Yet again, sodding is more popular than other methods because it gives an
                        instant lawn to meet your specific needs. Moreover, sod can be used in many different kinds of
                        areas in the lawn as well, such as slopes and compact regions. It is also a low-maintenance
                        alternative to seeding.</p>
                </div>

                <div class="faq">
                    <div class="head">
                        <h3 class="question">Should I Hire a Landscape Designer?</h3>
                        <button type="button" class="faq-edit-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                        <button type="button" class="faq-remove-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                    </div>
                    <p>While taking on the landscaping project on your own may seem like a cost-effective choice, it can
                        end up being a hefty job and may not produce the intended results. Hiring a landscape designer
                        allows you to benefit from their expertise and add more value to your property by ensuring
                        stunning results. Besides, they can also help you to choose the right plants and foliage,
                        planting and transplanting methods, and eco-friendly solutions to maintain a healthy and
                        long-lasting lawn. Experienced landscape designers can also help you with irrigation systems,
                        excavation and grading, drainage, etc.</p>
                </div>

            </div>

            <h2>About Pages <img class="add-about-page-btn" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>"></h2>

            <div class="about-pages-container">
                <div class="about-page">
                    <p>https://mexlandscaping.com/about/</p>
                    <button type="button" class="about-edit-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                    <button type="button" class="about-remove-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                </div>

                <div class="about-page">
                    <p>https://mexlandscaping.com/our-work/</p>
                    <button type="button" class="about-edit-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                    <button type="button" class="about-remove-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                </div>
            </div>

            <h2>Contact Pages <img class="add-contact-page-btn" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>"></h2>

            <div class="contact-pages-container">
                <div class="contact-page">
                    <p>https://mexlandscaping.com/contact/</p>
                    <button type="button" class="contact-edit-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                    <button type="button" class="contact-remove-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                </div>
            </div>

            <h2>Service Pages <img class="add-service-page-btn" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>"></h2>

            <div class="service-pages-container">

                <div class="service-page">
                    <div class="head">
                        <p><span>Landscape Design</span> - https://mexlandscaping.com/landscape-design/</p>
                        <button type="button" class="service-add-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon_small.svg'; ?>"></button>
                        <button type="button" class="service-edit-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                        <button type="button" class="service-remove-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                    </div>
                    <div class="sub-services">

                        <div class="service-page">
                            <div class="head">
                                <p><span>Landscape Design</span> - https://mexlandscaping.com/landscape-design/</p>
                                <button type="button" class="service-add-btn action-button"><img
                                        src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon_small.svg'; ?>"></button>
                                <button type="button" class="service-edit-btn action-button"><img
                                        src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                                <button type="button" class="service-remove-btn action-button"><img
                                        src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                            </div>
                            <div class="sub-services">

                                <div class="service-page">
                                    <div class="head">
                                        <p><span>Landscape Design</span> - https://mexlandscaping.com/landscape-design/
                                        </p>
                                        <button type="button" class="service-edit-btn action-button"><img
                                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                                        <button type="button" class="service-remove-btn action-button"><img
                                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                                    </div>
                                    <div class="sub-services"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="service-page">
                    <div class="head">
                        <p><span>Landscape Design</span> - https://mexlandscaping.com/landscape-design/</p>
                        <button type="button" class="service-add-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon_small.svg'; ?>"></button>
                        <button type="button" class="service-edit-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                        <button type="button" class="service-remove-btn action-button"><img
                                src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                    </div>
                    <div class="sub-services"></div>
                </div>

            </div>

            <h2>Service Area Pages <img class="add-service-area-page-btn" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>">
            </h2>

            <div class="service-area-pages-container">

                <div class="service-area-page">
                    <p><span>Norristown, PA</span> - https://mexlandscaping.com/landscaping-services-in-norristown/</p>
                    <button type="button" class="service-area-edit-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                    <button type="button" class="service-area-remove-btn action-button"><img
                            src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                </div>

            </div>

            <h2>Blog Post Pages <img class="add-blog-post-page-btn" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>">
            </h2>

            <div class="blog-post-pages-container">

                <div class="blog-post-page">
                    <div class="image-wrapper">
                        <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/image_placeholder.svg'; ?>">
                    </div>
                    <div class="content-wrapper">
                        <div class="head">
                            <h3>Things a homeowner should know before getting a professional landscaping service</h3>
                            <button type="button" class="blog-post-page-edit-btn action-button"><img
                                    src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                            <button type="button" class="blog-post-page-remove-btn action-button"><img
                                    src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate temporibus explicabo
                            excepturi dolores maxime beatae magni velit atque officia maiores. Voluptate, amet ducimus!
                            Ut culpa ab error fugit beatae dolorum praesentium cupiditate rem, delectus vero ipsa quidem
                            voluptate! Illum facilis et itaque beatae saepe non dolor aliquam perspiciatis ex
                            consequuntur!</p>
                    </div>
                </div>

                <div class="blog-post-page">
                    <div class="image-wrapper">
                        <img
                            src="https://www.yavapailandscaping.com/wp-content/uploads/2021/08/Top-Rated-Landscaping-Company-Get-Quality-Work-at-an-Affordable-Cost.jpg">
                    </div>
                    <div class="content-wrapper">
                        <div class="head">
                            <h3>Things a homeowner should know before getting a professional landscaping service</h3>
                            <button type="button" class="blog-post-page-edit-btn action-button"><img
                                    src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/edit_icon.svg'; ?>"></button>
                            <button type="button" class="blog-post-page-remove-btn action-button"><img
                                    src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/trash_icon.svg'; ?>"></button>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate temporibus explicabo
                            excepturi dolores maxime beatae magni velit atque officia maiores. Voluptate, amet ducimus!
                            Ut culpa ab error fugit beatae dolorum praesentium cupiditate rem, delectus vero ipsa quidem
                            voluptate! Illum facilis et itaque beatae saepe non dolor aliquam perspiciatis ex
                            consequuntur!</p>
                    </div>
                </div>

            </div>

            <div class="buttons">
                <button class="submit" type="submit">Build Your Schema Code!</button>
                <button class="draft" type="button">Save as Draft</button>
            </div>
        </form>
    </section>

    <!-- NOTE Main form build loading screen -->
    <section class="building-load">
        <div class="brand">
            <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/logo.svg'; ?>">
            <p>Schema Markup</p>
        </div>

        <div class="content">
            <div class="loader">
                <div class="indicator"></div>
                <div class="indicator middle"></div>
                <div class="indicator last"></div>
            </div>
            <h2>Please wait while we build your<br><b>Advanced Schema Markup Code</b>!</h2>
        </div>
    </section>

    <!-- NOTE Active Screen View -->
    <section class="active-screen">
        <div class="brand">
            <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/logo.svg'; ?>">
            <p>Schema Markup</p>
        </div>
        <div class="text">
            <h2 class="title">Advanced Schema Markup Code</h2>
            <p>is currently</p>
        </div>
        <h2 class="status">ACTIVE! 👍</h2>
        <button>Edit Schema Data</button>
    </section>
</section>

<!-- NOTE This file stores all major php functions -->
<?php include plugin_dir_path( __FILE__ ). 'functions.php'; ?>