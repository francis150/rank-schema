<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* NOTE ADD SERVICE/SUB-SERVICE OVERLAY */
  .add-service-overlay {
    display: none;
    /* display: flex; */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 10px;
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100%;
    z-index: 20;
    background: rgba(255,255,255,0.85);
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
    box-shadow: 8px 8px 20px 1px rgba(0, 0, 0, 0.25);
    border: 1px solid #DBDBDB;
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

  /* NOTE ADD SERVICE AREA OVERLAY */
  .add-service-area-overlay {
    display: none;
    /* display: flex; */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 10px;
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100%;
    z-index: 20;
    background: rgba(255,255,255,0.85);
  }

  .add-service-area-overlay form {
    transform: translateX(-100px);
    display: flex;
    flex-direction: column;
    background: white;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 8px 8px 20px 1px rgba(0, 0, 0, 0.25);
    border: 1px solid #DBDBDB;
  }

  .add-service-area-overlay form .call-to-actions {
    margin-top: 20px;
    display: flex;
  }

  .add-service-area-overlay form input[type=submit],
  .add-service-area-overlay form input[type=button] {
    cursor: pointer;
    transition: all;
    font-size: 16px;
    font-weight: 600;
    height: 40px;
    padding: 0 20px;
    transition: .3s all ease-in-out;
  }

  .add-service-area-overlay form input[name=add-service-area-btn] {
    border-radius: 5px;
    color: #fff;
    background: #B50000;
    border: none;
    outline: none;
    margin-left: auto;
  }

  .add-service-area-overlay form input[name=add-service-area-btn]:hover {
    opacity: 0.9; 
    color: #fff;
    transform: scale(1.05);
  }

  .add-service-area-overlay form input[name=cancel-service-area-btn] {
    margin-left: 10px;
    color: #363636;
    height: 40px;
    border: 1px solid #E2E2E2;
    border-radius: 5px;
    background: #F7F8FA;
    transition: .3s all ease-in-out;
  }

  .add-service-area-overlay form input[name=cancel-service-area-btn]:hover {
    background: #E2E2E2;
    transform: scale(1.05);
  }

  /*NOTE Get Started Styles */
  .get-started-container {
    display: none;
    /* display: flex; */
    width: 1000px;
    border-radius: 10px;
    padding: 70px 50px;
    margin: 10px;
    background: #fff;
    color: #363636;
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    box-shadow: 8px 8px 20px 1px rgba(0, 0, 0, 0.25);
    opacity: 0.9;
  }

  .get-started-container .left {
    display: flex;
    flex-direction: column;
    row-gap: 40px;
  }

  .get-started-container .left .logo-container {
    height: 60px;
    width: 276px;
  }

  .get-started-container .left .logo-container img {
    position: relative;
    height: 40px;
    width: 276px;
  }

  .get-started-container .left .logo-container p {
    position: relative;
    margin-top: 0px;
    left: 2px;
    font-size: 14px;
    font-weight: 700;
    line-height: 21px;
  }

  .get-started-container .left .content-container h1 {
    font-style: normal;
    font-weight: bold;
    font-size: 64px;
  }

  .get-started-container .left .content-container h2 {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 36px;
    margin-top: -16px;
  }

  .get-started-container .left .content-container h2 span {
    color: #B50000;
  }

  .get-started-container .left .content-container p {
    height: 63px;
    width: 303px;
    margin-top: -16px;
    font-weight: 500;
    font-size: 14px;
    line-height: 21px;
    color: #363636;
  }

  .get-started-container .left .content-container p span {
    font-weight: 700;
  }

  .get-started-container .left .get-started-btn {
    background: #B50000;
    padding: 8px 40px;
    border-radius: 20px;
    border: none;
    outline: none;
    color: #fff;
    font-size: 16px;
    transition: all .2s ease-in-out;
    width: 50%;
  }

  .get-started-btn:hover {
    opacity: 0.9;
    color: #fff;
    animation: loading .3s ease infinite alternate;
    transition: 0.5 all ease-in-out;
    cursor: pointer;
  }

  .get-started-container img#landing-img {
    position: absolute;
    z-index: -50;
    transform: translateX(300px);
  }

  @keyframes loading {
    from{
        transform: scale(1);
    } 
    to {
        transform: scale(1.05);
    }
  }

  /* NOTE Form Styles */
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

  /* Submit Group Styles */
  .submit-group-container {
    margin-top: 40px;
  }

  .submit-group-container input[type="submit"],
  .submit-group-container input[type="button"] {
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

  /*NOTE Building Markup Code */
  .building-load {
    display: none;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 600px;
    height: 334px;
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

  .building-load .brand {
    flex-direction: column;
    margin-bottom: auto;
  }

  .building-load .brand img {
    height: 40px;
    width: 276px;
  }

  .building-load .brand p {
    margin-top: 0;
    text-align: center;
    font-size: 14px;
    font-weight: 700;
  }

  .building-load .content{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
  }

  .building-load .content h2 {
      text-align: center;
      font-size: 14px;
      font-weight: 500;
  }

  .building-load .content h2 b {
      color: #B50000;
  }

  .building-load .content .loader {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 100px;
  }

  .building-load .content .loader .indicator {
      background: #B50000;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      animation: building .6s ease infinite alternate;
  }

  .building-load .content .loader .middle {
      animation-delay: .2s;
  }

  .building-load .content .loader .last {
      animation-delay: .4s;
  }

  @keyframes building {
    from{
        transform: translateY(0);
    } 
    to {
        transform: translateY(-20px);
    }
  }

  /* Dashboard */
  .dashboard {
    display: none;
    /* display: flex; */
    row-gap: 20px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    justify-content: space-between;
    width: 600px;
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

  .dashboard * {
    margin: 0;
    padding: 0;
  }

  .dashboard .brand {
    flex-direction: column;
  }

  .dashboard .brand img {
    height: 40px;
    width: 276px;
  }

  .dashboard .brand p {
    margin-top: 0;
    text-align: center;
    font-size: 14px;
    font-weight: 700;
  }

  .dashboard .text .title{
    font-weight: bold;
    font-size: 18px;
    text-align: center;
    line-height: 30px;
    color: #B50000;
    margin-bottom: 0;
  }

  .dashboard .text p {
    text-align: center;
  }

  .dashboard .status {
    font-weight: 900;
    font-size: 24px;
    color: #389D48;
    animation: loading .4s ease infinite alternate;
  }

  .dashboard button {
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    color: #363636;
    height: 40px;
    border: 1px solid #E2E2E2;
    border-radius: 5px;
    background: #F7F8FA;
    transition: .2s all ease-in-out;
    padding: 0 70px;
  }

  .dashboard button:hover {
    transform: scale(1.05);
    background: #E2E2E2 ;
  }

</style>