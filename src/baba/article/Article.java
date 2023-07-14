package baba.article;

import java.io.Serializable;
import java.util.Date;

@XmlRootElement(name="Article")
public class Article implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	private Long id;
	private String titre;
	private String contenu;
	private String categorie;
	private Date dateCreation;
	private Date dateModification;
	
	public Article(Long id, String titre, String contenu, String categorie, Date dateCreation, Date dateModification) {
		
		this.id = id;
		this.titre = titre;
		this.contenu = contenu;
		this.categorie = categorie;
		this.dateCreation = dateCreation;
		this.dateModification = dateModification;
	}

	public Article() {

		// TODO Auto-generated constructor stub
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getTitre() {
		return titre;
	}

	public void setTitre(String titre) {
		this.titre = titre;
	}

	public String getContenu() {
		return contenu;
	}

	public void setContenu(String contenu) {
		this.contenu = contenu;
	}

	public String getCategorie() {
		return categorie;
	}

	public void setCategorie(String categorie) {
		this.categorie = categorie;
	}

	public Date getDateCreation() {
		return dateCreation;
	}

	public void setDateCreation(Date dateCreation) {
		this.dateCreation = dateCreation;
	}

	public Date getDateModification() {
		return dateModification;
	}

	public void setDateModification(Date dateModification) {
		this.dateModification = dateModification;
	}
	
	
	
	
	
	

}
