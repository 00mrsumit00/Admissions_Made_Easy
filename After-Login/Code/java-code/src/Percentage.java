import java.util.Scanner;
public class Percentage {
    public static void main(String[] args) {

        Scanner take_it = new Scanner(System.in);
        // Queation 1:
        System.out.println("Calculate the Percentage of marks ");
        System.out.println("Enter your marks in all subjects ");
        int sub1 = take_it.nextInt();
        int sub2 = take_it.nextInt();
        int sub3 = take_it.nextInt();
        int sub4 = take_it.nextInt();
        int sub5 = take_it.nextInt();
        int total = sub1+sub2+sub3+sub4+sub5;
        float average = (sub1+sub2+sub3+sub4+sub5)/5.0f;
        System.out.println("Total = " + total);
        System.out.print("Average = ");
        System.out.print(average);
        System.out.println(" %");

        // Question 2:
//        System.out.println("What is your name ? ");
//        String name = take_it.next();
//        System.out.println("Hello , Mr. " + name + ", How are you ? ");

        // Question 3:
//        System.out.println("Enter value in Kilometers");
//        double distance_in_km = take_it.nextInt();
//        double distance_in_miles = (0.621371*distance_in_km);
//        System.out.println("Converted in Miles");
//        System.out.println("Miles = " + distance_in_miles );
        //Question 4 :
//        System.out.println("Enter a number");
//        System.out.println(take_it.hasNextInt());

    }
}
