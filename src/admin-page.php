<?php 
  $SERVER = "***REMOVED***";

  if (file_exists(plugin_dir_path( __FILE__ ). 'config.json')) {
    $CONFIG = json_decode(file_get_contents(plugin_dir_path( __FILE__ ). 'config.json'), true);
  }
  if (file_exists(plugin_dir_path( __FILE__ ). 'markups.json')) { $MARKUPS_AVAILABLE = true; }
?>


<section class="rank-main-wrapper">
    <div class="notice-container"></div>

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
                    Creates <span>Advance Schema Markup</span> code for you and embeds them to your pages. <span>No coding
                    required!</span>
                </p>
            </div>
            <button class="get-started-btn">Get Started!</button>
        </div>
        <img class="landing-img" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/landing_illustration.svg'; ?>">
    </section>

    <section class="form-container">
        <div class="logo-container">
            <img id="rt-logo" src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/logo.svg'; ?>">
            <h2>Schema Markup</h2>
            <p>Fill out this form as much as possible so we can start building your <span>Advance Schema Code!</span></p>
        </div>

        <form>
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
                    <label>Owners Name <span>*</span></label>
                    <input type="text" name="ownersName" required>
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
                    <textarea name="disambiguatingDescription"  rows="10" required></textarea>
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
                    <textarea name="description" rows="10"></textarea>
                </div>
            </div>

            <h2>FAQ Page</h2>

            <div class="two-col-row">
                <div class="input-wrapper faq-url-input">
                    <label>FAQ Page URL</label>
                    <div>
                        <input name="faqURL" type="text">
                        <button type="button"><img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'assets/add_icon.svg'; ?>"></button>
                    </div>
                </div>

                <div class="input-wrapper"></div>
            </div>
        </form>
    </section>
</section>

