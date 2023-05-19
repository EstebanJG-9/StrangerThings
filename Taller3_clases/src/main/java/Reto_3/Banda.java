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
public class Banda {
    
    
    private String nombre;
    private String artista;
    private String año ;
    private String temporada ;
    
    
    public Banda(){
        
    }
    
    
    public void banda (String nombre,String artista,String año,String temporada){
        this.nombre = nombre;
        this.artista= artista;
        this.año = año;
        this.temporada = temporada;
        
        
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getArtista() {
        return artista;
    }

    public void setArtista(String artista) {
        this.artista = artista;
    }

    public String getAño() {
        return año;
    }

    public void setAño(String año) {
        this.año = año;
    }

    public String gettemporada() {
        return temporada;
    }

    public void settemporada(String temporada) {
        this.temporada = temporada;
    }
    
    public void mostrarBanda(){
        
        JOptionPane.showMessageDialog(null, "BANDA \n Cancion = Every Breath You Take \n Artista =  The Police."
                + "\n Año de lanzamineto =  1983 \n  Temporada = 2 ");
    }
    
}
