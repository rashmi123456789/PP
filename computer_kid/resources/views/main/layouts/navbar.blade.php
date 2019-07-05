
<style>
.customspan{
    margin-left:400px;
    color:white;
    font-size:20px;
    margin-top:14px;
}
.btn1{
    background-color:#A19B9B;
    color:black;
    width:70px;
}
.btn2{
    background-color:rgb(146, 176, 233);
    color:black;
    width:70px;
}
.btn3{
    background-color:#E692F3;
    color:black;
    width:70px;
}
.btn4{
    background-color:#86EB94;
    color:black;
    width:70px;
}
.btn5{
    background-color:#E4F074;
    color:black;
    width:70px;
}
</style>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#">පරිඝනක පොඩ්ඩා </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav custom-nav">
                    <li class="active"><a href="#">නිවස </a></li>
                    <li><a href="#">පිලිබදව</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ගැටළු හා පිළිතුරු 
                            <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu">
                                 <li><a href="{{ URL::route('simple') }}">සරල </a></li>
                                 <li><a href="{{ URL::route('intermediate') }}">මධ්‍යම </a></li>
                                 <li><a href="{{ URL::route('advance') }}">උසස් </a></li>
                            </ul>
                     </li>
                    <li><a href="#">FAQ 
</a></li> 

                
                    <li class="dropdown">
                        <a class="dropdown-toggle customspan" data-toggle="dropdown" href="#">&nbsp;වර්ණ සැකසුම් 
                            <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu customspan">
                                 <li> &nbsp;&nbsp;<font color="black" size="3px">Click For </font><button  class="btn  custombtn btn1" onclick="darkfunc(1);" >Ash</button></li>
                                 <li> &nbsp;&nbsp;<font color="black" size="3px">Click For </font><button  class="btn  custombtn btn2" onclick="darkfunc(2);" >Blue</button></li>
                                 <li> &nbsp;&nbsp;<font color="black" size="3px">Click For </font><button  class="btn  custombtn btn3" onclick="darkfunc(3);" >Pink</button></li>
                                 <li> &nbsp;&nbsp;<font color="black" size="3px">Click For </font><button  class="btn  custombtn btn4" onclick="darkfunc(4);" >Green</button></li>
                                 <li> &nbsp;&nbsp;<font color="black" size="3px">Click For </font><button  class="btn  custombtn btn5" onclick="darkfunc(5);" >Yellow</button></li>

                            </ul>
                     </li>
                     
                     
                     
                                     </ul>
            </div>
        </div>
    </nav>

    <script>
    function darkfunc(clr){
        
        if(clr==1){
        $('.thebody').css('background-color', '#A19B9B'); 
        var color = "#A19B9B";
        localStorage.setItem("color", color);
        }
        
        if(clr==2){
        $('.thebody').css('background-color', 'rgb(146, 176, 233)'); 
        var color = "rgb(146, 176, 233)";
        localStorage.setItem("color", color);
        }
      
        if(clr==3){
        $('.thebody').css('background-color', '#E692F3'); 
        var color = "#E692F3";
        localStorage.setItem("color", color);
        }
        if(clr==4){
        $('.thebody').css('background-color', '#86EB94'); 
        var color = "#86EB94";
        localStorage.setItem("color", color);
        }
        if(clr==5){
        $('.thebody').css('background-color', '#E4F074'); 
        var color = "#E4F074";
        localStorage.setItem("color", color);
        }


    }
    </script>
   