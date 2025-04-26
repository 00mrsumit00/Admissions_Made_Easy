import java.util.Scanner;
class CanNotDivideByZeroException extends Exception{
    @Override
    public String toString(){
        return "Can not divide a number by zero";
    }
}
class MaxInputException extends Exception{
    @Override
    public String toString(){
        return "Maximum input is allowed upto 10000";
    }
}
class MaxMultiplierException extends Exception{
    @Override
    public String toString(){
        return "Maximum input for Multiplication is allowed upto 7000";
    }
}
class InvalidInputException extends Exception{
    @Override
    public String toString(){
        return "Invalid Input";
    }
}
public class Exercise_6 {
    public static void main(String[] args) {
        int a;
        int b;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter first number: ");
        a = sc.nextInt();
        System.out.println("Enter second number: ");
        b = sc.nextInt();
        if(a>10000 || b>10000){
            try{
                throw new MaxInputException();
            }
            catch (MaxInputException e){
                System.out.println(e);
                return;
            }
        }
        String choice;
        System.out.println("Enter your choice(+ , - , * , /): ");
        choice = sc.next();
        if(!choice.equals("+") || !choice.equals("-") ||!choice.equals("*") ||!choice.equals("/")){
            try{
                throw new InvalidInputException();
            }
            catch (InvalidInputException e){
                System.out.println(e);
            }
        }
        switch (choice){
            case "+"-> System.out.println(a + b);
            case "-"-> System.out.println(a - b);
            case "*"-> {
                if(a>7000 || b>7000){
                    try{
                        throw new MaxMultiplierException();
                    }
                    catch (MaxMultiplierException e){
                        System.out.println(e);
                    }
                }
                else{
                    System.out.println(a * b);
                }
            }
            case "/"-> {
                if(b == 0){
                    try {
                        throw new CanNotDivideByZeroException();
                    }
                    catch (CanNotDivideByZeroException e){
                        System.out.println(e);
                    }
                }
                else {
                    System.out.println(a / b);
                }
            }
            default -> System.out.println("Choose a valid operation");
        }
    }
}
