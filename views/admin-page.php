<?php 
  $SERVER = "https://rank-schema-plugin-server.herokuapp.com/";

  $CONFIG_AVAILABLE = file_exists(WP_PLUGIN_DIR . "/rank-schema/config.json");

  // If config.json is available, go to main form
  if ($CONFIG_AVAILABLE) {
    $CONFIG = json_decode(file_get_contents(WP_PLUGIN_DIR . "/rank-schema/config.json"), true);
  }
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
</style>

<!-- ADD SERVICE/SUB-SERVICE OVERLAY -->
<style>
  .add-service-overlay {
    display: none;
    /* display: flex; */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 10px;
    position: fixed;
    height: 100vh;
    width: 100%;
    z-index: 20;
    background: rgba(0,0,0,0.8);
  }

  .sub-service-overlay {
    display: none;
    /* display: flex; */
  }

  .add-service-overlay form {
    transform: translateX(-100px);
    display: flex;
    flex-direction: column;
    background: white;
    padding: 40px;
    border-radius: 5px;

  }

  .add-service-overlay form h2 {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 36px;
    margin-top: -16px;
  }

  .add-service-overlay form .call-to-actions {
    margin-top: 20px;
    display: flex;
  }

  .add-service-overlay form input[type=submit],
  .add-service-overlay form input[type=button] {
    cursor: pointer;
    transition: all;
    font-size: 16px;
    font-weight: 600;
    height: 40px;
    padding: 0 20px;
    transition: .3s all ease-in-out;
  }

  .add-service-overlay form input[name=add-service-btn],
  .add-service-overlay form input[name=add-sub-service-btn] {
    border-radius: 5px;
    color: #fff;
    background: #B50000;
    border: none;
    outline: none;
    margin-left: auto;
  }

  .add-service-overlay form input[name=add-service-btn]:hover,
  .add-service-overlay form input[name=add-sub-service-btn]:hover {
    opacity: 0.9; 
    color: #fff;
    transform: scale(1.05);
  }

  .add-service-overlay form input[name=cancel-service-btn],
  .add-service-overlay form input[name=cancel-sub-service-btn] {
    margin-left: 10px;
    color: #363636;
    height: 40px;
    border: 1px solid #E2E2E2;
    border-radius: 5px;
    background: #F7F8FA;
    transition: .3s all ease-in-out;
  }

  .add-service-overlay form input[name=cancel-service-btn]:hover, 
  .add-service-overlay form input[name=cancel-sub-service-btn]:hover {
    background: #E2E2E2;
    transform: scale(1.05);
  }
</style>

<!-- Get Started Styles -->
<style>
  .get-started-container {
    display: grid;
    /* display: grid; */
    grid-template-rows: 0.9fr 2.4fr 1fr;
    width: 1000px;
    height: 550px;
    border-radius: 10px;
    padding: 60px 50px;
    margin: 10px;
    background: #fff;
    color: #363636;
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    box-shadow: 8px 8px 20px 1px rgba(0, 0, 0, 0.25);
    opacity: 0.9;
  }

  .logo-container {
    height: 60px;
    width: 276px;
  }

  .logo-container img {
    position: relative;
    height: 40px;
    width: 276px;
  }

  .logo-container p {
    position: relative;
    margin-top: 0px;
    left: 2px;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
  }

  .content-container h1 {
    font-style: normal;
    font-weight: bold;
    font-size: 64px;
  }

  .content-container h2 {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 36px;
    margin-top: -16px;
  }

  .content-container h2 span {
    color: #B50000;
  }

  .content-container p {
    height: 63px;
    width: 303px;
    margin-top: -16px;
    font-weight: 500;
    font-size: 14px;
    line-height: 21px;
    color: #363636;
  }

  .content-container p span {
    font-weight: 700;
  }

  .get-started-btn {
    background: #B50000;
    padding: 8px 40px;
    border-radius: 20px;
    border: none;
    outline: none;
    color: #fff;
    font-size: 16px;
    transition: all .2s ease-in-out;
  }

  .get-started-btn:hover {
    opacity: 0.9;
    color: #fff;
    animation: loading .3s ease infinite alternate;
    transition: 0.5 all ease-in-out;
    cursor: pointer;
  }

  #landing-img {
    position: absolute;
    top: 100px;
    left: 380px;
    z-index: -10;
  }

  @keyframes loading {
    from{
        transform: scale(1);
    } 
    to {
        transform: scale(1.05);
    }
  }
</style>

