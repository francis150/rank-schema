<!-- Get Started Styles -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  * {
    box-sizing: border-box;
  }

  .get-started-container {
    display: grid;
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
    text-decoration: none;
  }

  .get-started-btn:hover {
    opacity: 0.95;
    color: #fff;
    transform: scale(1.01);
    transition: 0.5 all ease-in-out;
    cursor: pointer;
  }

  #landing-img {
    position: absolute;
    top: 100px;
    left: 380px;
    z-index: -10;
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
  .submit-group-container {}

  .submit-group-container input[type="submit"] {
    cursor: pointer;
    margin-left: 10px;
  }

  #buildSchemaBtn {
    height: 40px;
    width: 301px;
    border-radius: 10px;
    color: #fff;
    background: #B50000;
    border: none;
    outline: none;
  }

  #saveSchemaBtn {
    height: 40px;
    width: 179px;
    border: 1px solid #E2E2E2;
    border-radius: 10px;
    background: #F7F8FA;
  }
</style>


<div class="get-started-container">
  <div class="logo-container">
    <img id="rt-logo" src="***REMOVED***images/logo.png">
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
      <input class="get-started-btn" type="submit" name="btn" value="Get Started!" onclick="return true;" />
    </form>
  </div>

  <img id="landing-img" src="***REMOVED***images/landing_illustration.svg">
</div>


