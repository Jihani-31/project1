<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/searchByCriteria.css">
    <!-- <script src="../Js/searchByCriteria.js"></script> -->
</head>

<body>
    <script src="../Js/searchByCriteria.js"></script>
    <div class='criteria'>
        <form>

            <div class='age-field'>
                <label class='age-label'>Age:</label>
                <input class='first'></input><span class='to'>to</span>
                <input class='second'></input>
            </div>

            <div class='job'>
                <label class='job-label'>Job:</label>
                <div class='radio1'>
                    <input type="radio" id="have" name="job" value="have">
                    <label for="have">Have</label>
                </div>
                <div class='radio2'>
                    <input type="radio" id="no" name="job" value="no">
                    <label for="no">No</label>
                </div>

                <div class='job-type'>
                    <label class='job-type-label' for="job-type">Job Type:</label>
                    <select class='job-types' name="job-type" id="job-type">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
            <div class='prolonged'>
                <label class='prolonged-label'>Prolonged Disorders/Diseases:</label>
                <div class='radio1'>
                    <input type="radio" id="have-pro" name="prolonged" value="have">
                    <label for="have-pro">Have</label>
                </div>
                <div class='radio2'>
                    <input type="radio" id="no-pro" name="prolonged" value="no">
                    <label for="no-pro">No</label>
                </div>
            </div>

            <div class='income'>
                <div class='age-field'>
                    <label class='income-label'>Gross Income:</label>
                    <input class='first-income'></input><span class='to'>to</span>
                    <input class='second-income'></input>
                </div>
            </div>

            <div class="multiselect">
                <label class='multi-select-label' for="current-funds">Current Funds/Donations:</label>
                <div class="selectBox" onclick="showCheckboxes()">
                    <select>
                        <option>Select an option</option>
                    </select>
                    <div class="overSelect"></div>
                </div>
                <div id="checkboxes">
                    <label for="one">
                        <input type="checkbox" id="one" />First checkbox</label>
                    <label for="two">
                        <input type="checkbox" id="two" />Second checkbox</label>
                    <label for="three">
                        <input type="checkbox" id="three" />Third checkbox</label>
                </div>
            </div>
            <div class='button'>

                <button>Search</button>
            </div>

        </form>
    </div>
</body>

</html>