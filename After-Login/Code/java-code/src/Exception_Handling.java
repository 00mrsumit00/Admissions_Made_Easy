import java.util.Scanner;

public class Exception_Handling {
    public static void main(String[] args) {
        int[] marks = {87,95,47};
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the index: ");
        int ind = sc.nextInt();
        System.out.println("Enter the number you want to divide with");
        int num = sc.nextInt();
        try {
            System.out.println("The element at this index is: " + marks[ind]);
            System.out.println("The division is: " + marks[ind]/num);
        }
        catch (ArrayIndexOutOfBoundsException e){
            System.out.println("Don't enter a number larger than size of array\n"+e);
        }
        catch (ArithmeticException e){
            System.out.println("Don't enter 0 as input\n" +e);
        }
        catch (Exception e){
            System.out.println("Try changing your input");
        }
        System.out.println("End of program");
    }
}
