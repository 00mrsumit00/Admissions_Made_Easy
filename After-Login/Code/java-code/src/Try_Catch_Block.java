import java.util.Scanner;

public class Try_Catch_Block {
    public static void main(String[] args) {
        int[] marks = new int[3];
        marks[0] = 78;
        marks[1] = 84;
        marks[2] = 98;
        Scanner sc = new Scanner(System.in);
        boolean bool = true;
        while(bool) {
            System.out.println("Enter the value of index: ");
            int ind = sc.nextInt();
            System.out.println("Enter any number: ");
            int num = sc.nextInt();
//        try {
//            System.out.println("The value is: " + marks[ind]);
//            System.out.println("The Division is: " + (marks[ind] / num));
//        } catch (ArrayIndexOutOfBoundsException e) {
//            System.out.println("cannot run this code");
//            System.out.println(e);
//        } catch (ArithmeticException e) {
//            System.out.println("cannot perform this operation");
//            System.out.println(e);
//        } catch (Exception e) {
//            System.out.println("cannot perform this operation");
//            System.out.println(e);
//        }

            // NESTED-TRY
            try {
                System.out.println("The element at given index is: " + marks[ind]);
                try {
                    System.out.println("The result of division is: " + (marks[ind] / num));
                    bool = false;

                } catch (ArithmeticException e) {
                    System.out.println("cannot execute this code");
                    System.out.println(e);
                }
            } catch (ArrayIndexOutOfBoundsException e) {
                System.out.println("Enter a valid index");
                System.out.println("Error occurred: " + e);
            } catch (Exception e) {
                System.out.println("There is a error " + e);
            }
        }
    }
}
