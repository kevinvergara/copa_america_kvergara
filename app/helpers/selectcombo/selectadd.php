<?php
class Selectadd{

		public function selectadd($array,$nombre,$value,$titulo,$comparacion=null,$funcionjs=null,$id=null){
	/*	
		$nombre_id='';
		if($id==""){		
		$nombre_id=$nombre;
		}else{		
		$nombre_id=$id;
		}


          $retorno= "<select id=".$nombre_id."  name=".$nombre."  ". $funcionjs ." ><option value=''>-</option>";    
		  if(is_array($array)){
              foreach($array as $menu){ 
			  if($comparacion==$menu[$value]){
			    $retorno.="<option value=".$menu[$value]." selected>".$menu[$titulo]."</option>";
				}else{
				
			  $retorno.="<option value=".$menu[$value].">".$menu[$titulo]."</option>";
                   }
				}
				
				}
            $retorno.= "</select>";
*/
		//return $retorno;
return $array;
/*
echo "<fieldset><legend></legend><pre>";
print_r($array );
echo "</pre></fieldset>";
/*/
		}


}
?>