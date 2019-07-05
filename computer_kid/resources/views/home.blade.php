@extends('main.app')
@section('headSection')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">
        <title>Learning Computer Parts</title>
<meta charset="utf-8">

<style>
    .img-rounded {
  max-width: 1000px;
  height: 500px;
}
.thebody{
    background-color:rgb(146, 176, 233);
}
.custom{
    
    height: 78px !important;
    width :100%;
    background-color:rgb(255, 204, 204);
}
.arrow{
    margin-left: 70%;
}
.custom-nav{
    margin-left:20%;
}
.custombtn{
    background-color:rgb(51, 119, 255);
}
.customcontainer{
    margin-left:5%;
}
</style>
@endsection
@section('content')


<script>
var color = localStorage.getItem("color");

$('.thebody').css('background-color', color); 
</script>

<div class="customcontainer">
    <div class="row">
         <div class="container col-md-6">           
              <img src="main/images/bg_top1.jpg" class="img-rounded" alt="Cinque Terre"> 
         </div>
         <div class="container col-md-6">
             <br>
             <div class="container"> 
                 <font size="12" color="purple" >
                     <strong>
                         පරිඝනක පොඩ්ඩා<br> (Computer Kid)
                     </strong>
                 </font>
                 <br>
                 <font size="3px">
                        පරිඝනක දෘඩාංග (Computer Hardware) පිලිඹඳ දැනුම ලබාගන්න ..
                 </font>
             </div>
          </div>
          <br><br><br><br> <br><br><br><br>
          <div class="col-md-5 ">
              <font size="5">
                  ඔබගේ දැනුම් මට්ටම තෝරගන්න 
              </font>
          </div>
          <br><br> <br><br>
          <div class=" container col-md-5 btn-group-vertical">
              <a href="{{ URL::route('simple') }}" type="button" class="btn custombtn  btn-lg btn-block"><font color="black">පහසු (Simple)</font> </a><br>
              <a href="{{ URL::route('intermediate') }}" type="button" class="btn custombtn btn-lg btn-block"><font color="black">අතරමැදි (Intermediate)</font></a><br>
              <a href="{{ URL::route('advance') }}" type="button" class="btn custombtn btn-lg btn-block"><font color="black">උසස් (Advanced)</font></a>
          </div>
    </div> 
    <br>


    <button class="btn btn-block custom" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" onclick="open_function()">
            <font size="4px" color="black"><strong>පරිඝනක පොඩ්ඩා යනු..</strong><span id="openclose" class="glyphicon glyphicon-arrow-down arrow"></span></font>
    </button>
        <div class="collapse" id="collapseOne">
          <div class="card card-body">
              <h2>
              පරිඝනක පොඩ්ඩා යනු..
              </h2>
              පරිඝනක පොඩ්ඩා යනු පරිඝනක දෘඩාංග පිලිබන්දව ඉතා සරලව දැනුම ලබා ගත හැකි වෙබ් පිටුවකි .
               සරල බව කෙරෙහි විශේෂ අවධානයක් යොමු කර ඇත .
               .<br>
               මෙහි නිබන්ධන මූලික මට්ටමේ සිට ආරම්භ වන අතර, ඉහල දැනුම් මට්ටම් දක්වා යනවා. 
               
            <br>
            ඔබම උත්සාහ කරන්න
            පරිඝනක පොඩ්ඩා පැහැදිලි හා සරල  නිදර්ශන ඉදිරිපත් කරයි.
              <br>
              පරිඝනක පොඩ්ඩා නොමිලේ ලබාදෙන අතර සහ සැමවිටම, සම්පුර්ණයෙන්ම නිදහස් සංවර්ධකයින්ගේ සම්පත් වේ.
          </div>
        </div>
        <br>

        <button class="btn btn-block custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="open_function2()">
                <font size="4px" color="black"><strong>ප්රකාශන හිමිකම් තොරතුරු..</strong><span id="openclose2" class="glyphicon glyphicon-arrow-down arrow"></span></font>
        </button>

            <div class="collapse" id="collapseTwo">
              <div class="card card-body">
                  <h2>
                  ප්රකාශන හිමිකම් තොරතුරු
                  </h2>
                 
                මෙම වෙබ් අඩවියේ සියලුම පිටු සහ ග්රැෆික්ස් computer kids සමුහය සතු දේපළ වේ.<br>
                පරිඝනක පොඩ්ඩා වෙතින් ලබාදෙන පිටු, කේත හෝ වෙනත් අන්තර්ගතයන් ලිඛිත අවසරයකින් තොරව ඕනෑම ආකාරයකින්, හැඩයක් හෝ ආකෘතියක් නැවත බෙදාහැරීම නොකළ යුතුය .<br>
                <h2>වගකීම්</h2>

 පරිඝනක පොඩ්ඩා වෙබ් අඩවියේ භාවිතය බාධාවන්ට ලක් නොවන බවට කිසිදු සහතිකයක් නොමැත. වෙබ් අඩවිය භාවිතා කිරීම සම්බන්ධ සියලු සෘජු හෝ වක්ර අවධානම භාවිතා කරන්නා විසින් මුළුමනින්ම දැරිය යුතුය . 

                      </div>
            </div>
            <br>

</div>






      

<script>
    function open_function(){
        if(document.getElementById('openclose').classList.contains('glyphicon-arrow-down')){
            document.getElementById('openclose').classList.add('glyphicon-arrow-up');
            document.getElementById('openclose').classList.remove('glyphicon-arrow-down'); 
       }else{
           document.getElementById('openclose').classList.remove('glyphicon-arrow-up');
           document.getElementById('openclose').classList.add('glyphicon-arrow-down');
       }  
    }
    function open_function2(){
        if(document.getElementById('openclose2').classList.contains('glyphicon-arrow-down')){
            document.getElementById('openclose2').classList.add('glyphicon-arrow-up');
            document.getElementById('openclose2').classList.remove('glyphicon-arrow-down'); 
       }else{
           document.getElementById('openclose2').classList.remove('glyphicon-arrow-up');
           document.getElementById('openclose2').classList.add('glyphicon-arrow-down');
       }  
    }
</script>

@endsection
