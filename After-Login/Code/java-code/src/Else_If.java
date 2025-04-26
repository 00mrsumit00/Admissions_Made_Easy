import java.util.Scanner;
public class Else_If {
    public static void main(String[] args) {
//        System.out.println("Marksheet Grades ");
          Scanner sc = new Scanner(System.in);
//        System.out.println("Enter your Marks ");
//        int marks = sc.nextInt();
//        if(marks>90){
//            System.out.println("A+");
//        }
//        else if (marks>80){
//            System.out.println("A");
//        }
//        else if (marks>70){
//            System.out.println("B");
//        }
//        else if(marks>60){
//            System.out.println("C");
//        }
//        else if(marks>50){
//            System.out.println("D");
//        }
//        else if (marks>=35){
//            System.out.println("Passed");
//        }
//        else{
//            System.out.println("FAIL");
//        }

        System.out.println("Enter your choice ");
        String choice = sc.next();
        switch(choice){
            case "A":
                System.out.println("You got A grade in exam");
                break;
            case "B":
                System.out.println("You got B grade in exam");
                break;
            case "C":
                System.out.println("You got C grade in exam");
                break;
            case "D":
                System.out.println("You got D grade in exam");
                break;
            default:
                System.out.println("You are failed in exam");

        }
    }

}
