import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;

public class File_Handling{
    public static void main(String[] args) {
        // Creating a file in java
        /*
        File myFile = new File("textfile.txt");
        try{
            myFile.createNewFile();
        }
        catch (Exception e){
            e.printStackTrace();
        }

        // Writing in a file
        try {
            FileWriter fileWriter = new FileWriter("textfile.txt");
            fileWriter.write("This is practice file in java\nThank you Exit");
            fileWriter.close();
        }
        catch (IOException e) {
            e.printStackTrace();
        }

        // Reading a file
        File myFile = new File("textfile.txt");
        try {
            Scanner sc = new Scanner(myFile);
            while(sc.hasNextLine()){
                System.out.println(sc.nextLine());
            }
            sc.close();
        }
        catch (FileNotFoundException e) {
            e.printStackTrace();
        }
         */

        // Deleting a file
        File myFile = new File("textfile.txt");
        myFile.delete();
    }
}