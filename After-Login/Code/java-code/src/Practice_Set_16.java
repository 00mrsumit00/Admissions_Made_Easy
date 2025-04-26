import java.io.FileWriter;

public class Practice_Set_16 {
    public static void main(String[] args) {
        int num = 6;
        String table = "";
        for (int j = 1; j < 11; j++) {
            table += num + " X " + j + " = " + num * j;
            table += "\n";
            try {
                FileWriter fileWriter = new FileWriter("mytext.txt");
                fileWriter.write(table);
                fileWriter.close();
            }
            catch (Exception e) {
                System.out.println(e);
            }
        }
    }
}
