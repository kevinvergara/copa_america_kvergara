<style type="text/css">
table {     
   
    margin-top: 45px;
    margin-bottom: 45px;
    margin-left: 20px;
}

th {  
    background: #b9c9fe;
    color: #039;
}

td {        
    background: #e8edff;     
    color: #669;    
}

tr:hover td { background: #d0dafd; color: #339; }

/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 9999;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  margin-top: 150px;
  border: 16px solid #f3f3f3;
  border-radius: 80%;
  border-top: 18px solid #FFA333;
  border-bottom: 16px solid #3498db;
  width: 160px;
  height: 160px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>