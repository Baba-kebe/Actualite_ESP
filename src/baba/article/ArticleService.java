package baba.article;

import java.util.ArrayList;
import java.util.List;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;

@WebService(name="ArticleWS")
public class ArticleService {
	
	List<Article> articles = new ArrayList<>();
	
	@WebMethod(operationName="ajout")
	public List<Article> getArticles(@WebParam(name="titre") String a){
		
		this.articles.add(a);
		return this.articles;
		
	}
	@WebMethod(operationName="suppression")
	public void deleteArticle(@WebParam(name="titre") String a) {
		Long id = a.getId(); 
		this.articles.remove(id);
	}
	
}