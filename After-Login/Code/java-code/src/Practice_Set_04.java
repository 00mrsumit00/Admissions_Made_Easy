import java.util.Scanner;
public class Practice_Set_04 {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        // Question 1;
//        System.out.println("Enter your marks in subject 1");
//        int phy = sc.nextInt();
//        System.out.println("Enter your marks in subject 2");
//        int che = sc.nextInt();
//        System.out.println("Enter your marks in subject 3");
//        int bio = sc.nextInt();
//        int total = phy + che + bio;
//        System.out.println("Total = " + total);
//        float average = (total * 100)/300.0f;
//        System.out.println("Average = " + average);
//
//        if(phy <= 33 || che <= 33 || bio <= 33){
//            System.out.println("Sorry,You are failed!");
//        }
//        else if(average>=35){
//            System.out.println("Congratulation,You are passed!");
//        }

        // Question 2;
//        System.out.println("Enter your income");
//        long income = sc.nextLong();
//        if(income <= 250000){
//            System.out.println("You don't need to pay Income-tax");
//        }
//        else if(income > 250000 && income <= 500000){
//            System.out.println("You need to pay 5% Income-tax");
//        }
//        else if(income > 500000 && income <= 750000){
//            System.out.println("Ypu need to pay 10% Income-tax");
//        }
//        else if(income > 750000 && income <= 1000000){
//            System.out.println("You need to pay 15% Income-tax");
//        }
//        else{
//            System.out.println("You need to pay 20% Income-tax");
//        }

//                             OR

        // Question 2;
//        System.out.println("Enter your income");
//        float income = sc.nextFloat();
//        float tax = 0 ;
//        if(income<= 250000){
//            tax = 0 ;
//        }
//        else if(income > 250000 && income <= 500000){
//            tax = 0.05f * (income - 250000);
//        }
//        else if(income > 500000 && income <= 1000000){
//            tax =(0.2f * (income - 500000))+ (0.05f * (500000 - 250000));
//        }
//        else if(income > 1000000){
//            tax = (0.3f * (income - 1000000)) + (0.2f * (1000000 - 500000)) + (0.05f * (500000 - 250000));
//        }
//        System.out.println("The employee should pay tax per annum is : " + tax +" Rs");

        // Question 3;
//        System.out.println("Enter the value of day");
//        int day = sc.nextInt();
//        switch(day){
//            case 1 -> System.out.println("Monday");
//            case 2 -> System.out.println("Tuesday");
//            case 3 -> System.out.println("Wednesday");
//            case 4 -> System.out.println("Thursday");
//            case 5 -> System.out.println("Friday");
//            case 6 -> System.out.println("Saturday");
//            case 7 -> System.out.println("Sunday");
//            default -> System.out.println("You entered an invalid value!!");

        // Question 4;
//        System.out.println("Enter any year to check if it's leap year or not");
//        int year = sc.nextInt();
//        if(year%4==0){
//            System.out.println(year +  " is a leap year" );
//        }
//        else{
//            System.out.println(year + " is not a leap year");
//        }

        // Question 5;
        System.out.println("Enter the url of website");
        String url = sc.nextLine();
        if(url.endsWith(".com")){
            System.out.println("It's a Commercial website");
        }
        else if(url.endsWith(".org")){
            System.out.println("It's a Organization website");
        }
        else if(url.endsWith(".in")){
            System.out.println("It's a Indian website");
        }
    }
}
