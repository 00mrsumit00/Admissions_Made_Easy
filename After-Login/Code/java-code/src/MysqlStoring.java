import java.sql.*;
import java.util.Scanner;

public class MysqlStoring {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter your Roll No : ");
        int rollNo = sc.nextInt();
        System.out.print("Enter your first name : ");
        sc.nextLine();
        String fName = sc.nextLine();
        System.out.print("Enter your last name : ");
        String lName = sc.nextLine();
        System.out.print("Enter your class : ");
        String Class = sc.nextLine();
        System.out.print("Enter your Phone No : ");
        String phoneNo = sc.nextLine();
        System.out.print("Enter your E-Mail : ");
        String eMail = sc.nextLine();
        System.out.print("Enter your address : ");
        String address = sc.nextLine();

        // Storing in MySQL
        try{
            String url = "jdbc:mysql://localhost:3306/avinash_22368";
            String user = "root";
            String password = "Avinash@1299";

            Connection con = DriverManager.getConnection(url,user,password);

            String query = "insert into Student_Details values (?, ?, ?, ?, ?, ?, ?)";
            PreparedStatement pstmt = con.prepareStatement(query);

            pstmt.setInt(1,rollNo);
            pstmt.setString(2,fName);
            pstmt.setString(3,lName);
            pstmt.setString(4,Class);
            pstmt.setString(5,phoneNo);
            pstmt.setString(6,eMail);
            pstmt.setString(7,address);

            pstmt.executeUpdate();
            System.out.println("Query executed...");
            con.close();
        }
        catch (Exception e){
            e.printStackTrace();
        }
    }
}
