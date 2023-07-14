package baba.user;

import javax.xml.ws.Endpoint;

public class Serveur {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		String url = "http:/localhost:2697/";
		Endpoint.publish(url, new UserService());
	}

}
