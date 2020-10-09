<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/addPeople.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="../Js/addPeople.js"></script>
</head>


<body>
    <div class='disaster-form'>

        <form class='form' id="addPeopleForm" method="post" action="./login.php">

            <div class="row">
                <div class="col-25">
                    <label>Officer ID:</label>
                </div>
                <div class="col-70">
                    <input class="officerId errorMsg col-100" name="officerId" id="officerId"></input>
                </div>
            </div>
            <div class="row">
                <label class="col-25" for="nid">NID:</label>
                <input class='nid col-70 errorMsg' id='nid'></input>
            </div>
            <div class="row">
                <label class="col-25" for="name">Name:</label>
                <input class=" name col-70 errorMsg" id="name"></input>
            </div>
            
            <div class="birth row">
                <label class="col-25">Birth Date:</label>
                <input class="col-25" id='birthDate'></input>
                <label class="col-25">Birth Certificate No:</label>
                <input class='col-25' id='birthNo'></input>
            </div>

            <div class="row">
                <label class="col-25">Email:</label>
                <input class="col-70" id="email"></input>
            </div>
            <div class="row">
                <label class="col-25">Region:</label>
                <select class="col-70" name="region" id="region">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class='Job-set row'>
                <label class='col-25' for="job">Job:</label>
                <input class="col-25" id='job'></input>
                <label for='col-25'>Job Type:</label>
                <input class='col-25' id='job-type'></input>
            </div>

            <div class="row">
                <label class="col-25" for="civil-status">Civil Status:</label>
                <input class="col-70" id="civil-status"></input>
            </div>

            <div class="row">
                <label class="col-25" for="civil-status">Civil Status:</label>
                <input class="col-70" id="civil-status"></input>
            </div>
            
            <div class="row">
                <label class="col-25" for="phone-number">Phone Number:</label>
                <input class="col-70" id='phone-number'></input>
            </div>
            


            <div class='phone-set row'>
                <label class='col-25' for="phone-number">Phone Number:</label>
                <input class="col-25" id='phone-number'></input>

                <label class = "col-25" for="trustee">Trustee:</label> 
                <select  class="col-25" name="trustee" id="trustee">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>

            </div>


            <div class='buttons row'>

                <button type="submit" class='confirm-button'>Confirm</button>
                <button class='view-list-button'>View List</button>
            </div>


        </form>

    </div>



</body>

</html>