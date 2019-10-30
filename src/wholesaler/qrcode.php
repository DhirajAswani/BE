<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <video id="preview"></video>
    <script>
        var hashes="";
        var hasharr="";
        var total;
        $(document).ready(function (){
            var url=$(location).attr("href");
            var urlarray=url.split("?");
            var splitmeagain=urlarray[1];
            var orderid=splitmeagain.split("=");
            orderid=orderid[1];
            
            $.ajax({ 
               type: "POST", 
               url: "fetch.php", 
               data: { orderId : orderid}, 
               success: function(ans) {
                        hashes=JSON.parse(ans);
                        // JSON.stringify(hashes);
                        //console.log(hashes['hashdata']);
                        hasharr=(hashes['hashdata']).toString();
                        total=hashes['product_quantity'];
                      console.log(hasharr); 
                     } 
                });
        //         var arr=hasharr.split(",");
        // console.log(arr); 
        });
        
        
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );

        // var content_array = [];
       // console.log(hashes.hashdata);
       var count=0;
        scanner.addListener('scan', function(content) {
            
            //alert('showing content : ' + content);
            if(hasharr.indexOf(content)!=-1)
            {

                hasharr.replace(content,"");
                console.log(hasharr);
                alert("Authenticated!!");
                count++;
                if(count==total)
                {
                    alert("All hash have been matched!!")
                }
            }else{
                alert("Fraud QR Code!!!!!!");
            }
            // window.open(content, "_blank");
        });
        console.log(hasharr);
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("camer not working!");
            }
        });
    </script>

 </body>
</html>