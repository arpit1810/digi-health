
           function tm()
           {
                var dd = new Date();
                var hr = dd.getHours();
                var mn = dd.getMinutes();
                var sc = dd.getSeconds();
                
                document.getElementById("cc").innerHTML = hr + ":" + mn + ":" + sc;
                
                setTimeout(tm,1);
           }
