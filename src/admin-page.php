<?php 
  $SERVER = "https://rank-schema-plugin-server.herokuapp.com/";

  if (file_exists(plugin_dir_path( __FILE__ ). 'config.json')) {
    $CONFIG = json_decode(file_get_contents(plugin_dir_path( __FILE__ ). 'config.json'), true);
  }
  if (file_exists(plugin_dir_path( __FILE__ ). 'markups.json')) { $MARKUPS_AVAILABLE = true; }

  include plugin_dir_path( __FILE__ ). 'styles.php';
?>

<div class="notice-container">
</div>

<div class="add-service-overlay">
  <form method="POST">
    <h2>Add a Service</h2>

    <div class="form-control">
      <label>Service Name <span>*</span></label>
      <input name="serviceName" type="text" required>
    </div>

    <div class="form-control">
      <label>Service Page URL <span>*</span></label>
      <input name="serviceUrl" type="text" required>
    </div>

    <div class="form-control">
      <label>Description <span>*</span></label>
      <textarea name="serviceDescription" cols="15" rows="10" required></textarea>
    </div>

    <div class="call-to-actions">
      <input name="add-service-btn" type="submit" value="Add Service">
      <input name="cancel-service-btn" type="button" value="Cancel ">
    </div>

  </form>
</div>

<div class="sub-service-overlay add-service-overlay">
  <form method="POST">
    <h2>Add a Sub Service</h2>
    <input type="hidden" name="key" value="">
    <div class="form-control">
      <label>Service Name <span>*</span></label>
      <input name="serviceName" type="text" required>
    </div>

    <div class="form-control">
      <label>Service Page URL <span>*</span></label>
      <input name="serviceUrl" type="text" required>
    </div>

    <div class="form-control">
      <label>Description <span>*</span></label>
      <textarea name="serviceDescription" cols="15" rows="10" required></textarea>
    </div>

    <div class="call-to-actions">
      <input name="add-sub-service-btn" type="submit" value="Add Service">
      <input name="cancel-sub-service-btn" class="cancel-sub-service-btn" type="button" value="Cancel ">
    </div>

  </form>
</div>

<div class="add-service-area-overlay">
  <form method="POST">
    <h2>Add a Service Area</h2>

    <div class="form-control">
      <label>Country <span>*</span></label>
      <input name="country" type="text" required>
    </div>

    <div class="form-control">
      <label>State <span>*</span></label>
      <input name="state" type="text" required>
    </div>

    <div class="form-control">
      <label>City/Town <span>*</span></label>
      <input name="cityTown" type="text" required>
    </div>

    <div class="form-control">
      <label>Page URL</label>
      <input name="url" type="text">
    </div>

    <div class="form-control">
      <label>ZipCodes <span>*</span></label>
      <input name="zipCodes" type="text">
      <p style="font-size:10px">Separate each zip code by comma(,)</p>
    </div>

    <div class="call-to-actions">
      <input name="add-service-area-btn" type="submit" value="Add Service">
      <input name="cancel-service-area-btn" type="button" value="Cancel ">
    </div>

  </form>
</div>

<div class="get-started-container">
  <div class="left">
    <div class="logo-container">
      <img id="rt-logo" src="<?php echo $SERVER . "images/logo.png" ?>">
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
  <img id="landing-img" src="<?php echo $SERVER . "images/landing_illustration.svg" ?>">
</div>

