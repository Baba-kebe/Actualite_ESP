package baba.user;

import java.io.Serializable;
import java.util.Date;

@XmlRootElement(name="User")
public class User implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	private String nom;
	private String prenom;
	private String email;
	private String password;
	public User() {
		// TODO Auto-generated constructor stub
	}
	public User(String nom, String prenom, String email, String password) {
		super();
		this.nom = nom;
		this.prenom = prenom;
		this.email = email;
		this.password = password;
	}
	public String getNom() {
		return nom;
	}
	public void setNom(String nom) {
		this.nom = nom;
	}
	public String getPrenom() {
		return prenom;
	}
	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	
	
	

}