<!-- Form Styles -->
<style>
  .form-container * {
    box-sizing: border-box;
    /* border:1px solid black; */
  }

  .form-container {
    display: none;
    /* display: grid; */
    grid-template-rows: 0.01fr 1fr;
    width: 1000px;
    height: auto;
    border-radius: 10px;
    padding: 60px 50px;
    margin: 10px;
    background: #fff;
    color: #363636;
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    box-shadow: 8px 8px 20px 1px rgba(0, 0, 0, 0.25);
    opacity: 0.9;
  }

  .form-container .logo-container {
    height: 60px;
    width: 100%;
  }

  .form-container .logo-container img {
    position: relative;
    height: 40px;
    width: 276px;
  }

  .form-container .logo-container p:last-child {
    position: relative;
    top: 0px;
    left: 2px;
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    line-height: 19px;
  }

  .form-container .logo-container p:last-child span {
    color: #c43333;
    font-weight: 700;
  }

  .form-container form {
    margin-top: 75px;
    display: grid;
    grid-template-rows: 0.15fr 2fr;
  }

  .form-group {
    display: grid;
    grid-template-columns: .5fr 1fr;
  }

  .form-group-control h2 {
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 36px;
    letter-spacing: 0em;
  }

  .form-group-control h2 img {
    opacity: .8;
    cursor: pointer;
    margin-left: 5px;
    transition: all .2s ease-in-out;
  }

  .form-group-control h2 img:hover {
    opacity: 1;
    transform: scale(1.03);
  }

  .form-group-control .services-container,
  .form-group-control .service-areas-container {
  }

  .form-group-control .services-container .service-wrapper,
  .form-group-control .service-areas-container .service-area-wrapper {
    border: 1px solid rgba(0, 0, 0, 0.1);
    background-color: #F7F8FA;
    margin-bottom: 10px;
    border-radius: 5px;
    padding: 0 20px;
    cursor: pointer;
    transition: border .3s ease-in-out;
  }

  .form-group-control .services-container .service-wrapper:hover,
  .form-group-control .service-areas-container .service-area-wrapper:hover {
    background: #f5f5f5;
  }

  .form-group-control .services-container .service-wrapper .service,
  .form-group-control .service-areas-container .service-area-wrapper .service-area {
    height: 40px;
    display: flex;
    align-items: center;
  }

  .form-group-control .services-container .service-wrapper .service p span,
  .form-group-control .service-areas-container .service-area-wrapper .service-area p span {
    font-weight: 600;
  }

  .form-group-control .services-container .service-wrapper .service img,
  .form-group-control .service-areas-container .service-area-wrapper .service-area img {
    cursor: pointer;
    opacity: .3;
    width: 15px;
    transition: opacity .3s ease-in-out;
    margin-left: 10px;
  }

  .form-group-control .services-container .service-wrapper .service img:hover,
  .form-group-control .service-areas-container .service-area-wrapper .service-area img:hover {
    opacity: 1;
  }

  .form-group-control .services-container .service-wrapper .service img.add-btn,
  .form-group-control .service-areas-container .service-area-wrapper .service-area img.add-btn {
    margin-left: auto;
  }

  .form-group div {
    padding: 5px 0;
    padding-right: 10px;
  }

  .form-control {
    display: flex;
    flex-direction: column;
    margin-top: 15px;
  }

  .form-control select,
  .form-control input {
    width: 440px;
    height: 40px;
    margin-top: 5px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    background-color: #F7F8FA;
    outline: none;
  }

  .form-control textarea {
    width: 440px;
    height: 200px;
    margin-top: 5px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    background-color: #F7F8FA;
  }

  .form-control select:focus,
  .form-control input:focus,
  .form-control textarea:focus {
    border: 1px solid #363636;
    outline: none;
  }

  .form-control label {
    cursor: default;
  }

  .form-control label span {
    color: #c43333;
  }
</style>

<!-- Submit Group Styles -->
<style>
  .submit-group-container {
    margin-top: 40px;
  }

  .submit-group-container input[type="submit"] {
    cursor: pointer;
    margin-right: 10px;
    transition: all 
    transition: 0.5 all ease-in-out;
    font-size: 16px;
    font-weight: 600;
  }

  #buildSchemaBtn {
    height: 40px;
    width: 301px;
    border-radius: 5px;
    color: #fff;
    background: #B50000;
    border: none;
    outline: none;
  }

  #buildSchemaBtn:hover {
    opacity: 0.9; 
    color: #fff;
    animation: loading .3s ease infinite alternate;
  }

  #saveSchemaBtn {
    color: #363636;
    height: 40px;
    width: 179px;
    border: 1px solid #E2E2E2;
    border-radius: 5px;
    background: #F7F8FA;
    transition: .3s all ease-in-out;
  }

  #saveSchemaBtn:hover {
    background: #E2E2E2;
    transform: scale(1.05);
  }
