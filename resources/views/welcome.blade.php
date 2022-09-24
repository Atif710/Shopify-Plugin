<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Plugin</title>
    <style>
        body {
            text-align: center;
        }

        h5 {
            font-size: 15px;
        }

        .checkbox {
            height: 50px;
            width: 20px;
            display: inline-block;
            margin-bottom: 0;
            margin-top: 0;
            vertical-align: middle;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Plugin With Laravel</h1>

    {{-- Bootstrap Model --}}

    <!-- Button trigger modal -->
    <button style="margin-top: 30px;" type="button" class="btn btn-primary btn-lg" data-toggle="modal"
        data-target="#plugin">
        Graveren
    </button>

    <!-- Modal -->
    <div class="modal fade" id="plugin" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Graveren</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>De gravure plaatsen wij aan de voorzijde van het sieraad GRATIS</h5>
                    <input type="checkbox" class="checkbox" id="myCheck" onclick="myFunction()">
                    <label for="vehicle1">
                        <span>Minimum 4 Character's</span>
                    </label>
                    <p id="font" style="display:none">
                        <label style="padding-top: 20px;" for="">Enter Name</label>
                        <textarea class="form-control" oninput="getname()" id="name" cols="2" rows="2"></textarea><br>
                        <label for="">LetterType</label>
                        <select class="form-control" name="font-names" id="font-names"
                            onchange="changeFont(this.value);">
                            <option value="selector">Selector..</option>
                            <option value="Calibri Light">Calibri Light </option>
                            <option value="Bodoni MT Black">Bodoni MT Black</option>
                            <option value="Chiller">Chiller</option>
                            <option value="Algerian">Algerian</option>
                            <option value="Arial Black">Arial Black</option>
                        </select>
                    </p>
                    <div id="info"></div>

                    <hr>

                    {{-- Second Checkbox --}}

                    <h5>Premium Category With Extra $5,00/</h5>
                    <input type="checkbox" class="checkbox" id="premium" onclick="mypremiumFunction()">
                    <label for="vehicle1">
                        <span>Minimum 4 Character's</span>
                    </label>
                    <hr>
                    <p id="premiumfont" style="display:none">
                        <label style="padding-top: 20px;" for="">Enter Name</label>
                        <textarea class="form-control" oninput="showname()" id="premiumname" cols="2" rows="2"></textarea><br>
                        <label for="">LetterType</label>
                        <select class="form-control" name="premiumfont-names" id="premiumfont-names"
                            onchange="changepremiumFont(this.value);">
                            <option value="selector">Selector..</option>
                            <option value="Calibri Light">Calibri Light </option>
                            <option value="Bodoni MT Black">Bodoni MT Black</option>
                            <option value="Chiller">Chiller</option>
                            <option value="Algerian">Algerian</option>
                            <option value="Arial Black">Arial Black</option>
                        </select>
                    </p>
                    <div id="premiuminfo"></div>
                    
                     <h5 style="position: absolute;">Price</h5>
                    <p style="margin-left: 350px; margin-top:25px;">$149,95</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    {{-- First Checkbox --}}
    <script>
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("font");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>



    <script>
        function getname() {
            let name = document.getElementById('name').value
            document.getElementById('info').innerHTML = name
        }
    </script>


    <script type="text/javascript">
        function changeFont(name) {
            document.body.style.fontFamily = name;
        }
    </script>




     {{-- Second Check Box --}}
    <script>
        function mypremiumFunction() {
            var checkBox = document.getElementById("premium");
            var text = document.getElementById("premiumfont");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>

    <script>
        function showname() {
            let name = document.getElementById('premiumname').value
            document.getElementById('premiuminfo').innerHTML = name
        }
    </script>

    <script type="text/javascript">
        function changepremiumFont(name) {
            document.body.style.fontFamily = name;
        }
    </script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
