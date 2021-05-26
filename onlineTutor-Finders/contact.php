
<!DOCTYPE html> 

  <html lang="en"> 

    <head>  

      <meta charset="UTF-8">  

      <meta name="viewport" content="width=device-width, initial-scale=1.0">                <title>Registration Form With Html & Css</title>  

      <link rel="stylesheet" href="style.css">  

      <meta name="viewport" content="width=device-width, initial-scale=1"> 
	  <!DOCTYPE html>
  <head>
    <title>Contact us</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">




    </head>

    <body> 
   
<style>
.line-box {  

  position: relative;  

  width: 100%;  

  height: 2px;  

  background: #BCBCBC; 

}
 .line {  

   position: absolute;  

   width: 0%;  

   height: 2px;  

   top: 0px;  

   left: 50%;  

   transform: translateX(-50%);  

   background: #8BC34A;  

   transition: ease .6s; 

}  

 .input:focus + .line-box .line {  
   width: 100%; 

}

 .label-active {  

   top: -3em; 

}

 button {  

   display: inline-block; 

   padding: 12px 24px;  

   background: rgb(220,220,220);  
   font-weight: bold;  

   color: rgb(120,120,120);  

   border: none;  outline: none;  

   border-radius: 3px;  

   cursor: pointer;  

   transition: ease .3s; 

}  

 button:hover {  
   background: #8BC34A;  
   color: #ffffff; 

}
 

</style>

        <div>   

          <form>    

            <h4 class="text-warning text-center pt-5">Registration Page</h4>  

            

            <label>     

              <input type="text" class="input" name="email" placeholder="EMAIL"/>                   <div class="line-box">          

              <div class="line"></div>        
              </div>    

            </label>     
            

            <label>     

              <input 

                     type="text" 

                     class="input" 

                     name="username"        

                     placeholder="USERNAME"/>        

              <div class="line-box">         

                <div class="line"></div>        

              </div>    

            </label>     

            

            <label>     

              <input 

                     type="password" 

                     class="input" 

                     name="password" 

                     placeholder="PASSWORD"/>        

              <div class="line-box">          

                <div class="line"></div>        

              </div>    

            </label>     

            

            <label>     

              <input 

                     type="password" 

                     class="input" 

                     name="confirm" 
                     placeholder="CONFIRM PASSWORD"/>      
              <div class="line-box">        
                <div class="line"></div>      

              </div>    

            </label>     

            

            <button type="submit">submit</button>  

          </form> 
      </div> 

    </body> 

</html>