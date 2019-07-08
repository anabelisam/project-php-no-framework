function mt_validarInputTamano(pv_num_menor,pv_num_mayor,pv_ob_input,pv_nombre_campo){
    if(pv_ob_input.val().length>=pv_num_menor && pv_ob_input.val().length <= pv_num_mayor){       
        pv_ob_input.css('border-color','#D8D9DA');            
        return true;
    }else{
        pv_ob_input.focus();                        
        pv_ob_input.css('border-color','red');  
        $.growl.error({ title: "Verificando caracteres", message: 'Campo "'+pv_nombre_campo+'" debe tener al menos '+pv_num_menor+' y maximo '+pv_num_mayor+' caracteres!' });
        return false;
    }
}

function mt_verificarVacioInput(pv_input){
    var vl_estado = false;
    if(pv_input.val() != ''){                                    
        vl_estado=true;
        pv_input.css('border-color','#D8D9DA');                        
    }else{            
                             
        pv_input.css('border-color','red');       
        $.growl.error({ title: "Campo vacío", message: 'Este campo es obligatorio' }); 
        pv_input.focus();    
    }
    return vl_estado;
}
    
function mt_validarSelectVacio(pv_ob_select){
    var vl_estado = false;
    if(pv_ob_select.val()=='-1'){  
        pv_ob_select.css('border-color','red');       
        $.growl.error({ title: "Campo vacío", message: 'Este campo es obligatorio' });
        pv_ob_select.focus(); 
    }else{
        pv_ob_select.css('border-color','#D8D9DA'); 
        vl_estado = true;
    }
    return vl_estado; 
}    
    
function mt_verificarIgualda(pv_input1,pv_input2){
    var vl_estado=false;
    if(pv_input1.val()!=pv_input2.val()){            
        pv_input1.css('border-color','red');
        pv_input1.focus();
        pv_input2.css('border-color','red');                    
        $.growl.error({ title: "Contraseñas no coinciden", message: 'Intente de nuevo' });            
    }else{
        pv_input1.css('border-color','#D8D9DA');            
        pv_input2.css('border-color','#D8D9DA');              
        vl_estado=true;
    }
    return vl_estado;
}

