import java.sql.*;
public class MysqlCon{
    public static void main(String[] args) {
        try {
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/avinash_22368", "root", "Avinash@1299");
            Statement stmt = con.createStatement();
            String query = "insert into my_bills values(9,'Recharge',239,'2023-01-01')";
            // stmt.execute(query);
            String s2 = "select * from my_bills";
            ResultSet rs = stmt.executeQuery(s2);
            while (rs.next()) {
                System.out.println(rs.getInt(1) +"\t"+ rs.getString(2) +"\t"+ rs.getInt(3) +"\t"+ rs.getDate(4));
            }
            System.out.println("Query executed...");
            con.close();
        }
        catch (Exception e){
            System.out.println(e);
        }
    }
}


