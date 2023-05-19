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
public class Libro {
    
    private String nombreLibro;
    private String autor;
    private String fecha;
    private String editorial;
    
    
    
    public void libro(){
        
    }
    
    
    public void libro (String nombreLibro,String autor,String fecha ,String editorial){
        this.autor = autor;
        this.editorial =  editorial;
        this.fecha = fecha;
        this.nombreLibro = nombreLibro;
        
        
    }

    public String getNombreLibro() {
        return nombreLibro;
    }

    public void setNombreLibro(String nombreLibro) {
        this.nombreLibro = nombreLibro;
    }

    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }

    public String getFecha() {
        return fecha;
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }

    public String getEditorial() {
        return editorial;
    }

    public void setEditorial(String editorial) {
        this.editorial = editorial;
    }
    
    
    public void mostralibro(){
        
        JOptionPane.showMessageDialog(null,"LIBRO \n Nombre del libro = STRANGER THINGS: MUNDOS DEL REVES \n EL autor es =  Gina McIntyre"
                + "\n La fecha de lanzamineto es = 29 de octubre de 2018 \n La editorial es =GRIJALBO.");
    }
    
    
}
