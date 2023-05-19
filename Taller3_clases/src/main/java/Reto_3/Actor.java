/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Reto_3;

import javax.swing.ImageIcon;
import javax.swing.JOptionPane;

/**
 *
 * @author Juan3
 */
public class Actor {
    
    private String nom;
    private String apell;
    private int edad;
    private String gen;
    private int tiempo;
    private String pers;
    private String rol;

    // constructor por defecto
    public void actor(){
        
    }
    
    // constructor por parametros
    public void actor(String nom,String apell,int edad,String gen,int tiempo,String pers,String rol){
         this.nom =nom;
         this.apell=apell;
         this.edad=edad;
         this.gen=gen;
         this.tiempo=tiempo;
         this.pers=pers;
         this.rol=rol;
       
    }

   
    
    // set and get
    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getApell() {
        return apell;
    }

    public void setApell(String apell) {
        this.apell = apell;
    }

    public int getEdad() {
        return edad;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }

    public String getGen() {
        return gen;
    }

    public void setGen(String gen) {
        this.gen = gen;
    }

    public int getTiempo() {
        return tiempo;
    }

    public void setTiempo(int tiempo) {
        this.tiempo = tiempo;
    }

    public String getPers() {
        return pers;
    }

    public void setPers(String pers) {
        this.pers = pers;
    }

    public String getRol() {
        return rol;
    }

    public void setRol(String rol) {
        this.rol = rol;
    }
    
    // metodo para imprimir por pantalla los datos del actor 
    public void datosActor(){
        
 
     
      JOptionPane.showInternalMessageDialog(null, " ACTOR \n El nombre es =  Millie Bobby Brown \n El apellido es = Brown \n La edad es = 18 años \n El genero es = Femenino \n Participa en la = 4 Temporada \n El nombre en la serie es = eleven jane \n Es el= personaje Principal");
    }
    
    
    public void mostrar(){
        
        JOptionPane.showMessageDialog(null,"el nombre es = "+getNom());
        JOptionPane.showMessageDialog(null,"el Apellido es = "+getApell());
        JOptionPane.showMessageDialog(null,"la edad es = "+getEdad());
        JOptionPane.showMessageDialog(null,"el nombre es = "+getNom());
                
    }
    
}