</style>

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


<div class="get-started-container">
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
  <div class="button-container">
    <form method="POST">
      <input class="get-started-btn" type="submit" value="Get Started!"/>
    </form>
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
          <label>Primary Keyword <span>*</span></label>
          <input name="primaryKeyword" type="text" required>

        </div>
        <div class="form-control">
          <label>Niche <span>*</span></label>
          <input name="query" type="text" required>
        </div>
      </div>

      <div>
        <div class="form-control" style="width:97%;">
          <label>Keywords <span>*</span></label>
          <input name="keywords" type="text" style="width:100%;" required>
          <p style="font-size:10px">Separate each keyword with a comma (,)</p>
        </div>
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
        
        <!-- SERVICES HERE -->
        
        
      <div class="service-wrapper top-level" data-name="Service Name 1" data-url="Service URL 1" data-description="asdfadf"><div class="service"><p><span class="name">Service Name 1</span> - Service URL 1</p><img class="add-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/add_icon_small.svg"><img class="edit-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/edit_icon.svg"><img class="trash-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/trash_icon.svg"></div><div class="sub-services" data-key="Service URL 1"></div></div><div class="service-wrapper top-level" data-name="Service Name 2" data-url="Service URL 2" data-description="asdfasdf"><div class="service"><p><span class="name">Service Name 2</span> - Service URL 2</p><img class="add-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/add_icon_small.svg"><img class="edit-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/edit_icon.svg"><img class="trash-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/trash_icon.svg"></div><div class="sub-services" data-key="Service URL 2"><div class="service-wrapper" data-name="Service 2 Sub-service 1 Name" data-url="Service 2 Sub-service 1 Url" data-description="asdfasdf"><div class="service"><p><span class="name">Service 2 Sub-service 1 Name</span> - Service 2 Sub-service 1 Url</p><img class="add-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/add_icon_small.svg"><img class="edit-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/edit_icon.svg" style="margin-left: 5px;"><img class="trash-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/trash_icon.svg"></div><div class="sub-services" data-key="Service 2 Sub-service 1 Url" data-is-sub-service="true"></div></div><div class="service-wrapper" data-name="Service 2 Sub-service 2 Name" data-url="Service 2 Sub-service 2 Url" data-description="asdfasdf"><div class="service"><p><span class="name">Service 2 Sub-service 2 Name</span> - Service 2 Sub-service 2 Url</p><img class="add-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/add_icon_small.svg"><img class="edit-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/edit_icon.svg" style="margin-left: 5px;"><img class="trash-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/trash_icon.svg"></div><div class="sub-services" data-key="Service 2 Sub-service 2 Url" data-is-sub-service="true"><div class="service-wrapper" data-name="Service 2 Sub-service 2 Sub-service 2 Name" data-url="Service 2 Sub-service 2 Sub-service 2 Url" data-description="asdfasdf"><div class="service"><p><span class="name">Service 2 Sub-service 2 Sub-service 2 Name</span> - Service 2 Sub-service 2 Sub-service 2 Url</p><img class="edit-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/edit_icon.svg" style="margin-left: auto;"><img class="trash-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/trash_icon.svg"></div></div></div></div></div></div><div class="service-wrapper top-level" data-name="Service Name 3" data-url="Service URL 3" data-description="asdf"><div class="service"><p><span class="name">Service Name 3</span> - Service URL 3</p><img class="add-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/add_icon_small.svg"><img class="edit-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/edit_icon.svg"><img class="trash-btn" src="https://rank-schema-plugin-server.herokuapp.com/images/trash_icon.svg"></div><div class="sub-services" data-key="Service URL 3"></div></div></div>

      <button id="test-submit" type="button">Test Submit</button>

    </div>


    <div class="form-group-control">
      <h2>Areas Served <img src="<?php echo $SERVER . "images/add_icon.svg" ?>"></h2>

      <div class="service-areas-container">

      <!-- SERVICE AREA -->
        <div class="service-area-wrapper">
          <div class="service-area">
            <p><span class="name">Drainage & Grading</span> - https://mexlandscaping.com/drainage-grading/</p>
            <img class="add-btn" src="<?php echo $SERVER . "images/add_icon_small.svg" ?>">
            <img src="<?php echo $SERVER . "images/edit_icon.svg" ?>">
            <img src="<?php echo $SERVER . "images/trash_icon.svg" ?>">
          </div>
        </div>

      </div>

    </div>


    <div class="form-group-control submit-group-container">
      <input type="submit" id="buildSchemaBtn" value="Build Your Schema Markup!">
      <input type="submit" id="saveSchemaBtn" value="Save as Draft!">
    </div>

  </form>


