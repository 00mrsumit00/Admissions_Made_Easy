import java.util.Scanner;
public class p1 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        System.out.println("Enter your marks in Physics ");
        int physics = scan.nextInt();
        System.out.println("Enter your marks in Chemistry ");
        int chemistry = scan.nextInt();
        System.out.println("Enter your marks in Biology ");
        int biology = scan.nextInt();
        System.out.println("Enter your marks in Mathematics ");
        int math = scan.nextInt();
        System.out.println("Enter your marks in English ");
        int english = scan.nextInt();
        float average = (physics + chemistry + biology + math + english)*100/500.0f;
        System.out.println("Percentage = " + average);


    }
}
