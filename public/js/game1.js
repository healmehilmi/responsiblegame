
        var g;
        var h;
        var i;
        
        function submit001() {
            b = input001.value;
            c = input002.value;
            d = input003.value;
           
            if (b == "h1" || b == "H1") {
                g = 1;
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (c == "h2" || c == "H2") {
                h = 1
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (d == "h3" || d == "H3") {
                i = 1;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

           

            if (g == 1 && h == 1 && i == 1) {
                message001.innerHTML = "Congratulation! You have successfully finished this quiz.";
                disappear001.innerHTML = "";
                reload001.innerHTML = "<div id=css><button class=button001 onclick=repeat001()>Repeat</button></div>";
            }
        }

            function repeat001() {
                location.reload();
            }
  