</div>

<!-- MAIN SCRIPTS -->
<script>
  // Get Starated button
  document.querySelector('.get-started-container form').addEventListener('submit', (e) => {
    e.preventDefault()

    const sampleData = {
      submit: 'submit',
      fname: 'Francis',
      lname: 'Dela Victoria'
    }

    // Build formData object.
    const jax = new XMLHttpRequest();
    jax.open('POST', '<?php echo esc_url( plugins_url( 'process.php', __FILE__ ) ) ?>', false)

    jax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    jax.onload = function() {
      if (this.status == 200) {
        console.log(this.responseText)
      }
    }

    jax.send(JSON.stringify(sampleData))

    // console.log('send')

  })

  // Open add service form
  document.querySelector('.form-container form .open-add-service-form').addEventListener('click', () => {
    document.querySelector('.add-service-overlay').style.display = "flex";
  })

  // Add Service form cancel btn
  document.querySelector('.add-service-overlay form .call-to-actions input[name=cancel-service-btn]').addEventListener('click', () => {
    document.querySelector('.add-service-overlay form').reset()
    document.querySelector('.add-service-overlay').style.display = "none"
  })

  // Add service form submit
  document.querySelector('.add-service-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target
    const serviceData = {
      name: form.serviceName.value,
      url: form.serviceUrl.value,
      description: form.serviceDescription.value
    }

    const serviceWrapper = document.createElement('div')
    serviceWrapper.className = 'service-wrapper top-level'

    serviceWrapper.dataset.name = serviceData.name
    serviceWrapper.dataset.url = serviceData.url
    serviceWrapper.dataset.description = serviceData.description

    const service = document.createElement('div')
    service.className = 'service'
    serviceWrapper.appendChild(service)

    const text = document.createElement('p')
    text.innerHTML = `<span class="name">${serviceData.name}</span> - ${serviceData.url}`
    service.appendChild(text)

    const addBtn = document.createElement('img')
    addBtn.className = 'add-btn'
    addBtn.src = '<?php echo $SERVER . 'images/add_icon_small.svg'; ?>'
    addBtn.addEventListener('click', () => {
      // Open SubService Form
      document.querySelector('.sub-service-overlay').style.display = 'flex'
      // Set sub-service form hidden input value
      document.querySelector('.sub-service-overlay form').key.value = serviceData.url
    })
    service.appendChild(addBtn)

    const editBtn = document.createElement('img')
    editBtn.className = 'edit-btn'
    editBtn.src = '<?php echo $SERVER . 'images/edit_icon.svg'; ?>'
    editBtn.addEventListener('click', () => {
      // TODO Open Edit form
    })
    service.appendChild(editBtn)

    const trashBtn = document.createElement('img')
    trashBtn.className = 'trash-btn'
    trashBtn.src = '<?php echo $SERVER . 'images/trash_icon.svg'; ?>'
    trashBtn.addEventListener('click', () => {
      // TODO Open Confirm Dialog to trash
    })
    service.appendChild(trashBtn)

    const subServicesContainer = document.createElement('div')
    subServicesContainer.className = 'sub-services'
    subServicesContainer.dataset.key = serviceData.url
    serviceWrapper.appendChild(subServicesContainer)

    document.querySelector('.form-container form .services-container').appendChild(serviceWrapper)

    // Reset and Hide Form
    form.reset()
    document.querySelector('.add-service-overlay').style.display = "none";
  })

  // Add Sub-service form submit btn
  document.querySelector('.sub-service-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    let form = e.target

    document.querySelectorAll('.form-container form .services-container .service-wrapper .sub-services').forEach(subServicesCont => {
      if (subServicesCont.dataset.key === form.key.value) {
        
        const serviceData = {
          name: form.serviceName.value,
          url: form.serviceUrl.value,
          description: form.serviceDescription.value
        }

        const serviceWrapper = document.createElement('div')
        serviceWrapper.className = 'service-wrapper'

        serviceWrapper.dataset.name = serviceData.name
        serviceWrapper.dataset.url = serviceData.url
        serviceWrapper.dataset.description = serviceData.description

        const service = document.createElement('div')
        service.className = 'service'
        serviceWrapper.appendChild(service)

        const text = document.createElement('p')
        text.innerHTML = `<span class="name">${serviceData.name}</span> - ${serviceData.url}`
        service.appendChild(text)

        // If parent is not alreaedy a subservice show add btn
        if (!subServicesCont.dataset.isSubService) {

          const addBtn = document.createElement('img')
          addBtn.className = 'add-btn'
          addBtn.src = '<?php echo $SERVER . 'images/add_icon_small.svg'; ?>'
          addBtn.addEventListener('click', () => {

            // Open SubService Form
            document.querySelector('.sub-service-overlay').style.display = 'flex'
            // Set sub-service form hidden input value
            document.querySelector('.sub-service-overlay form').key.value = serviceData.url

          })
          service.appendChild(addBtn)

        }

        const editBtn = document.createElement('img')
        editBtn.className = 'edit-btn'
        editBtn.style.marginLeft = subServicesCont.dataset.isSubService ? 'auto' : '5px'
        editBtn.src = '<?php echo $SERVER . 'images/edit_icon.svg'; ?>'
        editBtn.addEventListener('click', () => {
          // TODO Open Edit form
        })
        service.appendChild(editBtn)

        const trashBtn = document.createElement('img')
        trashBtn.className = 'trash-btn'
        trashBtn.src = '<?php echo $SERVER . 'images/trash_icon.svg'; ?>'
        trashBtn.addEventListener('click', () => {
          // TODO Open Confirm Dialog to trash
        })
        service.appendChild(trashBtn)

        if (!subServicesCont.dataset.isSubService) {
          const subServicesContainer = document.createElement('div')
          subServicesContainer.className = 'sub-services'
          subServicesContainer.dataset.key = serviceData.url
          subServicesContainer.dataset.isSubService = true
          serviceWrapper.appendChild(subServicesContainer)
        }

        subServicesCont.appendChild(serviceWrapper)

        // Reset and Hide Form
        form.reset()
        document.querySelector('.sub-service-overlay').style.display = "none";

        return
      }
    })
  })

  // Add Sub-service form cancel btn
  document.querySelector('.sub-service-overlay form .cancel-sub-service-btn').addEventListener('click', () => {
    document.querySelector('.sub-service-overlay form').reset()
    document.querySelector('.sub-service-overlay').style.display = 'none'
  })

  function collectServicesData(callback) {
    let servicesData = []

    /* TOP LEVEL */
    document.querySelectorAll('.form-container form .services-container .top-level').forEach(topLvlService => {

      const topLvlServiceData = {
        serviceName: topLvlService.dataset.name,
        serviceUrl: topLvlService.dataset.url,
        serviceDescription: topLvlService.dataset.description
      }

      if (topLvlService.childNodes[1].hasChildNodes()) {
        topLvlServiceData.subServices = []

        /* MID LEVEL */
        topLvlService.childNodes[1].childNodes.forEach(midLvlService => {
          
          const midLvlServiceData = {
            serviceName: midLvlService.dataset.name,
            serviceUrl: midLvlService.dataset.url,
            serviceDescription: midLvlService.dataset.description
          }

          if (midLvlService.childNodes[1].hasChildNodes()) {
            midLvlServiceData.subServices = []

            /* LAST LEVEL */
            midLvlService.childNodes[1].childNodes.forEach(lastLvlService => {

              const lastLvlServiceData = {
                serviceName: lastLvlService.dataset.name,
                serviceUrl: lastLvlService.dataset.url,
                serviceDescription: lastLvlService.dataset.description
              }

              midLvlServiceData.subServices.push(lastLvlServiceData)
              
            })

          }

          topLvlServiceData.subServices.push(midLvlServiceData)
        })
      }
      
      servicesData.push(topLvlServiceData)

    })

    callback(servicesData)
  }
</script>

<?php
  // If config.json available, proceed to main form
  if ($CONFIG_AVAILABLE) {
    echo "
      <script type=\"text/javascript\">
      document.querySelector('.get-started-container').style.display = 'none';
      document.querySelector('.form-container').style.display = 'grid';
      </script>
    ";
  }

  // Get Started Button
  if (isset($_POST['data-test'])) {
    echo 'It works!';
  }
?>