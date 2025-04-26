import java.util.Scanner;
class Custom_Exception extends Exception{
    @Override
    public String getMessage(){
        return "Invalid Index";
    }
}

public class Practice_Set_14 {
    public static int meth() throws Custom_Exception{
        int[] marks = {87, 86, 34, 98, 83, 67};
        Scanner sc = new Scanner(System.in);
        int att = 1;
            System.out.println("Enter the index of array: ");
            int ind = sc.nextInt();
                System.out.println("The element at given index is: " + marks[ind]);
                return marks[ind];
    }
    public static void main(String[] args) {
        // Problem 1
        // int a = 7  --> Logical error

        // Problem 2
//        Scanner sc = new Scanner(System.in);
//        int a = 1000;
//        System.out.println("Enter a number: ");
//        try{
//            int b = sc.nextInt();
//            System.out.println("The Division = " + a/b);
//        }
//        catch (ArithmeticException e){
//            System.out.println("Hahaha...");
//        }
//        catch(IllegalArgumentException e){
//            System.out.println("Hehehe...");
//        }

        // Problem 3
//        int[] marks = {87,86,34,98,83,67};
//        Scanner sc = new Scanner(System.in);
//        int att = 1;
//        while(true) {
//            System.out.println("Enter the index of array: ");
//            int ind = sc.nextInt();
//            try {
//                System.out.println("The element at given index is: " + marks[ind]);
//                 break;
//            }
////            catch (ArrayIndexOutOfBoundsException e) {
////                System.out.println("Enter a index less than " + marks.length);
////            }
//            catch (Exception e) {
//                System.out.println("Exception");
//            }
//            att++;
//            if(att>5) {
//                System.out.println("Error");
//                try {
//                    throw new Custom_Exception();
//                }
//                catch (Custom_Exception e){
//                    System.out.println(e.getMessage());
//                }
//                break;
//            }
//        }

        // Problem  4
        try {
            System.out.println(meth());
        }
        catch (Exception e){
            System.out.println(e);
            System.out.println(e.getMessage());
        }
    }
}
