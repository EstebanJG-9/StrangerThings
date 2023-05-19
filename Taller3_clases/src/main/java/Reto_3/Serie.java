/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Reto_3;

import javax.swing.JOptionPane;

/**
 *
 * @author Juan3
 */
public class Serie {
    
    
    private String premio; 
    private String categoria; 
    private String nominado;
    private String ganador;
    
    
    
    public void serie(){
            
        
    }   
    
    public void serie(String premio,String categoria,String nominado,String ganador){
        this.premio = premio;
        this.categoria = categoria;
        this.nominado = nominado;
        this.ganador= ganador;
        
     
    }

    public String getPremio() {
        return premio;
    }

    public void setPremio(String premio) {
        this.premio = premio;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getNominado() {
        return nominado;
    }

    public void setNominado(String nominado) {
        this.nominado = nominado;
    }

    public String getGanador() {
        return ganador;
    }

    public void setGanador(String ganador) {
        this.ganador = ganador;
    }
    
    
    
    
    
    
    
    public void mostrarPremio(){
        
        JOptionPane.showInternalMessageDialog(null," PREMIOS \n El premio es = MTV Movie & TV Award for Best Performance in a Show\n "
                + "La categoria es = mejor actuacion en un show \n Nominados = Euphoria \n Stranger things \n kelie reliee \n ganador =Stranger Things");
        
    }
        
        
        
             
   
    
}
