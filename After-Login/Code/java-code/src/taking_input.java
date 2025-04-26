import java.util.Scanner;
       public class taking_input{
           public static void main(String[] args) {
               System.out.println("Program to take input in JAVA");
               Scanner take = new Scanner(System.in);
               System.out.println("Enter first number");
               int a = take.nextInt();
               System.out.println("Enter second number");
               int b = take.nextInt();
               int sum = a + b;
               System.out.println("The sum of these numbers is ");
               System.out.println(sum);

           }
       }