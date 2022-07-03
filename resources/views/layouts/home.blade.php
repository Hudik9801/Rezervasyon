<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Disable Previous Date JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
        }

        h3 {
            margin: 0 auto;
            width: 50%;
        }

        span {
            color: red;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=time_a], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=time_b], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=date], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
<h3>Reservation Form</h3>


<div class="container">
    <form role="form" action="{{route('rezervasion_add')}}" method="post">
        @csrf
        <label>Full Name<span>*</span></label>
        <input type="text" id="name" name="name" placeholder="Your name.." required>

        <label>Phone Number<span>*</span></label>
        <input type="text" id="pnumber" name="phone" placeholder="11 Digit phone number.."  >

        <label>Email Addres<span>*</span></label>
        <input type="text" id="Email" name="Email" placeholder="Your email adress.." required>

        <label>Date<span>*</span></label>
        <input id="date" name="r_date" type="date" required>
        <div class="form-group">
            <label>Time 1</label>
            <select id="text" name="time_a"  class="form-control" required>

                    <option >Select</option>
                    <option id="12"  >12:00 PM</option>
                    <option id="12_3" >12:30 PM</option>
                    <option id="1" >01:00 PM</option>
                    <option id="1_3" >01:30 PM</option>
                    <option id="2" >02:00 PM</option>
                    <option id="2_3" >02:30 PM</option>
                    <option id="3" >03:00 PM</option>
                    <option id="3_3" >03:30 PM</option>
                    <option id="4" >04:00 PM</option>
                    <option id="4_3" >04:30 PM</option>
                    <option id="5" >05:00 PM</option>
                    <option id="5_3" >05:30 PM</option>
                    <option id="6" >06:00 PM</option>
                    <option id="6_3" >06:30 PM</option>
                    <option id="7" >07:00 PM</option>
                    <option id="7_3" >07:30 PM</option>
                    <option id="8" >08:00 PM</option>
                    <option id="8_3" >08:30 PM</option>
                    <option id="9" >09:00 PM</option>
                    <option id="9_3" >09:30 PM</option>
                    <option id="10" >10:00 PM</option>
                    <option id="10_3" >10:30 PM</option>

            </select>


        </div>

       <!-- <div class="form-group">

            <label>Time 2</label>
            <select id="text" name="time_b"  class="form-control" required>
                <option id="12" value="">Select</option>
                <option  id="12_3" value="12:00 PM">12:00 PM</option>
                <option value="12:30 PM">12:30 PM</option>
                <option value="1:00 PM">1:00 PM</option>
                <option value="1:30 PM">1:30 PM</option>
                <option value="2:00 PM">2:00 PM</option>
                <option value="2:30 PM">2:30 PM</option>
                <option value="3:00 PM">3:00 PM</option>
                <option value="3:30 PM">3:30 PM</option>
                <option value="4:00 PM">4:00 PM</option>
                <option value="4:30 PM">4:30 PM</option>
                <option  value="5:00 PM">5:00 PM</option>
                <option value="5:30 PM">5:30 PM</option>
                <option value="6:00 PM">6:00 PM</option>
                <option value="6:30 PM">6:30 PM</option>
                <option value="7:00 PM">7:00 PM</option>
                <option value="7:30 PM">7:30 PM</option>
                <option value="8:00 PM">8:00 PM</option>
                <option value="8:30 PM">8:30 PM</option>
                <option value="9:00 PM">9:00 PM</option>
                <option value="9:30 PM">9:30 PM</option>
                <option value="10:00 PM">10:00 PM</option>
                <option value="10:30 PM">10:30 PM</option>
            </select>
        </div>-->
        <label>Number Of Person<span>*</span></label>
        <select id="person" name="person" required>
            <option >Select</option>
            <option id="2k" >2</option>
            <option id="4k" >4</option>
            <option id="6k" >6</option>

        </select>

        <label>Reservation Note</label>
        <textarea name="note" class="form-control" rows="3" placeholder="Note ..."></textarea>


        <input type="submit" value="Submit">

    </form>
</div>
<!-- Disable Previous Date -->
<script language="javascript">
    var currentDt = new Date();
    var dd = String(currentDt.getDate()).padStart(2, '0');
    var mm = String(currentDt.getMonth() + 1).padStart(2, '0');
    var yyyy = currentDt.getFullYear();

    currentDt = yyyy + '-' + mm + '-' + dd;
    $('#date').attr('min',currentDt);
</script>



</body>
</html>

