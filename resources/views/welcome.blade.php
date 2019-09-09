   
   <style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.buttonC:hover {background-color: #f44336;border-radius: 12px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);font-size: 16px;}
.buttonall:hover {background-color: #999900;border-radius: 12px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
input[type=text], select {
  width: 100%;
font-size: 99px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
body {
  background-color: 0a290a;
  text-align:center;
}

</style>
<html>
<head>
   
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<body> 
   <p id="demo"></p>
   <h1 style="color:Tomato; text-align: center;">CALCULATOR </h1>
      <td><input type="button" value="🡄" onclick="back()"class="button buttonall"></button></td>
      <td><input type="button" value="💾" onclick="myFunction()"class="button buttonall"></button></td>

      <td><input type="button" value="🡆" onclick="ford()"class="button buttonall"></button></td>
      <input type="text" id="result"/>
     
    <table align="center"class="table table-borderless">
    
    <input type="button" value="Clear" onclick="clr()"class="button buttonC"></button>     
    <input type="button" value="AC" onclick="clr()"class="button buttonC"></button>     
         
    

         <tr> 
         <td><input type="button" value="7" onclick="dis('7')" class="button buttonall"></button></td>
         <td><input type="button" value="8" onclick="dis('8')"class="button buttonall"></button></td>
         <td><input type="button" value="9" onclick="dis('9')"class="button buttonall"></button></td>
         <td><input type="button" value="+" onclick="dis('+')"class="button buttonall"></button></td>
         </tr>
 <tr> 
         <td><input type="button" value="4" onclick="dis('4')"class="button buttonall"></button></td>
         <td><input type="button" value="5" onclick="dis('5')"class="button buttonall"></button></td>
         <td><input type="button" value="6" onclick="dis('6')"class="button buttonall"></button></td>
         <td><input type="button" value="-" onclick="dis('-')"class="button buttonall"></button></td>
         <td><input type="button" value=")" onclick="dis(')')"class="button buttonall"></button></td>
<br />
       <tr> 
         <td><input type="button" value="1" onclick="dis('1')"class="button buttonall"></button></td>
         <td><input type="button" value="2" onclick="dis('2')"class="button buttonall"></button></td> 
         <td><input type="button" value="3" onclick="dis('3')"class="button buttonall"></button></td> 
         <td><input type="button" value="/" onclick="dis('/')"class="button buttonall"></button></td>
         <td><input type="button" value="(" onclick="dis('(')"class="button buttonall"></button></td>
        </tr> 
     
        
         <br />
         </tr> 
         <tr> 
         <td><input type="button" value="." onclick="dis('.')"class="button buttonall"></button></td> 
         <td><input type="button" value="0" onclick="dis('0')"class="button buttonall"></button></td>
         <td><input type="button" value="=" onclick="solve()"class="button buttonall"></button></td>
         <td><input type="button" value="*" onclick="dis('*')"class="button buttonall"></button></td>
<br />
         </tr> 
         
         <tr>
         <td><input type="button" value="sin" onclick="dis('Math.sin(')"class="button buttonall"></button></td>
         <td><input type="button" value="cos" onclick="dis('Math.cos(')"class="button buttonall"></button></td>
         <td><input type="button" value="tan" onclick="dis('Math.tan(')"class="button buttonall"></button></td>
         <td><input type="button" value="𝝮" onclick="dis('3.14')"class="button buttonall"></button></td>
         <td><input type="button" value="ℯ" onclick="dis('Math.exp(')"class="button buttonall"></button></td>
         <td><input type="button" value="" onclick="dis('Math.exp(')"class="button buttonall"></button></td>
        
         <br />
         </tr> 

         
         
</table>

  
</body> 
</html> 

<script> 
      function dis(val) 
      { 
         document.getElementById("result").value+=val 
      }  
      function solve() 
      { 
         let x = document.getElementById("result").value 
         let y = eval(x) 
         document.getElementById("result").value = y 
      }  
      function clr() 
      { 
         document.getElementById("result").value = "" 
      } 



function myFunction() {
   let z = document.getElementById("result").value = y
   document.getElementById("demo").value = z
    }


/*function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
<div id="google_translate_element"></div>

*/


</script> 