<div class="form-container">

  <div class="logo-container">
    <img id="rt-logo" src="https://rank-schema-plugin-server.herokuapp.com/images/logo.png">
    <p>Schema Markup</p>
    <p>Fill out this form as much as possible so we can start building your <span>Advance Schema Code!</span></p>
  </div>

  <form method="POST">
    <div class="form-group-control">

      <div class="form-control">
        <label for="schemaType">Schema Type <span>*</span></label>
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

    <div class="form-group-control">
      <h2>Basic Info</h2>

      <div class="form-group">

        <div>
          <div class="form-control">
            <label>Business Name <span>*</span></label>
            <input name="businessName" type="text" required>

          </div>


          <div class="form-control">
            <label>Slogan <span>*</span></label>
            <input name="slogan" type="text" required>

          </div>

          <div class="form-control">
            <label>Street Address <span>*</span></label>
            <input name="streetAddress" type="text" required>

          </div>

          <div class="form-control">
            <label>State <span>*</span></label>
            <input name="state" type="text" required>

          </div>

          <div class="form-control">
            <label>Business Email <span>*</span></label>
            <input name="email" type="text" required>

          </div>

          <div class="form-control">
            <label>Description <span>*</span></label>
            <textarea name="description" cols="15" rows="10" required></textarea>

          </div>
        </div>

        <div>
          <div class="form-control">
            <label>Owner’s Name</label>
            <input name="ownersName" type="text">

          </div>


          <div class="form-control">
            <label>Country <span>*</span></label>
            <input name="country" type="text" required>

          </div>

          <div class="form-control">
            <label>City/Town <span>*</span></label>
            <input name="cityTown" type="text" required>
          </div>

          <div class="form-control">
            <label>ZIP Code <span>*</span></label>
            <input name="zipCode" type="text" required>

          </div>

          <div class="form-control">
            <label>Business Contact Number <span>*</span></label>
            <input name="phone" type="text" required>

          </div>

          <div class="form-control">
            <label>Disambiguating Description<span>*</span></label>
            <textarea name="disambiguatingDescription" cols="15" rows="10" required></textarea>
          </div>
        </div>

      </div>
    </div>


    <div class="form-group-control">
      <h2>Site Info</h2>

      <div class="form-group">

        <div class="form-control">
          <label>Image URL<span>*</span></label>
          <input name="imageURL" type="text" required>

        </div>


        <div class="form-control">
          <label>About Us Page URL</label>
          <input name="aboutUrl" type="text">

        </div>


      </div>

      <div class="form-group">

        <div class="form-control">
          <label>Privacy Policy URL</label>
          <input name="privacyPolicyURL" type="text">
        </div>

        <div class="form-control">
          <label>Contact Us Page URL</label>
          <input name="contactUrl" type="text">
        </div>


      </div>


    </div>

    <div class="form-group-control">
      <h2>SEO</h2>

      <div class="form-group">
        <div class="form-control">
          <label>Keywords <span>*</span></label>
          <input name="keywords" type="text" required>
          <p style="font-size:10px">Separate each keyword with a comma (,)</p>
        </div>
        <div class="form-control">
          <label>Niche <span>*</span></label>
          <input name="query" type="text" required>
        </div>
      </div>

      <div>
        <div class="form-control" style="width:97%;">
          <label>Backlinks/Citations</label>
          <textarea name="backlinks" style="width:100%;"></textarea>
          <p style="font-size:10px">The more the merrier! Separate each link by line.</p>

        </div>
      </div>
    </div>


    <div class="form-group-control">
      <h2>Services <img class="open-add-service-form" src="<?php echo $SERVER . "images/add_icon.svg" ?>"></h2>

      <div class="services-container">
        <!-- GET SERVICES... -->
        <?php include plugin_dir_path( __FILE__ ). 'get-services.php'; ?>

      </div>

    </div>


    <div class="form-group-control">
      <h2>Areas Served <img class="open-add-service-area-form" src="<?php echo $SERVER . "images/add_icon.svg" ?>"></h2>

      <div class="service-areas-container">

        <!-- ADD SERVICE AREA -->
        <?php include plugin_dir_path( __FILE__ ). 'get-service-areas.php'; ?>

      </div>

    </div>


    <div class="form-group-control submit-group-container">
      <input type="submit" id="buildSchemaBtn" value="Build Your Schema Markup!">
    </div>

  </form>


</div>

<div class="building-load">
  <div class="brand">
    <img src="<?php echo $SERVER . "images/logo.png" ?>">
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
</div>

<div class="dashboard">
  <div class="brand">
    <img src="<?php echo $SERVER . "images/logo.png" ?>">
    <p>Schema Markup</p>
  </div>
  <div class="text">
    <h2 class="title">Advanced Schema Markup Code</h2>
    <p>is currently</p>
  </div>
  <h2 class="status">ACTIVE! 👍</h2>
  <button>Edit Schema Data</button>
</div>

<?php include plugin_dir_path( __FILE__ ). 'scripts.php'; ?>