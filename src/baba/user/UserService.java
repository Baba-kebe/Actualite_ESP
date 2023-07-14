package baba.user;

import java.util.ArrayList;
import java.util.List;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;

@WebService(name="userWS")
public class UserService {
	
	List<User> users = new ArrayList<>();
	
	@WebMethod(operationName="ajout")
	public List<User> addUser(@WebParam(name="email") String a){
		
		User user = new User();
		user.setEmail(a);
		this.users.add(user);;
		return this.users;
		
	}
	@WebMethod(operationName="suppression")
	public void deleteArticle(@WebParam(name="email") String a) {
		User user = new User();
		user.setEmail(a);
		this.users.remove(user);
	}
	
}