<div class="form-container">

  <div class="logo-container">
    <img id="rt-logo" src="***REMOVED***images/logo.png">
    <p>Schema Markup</p>
    <p>Fill out this form as much as possible so we can start building your <span>Advance Schema Code!</span></p>
  </div>

  <form method="POST">
    <div class="form-group-control">

      <div class="form-control">
        <label for="schemaType">Schema Type <span>*</span></label>
        <select id="schemaType" autocomplete="on" name="schemaType" required>
          <option value="AnimalShelter">AnimalShelter</option>

          <option value="ArchiveOrganization">ArchiveOrganization</option>

          <option value="AutomotiveBusiness">AutomotiveBusiness</option>

          <option value="AutoBodyShop">— AutoBodyShop</option>

          <option value="AutoDealer">— AutoDealer</option>

          <option value="AutoPartsStore">— AutoPartsStore</option>

          <option value="AutoRental">— AutoRental</option>

          <option value="AutoRepair">— AutoRepair</option>

          <option value="AutoWash">— AutoWash</option>

          <option value="GasStation">— GasStation</option>

          <option value="MotorcycleDealer">— MotorcycleDealer</option>

          <option value="MotorcycleRepair">— MotorcycleRepair</option>

          <option value="ChildCare">ChildCare</option>

          <option value="Dentist">Dentist</option>

          <option value="DryCleaningOrLaundry">DryCleaningOrLaundry</option>

          <option value="EmergencyService">EmergencyService</option>

          <option value="FireStation">— FireStation</option>

          <option value="Hospital">— Hospital</option>

          <option value="PoliceStation">— PoliceStation</option>

          <option value="EmploymentAgency">EmploymentAgency</option>

          <option value="EntertainmentBusiness">EntertainmentBusiness</option>

          <option value="AdultEntertainment">— AdultEntertainment</option>

          <option value="AmusementPark">— AmusementPark</option>

          <option value="ArtGallery">— ArtGallery</option>

          <option value="Casino">— Casino</option>

          <option value="ComedyClub">— ComedyClub</option>

          <option value="MovieTheater">— MovieTheater</option>

          <option value="NightClub">— NightClub</option>

          <option value="FinancialService">FinancialService</option>

          <option value="AccountingService">— AccountingService</option>

          <option value="AutomatedTeller">— AutomatedTeller</option>

          <option value="BankOrCreditUnion">— BankOrCreditUnion</option>

          <option value="InsuranceAgency">— InsuranceAgency</option>

          <option value="FoodEstablishment">FoodEstablishment</option>

          <option value="Bakery">— Bakery</option>

          <option value="BarOrPub">— BarOrPub</option>

          <option value="Brewery">— Brewery</option>

          <option value="CafeOrCoffeeShop">— CafeOrCoffeeShop</option>

          <option value="Distillery">— Distillery</option>

          <option value="FastFoodRestaurant">— FastFoodRestaurant</option>

          <option value="IceCreamShop">— IceCreamShop</option>

          <option value="Restaurant">— Restaurant</option>

          <option value="Winery">— Winery</option>

          <option value="GovernmentOffice">GovernmentOffice</option>

          <option value="PostOffice">— PostOffice</option>

          <option value="HealthAndBeautyBusiness">HealthAndBeautyBusiness</option>

          <option value="BeautySalon">— BeautySalon</option>

          <option value="DaySpa">— DaySpa</option>

          <option value="HairSalon">— HairSalon</option>

          <option value="HealthClub">— HealthClub</option>

          <option value="NailSalon">— NailSalon</option>

          <option value="TattooParlor">— TattooParlor</option>

          <option value="HomeAndConstructionBusiness">HomeAndConstructionBusiness</option>

          <option value="Electrician">— Electrician</option>

          <option value="GeneralContractor">— GeneralContractor</option>

          <option value="HVACBusiness">— HVACBusiness</option>

          <option value="HousePainter">— HousePainter</option>

          <option value="Locksmith">— Locksmith</option>

          <option value="MovingCompany">— MovingCompany</option>

          <option value="Plumber">— Plumber</option>

          <option value="RoofingContractor">— RoofingContractor</option>

          <option value="InternetCafe">InternetCafe</option>

          <option value="LegalService">LegalService</option>

          <option value="Attorney">— Attorney</option>

          <option value="Notary">— Notary</option>

          <option value="Library">Library</option>

          <option value="LodgingBusiness">LodgingBusiness</option>

          <option value="BedAndBreakfast">— BedAndBreakfast</option>

          <option value="Campground">— Campground</option>

          <option value="Hostel">— Hostel</option>

          <option value="Hotel">— Hotel</option>

          <option value="Motel">— Motel</option>

          <option value="Resort">— Resort</option>

          <option value="SkiResort">—— SkiResort</option>

          <option value="MedicalBusiness">MedicalBusiness</option>

          <option value="CommunityHealth">— CommunityHealth</option>

          <option value="Dentist">— Dentist</option>

          <option value="Dermatology">— Dermatology</option>

          <option value="DietNutrition">— DietNutrition</option>

          <option value="Emergency">— Emergency</option>

          <option value="Geriatric">— Geriatric</option>

          <option value="Gynecologic">— Gynecologic</option>

          <option value="MedicalClinic">— MedicalClinic</option>

          <option value="Midwifery">— Midwifery</option>

          <option value="Nursing">— Nursing</option>

          <option value="Obstetric">— Obstetric</option>

          <option value="Oncologic">— Oncologic</option>

          <option value="Optician">— Optician</option>

          <option value="Optometric">— Optometric</option>

          <option value="Otolaryngologic">— Otolaryngologic</option>

          <option value="Pediatric">— Pediatric</option>

          <option value="Pharmacy">— Pharmacy</option>

          <option value="Physician">— Physician</option>

          <option value="Physiotherapy">— Physiotherapy</option>

          <option value="PlasticSurgery">— PlasticSurgery</option>

          <option value="Podiatric">— Podiatric</option>

          <option value="PrimaryCare">— PrimaryCare</option>

          <option value="Psychiatric">— Psychiatric</option>

          <option value="PublicHealth">— PublicHealth</option>

          <option value="ProfessionalService">ProfessionalService</option>

          <option value="RadioStation">RadioStation</option>

          <option value="RealEstateAgent">RealEstateAgent</option>

          <option value="RecyclingCenter">RecyclingCenter</option>

          <option value="SelfStorage">SelfStorage</option>

          <option value="ShoppingCenter">ShoppingCenter</option>

          <option value="SportsActivityLocation">SportsActivityLocation</option>

          <option value="BowlingAlley">— BowlingAlley</option>

          <option value="ExerciseGym">— ExerciseGym</option>

          <option value="GolfCourse">— GolfCourse</option>

          <option value="HealthClub">— HealthClub</option>

          <option value="PublicSwimmingPool">— PublicSwimmingPool</option>

          <option value="SkiResort">— SkiResort</option>

          <option value="SportsClub">— SportsClub</option>

          <option value="StadiumOrArena">— StadiumOrArena</option>

          <option value="TennisComplex">— TennisComplex</option>

          <option value="Store">Store</option>

          <option value="AutoPartsStore">— AutoPartsStore</option>

          <option value="BikeStore">— BikeStore</option>

          <option value="BookStore">— BookStore</option>

          <option value="ClothingStore">— ClothingStore</option>

          <option value="ComputerStore">— ComputerStore</option>

          <option value="ConvenienceStore">— ConvenienceStore</option>

          <option value="DepartmentStore">— DepartmentStore</option>

          <option value="ElectronicsStore">— ElectronicsStore</option>

          <option value="Florist">— Florist</option>

          <option value="FurnitureStore">— FurnitureStore</option>

          <option value="GardenStore">— GardenStore</option>

          <option value="GroceryStore">— GroceryStore</option>

          <option value="HardwareStore">— HardwareStore</option>

          <option value="HobbyShop">— HobbyShop</option>

          <option value="HomeGoodsStore">— HomeGoodsStore</option>

          <option value="JewelryStore">— JewelryStore</option>

          <option value="LiquorStore">— LiquorStore</option>

          <option value="MensClothingStore">— MensClothingStore</option>

          <option value="MobilePhoneStore">— MobilePhoneStore</option>

          <option value="MovieRentalStore">— MovieRentalStore</option>

          <option value="MusicStore">— MusicStore</option>

          <option value="OfficeEquipmentStore">— OfficeEquipmentStore</option>

          <option value="OutletStore">— OutletStore</option>

          <option value="PawnShop">— PawnShop</option>

          <option value="PetStore">— PetStore</option>

          <option value="ShoeStore">— ShoeStore</option>

          <option value="SportingGoodsStore">— SportingGoodsStore</option>

          <option value="TireShop">— TireShop</option>

          <option value="ToyStore">— ToyStore</option>

          <option value="WholesaleStore">— WholesaleStore</option>

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
            <input type="text" required>

          </div>


          <div class="form-control">
            <label>Slogan <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>Street Address <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>State <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>Business Email <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>Description <span>*</span></label>
            <textarea cols="15" rows="10" required></textarea>

          </div>
        </div>

        <div>
          <div class="form-control">
            <label>Owner’s Name</label>
            <input type="text">

          </div>


          <div class="form-control">
            <label>Country <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>City/Town <span>*</span></label>
            <input type="text" required>
          </div>

          <div class="form-control">
            <label>ZIP Code <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>Business Contact Number <span>*</span></label>
            <input type="text" required>

          </div>

          <div class="form-control">
            <label>Disambiguating Description<span>*</span></label>
            <textarea cols="15" rows="10" required></textarea>
          </div>
        </div>

      </div>
    </div>


    <div class="form-group-control">
      <h2>Site Info</h2>

      <div class="form-group">

        <div class="form-control">
          <label>Image URL<span>*</span></label>
          <input type="text" required>

        </div>


        <div class="form-control">
          <label>About Us Page URL</label>
          <input type="text">

        </div>


      </div>

      <div class="form-group">

        <div class="form-control">
          <label>Privacy Policy URL</label>
          <input type="text">
        </div>

        <div class="form-control">
          <label>Contact Us Page URL</label>
          <input type="text">
        </div>


      </div>


    </div>

    <div class="form-group-control">
      <h2>SEO</h2>

      <div class="form-group">
        <div class="form-control">
          <label>Primary Keyword <span>*</span></label>
          <input type="text" required>

        </div>
        <div class="form-control">
          <label>Niche <span>*</span></label>
          <input type="text" required>
        </div>
      </div>

      <div>
        <div class="form-control" style="width:97%;">
          <label>Keywords <span>*</span></label>
          <input type="text" style="width:100%;" required>
          <p style="font-size:10px">Separate each keyword with a comma (,)</p>
        </div>
        <div class="form-control" style="width:97%;">
          <label>Backlinks/Citations</label>
          <textarea style="width:100%;"></textarea>
          <p style="font-size:10px">Separate each link by line.</p>

        </div>
      </div>
    </div>


    <div class="form-group-control">
      <h2>Services <img style="cursor:pointer; margin-left:10px;"
          src="***REMOVED***images/add_icon.svg"></h2>
    </div>


    <div class="form-group-control">
      <h2>Areas Served <img style="cursor:pointer; margin-left:10px;"
          src="***REMOVED***images/add_icon.svg"></h2>
    </div>


    <div class="form-group-control submit-group-container">
      <input type="submit" id="buildSchemaBtn" value="Build Your Schema Markup!">
      <input type="submit" id="saveSchemaBtn" value="Save as Draft!">
    </div>

  </form>


</div>


<?php
    if(isset($_POST['btn'])){
        echo "
            <script type=\"text/javascript\">
            document.querySelector('.get-started-container').style.display = 'none';

            document.querySelector('.form-container').style.display = 'grid';
            </script>
        ";
     }
  ?>