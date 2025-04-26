import java.util.Scanner;
public class Arrays_In_Java {
    public static void main(String[] args) {
        // There three ways to create array

        // 1.First declare and then memory allocation
        // int [] marks;             //  --> Declaration
        // marks = new int [5];      //  --> Memory allocation

        // 2. Declare and memory allocation together
        // int [] marks = new int [5];  // --> Declare and memory allocation

        // 3. Declare , memory allocation and initialization together
        int [] marks = {100,19,83,76,85};
        // ".length" is used to print the length of array
        // System.out.println("The length of array is: " + marks.length);

        // we can create array of String also:
        // String [] students = new String [4];
        // String [] students = {"Avi","Vishal","Omkar","Mayur"};
        // System.out.println("The length of String array is: " + students.length);

        // Displaying array in different ways
        System.out.println("Displaying array using for loop");
         for(int i = 0;i<marks.length;i++){
             System.out.println("The array elements are: "+ marks[i]);
         }

        System.out.println("Displaying array using for loop in reverse order");
        for(int i = (marks.length-1);i>=0;i--){
            System.out.println("The array elements are: "+marks[i]);
        }

        System.out.println("Displaying array elements using for-each loop");
        for(int elements:marks){
            System.out.println("The array elements are: " + elements);
        }
        /* for-each loop Syntax:
           for(datatype_of_array elements:array_name){
           System.out.println(elements);
           }

           for-each loop is used when we want only array elements and
           index of elements is not important.
         */
    }
}
