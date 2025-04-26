import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.util.Scanner;

public class Join {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        final String url = "jdbc:mysql://localhost:3306/avinash_22368";
        final String username = "root";
        final String password = "Avinash@1299";
        System.out.print("Empid: ");
        int empid = sc.nextInt();
        System.out.print("Name: ");
        sc.nextLine();
        String name = sc.nextLine();
        System.out.print("City: ");
        String city = sc.nextLine();
        try{
            Connection con = DriverManager.getConnection(url,username,password);
            String query = "insert into emp values(?, ?, ?)";
            PreparedStatement pstmt = con.prepareStatement(query);
            pstmt.setInt(1,empid);
            pstmt.setString(2,name);
            pstmt.setString(3,city);
            pstmt.executeUpdate();
            pstmt.close();
            con.close();
            System.out.println("Query executed...");
        }
        catch (Exception e){
            e.printStackTrace();
        }
    }
}