<script>
    <!--12için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployee") == "12:00PM")
            $("#employed_v0").prop("checked", true);
        else
            $("#employed_v1").prop("checked", true);

        if(localStorage.getItem("itmEmployee") == "12:00PM")
            $("#12").prop("disabled", false);
        else
            $("#12").prop("disabled", true);

        $("#12").val(localStorage.getItem("itmTest"));

        $("[name=employed]").on("change", function(){
            localStorage.setItem("itmEmployee", $(this).val());

            if($(this).val() == "12:00PM")
                $("#12").prop("disabled", false);
            else
                $("#12").prop("disabled", true);
        });

        $("#12").on("change", function(){
            localStorage.setItem("itmTest", $(this).val());
        });
    });
    <!--12.30 için-->

    $(document).ready(function(){
        if(localStorage.getItem("itmEmployes") == "Yes")
            $("#employed_v2").prop("checked", true);
        else
            $("#employed_v3").prop("checked", true);

        if(localStorage.getItem("itmEmployes") == "Yes")
            $("#12_3").prop("disabled", false);
        else
            $("#12_3").prop("disabled", true);

        $("#12_3").val(localStorage.getItem("itmTests"));

        $("[name=employedd]").on("change", function(){
            localStorage.setItem("itmEmployes", $(this).val());

            if($(this).val() == "Yes")
                $("#12_3").prop("disabled", false);
            else
                $("#12_3").prop("disabled", true);
        });

        $("#12_3").on("change", function(){
            localStorage.setItem("itmTests", $(this).val());
        });
    });

    <!--1için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye1") == "Yes")
            $("#employed_v4").prop("checked", true);
        else
            $("#employed_v5").prop("checked", true);

        if(localStorage.getItem("itmEmploye1") == "Yes")
            $("#1").prop("disabled", false);
        else
            $("#1").prop("disabled", true);

        $("#1").val(localStorage.getItem("itmTest1"));

        $("[name=employed1]").on("change", function(){
            localStorage.setItem("itmEmploye1", $(this).val());

            if($(this).val() == "Yes")
                $("#1").prop("disabled", false);
            else
                $("#1").prop("disabled", true);
        });

        $("#1").on("change", function(){
            localStorage.setItem("itmTest1", $(this).val());
        });
    });


    <!--1a3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeq") == "Yes")
            $("#employed_v6").prop("checked", true);
        else
            $("#employed_v7").prop("checked", true);

        if(localStorage.getItem("itmEmployeq") == "Yes")
            $("#1_3").prop("disabled", false);
        else
            $("#1_3").prop("disabled", true);

        $("#1_3").val(localStorage.getItem("itmTestw"));

        $("[name=employed13]").on("change", function(){
            localStorage.setItem("itmEmployeq", $(this).val());

            if($(this).val() == "Yes")
                $("#1_3").prop("disabled", false);
            else
                $("#1_3").prop("disabled", true);
        });

        $("#1_3").on("change", function(){
            localStorage.setItem("itmTestw", $(this).val());
        });
    });

    <!--2için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye2") == "Yes")
            $("#employed_v8").prop("checked", true);
        else
            $("#employed_v9").prop("checked", true);

        if(localStorage.getItem("itmEmploye2") == "Yes")
            $("#2").prop("disabled", false);
        else
            $("#2").prop("disabled", true);

        $("#2").val(localStorage.getItem("itmTest2"));

        $("[name=employed2]").on("change", function(){
            localStorage.setItem("itmEmploye2", $(this).val());

            if($(this).val() == "Yes")
                $("#2").prop("disabled", false);
            else
                $("#2").prop("disabled", true);
        });

        $("#2").on("change", function(){
            localStorage.setItem("itmTest2", $(this).val());
        });

    });
    <!--2.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployet") == "Yes")
            $("#employed_v10").prop("checked", true);
        else
            $("#employed_v11").prop("checked", true);

        if(localStorage.getItem("itmEmployet") == "Yes")
            $("#2_3").prop("disabled", false);
        else
            $("#2_3").prop("disabled", true);

        $("#2_3").val(localStorage.getItem("itmTestt"));

        $("[name=employed23]").on("change", function(){
            localStorage.setItem("itmEmployet", $(this).val());

            if($(this).val() == "Yes")
                $("#2_3").prop("disabled", false);
            else
                $("#2_3").prop("disabled", true);
        });

        $("#2_3").on("change", function(){
            localStorage.setItem("itmTestt", $(this).val());
        });

    });

    <!--3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployez") == "Yes")
            $("#employed_v12").prop("checked", true);
        else
            $("#employed_v13").prop("checked", true);

        if(localStorage.getItem("itmEmployez") == "Yes")
            $("#3").prop("disabled", false);
        else
            $("#3").prop("disabled", true);

        $("#3").val(localStorage.getItem("itmTestz"));

        $("[name=employed3]").on("change", function(){
            localStorage.setItem("itmEmployez", $(this).val());

            if($(this).val() == "Yes")
                $("#3").prop("disabled", false);
            else
                $("#3").prop("disabled", true);
        });

        $("#3").on("change", function(){
            localStorage.setItem("itmTestz", $(this).val());
        });

    });
    <!--3.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployex") == "Yes")
            $("#employed_v14").prop("checked", true);
        else
            $("#employed_v15").prop("checked", true);

        if(localStorage.getItem("itmEmployex") == "Yes")
            $("#3_3").prop("disabled", false);
        else
            $("#3_3").prop("disabled", true);

        $("#3_3").val(localStorage.getItem("itmTestx"));

        $("[name=employed33]").on("change", function(){
            localStorage.setItem("itmEmployex", $(this).val());

            if($(this).val() == "Yes")
                $("#3_3").prop("disabled", false);
            else
                $("#3_3").prop("disabled", true);
        });

        $("#3_3").on("change", function(){
            localStorage.setItem("itmTestx", $(this).val());
        });

    });


    <!--4için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployec") == "Yes")
            $("#employed_v16").prop("checked", true);
        else
            $("#employed_v17").prop("checked", true);

        if(localStorage.getItem("itmEmployec") == "Yes")
            $("#4").prop("disabled", false);
        else
            $("#4").prop("disabled", true);

        $("#4").val(localStorage.getItem("itmTestc"));

        $("[name=employed4]").on("change", function(){
            localStorage.setItem("itmEmployec", $(this).val());

            if($(this).val() == "Yes")
                $("#4").prop("disabled", false);
            else
                $("#4").prop("disabled", true);
        });

        $("#4").on("change", function(){
            localStorage.setItem("itmTestc", $(this).val());
        });

    });
    <!--4.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployev") == "Yes")
            $("#employed_v18").prop("checked", true);
        else
            $("#employed_v19").prop("checked", true);

        if(localStorage.getItem("itmEmployev") == "Yes")
            $("#4_3").prop("disabled", false);
        else
            $("#4_3").prop("disabled", true);

        $("#4_3").val(localStorage.getItem("itmTestv"));

        $("[name=employed43]").on("change", function(){
            localStorage.setItem("itmEmployev", $(this).val());

            if($(this).val() == "Yes")
                $("#4_3").prop("disabled", false);
            else
                $("#4_3").prop("disabled", true);
        });

        $("#4_3").on("change", function(){
            localStorage.setItem("itmTestv", $(this).val());
        });

    });

    <!--5için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeb") == "05:00PM")
            $("#employed_v20").prop("checked", true);
        else
            $("#employed_v21").prop("checked", true);

        if(localStorage.getItem("itmEmployeb") == "05:00PM")
            $("#5").prop("disabled", false);
        else
            $("#5").prop("disabled", true);

        $("#5").val(localStorage.getItem("itmTestb"));

        $("[name=employed5]").on("change", function(){
            localStorage.setItem("itmEmployeb", $(this).val());

            if($(this).val() == "05:00PM")
                $("#5").prop("disabled", false);
            else
                $("#5").prop("disabled", true);
        });

        $("#5").on("change", function(){
            localStorage.setItem("itmTestb", $(this).val());
        });

    });
    <!--5.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployen") == "Yes")
            $("#employed_v22").prop("checked", true);
        else
            $("#employed_v23").prop("checked", true);

        if(localStorage.getItem("itmEmployen") == "Yes")
            $("#5_3").prop("disabled", false);
        else
            $("#5_3").prop("disabled", true);

        $("#5_3").val(localStorage.getItem("itmTestn"));

        $("[name=employed53]").on("change", function(){
            localStorage.setItem("itmEmployen", $(this).val());

            if($(this).val() == "Yes")
                $("#5_3").prop("disabled", false);
            else
                $("#5_3").prop("disabled", true);
        });

        $("#5_3").on("change", function(){
            localStorage.setItem("itmTestn", $(this).val());
        });

    });

    <!--6için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye8") == "Yes")
            $("#employed_v24").prop("checked", true);
        else
            $("#employed_v25").prop("checked", true);

        if(localStorage.getItem("itmEmploye8") == "Yes")
            $("#6").prop("disabled", false);
        else
            $("#6").prop("disabled", true);

        $("#6").val(localStorage.getItem("itmTest8"));

        $("[name=employed6]").on("change", function(){
            localStorage.setItem("itmEmploye8", $(this).val());

            if($(this).val() == "Yes")
                $("#6").prop("disabled", false);
            else
                $("#6").prop("disabled", true);
        });

        $("#6").on("change", function(){
            localStorage.setItem("itmTest8", $(this).val());
        });

    });
    <!--6.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployef") == "Yes")
            $("#employed_v26").prop("checked", true);
        else
            $("#employed_v27").prop("checked", true);

        if(localStorage.getItem("itmEmployef") == "Yes")
            $("#6_3").prop("disabled", false);
        else
            $("#6_3").prop("disabled", true);

        $("#6_3").val(localStorage.getItem("itmTestf"));

        $("[name=employed63]").on("change", function(){
            localStorage.setItem("itmEmployef", $(this).val());

            if($(this).val() == "Yes")
                $("#6_3").prop("disabled", false);
            else
                $("#6_3").prop("disabled", true);
        });

        $("#6_3").on("change", function(){
            localStorage.setItem("itmTestf", $(this).val());
        });

    });


    <!--7için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeg") == "Yes")
            $("#employed_v28").prop("checked", true);
        else
            $("#employed_v29").prop("checked", true);

        if(localStorage.getItem("itmEmployeg") == "Yes")
            $("#7").prop("disabled", false);
        else
            $("#7").prop("disabled", true);

        $("#7").val(localStorage.getItem("itmTestg"));

        $("[name=employed7]").on("change", function(){
            localStorage.setItem("itmEmployeg", $(this).val());

            if($(this).val() == "Yes")
                $("#7").prop("disabled", false);
            else
                $("#7").prop("disabled", true);
        });

        $("#7").on("change", function(){
            localStorage.setItem("itmTestg", $(this).val());
        });

    });
    <!--7.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeh") == "Yes")
            $("#employed_v30").prop("checked", true);
        else
            $("#employed_v31").prop("checked", true);

        if(localStorage.getItem("itmEmployeh") == "Yes")
            $("#7_3").prop("disabled", false);
        else
            $("#7_3").prop("disabled", true);

        $("#7_3").val(localStorage.getItem("itmTesth"));

        $("[name=employed73]").on("change", function(){
            localStorage.setItem("itmEmployeh", $(this).val());

            if($(this).val() == "Yes")
                $("#7_3").prop("disabled", false);
            else
                $("#7_3").prop("disabled", true);
        });

        $("#7_3").on("change", function(){
            localStorage.setItem("itmTesth", $(this).val());
        });

    });



    <!--8için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeu") == "Yes")
            $("#employed_v32").prop("checked", true);
        else
            $("#employed_v33").prop("checked", true);

        if(localStorage.getItem("itmEmployeu") == "Yes")
            $("#8").prop("disabled", false);
        else
            $("#8").prop("disabled", true);

        $("#8").val(localStorage.getItem("itmTestu"));

        $("[name=employed8]").on("change", function(){
            localStorage.setItem("itmEmployeu", $(this).val());

            if($(this).val() == "Yes")
                $("#8").prop("disabled", false);
            else
                $("#8").prop("disabled", true);
        });

        $("#8").on("change", function(){
            localStorage.setItem("itmTestu", $(this).val());
        });

    });
    <!--8.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeı") == "Yes")
            $("#employed_v34").prop("checked", true);
        else
            $("#employed_v35").prop("checked", true);

        if(localStorage.getItem("itmEmployeı") == "Yes")
            $("#8_3").prop("disabled", false);
        else
            $("#8_3").prop("disabled", true);

        $("#8_3").val(localStorage.getItem("itmTestı"));

        $("[name=employed83]").on("change", function(){
            localStorage.setItem("itmEmployeı", $(this).val());

            if($(this).val() == "Yes")
                $("#8_3").prop("disabled", false);
            else
                $("#8_3").prop("disabled", true);
        });

        $("#8_3").on("change", function(){
            localStorage.setItem("itmTestı", $(this).val());
        });

    });



    <!--9için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployeo") == "Yes")
            $("#employed_v36").prop("checked", true);
        else
            $("#employed_v37").prop("checked", true);

        if(localStorage.getItem("itmEmployeo") == "Yes")
            $("#9").prop("disabled", false);
        else
            $("#9").prop("disabled", true);

        $("#9").val(localStorage.getItem("itmTesto"));

        $("[name=employed9]").on("change", function(){
            localStorage.setItem("itmEmployeo", $(this).val());

            if($(this).val() == "Yes")
                $("#9").prop("disabled", false);
            else
                $("#9").prop("disabled", true);
        });

        $("#9").on("change", function(){
            localStorage.setItem("itmTesto", $(this).val());
        });

    });
    <!--9.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployep") == "Yes")
            $("#employed_v38").prop("checked", true);
        else
            $("#employed_v39").prop("checked", true);

        if(localStorage.getItem("itmEmployep") == "Yes")
            $("#9_3").prop("disabled", false);
        else
            $("#9_3").prop("disabled", true);

        $("#9_3").val(localStorage.getItem("itmTestp"));

        $("[name=employed93]").on("change", function(){
            localStorage.setItem("itmEmployep", $(this).val());

            if($(this).val() == "Yes")
                $("#9_3").prop("disabled", false);
            else
                $("#9_3").prop("disabled", true);
        });

        $("#9_3").on("change", function(){
            localStorage.setItem("itmTestp", $(this).val());
        });

    });



    <!--10için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployea") == "Yes")
            $("#employed_v40").prop("checked", true);
        else
            $("#employed_v41").prop("checked", true);

        if(localStorage.getItem("itmEmployea") == "Yes")
            $("#10").prop("disabled", false);
        else
            $("#10").prop("disabled", true);

        $("#10").val(localStorage.getItem("itmTesta"));

        $("[name=employed10]").on("change", function(){
            localStorage.setItem("itmEmployea", $(this).val());

            if($(this).val() == "Yes")
                $("#10").prop("disabled", false);
            else
                $("#10").prop("disabled", true);
        });

        $("#10").on("change", function(){
            localStorage.setItem("itmTesta", $(this).val());
        });

    });
    <!--10.3için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmployew") == "Yes")
            $("#employed_v42").prop("checked", true);
        else
            $("#employed_v43").prop("checked", true);

        if(localStorage.getItem("itmEmployew") == "Yes")
            $("#10_3").prop("disabled", false);
        else
            $("#10_3").prop("disabled", true);

        $("#10_3").val(localStorage.getItem("itmTestw"));

        $("[name=employed103]").on("change", function(){
            localStorage.setItem("itmEmployew", $(this).val());

            if($(this).val() == "Yes")
                $("#10_3").prop("disabled", false);
            else
                $("#10_3").prop("disabled", true);
        });

        $("#10_3").on("change", function(){
            localStorage.setItem("itmTestw", $(this).val());
        });

    });


    <!--Masa 2kişi için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye0") == "Yes")
            $("#employed_2").prop("checked", true);
        else
            $("#employed_1").prop("checked", true);

        if(localStorage.getItem("itmEmploye0") == "Yes")
            $("#2k").prop("disabled", false);
        else
            $("#2k").prop("disabled", true);

        $("#2k").val(localStorage.getItem("itmTest0"));

        $("[name=employeda]").on("change", function(){
            localStorage.setItem("itmEmploye0", $(this).val());

            if($(this).val() == "Yes")
                $("#2k").prop("disabled", false);
            else
                $("#2k").prop("disabled", true);
        });

        $("#2k").on("change", function(){
            localStorage.setItem("itmTest0", $(this).val());
        });

    });


    <!--Masa 4kişi için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye4") == "Yes")
            $("#employed_4").prop("checked", true);
        else
            $("#employed_3").prop("checked", true);

        if(localStorage.getItem("itmEmploye4") == "Yes")
            $("#4k").prop("disabled", false);
        else
            $("#4k").prop("disabled", true);

        $("#4k").val(localStorage.getItem("itmTest4"));

        $("[name=employedac]").on("change", function(){
            localStorage.setItem("itmEmploye4", $(this).val());

            if($(this).val() == "Yes")
                $("#4k").prop("disabled", false);
            else
                $("#4k").prop("disabled", true);
        });

        $("#4k").on("change", function(){
            localStorage.setItem("itmTest4", $(this).val());
        });

    });


    <!--Masa 6kişi için-->
    $(document).ready(function(){
        if(localStorage.getItem("itmEmploye6") == "Yes")
            $("#employed_6").prop("checked", true);
        else
            $("#employed_5").prop("checked", true);

        if(localStorage.getItem("itmEmploye6") == "Yes")
            $("#6k").prop("disabled", false);
        else
            $("#6k").prop("disabled", true);

        $("#6k").val(localStorage.getItem("itmTest6"));

        $("[name=employedacc]").on("change", function(){
            localStorage.setItem("itmEmploye6", $(this).val());

            if($(this).val() == "Yes")
                $("#6k").prop("disabled", false);
            else
                $("#6k").prop("disabled", true);
        });

        $("#6k").on("change", function(){
            localStorage.setItem("itmTest6", $(this).val());
        });

    });

</script>




