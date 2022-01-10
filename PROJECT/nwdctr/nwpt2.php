
       <div id="content"> 
        <h1>New Patient Registration Form</h1>
        <form id="aa" action="patet.php"  method="POST" >
           
            Mail id : <input type="text" name="id" onchange="calc()" id="bb" required><span id="cc"></span><br><br>
            Password : <input type="text" class="hh" name="pas" required><br><br>
            Name : <input type="text" name="nm" class="hh" required><br><br>
            Gender : <input type="radio" name="gd" class="hh" value="m" checked>Male
                     <input type="radio" name="gd"  class="hh" value="f">Female<br><br>
            Contact Number : <input type="text" class="hh" name="ctn"><br><br>
            Date Of Birth : <input type="date" class="hh"  name="dob"><br><br>
            Address : <input type="text"  class="hh" name="ad"><br><br>
            Allergies : <input type="text" class="hh" name="alg"><br><br>         
            <input type="submit" class="hh" value="submit">         
                     
        </form>
        
       <script>
         
        var kl =  document.getElementsByClassName("hh");
        for(i=0;i<kl.length;++i)
        kl[i].style.visibility = "hidden";
         
           function calc()
           {
                var t = document.getElementById("bb").value;
                if(t == "")
                {
                    var kl =  document.getElementsByClassName("hh");
        for(i=0;i<kl.length;++i)
        kl[i].style.visibility = "hidden";
        document.getElementById("cc").innerHTML = "";   return;
                }
                
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange= function(){
                   if(xhttp.readyState == 4  && xhttp.status == 200 )
                     {
                         var ee = xhttp.responseText;      
                         
                          if(ee == 0)
                          {
                             var kl =  document.getElementsByClassName("hh");
        for(i=0;i<kl.length;++i)
        kl[i].style.visibility = "hidden";
        document.getElementById("cc").innerHTML = "sorry the user id already exist..";  
                          }
                          
                          else
                          {
                               var kl =  document.getElementsByClassName("hh");
        for(i=0;i<kl.length;++i)
        kl[i].style.visibility = "visible";
        document.getElementById("cc").innerHTML = "valid user id";   
                          }           
                     }
                 };
                 
                 
                 xhttp.open("POST","chkid.php",true);
                 xhttp.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
                 xhttp.send("id="+t);
                    
                }
                
           
       </script>
       
       </div>
