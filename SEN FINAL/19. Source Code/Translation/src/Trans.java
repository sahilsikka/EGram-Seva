import java.io.OutputStreamWriter;
import java.io.Writer;
import java.sql.Connection;
import java.sql.DriverManager;
import java.io.PrintStream;
import java.io.UnsupportedEncodingException;

import com.memetix.mst.language.Language;
import com.memetix.mst.translate.Translate;
import java.sql.*;


public class Trans {
  public static void main(String[] args) throws Exception {
    // Set your Windows Azure Marketplace client info - See http://msdn.microsoft.com/en-us/library/hh454950.aspx
    Translate.setClientId("sengroup22");
    Translate.setClientSecret("vtEYRQxpYZWGc96wlKG2oEfHkFzet3zawQEDKJ0ADc4=");
    
    try {
        String url = "jdbc:mysql://localhost:3306/test?useUnicode=true&characterEncoding=UTF-8";
        Class.forName("com.mysql.jdbc.Driver").newInstance(); 
        Connection conn = DriverManager.getConnection(url,"root","");
        Statement sqlStmt = conn.createStatement();
        Statement newStmt = conn.createStatement();
        ResultSet rs;
      //  PreparedStatement statement = connection.prepare/createStatement(sql);

        rs = sqlStmt.executeQuery("SELECT * FROM testtb");
        int x;
        while ( rs.next()) {
        	//Retrieve by column name
            System.out.println("hello");
            int id  = rs.getInt("id");
            String att1 = rs.getString("att1");
            //char att1;
            String att2 = rs.getString("att2");

            //Display values
            System.out.print("ID: " + id);
            System.out.print(", First: " + att1);
            System.out.println(", Last: " + att2);
           
           String trans1 = Translate.execute(att1, Language.ENGLISH, Language.HINDI);
           String trans2 = Translate.execute(att2, Language.ENGLISH, Language.HINDI);
  
           PrintStream out = new PrintStream(System.out, true, "UTF-8");
           out.println(trans1);
           out.println(trans2);
           
           x=newStmt.executeUpdate("INSERT INTO testtrans VALUES('"+id+"','"+trans1+"','"+trans2+"');");
          }
        conn.close();
    } catch (Exception e) {
        System.err.println("Got an exception! ");
        System.err.println(e.getMessage());
    }
  
    System.out.println("bye");
  }
}

